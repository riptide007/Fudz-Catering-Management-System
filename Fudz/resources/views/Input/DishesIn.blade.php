@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Insert Dishes Details') }}</div>

                    <div class="card-body">
                        <div class="block-content">
                            <form class="js-validation-bootstrap" action="/page8" method="post" onsubmit="">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-6">
                                        <label for="catering_id">Catering</label>
                                        <input type="text" class="form-control" id="catering_id" name="catering_id" placeholder="Enter Catering title..">
                                    </div>
                                    <div class="col-6">
                                        <label for="Starters">Starters</label>
                                        <input type="text" class="form-control" id="Starters" name="Starters" placeholder="Enter Starters..">
                                    </div>
                                    <div class="col-6">
                                        <label for="Accompaniments">Accompaniments</label>
                                        <input type="text" class="form-control" id="Accompaniments" name="Accompaniments" placeholder="Enter Accompaniments..">
                                    </div>
                                    <div class="col-6">
                                        <label for="Proteins">Proteins</label>
                                        <input type="text" class="form-control" id="Proteins" name="Proteins" placeholder="Enter Proteins..">
                                    </div>
                                    <div class="col-6">
                                        <label for="Dessert">Dessert  <span class="text-danger"></span></label>
                                        <input type="text" class="form-control" id="Dessert" name="Dessert" placeholder="Enter Dessert..">
                                    </div>
                                    <div class="col-6">
                                        <label for="Beverage">Snacks</label>
                                        <input type="text" class="form-control" id="Beverage" name="Beverage" placeholder="Enter Beverages..">
                                    </div>


                                    <div class="col-6">
                                        <label for="Snacks">Snacks</label>
                                        <input type="text" class="form-control" id="Snacks" name="Snacks" placeholder="Enter Snacks..">
                                    </div>
                                </div>

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
