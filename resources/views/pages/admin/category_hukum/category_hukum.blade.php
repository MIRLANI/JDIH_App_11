@extends('layouts.admin')

@section('title', 'JDIH | Katagori Hukum')

@section('content')

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Subjek Hukum</h3>
                    <p class="text-subtitle text-muted">________________________</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Subjek Hukum</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <section class="section">
            <div class="card">
                <div class="card-header my-3">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary mx-2" data-bs-toggle="modal"
                        data-bs-target="#addSubjekModal">
                        <i class="bi bi-file-earmark-plus"></i>
                        Tambah
                    </button>

                    <!-- Modal -->
                    @include('pages.admin.category_hukum.create_katagori_hukum')
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Singkatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategory_hukums as $katagori)
                                @if ($katagori->title !== null && $katagori->short_title)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <form action="{{ route('update.kategory-hukum', ['id' => $katagori->id]) }}"
                                                method="POST">
                                                @csrf
                                                <div class="input-group">
                                                    <input type="text" name="title" value="{{ $katagori->title }}"
                                                        class="form-control @error('title') is-invalid @enderror">
                                                    @error('title')
                                                        <div class="invalid-feedback">
                                                            <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                        </div>
                                                    @enderror

                                                   
                                                </div>
                                            </form>
                                        </td>
                                        <td>
                                            <input type="text" name="short_title" value="{{ $katagori->short_title }}"
                                                class="form-control @error('short_title') is-invalid @enderror">
                                            @error('short_title')
                                                <div class="invalid-feedback">
                                                    <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                </div>
                                            @enderror
                                            <button hidden type="submit" class="btn btn-primary" title="Update">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                        </td>
                                        <td>
                                            <a href="{{ route('destroy.kategory_hukum', ['id' => $katagori->id]) }}"
                                                class="btn icon btn-danger" title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>


@endsection
