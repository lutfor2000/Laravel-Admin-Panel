@extends('layouts.app')

@section('main_header')
    @include('layouts.header')
@endsection

@section('content')
    <div class="col-lg-6 m-auto my-5">
       <div class="card">
        <div class="card-header bg-info d-flex justify-content-between align-items-center">
          <div class="heder_left">Super Admin Deshboard</div><div class="header_right">Total User : {{Auth::user()->count()}}</div>
        </div>
        <div class="card-body py-5 px-5">
          <h6>Name : {{Auth::user()->name}}</h6>
          <span>Email : {{Auth::user()->email}}</span>
        </div>
       </div>
    </div>
@endsection