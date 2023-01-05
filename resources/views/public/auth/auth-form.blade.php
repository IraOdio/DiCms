@extends('public.layouts.layout-master');
@section('content')
    <div class="container">
        <div class="w-50 mx-auto">
            <form action="{{route('auth-process-action')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="InputUserName" class="form-label">Username or Email</label>
                    <input type="text" class="form-control" name="username" id="InputUserName" value="dima-test001@ya.ru">
                </div>
                <div class="mb-3">
                    <label for="InputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="InputPassword" value="password12345">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        @php
            dump($errors);
        @endphp
    </div>
@endsection
