@extends('layouts.admin')

@section('title', 'product hukum')

@section('content')



    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>View Delete Produk Hukum</h3>
                    <p class="text-subtitle text-muted">____________________________________________</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">View Detele Produk Hukum</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header my-3">
                    <a href="/product-hukum" class="btn  btn-primary mx-2" title="Delete">
                        <i class="bi bi-arrow-left"></i>
                        Back
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
                                {{-- <th>Category Hukum</th> --}}
                                {{-- <th>Subjek</th> --}}
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($productHukums as $productHukum)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td> {{ $productHukum->nama }}</td>
                                    {{-- <td>{{ $productHukum->deskripsi }}</td> --}}
                                    <td>{{ $productHukum->judul }}</td>
                                    {{-- <td>{{ $productHukum->categoryHukum->short_title }} </td> --}}
                                    {{-- <td>{{ $productHukum->subjek }}</td> --}}
                                    <td>
                                        <span @class([
                                            'badge bg-danger' => $productHukum->status == 'tidak berlaku',
                                            'badge bg-success' => $productHukum->status == 'berlaku',
                                        ])>{{ $productHukum->status }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="d-flex buttons">
                                            
                                            <a href="/product-hukum-restore/{{ $productHukum->slug }}"
                                                class="btn icon btn-warning" title="return">
                                                <i class="bi bi-arrow-repeat"></i>
                                            </a>
                                            <a href="/product-hukum-detail/{{ $productHukum->slug }}"
                                                class="btn icon btn-info" title="Detail">
                                                <i class="bi bi-info-circle "></i>
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