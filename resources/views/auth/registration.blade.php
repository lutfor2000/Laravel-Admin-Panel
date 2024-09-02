@extends('layouts.app')
@section('content')
    <div class="col-lg-6 m-auto my-5">
       <div class="card">
        <div class="card-header bg-info">Registration Form</div>
        <div class="card-body py-5 px-5">
            <form id="registraFrom" method="POST">
                @csrf
                <div class="col-sm-12  my-4">
                    <div class="input-group">
                    <div class="input-group-prepend d-flex">
                    <div class="input-group-text bg-info"><i class="fa-regular fa-user"></i></div>
                    </div>
                    <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}"  placeholder="Enter Name">
                    <p></p>
                    </div>
                </div>
                <div class="col-sm-12 my-4 ">
                    <div class="input-group">
                    <div class="input-group-prepend d-flex">
                    <div class="input-group-text bg-info"><i class="fa-regular fa-envelope"></i></div>
                    </div>
                    <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Enter Email">
                    <p></p>
                    </div>
                </div>
                <div class="col-sm-12 my-4 ">
                    <div class="input-group">
                    <div class="input-group-prepend d-flex">
                    <div class="input-group-text bg-info"><i class="fa-solid fa-key"></i></div>
                    </div>
                    <input type="password" class="form-control" id="password" name="password" value=""  placeholder="Enter Password">
                    <p></p>
                    </div>
                </div>
                <div class="col-sm-12 my-4 ">
                    <div class="input-group">
                    <div class="input-group-prepend d-flex">
                    <div class="input-group-text bg-info"><i class="fa-solid fa-key"></i></div>
                    </div>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" value=""  placeholder="Enter Confirm Password">
                    <p></p>
                    </div>
                </div>
                <div class="col-sm-12 my-4 ">
                    <select class="form-select" aria-label="Default select example" id="is_role" name="is_role">
                    <option selected>Select Role</option>
                    <option {{old('is_role') == '0' ? 'selected' : ''}} value="0">User</option>
                    <option {{old('is_role') == '1' ? 'selected' : ''}} value="1">Admin</option>
                    <option {{old('is_role') == '2' ? 'selected' : ''}}  value="2">Supper Admin</option>
                    </select>
                    <p></p>
                </div>
                <div><a href="{{route('forgotpassword')}}">Forgot Password</a></div>
                <div class="col-sm-12 my-4 d-flex justify-content-between align-items-center">
                    <div class="from_btn_l">
                       <button class="btn btn-info px-5" type="submit">Register</button>
                    </div>
                    <div class="from_btn_r">
                     <span>Creat Accout : <a href="{{route('loginpage')}}">Login</a> </span>
                    </div>
               </div>
               <div class="text-center"><a href="{{route('home')}}">Wollcome Page</a></div>
              </form>
        </div>
       </div>
    </div>
@endsection
@section('footer_ajax')
    @include('ajax/register_ajax');
@endsection