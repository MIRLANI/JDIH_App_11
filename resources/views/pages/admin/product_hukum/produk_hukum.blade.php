@extends('layouts.admin')

@section('title', 'product hukum')

@section('content')



    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Produ Hukum</h3>
                    <p class="text-subtitle text-muted">______________________</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Produk Hukum</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <section class="section">
            <div class="card">
                <div class="card-header my-3">
                    <a href="/admin/product-hukum-add" class="btn  btn-primary mx-2" title="Delete">
                        <i class="bi bi-file-earmark-plus"></i>
                        Tambah
                    </a>

                    <a href="/admin/product-hukum-view-delete" class="btn  btn-secondary">
                        <i class="bi bi-eye"></i>
                        View Delete Data
                    </a>

                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Product Hukum</th>
                                {{-- <th>Deskripsi</th> --}}
                                <th>Judul</th>
                                <th>Category Hukum</th>
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
                                            <a href="/admin/product-hukum-delete/{{ $productHukum->slug ?? '#' }}"
                                                class="btn icon btn-danger" title="Delete" id="warning">
                                                <i class="bi bi-trash "></i>
                                            </a>
                                            <a href="{{ route("edit.product_hukum", ["id" => $productHukum->id ?? '#', "slug" => $productHukum->slug ?? '#']) }}"
                                                class="btn icon btn-primary" title="Update">
                                                <i class="bi bi-pencil "></i>
                                            </a>
                                            
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>4
            </div>

        </section>
    </div>





@endsection
