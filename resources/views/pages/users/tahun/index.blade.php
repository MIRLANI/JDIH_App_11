@extends('layouts.app')

@section('title', 'JDIH FMIPA | Tahun Peraturan')

@section('content')

    <section id="multiple-column-form" class="full-background"
        style="background-image: url('{{ asset('images/fmipa_uho.jpg') }}'); background-size: cover; background-color: rgba(0,0,0,0.7); background-blend-mode: darken; background-position: center;">
        <div class="row match-height">
            <div class="col-11 mx-auto">
                <div class="d-flex justify-content-between align-items-center my-5">
                    <h2 class="mb-0 mx-5" style="color: white;">Tahun Peraturan</h2>

                </div>
            </div>
        </div>
    </section>

    @php
        $groupedYears = $tahuns->unique('tahun')->groupBy(function ($item, $key) {
            return floor($item->tahun / 4) * 4;
        });
    @endphp

    @foreach ($groupedYears as $group => $years)
        <div class="card w-75 mx-auto my-5 text-center">
            <div class="card-body" style="border-radius: 20px; color: black;">
                <h1 class="card-title" style="color: black;"><b>{{ $group }} - {{ $group + 3 }}</b></h1>
                @foreach ($years as $year)
                    <div class="card mx-auto my-2">
                        <div class="card-body d-flex justify-content-between align-items-center" style="color: black;">
                            <span class="text-start" style="color: black;">{{ $year->tahun }}</span>
                            <a href="{{ route('search', ['tahun' => $year->tahun]) }}" class="btn btn-primary">
                                {{ $year->product_hukums->count() }}
                            </a>
                        </div>
                    </div>
                @endforeach
                <hr class="my-0 mx-4"> <!-- Horizontal line as a separator -->
            </div>
        </div>
    @endforeach
@endsection
