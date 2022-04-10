@extends('c_panel')

@section('content')


<div class="container">

    <div class="row mt-5">
        <div class="col-6">
            <div class="second-element">
            <h5 class="text-center">Twoje Wiadomości</h5>
            @if( count($messagesList) < 1)
                <ul class="list-group">
                    <li class="list-group-item">Nie masz żadnych wiadomości</li>
                </ul>
            @endif
            @foreach( $messagesList as $message)  
                <a href="{{ URL::to('/c_message' , [$message->id] )}}">
                    <ul class="list-group">
                        <li class="list-group-item mb-4">{{ $message->topic }}</li>
                    </ul>
                </a>
            @endforeach    
            </div>
        </div>
        <div class="col-6">
            <div class="second-element">
             <h4 class="text-center">Napisz Wiadomość</h4>   
            <form action="{{ url('c_message_create') }}" method="POST" role="form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="form-group">
                            <label for="topic">Temat</label>
                            <input type="text" class="form-control" name="topic"/>  
                            <label for="question">Treść</label>
                            <textarea type="text" class="form-control" name="question" rows="5"></textarea>           
                    </div>
                    <div class="text-center">    
                        <input type="submit" value="Wyślij" class="btn btn-primary mt-2" />
                    </div>  
            </form>    
            </div>
        </div>
    </div>

</div>


@endsection('content')
