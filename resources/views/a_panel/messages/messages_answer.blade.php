@extends('a_panel')

@section('content')

<div class="conteiner">

    <div class="rowm mt-5">
        <div class="col-12">
            <div class="first-element">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                    <h6>Klient</h6>
                        <ul class="list-group">
                            <li class="list-group-item"><small>Imię :</small>{{ $question->client->name }}</li>
                            <li class="list-group-item"><small>Temat :</small>{{ $question->topic }}</li>
                            <li class="list-group-item"><small>Treść :</small>{{ $question->question }}</li>
                        </ul>
                    </div>

                    <div class="col-md-12 col-lg-6">
                        <form action="{{ url('admin_answer') }}" method="POST" role="form">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                            <div class="form-group">
                                <input type="hidden" class="form-control" name="messageid"  value="{{ $question->id }}"/>  

                                <label for="answerbody">Odpowiedź</label>
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