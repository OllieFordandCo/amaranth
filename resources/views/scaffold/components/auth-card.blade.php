<section class="card px-3 py-2">
    <header class="text-center p-2">
        <a href="{{ url('/') }}">
            <div class="display-3 title d-inline-block px-1 mx-auto">{{config('app.name', 'amaranth')}}</div>
        </a>
        <small class="d-block text-thin text-grey-light">{{config('app.slogan', 'Social Network Engine for Laravel')}}</small>
    </header>
    <div>
        {{ $slot }}
    </div>
</section>