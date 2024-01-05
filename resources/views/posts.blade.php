@extends('layouts.main')

@section('container')
    <h1 class="mb-2 text-center">{{ $title }}</h1>
    <div class="row justify-content-center mb-2">
        <div class="col-md-6">
            <form action="/posts">

                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif

                <div class="input-group mb-2">
                    <input type="text" class="form-control" placeholder="Search.." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        @if (session()->has('success'))
            <div class="alert alert-success col-lg-8" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- DataTales Example -->
            <div class="card shadow mb-3">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Laporan</h6>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="10%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Laporan</th>
                                        <th scope="col">PIC </th>
                                        <th scope="col">Proses</th>
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
                <td>{{ $post->category->name }}</td>
                <td>{{ $post->type->name }}</td>
                <td>
                    <a href="/posts/{{ $post->slug }}" class="btn btn-info "><span data-feather="eye"></span></a>
                </td>

                <td>
                    <a href="/posts?author={{ optional($post->author)->username }}"
                        class="text-decoration-none">{{ optional($post->author)->name }}</a>
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
