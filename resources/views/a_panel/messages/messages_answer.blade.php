@extends('a_panel')

@section('content')

<div class="conteiner">

    <div class="rowm mt-5">
        <div class="col-12">
            <div class="second-element">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                    <p class="fs-3">Klient</p>
                        <ul class="list-group">
                            <li class="list-group-item">Imię :<small>{{ $question->client->name }}</small></li>
                            <li class="list-group-item">Temat :<small>{{ $question->topic }}</small></li>
                            <li class="list-group-item">Treść :<small>{{ $question->question }}</small></li>
                        </ul>
                    </div>

                    <div class="col-md-12 col-lg-6">
                        <form action="{{ url('admin_answer') }}" method="POST" role="form">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                            <div class="form-group">
                                <input type="hidden" class="form-control" name="messageid"  value="{{ $question->id }}"/>  

                                <p class="fs-3">Odpowiedź</p>
                                <textarea type="text" class="form-control" name="answerbody" rows="5"></textarea> 
                            </div>

                            <div class="text-center">    
                                <input type="submit" value="Wyślij" class="btn btn-dark mt-2" />
                            </div> 
                        </form>
                    </div>
                </div>


                
            </div>
        </div>
    </div>

</div>

@endsection('content')