@extends('layouts.dashboard')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title float-left">Manage Users</h4>
                <h4 class="card-title float-right">
                    <a href="{{route('manage-users.create')}}">
                        <button type="button" class="btn btn-danger">Add User</button>
                    </a>
                </h4>
                </p>
                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Updated</th>
                            <th class="text-right">Tasks</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->role->name}}</td>
                                <td>{{Carbon\Carbon::parse($user->updated_at)->format('d/m/y - H:i')}}</td>
                                <td class="text-right">
                                    <a title="Edit {{$user->name}}" data-toggle="tooltip" data-placement="left" href="{{url('manage-users', [$user->id])}}">
                                        <i class="mdi mdi-account-edit mdi-18px text-warning"></i>
                                    </a>
                                    @if($user->id !== auth()->user()->id)
                                        <form method="post" action="{{route('manage-users.destroy',[$user->id])}}" class="d-inline form-delete" data-title="Delete {{$user->name}}" data-text="Are you sure?">
                                            @csrf
                                            @method('delete')
                                            <a title="Delete {{$user->name}}" data-toggle="tooltip" data-placement="left" href="#" onclick="$(this).closest('form').submit()">
                                                <i class="mdi mdi-trash-can-outline mdi-18px text-danger"></i>
                                            </a>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection
