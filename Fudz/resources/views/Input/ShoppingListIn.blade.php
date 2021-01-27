@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Insert Client Details') }}</div>

                    <div class="card-body">
                        <div class="block-content">
                            <form class="js-validation-bootstrap" action="/page6" method="post" onsubmit="return false;">
                                <div class="form-group row">
                                    <div class="col-6">
                                        <label for="Productname">Productname</label>
                                        <input type="text" class="form-control" id="Productname" name="Productname" placeholder="Enter Client's Surname..">
                                    </div>
                                    <div class="col-6">
                                        <label for="Quantity">Quantity</label>
                                        <input type="text" class="form-control" id="Quantity" name="Quantity" placeholder="Enter Client's firstname..">
                                    </div>
                                    <div class="col-6">
                                        <label for="PurchaseLocation">PurchaseLocation</label>
                                        <input type="text" class="form-control" id="PurchaseLocation" name="PurchaseLocation" placeholder="Enter Client's lastname..">
                                    </div>
                                    <div class="col-6">
                                        <label for="Unit">Unit  <span class="text-danger"></span></label>
                                        <input type="text" class="form-control" id="Unit" name="Unit" placeholder="Enter Client's phone number..">
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
