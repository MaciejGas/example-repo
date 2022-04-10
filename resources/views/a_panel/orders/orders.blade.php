@extends('a_panel')

@section('content')


<div class="container">
    

<div class="row mt-5">
    <div class="col-12">
        <p class="fs-3">Rezerwacje</p>
    </div>
</div>

<div class="row mt-2">

    <div class="col-4">
        <div class="first-element">
            <div class="row">
                <div class="col-6">
                    <h4>Total</h4>
                    <strong>{{ $allorders }}</strong>
                </div>
                <div class="col-6">
                    <i class="fa fa-bookmark fa-3x"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-4">
        <div class="first-element">
            <div class="row">
                <div class="col-6">
                    <h4>Ten tydzień</h4>
                    <strong>{{ $weekorders }}</strong>
                </div>
                <div class="col-6">
                    <i class="fa fa-hand-o-right fa-3x"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-4">
        <div class="first-element">
            <div class="row">
                <div class="col-6">
                    <h4>Ten miesiąc</h4>
                    <strong>{{ $monthorders }}</strong>
                </div>
                <div class="col-6">
                    <i class="fa fa-puzzle-piece fa-3x"></i>
                </div>
            </div>
        </div>
    </div>

</div>


    <div class="row mt-5">

        <div class="col-12">
            <h4>Rezerwacje</h4>
            <div class="second-element">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Imie</th>
                    <th scope="col">Nazwisko</th>
                    <th scope="col">Data</th>
                    <th scope="col">Status</th>
                    <th scope="col">Akcja</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ordersList as $order)
                    <tr>
                    <th scope="row">{{ $order->id }}</th>
                    <td>{{ $order->client->name }}</td>
                    <td>{{ $order->client->surname }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>{{ $order->status }}</td>
                    <td><a href="{{ URL::to('/a_orders' , [$order->id] )}}"><button type="button" class="btn btn-dark">Zatwierdź</button></a>
                        <a href="{{ URL::to('/a_orders/delete' , [$order->id] )}}"><button type="button" class="btn btn-danger">Usuń</button></a>
                    </td>                  
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>

@endsection('content')