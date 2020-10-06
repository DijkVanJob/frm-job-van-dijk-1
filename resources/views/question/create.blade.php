@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Questionnaire</div>

                <div class="card-body">
                    <form action="/questionnaires/{{ $questionnaire->id }}/questions" method="post">

                        @csrf

                        <div class="form-group">
                            <label for="question">Question</label>
                            <input name="question[question]" type="text" class="form-control" id="question" aria-describedby="questionHelp" placeholder="Enter question">
                            <small id="questionHelp" class="form-text text-muted">Ask a simple question.</small>

                            @error('question.question')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <fieldset>
                                <legend>Choices</legend>
                            </fieldset>

                            <div>
                                <div class="form-group">
                                    <label for="answer1">Choice 1</label>
                                    <input name="answers[][answer]" type="text" class="form-control" id="answer1" placeholder="Enter answer">

                                    @error('answers.0.answer')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <div class="form-group">
                                    <label for="answer2">Choice 2</label>
                                    <input name="answers[][answer]" type="text" class="form-control" id="answer2"  placeholder="Enter answer">

                                    @error('answers.1.answer')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <div class="form-group">
                                    <label for="answer3">Choice 3</label>
                                    <input name="answers[][answer]" type="text" class="form-control" id="answer3"  placeholder="Enter answer">

                                    @error('answers.2.answer')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <div class="form-group">
                                    <label for="answer4">Choice 4</label>
                                    <input name="answers[][answer]" type="text" class="form-control" id="answer4"  placeholder="Enter answer">

                                    @error('answers.3.answer')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
