@extends('public.layouts.layout-master');
@section('content')
    <div class="container">
        AuthFailed
        @php
        dump($errors);
        @endphp
    </div>
@endsection
