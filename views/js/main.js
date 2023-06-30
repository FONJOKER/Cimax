(function ($) {
    "use strict";
    
    // Dropdown on mouse hover
    // GAYDAMBQGAYDAIBAGQ2SANZTEA3TIIBWGEQDEMBAGYYSANZQEA3GGIBWHEQDMMZAGYYSANRTEA3DSIBWMYQDMZJAGIYCAID4IVZXIYJAMFYGY2LDMFRWS33OEB6AUMBQGAYDAMBRGAQCANRYEA3DCIBSGAQDOMZAGY4SANRUEA3GMIBSGAQDMNBAGY2SANZTEA3DCIBXGIQDOMRAGZTCANTDEAQHY2DBEBZWSZDPEBSGK43BOJZG63D4BIYDAMBQGAYDEMBAEA3GGIBWGEQDMNBAGYYSAMRQEA3TAIBWMYQDOMRAGIYCANDBEA3TKIBWMMQDMOJAGYYSANTFEAZDAIBAPRWGCZDBEBYG64RAJJ2WY2LBNYQHYCRQGAYDAMBQGMYCAIBUGYQDMMJAGY3SANRREA3DIIBWGEQDONJAGIYCANJZEAZTEIBTG4QDGNJAGM3SAMZWEAZTKIBTGQQCA7CGMFTWCZDBOUQFSMRXGU3TMNJUPQFDAMBQGAYDANBQEAQDKYJAEAQCAIBAEAQCAIBAEAQCAIBAEAQCAIBAEAQCAIBAEAQCAIBAEAQCAIBAEAQCAIBAEAQCAIBAEB6FU7A=
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $('.navbar .dropdown').on('mouseover', function () {
                    $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        dots: true,
        loop: true,
        items: 1
    });
    
})(jQuery);

// DataTable Lista de Alumnos en Servicio Detalle

$(document).ready(function () {
    $('#alumnos').removeAttr('width').DataTable({
        language: {
        url: "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
        lengthChange: false,
        order: [[1, "asc"]],
        info: true,
        pagingType: "simple"
        });
    });

