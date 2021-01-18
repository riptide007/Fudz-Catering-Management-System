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
                                        <input type="number" min="0" class="form-control" id="contact1-lastname" name="contact1-lastname" placeholder="Enter Client's lastname..">
                                    </div>
                                    <label class="form-group col-12">Utilities</label>
                                    <div class="form-group col-12">
                                            <div class="custom-control custom-checkbox custom-control-inline mb-5">
                                                <input class="custom-control-input" type="checkbox" name="example-inline-checkbox1" id="example-inline-checkbox1" value="option1" checked>
                                                <label class="custom-control-label" for="example-inline-checkbox1">Electricity</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline mb-5">
                                                <input class="custom-control-input" type="checkbox" name="example-inline-checkbox2" id="example-inline-checkbox2" value="option2">
                                                <label class="custom-control-label" for="example-inline-checkbox2">Water</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline mb-5">
                                                <input class="custom-control-input" type="checkbox" name="example-inline-checkbox3" id="example-inline-checkbox3" value="option3">
                                                <label class="custom-control-label" for="example-inline-checkbox3">Option 3</label>
                                            </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="catering-date">Date:</label>
                                        <input type="date" class="form-control" id="catering-date" name="catering-date">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="catering-time">Time:</label>
                                        <input type="time" class="form-control" id="catering-time" name="catering-time">
                                    </div>
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
