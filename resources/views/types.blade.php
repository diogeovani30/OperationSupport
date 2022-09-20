@extends('layouts.main')

@section('container')
    <h1 class="mb-5 text-center">Type Operation</h1>

    <div class="container">
      <div class="row">
        @foreach ($types as $type)
        <div class="col-xl-3 col-md-6 mb-4">
          <a href="/posts?type={{$type->slug}}">
          <div class="card border-left-primary shadow h-100 py-2 text-white">
            <img src="https://source.unsplash.com/500x500? {{$type->name}}" class="card-body" alt="{{ $type->name}}">
            <div class="card-img-overlay d-flex align-items-center p-0">
              <h5 class="card-body text-center flex-fill p-4 fs-3" >{{ $type->name }}</h5>
            </div>
          </div>
        </a>
        </div>
        @endforeach
      </div>
    </div>

    {{-- <!-- Card Example -->
    <div  href="#" class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div   class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        <a href="/posts?type={{$type->slug}}">
                      <div  class="card-body" alt="{{ $type->name}}" class="h5 mb-0 font-weight-bold text-gray-800" ></div>
                  </div>
                </a>
                  <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </div> --}}
    
    

  {{-- @foreach ($types as $type)
  <ul>
    <li>
      <h2><a href="/types/{{$type->slug}}">{{ $type->name }}</a></h2>
    </li>
  </ul>
      
  @endforeach --}}
  
@endsection