<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{config('app.name', 'amaranth')}}</title>

    <!-- Stylesheets -->
    <link href="{{asset('/vendor/amaranth/assets/css/amaranth-ui.css')}}" rel="stylesheet" type="text/css">

    <style>
        html {
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-font-smoothing: unset;
            -moz-osx-font-smoothing: grayscale;
            font-smoothing: antialiased;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            backface-visibility: hidden;
        }
        html, body {
            background-color: #f4f7f8;
            color: #767676;
            font-weight: 400;
            height: 100%;
            margin: 0;
            overflow-x: hidden;
        }
        .full-height {
            height: 100%;
        }
        .title {
            color: #333333 !important;
            font-family: 'geomanistregular', sans-serif;
            -webkit-background-clip: text;
            background-repeat: no-repeat;
            background-size: 100%;
            letter-spacing: -0.17rem;
            line-height: 1em;
            font-weight: 500;
        }
        .card {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
            border: 1px solid rgba(0,0,0,0.15);
        }
        p {
            font-weight: 400;
        }
    </style>
</head>
<body>
<div class="p-relative full-height">
    <div class="content v-align">
        <div>
            <div class="container-xs mx-auto">
                <div class="grid-row">
                    <div class="col-12">
                        @yield('content')
                    </div>
                    <div class="col-12">
                        <footer><small class="text-grey-light text-center p-2 d-block">Copyright &copy. Ollie Ford & Co. All rights reserved.</small></footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>