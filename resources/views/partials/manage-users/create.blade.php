@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin">
            <p><a href="{{route('manage-users.index')}}"><i class="mdi mdi-arrow-left-circle mdi-24px text-warning"></i></a></p>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create User</h4>
                    <form method="post" action="{{route('manage-users.store')}}">
                        @include('partials.manage-users.shared')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
