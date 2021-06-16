@extends('_layouts.module')

@section('introduction')
    <h1>Design</h1>
    <p>&nbsp;</p>
@endsection

@section('content')
    <div class="container-fluid text-center p-0">
        <div class="row row-cols-1 gy-4">
            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/kids/modules/2/design/robot-arm-control-box.png'),
                'alt' => 'Robot Arm Control Box',
                'label' => 'Control Box'
            ])

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/kids/modules/2/design/robot-arm-base.png'),
                'alt' => 'Robot Arm Base',
                'label' => 'Base'
            ])

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/kids/modules/2/design/robot-arm-grip-holder.png'),
                'alt' => 'Robot Arm Grip Holder/Elbow',
                'label' => 'Grip Holder/Elbow'
            ])

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/kids/modules/2/design/robot-arm-grip.png'),
                'alt' => 'Robot Arm Grip',
                'label' => 'Grip'
            ])

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/kids/modules/2/design/robot-arm-isometric-1.png'),
                'alt' => 'Robot Arm Isometric 1',
                'label' => 'Isometric View 1'
            ])

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/kids/modules/2/design/robot-arm-isometric-2.png'),
                'alt' => 'Robot Arm Isometric 2',
                'label' => 'Isometric View 2'
            ])
        </div>
    </div>
@endsection