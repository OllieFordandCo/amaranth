<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name', 'amaranth')}}</title>

    <!-- Fonts -->
    <link href="{{asset('/vendor/amaranth/assets/amaranth-ui.css')}}" rel="stylesheet" type="text/css">

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
            line-height: 1em;
            font-weight: 500;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body>
<div class="p-relative full-height">
    <div class="content v-align">
        <div>
            <div class="title d-inline-block mx-auto">{{config('app.name', 'amaranth')}}</div>
            <p class="text-thin">{{config('app.slogan', 'Social Network Engine for Laravel')}}</p>
        </div>
    </div>
</div>
</body>
</html>