@extends('layouts.auth')

@section('content')
    @component('components/auth-card')
        @if (session('status'))
            @component('components/alert', ['class' => 'bg-green'])
            {{ session('status') }}
            @endcomponent
        @endif
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            {{ csrf_field() }}
            <fieldset class="py-2">
                <legend class="small text-center">You are logged in!</legend>
                <button type="submit" class="d-block mx-auto btn btn-border-grey">Logout</button>
            </fieldset>
        </form>
    @endcomponent
@endsection
