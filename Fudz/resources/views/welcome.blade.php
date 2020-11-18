@extends('layouts.simple')

@section('content')
    <!-- Page Content -->
    <div class="bg-image">
        <div class="hero bg-primary-dark-op">
            <div class="hero-inner">
                <div class="content content-full text-center">
                    <h1 class="display-4 font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeInDown">Codebase</h1>
                    <h2 class="font-w400 text-white-op mb-50 invisible" data-toggle="appear" data-class="animated fadeInUp" data-timeout="250">It’s Time to Create Your Next Amazing Project</h2>
                    <a class="btn btn-hero btn-noborder btn-rounded btn-primary invisible" data-toggle="appear" data-class="animated bounceIn" data-timeout="750" href="/register">
                        <i class="si si-rocket mr-10"></i> Register
                    </a>
                        <a class="btn btn-hero btn-noborder btn-rounded btn-primary invisible" data-toggle="appear" data-class="animated bounceIn" data-timeout="750" href="/login">
                            <i class="si si-rocket mr-10"></i> Login
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- END Page Content -->
@endsection
