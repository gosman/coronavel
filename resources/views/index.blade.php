@extends('layouts.dashboard')

@section('content')
    <p>{{request()->path()}}</p>

    @isset($search)
        <p>The search term is {{request()->q}}</p>
    @endisset
@endsection

@push('scripts')
    <script>
        console.log("test")
    </script>
@endpush
