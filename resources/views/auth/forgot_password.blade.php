@extends('layouts.app')
@section('content')
    <div class="col-lg-6 m-auto my-5">
       <div class="card">
        <div class="card-header bg-info">Forgot Password</div>
                    @if (session('email_message'))
                    <small class="alert text-danger text-center">{{session('email_message')}}</small>
                    @endif
                    @if (session('email_message_success'))
                    <small class="alert text-success text-center">{{session('email_message_success')}}</small>
                    @endif
        <div class="card-body py-1 px-5">
            <form action="{{route('forgotpasswordPost')}}" method="POST">
                @csrf
                <div class="col-sm-12 my-4">
                    <div class="input-group">
                    <div class="input-group-prepend d-flex">
                    <div class="input-group-text bg-info"><i class="fa-regular fa-envelope"></i></div>
                    </div>
                    <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Enter Email">
                    </div>
                </div>
                <div class="col-sm-12 my-4 d-flex justify-content-between align-items-center">
                     <div class="from_btn_l">
                     <button type="submit" class="btn btn-info px-5">Send rest password link</button>
                     </div>
                </div>

              </form>
        </div>
       </div>
    </div>
@endsection