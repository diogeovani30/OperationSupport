@extends('dashboard.layouts.main')


@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ auth()->user()->name }}</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-10" role="alert">
            {{ session('success') }}
        </div>
    @endif


    <div class="table-responsive col-lg-15">
        <a href="/dashboard/posts/create " class="btn btn-primary mb-3 ">Buat Laporan</a>

        <table class="table table-striped table-mb ">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Laporan</th>
                    <th scope="col">Kerja</th>
                    <th scope="col">Proses</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>{{ $post->type->name }}</td>
                        <td>
                            <a href="/dashboard/posts/{{ $post->slug }}" class="badge btn-info "><span
                                    data-feather="eye"></span></a>
                            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>
                            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('Apakah kamu yakin di hapus?')"><span
                                        data-feather="x-circle"></span></button>
                            </form>

                            <a class="badge btn-primary" href="{{ route('generatelaporan', ['id' => $post->id]) }}"
                                target="_blank">
                                <i class="fa fa-download"></i> Download
                            </a>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
