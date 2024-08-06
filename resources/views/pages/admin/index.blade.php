@extends('layouts.admin')

@section('title', 'JDIH FMIPA | Dashboard')

@section('content')

    @if (Auth::user()->role == 'admin')
        @include('pages.admin.dashboard.admin_dashboard')
    @else
        @include('pages.admin.dashboard.user_dashboard')
    @endif



    <script>
        var optionsProfileVisit = {
            annotations: {
                position: 'back'
            },
            dataLabels: {
                enabled: false
            },
            chart: {
                type: 'bar',
                height: 300
            },
            fill: {
                opacity: 1
            },
            plotOptions: {},
            series: [{
                name: 'Jumlah Peraturan',
                data: {!! json_encode(array_values($jmlPeraturanPerLimaTahun)) !!}
            }],
            colors: '#435ebe',
            xaxis: {
                categories: {!! json_encode(array_keys($jmlPeraturanPerLimaTahun)) !!},
            },
        }
    </script>

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
@endsection
