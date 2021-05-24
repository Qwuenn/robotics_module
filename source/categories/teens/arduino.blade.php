@extends('_layouts.module')

@section('introduction')
    <h1 id="introduction">Arduino</h1>
    <p>&nbsp</p>
@endsection

@section('table_of_contents')
    <li><a href="#what-is-arduino">What is Arduino?</a></li>
    <li><a href="#arduino-boards">Arduino Boards</a></li>
    <li><a href="#arduino-uno-r3-pin-configuration">Arduino Uno R3 Pin Configuration</a></li>
    <li>
        <a href="#setting-up-arduino">Setting Up Arduino</a>
        <ul>
            <li><a href="#materials-needed">Materials Needed</a></li>
            <li><a href="#setting-up-arduino-uno-r3-and-arduino-desktop-ide">Setting Up Arduino UNO <br/>R3 and Arduino Desktop IDE</a></li>
            <li><a href="#configuring-and-testing-arduino-desktop-ide">Configuring and Testing <br/>Arduino Desktop IDE</a></li>
        </ul>
    </li>
@endSection

@section('content')
    <h3 id="what-is-arduino">What is Arduino?</h3>
    <p>
        Arduino is an open-source electronics platform for developing electronics and robotics projects. It is popular among
        people who are just getting into electronics with minimum to no experience at all, because of its open-source projects,
        which make schematics, specifications, components, applications, and so on freely accessible to all users. It is made up
        of a circuit board (microcontroller) and a program is known as an IDE (Integrated Development Environment) that runs on
        a computer and is used to create and send a program to the physical board.
    </p>

    <p>&nbsp</p>

    <h3 id="arduino-boards">Arduino Boards</h3>
    <p>
        There are several different kinds of Arduino boards on the market with each board comes with different purposes but
        Arduino UNO R3 is the most popular circuit board from the Arduino family. It is the most often used board and became the
        standard for creating Arduino projects.
    </p>

    <p>
       The Arduino boards listed below are some of the available on the market:
    </p>

    <ul>
        <li>Arduino Uno</li>
        <li>Arduino Nano</li>
        <li>Arduino Micro</li>
        <li>Arduino Mega2560</li>
        <li>Arduino Zero</li>
        <li>Arduino Due</li>
        <li>Arduino Leonardo</li>
        <li>Arduino Pro Mini</li>
        <li>Arduino Ethernet</li>
        <li>LilyPad Arduino Board</li>
        <li>Arduino Bluetooth</li>
        <li>Arduino Diecimila</li>
        <li>RedBoard Arduino Board</li>
        <li>Arduino Esplora</li>
        <li>Arduino Robot</li>
    </ul>

    <p>
        For this module, Arduino UNO R3 will be used for the development of the Sumo Bot.
    </p>

    <p>&nbsp</p>

    <h3 id="arduino-uno-r3-pin-configuration">Arduino UNO R3 Pin Configuration</h3>
    <p>
        The Arduino Uno board is built on the 8-bit ATmega328P microcontroller. It also includes other parts to assist the
        microcontroller, such as a crystal oscillator, serial communication, a voltage regulator, and so on. The Arduino Uno has
        14 digital I/O (Input/Output) pins, (six of which can be used as Pulse Width Modulation or PWM outputs), six analog I/O
        pins, a USB connection, an ICSP (In-circuit serial programming) header, reset button, and a power barrel jack.
    </p>

    <img src="{{ $page->link('assets/build/img/categories/teens/arduino/arduino-uno-r3-pin-configuration.jpg') }}" 
        alt="Figure 2.2.1 Arduino UNO R3 Pin Configuration"
        class="img-fluid rounded-2 text-center my-4" />

    <p>&nbsp</p>

    <h3 id="setting-up-arduino">Setting Up Arduino</h3>

    <p>&nbsp</p>

    <h5 id="materials-needed" class="mb-4">Materials Needed</h5>
    <ul>
        <li>Arduino (In this case, Arduino UNO R3).</li>
        <li>USB Printer Cable.</li>
        <li>Laptop or Desktop.</li>
    </ul>

    <p>&nbsp</p>

    <h5 id="setting-up-arduino-uno-r3-and-arduino-desktop-ide" class="mb-4">Setting Up Arduino UNO R3 and Arduino Desktop IDE</h5>
    <ol class="d-grid gap-4">
        <li>
            Download and install the latest version of the Arduino IDE from the <a href="https://www.arduino.cc/en/software">official website</a>. 
            Choose the one that is suited to your laptop/desktop operating system. <br />
            <img src="{{ $page->link('assets/build/img/categories/teens/arduino/arduino-setup-1.png') }}" 
                alt="Figure 2.3.2.A.1: Official Download Site of Arduino IDE"
                class="img-fluid rounded-2 text-center my-4" />
            <span class="fw-semibold">NOTE:</span> If downloading and installing files is not your style, you can try Arduino Web IDE by following this 
            <a href="https://create.arduino.cc/projecthub/Arduino_Genuino/getting-started-with-arduino-web-editor-on-various-platforms-4b3e4a">link</a>.
        </li>
        <li>
            Using the USB printer cable, connect the Arduino to the laptop/desktop. The green LED (PWR) will turn on if the
            Arduino is successfully connected to the laptop/desktop.
        </li>
        <li>
            Open the Arduino IDE and it will automatically install the driver to the board.
        </li>
    </ol>

    <p>&nbsp</p>

    <h5 id="configuring-and-testing-arduino-desktop-ide" class="mb-4">Configuring and Testing Arduino Desktop IDE</h5>
    <ol class="d-grid gap-4">
        <li>
            Open the Arduino Desktop IDE and click <span class="fw-semibold">Sketch > Include Library</span>. 
            Some sensors require certain libraries before they can work. It can also be installed manually.
            <img src="{{ $page->link('assets/build/img/categories/teens/arduino/arduino-setup-2.png') }}" 
                alt="Figure 2.3.2.B.1 Exploring the library section of Arduino Desktop IDE"
                class="img-fluid rounded-2 text-center my-4" />
        </li>
        <li>
            Some sample activities are precoded for easy use and for guiding beginners. 
            <span class="fw-semibold">Open File > Examples</span>.
            <img src="{{ $page->link('assets/build/img/categories/teens/arduino/arduino-setup-3.png') }}" 
                alt="Figure 2.3.2.B.2 Samples Activities included in the IDE"
                class="img-fluid rounded-2 text-center my-4" />
        </li>
        <li>
            Select the right Arduino Board in <span class="fw-semibold">Tools > Board</span> and select the board for this module, 
            Arduino Uno. This is done to avoid errors in uploading codes to the Arduino board.
            <img src="{{ $page->link('assets/build/img/categories/teens/arduino/arduino-setup-4.png') }}" 
                alt="Figure 2.3.2.B.3 Choosing of the right Arduino board in the IDE"
                class="img-fluid rounded-2 text-center my-4" />
        </li>
        <li>
            Select the port where the Arduino Uno is connected to the computer. Go to 
            <span class="fw-semibold">Tools > Port > Select COM3 (Arduino Genuino Uno)</span>.
            <img src="{{ $page->link('assets/build/img/categories/teens/arduino/arduino-setup-5.png') }}" 
                alt="Figure 2.3.2.B.4 The location of the port on the IDE"
                class="img-fluid rounded-2 text-center my-4" />
        </li>
        <li>
            After coding with the IDE, verify first before uploading to the Arduino board. It will check the code for error and
            it will be shown on the black space below the sketch.
            <img src="{{ $page->link('assets/build/img/categories/teens/arduino/arduino-setup-6.png') }}" 
                alt="Figure 2.3.2.B.5 An example of verifying a program on IDE"
                class="img-fluid rounded-2 text-center my-4" />
        </li>
        <li>
            A most common error like missing semicolon “; ” on a line. The software will help locate where the error takes place.
            In the photo below, the error is located above the red line. There are also other errors like variable declaration
            error, wherein a variable is used without declaration and missing brackets { }, wherein a function is missing an
            opening/closing bracket that will result in more errors. The latter can be fixed by using 
            <span class="fw-semibold">CTRL + T</span> or AutoFormat and locate and check every bracket. 
            All opening brackets ( { ) must have closing brackets ( } ).
            <img src="{{ $page->link('assets/build/img/categories/teens/arduino/arduino-setup-7.png') }}" 
                alt="Figure 2.3.2.B.6 A missing semicolon have been found in the example above"
                class="img-fluid rounded-2 text-center my-4" />
        </li>
        <li>
            If there’s no error detected, press the upload button to send the program to the board.
            <img src="{{ $page->link('assets/build/img/categories/teens/arduino/arduino-setup-8.png') }}" 
                alt="Figure 2.3.2.B.7 A successful upload of a program is shown above"
                class="img-fluid rounded-2 text-center my-4" />
        </li>
    </ol>
@endsection