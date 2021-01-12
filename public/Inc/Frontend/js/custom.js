$(document).ready(function () {
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
var skk = document.getElementById('slick-slide-control00');
var sks = document.getElementById('slick-slide-control01');
var skl = document.getElementById('slick-slide-control02');
var skls = document.getElementById('slick-slide-control03');
var skld = document.getElementById('slick-slide-control04');
skk.innerHTML = '';
sks.innerHTML = '';
skl.innerHTML = '';
skls.innerHTML = '';
skld.innerHTML = '';
var arrrowNext = document.querySelector('.slick-next');
var arrrowPrev = document.querySelector('.slick-prev');
arrrowNext.innerHTML = '<i class="fas fa-chevron-right"></i>';
arrrowPrev.innerHTML = '<i class="fas fa-chevron-left"></i>';

//Home page js end

    // Portfollio js start
    $('.slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        pauseOnHover: false
    });


    var arrrowNext = document.querySelectorAll('.slick-next');
    var arrrowPrev = document.querySelectorAll('.slick-prev');
    for (i = 0; i < arrrowNext.length; i++) {
        arrrowNext[i].innerHTML = '<i class="fas fa-chevron-right"></i>';
    }

    for (i = 0; i < arrrowPrev.length; i++) {
        arrrowPrev[i].innerHTML = '<i class="fas fa-chevron-left"></i>';
    }

    // Portfollio js end


});


