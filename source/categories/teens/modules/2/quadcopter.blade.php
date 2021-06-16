@extends('_layouts.module')

@section('introduction')
    <h1>Quadcopter</h1>
    <p>&nbsp;</p>
@endsection

@section('table_of_contents')
    @include('_toc.toc', [ 'items' => [
        'Introduction',
        'Frame Shape',
        'Frame Size',
        'Flight Dynamics',
        'Weight Computation'
    ]])
@endSection

@section('content')
    <h3 id="introduction">Introduction</h3>
    <p>
        A quadcopter is a type of multirotor that is lifted and propelled by four horizontal rotors – that’s where its name
        originated, each of which has two or three rotor blades. Quadcopters are then known as rotorcrafts or “rotary-wing”
        aircraft to differentiate them from fixed-wing aircraft because of their source of lift that is provided by rotor blades
        spinning around a mast.
    </p>
    <p>
        Remote control aerial technologies are becoming extremely popular in recent years among hobbyists, university research
        organizations, and individuals considering a start-up. These aircraft are referred to as quadcopters, quadrotors, or
        even helicopters. They do, however, refer to the same device, and the most fitting term for these crafts is quadrotors.
        But for the sake of convenience and unity, it is then called <b>quadcopters</b>.
    </p>

    <p>&nbsp;</p>

    <h3 id="frame-shape">Frame Shape</h3>
    <p>
        Most amateur hobbyists who want to design a quadcopter opt for the <b>X shape</b>, with four motors fixed at the ends. This
        structure can be further built in a variety of forms and materials. Each form has its ups and downs, hobbyists and
        professionals can select their preferred style depending on its application. A quadcopter, on the other hand, can also
        be made in the form of a plus (+) or an <b>H</b>.
    </p>

    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/teens/modules/2/quadcopter/frame-shapes.png'),
        'alt' => 'Frame Shapes',
        'label' => '(From left to right) X shape, H shape, and Plus shape Frames'
    ])

    <p>
        Adding more rotors will result in a completely different build, which may or may not work. Based on the number of rotors
        used, these aircraft are classified as hexacopters (6 rotors) or octocopters (8 rotors). It can go without saying that
        adding motors can only be done by 2’s; adding only one would not fit based on the physics principles that would be
        explained further in this module.
    </p>

    <p>&nbsp;</p>

    <h3 id="frame-size">Frame Size</h3>
    <p>
        The design of the quadcopter in this module falls under 250mm. Since the application of this drone is for filmmaking,
        the size and weight of the drone matter a lot. The drone will have a hard time hovering, take off, roll, and any other
        movement in the air or be controlled the heavier it is. However, when deciding on the frame size, the materials that
        will be held must also be considered. Being light is better but the actual appearance and weight cannot be neglected.
    </p>

    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/teens/modules/2/quadcopter/frame-propeller-motor-sizes-of-drone.png'),
        'alt' => 'Frame, Propeller, and Motor sizes of Drone',
        'label' => 'Frame, Propeller, Motor sizes of Drone'
    ])

    <p>&nbsp;</p>

    <h3 id="flight-dynamics">Flight Dynamics</h3>
    <p>
        Quadcopter drones are symmetrical, so there’s no difference in movements like pitching forward or backward. The same
        principles apply for rolling sideways (left or right). The user will just assume the position of the drone for ease of
        use.
    </p>

    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/teens/modules/2/quadcopter/quadcopter-setup.png'),
        'alt' => 'Quadcopter Setup',
        'label' => 'Motors Rotation Direction'
    ])

    <p>
        For this setup, motors in front of the arrow sign are the “front motors” (motors 1 & 2) while motors in the tail of the
        arrow sign are the “rear motors” (motors 3 & 4). Likewise, for motors on the right side of the arrow are the “right side
        motors” (motors 2 & 3) while motors on the left side of the arrow are the “left side motors” (motors 1 & 4). Lastly,
        motors rotating clockwise are the “CW motors” (motors 1 & 3) while motors rotating counterclockwise are the “CCW motors”
        (motors 2 & 4).
    </p>

    <p>&nbsp;</p>

    <h3 id="weight-computation">Weight Computation</h3>
    <p>
        Using Newton’s \(\sf{2^{nd} Law: \textbf{F=ma}}\), in free-falling bodies, the acceleration is equal to the gravity dragging everything on
        the Earth downwards which is equal to \( \mathsf{9.8 m \over s^2} \) or approximately equal to \( \mathsf{10 m \over s^2} \). To be able
        to determine the weight of the drone, calculate the total mass of the drone (including all components and basically
        everything it carries while flying) and multiply it by the acceleration due to gravity which is equal to \( \mathsf{10 m \over
        s^2} \). The product in Newton will be the basis for hovering, rolling, and other movements.
    </p>

    <p>
        For instance, if the total mass of the quadcopter is 3kg (including everything else it carries in mid-air), the weight
        will be equal to 30N, this value of weight will be the basis for drone movements like hover, take off or land, pitch
        forward or backward, roll left or right, as well as yaw left or right.
    </p>
@endsection

@push('scripts')
    <script src="{{ $page->link(mix('js/mathjax.js', 'assets/build')) }}" id="MathJax-script" async></script>
@endpush

