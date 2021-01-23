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
                        <th>Name</th>
                        <th>quantity</th>
                        <th>Price per unit</th>
                        <th style="width: 30%;">Unit of measure</th>
                        <th style="width: 30%;">Item Condition</th>

                        <th class="text-center" style="width: 100px;">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($inventory as $info)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td class="font-w600">{{$info->Name}}</td>
                            <td class="font-w600">{{$info->quantity}}</td>
                            <td class="font-w600">{{$info->priceperunit}}</td>
                            <td class="font-w600">{{$info->unit}}</td>
                            <td class="d-none d-sm-table-cell">{{$info->ItemCondition}}</td>

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
