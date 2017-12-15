@extends('layouts.auth')

@section('content')
    @component('components/auth-card')
    <div class="grid-row grid-gutter m-collapse-1 d-block">
        <div class="col-12">
            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                @if(config('amaranth.allow_registration'))
                    <h1 class="h2 mt-0 sr-only">Register</h1>
                    <fieldset>
                        <legend class="sr-only">Register an account</legend>
                        <label for="username" class="sr-only">Username:</label>
                        <input type="text" id="username"{{ $errors->has('username') ? ' class="has-error"' : '' }} name="username" maxlength="20" placeholder="Username" value="{{ old('username') }}" required><br/>
                        @if ($errors->has('username'))
                            @component('components/alert', ['class' => 'bg-red'])
                                <strong>{{ $errors->first('username') }}</strong>
                            @endcomponent
                        @endif
                        <label for="email" class="sr-only">Email:</label>
                        <input type="text" id="email"{{ $errors->has('email') ? ' class="has-error"' : '' }} name="email" placeholder="Email" value="{{ old('email') }}" required><br/>
                        @if ($errors->has('email'))
                            @component('components/alert', ['class' => 'bg-red'])
                                <strong>{{ $errors->first('email') }}</strong>
                            @endcomponent
                        @endif
                        <label for="password" class="sr-only">Password:</label>
                        <input type="password" id="password"{{ $errors->has('password') ? ' class="has-error"' : '' }} name="password" placeholder="Your Password" required>
                        @if ($errors->has('password'))
                            @component('components/alert', ['class' => 'bg-red'])
                                <strong>{{ $errors->first('password') }}</strong>
                            @endcomponent
                        @endif
                        <label for="password_confirmation" class="sr-only">Confirm Password:</label>
                        <input type="password" id="password_confirmation"{{ $errors->has('password_confirmation') ? ' class="has-error"' : '' }} name="password_confirmation" placeholder="Confirm Password" required>
                        @if ($errors->has('password_confirmation'))
                            @component('components/alert', ['class' => 'bg-red'])
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            @endcomponent
                        @endif
                        <div class="checkbox mb-2{{ $errors->has('tcs') ? ' has-error' : '' }}">
                            <input type="checkbox" class="mr-1" id="tcs" name="tcs"{{ old('tcs') ? ' checked' : '' }}>
                            <label for="tcs" class="text-thin"> I accept terms and conditions</label>
                        </div>
                    </fieldset>
                    <button type="submit" class="d-block col-12 btn btn-border-red">Register</button>
                @elseif(config('amaranth.allow_invitations'))
                    <fieldset>
                        <legend class="text-thin text-center">Register your interest</legend>
                        <p class="text-center">We will let you know once the registration it's open</p>
                        <label for="email" class="sr-only">Email:</label>
                        <input type="text" id="email"{{ $errors->has('email') ? ' class="has-error"' : '' }} name="email" placeholder="Email" value="{{ old('email') }}" required><br/>
                        @if ($errors->has('email'))
                            @component('components/alert', ['class' => 'bg-red'])
                            <strong>{{ $errors->first('email') }}</strong>
                            @endcomponent
                        @endif
                    </fieldset>
                    <button type="submit" class="d-block col-12 btn btn-border-red">Send</button>
                @else
                    @component('components/alert', ['class' => 'bg-grey'])
                        <strong>Apologies, but registrations are disabled.</strong>
                    @endcomponent
                @endif
            </form>
        </div>
        <div class="col-12 cf py-2">
            <a class="float-left" href="{{ route('login') }}"><small>Login</small></a>
            <a href="{{ route('password.request') }}" class="float-right"><small>Forgot Password?</small></a>
        </div>
    </div>
    @endcomponent
@endsection