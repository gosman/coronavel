@csrf
<div class="row">
    <div class="col-md-6">
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name', $user->name ?? '')}}">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">E-Mail</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="email" value="{{old('email', $user->email ?? '')}}">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" name="password">
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Repeat Password</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" name="password_confirmation">
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Role</label>
            <div class="col-sm-9">
                <select class="form-control" name="role_id">
                    @foreach($roles as $role)
                        @isset($user)
                            @if($user->role_id === $role->role_id)
                                <option selected value="{{$role->role_id}}">{{$role->name}}</option>
                            @else
                                <option value="{{$role->role_id}}">{{$role->name}}</option>
                            @endif
                        @else
                            <option value="{{$role->role_id}}">{{$role->name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary mr-2">Submit</button>
