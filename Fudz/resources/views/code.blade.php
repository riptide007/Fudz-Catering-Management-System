<?php
<tbody>
@forelse($teachers as $info)
    <tr>
        <td class="text-center">{{$loop->iteration}}</td>
        <td class="font-w600">{{$info->name}}</td>
        <td class="d-none d-sm-table-cell">{{$info->email}}</td>
        <td class="d-none d-sm-table-cell">
            @forelse($no_of_classes as $key => $count)
                @if($key == $info->id)
                    {{$count}}
                @endif
            @empty

            @endforelse
        </td>
        <td class="d-none d-sm-table-cell">
            @if($info->suspended == 0)
                <span class="badge badge-success">Active</span>
            @else
                <span class="badge badge-danger">Suspended</span>
            @endif
        </td>
        <td class="text-center">
            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Contact teacher">
                <i class="fa fa-envelope"></i>
            </button>
            @if($info->suspended == 0)
                <button type="button" class="btn btn-sm btn-alt-danger" data-toggle="modal" data-target="#modal-suspend-{{$info->id}}" data-toggle="tooltip" title="Suspend">
                    <i class="fa fa-trash"></i>
                </button>
            @else
                <button type="button" class="btn btn-sm btn-alt-success" data-toggle="modal" data-target="#modal-restore-{{$info->id}}" data-toggle="tooltip" title="Restore">
                    <i class="fa fa-undo"></i>
                </button>
            @endif
        </td>
    </tr>

    @empty
    @endforelse
    </tbody>
