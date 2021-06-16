@extends('_layouts.module')

@section('introduction')
    <h1>Application</h1>
    <p>&nbsp;</p>
@endsection

@section('table_of_contents')
    @include('_toc.toc', [ 'items' => [
        'Overview',
        'Military',
        'Commercial',
        'Future Technology'
    ]])
@endSection

@section('content')
    <h3 id="overview">Overview</h3>
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

    <h3 id="military">Military</h3>
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

    <h3 id="commercial">Commercial</h3>
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

    <h3 id="future-technology">Future Technology</h3>
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