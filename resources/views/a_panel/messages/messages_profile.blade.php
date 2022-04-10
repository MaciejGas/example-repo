@extends('a_panel')

@section('content')

<div class="container">

    <div class="row mt-5">
        <div class="col-12">
            <div class="second-element">
                <div class="row">
                    <div class="col-6">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                            <small>Id :</small>{{ $message->id }}</li> 
                            <li class="list-group-item">
                            <small>Imię :</small>{{ $message->client->name }}</li> 
                            <li class="list-group-item">
                            <small>Nazwisko :</small>{{ $message->client->surname }}</li> 
                            <li class="list-group-item">
                            <small>Temat :</small>{{ $message->topic }}</li> 
                            <li class="list-group-item">
                            <small>Treść :</small>{{ $message->question }}</li> 
                            <li class="list-group-item">
                        </ul>
                    </div>
                    <div class="col-6">
                        <div class="d-flex justify-content-end">
                            <a href="{{ URL::to('/a_answer_create' , [$message->id] )}}"><button type="button" class="btn btn-dark">Odpowiedz</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection('content')