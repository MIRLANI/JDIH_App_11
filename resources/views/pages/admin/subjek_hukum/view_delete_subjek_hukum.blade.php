@extends('layouts.admin')

@section('title', 'subjek subjek')

@section('content')



    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>View Delete Subjek Hukum</h3>
                    <p class="text-subtitle text-muted">____________________________________________</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">View Detele Subjek Hukum</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header my-3">
                    <a href="/admin/subjek-hukum" class="btn  btn-primary mx-2" title="Delete">
                        <i class="bi bi-arrow-left"></i>
                        Back
                    </a>

                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Hukum</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($subjekHukums as $subjek)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td> {{ $subjek->nama }}</td>
                                    <td>

                                        <div class="d-flex buttons">
                                            <a href="/admin/subjek-hukum-restore/{{ $subjek->slug }}"
                                                class="btn icon btn-warning" title="return">
                                                <i class="bi bi-arrow-repeat"></i>
                                            </a>
                                            <a href="/admin/subjek-hukum-detail/{{ $subjek->slug }}"
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
