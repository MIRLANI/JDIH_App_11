@extends('layouts.admin')

@section('title', 'JDIH | Kategori Hukum')

@section('content')

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Kategori Peraturan</h3>
                    <p class="text-subtitle text-muted">Daftar kategori yang terlibat dalam peraturan hukum.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard" class="text-decoration-none">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kategori Peraturan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        @endif
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
                                            <form action="{{ route('update.category-hukum', ['id' => $katagori->id]) }}"
                                                method="POST">
                                                @csrf
                                                <div class="input-group">
                                                    <input type="text" name="title" value="{{ $katagori->title }}"
                                                        class="form-control ">

                                                </div>
                                                <input hidden type="text" name="short_title"
                                                value="{{ $katagori->short_title }}"
                                                class="form-control ">

                                                <button hidden type="submit" class="btn btn-primary" title="Update">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                            </form>
                                        </td>
                                        
                                        <td>
                                            <form action="{{ route('update.category-hukum', ['id' => $katagori->id]) }}"
                                                method="POST">
                                                @csrf
                                                <div class="input-group">
                                                    <input hidden type="text" name="title" value="{{ $katagori->title }}"
                                                        class="form-control ">

                                                </div>
                                                <input type="text" name="short_title"
                                                    value="{{ $katagori->short_title }}"
                                                    class="form-control ">

                                                <button hidden type="submit" class="btn btn-primary" title="Update">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            <a href="{{ route('destroy.category_hukum', ['id' => $katagori->id]) }}"
                                               class="btn icon btn-danger" title="Delete" id="warning" onclick="return confirm('Apakah Anda yakin ingin menghapus item ini?')">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </td>
                                        {{-- memudahkan pencarian data  --}}
                                        <td style="display: none;">
                                            {{ $katagori->title }}
                                        </td>
                                        <td style="display: none;">
                                            {{ $katagori->short_title }}
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
