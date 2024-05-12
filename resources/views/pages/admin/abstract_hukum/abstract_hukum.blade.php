@extends('layouts.admin')

@section('title', 'Abstrak abstrak')

@section('content')

    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif


    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Abstrak Hukum</h3>
                    <p class="text-subtitle text-muted">A sortable, searchable, paginated table without
                        dependencies thanks to simple-datatables</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Abstrak Hukum</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <a href="/admin/abstract-hukum-add">Tambah</a>
                </div>

                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Hukum</th>
                                <th>Nama</th>
                                {{-- <th>Materi Pokok</th>
                                <th>Abstrak</th>
                                <th>Catatan</th> --}}
                    
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($AbstractHukums as $abstrak)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $abstrak->productHukum->nama }}</td>
                                    <td> {{ $abstrak->title }}</td>
                                    {{-- <td>{{ $abstrak->materi_pokok }}</td>
                                    <td>{{ $abstrak->abstrak }}</td>
                                    <td>{{ $abstrak->catatan }}</td> --}}
                                    <td>

                                        <div class="d-flex buttons">
                                            <a href="/admin/abstract-hukum-delete/{{ $abstrak->slug }}" class="btn icon btn-danger"
                                                title="Delete">
                                                <i class="bi bi-trash "></i>
                                            </a>
                                            <a href="/admin/abstract-hukum-update/{{ $abstrak->slug }}" class="btn icon btn-primary"
                                                title="Update">
                                                <i class="bi bi-pencil "></i>
                                            </a>
                                            <a href="/admin/abstract-hukum-detail/{{ $abstrak->slug }}" class="btn icon btn-info"
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
