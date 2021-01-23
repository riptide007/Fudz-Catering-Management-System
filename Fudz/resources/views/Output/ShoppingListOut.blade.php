@extends('layouts.backend')

@section('content')
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Full Table</h3>
        </div>
        <div class="block-content">
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-vcenter">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 100px;"><i class="si si-user"></i></th>
                        <th>Product name</th>
                        <th>Quantity</th>
                        <th>PurchaseLocation</th>
                        <th>Cost per Unit</th>
                        <th style="width: 30%;">Email</th>
                        <th style="width: 30%;">Address</th>
                        <th class="text-center" style="width: 100px;">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($shoppinglist as $info)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td class="font-w600">{{$info->Productname}}</td>
                            <td class="font-w600">{{$info->Quantity}}</td>
                            <td class="font-w600">{{$info->PurchaseLocation}}</td>
                            <td class="font-w600">{{$info->Telephone}}</td>
                            <td class="d-none d-sm-table-cell">{{$info->CostperUnit}}</td>
                            <td class="font-w600">{{$info->Unit}}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit" >
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete" href="/login">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                    @empty
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
