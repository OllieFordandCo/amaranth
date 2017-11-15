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

    <!-- Inline Styles -->
    <style>
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
            color: #e32759 !important;
            font-family: 'geomanistregular', sans-serif;
            background: -webkit-linear-gradient(101deg, {{config('app.primary_colour', '#d20674')}} 0%,{{config('app.secondary_colour', '#e32759')}} 86%);
            -webkit-background-clip: text;
            background-repeat: no-repeat;
            background-size: 100%;
            letter-spacing: -0.17rem;
            line-height: 1em;
            font-weight: 500;
            -webkit-text-fill-color: transparent;
        }
        p {
            font-weight: 400;
        }
    </style>
</head>
<body>

    @yield('content')

    <!-- Scripts -->

</body>
</html>