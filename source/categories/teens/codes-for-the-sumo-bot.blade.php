@extends('_layouts.module')

@push('styles')
    <link rel="stylesheet" href="{{ $page->link(mix('css/codebox.css', 'assets/build')) }}">
@endpush

@section('introduction')
    <h1 id="introduction">Codes for the Sumo Bot</h1>
    <p class="mb-0">
        As proposed, there should be many programs available for every Sumo Bot to modify its behavior when battling. The users
        can pick their Sumo Bot’s fighting style based on their preference.
    </p>
    <p>&nbsp;</p>
@endsection

@section('table_of_contents')
    @include('_toc.toc', ['items' => [
        'Introduction',
        'Code 1',
        'Code 2',
        'Code 3'
    ]])
@endsection

@section('content')
<h3 id="code-1">Code 1</h3>
@include('_partials.codebox', [ 'code' => 
'//===========================================================
// Erovoutika Sumo Bot 1

#include <tcrt5k.h> // IR SENSOR TCRT5000 LIBRARY
#include <L298N_MotorDriver.h> // L298N MOTOR DRIVER LIBRARY
#include <NewPing.h> // ULTRASONIC SENSOR HCSR04 LIBRARY

//===========================================================

/*ULTRASONIC SENSOR to ARDUINO UNO CONNECTION*/
#define Trig_Pin A0 // trigger pin (input)
#define Echo_Pin A1 // echo pin (output)
#define Max_Distance 200 // sets maximum distance to 200cm
NewPing sonar(Trig_Pin, Echo_Pin, Max_Distance);
int Distance; // in cm

//===========================================================

/*TCRT5000 IR SENSOR to ARDUINO UNO CONNECTION*/
#define IR_Front A2 // front sensor
#define IR_Back A3 // rear sensor
int Front; // unit not yet known
int Back; // unit not yet known

//===========================================================

/*MOTOR DRIVER*/
// 12V DC Motor A Connections
//int Enable_MotorA = 5V; // Motor A Speed Control Pin
int Input_1 = 5; // Motor A Direction Control Pin
int Input_2 = 6; // Motor A Direction Control Pin
// 12V DC Motor B Connections
//int Enable_MotorB = 5V; // Motor B Speed Control Pin
int Input_3 = 9; // Motor B Direction Control Pin
int Input_4 = 10; // Motor B Direction Control Pin

//===========================================================

void setup() {
  //pinMode(Enable_MotorA, OUTPUT); // set enA Pin as Output
  //pinMode(Enable_MotorB, OUTPUT); // set enB Pin as Ourput
  pinMode(Input_1, OUTPUT); // set IN1 Pin as Output
  pinMode(Input_2, OUTPUT); // set IN2 Pin as Output
  pinMode(Input_3, OUTPUT); // set IN3 Pin as Output
  pinMode(Input_4, OUTPUT); // set IN4 Pin as Output

  // Initial State of Motors - Turned Off
  digitalWrite(Input_1, LOW);
  digitalWrite(Input_2, LOW);
  digitalWrite(Input_3, LOW);
  digitalWrite(Input_4, LOW);
}

//===========================================================

void loop() {
  delay(50); Search();
  delay(50); Distance = sonar.ping_cm(); // Sends a ping and get the distance in whole centimeters
  delay(50); Attack();
  Front = analogRead(IR_Front); // reads front ir sensor value and save to "Front"
  Back = analogRead(IR_Back); // reads back ir sensor value and save to "Back"
  delay(50);
  if (Front < 650) {
    Stop();
    delay(50);
    moveReverse();
    //delay(500);
    Stop();
  }
  if (Back < 650) {
    Stop();
    delay(50);
    moveForward();
    //delay(500);
    Stop();
  }
}

//===========================================================

void Search() {
  rotateLeft(); moveForward(); // Search Left
  delay(50);
  Distance = sonar.ping_cm(); // Sends a ping and get the distance in whole centimeters
  
  delay(50); // slight delay for sensor reading
  Front = analogRead(IR_Front); // reads front ir sensor value and save to "Front"
  Back = analogRead(IR_Back); // reads back ir sensor value and save to "Back"
  
  if (Distance > 20) { // 21-200(max)
    moveReverse(); rotateRight(); moveForward(); // if distance too far, Reverse and Search Right; proceed if not
  }
  
  if (Front < 650) { // if front ir too close to the line then stop; proceed if not
    Stop();
    delay(50);
    moveReverse();
    //delay(500);
    Stop();
  }
  if (Back < 650) { // if back ir too close to the line then stop; proceed if not
    Stop();
    delay(50);
    moveForward();
    //delay(500);
    Stop();
  }
}

//===========================================================

void Attack() {
  if (Distance < 21) {
    while (Distance < 21) { // iniates attack if opponent is too close
      /* Attack Pattern */
      moveForward(); delay(250); Stop(); // Attack Forwards for 750ms and stop 100ms
      moveReverse(); Stop(); // Reverses for 500ms and stop 100ms
      rotateLeft(); Stop(); // Attacks Left for 500ms and stop 100ms
      moveReverse(); Stop(); // Reverses for 500ms and stop 100ms
      rotateRight(); Stop(); // Attacks Right for 500ms and stop 100ms

      // Repeat indefinetely, breaks if distance is not < 21 or Front && Back is not < 650

      delay(50); // slight delay for sensor reading
      Front = analogRead(IR_Front); // reads front ir sensor value and save to "Front"
      Back = analogRead(IR_Back); // reads back ir sensor value and save to "Back"
      if (Front < 650 || Back < 650) { // 650 means white line
        break; // If front or back ir sensor detects the white line within 650 ... break
        delay(50);
      }
    }
    Stop();
  }
}

//===========================================================

void moveForward() { // 1 0 1 0
  digitalWrite(Input_1, HIGH);
  digitalWrite(Input_2, LOW);
  digitalWrite(Input_3, HIGH);
  digitalWrite(Input_4, LOW);
  delay(500); // moves FORWARD for half a second
}

//===========================================================

void moveReverse() { // 0 1 0 1
  digitalWrite(Input_1, LOW);
  digitalWrite(Input_2, HIGH);
  digitalWrite(Input_3, LOW);
  digitalWrite(Input_4, HIGH);
  delay(500); // moves BACKWARD for half a second
}

//===========================================================

void rotateLeft() { // 1 0 0 1
  digitalWrite(Input_1, HIGH);
  digitalWrite(Input_2, LOW);
  digitalWrite(Input_3, LOW);
  digitalWrite(Input_4, HIGH);
  delay(500); // Rotates LEFT and delays half a second before next move
}

//===========================================================

void rotateRight() { // 0 1 1 0
  digitalWrite(Input_1, LOW);
  digitalWrite(Input_2, HIGH);
  digitalWrite(Input_3, HIGH);
  digitalWrite(Input_4, LOW);
  delay(500); // Rotates RIGHT and delays half a second before next move
}

//===========================================================

void Stop() {
  digitalWrite(Input_1, LOW);
  digitalWrite(Input_2, LOW);
  digitalWrite(Input_3, LOW);
  digitalWrite(Input_4, LOW);
  delay(100); // Stops and delays before next move
}

//===========================================================
'
])

<p>&nbsp;</p>

<h3 id="code-2">Code 2</h3>
@include('_partials.codebox', [ 'code' =>
'//===========================================================
// Erovoutika Sumo Bot 1

#include <tcrt5k.h> // IR SENSOR TCRT5000 LIBRARY
#include <L298N_MotorDriver.h> // L298N MOTOR DRIVER LIBRARY
#include <NewPing.h> // ULTRASONIC SENSOR HCSR04 LIBRARY

//===========================================================

/*ULTRASONIC SENSOR to ARDUINO UNO CONNECTION*/
#define Trig_Pin A0 // trigger pin (input)
#define Echo_Pin A1 // echo pin (output)
#define Max_Distance 200 // sets maximum distance to 200cm
NewPing sonar(Trig_Pin, Echo_Pin, Max_Distance);
int Distance; // in cm

//===========================================================

/*TCRT5000 IR SENSOR to ARDUINO UNO CONNECTION*/
#define IR_Front A2 // front sensor
#define IR_Back A3 // rear sensor
int Front; // unit not yet known
int Back; // unit not yet known

//===========================================================

/*MOTOR DRIVER*/
// 12V DC Motor A Connections
//int Enable_MotorA = 5V; // Motor A Speed Control Pin
int Input_1 = 5; // Motor A Direction Control Pin
int Input_2 = 6; // Motor A Direction Control Pin
// 12V DC Motor B Connections
//int Enable_MotorB = 5V; // Motor B Speed Control Pin
int Input_3 = 9; // Motor B Direction Control Pin
int Input_4 = 10; // Motor B Direction Control Pin

//===========================================================

void setup() {
  //pinMode(Enable_MotorA, OUTPUT); // set enA Pin as Output
  //pinMode(Enable_MotorB, OUTPUT); // set enB Pin as Ourput
  pinMode(Input_1, OUTPUT); // set IN1 Pin as Output
  pinMode(Input_2, OUTPUT); // set IN2 Pin as Output
  pinMode(Input_3, OUTPUT); // set IN3 Pin as Output
  pinMode(Input_4, OUTPUT); // set IN4 Pin as Output

  // Initial State of Motors - Turned Off
  digitalWrite(Input_1, LOW);
  digitalWrite(Input_2, LOW);
  digitalWrite(Input_3, LOW);
  digitalWrite(Input_4, LOW);
}

//===========================================================

void loop() {
  delay(50); Search();
  delay(50); Distance = sonar.ping_cm(); // Sends a ping and get the distance in whole centimeters
  delay(50); Attack();
  delay(50); Distance = sonar.ping_cm(); // Sends a ping and get the distance in whole centimeters
  delay(50); Defense();
  Front = analogRead(IR_Front); // reads front ir sensor value and save to "Front"
  Back = analogRead(IR_Back); // reads back ir sensor value and save to "Back"
  delay(50);
  if (Front < 650) {
    Stop();
    delay(50);
    moveReverse();
    //delay(500);
    Stop();
  }
  if (Back < 650) {
    Stop();
    delay(50);
    moveForward();
    //delay(500);
    Stop();
  }
}

//===========================================================

void Search() {
  delay(50); Distance = sonar.ping_cm(); // Sends a ping and get the distance in whole centimeters

  delay(50); // slight delay for sensor reading
  Front = analogRead(IR_Front); // reads front ir sensor value and save to "Front"
  Back = analogRead(IR_Back); // reads back ir sensor value and save to "Back"

  if (Distance > 20) { // 21-200(max)
    while (Distance > 20) {
      moveForward(); Stop();
      moveReverse(); Stop();
      rotateRight(); moveForward(); Stop();
      moveReverse(); Stop();
      rotateLeft(); moveForward(); Stop();
      moveReverse(); Stop();

      if (Front < 650 || Back < 650) {
        break;
        Stop();
      }
    }
  }

  if (Front < 650) { // if front ir too close to the line then stop; proceed if not
    Stop();
    delay(50);
    moveReverse();
    //delay(500);
    Stop();
  }
  if (Back < 650) { // if back ir too close to the line then stop; proceed if not
    Stop();
    delay(50);
    moveForward();
    //delay(500);
    Stop();
  }
}

//===========================================================

void Attack() {
  if (Distance < 21) {
    while (Distance < 21) { // iniates attack if opponent is too close
      /* Attack Pattern */
      rotateRight(); moveForward(); Stop(); // Attacks Right for 1s and stop 100ms
      moveReverse(); Stop(); // Reverses for 500ms and stop 100ms
      moveForward(); Stop(); // Attacks for 500ms and stop 100ms
      rotateLeft(); moveForward(); Stop(); // Attacks Left for 1s and stop 100ms
      moveReverse(); Stop(); // Reverses for 500ms and stop 100ms

      // Repeat indefinetely, breaks if distance is not < 21 or Front && Back is not < 650

      delay(50); // slight delay for sensor reading
      Front = analogRead(IR_Front); // reads front ir sensor value and save to "Front"
      Back = analogRead(IR_Back); // reads back ir sensor value and save to "Back"
      if (Front < 650 || Back < 650) { // 650 means white line
        break; // If front or back ir sensor detects the white line within 650 ... break
        delay(50);
      }
    }
    Stop();
  }
}

void Defense() {
  if (Distance < 21) {
    while (Distance < 21) { // run around if too close
      /* Defense Pattern */

      rotateRight(); moveReverse(); Stop(); // Moves Right 500ms then Reverses 500ms and stop 100ms
      rotateLeft(); moveReverse(); Stop(); // Moves Left 500ms then Reverses 500ms and stop 100ms
      moveForward(); Stop(); // Moves Forward for 500ms and stop 100ms
      rotateLeft(); moveReverse(); Stop(); // Moves Left 500ms then Reverses 500ms and stop 100ms
      rotateRight(); moveReverse(); Stop(); // Moves Right 500ms then Reverses 500ms and stop 100ms
      moveForward(); Stop(); // Moves Forward for 500ms and stop 100ms
      
      // Repeat indefinetely, breaks if distance is not < 21 or Front && Back is not < 650

      delay(50); // slight delay for sensor reading
      Front = analogRead(IR_Front); // reads front ir sensor value and save to "Front"
      Back = analogRead(IR_Back); // reads back ir sensor value and save to "Back"
      if (Front < 650 || Back < 650) { // 650 means white line
        break; // If front or back ir sensor detects the white line within 650 ... break
        delay(50);
      }
    }
    Stop();
  }
}

//===========================================================

void moveForward() { // 1 0 1 0
  digitalWrite(Input_1, HIGH);
  digitalWrite(Input_2, LOW);
  digitalWrite(Input_3, HIGH);
  digitalWrite(Input_4, LOW);
  delay(500); // moves FORWARD for half a second
}

//===========================================================

void moveReverse() { // 0 1 0 1
  digitalWrite(Input_1, LOW);
  digitalWrite(Input_2, HIGH);
  digitalWrite(Input_3, LOW);
  digitalWrite(Input_4, HIGH);
  delay(500); // moves BACKWARD for half a second
}

//===========================================================

void rotateLeft() { // 1 0 0 1
  digitalWrite(Input_1, HIGH);
  digitalWrite(Input_2, LOW);
  digitalWrite(Input_3, LOW);
  digitalWrite(Input_4, HIGH);
  delay(500); // Rotates LEFT and delays half a second before next move
}

//===========================================================

void rotateRight() { // 0 1 1 0
  digitalWrite(Input_1, LOW);
  digitalWrite(Input_2, HIGH);
  digitalWrite(Input_3, HIGH);
  digitalWrite(Input_4, LOW);
  delay(500); // Rotates RIGHT and delays half a second before next move
}

//===========================================================

void Stop() {
  digitalWrite(Input_1, LOW);
  digitalWrite(Input_2, LOW);
  digitalWrite(Input_3, LOW);
  digitalWrite(Input_4, LOW);
  delay(100); // Stops and delays before next move
}

//===========================================================
'
])

<p>&nbsp;</p>

<h3 id="code-3">Code 3</h3>
@include('_partials.codebox', [ 'code' =>
'//===========================================================
// Erovoutika Sumo Bot 1

#include <tcrt5k.h> // IR SENSOR TCRT5000 LIBRARY
#include <L298N_MotorDriver.h> // L298N MOTOR DRIVER LIBRARY
#include <NewPing.h> // ULTRASONIC SENSOR HCSR04 LIBRARY

//===========================================================

/*ULTRASONIC SENSOR to ARDUINO UNO CONNECTION*/
#define Trig_Pin A0 // trigger pin (input)
#define Echo_Pin A1 // echo pin (output)
#define Max_Distance 200 // sets maximum distance to 200cm
NewPing sonar(Trig_Pin, Echo_Pin, Max_Distance);
int Distance; // in cm

//===========================================================

/*TCRT5000 IR SENSOR to ARDUINO UNO CONNECTION*/
#define IR_Front A2 // front sensor
#define IR_Back A3 // rear sensor
int Front; // unit not yet known
int Back; // unit not yet known

//===========================================================

/*MOTOR DRIVER*/
// 12V DC Motor A Connections
//int Enable_MotorA = 5V; // Motor A Speed Control Pin
int Input_1 = 5; // Motor A Direction Control Pin
int Input_2 = 6; // Motor A Direction Control Pin
// 12V DC Motor B Connections
//int Enable_MotorB = 5V; // Motor B Speed Control Pin
int Input_3 = 9; // Motor B Direction Control Pin
int Input_4 = 10; // Motor B Direction Control Pin

//===========================================================

void setup() {
  //pinMode(Enable_MotorA, OUTPUT); // set enA Pin as Output
  //pinMode(Enable_MotorB, OUTPUT); // set enB Pin as Ourput
  pinMode(Input_1, OUTPUT); // set IN1 Pin as Output
  pinMode(Input_2, OUTPUT); // set IN2 Pin as Output
  pinMode(Input_3, OUTPUT); // set IN3 Pin as Output
  pinMode(Input_4, OUTPUT); // set IN4 Pin as Output

  // Initial State of Motors - Turned Off
  digitalWrite(Input_1, LOW);
  digitalWrite(Input_2, LOW);
  digitalWrite(Input_3, LOW);
  digitalWrite(Input_4, LOW);
}

//===========================================================

void loop() {
  delay(50); Taunt();
  delay(50); Search();
  delay(50); Distance = sonar.ping_cm(); // Sends a ping and get the distance in whole centimeters
  delay(50); Attack();
  delay(50); Distance = sonar.ping_cm(); // Sends a ping and get the distance in whole centimeters
  delay(50); Defense();
  Front = analogRead(IR_Front); // reads front ir sensor value and save to "Front"
  Back = analogRead(IR_Back); // reads back ir sensor value and save to "Back"
  delay(50);
  if (Front < 650) {
    Stop();
    delay(50);
    moveReverse();
    //delay(500);
    Stop();
  }
  if (Back < 650) {
    Stop();
    delay(50);
    moveForward();
    //delay(500);
    Stop();
  }
}

//===========================================================

void Search() {
  delay(50); Distance = sonar.ping_cm(); // Sends a ping and get the distance in whole centimeters

  delay(50); // slight delay for sensor reading
  Front = analogRead(IR_Front); // reads front ir sensor value and save to "Front"
  Back = analogRead(IR_Back); // reads back ir sensor value and save to "Back"

  if (Distance > 20) { // 21-200(max)
    while (Distance > 20) {
      moveForward(); Stop();
      moveReverse(); Stop();
      rotateRight(); moveForward(); Stop();
      moveReverse(); Stop();
      rotateLeft(); moveForward(); Stop();
      moveReverse(); Stop();

      if (Front < 650 || Back < 650) {
        break;
        Stop();
      }
    }
  }

  if (Front < 650) { // if front ir too close to the line then stop; proceed if not
    Stop();
    delay(50);
    moveReverse();
    //delay(500);
    Stop();
  }
  if (Back < 650) { // if back ir too close to the line then stop; proceed if not
    Stop();
    delay(50);
    moveForward();
    //delay(500);
    Stop();
  }
}

//===========================================================

void Attack() {
  if (Distance < 21) {
    while (Distance < 21) { // iniates attack if opponent is too close
      /* Attack Pattern */
      rotateRight(); moveForward(); Stop(); // Attacks Right for 1s and stop 100ms
      moveReverse(); Stop(); // Reverses for 500ms and stop 100ms
      moveForward(); Stop(); // Attacks for 500ms and stop 100ms
      rotateLeft(); moveForward(); Stop(); // Attacks Left for 1s and stop 100ms
      moveReverse(); Stop(); // Reverses for 500ms and stop 100ms

      // Repeat indefinetely, breaks if distance is not < 21 or Front && Back is not < 650

      delay(50); // slight delay for sensor reading
      Front = analogRead(IR_Front); // reads front ir sensor value and save to "Front"
      Back = analogRead(IR_Back); // reads back ir sensor value and save to "Back"
      if (Front < 650 || Back < 650) { // 650 means white line
        break; // If front or back ir sensor detects the white line within 650 ... break
        delay(50);
      }
    }
    Stop();
  }
}

void Defense() {
  if (Distance < 21) {
    while (Distance < 21) { // run around if too close
      /* Defense Pattern */

      rotateRight(); moveReverse(); Stop(); // Moves Right 500ms then Reverses 500ms and stop 100ms
      rotateLeft(); moveReverse(); Stop(); // Moves Left 500ms then Reverses 500ms and stop 100ms
      moveForward(); Stop(); // Moves Forward for 500ms and stop 100ms
      rotateLeft(); moveReverse(); Stop(); // Moves Left 500ms then Reverses 500ms and stop 100ms
      rotateRight(); moveReverse(); Stop(); // Moves Right 500ms then Reverses 500ms and stop 100ms
      moveForward(); Stop(); // Moves Forward for 500ms and stop 100ms

      // Repeat indefinetely, breaks if distance is not < 21 or Front && Back is not < 650

      delay(50); // slight delay for sensor reading
      Front = analogRead(IR_Front); // reads front ir sensor value and save to "Front"
      Back = analogRead(IR_Back); // reads back ir sensor value and save to "Back"
      if (Front < 650 || Back < 650) { // 650 means white line
        break; // If front or back ir sensor detects the white line within 650 ... break
        delay(50);
      }
    }
    Stop();
  }
}

void Taunt() {
  rotateRight(); delay(3000); // Run in circles CCW
  Stop();

  delay(50);
  Front = analogRead(IR_Front); // reads front ir sensor value and save to "Front"
  Back = analogRead(IR_Back); // reads back ir sensor value and save to "Back"
  if (Front < 650) { // if front ir too close to the line then stop; proceed if not
    Stop();
    delay(50);
    moveReverse();
    //delay(500);
    Stop();
  }
  if (Back < 650) { // if back ir too close to the line then stop; proceed if not
    Stop();
    delay(50);
    moveForward();
    //delay(500);
    Stop();
  }

  rotateLeft(); delay(3000); // Run in circles CW
  Stop();

  delay(50);
  Front = analogRead(IR_Front); // reads front ir sensor value and save to "Front"
  Back = analogRead(IR_Back); // reads back ir sensor value and save to "Back"
  if (Front < 650) { // if front ir too close to the line then stop; proceed if not
    Stop();
    delay(50);
    moveReverse();
    //delay(500);
    Stop();
  }
  if (Back < 650) { // if back ir too close to the line then stop; proceed if not
    Stop();
    delay(50);
    moveForward();
    //delay(500);
    Stop();
  }
}

//===========================================================

void moveForward() { // 1 0 1 0
  digitalWrite(Input_1, HIGH);
  digitalWrite(Input_2, LOW);
  digitalWrite(Input_3, HIGH);
  digitalWrite(Input_4, LOW);
  delay(500); // moves FORWARD for half a second
}

//===========================================================

void moveReverse() { // 0 1 0 1
  digitalWrite(Input_1, LOW);
  digitalWrite(Input_2, HIGH);
  digitalWrite(Input_3, LOW);
  digitalWrite(Input_4, HIGH);
  delay(500); // moves BACKWARD for half a second
}

//===========================================================

void rotateLeft() { // 1 0 0 1
  digitalWrite(Input_1, HIGH);
  digitalWrite(Input_2, LOW);
  digitalWrite(Input_3, LOW);
  digitalWrite(Input_4, HIGH);
  delay(500); // Rotates LEFT and delays half a second before next move
}

//===========================================================

void rotateRight() { // 0 1 1 0
  digitalWrite(Input_1, LOW);
  digitalWrite(Input_2, HIGH);
  digitalWrite(Input_3, HIGH);
  digitalWrite(Input_4, LOW);
  delay(500); // Rotates RIGHT and delays half a second before next move
}

//===========================================================

void Stop() {
  digitalWrite(Input_1, LOW);
  digitalWrite(Input_2, LOW);
  digitalWrite(Input_3, LOW);
  digitalWrite(Input_4, LOW);
  delay(100); // Stops and delays before next move
}

//===========================================================
'
])
@endsection

@push('scripts')
    <script src="{{ $page->link(mix('js/codebox.js', 'assets/build')) }}"></script>
@endpush