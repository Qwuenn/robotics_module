@extends('_layouts.module')

@push('styles')
    <link rel="stylesheet" href="{{ $page->link(mix('css/codebox.css', 'assets/build')) }}">
@endpush

@section('introduction')
    <h1>Code</h1>
    <p>
        The code for the Camera Drone is divided into two parts: the Arduino Drone code and the Controller code.
    </p>
    <p>&nbsp;</p>
@endsection

@section('table_of_contents')
    @include('_toc.toc', [ 'items' => [
        'Drone Code',
        'Controller Code'
    ]])
@endSection

@section('content')

<h3 id="drone-code">Drone Code</h3>
@include('_partials.codebox', [ 'code' => 
'// RC Receiver Arduino Code
// =====================================================
// Libraries for Communication
#include <SPI.h>      // Wireless Communications
#include <nRF24L01.h> // Wireless Communications
#include <RF24.h>     // Wireless Communications

// =====================================================
// Declaration of Neccessary Variables
RF24 radio(10, 9); // nRF24L01 (CE, CSN) connection to Arduino
const byte address[6] = "00001"; // Communication Address
unsigned long timeLastReceive = 0;
unsigned long timeCurrent = 0;

// =====================================================
// Input Structure for Controller (Maximum bytes for nRF24L01 is 32 bytes buffer limit)
// Or the maximum amount of data the module can send at once
struct Data_Package {
  byte j1_PotX;
  byte j1_PotY;
  byte j1_Button;
  byte j2_PotX;
  byte j2_PotY;
  byte j2_Button;
  byte pot1;
  byte pot2;
  byte t_Switch1;
  byte t_Switch2;
  byte button1;
  byte button2;
  byte button3;
  byte button4;
};

Data_Package data; //Create a variable with the above structure
// =====================================================

void setup() {
  Serial.begin(9600);
  radio.begin();
  radio.openReadingPipe(0, address);
  radio.setAutoAck(false);
  radio.setDataRate(RF24_250KBPS);
  radio.setPALevel(RF24_PA_LOW);
  radio.startListening(); //  Set the module as receiver
  resetData();
}

// =====================================================

void loop() {
  // Check whether there is data to be received
  if (radio.available()) {
    radio.read(&data, sizeof(Data_Package)); // Read the whole data and store it into the \'data\' structure
    timeLastReceive = millis(); // At this moment we have received the data
  }
  // Check whether we keep receving data, or we have a connection between the two modules
  timeCurrent = millis();
  if ( timeCurrent - timeLastReceive > 1000 ) { // If current time is more then 1 second since we have recived the last data, that means we have lost connection
    resetData(); // If connection is lost, reset the data. It prevents unwanted behavior, for example if a drone has a throttle up and we lose connection, it can keep flying unless we reset the values
  }
  // Print the data in the Serial Monitor
  Serial.print("j1_PotX: ");
  Serial.print(data.j1_PotX);
  Serial.print("; j1_PotY: ");
  Serial.print(data.j1_PotY);
  Serial.print("; button1: ");
  Serial.print(data.button1);
  Serial.print("; j2_PotX: ");
  Serial.println(data.j2_PotX);
}

// =====================================================

void resetData() {
  // Reset the values when there is no radio connection - Set initial default values
  data.j1_PotX = 127;
  data.j1_PotY = 127;
  data.j2_PotX = 127;
  data.j2_PotY = 127;
  data.j1_Button = 1;
  data.j2_Button = 1;
  data.pot1 = 1;
  data.pot2 = 1;
  data.t_Switch1 = 1;
  data.t_Switch2 = 1;
  data.button1 = 1;
  data.button2 = 1;
  data.button3 = 1;
  data.button4 = 1;
}

// =====================================================
'
])

<p>&nbsp;</p>

<h3 id="controller-code">Controller Code</h3>

@include('_partials.codebox', [ 'code' => 
'// RC Transmitter Arduino Code
// =====================================================
// Libraries for Communication
#include <SPI.h>      // Wireless Communications
#include <nRF24L01.h> // Wireless Communications
#include <RF24.h>     // Wireless Communications
#include <Wire.h>     // I2C Communications

// =====================================================
// Defining Digital Inputs
#define jButton1 1  // Joystick Button 1
#define jButton2 0  // Joystick Button 2
#define toggleSwitch1 7   // Toggle Switch 1
#define toggleSwitch2 4   // Toggle Switch 1
#define B1 8   // Button 1
#define B2 9   // Button 2
#define B3 2   // Button 3
#define B4 3   // Button 4

// =====================================================
// Declaration of Neccessary Variables
const int MPU = 0x68; // MPU6050 I2C address
float accX, accY, accZ; // Accelerometer Variables
float gyroX, gyroY, gyroZ; // Gyroscope Variables
float accAngleX, accAngleY, gyroAngleX, gyroAngleY; // Angles Variables
float angleX, angleY;
float accErrorX, accErrorY, gyroErrorX, gyroErrorY; // Error Variables
float timeElapsed, timeCurrent, timePrevious; // Time Variables
int c = 0;
RF24 radio(5, 6);   // nRF24L01 (CE, CSN) connection to Arduino
const byte address[6] = "00001"; // Communication Address

// =====================================================
// Input Structure for Controller (Maximum bytes for nRF24L01 is 32 bytes buffer limit)
// Or the maximum amount of data the module can send at once
struct Data_Package {
  byte j1_PotX;
  byte j1_PotY;
  byte j1_Button;
  byte j2_PotX;
  byte j2_PotY;
  byte j2_Button;
  byte pot1;
  byte pot2;
  byte t_Switch1;
  byte t_Switch2;
  byte button1;
  byte button2;
  byte button3;
  byte button4;
};

Data_Package data; // Variable for the structure above
// =====================================================

void setup() {
  Serial.begin(9600); // Serial Monitor

  start_MPU6050(); // Initialize Interface to the MPU6050

  //compute_IMU_error(); // Call this function if you need to get the IMU error values (remove comment sign to the function below)

  // Defining the radio communication
  radio.begin();
  radio.openWritingPipe(address);
  radio.setAutoAck(false);
  radio.setDataRate(RF24_250KBPS);
  radio.setPALevel(RF24_PA_LOW);

  // Arduino Internal Pull-up resistors Activation
  pinMode(jButton1, INPUT_PULLUP);
  pinMode(jButton2, INPUT_PULLUP);
  pinMode(toggleSwitch1, INPUT_PULLUP);
  pinMode(toggleSwitch2, INPUT_PULLUP);
  pinMode(B1, INPUT_PULLUP);
  pinMode(B2, INPUT_PULLUP);
  pinMode(B3, INPUT_PULLUP);
  pinMode(B4, INPUT_PULLUP);

  // Set default inputs
  data.j1_PotX = 127; // Values from 0 to 255.
  data.j1_PotY = 127; // When the joystick is at rest or not being moved,
  data.j2_PotX = 127; // the value is at default or 127,
  data.j2_PotY = 127; // which is the middle of 0 and 255.
  
  data.j1_Button = 1;
  data.j2_Button = 1;
  data.pot1 = 1;
  data.pot2 = 1;
  data.t_Switch1 = 1;
  data.t_Switch2 = 1;
  data.button1 = 1;
  data.button2 = 1;
  data.button3 = 1;
  data.button4 = 1;
}

// =====================================================

void loop() {
  // Analog Read all analog inputs and map or convert values from 0-1023 to 0-255
  data.j1_PotX = map(analogRead(A1), 0, 1023, 0, 255); // Convert the analog read value from 0 to 1023 into a BYTE value from 0 to 255
  data.j1_PotY = map(analogRead(A0), 0, 1023, 0, 255);
  data.j2_PotX = map(analogRead(A2), 0, 1023, 0, 255);
  data.j2_PotY = map(analogRead(A3), 0, 1023, 0, 255);
  data.pot1 = map(analogRead(A7), 0, 1023, 0, 255);
  data.pot2 = map(analogRead(A6), 0, 1023, 0, 255);

  // Digital Read all digital inputs
  data.j1_Button = digitalRead(jButton1);
  data.j2_Button = digitalRead(jButton2);
  data.t_Switch2 = digitalRead(toggleSwitch2);
  data.button1 = digitalRead(B1);
  data.button2 = digitalRead(B2);
  data.button3 = digitalRead(B3);
  data.button4 = digitalRead(B4);
  // Check if toggleSwitch1 is switched ON
  if (digitalRead(toggleSwitch1) == 0) {
    read_IMU();    // Use MPU6050 instead of Joystick 1 for controling left, right, forward and backward movements
  }
  // Send all the data from the structure to the receviver
  radio.write(&data, sizeof(Data_Package));
}

// =====================================================

void start_MPU6050() {
  Wire.begin();                      // Initialize comunication
  Wire.beginTransmission(MPU);       // Start communication with MPU6050 // MPU=0x68
  Wire.write(0x6B);                  // Communicate with 6B register
  Wire.write(0x00);                  // Make reset - place a 0 into the 6B register
  Wire.endTransmission(true);       // End the transmission

  // Accelerometer Configuration
  Wire.beginTransmission(MPU);
  Wire.write(0x1C);                  // Communicate with ACCEL_CONFIG register
  Wire.write(0x10);                  // Set the register bits as 00010000 (+/- 8g full scale range)
  Wire.endTransmission(true);

  // Gyroscope Configuration
  Wire.beginTransmission(MPU);
  Wire.write(0x1B);                   // Communicate with GYRO_CONFIG register (1B hex)
  Wire.write(0x10);                   // Set the register bits as 00010000 (1000dps full scale)
  Wire.endTransmission(true);
}

// =====================================================
/* Call this function to compute for IMU error
void compute_IMU_error() {
  while (c < 200) { // Read accelerometer values 200 times
    Wire.beginTransmission(MPU);
    Wire.write(0x3B);
    Wire.endTransmission(false);
    Wire.requestFrom(MPU, 6, true);
    accX = (Wire.read() << 8 | Wire.read()) / 4096.0 ;
    accY = (Wire.read() << 8 | Wire.read()) / 4096.0 ;
    accZ = (Wire.read() << 8 | Wire.read()) / 4096.0 ;
    // Add all Accelerometer Readings
    accErrorX = accErrorX + ((atan((accY) / sqrt(pow((accX), 2) + pow((accZ), 2))) * 180 / PI));
    accErrorY = accErrorY + ((atan(-1 * (accX) / sqrt(pow((accY), 2) + pow((accZ), 2))) * 180 / PI));
    c++;
  }
  // Divide the sum by 200 to get the error value
  accErrorX = accErrorX / 200;
  accErrorY = accErrorY / 200;
  c = 0;
  // Read gyro values 200 times
  while (c < 200) {
    Wire.beginTransmission(MPU);
    Wire.write(0x43);
    Wire.endTransmission(false);
    Wire.requestFrom(MPU, 4, true);
    gyroX = Wire.read() << 8 | Wire.read();
    gyroY = Wire.read() << 8 | Wire.read();
    // Add all Gyroscope Readings
    gyroErrorX = gyroErrorX + (gyroX / 32.8);
    gyroErrorY = gyroErrorY + (gyroY / 32.8);
    c++;
  }
  //Divide the sum by 200 to get the error value
  gyroErrorX = gyroErrorX / 200;
  gyroErrorY = gyroErrorY / 200;
  // Print the error values on the Serial Monitor
  Serial.print("accErrorX: ");
  Serial.println(accErrorX);
  Serial.print("accErrorY: ");
  Serial.println(accErrorY);
  Serial.print("gyroErrorX: ");
  Serial.println(gyroErrorX);
  Serial.print("gyroErrorY: ");
  Serial.println(gyroErrorY);
}
*/
// =====================================================

void read_IMU() {
  // Read acceleromter data
  Wire.beginTransmission(MPU);
  Wire.write(0x3B); // Start with register 0x3B (ACCEL_XOUT_H)
  Wire.endTransmission(false);
  Wire.requestFrom(MPU, 6, true); // Read 6 registers total, each axis value is stored in 2 registers
  //For a range of +-8g, we need to divide the raw values by 4096, according to the datasheet
  accX = (Wire.read() << 8 | Wire.read()) / 4096.0; // X-axis value
  accY = (Wire.read() << 8 | Wire.read()) / 4096.0; // Y-axis value
  accZ = (Wire.read() << 8 | Wire.read()) / 4096.0; // Z-axis value
  // Calculating angle values using
  accAngleX = (atan(accY / sqrt(pow(accX, 2) + pow(accZ, 2))) * 180 / PI) + 1.15; // accErrorX ~(-1.15) See the compute_IMU_error()custom function for more details
  accAngleY = (atan(-1 * accX / sqrt(pow(accY, 2) + pow(accZ, 2))) * 180 / PI) - 0.52; // accErrorX ~(0.5)
  // Read gyro data
  timePrevious = timeCurrent;        // Previous time is stored before the actual time read
  timeCurrent = millis();            // Current time actual time read
  timeElapsed = (timeCurrent - timePrevious) / 1000;   // Divide by 1000 to get seconds
  Wire.beginTransmission(MPU);
  Wire.write(0x43); // Gyro data first register address 0x43
  Wire.endTransmission(false);
  Wire.requestFrom(MPU, 4, true); // Read 4 registers total, each axis value is stored in 2 registers
  gyroX = (Wire.read() << 8 | Wire.read()) / 32.8; // For a 1000dps range we have to divide first the raw value by 32.8, according to the datasheet
  gyroY = (Wire.read() << 8 | Wire.read()) / 32.8;
  gyroX = gyroX + 1.85; //// gyroErrorX ~(-1.85)
  gyroY = gyroY - 0.15; // gyroErrorY ~(0.15)
  // Currently the raw values are in degrees per seconds, deg/s, so we need to multiply by sendonds (s) to get the angle in degrees
  gyroAngleX = gyroX * timeElapsed;
  gyroAngleY = gyroY * timeElapsed;
  // Complementary filter - combine acceleromter and gyro angle values
  angleX = 0.98 * (angleX + gyroAngleX) + 0.02 * accAngleX;
  angleY = 0.98 * (angleY + gyroAngleY) + 0.02 * accAngleY;
  // Map the angle values from -90deg to +90 deg into values from 0 to 255, like the values we are getting from the Joystick
  data.j1_PotX = map(angleX, -90, +90, 255, 0);
  data.j1_PotY = map(angleY, -90, +90, 0, 255);
}

// =====================================================
'
])
@endsection

@push('scripts')
    <script src="{{ $page->link(mix('js/codebox.js', 'assets/build')) }}"></script>
@endpush