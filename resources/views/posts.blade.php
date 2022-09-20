

@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>


    <div class="row justify-content-center mb-3">
      <div class="col-md-6">
        <form action="/posts">

          @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
            @endif

            @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
            @endif

          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
            <button class="btn btn-danger" type="submit">Search</button>
          </div>
        </form>
      </div>
    </div>


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

@if(session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
@endif
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Report</h6>

          <div>
            {{-- <div class="form-gorup">
              <label for="">Name</label>
              <option value="">Pilih</option>
              @foreach ($posts as $post)
              <select name="category_id" id="form-kontrol"><option value="{{ optional($post->author)->user_id }}" class="text-decoration-none">{{ optional($post->author)->name }}</option></select>
             
              @endforeach --}}

            </div>
          </div>
          {{-- @foreach ($posts as $post)
          <select>
            <option>{{ $post->category->name }}</td></option>
          </select>
          @endforeach --}}

          {{-- <div class="form-control">
            <label>Report By:</label>
            <select name="username" id="name">
                @foreach($posts as $post)
              
                <option type="hidden" name="author" value="{{ request('author') }}"><a href="/posts?author={{ request('author') }}" class="text-decoration-none">{{ $post->author->name }}</a>
                @endforeach
                
            </select> --}}

            {{-- <select class="form-control" name="resoureceName">
              @foreach ($posts as $post)
              <option value="{{$post->type->name }}" 
                
                  @if ($post->type->name  == $post->type->name )
                  {{'selected="selected"'}}
                  @endif 
                 >
               {{$post->type->name }} </option>               
             @endforeach    
        </div>

              <option>Select Item</option> --}}
            
              {{-- @foreach ($posts as $post)
                <option value="{{ $post->id }}" {{ ( $post->id == $existingRecordId) ? 'selected' : '' }}> {{ $post->name }} </option>
              @endforeach    </select> --}}

             



            {{-- <label for="cars">Choose a Report:</label>
            <select class="form-control m-bot15" name="post_id">
              @if($posts->count() > 0)
             @foreach($posts as $post)
              <option value="{{  $post->author->username  }}"><a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
             @endForeach
             @else
              No Record Found
               @endif   
           </select> --}}
   
        {{-- </div> --}}
  
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="10%" cellspacing="0">
                  <thead>
                      <tr>
                          <th scope="col">No</th>
                          <th scope="col">Laporan</th>
                          <th scope="col">PIC </th>
                          <th scope="col">Progres </th>
                          <th scope="col">Detail</th>
                          <th scope="col">By</th>
                        </tr>
                    </thead>
                </div>
              </div>
            </div>
          </div>
        </div>

<!-- /.container-fluid -->
      @foreach ($posts as $post)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->category->name  }}</td>
        <td>{{ $post->type->name }}</td>
        <td>
          <a href="/posts/{{ $post->slug }}" class="btn btn-info "><span data-feather="eye"></span></a> 
        </td>
        
        <td>
          <a href="/posts?author={{  optional($post->author)->username }}" class="text-decoration-none">{{ optional($post->author)->name }}</a> 
        </td>
      </tr>
      @endforeach
     
    </tbody>
  </table>
</div>


<div class="d-flex justify-content-end">
{{ $posts->links() }}
</div>


@endsection


