(function ($){
    $(document).ready(function (){

            // $('.dropdown-menu2').hide();
            // $('#navbarDropdown').click(function () {
            //     $('ul.dropdown-menu2 ').toggle();

            // });
            // $('.dropdown-menu3').hide();
            // $('#navbardropdown').click(function () {
            //     $(' .dropdown-menu3').toggle();

            // });

//Home page js start

            $('.slider').slick({
                dots: true,
                infinite: true,
                speed: 500,
                fade: true,
                type: String,
                cssEase: 'linear',
                autoplay: true,
                autoplaySpeed: 2000,
                pauseOnHover:false
            });

            $('#slick-slide-control00').html('');
            $('#slick-slide-control01').html('');
            $('#slick-slide-control02').html('');
            $('#slick-slide-control03').html('');
            $('#slick-slide-control04').html('');
            $('.slick-next').html('<i class="fas fa-chevron-right"></i>');
            $('.slick-prev').html('<i class="fas fa-chevron-left"></i>');

//Home page js end

            // Portfollio js start

            $('.port-slider').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: false,
                autoplaySpeed: 2000,
                pauseOnHover: false
            });


            $('.slick-next').html('<i class="fas fa-chevron-right"></i>');
            $('.slick-prev').html('<i class="fas fa-chevron-left"></i>');


            // Portfollio js end


        });


})(jQuery);

