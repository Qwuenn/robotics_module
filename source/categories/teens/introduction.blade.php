@extends('_layouts.module')

@section('introduction')
    <h1>Introduction to Robotics</h1>
    <p>&nbsp;</p>
    <h3 id="intended-learning-outcomes">Intended Learning Outcomes</h3>
    <p class="mb-0">After successful completion of this module, the student will be able to:</p>
    <ul>
        <li>Understand the concept and characteristics of Robotics.</li>
        <li>Distinguish the advantages/disadvantages and applications of robotics.</li>
        <li>Understand what Arduino is.</li>
        <li>Build and code a personalized Sumo Bot.</li>
    </ul>
    <p>&nbsp;</p>
@endsection

@section('table_of_contents')
    @include('_toc.toc', [ 'items' => [
        'Intended Learning Outcomes',
        'What is Robotics?',
        'Three Laws of Robotics',
        'Characteristics',
        'Applications',
        'Advantages and Disadvantages'
    ]])
@endSection

@section('content')
    <h3 id="what-is-robotics">What is Robotics?</h3>
    <p>
        Robotics is an intersection of science and electronics and mechanical engineering that deals with the design,
        construction, and application of machines (robots) to perform or replicate the tasks usually performed by humans.
    </p>
    <p>
        Furthermore, these machines or robots can take any form, but many of them look like humans. Human-like robots are likely
        to walk, speak, perceive, and, most importantly, perform everything a human can do. Besides that, bio-based robots,
        which are inspired by nature, constitute most of today's robots.
    </p>

    <p>&nbsp;</p>

    <h3 id="three-laws-of-robotics">Three Laws of Robotics</h3>
    <p>
        American writer and professor of biochemistry at Boston University named Isaac Asimov proposed three laws of Robotics:
    </p>
    <h6>First Law</h6>
    <p>
        Robots will never harm human beings.
    </p>
    <h6>Second Law</h6>
    <p>
        Robots will follow instructions given by humans without breaking the first law.
    </p>
    <h6>Third Law</h6>
    <p>
        Robots will protect themselves without breaking the first and second law.
    </p>

    <p>
        Finally, some robots, such as those made with robotics kits, are not just for educational and recreational purposes.
        Some robots are used in the industry to replace humans or human jobs due to their harmful effects on health, complexity
        for humans, and the need for high-accuracy performance that humans cannot achieve.
    </p>

    <p>&nbsp;</p>

    <h3 id="characteristics">Characteristics</h3>
    <p>
        Robots can be made using different components, programs, and kits. Here are some of its characteristics: 
    </p>
    <h6>Appearance</h6>
    <p>
        Robots have physical bodies. They are connected by their body structure and driven by their mechanical components.
        Robots would be nothing more than just a software program if they do not have an appearance.
    </p>
    <h6>Brain</h6>
    <p>
        The brain of the robot is the onboard control panel, such as the Arduino R3 Controller Board for instance. The robot
        will use this to obtain input data and sends commands as output. Without this control unit, the robot will be nothing
        more than a remote-controlled device.
    </p>
    <h6>Sensors</h6>
    <p>
        These sensors are used in robots to collect information from the outside world and transmit it to the Brain.
        Essentially, these sensors include circuits that generate voltage.
    </p>
    <h6>Actuators</h6>
    <p>
        The robots move, and the components that move with the aid of these robots are referred to as Actuators. Actuators
        include motors, pumps, and compressors, etc. The brain instructs these actuators on when and how to respond or move.
    </p>
    <h6>Program</h6>
    <p>
        Robots only function or respond to instructions given to them in the form of a program. These programs only tell the
        brain when to perform which operations, such as when to switch, make sounds, and so on. These programs only instruct the
        robot on how to make decisions based on sensor data.
    </p>
    <h6>Behavior</h6>
    <p>
        The software that has been created for the robot determines its actions. If the robot begins to move, it is easy to tell
        what type of software is installed within the robot.
    </p>

    <p>&nbsp;</p>

    <h3 id="applications">Applications</h3>
    <p>
        Robots are widely used in many aspects, here are some of those: 
    </p>
    <h6>Recreational</h6>
    <p>
        Robots are used as a learning platform for passionate people like robot toys for kids and much more complex ones for adults.
    </p>
    <h6>Home</h6>
    <p>
        Monitor home security, environmental conditions, and energy usage as well as automated door and windows. Likewise,
        equipment such as lights and air conditioning may be pre-programmed to turn on and off.
    </p>
    <h6>Industry</h6>
    <p>
        Robotics and automation are quickly becoming the most important part of manufacturing. The robotic arm, for instance,
        can perform multiple tasks such as welding, cutting, lifting, sorting, and bending.
    </p>
    <h6>Health Service</h6>
    <p>
        Robotic surgery, also known as robot-assisted surgery, enables doctors to perform a wide range of complicated operations
        with greater accuracy, flexibility, and control than traditional methods. Robotic surgery is often synonymous with
        minimally invasive surgery, which is done by small incisions.
    </p>
    <h6>Military</h6>
    <p>
        Unmanned aerial systems, such as the Predator drone, have attained incredible performance capable of capturing
        surveillance photographs and even successfully aiming missiles at ground targets without a pilot.
    </p>
    <h6>Outer Space</h6>
    <p>
        Robots are playing a critical role in space exploration. The autonomous unmanned spacecraft is used to explore the stars
        and planets.
    </p>

    <p>&nbsp;</p>

    <h3 id="advantages-and-disadvantages">Advantages and Disadvantages</h3>
    <p>
        Since robots are replacing humans in some field of work, here are some comparison of robots versus humans:
    </p>
    <h6>Advantages</h6>
    <ul>
        <li>They can get information that humans cannot.</li>
        <li>They can complete tasks accurately, effectively, and quickly.</li>
        <li>They are capable of being exposed to hazardous environments.</li>
        <li>They can run without rest, allowing them to operate 24 hours a day, 365 days a year.</li>
        <li>They can do the jobs that humans are unwilling to do.</li>
    </ul>
    <h6>Disadvantages</h6>
    <ul>
        <li>They need constant power to function.</li>
        <li>Costly maintenance.</li>
        <li>They can store massive amounts of data, but they are not as powerful as our human brains.</li>
        <li>They cannot do anything different other than the one programmed to them.</li>
        <li>They cannot interact with humans properly.</li>
    </ul>
@endsection