@extends('_layouts.module')

@section('introduction')
    <h1>Introduction to Robotics and Automation</h1>
    <p>&nbsp;</p>
    <h3 id="learning-objectives">Learning Objectives:</h3>
    <ul>
        <li>To discuss the concept of Robotics and Automation.</li>
        <li>To learn and identify different materials used in.</li>
        <li>To learn how to build simple robotics project.</li>
    </ul>
    <p>&nbsp;</p>
@endsection

@section('table_of_contents')
    @include('_toc.toc', [ 'items' => [
        'Learning Objectives',
        'What is Robotics and Automation'
    ]])
@endSection

@section('content')
    <h3 id="what-is-robotics-and-automation">What is Robotics and Automation?</h3>
    <p>
        Robotics is a branch of engineering that deals with the design and application of robots, as well as the use of
        computers to manipulate and process them. In industries, robots are used to speed up the manufacturing process. They are
        also used in nuclear science, sea exploration, transmission electric signal servicing, bio-medical equipment design, and
        so on. Robotics necessitates the use of computer-aided manufacturing (CAM), mechanical engineering, electrical
        engineering, biological mechanics, and software engineering.
    </p>
    <p>
        Robotics and automation: The use of control systems and information technologies to reduce the need for human labor in
        the production of goods and services is referred to as engineering. Automation is a step beyond mechanization in the
        context of industrialization.
    </p> 
@endsection