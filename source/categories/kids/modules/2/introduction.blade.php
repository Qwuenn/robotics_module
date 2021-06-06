@extends('_layouts.module')

@section('introduction')
    <h1>Introduction to Robotic Arm</h1>
    <p>&nbsp;</p>
    <h3 id="intended-learning-outcomes">Intended Learning Outcomes</h3>
    <p class="mb-0">Discuss the concept of Robotic Arm that can be assembled by kids with programmed Arduino.</p>
    <p>&nbsp;</p>
@endsection

@section('table_of_contents')
    @include('_toc.toc', [ 'items' => [
        'Intended Learning Outcomes',
        'What is a Robotic Arm?',
        'Types of Robotic Arm'
    ]])
@endSection

@section('content')
    <h3 id="what-is-a-robotic-arm">What is a Robotic Arm?</h3>
    <p>
        Robotic arms are robots that have been designed to perform a specific task or job effectively, efficiently, and
        precisely. They are most commonly used for the quick, continuous execution of highly repetitive tasks over long periods
        of time, and they're particularly valuable in the industrial construction, manufacturing, machining, and assembly
        industries.
    </p>
    
    <p>&nbsp;</p>

    <h3 id="types-of-robotic-arm">Types of Robotic Arm</h3>
    
    <h6>Articulated Robot Arm</h6>
    <p>
        It is a robot with rotary joints. For example, this may be used to open doors or pass delicate bombs. These are used in
        production lines, die casting, gas welding, and even spray painting.
    </p>

    <h6>Cartesian Robot Arm</h6>
    <p>
        It has three prismatic joints – the X, Y, and Z joints. It provides longitudinal movement across each axis. Cartesian
        robots are used in arc welding, 3D printing, and pick and place machines.
    </p>

    <h6>Cylindrical Robot Arm</h6>
    <p>
        This type of robot arm is used in handling machine tools, spot welding, and die casting. It has a cylindrical coordinate
        system, allowing rotational mobility around its axis.
    </p>

    <h6>Delta Robot Arm</h6>
    <p>
        Delta robots are common in the food processing and packaging, chemical, medicinal, and electronics industries because
        they can perform fast, accurate, and gentle movements.
    </p>

    <h6>Polar or Spherical Robot Arm</h6>
    <p>
        It is a robot that has a spherical work envelope. They are also used in environmental surveillance, planetary and
        underwater mapping, and recovery and physical therapy machines.
    </p>

    <h6>Scara Robot Arm</h6>
    <p>
        It is capable of performing tasks that require high speed and accuracy. SCARA robots are most commonly used in
        high-speed assembly operations, packaging, and pick-and-place operations.
    </p>
@endsection