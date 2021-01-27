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
                        <th>Event type</th>
                        <th>Location</th>
                        <th>Guest Number</th>
                        <th style="width: 30%;">Location Details</th>
                        <th style="width: 30%;">Date</th>
                        <th style="width: 30%;">Time</th>
                        <th class="text-center" style="width: 100px;">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($catering as $info)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td class="font-w600">{{$info->Event_type}}</td>
                            <td class="font-w600">{{$info->Location}}</td>
                            <td class="font-w600">{{$info->GuestNo}}</td>
                            <td class="font-w600">{{$info->Location_Details}}</td>
                            <td class="d-none d-sm-table-cell">{{$info->Date}}</td>
                            <td class="font-w600">{{$info->Time}}</td>
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
