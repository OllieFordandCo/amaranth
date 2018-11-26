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
        }
        .full-height {
            height: 100%;
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
            background-color: #fafafa;
            box-shadow: 0 0 30px rgba(0,0,0,0.1);
            border: 1px solid rgba(0,0,0,0.15);
            border-radius: 7px;
        }
        .card.card-dark {
            box-shadow: 0 0 30px rgba(0,0,0,0.5);
            border-right: 1px solid rgba(255,255,255,0.05);
            border-bottom: 1px solid rgba(255,255,255,0.05);
            border-radius: 15px;
            background: rgb(34,34,34); /* Old browsers */
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
        .list-unstyled li {
            transition: all 300ms ease-out;
            border-bottom: 3px solid transparent;
        }
        .list-unstyled li.active {
            box-shadow: 0 0 35px rgba(0,0,0,0.2);
            border-bottom: 3px solid #c30e40;
            background-color: rgba(255,255,255,0.03);
        }
        .list-unstyled li:hover  {
            background-color: rgba(0,0,0,0.2);
            border-color: rgba(0,0,0,0.2);
        }
    </style>
</head>
<body class="bg-primary">
<div class="bg-half"></div>
<div class="p-relative full-height">
    <div class="content v-align">
        <div>
            <div class="container mx-auto">
                <div class="grid-row text-center">
                    <div class="col-12">
                        <h1 class="text-white display-3 my-1"><?php echo (env('APP_NAME') == 'Laravel') ? 'Amaranth' : env('APP_NAME'); ?></h1>
                        <main class="card card-dark card-contained my-3">
                            <header class="px-3 py-1">
                                <h5 class="my-1 text-grey-light text-thin">Installation</h5>
                            </header>
                            <article class="grid-row text-left">
                                <?php $page = isset($_GET['page']) ? $_GET['page'] : ''; ?>
                                @if(Cookie::get('install_access') == substr(env('APP_KEY'), -7))
                                    <div class="col-12 card-sidebar" style="overflow: hidden;">
                                        <ul class="list-unstyled text-center mb-0 list-inline-block">
                                            <li<?php if($page == 'getting-started') echo ' class="active"'; ?>><a class="link-reset d-block px-3 py-2" href="install?page=getting-started"><i class="orb mr-1 v-align-middle"></i> <span class="v-align-middle">Getting Started</span></a></li>
                                            <li<?php if($page == 'environment') echo ' class="active"'; ?>><a class="link-reset d-block px-3 py-2" href="install?page=environment"><i class="orb mr-1 v-align-middle"></i> <span class="v-align-middle">Environmental Editor</span></a></li>
                                            <li<?php if($page == 'status') echo ' class="active"'; ?>><a class="link-reset d-block px-3 py-2" href="install?page=status"><i class="orb mr-1 v-align-middle"></i> <span class="v-align-middle">System Status</span></a></li>
                                        </ul>
                                    </div>
                                    <?php
                                    switch ($page) {
                                        case 'status': ?>
                                        <div class="col-12" style="max-height:calc(100vh - 450px);">
                                            <div class="scroll-content" data-simplebar>
                                                <h2 class="h4 text-white px-3 my-3">System Status</h2>
                                                <div class="card-block px-3 text-white">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <b>Hoc loco tenere se Triarius non potuit.</b> Sed id ne cogitari quidem potest quale sit, ut non repugnet ipsum sibi. Duo enim genera quae erant, fecit tria. <i>At eum nihili facit;</i> Vide, ne etiam menses! nisi forte eum dicis, qui, simul atque arripuit, interficit. Sed quanta sit alias, nunc tantum possitne esse tanta. Fortitudinis quaedam praecepta sunt ac paene leges, quae effeminari virum vetant in dolore. Duo Reges: constructio interrete. </p>
                                                </div>
                                                <form method="POST" class="card-block grid-row grid-gutter py-3 px-2 text-white">
                                                    @method('PUT')
                                                    <?php
                                                    $config = config('app');
                                                    foreach($config as $key => $value) {
                                                        if(is_array($value)) { ?>
                                                            <pre class="col-12">
                                                                <?php var_dump($value); ?>
                                                            </pre>
                                                        <?php } else { ?>
                                                            <div class="col-4">
                                                                <label for="<?php echo $key; ?>"><?php echo $key; ?></label>
                                                            </div>
                                                            <div class="col-8">
                                                                <input class="bg-white" id="<?php echo $key; ?>" name="<?php echo $key; ?>" type="text" value="<?php echo $value; ?>">
                                                            </div>
                                                        <?php } ?>
                                                    <?php } ?>
                                                    <div class="col-12 text-center">
                                                        <button type="submit" class="btn btn-primary mt-3 mx-auto">Save Changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <?php break;
                                        case 'environment': ?>
                                        <div class="col-12" style="max-height:calc(100vh - 450px);">
                                            <div class="scroll-content" data-simplebar>
                                                <h2 class="h4 text-white px-3 my-3">Environmental Settings</h2>
                                                <p class="px-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <b>Hoc loco tenere se Triarius non potuit.</b> Sed id ne cogitari quidem potest quale sit, ut non repugnet ipsum sibi. Duo enim genera quae erant, fecit tria. <i>At eum nihili facit;</i> Vide, ne etiam menses! nisi forte eum dicis, qui, simul atque arripuit, interficit. Sed quanta sit alias, nunc tantum possitne esse tanta. Fortitudinis quaedam praecepta sunt ac paene leges, quae effeminari virum vetant in dolore. Duo Reges: constructio interrete. </p>
                                                <form method="POST" class="card-block grid-row grid-gutter py-3 px-2 text-white">
                                                    @method('PUT')
                                                    <?php
                                                    $env = DotenvEditor::getLines();
                                                    foreach($env as $rule) {
                                                    $data = $rule['parsed_data'];
                                                    if($data['type'] !== 'empty') : ?>
                                                    <div class="col-4">
                                                        <label for="<?php echo $rule['parsed_data']['key']; ?>"><?php echo $rule['parsed_data']['key']; ?></label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input class="bg-white" id="<?php echo $rule['parsed_data']['key']; ?>" name="<?php echo $rule['parsed_data']['key']; ?>" type="text" value="<?php echo $rule['parsed_data']['value']; ?>">
                                                    </div>
                                                    <?php endif;
                                                    } ?>
                                                        <!--
                                                    <div class="col-4">
                                                        <input class="bg-white" type="text" placeholder="NEW_KEY">
                                                    </div>
                                                    <div class="col-8">
                                                        <input class="bg-white" type="text" value="NEW_VALUE">
                                                    </div>-->
                                                    <div class="col-12 text-center">
                                                        <button type="submit" class="btn btn-primary mt-3 mx-auto">Save Changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    <?php break;
                                    default: ?>
                                        <div class="col-12" style="height:300px;">
                                            <div class="scroll-content" data-simplebar>
                                                <h2 class="h4 text-white px-3 my-3">Get Started!</h2>
                                                <div class="card-block px-3 text-white">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <b>Hoc loco tenere se Triarius non potuit.</b> Sed id ne cogitari quidem potest quale sit, ut non repugnet ipsum sibi. Duo enim genera quae erant, fecit tria. <i>At eum nihili facit;</i> Vide, ne etiam menses! nisi forte eum dicis, qui, simul atque arripuit, interficit. Sed quanta sit alias, nunc tantum possitne esse tanta. Fortitudinis quaedam praecepta sunt ac paene leges, quae effeminari virum vetant in dolore. Duo Reges: constructio interrete. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php break;
                                    }
                                    ?>
                                @else
                                  <article class="container-sm mx-auto">
                                        <div class="scroll-content" data-simplebar>
                                            <h2 class="h4 text-white px-3 my-3 text-center">Access the install settings.</h2>
                                            <form method="POST" class="card-block px-3 grid-row text-white text-center">
                                                <div class="col-12">
                                                    <label for="key">Insert the last 7 digits of your application key.</label>
                                                    <input class="bg-white" id="key" name="key" type="text" value="">
                                                </div>
                                                <div class="col-12 text-center">
                                                    <button type="submit" class="btn btn-primary my-3 mx-auto">Access</button>
                                                </div>
                                            </form>
                                        </div>
                                    </article>
                                @endif
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