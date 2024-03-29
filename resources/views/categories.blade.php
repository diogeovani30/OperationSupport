@extends('layouts.main')

@section('container')
    {{-- get data 
 ambil data --}}




    <h1 class="mb-5 text-center">PIC Operation</h1>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-xl-3 col-md-6 mb-4">
                    <a href="/posts?category={{ $category->slug }}">
                        <div class="card border-left-primary shadow h-100 py-5 text-black">
                            <table class="card-body" alt="{{ $category->name }}"></table>
                            {{-- <img src="https://source.unsplash.com/500x500?{{ $category->name}}" class="card-body" alt="{{ $category->name}}"> --}}
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill p-4 fs-3">{{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>


    {{-- @foreach ($categories as $category)
  <ul>
    <li>
      <h2><a href="/categories/{{$category->slug}}">{{ $category->name }}</a></h2>
    </li>
  </ul>
      
  @endforeach --}}
@endsection
