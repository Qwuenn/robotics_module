window.$ = window.jQuery = require('jquery');

; (function ($, window, document, undefined) {

    'use strict';

    $.quiz = function (el, options) {
        var base = this;

        // Access to jQuery version of element
        base.$el = $(el);

        // Add a reverse reference to the DOM object
        base.$el.data('quiz', base);

        base.options = $.extend($.quiz.defaultOptions, options);

        var questions = base.options.questions,
            numQuestions = questions.length,
            startScreen = base.options.startScreen,
            startButton = base.options.startButton,
            homeButton = base.options.homeButton,
            resultsScreen = base.options.resultsScreen,
            gameOverScreen = base.options.gameOverScreen,
            nextButtonText = base.options.nextButtonText,
            finishButtonText = base.options.finishButtonText,
            restartButtonText = base.options.restartButtonText,
            currentQuestion = 1,
            score = 0,
            answerLocked = false;

        base.methods = {
            init: function () {
                base.methods.setup();

                $(document).on('click', startButton, function (e) {
                    e.preventDefault();
                    base.methods.start();
                });

                $(document).on('click', homeButton, function (e) {
                    e.preventDefault();
                    base.methods.home();
                });

                $(document).on('click', '.answers div', function (e) {
                    e.preventDefault();
                    base.methods.answerQuestion(this);
                });

                $(document).on('click', '#quiz-next-btn', function (e) {
                    e.preventDefault();
                    base.methods.nextQuestion();
                });

                $(document).on('click', '#quiz-finish-btn', function (e) {
                    e.preventDefault();
                    base.methods.finish();
                });

                $(document).on('click', '#quiz-restart-btn, #quiz-retry-btn', function (e) {
                    e.preventDefault();
                    base.methods.restart();
                });
            },
            setup: function () {
                var quizHtml = '';

                if (base.options.counter) {
                    quizHtml += '<div class="mb-3" id="quiz-counter"></div>';
                }

                quizHtml += '<div id="questions">';
                $.each(questions, function (i, question) {
                    quizHtml += '<div class="question-container">';
                    quizHtml += '<h5 class="question">' + question.q + '</h5>';
                    quizHtml += '<div class="answers mt-5 d-grid gap-3 text-decoration-none">';
                    $.each(question.options, function (index, answer) {
                        quizHtml += '<div class="p-3 border shadow-sm rounded-3 cursor-pointer choice" data-index="' + index + '">' + answer + '</div>';
                    });
                    quizHtml += '</div>';
                    quizHtml += '</div>';
                });
                quizHtml += '</div>';

                // if results screen not in DOM, add it
                if ($(resultsScreen).length === 0) {
                    quizHtml += '<div id="' + resultsScreen.substr(1) + '"class="mt-5">';
                    quizHtml += '<h4 id="quiz-results" class="text-center"></h4>';
                    quizHtml += '</div>';
                }

                quizHtml += '<div id="quiz-controls" class="text-center mt-4">';
                quizHtml += '<p id="quiz-response"></p>';
                quizHtml += '<div id="quiz-buttons">';
                quizHtml += '<button id="quiz-next-btn" class="btn btn-outline-primary rounded-6 w-25">' + nextButtonText + '</button>';
                quizHtml += '<button id="quiz-finish-btn" class="btn btn-outline-primary rounded-6 w-25">' + finishButtonText + '</button>';
                quizHtml += '<button id="quiz-restart-btn" class="btn btn-outline-primary rounded-6 w-25">' + restartButtonText + '</button>';
                quizHtml += '</div>';
                quizHtml += '</div>';

                base.$el.append(quizHtml).addClass('quiz-container quiz-start-state');

                $('#quiz-counter').hide();
                $('.question-container').hide();
                $(gameOverScreen).hide();
                $(resultsScreen).hide();
                $('#quiz-controls').hide();

                if (typeof base.options.setupCallback === 'function') {
                    base.options.setupCallback();
                }
            },
            start: function () {
                base.$el.removeClass('quiz-start-state').addClass('quiz-questions-state');
                $(startScreen).hide();
                $('#quiz-controls').hide();
                $('#quiz-finish-btn').hide();
                $('#quiz-restart-btn').hide();
                $('#questions').show();
                $('#quiz-counter').show();
                $('.question-container:first-child').show().addClass('active-question');
                base.methods.updateCounter();
            },
            answerQuestion: function (answerEl) {
                if (answerLocked) {
                    return;
                }
                answerLocked = true;

                var $answerEl = $(answerEl),
                    response = '',
                    selected = $answerEl.data('index'),
                    currentQuestionIndex = currentQuestion - 1,
                    correct = questions[currentQuestionIndex].correctIndex;

                if (selected === correct) {
                    $answerEl.addClass('bg-success border-success text-white');
                    response = questions[currentQuestionIndex].correctResponse;
                    score++;
                } else {
                    $answerEl.addClass('bg-danger border-danger text-white');
                    response = questions[currentQuestionIndex].incorrectResponse;
                    if (!base.options.allowIncorrect) {
                        base.methods.gameOver(response);
                        return;
                    }
                }

                $('#quiz-response').html(response);
                $('#quiz-controls').fadeIn();

                if (typeof base.options.answerCallback === 'function') {
                    base.options.answerCallback(currentQuestion, selected, questions[currentQuestionIndex]);
                }
            },
            nextQuestion: function () {
                answerLocked = false;

                $('.active-question')
                    .hide()
                    .removeClass('active-question')
                    .next('.question-container')
                    .show()
                    .addClass('active-question');

                $('#quiz-controls').hide();

                // check to see if we are at the last question
                if (++currentQuestion === numQuestions) {
                    $('#quiz-next-btn').hide();
                    $('#quiz-finish-btn').show();
                }

                base.methods.updateCounter();

                if (typeof base.options.nextCallback === 'function') {
                    base.options.nextCallback();
                }
            },
            gameOver: function (response) {
                // if gameover screen not in DOM, add it
                if ($(gameOverScreen).length === 0) {
                    var quizHtml = '';
                    quizHtml += '<div id="' + gameOverScreen.substr(1) + '">';
                    quizHtml += '<p id="quiz-gameover-response"></p>';
                    quizHtml += '<p><a href="#" id="quiz-retry-btn">' + restartButtonText + '</a></p>';
                    quizHtml += '</div>';
                    base.$el.append(quizHtml);
                }
                $('#quiz-gameover-response').html(response);
                $('#quiz-counter').hide();
                $('#questions').hide();
                $('#quiz-finish-btn').hide();
                $(gameOverScreen).show();
            },
            finish: function () {
                base.$el.removeClass('quiz-questions-state').addClass('quiz-results-state');
                $('.active-question').hide().removeClass('active-question');
                $('#quiz-counter').hide();
                $('#quiz-response').hide();
                $('#quiz-finish-btn').hide();
                $('#quiz-next-btn').hide();
                $('#quiz-restart-btn').show();
                $(resultsScreen).show();
                var resultsStr = base.options.resultsFormat.replace('%score', score).replace('%total', numQuestions);
                $('#quiz-results').html(resultsStr);

                if (typeof base.options.finishCallback === 'function') {
                    base.options.finishCallback();
                }
            },
            restart: function () {
                base.methods.reset();
                base.$el.addClass('quiz-questions-state');
                $('#questions').show();
                $('#quiz-counter').show();
                $('.question-container:first-child').show().addClass('active-question');
                base.methods.updateCounter();
            },
            reset: function () {
                answerLocked = false;
                currentQuestion = 1;
                score = 0;
                $('.answers div').removeClass('bg-success bg-danger border-success border-danger text-white');
                base.$el.removeClass().addClass('quiz-container');
                $('#quiz-restart-btn').hide();
                $(gameOverScreen).hide();
                $(resultsScreen).hide();
                $('#quiz-controls').hide();
                $('#quiz-response').show();
                $('#quiz-next-btn').show();
                $('#quiz-counter').hide();
                $('.active-question').hide().removeClass('active-question');

                if (typeof base.options.resetCallback === 'function') {
                    base.options.resetCallback();
                }
            },
            home: function () {
                base.methods.reset();
                base.$el.addClass('quiz-start-state');
                $(startScreen).show();

                if (typeof base.options.homeCallback === 'function') {
                    base.options.homeCallback();
                }
            },
            updateCounter: function () {
                var countStr = base.options.counterFormat.replace('%current', currentQuestion).replace('%total', numQuestions);
                $('#quiz-counter').html(countStr);
            }
        };

        base.methods.init();
    };

    $.quiz.defaultOptions = {
        allowIncorrect: true,
        counter: true,
        // counterFormat: '%current/%total',
        counterFormat: 'Question %current of %total',
        startScreen: '#quiz-start-screen',
        startButton: '#quiz-start-btn',
        homeButton: '#quiz-home-btn',
        resultsScreen: '#quiz-results-screen',
        resultsFormat: 'You got %score out of %total correct!',
        gameOverScreen: '#quiz-gameover-screen',
        nextButtonText: 'Next',
        finishButtonText: 'Finish',
        restartButtonText: 'Restart'
    };

    $.fn.quiz = function (options) {
        return this.each(function () {
            new $.quiz(this, options);
        });
    };
}(jQuery, window, document));