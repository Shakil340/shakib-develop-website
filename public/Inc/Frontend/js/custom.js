(function ($){
    $(document).ready(function (){

        //Responsive Navication Menu
            var responsive = $(window).width();

            if(responsive <=767 ){
                $('ul>li>ul').removeClass('dropdown-menu2');
                $('ul>li>ul>li>ul').removeClass('dropdown-menu3 dropdown-menu4');
            }else{
                $('.navbar-nav>li:nth-child(2)>.nav-link').attr('href','javascript:void(0)');
                $('.navbar-nav>li>ul>li:nth-child(1)>.dropdown-item').attr('href','javascript:void(0)');
                $('.navbar-nav>li>ul>li:nth-child(2)>.dropdown-item').attr('href','javascript:void(0)');
            }

            $(window).resize(function(){
                var responsive = $(window).width();
                if(responsive <=767 ){
                    $('ul>li>ul').removeClass('dropdown-menu2');
                    $('ul>li>ul>li>ul').removeClass('dropdown-menu3 dropdown-menu4');
                    $('.navbar-nav>li:nth-child(2)>.nav-link').attr('href','#multiCollapseExample1');
                    $('.navbar-nav>li>ul>li:nth-child(1)>.dropdown-item').attr('href','#multiCollapseExample2');
                    $('.navbar-nav>li>ul>li:nth-child(2)>.dropdown-item').attr('href','#multiCollapseExample3');
                }else{
                    $('.navbar-nav>li>ul').addClass('dropdown-menu2');
                    $('.navbar-nav>li:nth-child(2)>.nav-link').attr('href','javascript:void(0)');
                    $('ul>li>ul>li:first-child>ul').addClass('dropdown-menu3');
                    $('.navbar-nav>li>ul>li:nth-child(1)>.dropdown-item').attr('href','javascript:void(0)');
                    $('.navbar-nav>li>ul>li:nth-child(2)>.dropdown-item').attr('href','javascript:void(0)');
                    $('ul>li>ul>li:nth-child(2)>ul').addClass('dropdown-menu4');

                }
            });


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
                autoplay: true,
                autoplaySpeed: 2000,
                pauseOnHover: false,
                responsive: [
                    {
                      breakpoint: 992,
                      settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                      }
                    },
                    {
                      breakpoint: 768,
                      settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                      }
                    },
                    {
                      breakpoint: 576,
                      settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                      }
                    },
                    {
                        breakpoint: 386,
                        settings: {
                          slidesToShow: 1,
                          slidesToScroll: 1
                        }
                      }
                  ]
            });
  

            // Portfolio js end


            // recent js start

            $('.center').slick({
                centerMode: true,
                centerPadding: '60px',
                slidesToShow: 5,
                responsive: [
                  {
                    breakpoint: 992,
                    settings: {
                      arrows: true,
                      centerMode: true,
                      centerPadding: '55px',
                      slidesToShow: 3
                    }
                  },

                  {
                    breakpoint: 768,
                    settings: {
                      arrows: true,
                      centerMode: true,
                      centerPadding: '40px',
                      slidesToShow: 3
                    }
                  },
                       {
                    breakpoint: 576,
                    settings: {
                      arrows: true,
                      centerMode: true,
                      centerPadding: '40px',
                      slidesToShow: 1
                    }
                  },
                  {
                    breakpoint: 480,
                    settings: {
                      arrows: true,
                      centerMode: true,
                      centerPadding: '40px',
                      slidesToShow: 1
                    }
                  }
                ]
              });
              var slider = $(window).width();
              if(slider){
                $('.slick-next').html('');
                $('.slick-prev').html('');
            $('.slick-next').html('<i class="fas fa-chevron-right"></i>');
            $('.slick-prev').html('<i class="fas fa-chevron-left"></i>');
              }

         $(window).resize(function(){
            var slider = $(window).width();
            if(slider){
                $('.slick-next').html('');
                $('.slick-prev').html('');
                $('.slick-next').html('<i class="fas fa-chevron-right"></i>');
                $('.slick-prev').html('<i class="fas fa-chevron-left"></i>');
            }
            });

            // recent js end



            $('.forget-page').hide();
            $('.forgot').click(function () {

                $('.forget-page').show();

            });
            $('.tabs').click(function () {

                $('.forget-page').hide();

            });








        });




})(jQuery);




