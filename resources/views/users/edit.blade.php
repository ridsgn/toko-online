@extends('layouts.global')

@section('title')
    Edit User
@endsection

@section('content')
    
    <div class="col-md-8">
        @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif

        <form action="{{route('users.update', [$user->id])}}" class="bg-white shadow-sm p-3" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PUT">

            <label for="name">Name</label>
            <input value="{{$user->name}}" class="form-control" placeholder="Full Name" type="text" name="name" id="name">
            <br>

            <label for="username">Username</label>
            <input value="{{$user->username}}" disabled type="text" class="form-control" id="username" name="username" placeholder="Username">
            <br>

            <label for="">Status</label>
            <br>
            <input {{$user->status == "ACTIVE" ? "checked" : ""}} value="ACTIVE" type="radio" class="form-control" id="active" name="status"><label for="active">Active</label>
            <input {{$user->status == "INACTIVE" ? "checked" : ""}} value="INACTIVE" type="radio" class="form-control" id="inactive" name="status"><label for="inactive">Inactive</label>
            <br>
            <br>
            <label for="">Roles</label>
            <br>
            <input type="checkbox" {{in_array("ADMIN", json_decode($user->roles)) ? "checked" : ""}} class="form-control" id="ADMIN" name="roles[]" value="ADMIN"><label for="ADMIN">Administrator</label>
            <input type="checkbox" {{in_array("STAFF", json_decode($user->roles)) ? "checked" : ""}} class="form-control" id="STAFF" name="roles[]" value="STAFF"><label for="STAFF">Staff</label>
            <input type="checkbox" {{in_array("CUSTOMER", json_decode($user->roles)) ? "checked" : ""}} class="form-control" id="CUSTOMER" name="roles[]" value="CUSTOMER"><label for="CUSTOMER">Customer</label>
            <br>

            <br>
            <label for="phone">Phone Number</label>
            <br>
            <input type="text" class="form-control" name="phone" value="{{$user->phone}}">

            <br>
            <label for="address">Address</label>
            <textarea class="form-control" id="address" name="address">{{$user->address}}</textarea>
            <br>

            <label for="avatar">Avatar Image</label>
            <br>
            Current avatar: <br>
            @if ($user->avatar)
                <img src="{{asset('storage/'.$user->avatar)}}" width="120px">
                <br>
            @else
                No Avatar
            @endif
            <br>
            <input type="file" class="form-control" id="avatar" name="avatar">
            <small class="text-muted">Kosongkan jika tidak ingin mengubah avatar</small>

            <hr class="my-3">

            <label for="email">Email</label>
            <input value="{{$user->email}}" disabled type="text" class="form-control" id="email" name="email">
            <br>

            <input type="submit" class="btn btn-primary" value="Save">
        </form>
    </div>

@endsection