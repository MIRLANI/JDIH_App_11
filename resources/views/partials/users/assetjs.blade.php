
<script src="{{ asset('user/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('user/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('user/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('user/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('user/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('user/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('user/assets/js/main.js') }}"></script>
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