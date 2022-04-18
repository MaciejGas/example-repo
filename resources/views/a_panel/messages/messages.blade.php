@extends('a_panel')

@section('content')


<div class="container">

    <div class="row mt-5">
        <div class="col-12">
            <p class="fs-1">Wiadomości</p>
        </div>
    </div>

    <div class="row">        
        <div class="col-md-4 col-sm-12 mt-2">
            <div class="first-element">
                <div class="row">
                    <div class="col-6">
                        <h4>Wszystkie</h4>
                        <strong>{{ $allmessages }}</strong>
                    </div>
                    <div class="col-6">
                        <i class="fa fa-send-o fa-3x"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 mt-2">
            <div class="first-element">
                <div class="row">
                    <div class="col-6">
                        <h4>Tydzień</h4>
                        <strong>{{ $weekmessages }}</strong>
                    </div>
                    <div class="col-6">
                        <i class="fa fa-send-o fa-3x"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 mt-2">
            <div class="first-element">
                <div class="row">
                    <div class="col-6">
                        <h4>Miesiąc</h4>
                        <strong>{{ $monthmessages }}</strong>
                    </div>
                    <div class="col-6">
                        <i class="fa fa-send-o fa-3x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5 mb-3">
        <div class="col-12">
            <div class="second-element table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Imię</th>
                        <th scope="col">Nazwisko</th>
                        <th scope="col">Temat</th>
                        <th scope="col">Akcja</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($messagesList as $message)
                        <tr>
                        <th scope="row">{{ $message->id }}</th>
                        <td>{{ $message->client->name }}</td>
                        <td>{{ $message->client->surname }}</td>
                        <td>{{ $message->topic}}</td>
                        <td><a href="{{ URL::to('/a_messages' , [$message->id] )}}"><button type="button" class="btn btn-dark">Odpowiedz</button></a></td>
                        </tr>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>   
        </div>
    </div>
</div>

@endsection('content')