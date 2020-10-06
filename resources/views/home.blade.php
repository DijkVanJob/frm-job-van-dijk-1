@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/questionnaires/create" class="btn btn-dark">Create New Questionnaire</a>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">
                    <h1 class="display-3">Questionnaires</h1>
                </div>
            </div>

            @foreach($questionnaires as $questionnaire)
                <div class="card mt-2">
                    <div class="card-body">
                        <a class="display-4" href="{{ $questionnaire->path() }}">{{ $questionnaire->title }}</a>
                        <hr>
                        <div>
                            <small>Share this URL.</small>
                            <p>
                                <a href="{{ $questionnaire->publicPath() }}">{{ $questionnaire->publicPath() }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
