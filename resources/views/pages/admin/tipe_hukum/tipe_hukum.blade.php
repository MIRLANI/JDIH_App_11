@extends('layouts.admin')

@section('title', 'JDIH | Tipe Peraturan')

@section('content')

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Tipe Peraturan</h3>
                    <p class="text-subtitle text-muted">Daftar semua tipe peraturan yang tersedia.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tipe Peraturan</li>
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
                        data-bs-target="#addTipeModal">
                        <i class="bi bi-file-earmark-plus"></i>
                        Tambah
                    </button>

                    <!-- Modal -->
                    @include('pages.admin.tipe_hukum.create_tipe_hukum')
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tipe Peraturan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tipeHukums as $tipe)
                                @if ($tipe->nama !== null)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <form action="{{ route('update.tipe_hukum', ['id' => $tipe->id]) }}"
                                                method="POST">
                                                @csrf
                                                <div class="input-group">
                                                    <input type="text" name="nama" value="{{ $tipe->nama }}"
                                                        class="form-control">

                                                    <button hidden type="submit" class="btn btn-primary" title="Update">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </td>
                                        <td>
                                            <a href="{{ route('delete.tipe_hukum', ['id' => $tipe->id]) }}"
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
