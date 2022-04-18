@extends('a_panel')

@section('content')

<div class="container">

    <div class="row mt-3">
        <div class="col-12">
            <p class="fs-1">Panel Administratora</p>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-lg-8 col-md-12 text-center">
            <div class="fourth-element">
                <p class="fs-2">Treści strony głównej</p>
                    <div class="row">
                        @foreach ($Contents as $content)
                            <div class="col-lg-6 col-sm-12">
                            <p class="mt-4">{{ $content->name }}</p>

                                <div class="row">
                                    <div class="col-12">
                                        <form action="{{ url('a_content_update') }}" method="POST" role="form">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                            <input type="hidden" class="form-control" name="item_id" value="{{ $content->id }}"/>
                                            <textarea type="text" name="content" rows="4" cols="25" placeholder="{{ $content->content }}"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-{{ $content->color }}">Aktualizuj</button>      
                                        </form>  
                                    </div> 
                                </div> 
                            </div>
                        @endforeach
                    </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 mt-5">
            <div class="second-element">
                <p class="fs-2">Generowanie raportu</p>
                    <form action="{{ url('/generate-pdf') }}" method="POST" role="form">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <label for="start">Od</label>
                                <input type="date" class="form-control" name="start"/>
                            <label for="end">Do</label>
                                <input type="date" class="form-control" name="end"/>
                        <input type="submit" value="Raport" class="btn btn-dark mt-5" />
                    </form>
            </div>
        </div>
    </div>

    <div class="row mt-5 mb-5">
        <div class="col-lg-6 col-md-12">
            <div class="second-element">
                <p class="fs-2 text-center">Aktualny planning</p>
                    @include('a_panel.orders.fullcalender')
            </div>
        </div>
        <div class="col-lg-6 col-md-12">

        </div>
    </div>
</div>

@endsection('content')



