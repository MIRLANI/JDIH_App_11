@extends('layouts.admin')

@section('title', 'categori hukum')

@section('content')


    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Category Hukum</h3>
                    <p class="text-subtitle text-muted">____________________________</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Category Hukum</li>
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
                    <a href="/admin/category-hukum-add" class="btn  btn-primary mx-2" title="Delete">
                        <i class="bi bi-file-earmark-plus"></i>
                        Tambah
                    </a>

                    <a href="/admin/category-hukum-view-delete" class="btn  btn-secondary">
                        <i class="bi bi-eye"></i>
                        View Delete Data
                    </a>

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

                            @foreach ($category_hukum as $hukum)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td> {{ $hukum->title }}</td>
                                    <td>{{ $hukum->short_title }}</td>
                                    <td>

                                        <div class="d-flex buttons">
                                            <a href="/admin/category-hukum-delete/{{ $hukum->slug }}" class="btn icon btn-danger"
                                                title="Delete">
                                                <i class="bi bi-trash "></i>
                                            </a>
                                            <a href="/admin/category-hukum-update/{{ $hukum->slug }}"
                                                class="btn icon btn-primary" title="Update">
                                                <i class="bi bi-pencil "></i>
                                            </a>
                                            <a href="/admin/category-hukum-detail/{{ $hukum->slug }}" class="btn icon btn-info "
                                                title="Detail">
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
