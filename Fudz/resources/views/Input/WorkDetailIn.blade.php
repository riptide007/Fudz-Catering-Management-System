@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Insert Client Details') }}</div>

                    <div class="card-body">
                        <div class="block-content">
                            <form class="js-validation-bootstrap" action="/page7" method="post" onsubmit="">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-6">
                                        <label for="ProductionLead">Production Leader</label>
                                        <input type="text" class="form-control" id="ProductionLead" name="ProductionLead" placeholder="Enter Production Leader..">
                                    </div>
                                    <div class="col-6">
                                        <label for="ProductionTeam">Production Team</label>
                                        <input type="text" class="form-control" id="ProductionTeam" name="ProductionTeam" placeholder="Enter Production Team..">
                                    </div>
                                    <div class="col-6">
                                        <label for="ServiceLead">ServiceLead</label>
                                        <input type="text" class="form-control" id="ServiceLead" name="ServiceLead" placeholder="Enter Service Leader..">
                                    </div>
                                    <div class="col-6">
                                        <label for="ServiceTeam">ServiceTeam  <span class="text-danger"></span></label>
                                        <input type="text" class="form-control" id="ServiceTeam" name="ServiceTeam" placeholder="Enter Service Team..">
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-12">
                                        <button type="submit" class="btn btn-alt-info">
                                            <i class="fa fa-send mr-5"></i> Submit
                                        </button>
                                    </div>
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
