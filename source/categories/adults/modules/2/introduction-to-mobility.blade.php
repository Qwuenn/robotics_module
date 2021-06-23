@extends('_layouts.module')

@section('introduction')
    <h1>Introduction to Mobility</h1>
    <p>&nbsp;</p>
@endsection

@section('table_of_contents')
    @include('_toc.toc', [ 'items' => [
        'Learning Objectives',
        'What Does Mobility Mean?'
    ]])
@endSection

@section('content')
    <h3 id="learning-objectives">Learning Objectives:</h3>
    <ul>
        <li>To discuss one of the primary areas in Robotics.</li>
        <li>To make mobility robots.</li>
    </ul>

    <p>&nbsp;</p>

    <h3 id="what-does-mobility-mean">What Does Mobility Mean?</h3>
    <p>
        The ability to move freely is referred to as mobility. Mobility often refers to whether or not an injured body part,
        such as a joint or limb, can be moved, but it can also refer to movement in general.
    </p>
    <p>
        Mobility applications come in a wide variety. As a result, the "Mobility" team works on the development of innovative AI
        and robotic solutions to improve passenger and cargo transportation, as well as systems for remote transportation.
    </p>
    <p>
        The "Mobility" team provides technologies and capabilities for the development of autonomous mobile robots, including
        propulsion, mobility and transportation concepts, mechatronics and sensory design, regulation, motion control,
        localization, mapping, and navigation. When developing the system's hardware and software, operational, technical, and
        functional requirements, particularly legal requirements, are taken into account. Testing, evaluating, and validating
        developed systems in realistic environments is also of particular interest. This includes providing test environments
        and equipment, as well as the expertise required to define and conduct appropriate experiments and collect relevant
        data.
    </p> 
@endsection