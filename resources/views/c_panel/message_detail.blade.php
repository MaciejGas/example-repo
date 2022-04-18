@extends('c_panel')

@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <div class="second-element">
                <ul class="list-group">
                <small>ID :</small><li class="list-group-item">{{ $message->id }}</li>
                <small>Temat :</small><li class="list-group-item"> {{ $message->topic}}</li>
                </ul>
            </div>
        </div>
        <div class="col-12 mt-3">
            <div class="second-element">
                <p class="fs-2">Wiadomość :</p>
                <div class="row alert-success">
                    {{ $message->question }}
                </div>
            </div>
            <div class="second-element mt-3">
                <p class="fs-2">Odpowiedź :</p>
                <div class="row alert-danger mt-3">
                    @foreach($answer as $content)
                            {{ $content->answer_body }}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')
