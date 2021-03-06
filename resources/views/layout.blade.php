<!doctype html>
<html lang="cs">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta name='viewport'
          content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>

    <meta name="theme-color"
          content="#deecf7">

    <!-- favicon -->
    <link rel="apple-touch-icon-precomposed"
          sizes="57x57"
          href="{{asset("/img/favicon/apple-touch-icon-57x57.png")}}"/>
    <link rel="apple-touch-icon-precomposed"
          sizes="114x114"
          href="{{asset("/img/favicon/apple-touch-icon-114x114.png")}}"/>
    <link rel="apple-touch-icon-precomposed"
          sizes="72x72"
          href="{{asset("/img/favicon/apple-touch-icon-72x72.png")}}"/>
    <link rel="apple-touch-icon-precomposed"
          sizes="144x144"
          href="{{asset("/img/favicon/apple-touch-icon-144x144.png")}}"/>
    <link rel="apple-touch-icon-precomposed"
          sizes="60x60"
          href="{{asset("/img/favicon/apple-touch-icon-60x60.png")}}"/>
    <link rel="apple-touch-icon-precomposed"
          sizes="120x120"
          href="{{asset("/img/favicon/apple-touch-icon-120x120.png")}}"/>
    <link rel="apple-touch-icon-precomposed"
          sizes="76x76"
          href="{{asset("/img/favicon/apple-touch-icon-76x76.png")}}"/>
    <link rel="apple-touch-icon-precomposed"
          sizes="152x152"
          href="{{asset("/img/favicon/apple-touch-icon-152x152.png")}}"/>
    <link rel="icon"
          type="image/png"
          href="{{asset("/img/favicon/favicon-196x196.png")}}"
          sizes="196x196"/>
    <link rel="icon"
          type="image/png"
          href="{{asset("/img/favicon/favicon-96x96.png")}}"
          sizes="96x96"/>
    <link rel="icon"
          type="image/png"
          href="{{asset("/img/favicon/favicon-32x32.png")}}"
          sizes="32x32"/>
    <link rel="icon"
          type="image/png"
          href="{{asset("/img/favicon/favicon-16x16.png")}}"
          sizes="16x16"/>
    <link rel="icon"
          type="image/png"
          href="{{asset("/img/favicon/favicon-128.png")}}"
          sizes="128x128"/>

    <meta name="msapplication-TileColor"
          content="#FFFFFF"/>
    <meta name="msapplication-TileImage"
          content="mstile-144x144.png"/>
    <meta name="msapplication-square70x70logo"
          content="mstile-70x70.png"/>
    <meta name="msapplication-square150x150logo"
          content="mstile-150x150.png"/>
    <meta name="msapplication-wide310x150logo"
          content="mstile-310x150.png"/>
    <meta name="msapplication-square310x310logo"
          content="mstile-310x310.png"/>

    <title>??elezn?? poutn??k</title>

    <meta name="Author"
          content="Glow Space">
    <meta name="Description"
          content="Srde??n?? V??s zveme na ??elezn??ho poutn??ka - postn?? p?????? pou?? ze Svat??ho Kope??ka na Svat?? Host??n. 50 km za jednu noc.">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Gentium+Basic|Open+Sans"
          rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>

<body>
    <div class="page-container">
        <div class="header-container">
            <div class="header-title noselect"
                 id="nadpis">
                <h1><a>??elezn?? poutn??k</a></h1>
                <p>1 noc - 2 poutn?? m??sta - 50km - postn?? p?????? pou??</p>
            </div>

            <div class="header-navigation">

                @php
                    // TODO: fuj! Would be better to use Carbon.

                    // v??po??et rotd??lu mezi ??asy
                    $now = time();
                    $poutnik = strtotime("2022-03-31");

                    $datediff = $poutnik - $now;
                    $pocet_dni = floor($datediff / (60 * 60 * 24));

                    if ($pocet_dni > 4)
                    {
                        $dny_do_poutnika = "31. b??ezna 2017 - 18:00 (<b>za $pocet_dni dn??</b>)";
                    }
                    elseif ($pocet_dni > 1)
                    {
                        $dny_do_poutnika = '31. b??ezna 2017 - 18:00 (<b>za ' . $pocet_dni . ' dny</b>)';
                    }
                    elseif ($pocet_dni == 1)
                    {
                        $dny_do_poutnika = 'z??tra od 18:00';
                    }
                    elseif ($pocet_dni == 0)
                    {
                        $dny_do_poutnika = 'dnes od 18:00';
                    }
                    elseif ($pocet_dni < 0)
                    {
                        $dny_do_poutnika = 'v postn?? dob?? 2023';
                    }

                @endphp

                <div class="info">
                    <div class="d-only">
                        <a>Svat?? Kope??ek - Svat?? Host??n - {{ $dny_do_poutnika }}</a>
                    </div>
                    <div class="m-only">
                        <a>Svat?? Kope??ek - Svat?? Host??n</a>
                        <a style="display: inline-block; padding: 0px;"><?php echo $dny_do_poutnika; ?></a>
                    </div>
                </div>
                <div class="menu">
                    <a href="/">info k leto??n??mu ro??n??ku</a>
                    <a href="/mapa">mapa trasy</a>
                    <a href="/kontakt">kontakt</a>
                </div>

            </div> <!-- header-navigation -->
        </div> <!-- header-container -->
        @yield('content')

        <div class="footer-container">
            <div class="footer">
                <?php echo date("Y"); ?> -
                <a href="http://zeleznypoutnik.cz">zeleznypoutnik.cz</a>


                |
                <a href="http://www.svatykopecek.cz/">svatykopecek.cz</a> |
                <a href="http://www.hostyn.cz/">hostyn.cz</a>


            </div>
        </div>

    </div> <!-- page-container -->

</body>
</html>
