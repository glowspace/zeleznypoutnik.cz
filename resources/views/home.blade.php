@extends('layout')

@section('content')
    <div class="container">
        <div class="content">
            <h1>{{$year_count}}. ročník Železného poutníka</h1>

            <p>
                Srdečně Vás zveme na {{$year_count}}. ročník železného poutníka - postní pěší pouť, která se koná vždy v noci z pátku
                na sobotu týden před květnou nedělí. Pouť začíná mší svatou v Bazilice Navštívení Panny Marie na
                Svatém Kopečku a končí mší svatou v Bazilice Nanebevzetí Panny Marie na Svatém Hostýně.
            </p>

            <h2>info k letošnímu ročníku</h2>

            <div class="box">
                <ul style="list-style-type: none">
                    <li><u>start:</u> {{$start_date->format('j. n. Y')}} 18:00 | Svatý Kopeček | mše svatá v Bazilice Navštívení Panny Marie</li>
                    <li><u>konec:</u> {{$start_date->copy()->addDay()->format('j. n. Y')}} 7:15 | Svatý Hostýn | mše svatá v Bazilice Nanebevzetí Panny Marie</li>
                    <li><u>s sebou:</u> svačinu, dobrou náladu a dobré pohodlné boty</li>

                </ul>
            </div>

            <p>
                Zhruba v polovině trasy (v Prosenicích) bude připraveno menší občerstvení a teplý čaj.
                Kněží budou během cesty k dispozici pro duchovní rozhovor nebo svátost smíření.
            </p>

            <p>
                Případný odvoz na Hostýn během cesty je zajištěn.
                Zpáteční cestu ze Svatého Hostýna si zajišťuje každý sám.
                V případě dotazů je možné využít email <a href="mailto:marian.husek@seznam.cz">marian.husek@seznam.cz</a>.
            </p>

            <p>
                Těšíme se na společnou pouť!
            </p>

        </div>

        <div class="column">
            <a href="{{route('map')}}" title="Kliknutím zobrazte detail trasy">
                <img width="100%" src="{{asset('img/mapa_preview2.jpg')}}" alt="Mapa trasy" style="margin-bottom: 2em; box-shadow: #b7b7b7 0 0 7px;">
            </a>
        </div>

    </div>
@endsection
