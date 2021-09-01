@extends('layouts.auth')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf

        @if($errors->any())
            <div class="alert-danger">{{ $errors->first() }}</div>
        @endif

        <div class="form-group">
            <label>E-Mail Address</label>
            <input type="email" name="email" value="{{old('email')}}" class="form-control p_input" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control p_input" required>
        </div>
        <div class="form-group d-flex align-items-center justify-content-between">
            <div class="form-check">
                <label class="form-check-label">
                    <input name="remember" type="checkbox" class="form-check-input"> Remember me </label>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
            <a href="{{ route('password.request') }}" class="forgot-pass"><small>Forgot Password</small></a>
        </div>
    </form>
@endsection
