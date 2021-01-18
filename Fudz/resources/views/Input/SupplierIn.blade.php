@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Insert Supplier Details') }}</div>

                    <div class="card-body">
                        <div class="block-content">
                            <form class="js-validation-bootstrap" action="SupplierIn.blade.php" method="post" onsubmit="return false;">
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="contact1-sname">Supplier Name</label>
                                        <input type="text" class="form-control" id="contact1-sname" name="contact1-sname" placeholder="Enter Supplier's Name..">
                                    </div>

                                    <div class="col-12">
                                        <label for="val-phoneus">Phone  <span class="text-danger"></span></label>
                                        <input type="text" class="form-control" id="val-phoneus" name="val-phoneus" placeholder="Enter Supplier's phone number..">
                                    </div>

                                    <div class="col-12">
                                        <label for="contact1-email">Email</label>

                                        <div class="input-group">
                                            <input type="email" class="form-control" id="contact1-email" name="contact1-email" placeholder="Enter Supplier's email..">
                                            <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-envelope-o"></i>
                                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="contact1-address">Address</label>
                                        <input type="text" class="form-control" id="contact1-address" name="contact1-address" placeholder="Enter Supplier's address..">
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
