@extends('c_panel')

@section('content')



<div class="container">
    <div class="row text-center mt-5">
        <div class="col-12">
            <p class="fs-2">Cześć, {{Auth::user()->name }}</p>
            <p class="fs-6"> 
                Wysyłaj wiadomości, sprawdzaj ich historię, rezerwuj terminy.
                Nasz zespół artystów pomoże Ci dopasować odpowiedni wzór.                
            </p>
        </div>              
    </div>

    <div class="row">
        <div class="col-2">
            <div class="third-element">
                <img src="{{ asset('img/1.jpg') }}" class="img-fluid">
            </div>
        </div>
        <div class="col-2">
            <div class="third-element">
                <img src="{{ asset('img/2.jpg') }}" class="img-fluid">
            </div>
        </div>
        <div class="col-2">
            <div class="third-element">
                <img src="{{ asset('img/3.jpg') }}" class="img-fluid">
            </div>
        </div>
        <div class="col-2">
            <div class="third-element">
                <img src="{{ asset('img/4.jpg') }}" class="img-fluid">
            </div>
        </div>
        <div class="col-2">
            <div class="third-element">
                <img src="{{ asset('img/5.jpg') }}" class="img-fluid">
            </div>
        </div>
        <div class="col-2">
            <div class="third-element">
                <img src="{{ asset('img/6.jpg') }}" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-3">
            <div class="third-element">
                <img src="{{ asset('img/9.jpg') }}" class="img-fluid">
            </div>
        </div>
        <div class="col-3">
            <div class="third-element">
                <img src="{{ asset('img/10.jpg') }}" class="img-fluid">
            </div>
        </div>
        <div class="col-3">
            <div class="third-element">
                <img src="{{ asset('img/11.jpg') }}" class="img-fluid">
            </div>
        </div>
        <div class="col-3">
            <div class="third-element">
                <img src="{{ asset('img/12.jpg') }}" class="img-fluid">
            </div>
        </div>
    </div>
    
</div>


@endsection('content')