@extends('c_panel')

@section('content')

<div class="container">
    <div class="row mt-5">
        <h4>Zarezerwuj termin</h4>
        <div class="second-element">
            <form action="{{ url('order_create') }}" method="POST" role="form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <div class="form-group">
 
                <label for="width">Długość</label>
                    <input type="text" class="form-control" name="width"/>
                <label for="height">Szerokość</label>
                    <input type="text" class="form-control" name="height"/>
                <label for="place">Miejsce</label>
                    <input type="text" class="form-control" name="place"/>
                <label for="color">Kolor</label>
                    <input type="text" class="form-control" name="color"/>  
                <label for="description">Opis</label>
                    <textarea type="text" class="form-control" name="description" rows="5"></textarea>           
            </div>

                <div class="text-center">    
                        <input type="submit" value="Wyślij" class="btn btn-primary mt-2" />
                </div> 
            </form>
        </div>
    </div>
</div>

@endsection('content')