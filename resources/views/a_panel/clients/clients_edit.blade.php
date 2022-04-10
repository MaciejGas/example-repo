@extends('a_panel')

@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="second-element">        
            <form action="{{ url('a_clients_edit') }}" method="POST" role="form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="id" value="{{ $client->id }}" />
            <div class="form-group">
                <label for="name">Imię</label>
                    <input type="text" class="form-control" name="name" value="{{ $client->name }}"/>
                <label for="surname">Nazwisko</label>
                    <input type="text" class="form-control" name="surname" value="{{ $client->surname }}"/>
                <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $client->email }}"/>
                <label for="phone">Telefon</label>
                    <input type="text" class="form-control" name="phone" value="{{ $client->phone }}"/>         
            </div>

            <div class="text-center">    
                    <input type="submit" value="Edytuj" class="btn btn-primary mt-2" />
            </div>  

        </form>
        </div>
    </div>

</div>

@endsection('content')