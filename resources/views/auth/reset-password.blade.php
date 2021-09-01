@extends('layouts.auth')

@section('content')
    <form method="POST" action="{{ route('password.update') }}">

        <input type="hidden" name="token" value="{{ $request->route('token') }}">
        @csrf

        @if($errors->any())
            <div class="alert-danger">{{ $errors->first() }}</div>
        @endif

        <div class="form-group">
            <label>E-Mail Address</label>
            <input type="email" name="email" value="{{old('email', $request->email)}}" class="form-control p_input" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control p_input" required>
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control p_input" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block enter-btn">Reset Password</button>
        </div>
    </form>
@endsection
