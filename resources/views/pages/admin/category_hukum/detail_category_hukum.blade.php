@extends('layouts.admin')

@section('title', "Detail Category Hukum")
    
@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 mt-3 col-md-6 order-md-1 order-last">
                <h3>Detail Kategori Hukum</h3>
                <p class="text-subtitle text-muted">______________________________________</p>
            </div>
            <div class="col-12 mt-3 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Kategori Hukum</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header my-2">
                        <a href="/admin/category-hukum" class="btn btn-primary mx-2" title="Delete">
                            <i class="bi bi-arrow-left"></i>
                            Back
                        </a>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                           
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="font-weight-bold"> <b>Nama:</b></p>
                                    <p>{{ $categoryHukum->title }}</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="font-weight-bold"><b>Singkatan:</b></p>
                                    <p>{{ $categoryHukum->short_title }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

</div>
@endsection