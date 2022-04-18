@extends('a_panel')

@section('content')

<div class="container">

    <div class="row mt-5">
        <div class="col-12">
            <p class="fs-1">Planning</p>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 mt-2">
            <div class="second-element table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Klient</th>
                        <th scope="col">Data</th>
                        <th scope="col">Akcje</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($plansList as $plan)
                        <tr>
                        <th scope="row">{{ $plan->id }}</th>
                        <td>{{ $plan->client->name }} {{ $plan->client->surname }}</td>
                        <td>{{ $plan->start }}</td>
                        <td><a href="{{ URL::to('/a_plans/edit' , [$plan->id] )}}"><button type="button" class="btn btn-info">Edytuj</button></a>
                            <a href="{{ URL::to('/a_plans/delete' , [$plan->id] )}}"><button type="button" class="btn btn-danger">Usuń</button></a></td>
                        </tr>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-12 mt-5">
            <div class="second-element">
                @include('a_panel.orders.fullcalender')
            </div>
        </div>
    </div>

    <div class="row mt-5">
    <a href="{{ URL::to('/a_plans/add')}}"><button type="button" class="btn btn-success">Dodaj termin</button></a>
    </div>

</div>

@endsection('content')