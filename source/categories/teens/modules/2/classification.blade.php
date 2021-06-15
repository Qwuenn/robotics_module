@extends('_layouts.module')

@section('introduction')
    <h1>Classification of Drones</h1>
    <p>&nbsp;</p>
@endsection

@section('table_of_contents')
    @include('_toc.toc', [ 'items' => [
        'By Category',
        'By Size',
        'By Range',
        'By Artificial Intelligence'
    ]])
@endSection

@section('content')
    <h3 id="what-is-a-drone">By Category</h3>
    <p>
        Drones are categorized by their number of motor and appearance.
    </p>
    
    <h5>Single-Rotor Drone</h5>
    <p>
        Has one power-driven rotor and resembles a conventional helicopter but smaller in size. Normally, there is another rotor
        located on the aircaft's tail.
    </p>

    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/teens/modules/2/classification/single-rotor-drone.png'),
        'alt' => 'Single-Rotor Drone'
    ])

    <p>&nbsp;</p>

    <h5>Multi-Rotor Drone</h5>
    <p>
        Has more than one vertically rotating or turning power-driven engine (rotors). It takes off, lands, and hovers similarly
        to a traditional “single rotor” helicopter, but has more than one rotor. (e.g. Quadcopter)
    </p>

    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/teens/modules/2/classification/multi-rotor-drone.png'),
        'alt' => 'Multi-Rotor Drone'
    ])

    <p>&nbsp;</p>

    <h5>Aeroplane</h5>
    <p>
        Has fixed wings, looks, and flies exactly like a regular airplane but smaller in size. It can also take off and land
        horizontally, although it usually cannot hover.
    </p>

    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/teens/modules/2/classification/aeroplane.png'),
        'alt' => 'Aeroplane'
    ])

    <p>&nbsp;</p>

    <h5>Powered Lift</h5>
    <p>
        Looks a little bit similar to Aeroplane but has no tires. It can take off vertically (straight up and down) like a
        helicopter and can also fly forward like a plane.
    </p>

    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/teens/modules/2/classification/powered-lift.png'),
        'alt' => 'Powered Lift'
    ])

    <p>&nbsp;</p>

    <h5>Airship</h5>
    <p>
        Is powered by a motor and is technically 'lighter than air,’ it is filled with buoyant gas and floats in the air. (e.g.
        Blimp)
    </p>

    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/teens/modules/2/classification/airship.png'),
        'alt' => 'Airship'
    ])

    <p>&nbsp;</p>
    <p>&nbsp;</p>

    <h3 id="by-size">By Size</h3>
    <p>Drones can also be classified by their dimension and weight.</p>

    <h6>Very Small (Nano)</h6> 
    <ul>
        <li>
            < 50cm in length, < 250g in weight
        </li>
        <li>
            <b>Common Application:</b> Spying (hidden surveillance)
        </li>
    </ul>

    <h6>Small</h6> 
    <ul>
        <li>
            a little above 50cm in length, up to 25kg in weight
        </li>
        <li>
            <b>Common Application:</b> Recreational purposes
        </li>
    </ul>

    <h6>Medium</h6> 
    <ul>
        <li>
            up to 200kg in weight
        </li>
        <li>
            <b>Common Application:</b> Package carrier
        </li>
    </ul>

    <h6>Large</h6> 
    <ul>
        <li>
            usually comparable to a size of an aircraft (> 200kg)
        </li>
        <li>
            <b>Common Application:</b> Military purposes
        </li>
    </ul>

    <p>&nbsp;</p>

    <h3 id="by-range">By Range (Distance and Battery Life)</h3>
    <p>The classification of drones by their optimum operating distance and flight time.</p>

    <h6>Very Close Range</h6> 
    <p>5 km with 20 to 45 minutes of flight time</p>

    <h6>Close Range</h6> 
    <p>50 km with 1 to 6 hours of flight time</p>

    <h6>Short Range</h6> 
    <p>150 km with 8 to 12 hours of flight time</p>

    <h6>Mid Range</h6> 
    <p>650 km with almost a day of flight time (24hrs)</p>

    <h6>Drone Capabilities - Endurance and Range</h6>
    <p>
        The equation for Endurance or the amount of time a drone can stay in that air is given by:
    </p>

    @include('_partials.equation', [ 'equation' => '
        \sf{Endurance(hours)} = \mathsf{Battery \; Capacity \; (Ampere - hours) \over Current \; (Ampere)}
    '])

    <p>
        As for the Range or the measurement of how far a drone can fly from its controller is estimated by:
    </p>

    @include('_partials.equation', ['equation' => '
        \sf{Range(miles)} = \mathsf{Endurance \times Pitch \times 60 \times 1V \times kV \over 12 \times 5260}
    '])

    <p>where:</p>
    <ul>
        <li>
            <b>kV (kiloVolt)</b>
            - number of RPM (Revolutions Per Minute) the motor will turn when 1V of voltage is applied.
        </li>
        <li>
            <b>Pitch</b>
            - pitch of propeller in inches
        </li>
        <li>
            <b>Endurance</b>
            - number of hours a drone can stay in mid-air
        </li>
    </ul>

    <p>&nbsp;</p>

    <h3 id="by-artificial-intelligence">By Artificial Intelligence (AI)</h3>
    <p>
        Lastly, according to a book written by (Tzivaras, 2016), drones can be further categorized into three types based on the
        level of artificial intelligence (AI) in their flight controller.
    </p>

    <h6>Fully Remote-controlled Vehicles (Fully RCV)</h6>
    <p>
        This type of craft is entirely operated by a pilot from a ground station, this is usually the most favored style of
        hobbyist. On the other hand, it somehow contradicts the definition of a robot that has to be autonomous, has a program
        or brain of its own.
    </p>
    
    <h6>Hybrid Remote-controlled Vehicles (Hybrid RCV)</h6>
    <p>
        This type of craft lies between a fully RCV and a completely autonomous one. This is made possible by putting
        pre-defined instructions to the microcontroller like navigation points during flight time.
    </p> 

    <h6>Fully Autonomous Flying Vehicles</h6>
    <p>
        This type of craft does not have a pilot. The user will just attach the battery to the device and let it fly on its own.
        Drones may be equipped with sensors, including GPS, accelerometers, cameras, or combinations. Every second, the
        controller collects data from all sensors and autonomously evaluates how and where it should go depending on the task
        plan. Since these are incredibly difficult to build, hybrid RCVs are recommended when in need of a craft with autonomous
        functions.
    </p>
@endsection

@push('scripts')
    <script src="{{ $page->link(mix('js/mathjax.js', 'assets/build')) }}" id="MathJax-script" async></script>
@endpush