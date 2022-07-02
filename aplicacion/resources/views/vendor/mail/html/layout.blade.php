<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style type="text/css">
        body {
            font-family: 'Roboto', sans-serif;
        }

        .background {
            display: block;
            width: 100%;
            padding: 5em 0em;
            background-color: #E7E8EB;
        }

        .container {
            display: block;
            width: 80%;
            max-width: 800px;
            background-color: white;
            margin: 0 auto;
        }

        .box {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .image {
            width: 100%
        }

        .image-center {
            margin: 0 auto;
            display: block;
        }

        .white {
            padding: 0 3em 3em 3em;
        }

        .titulo {
            text-align: center;
        }

        .texto {
            text-align: justify;
        }

        .pie {
            display: block;
            width: 70%;
            max-width: 600px;
            margin: 0 auto;
            font-size: 0.8em;
            text-align: center;
            padding: 2em
        }

        ul {
            margin-left: 1em;
        }

        .enlace {
            text-decoration: none;
            color: blue !important;
            font-weight: bold;
            float: right;
        }

        .enlace-texto {
            text-decoration: none;
            color: black
        }

        .enlace-texto:hover {
            text-decoration: none;
        }

        .boton {
            text-decoration: none !important;
            -webkit-text-size-adjust: none;
            -ms-text-size-adjust: none;
            color: #FFFFFF !important;
            border-style: solid;
            border-color: #111827;
            display: inline-block;
            background-color: #111827;
            border-radius: 6px;
            font-family: 'Roboto', sans-serif;
            font-style: normal;
            text-align: center;
            padding: 1em 3em;
        }

        .boton:hover,
        .boton:focus {
            color: #ffffff;
            background-color: #374151;
            border-color: #374151;
            text-decoration: none
        }
    </style>

    @yield('css')

</head>

<body>
    <div class="background" style="display: block; width: 100%; padding: 5em 0em; background-color: #E7E8EB;">
        <div class="container box" style="display: block; width: 80%; max-width: 800px; background-color: white; margin: 0 auto; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <img src="{{ asset('images/correo-top.jpg') }}" class="image" style="width: 100%">
            <div class="white" style="padding: 3em;">
                <div style="margin-top: 1em;">&nbsp;</div>
                {{ Illuminate\Mail\Markdown::parse($slot) }}

                {{ $subcopy ?? '' }}

                <hr style="margin-top:3em">
                <p style="font-size: 0.8em;">
                    <b>CONFIDENCIALIDAD DEL CORREO ELECTRÓNICO</b> <br> &nbsp;<br>
                    La información contenida en este correo electrónico es confidencial y sólo puede ser utilizada por la persona natural o jurídica a la cual está dirigido y/o por el emisor. Si no es el receptor autorizado, cualquier retención, difusión, distribución o copia de este mensaje es prohibido y será sancionada por la ley.
                    <br> &nbsp;<br>
                    Si usted recibió este correo por error, destrúyalo y elimine cualquier copia guardada en su sistema notificando inmediatamente al remitente y/o a infovisaestampada@consuladodepanama.com.ve. Usted no debe utilizar esta información para ningún propósito ajeno al dispuesto por el remitente.
                </p>
            </div>
            <img src="{{ asset('images/correos/bot.jpg') }}" class="image" style="width: 100%; margin-bottom: -10px">
        </div>

        <hr style="width: 80%; max-width: 800px; margin: auto; margin-top: 2em">
        <p class="pie" style="display: block; width: 80%; max-width: 700px; margin: 0 auto; font-size: 0.8em; text-align: center; padding: 2em">
            <br><br>
            <span><a href="{{ route('root') }}">Condominio Rosal Plaza</a> - powered by <a href="https://maxwell.com.ve">MaxwellTech</a></span>
            <p style="font-size: 0.8em">
                {{ $footer ?? '' }}
            </p>
        </p>
    </div>
</body>

</html>