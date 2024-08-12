@extends('layouts.admin')

@section('title', 'JDIH FMIPA | Peraturan')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Peraturan</h3>
                    <p class="text-subtitle text-muted">Daftar lengkap produk peraturan yang tersedia.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Peraturan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header my-3">
                    <a href="{{ route('create.peraturan') }}" class="btn  btn-primary mx-2" title="Delete">
                        <i class="bi bi-file-earmark-plus"></i>
                        Tambah
                    </a>

                    <a href="{{ route('viewDelete.peraturan') }}" class="btn  btn-secondary">
                        <i class="bi bi-eye"></i>
                        View Delete Data
                    </a>

                </div>

                @if (Auth::user()->role == 'admin')
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Peraturan</th>
                                    {{-- <th>Deskripsi</th> --}}
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Tag</th>
                                    <th>Sumber</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($peraturans as $peraturans)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td> {{ $peraturans->nama ?? '' }}</td>
                                        {{-- <td>{{ $peraturans->deskripsi }}</td> --}}
                                        <td>{{ $peraturans->judul ?? '' }}</td>
                                        <td>{{ $peraturans->ketegori->title ?? '' }} </td>
                                        <td>
                                            {{ $peraturans->tagPeraturans->isNotEmpty() ? implode(', ', $peraturans->tagPeraturans->pluck('nama')->toArray()) : 'N/A' }}
                                        </td>
                                        <td>{{ $peraturans->user->username ?? '' }}</td>
                                        <td>
                                            <span @class([
                                                'badge bg-danger' => $peraturans->status == 'tidak berlaku',
                                                'badge bg-success' => $peraturans->status == 'berlaku',
                                            ])>{{ $peraturans->status ?? 'Status Unknown' }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class="d-flex buttons">
                                                <a href="{{ route('destroy.peraturan', ['id' => $peraturans->id]) }}"
                                                    class="btn icon btn-danger" title="Delete" id="warning">
                                                    <i class="bi bi-trash "></i>
                                                </a>
                                                <a href="{{ route('edit.peraturan', ['id' => $peraturans->id, 'slug' => $peraturans->slug]) }}"
                                                    class="btn icon btn-primary" title="Update">
                                                    <i class="bi bi-pencil "></i>
                                                </a>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Peraturan</th>
                                    {{-- <th>Deskripsi</th> --}}
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Tag</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($peraturans->where('user_id', Auth::user()->id) as $peraturans)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td> {{ $peraturans->nama ?? '' }}</td>
                                        {{-- <td>{{ $peraturans->deskripsi }}</td> --}}
                                        <td>{{ $peraturans->judul ?? '' }}</td>
                                        <td>{{ $peraturans->ketegori->title ?? '' }} </td>
                                        <td>
                                            {{ $peraturans->tagPeraturans->isNotEmpty() ? implode(', ', $peraturans->tagPeraturans->pluck('nama')->toArray()) : 'N/A' }}
                                        </td>
                                        {{-- @dd($peraturans->sumber->nama) --}}
                                        {{-- <td>{{ $peraturans->user->username ?? '' }}</td> --}}

                                        <td>
                                            <span
                                                @class([
                                                    'badge bg-danger' => $peraturans->status == 'tidak berlaku',
                                                    'badge bg-success' => $peraturans->status == 'berlaku',
                                                ])>{{ $peraturans->status ?? 'Status Unknown' }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class="d-flex buttons">
                                                <a href="{{ route('destroy.peraturan', ['id' => $peraturans->id]) }}"
                                                    class="btn icon btn-danger" title="Delete" id="warning"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus item ini?')">
                                                    <i class="bi bi-trash"></i>
                                                </a>
                                                <a href="{{ route('edit.peraturan', ['id' => $peraturans->id, 'slug' => $peraturans->slug]) }}"
                                                    class="btn icon btn-primary" title="Update">
                                                    <i class="bi bi-pencil "></i>
                                                </a>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>

        </section>
    </div>
@endsection
