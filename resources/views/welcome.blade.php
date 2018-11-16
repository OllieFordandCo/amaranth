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
            background-color: #333;
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
    </style>
</head>
<body class="bg-primary">
<div class="p-relative full-height">
    <div class="content v-align">
        <div>
            <div class="container mx-auto">
                <div class="grid-row text-center">
                    <div class="col-12">
                        <h1 class="text-white display-3 my-1">Amaranth</h1>
                        <main class="card card-dark card-contained my-3">
                            <header class="px-3 py-1">
                                <h5 class="my-1 text-grey-light text-thin">Installation</h5>
                            </header>
                            <article class="grid-row text-left">
                                <div class="col-3 card-sidebar" style="height:300px;">
                                    <ul class="list-unstyled py-2">
                                        <li class="active"><a class="btn d-block px-3 py-2" href="#"><i class="orb mr-1 v-align-middle"></i> <span class="v-align-middle">Getting Started</span></a></li>
                                        <li><a class="btn d-block px-3 py-2" href="#"><i class="orb mr-1 v-align-middle"></i> <span class="v-align-middle">General</span></a></li>
                                        <li><a class="btn d-block px-3 py-2" href="#"><i class="orb mr-1 v-align-middle"></i> <span class="v-align-middle">Info</span></a></li>
                                        <li><a class="btn d-block px-3 py-2" href="#"><i class="orb mr-1 v-align-middle"></i> <span class="v-align-middle">Settings</span></a></li>
                                        <li><a class="btn d-block px-3 py-2" href="#"><i class="orb mr-1 v-align-middle"></i> <span class="v-align-middle">Status</span></a></li>
                                    </ul>
                                </div>
                                <div class="col-9" style="height:300px;">
                                    <h2 class="h4 text-white px-3 my-3">Welcome</h2>
                                    <div class="card-block px-3 text-white">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <b>Hoc loco tenere se Triarius non potuit.</b> Sed id ne cogitari quidem potest quale sit, ut non repugnet ipsum sibi. Duo enim genera quae erant, fecit tria. <i>At eum nihili facit;</i> Vide, ne etiam menses! nisi forte eum dicis, qui, simul atque arripuit, interficit. Sed quanta sit alias, nunc tantum possitne esse tanta. Fortitudinis quaedam praecepta sunt ac paene leges, quae effeminari virum vetant in dolore. Duo Reges: constructio interrete. </p>

                                        <p>Unum est sine dolore esse, alterum cum voluptate. <a href="http://loripsum.net/" target="_blank">Scrupulum, inquam, abeunti;</a> <mark>Itaque fecimus.</mark> Nec enim, dum metuit, iustus est, et certe, si metuere destiterit, non erit; </p>

                                        <p>Quod quidem iam fit etiam in Academia. <mark>Sed fortuna fortis;</mark> <mark>Egone quaeris, inquit, quid sentiam?</mark> <i>Aliter enim explicari, quod quaeritur, non potest.</i> Mihi vero, inquit, placet agi subtilius et, ut ipse dixisti, pressius. <b>Quid censes in Latino fore?</b> Et harum quidem rerum facilis est et expedita distinctio. </p>


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