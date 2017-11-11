<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name', 'amaranth')}}</title>

    <!-- Stylesheets -->
    <link href="{{asset('/vendor/amaranth/assets/css/amaranth-ui.css')}}" rel="stylesheet" type="text/css">

    <!-- Styles -->
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
            background: -webkit-linear-gradient(101deg, #d20674 0%,#e32759 86%);
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
<div class="p-relative full-height">
    <div class="content v-align">
        <div>
            <section class="container-xs grid-row mx-auto py-1">
                <header class="text-center p-2">
                    <div class="display-3 title d-inline-block px-1 mx-auto">{{config('app.name', 'amaranth')}}</div>
                    <small class="d-block text-thin text-grey-light">{{config('app.slogan', 'Social Network Engine for Laravel')}}</small>
                </header>
                <div class="grid-row grid-gutter m-collapse-1 d-block">
                    <div class="col-12">
                        <form>
                            <h1 class="h2 mt-0 sr-only">Login</h1>
                            <fieldset>
                                <legend class="sr-only">Access your account</legend>
                                <label for="username" class="sr-only">Username:</label>
                                <input type="text" id="username" name="username" maxlength="12" placeholder="Username" value=""
                                       required><br/>
                                <label for="password" class="sr-only">Password:</label>
                                <input type="password" id="password" name="password" maxlength="12" placeholder="Your Password" required>
                                <div class="checkbox mb-2">
                                    <input type="checkbox" class="mr-1" id="tcs" name="tcs">
                                    <label for="tcs" class="text-thin"> Remember this device</label>
                                </div>
                            </fieldset>
                            <button class="d-block col-12 btn btn-border-red">Login</button>
                        </form>
                    </div>
                    <div class="col-12 cf py-2">
                        <a class="float-left" href="#"><small>Register for the beta</small></a>
                        <a href="#" class="float-right"><small>Forgot Password?</small></a>
                        <hr>
                        <div class="text-center">
                            <footer><small class="text-grey-light p-2 d-block">Copyright &copy. Ollie Ford & Co. All rights reserved.</small></footer>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
</body>
</html>