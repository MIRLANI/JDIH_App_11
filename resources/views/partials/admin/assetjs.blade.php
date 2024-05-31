<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>

<!-- Need: Apexcharts -->


<script src="{{ asset('assets/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
<script src="{{ asset('assets/js/pages/simple-datatables.js') }}"></script>


<script src="{{ asset('assets/extensions/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/extensions/parsleyjs/parsley.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/parsley.js') }}"></script>

<script src="{{ asset('assets/extensions/choices.js/public/assets/scripts/choices.js') }}"></script>
<script src="{{ asset('assets/js/pages/form-element-select.js') }}"></script>

<script src="{{ asset('assets/extensions/filepond/filepond.js') }}"></script>
<script src="{{ asset('assets/extensions/toastify-js/src/toastify.js') }}"></script>
<script src="{{ asset('assets/js/pages/filepond.js') }}"></script>

<script src="{{ asset('assets/js/pages/horizontal-layout.js') }}"></script>


<script src="{{ asset('assets/extensions/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/sweetalert2.js') }}"></script>
<script src="{{ asset('assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
{{-- <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script> --}}



{{-- code untuk zoom background --}}
<script>
    let isZoomed = false;

    function toggleZoomBackground() {
        const section = document.getElementById('multiple-column-form');
        section.style.transition = 'background-size 0.6s ease-in-out'; // Improved smooth transition for zoom effect
        if (!isZoomed) {
            section.style.backgroundSize = '120%'; // Zoom in the background
            isZoomed = true;
        } else {
            section.style.backgroundSize = '100%'; // Reset to original size
            isZoomed = false;
        }
    }
</script>

{{-- code untuk create abstrak --}}
<script>
    document.getElementById('abstrak').addEventListener('input', function() {
        var text = this.value;
        var points = text.split('\n');
        if (points.length > 3) {
            alert('Hanya boleh memasukkan maksimal 3 poin.');
            this.value = points.slice(0, 3).join('\n');
            return;
        }
        var html = points.map(function(point) {
            return point.trim() !== '' ? '<li>' + point.trim() + '</li>' : '';
        }).join('');
        document.getElementById('abstrakList').innerHTML = html; // Display as list inside the ul element
    });
</script>


{{-- code untuk create catatan --}}
<script>
    document.getElementById('catatan').addEventListener('input', function() {
        var text = this.value;
        var points = text.split('\n');
        if (points.length > 3) {
            alert('Hanya boleh memasukkan maksimal 3 poin.');
            this.value = points.slice(0, 3).join('\n');
            return;
        }
        var html = points.map(function(point) {
            return point.trim() !== '' ? '<li>' + point.trim() + '</li>' : '';
        }).join('');
        document.getElementById('catatanList').innerHTML = html; // Display as list inside the ul element
    });
</script>


{{-- code untuk animasi loading --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const loader = document.getElementById('loading');
        setTimeout(() => {
            loader.style.display = 'none';
        }, 1000); // Delay the hiding of the loader for 4 seconds
    });
</script>


<script>
    window.onload = function() {
        document.getElementById('app').style.visibility = 'visible';
    };
</script>

{{-- scirp untuk status peraturan dan jumlah peratruan lima tahun terakhir --}}
<script>
    var chartVisitorsProfile = new ApexCharts(document.querySelector("#status"), optionsVisitorsProfile);
    var chartProfileVisit = new ApexCharts(document.querySelector("#chart-profile-peraturan"), optionsProfileVisit);
    chartVisitorsProfile.render();
    chartProfileVisit.render();
</script>
