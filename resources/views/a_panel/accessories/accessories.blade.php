@extends('a_panel')

@section('content')

<div class="container">

    <div class="row mt-5">
        <div class="col-12">
            <p class="fs-1">Akcesoria</p>
        </div>
    </div>

    <div class="row mb-3">
    @foreach($accessories as $accessory)
        <div class="col-6 mt-4">
            <div class="second-element">
                <h4 class="small font-weight-bold"><strong>{{ $accessory->name}}</strong>
                    <span class="float-right">{{$accessory->amount}} sztuk</span>
                </h4>  
                <div class="progress mb-4">
                            @php
                            $value = ($accessory->amount / $accessory->safety_level *100)
                            @endphp
                            @if ($value < 25)
                            <div class="progress-bar bg-danger" role="progressbar"
                             style="width: {{ $value }}%"></div>
                            @elseif($value > 25 &&  $value < 60)
                            <div class="progress-bar bg-warning" role="progressbar"
                             style="width: {{ $value }}%"></div>
                            @else
                            <div class="progress-bar bg-success" role="progressbar"
                            style="width: {{ $value }}%"></div>
                            @endif
                </div>
                <form action="{{ url('a_accessories_update') }}" method="POST" role="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="form-group">
                    <input type="text" class="form-control" name="new_amount" value="{{ $accessory->amount }}"/>
                    <input type="hidden" class="form-control" name="item_id" value="{{ $accessory->id }}"/>      
                </div>
                    <input type="submit" value="Aktualizuj" class="btn btn-primary mt-2" />
                </form>
            </div>
        </div>
    @endforeach
    </div>

</div>

@endsection('content')