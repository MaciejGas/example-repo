@extends('a_panel')

@section('content')

<div class="container">
    <div class="row text-center mt-5">
        <h1>Panel administratora</h1>
    </div>

    <div class="row mt-5">
        
        <div class="col-8">
            <div class="first-element">
                <p class="fs-3">Treści strony głównej</p>
                    <div class="row">
                    @foreach ($Contents as $content)
                        <div class="col-6">
                           <p>{{ $content->name }}</p>
                           <form action="{{ url('a_content_update') }}" method="POST" role="form">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <input type="hidden" class="form-control" name="item_id" value="{{ $content->id }}"/>
                                    <textarea type="text" name="content" rows="4" cols="30" placeholder="{{ $content->content }}"></textarea> 
                                <button type="submit" class="btn btn-info">Zmień</button>   
                            </form>
                        </div>
                    @endforeach
                    </div>
            </div>
        </div>
        <div class="col-4 ">
            <div class="first-element">
                <p class="fs-3">Generowanie raportu</p>
                <form action="{{ url('/generate-pdf') }}" method="POST" role="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <label for="start">Od</label>
                                    <input type="date" class="form-control" name="start"/>
                                    <label for="end">Do</label>
                                    <input type="date" class="form-control" name="end"/>
                    <input type="submit" value="Raport" class="btn btn-dark mt-2" />
                </form>
            </div>
        </div>
    </div>

    <div class="row mt-5 fs-2">
        <div class="col-3">
            <a href="{{ URL::to('/a_messages')}}">
            <div class="first-element bg-info text-dark">
                Wiadomości
            </div>
            </a>
        </div>
        <div class="col-3">
            <a href="{{ URL::to('/a_orders')}}" >
            <div class="first-element bg-lights text-dark">
                Zgłoszenia
            </div>
            </a>
        </div>
        <div class="col-3">
            <a href="{{ URL::to('/a_plans')}}">
            <div class="first-element bg-info text-dark">
                Plan
            </div>
            </a>
        </div>
        <div class="col-3">
            <a href="{{ URL::to('/a_accessories')}}">
            <div class="first-element bg-light text-dark">
                Akcesoria
            </div>
            </a>
        </div>
    </div>
</div>

@endsection('content')



