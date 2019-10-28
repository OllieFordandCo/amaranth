@extends('layouts.auth')

@section('content')
    @component('components/auth-card')
    <div class="grid-row grid-gutter m-collapse-1 d-block">
        <div class="col-12">
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <h1 class="h2 mt-0 sr-only">Login</h1>
                <fieldset>
                    <legend class="sr-only">Access your account</legend>
                    <label for="username" class="sr-only">Username:</label>
                    <input type="text" id="username"{{ $errors->has('username') ? ' class="has-error"' : '' }} name="username" maxlength="12" placeholder="Username" value="{{ old('username') }}" required><br/>
                    @if ($errors->has('username'))
                        @component('components/alert', ['class' => 'bg-red'])
                            <strong>{{ $errors->first('username') }}</strong>
                        @endcomponent
                    @endif
                    <label for="password" class="sr-only">Password:</label>
                    <input type="password" id="password"{{ $errors->has('password') ? ' class="has-error"' : '' }} name="password" maxlength="12" placeholder="Your Password" required>
                    <div class="checkbox mb-2{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="checkbox" class="mr-1" id="remember" name="remember"{{ old('remember') ? ' checked' : '' }}>
                        <label for="remember" class="text-thin"> Remember this device</label>
                    </div>
                </fieldset>
                <button type="submit" class="d-block col-12 btn btn-border-red">Login</button>
            </form>
        </div>
        <div class="col-12 cf py-2">
            <a class="float-left" href="{{ route('register') }}"><small>Register for the beta</small></a>
            <a href="{{ route('password.request') }}" class="float-right"><small>Forgot Password?</small></a>
        </div>
    </div>
    @endcomponent
@endsection
