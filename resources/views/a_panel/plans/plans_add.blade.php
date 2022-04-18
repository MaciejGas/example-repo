@extends('a_panel')

@section('content')

<div class="container">

    <div class="row mt-5">
        <div class="col-12">
            <p class="fs-1">Nowy termin</p>
        </div>
    </div>

    <div class="row">
        <div class="second-element">
            <form action="{{ url('a_plans_create') }}" method="POST" role="form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                <div class="row">
                    <div class="col-6">
                        <label for="name">Imię</label>
                            <input type="text" class="form-control" name="name" />
                        <label for="surname">Nazwisko</label>
                            <input type="text" class="form-control" name="surname" />  
                        <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" /> 
                        <label for="password">Hasło</label>
                            <input type="text" class="form-control" name="password" /> 
                        <label for="phone">Telefon</label>
                            <input type="text" class="form-control" name="phone" />  
                    </div>
                    <div class="col-6">
                        <label for="title">Tytuł</label>
                            <input type="text" class="form-control" name="title" />
                        <label for="start">Rozpoczęcie</label>
                            <input type="date" class="form-control" name="start" />
                        <label for="end">Zakończenie</label>
                            <input type="date" class="form-control" name="end" />
                        <label for="width">Szerokość</label>
                            <input type="text" class="form-control" name="width" />
                        <label for="height">Wysokość</label>
                            <input type="text" class="form-control" name="height" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <label for="place">Miejsce</label>
                            <input type="text" class="form-control" name="place" />
                        <label for="color">Kolor</label>
                            <input type="text" class="form-control" name="color" />
                    </div>
                    <div class="col-6">
                        <label for="description">Opis</label>
                            <textarea type="text" class="form-control" name="description" rows="4"></textarea> 
                    </div>
                </div>

                <div class="row text-center mt-2">
                    <div class="col-12">
                        <input type="submit" value="Dodaj" class="btn btn-primary mt-2" />
                    </div>                  
                </div>
            </form>    
        </div>
    </div>

</div>

@endsection('content')