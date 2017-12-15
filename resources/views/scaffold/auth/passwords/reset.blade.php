@extends('layouts.auth')

@section('content')
    @component('components/auth-card')
    <div class="grid-row grid-gutter m-collapse-1 d-block">
        <div class="col-12">
            <form method="POST" action="{{ route('password.request') }}">
                {{ csrf_field() }}
                <h1 class="h2 mt-0 sr-only">Reset Password</h1>
                <fieldset>
                    <legend class="sr-only">Choose a new password</legend>
                    <input type="hidden" name="token" value="{{ $token }}">
                    <label for="username" class="sr-only">Email:</label>
                    <input type="text" id="email" {{ $errors->has('email') ? ' class="has-error"' : '' }} name="email"
                           placeholder="Email" value="{{ old('email') }}" required><br/>
                    @if ($errors->has('email'))
                        @component('components/alert', ['class' => 'bg-red'])
                            <strong>{{ $errors->first('email') }}</strong>
                       @endcomponent
                    @endif
                    <label for="password" class="sr-only">Password:</label>
                    <input type="password" id="password"
                           {{ $errors->has('password') ? ' class="has-error"' : '' }} name="password"
                           placeholder="Your Password" required>
                    @if ($errors->has('password'))
                        @component('components/alert', ['class' => 'bg-red'])
                            <strong>{{ $errors->first('password') }}</strong>
                        @endcomponent
                    @endif
                    <label for="password_confirmation" class="sr-only">Confirm Password:</label>
                    <input type="password" id="password_confirmation"
                           {{ $errors->has('password_confirmation') ? ' class="has-error"' : '' }} name="password_confirmation"
                           placeholder="Confirm Password" required>
                    @if ($errors->has('password_confirmation'))
                        @component('components/alert', ['class' => 'bg-red'])
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        @endcomponent
                    @endif
                    <button type="submit" class="d-block col-12 btn btn-border-red">Reset Password</button>
                </fieldset>
            </form>
        </div>
        <div class="col-12 cf py-2">
            <a class="float-left" href="{{ route('login') }}">
                <small>Login</small>
            </a>
        </div>
    </div>
    @endcomponent
@endsection