@extends('layouts.simple')

@section('content')
    <!-- Page Content -->
    <div class="bg-image"style="background-image: url('{{ asset('/media/photos/01.png') }}');">
        <div class="hero ">
            <div class="hero-inner">
                <div class="content content-full text-center">
                    <h1 class="display-4 font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeInDown">{{ config('app.name', 'Fudz Enterprise Management System') }}</h1>
                    <h2 class="font-w400 text-white-op mb-50 invisible" data-toggle="appear" data-class="animated fadeInUp" data-timeout="250">Food is our core business</h2>
                    <a class="btn btn-hero btn-noborder btn-primary invisible" data-toggle="appear" data-class="animated bounceIn" data-timeout="750" href="/register">
                        <i class="fa fa-plus mr-5"></i> Register
                    </a>
                    <a class="btn btn-hero btn-noborder btn-primary invisible" data-toggle="appear" data-class="animated bounceIn" data-timeout="750" href="/login">
                            <i class="fa fa-arrow-right mr-5"></i> Login
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- END Page Content -->
@endsection
