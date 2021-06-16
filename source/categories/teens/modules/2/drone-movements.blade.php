@extends('_layouts.module')

@section('introduction')
    <h1>Drone Movements</h1>
    <p>&nbsp;</p>
@endsection

@section('table_of_contents')
    @include('_toc.toc', [ 'items' => [
        'Overview',
        'Hover',
        'Take Off / Land' => 'take-off-land',
        'Pitch',
        'Roll',
        'Yaw'
    ]])
@endSection

@section('content')
    <h3 id="overview">Overview</h3>
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

    <h3 id="hover">Hover</h3>
    <p>To hang/suspend/remain in the air.</p>
    <p>For the drone to hover, the total lifting force (L) of all the motors must be equal to the weight (W) of the drone.</p>
    <p>
        Using the example above, assuming the weight of the drone is 30N, if the total lift produced by all the motors is
        exactly 30N then the drone will be able to hover.
    </p>

    <h6 class="text-center my-2">Upward force (lift) = Downward force (weight)</h6>

    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/teens/modules/2/drone-movements/lift-weight.png'),
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
        'img' => $page->link('assets/build/img/categories/teens/modules/2/drone-movements/hover.png'),
        'alt' => 'Hover',
        'label' => 'Hover'
    ])

    <p>
        The image above is just an assumption that at 50% (of the maximum) spinning speed will have a lifting
        force (F) that will equate to its weight (W). The actual speed and lifting force will still be based on the actual
        weight of the drone. The same goes for other movements like take-off, roll, pitch, and yaw.
    </p>

    <p>&nbsp;</p>

    <h3 id="take-off-land">Take Off / Land</h3>
    <p>To rise/ascend from the surface; to set/descend to the surface.</p>
    <p>
        For the drone to take off or land, the total lifting force produced by all the motors must be greater than the weight of
        the drone for take-off or less than the weight for landing.
    </p>

    @include('_partials.equation', ['equation' => '
        \mathsf{\sum \; of \; CW \; torques \; (motors \; 1 \; \& \; 3) = \sum \; of \; CCW \; torques \; (motors \; 2 \; \& \; 4)}
    '])

    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/teens/modules/2/drone-movements/take-off-ascend.png'),
        'alt' => 'Take Off / Ascend',
        'label' => 'Force needed for a drone to Take-off'
    ])

    <p>&nbsp;</p>

    <h6 class="text-center my-2">Upward force (lift) > Downward force (weight) for take-off</h6>

    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/teens/modules/2/drone-movements/lift-weight.png'),
        'alt' => 'Lift(L) > Weight(W)',
        'label' => 'For a drone to ascend, Lift must be greater than the Weight'
    ])

    <p>&nbsp;</p>

    @include('_partials.equation', ['equation' => '
        \mathsf{\sum \; of \; CW \; torques \; (motors \; 1 \; \& \; 3) = \sum \; of \; CCW \; torques \; (motors \; 2 \; \& \; 4)}
    '])

    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/teens/modules/2/drone-movements/land-descend.png'),
        'alt' => 'Land / Descend',
        'label' => 'Force needed for a drone to Descend'
    ])

    <p>&nbsp;</p>

    <h6 class="text-center my-2">Upward force (lift) < Downward force (weight) for landing</h6>

    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/teens/modules/2/drone-movements/lift-weight.png'),
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

    <h3 id="pitch">Pitch (Forward/Backward)</h3>
    <p>Drone terminology for moving forwards or backward.</p>

    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/teens/modules/2/drone-movements/pitch-forward.png'),
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
        'img' => $page->link('assets/build/img/categories/teens/modules/2/drone-movements/pitch-backward.png'),
        'alt' => 'Pitch Backward',
        'label' => 'Required force for a drone to pitch backward'
    ])

    <p>
        For the drone to pitch backward, the rotation speed of the front motors (motors 1 & 2) must be increased while the
        rotation speed of the rear motors (motors 3 & 4) must be decreased which will result in a net backward force which will
        make the drone’s front to tilt and move backward.
    </p>

    <p>&nbsp;</p>

    <h3 id="roll">Roll (Move Left/Right)</h3>
    <p>Drone terminology for moving leftwards or rightwards.</p>

    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/teens/modules/2/drone-movements/roll-left.png'),
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
        'img' => $page->link('assets/build/img/categories/teens/modules/2/drone-movements/roll-right.png'),
        'alt' => 'Roll Right',
        'label' => 'Required force for a drone to roll to the right'
    ])

    <p>
        Contrarily, to roll to the right (or move rightwards), the left side motors’ rotation speed (motors 1 & 4) is increased
        while the right side motors’ rotation speed (motors 2 & 3) is decreased. Therefore, generates a net rightward force
        which makes the drone’s left side tilt and moves rightwards.
    </p>

    <p>&nbsp;</p>

    <h3 id="yaw">Yaw (Rotate Left/Right)</h3>
    <p>Drone terminology for rotating left or right on its axis.</p>
    <p>
        To yaw to the left (rotate left), based on the same source, the summation of the torques of the opposite direction (CW)
        has to be greater than the CCW torque.
    </p>

    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/teens/modules/2/drone-movements/yaw-left.png'),
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
        'img' => $page->link('assets/build/img/categories/teens/modules/2/drone-movements/yaw-right.png'),
        'alt' => 'Yaw Right',
        'label' => 'Required force for a drone to yaw to the right'
    ])


    @include('_partials.equation', ['equation' => '
        \mathsf{\sum \; of \; ccw \; torques \; (motors \; 2 \; \& \; 4) > \sum \; of \; cw \; torques \; (motors \; 1 \; \& \; 3)}
    '])
@endsection

@push('scripts')
    <script src="{{ $page->link(mix('js/mathjax.js', 'assets/build')) }}" id="MathJax-script" async></script>
@endpush