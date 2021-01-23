@extends('layouts.backend')

@section('content')
    <!-- Page Content -->
    <div class=" bg-pattern hero-bubbles" style="background-image: url('{{ asset('/media/photos/01.png') }}');">

        <div class="hero  overflow-hidden">
            <div class="hero-inner">
                <div class="content content-full text-center">
                    <div class="pt-100 pb-150">
                        <h1 class="font-w700 display-4 mt-20 invisible" data-toggle="appear" data-timeout="50">
                            {{ config('app.name', 'Fudz Enterprise Management System') }}
                        </h1>
                        <h2 class="h3 font-w400 text-muted mb-50 invisible" data-toggle="appear" data-class="animated fadeInDown" data-timeout="300">
                            Food is our core business
                        </h2>
                        <div class="invisible" data-toggle="appear" data-class="animated fadeInDown" data-timeout="300">
                            <a class="btn btn-hero btn-noborder btn-primary invisible" data-toggle="appear" data-class="animated bounceIn" data-timeout="750" href="/register">
                                <i class="si si-rocket mr-10"></i> Register
                            </a>
                            <a class="btn btn-hero btn-noborder btn-primary invisible" data-toggle="appear" data-class="animated bounceIn" data-timeout="750" href="/login">
                                <i class="si si-rocket mr-10"></i> Login
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
