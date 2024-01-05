@extends('dashboard.layouts.main')


@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-100">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <a href="/dashboard/posts" class="btn btn-success"> <span data-feather="arrow-left"></span>Kembali</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>
                    Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger " onclick="return confirm('Are you Sure to delete it?')">
                        <span data-feather="x-circle"></span> Delete
                    </button>
                    <a class="badge btn-primary" href="{{ route('generatelaporan', ['id' => $post->id]) }}" target="_blank">
                        <i class="fa fa-download"></i> Download
                    </a>

                </form>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Laporan</h6>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="10%" cellspacing="0">
                        <thead>
                            <p> {!! $post->body !!}</p>
                        </thead>
                </div>
            </div>
        </div>

        </tbody>
        </table>
    </div>
@endsection
