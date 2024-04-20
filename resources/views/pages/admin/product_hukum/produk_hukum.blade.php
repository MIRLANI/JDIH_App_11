@extends('layouts.admin')

@section('title', 'produk hukum')

@section('content')


@if (session('message'))
<div class="alert alert-success">{{ session('message') }}</div>
@endif


    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>DataTable</h3>
                    <p class="text-subtitle text-muted">A sortable, searchable, paginated table without
                        dependencies thanks to simple-datatables</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <a href="/product-hukum-add">Tambah</a>

                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Product Hukum</th>
                                <th>Deskripsi</th>
                                <th>Judul</th>
                                <th>Category Hukum</th>
                                <th>Subjek</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($productHukums as $productHukum)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td> {{ $productHukum->nama }}</td>
                                    <td>{{ $productHukum->deskripsi }}</td>
                                    <td>{{ $productHukum->judul }}</td>
                                    <td>{{ $productHukum->categoryHukum->title }} </td>
                                    <td>{{ $productHukum->subjek }}</td>
                                    <td> <span class="badge bg-success">{{ $productHukum->status }}</span></td>
                                    <td>
                                        <a href="/product-hukum-delete/{{ $productHukum->slug }}">Hapus</a> ||
                                        <a href="/product-hukum-update/{{ $productHukum->slug }}">Update</a> ||
                                        <a href="/product-hukum-detail/{{ $productHukum->slug }}">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                               
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>




   
@endsection
