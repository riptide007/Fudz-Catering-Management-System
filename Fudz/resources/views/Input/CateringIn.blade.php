@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Insert Catering Details') }}</div>

                    <div class="card-body">
                        <div class="block-content">
                            <form class="js-validation-bootstrap" action="/page2" method="post" onsubmit="return false;">
                                <div class="form-group row">
                                    <div class="col-6">
                                        <label for="Event_type">Event type</label>
                                        <input type="text" class="form-control" id="Event_type" name="Event_type" placeholder="Enter Client's Surname..">
                                    </div>
                                    <div class="col-6">
                                        <label for="Location">Location</label>
                                        <input type="text" class="form-control" id="Location" name="Location" placeholder="Enter Client's firstname..">
                                    </div>
                                    <div class="col-6">
                                        <label for="GuestNo">Number of Guests</label>
                                        <input type="number" min="0" class="form-control" id="GuestNo" name="GuestNo" placeholder="Enter Client's lastname..">
                                    </div>
                                    <label for="Utilities" class="form-group col-12">Utilities</label>
                                    <div class="form-group col-12">
                                            <div class="custom-control custom-checkbox custom-control-inline mb-5">
                                                <input class="custom-control-input" type="checkbox" name="Electricity" id="Electricity" value="Electricity" checked>
                                                <label class="custom-control-label" for="Electricity">Electricity</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline mb-5">
                                                <input class="custom-control-input" type="checkbox" name="Water" id="Water" value="Water">
                                                <label class="custom-control-label" for="Water">Water</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline mb-5">
                                                <input class="custom-control-input" type="checkbox" name="example-inline-checkbox3" id="example-inline-checkbox3" value="option3">
                                                <label class="custom-control-label" for="example-inline-checkbox3">Option 3</label>
                                            </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="Date">Date:</label>
                                        <input type="date" class="form-control" id="Date" name="Date">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="Time">Time:</label>
                                        <input type="time" class="form-control" id="Time" name="Time">
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
