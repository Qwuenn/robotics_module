@extends('_layouts.module')

@section('introduction')
    <h1>Circuit Diagram</h1>
    <p>&nbsp;</p>
@endsection

@section('content')
    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/adults/modules/2/circuit-diagram.png'),
        'alt' => 'Circuit Diagram of the Fire Fighter Robot'
    ])
@endsection