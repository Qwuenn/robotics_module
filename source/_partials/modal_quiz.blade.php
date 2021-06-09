{{-- Button trigger modal --}}
<button type="button"
    class="btn btn-default-yellow mt-3" 
    data-bs-toggle="modal" 
    data-bs-target="#{{ isset($id) ? $id : 'modalQuiz' }}">
    {{ isset($buttonText) ? $buttonText : 'Click to answer' }}
</button>

{{-- Modal Questionnaire --}}
<div class="modal fade" 
    id="{{ isset($id) ? $id : 'modalQuiz' }}" 
    tabindex="-1" 
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header bg-sky-blue border-0">
                @isset ($modalTitle)
                    <h5 class="modal-title fw-semibold" id="exampleModalLabel">{{ $modalTitle }}</h5>
                @endisset
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex flex-column justify-content-center my-2 w-md-50 mx-auto">
                    <div id="quiz-modal-body">
                        <div id="quiz-start-screen" class="text-center mt-5">
                            @isset ($quizHeader)
                                <h2 class="fw-semibold mb-3">{{ $quizHeader }}</h2>
                            @endisset

                            @isset ($quizDescription)
                                <h5>{{ $quizDescription }}</h5>
                            @endisset
                            <button id="quiz-start-btn" class="btn btn-outline-primary rounded-6 w-25 mt-4">Start</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>