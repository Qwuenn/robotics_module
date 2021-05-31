<div id="table-of-contents" class="toc table-of-contents mb-5">
    <div class="d-flex align-items-center pb-1 mb-1 border-bottom disabled">
        <span class="fw-semibold">On this page</span>
    </div>
    <nav>
        @include('_toc.list')
    </nav>
</div>

{{-- 
    Can be

		@include('_toc.toc', ['items' => [
            'List 1',
            'List 2',
            'List 3',
            'List 4' => [
                'Child 1',
                'Child 2',
                'Child 3'
            ]
		]])

    or

		@include('_toc.toc', ['items' => [
            'List 1' => 'list-1',
            'List 2' => 'list-2',
            'List 3' => 'list-3',
            'List 4' => [
                'section' => 'list-4',
                'children' => [
                    'Child 1' => 'child-1',
                    'Child 2' => 'child-2',
                    'Child 3' => 'child-3'
                ]
            ]
		]])
    
    depending on your preference.
--}}