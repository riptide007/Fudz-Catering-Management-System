@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Insert Catering Details') }}</div>

                    <div class="card-body">
                        <div class="block-content">
                            <form class="js-validation-bootstrap" action="ClientIn.blade.php" method="post" onsubmit="return false;">
                                <div class="form-group row">
                                    <div class="col-6">
                                        <label for="contact1-surname">Event type</label>
                                        <input type="text" class="form-control" id="contact1-surname" name="contact1-surname" placeholder="Enter Client's Surname..">
                                    </div>
                                    <div class="col-6">
                                        <label for="contact1-firstname">Location</label>
                                        <input type="text" class="form-control" id="contact1-firstname" name="contact1-firstname" placeholder="Enter Client's firstname..">
                                    </div>
                                    <div class="col-6">
                                        <label for="contact1-lastname">Number of Guests</label>
                                        <input type="number" class="form-control" id="contact1-lastname" name="contact1-lastname" placeholder="Enter Client's lastname..">
                                    </div>
                                    <div class="form-group col-lg-8">
                                        <label for="example-flatpickr-datetime">Calendar and time picker</label>
                                        <input type="text" class="js-flatpickr form-control bg-white" id="example-flatpickr-datetime" name="example-flatpickr-datetime" data-enable-time="true">
                                    </div>





                                <!--<div class="form-group row">
                                    <div class="col-lg-8">
                                        <input type="text" class="js-datepicker form-control js-datepicker-enabled" id="example-datepicker1" name="example-datepicker1" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                    </div>
                                </div>-->




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
