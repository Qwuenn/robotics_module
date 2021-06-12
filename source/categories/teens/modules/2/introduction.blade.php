@extends('_layouts.module')

@section('introduction')
    <h1>Introduction to Drone Technology</h1>
    <p>&nbsp;</p>
    <h3 id="intended-learning-outcomes">Intended Learning Outcomes</h3>
    <p class="mb-0">After successful completion of this module, the student will be able to:</p>
    <ul>
        <li>Understand the concepts, and characteristics of the drone.</li>
        <li>Distinguish the advantages and disadvantages of drone.</li>
        <li>Enumerate the classifications of drone.</li>
        <li>Learn the basic knowledge about quadcopters.</li>
        <li>Build and design a personalized quadcopter.</li>
    </ul>
    <p>&nbsp;</p>
@endsection

@section('table_of_contents')
    @include('_toc.toc', [ 'items' => [
        'Intended Learning Outcomes',
        'What is a Drone?',
        'Etymology'
    ]])
@endSection

@section('content')
    <h3 id="what-is-a-drone">What is a Drone?</h3>
    <p>
        Unmanned aerial vehicle (UAV) or unmanned aircraft systems (UAS), also known as a drone, is an aircraft that may or may
        not be piloted by a human. A drone is a flying robot that can be operated remotely or autonomously using software
        installed in the microcontroller, in combination with sensors and GPS. Drones can vary in size, from as huge like an
        aircraft to as small as the palm of a hand.
    </p>
    <p>
        Outer space, hurricane-prone areas, Antarctica, or even on one's balcony, any of these locations is less extreme than
        the other, but that's the point of using drones in the first place. In addition to that, drones are designed to perform
        tasks ranging from dull to extremely hazardous places.
    </p>

    <p>&nbsp;</p>

    <h3 id="etymology">Etymology</h3>
    <p>
        The term "drone" is an Old English word that was first used to refer to a male bee whose sole purpose in life is to mate
        with the queen bee. Later, in 1930, the British Royal Navy built an autonomous vehicle – the British DH 82B Queen Bee,
        which was later replicated by the US Navy after US Admiral William H. Standley saw a demonstration of the
        remotely-controlled aircraft. He then charged Commander Delmer Fahrney with designing a similar vehicle for the US Navy.
        Commander Fahrney used the term "drone" to describe the aircraft they are developing in honor of the Queen Bee which was
        later named Curtiss N2C-2.
    </p>
@endsection