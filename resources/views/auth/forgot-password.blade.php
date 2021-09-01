@extends('layouts.auth')

@section('content')
    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        @if($errors->any())
            <div class="alert-danger">{{ $errors->first() }}</div>
        @endif

        @if(session('status'))
            <div class="alert-danger">{{ session('status') }}</div>
        @endif

        <div class="form-group">
            <label>E-Mail Address</label>
            <input type="email" name="email" value="{{old('email')}}" class="form-control p_input" required>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block enter-btn">Reset Password</button>
        </div>
    </form>
@endsection
