@extends('layouts.admin')

@section('title', 'JDIH | Tinjau dan Eliminasi Produk Peraturan')

@section('content')



    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Manajemen Penghapusan Peraturan</h3>
                    <p class="text-subtitle text-muted">Kelola peraturan yang telah dihapus.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tinjau dan Eliminasi Peraturan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header my-3">
                    <a href="{{ route('index.product_hukum') }}" class="btn  btn-primary mx-2" title="Delete">
                        <i class="bi bi-arrow-left"></i>
                        Back
                    </a>

                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Peraturan</th>
                                {{-- <th>Deskripsi</th> --}}
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Subjek</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($productHukums as $productHukum)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td> {{ $productHukum->nama ?? '' }}</td>
                                    {{-- <td>{{ $productHukum->deskripsi }}</td> --}}
                                    <td>{{ $productHukum->judul ?? '' }}</td>
                                    <td>{{ $productHukum->categoryHukum->short_title ?? '' }} </td>
                                    <td>
                                        {{ $productHukum->subjekHukums->isNotEmpty() ? implode(', ', $productHukum->subjekHukums->pluck('nama')->toArray()) : 'N/A' }}
                                    </td>
                                    <td>
                                        <span @class([
                                            'badge bg-danger' => $productHukum->status == 'tidak berlaku',
                                            'badge bg-success' => $productHukum->status == 'berlaku',
                                        ])>{{ $productHukum->status ?? 'Status Unknown' }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="d-flex buttons">

                                            <a href="{{ route('restore.product_hukum', ['id' => $productHukum->id]) }}"
                                                class="btn icon btn-warning" title="return">
                                                <i class="bi bi-arrow-repeat"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>





@endsection
