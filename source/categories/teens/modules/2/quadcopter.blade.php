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
        'Weight Computation',
        'Drone Movements' => [
            'Hover',
            'Take Off / Land' => 'take-off-land',
            'Pitch',
            'Roll',
            'Yaw'
        ],
        'Application' => [
            'Military',
            'Commercial',
            'Future Technology'
        ]
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

    <p>&nbsp;</p>

    <h3 id="drone-movements">Drone Movements</h3>
    <p>
        The movements of the drone are controlled by the rotors. Think of a rotor as a fan because they basically work the same.
        Air is pushed down by rotating blades. And of course, forces all come in pairs, meaning that as the rotor pushes the air
        downwards, the air pushes the rotor upwards consequently.
    </p>
    <p>
        To control the drone movements, the speed of the rotors must be engineered properly. Combinations of rotors spinning at
        a certain speed and in a certain direction are the key to controlling the drone.
    </p>

    <p>&nbsp;</p>

    <h5 id="hover">Hover</h5>
    <p>To hang/suspend/remain in the air.</p>
    <p>For the drone to hover, the total lifting force (L) of all the motors must be equal to the weight (W) of the drone.</p>
    <p>
        Using the example above, assuming the weight of the drone is 30N, if the total lift produced by all the motors is
        exactly 30N then the drone will be able to hover.
    </p>

    <h6 class="text-center my-2">Upward force (lift) = Downward force (weight)</h6>

    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/teens/modules/2/quadcopter/lift-weight.png'),
        'alt' => 'Lift(L) = Weight(W)',
        'label' => 'For a drone to hover, Lift must be equal to Weight'
    ])

    <p>&nbsp;</p>

    <p>
        Likewise, the rotation speed of clockwise motors must be equal to the counterclockwise motors, so the net torque will
        become zero. A net torque of zero may imply that the drone is doing nothing in mid-air and just maintaining its balance.
    </p>

    @include('_partials.equation', ['equation' => '
        \mathsf{\sum \; of \; CW \; torques \; (motors \; 1 \; \& \; 3) = \sum \; of \; CCW \; torques \; (motors \; 2 \; \& \; 4)}
    '])

    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/teens/modules/2/quadcopter/hover.png'),
        'alt' => 'Hover',
        'label' => 'Hover'
    ])

    <p>
        The image above is just an assumption that at 50% (of the maximum) spinning speed will have a lifting
        force (F) that will equate to its weight (W). The actual speed and lifting force will still be based on the actual
        weight of the drone. The same goes for other movements like take-off, roll, pitch, and yaw.
    </p>

    <p>&nbsp;</p>

    <h5 id="take-off-land">Take Off / Land</h5>
    <p>To rise/ascend from the surface; to set/descend to the surface.</p>
    <p>
        For the drone to take off or land, the total lifting force produced by all the motors must be greater than the weight of
        the drone for take-off or less than the weight for landing.
    </p>

    @include('_partials.equation', ['equation' => '
        \mathsf{\sum \; of \; CW \; torques \; (motors \; 1 \; \& \; 3) = \sum \; of \; CCW \; torques \; (motors \; 2 \; \& \; 4)}
    '])

    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/teens/modules/2/quadcopter/take-off-ascend.png'),
        'alt' => 'Take Off / Ascend',
        'label' => 'Force needed for a drone to Take-off'
    ])

    <p>&nbsp;</p>

    <h6 class="text-center my-2">Upward force (lift) > Downward force (weight) for take-off</h6>

    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/teens/modules/2/quadcopter/lift-weight.png'),
        'alt' => 'Lift(L) > Weight(W)',
        'label' => 'For a drone to ascend, Lift must be greater than the Weight'
    ])

    <p>&nbsp;</p>

    @include('_partials.equation', ['equation' => '
        \mathsf{\sum \; of \; CW \; torques \; (motors \; 1 \; \& \; 3) = \sum \; of \; CCW \; torques \; (motors \; 2 \; \& \; 4)}
    '])

    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/teens/modules/2/quadcopter/land-descend.png'),
        'alt' => 'Land / Descend',
        'label' => 'Force needed for a drone to Descend'
    ])

    <p>&nbsp;</p>

    <h6 class="text-center my-2">Upward force (lift) < Downward force (weight) for landing</h6>

    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/teens/modules/2/quadcopter/lift-weight.png'),
        'alt' => 'Lift(L) < Weight(W)',
        'label' => 'For a drone to descend, Lift must be less than the Weight'
    ])

    <p>
        In the same manner, as hovering, the rotation speed of clockwise motors for take-off and landing must also be equal to
        the counterclockwise motors, so the net torque will become zero as well. But, to take off or ascend, the rotation speed
        of all the motors must be increased up to a value that will cause the lifting force to surpass the drone’s weight. On
        the other hand, the total opposite is applied to land or descend, the rotation speed of all the motors is decreased up
        to a value that will cause the lifting force to be less than the drone’s weight.
    </p>

    <p>&nbsp;</p>

    <h5 id="pitch">Pitch (Forward/Backward)</h5>
    <p>Drone terminology for moving forwards or backward.</p>

    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/teens/modules/2/quadcopter/pitch-forward.png'),
        'alt' => 'Pitch Forward',
        'label' => 'Required force for a drone to pitch forward'
    ])

    <p>
        For the drone to pitch forwards, the rotation speed of the rear motors (motors 3 & 4) must be increased while the
        rotation speed of the front motors (motors 1 & 2) must be decreased resulting in a net forward force, which will make
        the drone’s rear to tilt and move forwards.
    </p>

    <p>&nbsp;</p>

    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/teens/modules/2/quadcopter/pitch-backward.png'),
        'alt' => 'Pitch Backward',
        'label' => 'Required force for a drone to pitch backward'
    ])

    <p>
        For the drone to pitch backward, the rotation speed of the front motors (motors 1 & 2) must be increased while the
        rotation speed of the rear motors (motors 3 & 4) must be decreased which will result in a net backward force which will
        make the drone’s front to tilt and move backward.
    </p>

    <p>&nbsp;</p>

    <h5 id="roll">Roll (Move Left/Right)</h5>
    <p>Drone terminology for moving leftwards or rightwards.</p>

    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/teens/modules/2/quadcopter/roll-left.png'),
        'alt' => 'Roll Left',
        'label' => 'Required force for a drone to roll to the left'
    ])

    <p>
        To roll to the left (or move leftwards), according to the same source, the right side motors’ rotation speed (motors 2 &
        3) is increased while the left side motors’ rotation speed (motors 1 & 4) is decreased. Therefore, generates a net
        leftward force which makes the drone’s right side tilt and moves leftwards.
    </p>

    <p>&nbsp;</p>

    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/teens/modules/2/quadcopter/roll-right.png'),
        'alt' => 'Roll Right',
        'label' => 'Required force for a drone to roll to the right'
    ])

    <p>
        Contrarily, to roll to the right (or move rightwards), the left side motors’ rotation speed (motors 1 & 4) is increased
        while the right side motors’ rotation speed (motors 2 & 3) is decreased. Therefore, generates a net rightward force
        which makes the drone’s left side tilt and moves rightwards.
    </p>

    <p>&nbsp;</p>

    <h5 id="yaw">Yaw (Rotate Left/Right)</h5>
    <p>Drone terminology for rotating left or right on its axis.</p>
    <p>
        To yaw to the left (rotate left), based on the same source, the summation of the torques of the opposite direction (CW)
        has to be greater than the CCW torque.
    </p>

    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/teens/modules/2/quadcopter/yaw-left.png'),
        'alt' => 'Yaw Left',
        'label' => 'Required force for a drone to yaw to the left'
    ])

    @include('_partials.equation', ['equation' => '
        \mathsf{\sum \; of \; cw \; torques \; (motors \; 1 \; \& \; 3) > \sum \; of \; ccw \; torques \; (motors \; 2 \; \& \; 4)}
    '])

    <p>&nbsp;</p>

    <p>
        Contrarily, to yaw to the right (rotate right), the summation of the torques of the opposite direction (CCW) has to be
        greater than the CW torque.
    </p>

    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/teens/modules/2/quadcopter/yaw-right.png'),
        'alt' => 'Yaw Right',
        'label' => 'Required force for a drone to yaw to the right'
    ])


    @include('_partials.equation', ['equation' => '
        \mathsf{\sum \; of \; ccw \; torques \; (motors \; 2 \; \& \; 4) > \sum \; of \; cw \; torques \; (motors \; 1 \; \& \; 3)}
    '])

    <p>&nbsp;</p>

    <h3 id="application">Application</h3>
    <p>
        Drones are quickly gaining prominence. They are only in their development in terms of widespread adoption and
        application, but they have already broken down rigid traditional boundaries in markets that previously appeared
        impenetrable by similar technological advances.
    </p>
    <p>
        Unmanned aircraft have also been integral to the operations of numerous corporations and federal agencies in recent
        years, piercing into regions where certain markets were previously static or lagging. Drone features are proving to be
        incredibly useful in areas where a man cannot access or operate in a timely and effective manner, from fast delivery
        during rush hour to searching for an unreachable military base.
    </p>
    <p>
        Furthermore, increasing the work quality and productivity, reducing the workload and manufacturing costs, improving the
        accuracy, refining services, and customer relations, as well as addressing security problems on a large scale is only a
        couple of the many benefits drones provide to businesses all around the world. Drone technology adoption across
        industries jumped from the fad stage to the mega-trend stage reasonably rapidly as more and more companies realized its
        promise, scope, and global reach.
    </p>
    <p>
        Whether operated by a remote or accessible by a mobile app, these unmanned aircraft have the potential to enter the most
        remote areas with little or no personnel and the least amount of effort, time, and resources. This is one of the primary
        reasons they are being embraced globally, especially by the <b>military</b>, <b>commercial</b>, <b>personal</b>, and 
        <b>future technology</b> sectors.
    </p>

    <p>&nbsp;</p>

    <h5 id="military">Military</h5>
    <p>The first use of drones dates back to 1849 when Austrian forces used unmanned balloons to drop bombs on the city of Venice.</p>

    <ul>
        <li>
            <p>
                <b>Target and decoy</b> - these can be used to provide both ground and aerial gunnery at a target, and can also be used
                to simulate an enemy missile or aircraft.
            </p>
            
        </li>
        <li>
            <p>
                <b>Reconnaissance / Surveillance</b> - provide intelligence and support on the battlefield.
            </p>
            
        </li>
        <li>
            <p>
                <b>Combat</b> - carries ordinance that is used for the destruction of the target
            </p>
        </li>
    </ul>

    <p>&nbsp;</p>

    <h5 id="commercial">Commercial</h5>
    <p>
        Drones are mostly used in agriculture to easily fertilize and monitor the health of the crops for the farmers. Today's
        drone technology is also being used in different commercial businesses.
    </p>

    <ul>
        <li>
            <p>
                <b>Express Shipping and Delivery</b> - with the booming of online shopping, delivery using traditional methods can’t
                cope up with the rising demand for orders. Different online business such as Amazon is using a delivery drone to meet
                that high demand.
            </p>
            
        </li>
        <li>
            <p>
                <b>Search and Rescue Operations</b> - used for locating and detecting humans trapped in different rescue situations.
            </p>
            
        </li>
        <li>
            <p>
                <b>Building Safety Inspections</b> - used for finding different faults at different locations of the building that
                humans can’t inspect closely.
            </p>
        </li>
        <li>
            <p>
                <b>Unmanned Cargo Transport</b> - drone ships and drone aircraft that can transport cargo with medium range.
            </p>
        </li>
        <li>
            <p>
                <b>Agriculture</b> - used for monitoring, watering, and giving aerial fertilizer to crops.
            </p>
        </li>
        <li>
            <p>
                <b>Aerial Photography</b> - some drones are being sold commercially to be used for filmmaking, photography, video
                shoots, and more.
            </p>
        </li>
    </ul>

    <p>&nbsp;</p>

    <h5 id="future-technology">Future Technology</h5>
    <p>
        Since drone technology is rapidly changing, future drone technology is currently undergoing revolutionary radical
        change. There are seven future generations of drone technology, with the bulk of existing technology falling into the
        fifth and sixth generations.
    </p>

    <table class="table text-default-black">
        <thead>
            <tr>
                <th scope="col">Drone Generation</th>
                <th scope="col">Technology</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Generation 1</td>
                <td>Basic remote control aircraft</td>
            </tr>
            <tr>
                <td>Generation 2</td>
                <td>Fixed camera, static build, manual control</td>
            </tr>
            <tr>
                <td>Generation 3</td>
                <td>HD recording, basic safety models, assisted control, two-axis gimbals</td>
            </tr>
            <tr>
                <td>Generation 4</td>
                <td>
                    Autonomous mode, three-axis gimbal, 1080p or higher video recording more protection, and safety mode.
                </td>
            </tr>
            <tr>
                <td>Generation 5</td>
                <td>Transformative prototypes, 360º gimbal, 4K video recording, AI-assisted control.</td>
            </tr>
            <tr>
                <td>Generation 6</td>
                <td>
                    Commercial adaptability, safety, and regulatory standards, an autonomous pilot with spatial awareness.
                </td>
            </tr>
            <tr>
                <td>Generation 7</td>
                <td>
                    Full market coverage, safety and regulatory compliant, interchangeability of platforms and payloads, improved and more
                    intelligent autonomous pilot,
                </td>
            </tr>
        </tbody>
    </table> 
@endsection

@push('scripts')
    <script src="{{ $page->link(mix('js/mathjax.js', 'assets/build')) }}" id="MathJax-script" async></script>
@endpush

