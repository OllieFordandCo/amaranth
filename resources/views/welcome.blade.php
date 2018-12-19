@extends('uiManager::layouts.app')

@section('content')
<div class="p-relative full-height">
    <div class="content v-align p-relative">
        <div>
            <div class="container mx-auto">
                <div class="grid-row text-center">
                    <div class="col-12">
                        @include('uiManager::components.branding.logo')
                        <main class="card card-contained my-3">
                            <header class="px-3 py-1">
                                <h5 class="my-1 text-grey-light text-thin">Getting Started</h5>
                            </header>
                            <article class="grid-row text-left">
                                <div class="col-12">
                                    <div class="scroll-content text-center py-3 px-xl" data-simplebar>
                                        <h2 class="h5 text-white mb-2">Let's get this show on the road!</h2>
                                        <div class="card-block text-white">
                                            <p>Application in development. Check back soon or log in below.</p>
                                            <?php
                                            $installed = false;
                                            try {
                                                $hasUsers = \Schema::hasTable('users');
                                                $installed = true;
                                            } catch(\Exception $e) {
                                                $installed = false;
                                            }
                                            if(!$installed) { ?>
                                                <a href="./install" class="btn btn-primary my-3">Start installation</a>
                                            <?php } else { ?>
                                                <a href="./login" class="btn btn-primary my-3">Login</a>
                                            <?php } ?>
                                        </div>
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