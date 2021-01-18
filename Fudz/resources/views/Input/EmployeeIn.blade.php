@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Insert Employee Details') }}</div>

                    <div class="card-body">
                        <div class="block-content">
                            <form class="js-validation-bootstrap" action="EmployeeIn.blade.php" method="post" onsubmit="return false;">
                                <div class="form-group row">
                                    <div class="col-6">
                                        <label for="contact1-surname">Surname</label>
                                        <input type="text" class="form-control" id="contact1-surname" name="contact1-surname" placeholder="Enter Employee's Surname..">
                                    </div>
                                    <div class="col-6">
                                        <label for="contact1-firstname">Firstname</label>
                                        <input type="text" class="form-control" id="contact1-firstname" name="contact1-firstname" placeholder="Enter Employee's firstname..">
                                    </div>
                                    <div class="col-6">
                                        <label for="contact1-lastname">Lastname</label>
                                        <input type="text" class="form-control" id="contact1-lastname" name="contact1-lastname" placeholder="Enter Employee's lastname..">
                                    </div>
                                    <div class="col-6">
                                        <label for="val-phoneus">Phone  <span class="text-danger"></span></label>
                                        <input type="text" class="form-control" id="val-phoneus" name="val-phoneus" placeholder="Enter Employee's phone number..">
                                    </div>

                                    <div class="col-12">
                                        <label for="contact1-email">Email</label>

                                        <div class="input-group">
                                            <input type="email" class="form-control" id="contact1-email" name="contact1-email" placeholder="Enter Employee's email..">
                                            <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-envelope-o"></i>
                                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="contact1-address">Address</label>
                                        <input type="text" class="form-control" id="contact1-address" name="contact1-address" placeholder="Enter Employee's address..">
                                    </div>
                                    <div class="col-6">
                                        <label for="contact1-address">Specification</label>
                                        <input type="text" class="form-control" id="contact1-specs" name="contact1-specs" placeholder="Enter Employee's Specification..">
                                    </div>
                                    <div class="col-6">
                                        <label for="contact1-address">Average Pay</label>
                                        <input type="text" class="form-control" id="contact1-pay" name="contact1-pay" placeholder="Enter Employee's Average Pay..">
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
