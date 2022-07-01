@extends('layout')

@section('content')
    <div class="container">
        <div class="content" id="mapa">
            <h1>Kontakty</h1>

            <p>
                <span style="color: #5f5f5f">email </span> <a href="mailto:marian.husek@seznam.cz">marian.husek@seznam.cz</a>
            </p>
            <p>
                <span style="color: #5f5f5f">telefon: </span>+420 736 523 600
            </p>


        </div>

        <div class="column">
            <img width="100%" src="{{asset('img/poutnik_alpha.jpg')}}" alt="Železný poutník" style="margin-bottom: 2em;">
        </div>

    </div>
@endsection
