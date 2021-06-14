@extends('_layouts.module')

@section('introduction')
    <h1>Multirotor Drones</h1>
    <p>&nbsp;</p>
@endsection

@section('table_of_contents')
    @include('_toc.toc', [ 'items' => [
        'Introduction',
        'Advantages',
        'Disadvantages'
    ]])
@endSection

@section('content')
    <h3 id="introduction">Introduction</h3>
    <p>
        The multi-rotor drone is the most common type of drone for having an “eye in the sky”. Hence, it became very popular for
        aerial photography, filming, and surveillance. And because of its compact size and ready-to-fly capability, it is used
        by both enthusiasts and professionals.
    </p>

    <p>
        Multi-rotor drones are also the most cost-effective and easiest to produce and they have multiple rotors on their body
        which are further categorized based on the number of rotors on the drone's platform. It is further categorized as
        follows: Tricopters (3 rotors), quadcopters (4 rotors), hexacopters (6 rotors), and octocopters (8 rotors). By far, the
        most famous multi-rotor drones are quadcopters.
    </p>

    <p>
        This module will be using a drone that falls under <b>multirotor</b> classification, a <b>quadcopter</b> in specific,
        <b>small</b> in size, for <b>very close range</b>, and is a <b>fully RCV</b>. Thus, below is the list of comparisons of
        multirotor vs other categories (e.g single-rotor).
    </p>

    <p>&nbsp;</p>

    <h3 id="advantages">Advantages</h3>
    <p>Below are some of the advantages of multirotor drones: </p>
    <ul>
        <li>
            Easy to control and have increased maneuverability, can go up and down in the same vertical line, side to side, back
            to front, and rotate on their axis;
        </li>
        <li>
            Have the ability to hover or retain balance in the air;
        </li>
        <li>
            Can do vertical take-offs and landing; and
        </li>
        <li>
            Extremely stable.
        </li>
    </ul>

    <p>&nbsp;</p>

    <h3 id="disadvantages">Disadvantages</h3>
    <p>Below are some of the advantages of multirotor drones: </p>
    <ul>
        <li>
            Have a minimal amount of flight time (usually 15-30 minutes);
        </li>
        <li>
            Can only carry a limited cargo;
        </li>
        <li>
            Susceptible to wind due to low weight; and
        </li>
        <li>
            The majority of the drone's energy is spent battling gravity and maintaining stability in the air.
        </li>
    </ul>
@endsection

