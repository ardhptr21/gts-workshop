<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/tilt.min.js"></script>

<script>
    function sameImageWidth() {
        let w = $('.img-100').outerWidth();
        $('.img-100').height(w);
    }
    sameImageWidth();

    VanillaTilt.init(document.querySelectorAll(".tilt-js"), {
        max: 15,
        speed: 400,
        glare: true,
        "max-glare": 0.5
    });

    const isDark = localStorage.getItem('dark')
    const toggle = $('btn-dark-toggle');
    if (!isDark) {
        localStorage.setItem('dark', 'false')
    } else if (isDark === 'true') {
        $('html').addClass('dark')
    }


    $('.btn-dark-toggle').click(function() {
        $('html').toggleClass('dark')

        localStorage.setItem('dark', isDark === 'false' ? 'true' : 'false')
    });
</script>