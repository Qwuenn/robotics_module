{{-- Heading --}}
<h3 id="quiz"><b>Quiz</b></h3>

{{-- Button trigger modal --}}
<button type="button"
    class="btn btn-default-yellow mt-3" 
    data-bs-toggle="modal" 
    data-bs-target="#modalQuiz">
    Click to answer
</button>

{{-- Modal Questionnaire --}}
<div class="modal fade" 
    id="modalQuiz" 
    tabindex="-1" 
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header bg-sky-blue border-0">
                <div class="d-flex flex-column">
                    <h4 class="modal-title fw-semibold" id="exampleModalLabel">Robotics for Kids!</h4>
                    <h6 class="modal-title">Activity {{ $activityNo }} - {{ $title }}</h6>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex flex-column justify-content-center my-2 w-md-50 mx-auto">
                    <div id="modal-body-quiz">
                        <div id="quiz-start-screen" class="text-center mt-5">
                            <h1>Pop-up Quiz {{ $activityNo }}<h1>
                            <button id="quiz-start-btn" class="btn btn-outline-primary rounded-6 w-25 mt-5">Start</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>