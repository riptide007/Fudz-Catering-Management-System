@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Insert Inventory Details') }}</div>

                    <div class="card-body">
                        <div class="block-content">
                            <form class="js-validation-bootstrap" action="/page5" method="post" onsubmit="return false;">
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="Name">Name</label>
                                        <input type="text" class="form-control" id="Name" name="Name" placeholder="Enter Item Surname..">
                                    </div>
                                    <div class="col-6">
                                        <label for="quantity">Quantity</label>
                                        <input type="number" class="form-control" id="quantity" name="quantity" min="0" placeholder="Enter Item quantity..">
                                    </div>
                                    <div class="col-6">
                                        <label for="priceperunit">Price per Unit</label>
                                        <input type="number" class="form-control" id="priceperunit" name="priceperunit" min="0" placeholder="Enter Item price per unit..">
                                    </div>
                                    <div class="col-6">
                                        <label for="unit">Unit<span class="text-danger"></span></label>
                                        <input type="text" class="form-control" id="unit" name="unit" placeholder="Enter Client's phone number..">
                                    </div>
                                    <div class="col-6">
                                        <label for="supplier_id">Supplier ID<span class="text-danger"></span></label>
                                        <input type="text" class="form-control" id="supplier_id" name="supplier_id" placeholder="Enter Client's phone number..">
                                    </div>



                                    <div class="col-6">
                                        <label for="ItemCondition">ItemCondition</label>
                                        <input type="text" class="form-control" id="ItemCondition" name="ItemCondition" placeholder="Enter Client's address..">
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
