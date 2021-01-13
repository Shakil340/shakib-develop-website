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

            // Portfolio js start

            $('.port-slider').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: false,
                autoplaySpeed: 2000,
                pauseOnHover: false
            });
            $('.slick-next').html('<i class="fas fa-chevron-right"></i>');
            $('.slick-prev').html('<i class="fas fa-chevron-left"></i>');

            // Portfolio js end

        });

})(jQuery);



//Free-trial js start
var input = document.querySelector("#phone");
window.intlTelInput(input, {
    // allowDropdown: false,
    // autoHideDialCode: false,
    // autoPlaceholder: "off",
    // dropdownContainer: document.body,
    // excludeCountries: ["us"],
    // formatOnDisplay: false,
    // geoIpLookup: function(callback) {
    //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
    //     var countryCode = (resp && resp.country) ? resp.country : "";
    //     callback(countryCode);
    //   });
    // },
    // hiddenInput: "full_number",
    // initialCountry: "auto",
    // localizedCountries: { 'de': 'Deutschland' },
    // nationalMode: false,
    // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
    // placeholderNumberType: "MOBILE",
    // preferredCountries: ['cn', 'jp'],
    // separateDialCode: true,
    utilsScript: "js/utils.js",
});

// Free-trial js end
