@extends('layouts.global')

@section('title')
    Create User
@endsection

@section('content')

    <div class="col-md-8">
        @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif
        <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('users.store')}}" method="post">
            @csrf
            <label for="name">Name</label>
            <input class="form-control" placeholder="Full Name" type="text" name="name" id="name">
            <br>

            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
            <br>

            <label for="">Roles</label>
            <br>
            <input type="checkbox" class="form-control" id="ADMIN" name="roles[]" value="ADMIN"><label for="ADMIN">Administrator</label>
            <input type="checkbox" class="form-control" id="STAFF" name="roles[]" value="STAFF"><label for="STAFF">Staff</label>
            <input type="checkbox" class="form-control" id="CUSTOMER" name="roles[]" value="CUSTOMER"><label for="CUSTOMER">Customer</label>
            <br>

            <br>
            <label for="phone">Phone Number</label>
            <br>
            <input type="text" class="form-control" id="phone" name="phone">

            <br>
            <label for="address">Address</label>
            <textarea class="form-control" id="address" name="address"></textarea>

            <br>
            <label for="avatar">Avatar Image</label>
            <br>
            <input type="file" class="form-control" id="avatar" name="avatar">

            <hr class="my-3">

            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email">
            <br>

            <label for="password">Password</label>
            <input type="text" class="form-control" id="password" name="password" placeholder="Password">
            <br>

            <label for="password_confirmation">Password Confirmation</label>
            <input type="text" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password Confirmation">
            <br>

            <input type="submit" class="btn btn-primary" value="Save">

        </form>
    </div>
    
@endsection