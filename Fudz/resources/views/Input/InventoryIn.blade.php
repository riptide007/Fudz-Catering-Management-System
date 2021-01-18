@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Insert Inventory Details') }}</div>

                    <div class="card-body">
                        <div class="block-content">
                            <form class="js-validation-bootstrap" action="InventoryIn.blade.php" method="post" onsubmit="return false;">
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="contact1-surname">Name</label>
                                        <input type="text" class="form-control" id="contact1-surname" name="contact1-surname" placeholder="Enter Item Surname..">
                                    </div>
                                    <div class="col-6">
                                        <label for="contact1-firstname">Quantity</label>
                                        <input type="number" class="form-control" id="contact1-firstname" name="contact1-firstname" placeholder="Enter Item firstname..">
                                    </div>
                                    <div class="col-6">
                                        <label for="contact1-lastname">Lastname</label>
                                        <input type="text" class="form-control" id="contact1-lastname" name="contact1-lastname" placeholder="Enter Item lastname..">
                                    </div>
                                    <div class="col-6">
                                        <label for="val-phoneus">Phone  <span class="text-danger"></span></label>
                                        <input type="text" class="form-control" id="val-phoneus" name="val-phoneus" placeholder="Enter Client's phone number..">
                                    </div>


                                    <div class="col-6">
                                        <label for="contact1-address">Address</label>
                                        <input type="text" class="form-control" id="contact1-address" name="contact1-address" placeholder="Enter Client's address..">
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
