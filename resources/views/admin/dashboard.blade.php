@extends('layouts.admin')
   @section('title', 'Dashboard')
@section('content')
   @if (session('message'))
      <div class="alert alert-success">{{ session('message') }}</div>
   @endif
<div class="admin">
   <div class="container-fluid admin">
      <div class="teamlogo position-absolute top-50 start-50 translate-middle"></div>

        <div class="row">
        </div>
        {{-- <div class="main-logo justify-center">
                <img class="object-contain h-screen w-screen" src="{{asset('images/Logo1.png')}}" alt="">
            </div> --}}
   </div>
</div>

@endsection