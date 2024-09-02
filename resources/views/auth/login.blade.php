@extends('layouts.app')
@section('content')
    <div class="col-lg-6 m-auto my-5">
       <div class="card">
        <div class="card-header bg-info">Login Form</div>

            @if (Session::has('registration_message'))
                <div class="alert alert-success"><p>{{Session::get('registration_message')}}</p></div>
            @endif
            @if (session('login_error'))
            <small class="alert text-danger text-center">{{session('login_error')}}</small>
            @endif
      
        <div class="card-body py-1 px-5">
            <form action="{{route('loginpost')}}" method="POST">
                @csrf
                <div class="col-sm-12 my-4 ">
                    <div class="input-group">
                    <div class="input-group-prepend d-flex">
                    <div class="input-group-text bg-info"><i class="fa-regular fa-envelope"></i></div>
                    </div>
                    <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Enter Email">
                    </div>
                </div>
                <div class="col-sm-12 my-4 ">
                    <div class="input-group">
                    <div class="input-group-prepend d-flex">
                    <div class="input-group-text bg-info"><i class="fa-solid fa-key"></i></div>
                    </div>
                    <input type="password" name="password" class="form-control" value="{{old('password')}}" placeholder="Enter Password">
                    </div>
                </div>
                
                <div><a href="{{route('forgotpassword')}}">Forgot Password</a></div>
                <div class="col-sm-12 my-4 d-flex justify-content-between align-items-center">
                     <div class="from_btn_l">
                        <button class="btn btn-info px-5">Login</button>
                     </div>
                     <div class="from_btn_r">
                      <span>Creat Accout : <a href="{{route('registration')}}">Registration</a> </span>
                     </div>
                </div>
                <div class="text-center pb-4"><a href="{{route('home')}}">Wollcome Page</a></div>
              </form>
        </div>
       </div>
    </div>
@endsection