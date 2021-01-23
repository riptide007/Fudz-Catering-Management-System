@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Insert Employee Details') }}</div>

                    <div class="card-body">
                        <div class="block-content">
                            <form class="js-validation-bootstrap" action="/page3" method="post" onsubmit="return false;">
                                <div class="form-group row">
                                    <div class="col-6">
                                        <label for="Surname">Surname</label>
                                        <input type="text" class="form-control" id="Surname" name="Surname" placeholder="Enter Employee's Surname..">
                                    </div>
                                    <div class="col-6">
                                        <label for="Firstname">Firstname</label>
                                        <input type="text" class="form-control" id="Firstname" name="Firstname" placeholder="Enter Employee's firstname..">
                                    </div>
                                    <div class="col-6">
                                        <label for="Lastname">Lastname</label>
                                        <input type="text" class="form-control" id="Lastname" name="Lastname" placeholder="Enter Employee's lastname..">
                                    </div>
                                    <div class="col-6">
                                        <label for="Phone">Phone  <span class="text-danger"></span></label>
                                        <input type="text" class="form-control" id="Phone" name="Phone" placeholder="Enter Employee's phone number..">
                                    </div>

                                    <div class="col-12">
                                        <label for="email">Email</label>

                                        <div class="input-group">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Employee's email..">
                                            <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-envelope-o"></i>
                                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="Address">Address</label>
                                        <input type="text" class="form-control" id="Address" name="Address" placeholder="Enter Employee's address..">
                                    </div>
                                    <div class="col-6">
                                        <label for="Speciality">Speciality</label>
                                        <input type="text" class="form-control" id="Speciality" name="Speciality" placeholder="Enter Employee's Specification..">
                                    </div>
                                    <div class="col-6">
                                        <label for="Average_Pay">Average Pay</label>
                                        <input type="text" class="form-control" id="Average_Pay" name="Average_Pay" placeholder="Enter Employee's Average Pay..">
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
