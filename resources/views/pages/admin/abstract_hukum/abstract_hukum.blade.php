@extends('layouts.admin')

@section('title', 'JDIH | Abstrak Peraturan')

@section('content')



    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Abstrak Peraturan</h3>
                    <p class="text-subtitle text-muted">Menyediakan ringkasan peraturan hukum yang relevan</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Abstrak Peraturan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <!-- Trigger modal for adding abstract -->
                    @if ($produkHukum->isNotEmpty())
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#addAbstractModal">
                            <i class="bi bi-plus-circle"></i> Tambah
                        </button>
                    @endif
                </div>

                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Peraturan</th>
                                <th>Abstrak</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (Auth::user()->role == 'admin')
                                @foreach ($AbstractHukums as $abstrak)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ optional($abstrak->peraturans)->nama }}</td>
                                        <td> {{ $abstrak->title }}</td>
                                        <td>
                                            <div class="d-flex buttons">
                                                <a href="{{ route('destroy.abstrak', ['id' => $abstrak->id]) }}"
                                                    class="btn icon btn-danger" title="Delete" id="warning"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus item ini?')">
                                                    <i class="bi bi-trash "></i>
                                                </a>
                                                <a href="#" class="btn icon btn-primary" title="Update"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#updateAbstractModal-{{ $abstrak->id }}">
                                                    <i class="bi bi-pencil "></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                @foreach ($AbstractHukums->where('user_id', Auth::id()) as $abstrak)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ optional($abstrak->peraturans)->nama }}</td>
                                        <td> {{ $abstrak->title }}</td>
                                        <td>
                                            <div class="d-flex buttons">
                                                <a href="{{ route('destroy.abstrak', ['id' => $abstrak->id]) }}"
                                                    class="btn icon btn-danger" title="Delete" id="warning" onclick="return confirm('Apakah Anda yakin ingin menghapus item ini?')">
                                                    <i class="bi bi-trash "></i>
                                                </a>
                                                <a href="#" class="btn icon btn-primary" title="Update"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#updateAbstractModal-{{ $abstrak->id }}">
                                                    <i class="bi bi-pencil "></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>


    @include('pages.admin.abstract_hukum.create_abstract')
    @include('pages.admin.abstract_hukum.update_abstract_hukum')


@endsection
