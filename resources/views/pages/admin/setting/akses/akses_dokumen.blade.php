@extends('layouts.admin')

@section('title', 'JDIH | Dokument Access')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Akses Dokumen</h3>
                    {{-- <p class="text-subtitle text-muted">Menyediakan ringkasan Password hukum yang relevan</p> --}}
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dokument Access</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                {{-- <div class="card-header">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#akseDokumen">
                        <i class="bi bi-plus-circle"></i> Tambah
                    </button>
                </div> --}}

                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Peraturan</th>
                                <th>Akses Dokumen</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($peraturans as $peraturan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $peraturan->nama ?? '-' }}</td>
                                    <td>
                                        @if (isset($peraturan->password->password_name))
                                            <a href="{{ route('index.password') }}">
                                                {{ $peraturan->password->password_name }}
                                            </a>
                                        @else
                                            {{ 'public' }}
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex buttons">                                
                                            <a href="#" class="btn icon btn-primary" title="Update"
                                                data-bs-toggle="modal"
                                                data-bs-target="#updateAksesModal-{{ $peraturan->id }}">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @include('pages.admin.setting.akses.update_akses_dokuemen')
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>



    {{-- @include('pages.admin.setting.akses.create_akses_dokumen') --}}



@endsection
