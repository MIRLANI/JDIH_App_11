@extends('layouts.app')

@section('title', 'JDIH FMIPA | Subjek Peraturan')

@section('content')


    @include('pages.users.subjek.pencarianSubjek')

    @php
        $groupedSubjeks = $subjekHukums->sortBy('nama')->groupBy(function($item) {
            return strtoupper(substr($item->nama, 0, 1));
        });
    @endphp

    @foreach ($groupedSubjeks as $initial => $subjeks)
        <div class="card w-75 mx-auto my-5">
            <div class="card-header bg-white text-dark rounded text-center">
                <h1 class="card-title"><strong>{{ $initial }}</strong></h1>
            </div>
            <div class="card-body m-3 bg-white rounded">
                @foreach ($subjeks as $subjek)
                    <div class="d-flex justify-content-between align-items-center py-2">
                        <span class="text-start">{{ $subjek->nama }}</span>
                        <a href="{{ route('search', ["tag" => $subjek->nama]) }}" class="btn btn-primary">
                            {{ $subjek->product_hukums()->count() }}
                        </a>
                    </div>
                    <hr class="my-1"> <!-- Horizontal line as a separator -->
                @endforeach
            </div>
        </div>
    @endforeach

@endsection
