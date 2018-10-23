<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Testing ground</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <img src="https://www.artlogic.com.au/sites/default/files/imagecache/product_full/graham-s-area-51-artlogic.jpg" width="20%">
                <div  style="font-weight: medium;" class="title m-b-md">
                    <div>Testing ground </div>
                    <p style="font-size: 30px;font-weight: bold;">This is a testing site</p>

                <div class="links">
                    <a href="/printic">Print IC</a>
                    <a href="datatabletext">Text</a>
                    <a href="/excel">Excel Import</a>
                    <a href="/kira_budget">Kira budjet v1.0(X)</a>
                    <a href="/budget_table">Kira budjet v2.0</a>
                    <a href="/dailybudget/home">Daily Budget Alpha1.0</a>
                    <a href="/update_version">Update notes</a>
                    <a href="/qr-code">qr</a>
                    
                </div>
            </div>
        </div>
    </body>
</html>
