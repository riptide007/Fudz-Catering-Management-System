@extends('layouts.backend')

@section('content')
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Employee Table</h3>
        </div>
        <div class="block-content">
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-vcenter">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 100px;"><i class="si si-user"></i></th>
                        <th style="width: 30%;">Employee name</th>
                        <th style="width: 30%;">Telephone number</th>
                        <th style="width: 30%;">Email</th>
                        <th style="width: 30%;">Address</th>
                        <th style="width: 30%;">Speciality</th>
                        <th>Average_Pay</th>
                        <th class="text-center" style="width: 100px;">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($employee as $info)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td class="font-w600">{{$info->Surname}}  {{$info->Fname}}  {{$info->Lname}}</td>
                            <td class="font-w600">{{$info->Telephone}}</td>
                            <td class="d-none d-sm-table-cell">{{$info->email}}</td>
                            <td class="font-w600">{{$info->Address}}</td>
                            <td class="font-w600">{{$info->Speciality}}</td>
                            <td class="font-w600">{{$info->Average_Pay}}</td>
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
