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

        <section class="section">
            <div class="card">
                <div class="card-header">
                    <!-- Trigger modal for adding abstract -->
                    @if ($peraturans->where('abstrak', null)->count() > 0)
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
                            @foreach ($peraturans->whereNotNull('abstrak') as $peraturan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $peraturan->nama }}</td>
                                    <td>{{ $peraturan->abstrak->nama }}</td>
                                    <td>
                                        <div class="d-flex buttons">
                                            <a href="{{ route('destroy.abstrak', ['id' => $peraturan->abstrak->id]) }}"
                                                class="btn icon btn-danger" title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                            <a href="#" class="btn icon btn-primary" title="Update"
                                                data-bs-toggle="modal"
                                                data-bs-target="#updateAbstractModal-{{ $peraturan->abstrak->id }}">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @include('pages.admin.abstrak.update_abstrak')
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>


    @include('pages.admin.abstrak.create_abstrak')


@endsection
