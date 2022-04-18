@extends('a_panel')

@section('content')

<div class="container">

    <div class="row mt-5">
        <div class="col-12">
            <p class="fs-1">Edycja terminu</p>
        </div>
    </div>

    <div class="row">
        <div class="second-element">
            <form action="{{ url('a_plans_update') }}" method="POST" role="form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="id" value="{{ $event->id }}" />
                <input type="hidden" name="client_id" value="{{ $event->client_id }}" />

                <div class="row">
                    <div class="col-6">
                        <label for="title">Imię</label>
                            <input type="text" class="form-control" name="title" value="{{ $event->title }}"/>
                        <label for="start">Rozpoczęcie</label>
                            <input type="text" class="form-control" name="start" value="{{ $event->start }}"/>
                        <label for="end">Zakończenie</label>
                            <input type="text" class="form-control" name="end" value="{{ $event->end }}" />
                        <label for="client_name">Imie klienta</label>
                            <input type="text" class="form-control" name="client_name" value="{{ $event->client->name}}" disabled/>
                        <label for="client_surname">Nazwisko klienta</label>
                            <input type="text" class="form-control" name="client_surname" value="{{ $event->client->surname }}" disabled/> 
                    </div>
                    <div class="col-6">
                        <label for="width">Długość</label>
                            <input type="text" class="form-control" name="width" value="{{ $event->width }}"/>
                        <label for="height">Szerokość</label>
                            <input type="text" class="form-control" name="height" value="{{ $event->height }}"/>
                        <label for="place">Miejsce</label>
                            <input type="text" class="form-control" name="place" value="{{ $event->place }}"/>
                        <label for="color">Kolor</label>
                            <input type="text" class="form-control" name="color" value="{{ $event->color }}"/>  
                        <label for="description">Opis</label>
                            <input type="textarea" class="form-control" name="description" value="{{ $event->description }}" rows="6" /> 
                    </div>
                </div>

                <div class="row text-center mt-2">
                    <div class="col-12">
                        <input type="submit" value="Zatwierdź" class="btn btn-primary mt-2" />
                    </div>
                </div>

            </form>    
        </div>        
    </div>
</div>

@endsection('content')
