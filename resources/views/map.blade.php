@extends('layout')

@section('content')
    <div class="m-only">
        <div class="container">
            <div class="content">
                <p><a>Kliknutím mapu otebřete v Mapách Google.</a></p>

                <a href="mapa.php" title="Kliknutím zobrazte detail trasy">
                    <img width="100%" src="{{asset('img/mapa_preview2.jpg')}}" alt="Mapa trasy" style=" box-shadow: #b7b7b7 0 0 7px;">
                </a>
            </div>
        </div>
    </div>
    <div class="d-only">
        <iframe src="https://www.google.com/maps/d/embed?mid=1G6_Lz_jtsSon3dVpNlij6yiyw9k" style="border: none; height: calc(100vh - 304px); width: 100%;"></iframe>
    </div>
@endsection
