@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Insert Catering Details') }}</div>

                    <div class="card-body">
                        <div class="block-content">
                            <form class="js-validation-bootstrap" action="/page2" method="post" >
                                @csrf
                                <div class="form-group row">
                                    <label class="col-12" for="client_id">Client Name</label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="client_id" name="client_id">
                                                <option value="0">Please select</option>
                                                <option value="1">Option #1</option>
                                                <option value="2">Option #2</option>
                                                <option value="3">Option #3</option>
                                            </select>
                                        </div>
                                    <div class="col-12">
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
                                    <div class="col-12">
                                        <label for="Location_Details">Location Details</label>
                                        <textarea class="form-control" id="Location_Details" name="Location_Details" rows="6" placeholder="Enter Utilities found on site"></textarea>
                                    </div>
                                    <div class=" col-6">
                                        <label for="Date">Date:</label>
                                        <input type="date" class="form-control" id="Date" name="Date">
                                    </div>
                                    <div class=" col-6">
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
