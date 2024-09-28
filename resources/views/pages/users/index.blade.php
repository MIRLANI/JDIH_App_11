@extends('layouts.app')


@section('title', 'Database Peraturan | JDHI FMIPA')
@section('content')



    @if (URL::current() == route('home'))
        @include('pages.users.home.header')
        @include('pages.users.home.peraturanTerpopuler')
        @include('pages.users.home.peraturanTerbaru')


        @include('pages.users.home.standarLayanan')
        <div class="card w-75 contoh start-50 translate-middle-x mb-5"
            style="margin-top: 70px; z-index: 10; background-color: #E8F0FE;">
            <div class="card-body" style="border-radius: 2000px;">
                <h4 class="card-title" style="color: #333;">PERATURAN TERBARU</h4>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Status Peraturan</h4>
                            </div>
                            <div class="card-body">
                                <div id="status"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            let optionsVisitorsProfile = {
                series: [{{ $jmlPeraturanAktif }}, {{ $jmlPeraturanTidakAktif }}],
                labels: ['Berlaku', 'Tidak Berlaku'],
                colors: ['#435ebe', '#55c6e8'],
                chart: {
                    type: 'donut',
                    width: '100%',
                    height: '350px'
                },
                legend: {
                    position: 'bottom'
                },
                plotOptions: {
                    pie: {
                        donut: {
                            size: '30%'
                        }
                    }
                }
            }
        </script>
    @endif

    @if (URL::current() == route('search') || URL::current() == route('Search'))
        @include('pages.users.hasilPencarianPeraturan')
    @endif



@endsection
