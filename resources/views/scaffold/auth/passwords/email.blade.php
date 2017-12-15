@extends('layouts.auth')

@section('content')
    @component('components/auth-card')
    <div class="grid-row grid-gutter m-collapse-1 d-block">
        <div class="col-12">
            <form method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}
                <h1 class="h2 mt-0 sr-only">Reset Password</h1>
                @if (session('status'))
                    @component('components/alert', ['class' => 'bg-green'])
                        {{ session('status') }}
                    @endcomponent
                @endif
                <fieldset>
                    <legend class="sr-only">Get an email give the option to reset your password</legend>
                    <label for="username" class="sr-only">Email:</label>
                    <input type="text" id="email"{{ $errors->has('email') ? ' class="has-error"' : '' }} name="email" placeholder="Email" value="{{ old('email') }}" required><br/>
                    @if ($errors->has('email'))
                        @component('components/alert', ['class' => 'bg-red'])
                            <strong>{{ $errors->first('email') }}</strong>
                        @endcomponent
                    @endif
                </fieldset>
                <button type="submit" class="d-block col-12 btn btn-border-red">Send Password Reset Link</button>
            </form>
        </div>
        <div class="col-12 cf py-2">
            <a class="float-left" href="{{ route('login') }}"><small>Login</small></a>
            <a href="{{ route('register') }}" class="float-right"><small>Register for the beta</small></a>
        </div>
    </div>
    @endcomponent
@endsection