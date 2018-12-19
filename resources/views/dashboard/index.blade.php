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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="{{asset('/vendor/amaranth/assets/css/amaranth-ui.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.css" />
    <script src="https://unpkg.com/simplebar@latest/dist/simplebar.js"></script>
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
            position: relative;
        }
        .bg-half {
            position: absolute;
            top: -30px;
            left: -30px;
            right: -30px;
            height: 50%;
            z-index: 0;
            background-color: #c30d40;
            box-shadow: inset 0 0 30px rgba(0,0,0,0.2);
        }
        .full-height {
            height: 100%;
        }
        .title {
            color: #333333 !important;
            -webkit-background-clip: text;
            background-repeat: no-repeat;
            background-size: 100%;
            letter-spacing: -0.17rem;
            line-height: 1em;
            font-weight: 500;
        }
        .card {
            background-color: #fff;
            box-shadow: 0 0 30px rgba(0,0,0,0.1);
            border: 1px solid rgba(0,0,0,0.15);
            border-radius: 7px;
        }
        .card.card-dark {
            background: rgb(34,34,34); /* Old browsers */
            box-shadow: 0 0 30px rgba(0,0,0,0.5);
            border-right: 1px solid rgba(255,255,255,0.05);
            border-bottom: 1px solid rgba(255,255,255,0.05);
            border-radius: 15px;
        }
        .card.card-contained {
            overflow: hidden;
        }
        .card > header {
            border-bottom: 1px solid rgba(255,255,255,0.05);
        }
        p {
            font-weight: 400;
        }
        .card-sidebar {
            background-color: rgba(255,255,255,0.03);
        }
        .card-sidebar .btn {
            background-color: transparent;
            transition: all 300ms linear;
        }
        .card-sidebar .btn:hover, .card-sidebar .active .btn {
            background-color: rgba(0,0,0,0.1);
        }
        .orb {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background-color: #fff;
            display: inline-block;
        }
        .scroll-content {
            width: 100% !important;
        }
    </style>
</head>
<body class="bg-primary">
<div class="bg-half"></div>
<div class="p-relative full-height">
    <div class="content v-align p-relative">
        <div>
            <div class="container-xs mx-auto">
                <div class="grid-row text-center">
                    <div class="col-12">
                        <h1 class="text-white display-3 my-1">{{ config('app.name') }}</h1>
                        <main class="card card-dark card-contained my-3">
                            <header class="px-3 py-1">
                                <h5 class="my-1 text-grey-light text-thin">Getting Started</h5>
                            </header>
                            <article class="grid-row text-left">
                                <div class="col-12" style="max-height:calc(100vh - 300px);">
                                    <div class="scroll-content text-center py-3 px-3" data-simplebar>
                                        <h2 class="h5 text-white mb-2">Welcome back, User!</h2>
                                    </div>
                                </div>
                            </article>
                        </main>
                    </div>
                    <div class="col-12">
                        <footer><small class="text-white text-center p-2 d-block">Copyright &copy. Ollie Ford & Co. All rights reserved.</small></footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>