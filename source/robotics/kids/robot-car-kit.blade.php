@extends('_layouts.module')

@section('introduction')
    <h1><b>Robot Car Kit</b></h1>
    <p>&nbsp</p>
@endsection

@section('table_of_contents')
    <li>
        <a href="#components">Components</a>
    </li>
    <li>
        <a href="#design">Design</a>
    </li>
@endSection

@section('content')
    <h3 id="components"><b>Components</b></h3>
    <p>This Robot Car Kit is composed of several components where you can do different activities. The components are the
        following:
    </p>

    <div class="container-fluid p-0">
        <div class="row gy-5">
            @include('_partials.component_card', [
                'component' => 'Power Switch',
                'description' => 'A power switch regulates the transfer of power to an electronic device.'
            ])
    
            @include('_partials.component_card', [
                'component' => 'Jumping Wires',
                'description' => 'It is a strand of metal that can transfer power or data from one location to another. Wires are often shielded by a
                plastic covering, which is often color-coded to help in identifying.'
            ])
        
            @include('_partials.component_card', [
                'component' => 'Potentiometer',
                'description' => 'A potentiometer is a three-terminal resistor that can be manually adjusted to regulate the flow of electric current.'
            ])
        
            @include('_partials.component_card', [
                'component' => 'MOSFET',
                'description' => 'It is a voltage-controlled unit, which means that when a rated voltage is applied to the gate pin, the MOSFET begins to
                conduct through the Drain and Source pins.'
            ])
        
            @include('_partials.component_card', [
                'component' => 'Photoresistor',
                'description' => 'It is a type of resistor where the strength of light increases, so does the flow of electric current through the
                photoresistor.'
            ])
        
            @include('_partials.component_card', [
                'component' => 'Diode',
                'description' => 'It is an electronic component that flows the current in one direction.'
            ])
    
            @include('_partials.component_card', [
                'component' => 'DC Motor',
                'description' => 'A direct current motor (DC motor) transforms electrical energy into mechanical energy. It is the most basic kind of
                motor and is used in home appliances such as electric razors and car electric windows.'
            ])
        
            @include('_partials.component_card', [
                'component' => 'Resistor',
                'description' => 'It is an electrical component that generates resistance to current flow.'
            ])
        
            @include('_partials.component_card', [
                'component' => 'IR Sensor',
                'description' => 'It is a sensor that detects infrared radiation in its surroundings.'
            ])
    
            @include('_partials.component_card', [
                'component' => 'H-Bridge Motor Driver',
                'description' => 'It is a microcontroller that allows you to control a DC motor to go forward or backward.'
            ])
        
            @include('_partials.component_card', [
                'component' => 'Limit Switch',
                'description' => 'A device that is used to switch current from a circuit from one conductor to another.'
            ])
    
            @include('_partials.component_card', [
                'component' => 'PIR Sensor',
                'description' => 'It is a sensor that detects body heat by monitoring changes in temperatures.'
            ])
        
            @include('_partials.component_card', [
                'component' => 'Battery',
                'description' => 'It produces a direct current (DC) that stores electrical energy.'
            ])
        </div>
    </div>

    <p>&nbsp</p>

    <h3 id="design"><b>Design</b></h3>
    <div class="container-fluid text-center p-0">
        <div class="row row-cols-1 gy-4">
            <div class="col">
                <img src="{{ $page->link('assets/build/img/robotics/kids/robot-car-kit/robot-car-design-1.jpg') }}" 
                    alt="robot-car-design-1"
                    class="img-fluid rounded-2" />
            </div>
            <div class="col">
                <img src="{{ $page->link('assets/build/img/robotics/kids/robot-car-kit/robot-car-design-2.jpg') }}" 
                    alt="robot-car-design-2"
                    class="img-fluid rounded-2" />
            </div>
            <div class="col">
                <img src="{{ $page->link('assets/build/img/robotics/kids/robot-car-kit/robot-car-design-3.jpg') }}" 
                    alt="robot-car-design-3"
                    class="img-fluid rounded-2" />
            </div>
        </div>
    </div>
@endsection