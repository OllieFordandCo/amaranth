@extends('layouts.auth')

@section('content')
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
                        <form class="form-horizontal" method="POST" {{ route('login') }}>
                            <h1 class="h2 mt-0 sr-only">Login</h1>
                            {{ csrf_field() }}
                            <fieldset>
                                <legend class="sr-only">Access your account</legend>
                                <label for="username" class="sr-only">Email:</label>
                                <input type="text" id="email" name="email" maxlength="12" placeholder="Email" value="{{ old('email') }}" autofocus required {{ $errors->has('email') ? 'class="invalid-input"' : '' }}><br/>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <label for="password" class="sr-only">Password:</label>
                                <input type="password" id="password" name="password" maxlength="12" placeholder="Password" required {{ $errors->has('password') ? ' class="invalid-input"' : '' }}>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <div class="checkbox mb-2">
                                    <input type="checkbox" class="mr-1" id="tcs" name="tcs" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="tcs" class="text-thin"> Remember this device</label>
                                </div>
                            </fieldset>
                            <button class="d-block col-12 btn btn-border-red">Login</button>
                        </form>
                    </div>
                    <div class="col-12 cf py-2">
                        <a class="float-left" href="#"><small>Register for the beta</small></a>
                        <a href="{{ route('password.request') }}" class="float-right"><small>Forgot Password?</small></a>
                    </div>
                    <div class="col-12">
                        <hr>
                        <footer><small class="text-grey-light text-center p-2 d-block">Copyright &copy. Ollie Ford & Co. All rights reserved.</small></footer>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection