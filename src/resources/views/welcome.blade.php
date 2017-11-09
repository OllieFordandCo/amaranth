<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>esvibe</title>

    <!-- Fonts -->
    <link href="{{asset('fonts/webfonts.css')}}" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #f4f7f8;
            color: #636b6f;
            font-weight: 400;
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
            color: #00c9ed;
        }

        .title {
            color: #00c9ed !important;
            font-size: 84px;
            font-family: 'geomanistregular', sans-serif;
            background: -webkit-linear-gradient(135deg, #aa04d8 0%,#00c9ed 100%);
            -webkit-background-clip: text;
            background-repeat: no-repeat;
            color: transparent;
            letter-spacing: -0.17rem;
            text-indent: -0.04em;
            font-weight: 500;
            -webkit-text-fill-color: transparent;
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
    <div class="content">
        <div class="title m-b-md">
            esvibe
        </div>
    </div>
</div>
</body>
</html>