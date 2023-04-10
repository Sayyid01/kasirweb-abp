<script src="{{ asset('dist/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('dist/vendor/splide/js/splide.min.js') }}"></script>
<script src="{{ asset('dist/js/kasirweb.js') }}"></script>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        new Splide('#slider1', {
            perPage: 4,
            pagenation: false
        }).mount();

        new Splide('#slider2', {
            perPage: 4,
            pagenation: false
        }).mount();
    });
</script>
