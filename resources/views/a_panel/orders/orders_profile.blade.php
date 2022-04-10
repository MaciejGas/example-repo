@extends('a_panel')

@section('content')

<div class="container">

    <div class="row mt-5">
        <div class="second-element">
            <div class="row">
                <div class="col-sm-12 col-md-6">
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
                    </ul>
                </div>
                <div class="col-sm-12 col-md-6">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <small>długość :</small>{{ $order->width }} cm</li>
                        <li class="list-group-item">
                            <small>szerokość :</small>{{ $order->height }} cm</li>
                        <li class="list-group-item">
                            <small>miejsce :</small>{{ $order->place }}</li>
                        <li class="list-group-item">
                            <small>kolor :</small>{{ $order->color }}</li>
                        <li class="list-group-item">

                        </li>
                    </ul>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-12 col-md-6">
                    <h4>Opis</h4>
                    <div class="second-element">
                        {{ $order->description }}
                    </div>  
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="d-flex justify-content-end">
                        <a href="{{ URL::to('/a_orders_edit' , [$order->id] )}}"><button type="button" class="btn btn-dark">Zatwierdź</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection('content')