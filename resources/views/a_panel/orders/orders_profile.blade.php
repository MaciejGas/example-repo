@extends('a_panel')

@section('content')

<div class="container">
    <div class="row mt-3">
        <div class="col-lg-6 col-sm-12">
            <div class="second-element">
                <p class="fs-2">Dane zgłoszenia</p>
                <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <small>Id :</small>{{ $order->id }}</li>                       
                        <li class="list-group-item">
                            <small>Imię :</small>{{ $order->client->name }}</li>
                        <li class="list-group-item">
                            <small>Nazwisko :</small>{{ $order->client->surname }}</li>
                        <li class="list-group-item">
                            <small>Email :</small>{{ $order->client->email }}</li>
                        <li class="list-group-item">
                            <small>Telefon :</small>{{ $order->client->phone }}</li>
                        <li class="list-group-item">
                            <small>długość :</small>{{ $order->width }} cm</li>
                        <li class="list-group-item">
                            <small>szerokość :</small>{{ $order->height }} cm</li>
                        <li class="list-group-item">
                            <small>miejsce :</small>{{ $order->place }}</li>
                        <li class="list-group-item">
                            <small>kolor :</small>{{ $order->color }}</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="second-element">
                <p class="fs-2">Opis</p>
                {{ $order->description }}                      
            </div>
            <div class="mt-5 text-center">
                <a href="{{ URL::to('/a_orders_edit' , [$order->id] )}}"><button type="button" class="btn btn-dark">Zatwierdź</button></a>
            </div>
        </div>
    </div>
</div>

@endsection('content')