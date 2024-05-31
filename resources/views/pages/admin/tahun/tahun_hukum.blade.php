@extends('layouts.admin')

@section('title', 'JDIH | Tahun Peraturan')

@section('content')

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Tahun Hukum</h3>
                    <p class="text-subtitle text-muted">Daftar tahun yang relevan dengan peraturan hukum.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard" class="text-decoration-none">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tahun Hukum</li>
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
                    <button type="button" class="btn btn-primary mx-2" data-bs-toggle="modal" data-bs-target="#addTahunModal">
                        <i class="bi bi-file-earmark-plus"></i>
                        Tambah
                    </button>

                    <!-- Modal -->
                    @include('pages.admin.tahun.create_tahun_hukum')
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tahun</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($tahuns as $tahun)
                                @if ($tahun->tahun !== null)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <form action="{{ route('update.tahun_hukum', ['id' => $tahun->id]) }}"
                                                method="POST">
                                                @csrf
                                                <div class="input-group">
                                                    <input type="text" name="tahun" value="{{ $tahun->tahun }}"
                                                        class="form-control @error('tahun') is-invalid @enderror">
                                                    @error('tahun')
                                                        <div class="invalid-feedback">
                                                            <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                        </div>
                                                    @enderror
                                                    <button hidden type="submit" class="btn btn-primary" title="Update">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </td>
                                        <td>
                                            <a href="/admin/tahun-hukum-delete/{{ $tahun->id }}" class="btn icon btn-danger"
                                                title="Delete">
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
