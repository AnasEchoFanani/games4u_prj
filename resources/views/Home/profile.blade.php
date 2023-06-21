@extends('Layouts.app_Principale')

@section('profile', 'active')

@section('content')
<div class="container mt-5 pt-5">
    <div class="card text-white">
        <div class="card-header">
            <div class="row">
                <div class="col-md-3">
                    <img src="Folder_img/{{$user->Photo}}" alt="Profile Picture" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="container">
                <form action="/profile/store" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" class="form-control" value="{{$user->first_name}}">
                        </div>
                        <div class="col-md-6">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" class="form-control" value="{{$user->last_name}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" value="{{$user->email}}">
                        </div>
                        <div class="col-md-6">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control" value="{{$user->phone}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="old_password">Old Password</label>
                            <input type="password" name="old_password" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="new_password">New Password</label>
                            <input type="password" name="new_password" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="profile_picture">Profile Picture</label>
                            <input class="form-control" type="file" id="profile" name="profile" accept="image/*">
                        </div>
                    </div><br>
                    <button type="submit" class="btn btn-buy">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection