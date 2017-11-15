@extends('amaranth::layouts.auth')

@section('content')
    <div class="p-relative full-height">
        <div class="content v-align">
            <div>
                <section class="container-xs grid-row mx-auto py-1">
                    <header class="text-center p-2">
                        <div class="display-3 title d-inline-block px-1 mx-auto"><a href="{{ url('/') }}">{{config('app.name', 'amaranth')}}<a/></div>
                        <small class="d-block text-thin text-grey-light">{{config('app.slogan', 'Social Network Engine for Laravel')}}</small>
                    </header>
                    <div class="grid-row grid-gutter m-collapse-1 d-block">
                        <div class="col-12">
                            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                                <h1 class="h2 mt-0 sr-only">Login</h1>
                                {{ csrf_field() }}
                                <hr/>
                                <fieldset>
                                    <legend class="text-thin text-center">Reset your password</legend>
                                    <label for="email" class="sr-only">Email:</label>
                                    <input type="text" id="email" name="email" maxlength="12" placeholder="Email" value="{{ old('email') }}" autofocus required {{ $errors->has('email') ? 'class="invalid-input"' : '' }}><br/>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </fieldset>
                                <button class="d-block col-12 btn btn-border-red">Send password rest link</button>
                            </form>
                        </div>
                        <div class="col-12 cf py-2">
                            <a class="float-left" href="{{ route('login') }}"><small>Login</small></a>
                            <a href="{{ route('register') }}" class="float-right"><small>Register for the beta</small></a>
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