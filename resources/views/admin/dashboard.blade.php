@extends('layouts.admin')
   @section('title', 'Dashboard')
@section('content')
   @if (session('message'))
      <div class="alert alert-success">{{ session('message') }}</div>
   @endif

   <div class="container-fluid text-center" px-4>
        <h1 class="mt-4">Product Management/Inventory</h1>
        <img class="img-fluid" src="{{asset('images/Logo1.png')}}" alt="" style="height: 500px;">

        <div class="row">
        </div>
        {{-- <div class="main-logo justify-center">
                <img class="object-contain h-screen w-screen" src="{{asset('images/Logo1.png')}}" alt="">
            </div> --}}
   </div>

@endsection