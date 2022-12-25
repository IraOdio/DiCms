@extends('public.layouts.layout-master');
@section('content')
<div class="container">
    <div class="w-50 mx-auto">
        <form action="{{route('registration-process')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="InputName" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="InputName">
            </div>
            <div class="mb-3">
                <label for="InputEmail" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="InputEmail" value="dima-test001@ya.ru">
            </div>
            <div class="mb-3">
                <label for="InputUsername" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="InputUsername" value="dima-test001">
            </div>
            <div class="mb-3">
                <label for="InputPassword" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="InputPassword" value="password12345">
            </div>
            <div class="mb-3">
                <label for="InputPasswordConfirmation" class="form-label">Password confirmation</label>
                <input type="password" class="form-control" name="password_confirmation" id="InputPasswordConfirmation" value="password12345">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @php
    dump($errors);
    @endphp
</div>

@endsection
