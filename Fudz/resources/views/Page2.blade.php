@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <div class="block-content">
                            <form action="Page1.blade.php" method="post" onsubmit="return false;">
                                <div class="form-group row">
                                    <div class="col-6">
                                        <label for="contact1-firstname">Firstname</label>
                                        <input type="text" class="form-control" id="contact1-firstname" name="contact1-firstname" placeholder="Enter your firstname..">
                                    </div>
                                    <div class="col-6">
                                        <label for="contact1-lastname">Lastname</label>
                                        <input type="text" class="form-control" id="contact1-lastname" name="contact1-lastname" placeholder="Enter your lastname..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="contact1-email">Email</label>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input type="email" class="form-control" id="contact1-email" name="contact1-email" placeholder="Enter your email..">
                                            <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-envelope-o"></i>
                                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--<div class="form-group row">
                                    <div class="col-lg-8">
                                        <input type="text" class="js-datepicker form-control js-datepicker-enabled" id="example-datepicker1" name="example-datepicker1" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                    </div>
                                </div>-->



                                <div class="form-group row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-alt-info">
                                            <i class="fa fa-send mr-5"></i> Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
