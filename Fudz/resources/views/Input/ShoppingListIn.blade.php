@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Insert Shopping List Details') }}</div>

                    <div class="card-body">
                        <div class="block-content">
                            <form class="js-validation-bootstrap" action="/page6" method="post" onsubmit="">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-6">
                                        <label for="catering_id">Catering</label>
                                        <input type="text" class="form-control" id="catering_id" name="catering_id" placeholder="Enter Catering title..">
                                    </div>
                                    <div class="col-6">
                                        <label for="item_id">Item</label>
                                        <input type="text" class="form-control" id="item_id" name="item_id" placeholder="Enter Item id..">
                                    </div>
                                    <div class="col-6">
                                        <label for="Productname">Product name</label>
                                        <input type="text" class="form-control" id="Productname" name="Productname" placeholder="Enter Product name..">
                                    </div>
                                    <div class="col-6">
                                        <label for="Quantity">Quantity</label>
                                        <input type="text" class="form-control" id="Quantity" name="Quantity" placeholder="Enter Product Quantity..">
                                    </div>
                                    <div class="col-6">
                                        <label for="PurchaseLocation">Purchase Location</label>
                                        <input type="text" class="form-control" id="PurchaseLocation" name="PurchaseLocation" placeholder="Enter Purchase Location..">
                                    </div>
                                    <div class="col-6">
                                        <label for="CostperUnit">Cost per Unit</label>
                                        <input type="text" class="form-control" id="CostperUnit" name="CostperUnit" placeholder="Enter Product's Cost per Unit..">
                                    </div>
                                    <div class="col-6">
                                        <label for="Unit">Unit  <span class="text-danger"></span></label>
                                        <input type="text" class="form-control" id="Unit" name="Unit" placeholder="Enter Products's Unit of Measure..">
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
