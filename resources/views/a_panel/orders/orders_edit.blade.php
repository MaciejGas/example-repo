@extends('a_panel')

@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="second-element">
            <form action="{{ url('a_orders_confirm') }}" method="POST" role="form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="id" value="{{ $order->id }}" />
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <label for="name">Imię</label>
                        <input type="text" class="form-control" name="name" value="{{ $order->client->name }}" disabled/>
                    <label for="surname">Nazwisko</label>
                        <input type="text" class="form-control" name="surname" value="{{ $order->client->surname }}" disabled/>
                    <label for="client">Identyfikator</label>
                        <input type="text" class="form-control" name="client" value="{{ $order->client->id }}" />
                    <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" value="{{ $order->client->email}}" disabled/>
                    <label for="phone">Telefon</label>
                        <input type="text" class="form-control" name="phone" value="{{ $order->client->phone }}" disabled/>
                </div>
                <div class="col-sm-12 col-md-6">
                    <label for="width">Długość</label>
                        <input type="text" class="form-control" name="width" value="{{ $order->width }}"/>
                    <label for="height">Szerokość</label>
                        <input type="text" class="form-control" name="height" value="{{ $order->height }}"/>
                    <label for="place">Miejsce</label>
                        <input type="text" class="form-control" name="place" value="{{ $order->place }}"/>
                    <label for="color">Kolor</label>
                        <input type="text" class="form-control" name="color" value="{{ $order->color }}"/>  
                    <label for="title">Tytuł</label>
                        <input type="text" class="form-control" name="title"/>
                </div>
            </div>   
            
            <div class="row mt-4">
                <div class="col-sm-12 col-md-6">
                    <div class="element">
                        @include('a_panel.orders.fullcalender') 
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <label for="description">Opis</label>
                        <textarea type="text" class="form-control" name="description" value="{{ $order->description }}" rows="6"></textarea>    
                    <label for="date_start">Rozpoczęcie</label>
                        <input type="date" class="form-control" name="date_start"/>  
                    <label for="date_end">Zakończenie</label>
                        <input type="date" class="form-control" name="date_end"/> 

                        <div class="text-center">    
                    <input type="submit" value="Zatwierdź" class="btn btn-success mt-5" />
                        </div>  
                </div>
            </div>  

            </form>    
        </div>
    </div>
</div>

@endsection('content')
