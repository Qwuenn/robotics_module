@extends('_layouts.module')

@section('introduction')
    <h1 id="introduction">Rules and Requirements</h1>
    <p>
        Two Sumo Bots of the opposing teams will compete in a match like the rules of a human Sumo match. Sumo Bots are not
        allowed to use a weapon and are also not allowed to flip the opponent Sumo Bot. The two robots must only use force to
        push each other out of the arena.
    </p>
    <p>&nbsp;</p>
@endsection

@section('table_of_contents')
    @include('_toc.toc', [ 'items' => [
        'Introduction',
        'Requirements for the Dohyo',
        'Sumo Bot Restrictions',
        'Sumo Matches'
    ]])
@endSection

@section('content')
    <h3 id="requirements-for-the-dohyo">Requirements for the Dohyo</h3>
    <p>
        The ring where the Sumo Bots will compete must be a black, circular ring with an outer white ring to prevent the Sumo
        Bots from going outside the ring. Two thick brown lines (Shikiri Lines) at the center of the ring will be the Sumo Bots
        starting area before the match.
    </p>

    <div class="container-fluid text-center p-0">
        <div class="row row-cols-1 gy-4">
            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/teens/modules/1/dohyo/dohyo-isometric-south-east.png'),
                'alt' => 'Dohyo South East Isometric View',
                'label' => 'South East Isometric View'
            ])

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/teens/modules/1/dohyo/dohyo-isometric-south-west.png'),
                'alt' => 'Dohyo South West Isometric View',
                'label' => 'South West Isometric View'
            ])

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/teens/modules/1/dohyo/dohyo-top.png'),
                'alt' => 'Dohyo Top View',
                'label' => 'Top View'
            ])
        </div>
    </div>

    <p>&nbsp;</p>

    <h3 id="sumo-bot-restrictions">Sumo Bot Restrictions</h3>
    <p>The following are a list of devices that are not allowed in the match:</p>
    <ol>
        <li>
           <p>Jamming devices that can hinder the IR sensor of the enemy Sumo Bot.</p>
        </li>
        <li>
            <p>Devices that could break or damage the ring, and that can cause damage or injuries to the Sumo Bot or the operator.</p>
        </li>
        <li>
            <p>Devices that can hold powder, liquid, or gas that can be throw at the enemy Sumo Bot.</p>
        </li>
        <li>
            <p>Devices that spew flames.</p>
        </li>
        <li>
            <p>Devices that throw things at the enemy Sumo Bot.</p>
        </li>
    </ol>

    <p>&nbsp;</p>

    <h3 id="sumo-matches">Sumo Matches</h3>
    <p>Rules in conducting a Robot Sumo Match:</p>
    <ol>
        <li>
           <p>One match is made up of three rounds with three minutes each round unless the judges extended it.</p>
        </li>
        <li>
            <p>
                The team that wins two round or receive two points wins the match. A team will get a point if they win the round. If the
                time limit is reached and no team got two points but one team manages to win a point, the team with a point wins the
                match.
            </p>
        </li>
        <li>
            <p>
                When the match is not won by either of the team, the judges can extend the match with the team winning a point wins
                the match. A draw can also be decided by a rematch or drawing lots.
            </p>
        </li>
        <li>
            <p>
                Before a match, the two teams will bow to each other on the outer ring and approach the ring and place the Sumo
                Bots behind the Shikiri Line. Teams must then clear the area and after the judges officially start the round, the
                team may start their Sumo Bots and wait five seconds before they can start operating.
            </p>
        </li>
        <li>
            <p>The match ends if the judge says so and teams retrieve their Sumo Bot from the ring and bow to each other at the outer ring.</p>
        </li>
    </ol>
@endsection