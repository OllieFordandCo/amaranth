@extends('uiManager::layouts.app')

@section('content')
<div class="p-relative full-height">
    <div class="content v-align p-relative">
        <div>
            <div class="container-xs mx-auto">
                <div class="grid-row text-center">
                    <div class="col-12">
                        <h1 class="text-white display-3 my-1">{{ config('app.name') }}</h1>
                        <main class="card card-dark card-contained my-3">
                            <header class="px-3 py-1">
                                <h5 class="my-1 text-grey-light text-thin">Getting Started</h5>
                            </header>
                            <article class="grid-row text-left">
                                <div class="col-12" style="max-height:calc(100vh - 300px);">
                                    <div class="scroll-content text-center py-3 px-3" data-simplebar>
                                        <h2 class="h5 text-white mb-2">Welcome back, User!</h2>
                                    </div>
                                </div>
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
@endsection