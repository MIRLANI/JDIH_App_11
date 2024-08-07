@extends('layouts.app')

@section('title', 'JDIH FMIPA | Sumber Peraturan')

@section('content')


    @include('pages.users.sumber.pencarianSumber')

    @php
        $groupedSubjeks = $sumberDokumens->sortBy('username')->groupBy(function ($item) {
            return strtoupper(substr($item->username, 0, 1));
        });
    @endphp

    @foreach ($groupedSubjeks as $initial => $sumber)

        <div class="card w-75 mx-auto my-5">
            <div class="card-header bg-white text-dark rounded text-center">
                <h1 class="card-title"><strong>{{ $initial }}</strong></h1>
            </div>
            <div class="card-body m-3 bg-white rounded">
                @foreach ($sumber as $sumber)
                    <div class="d-flex justify-content-between align-items-center py-2">
                        <span class="text-start">{{ $sumber->username ?? ""}}</span>
                        <a href="{{ route('search', ['sumber' => $sumber->username]) }}" class="btn btn-primary">
                            {{ $sumber->peraturans->count() }}
                        </a>
                    </div>
                    <hr class="my-1"> <!-- Horizontal line as a separator -->
            @endforeach
        </div>
        </div>
    @endforeach

@endsection
