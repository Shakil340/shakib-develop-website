
<footer class="bg-footer">
    <div class="container">
        <div class="footer-widget">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget ">
                        <h4>OUR MAIN SERVICES</h4>
                        <ul>
                            <li><a href="{{route('service.logo-design')}}">Logo Design</a></li>
                            <li><a href="{{route('service.business-card-design')}}">Bussiness Card Design</a></li>
                            <li><a href="{{route('service.ads-design')}}">Baner Design</a></li>
                            <li><a href="{{route('service.clipping-path')}}">Image Clipping Path</a></li>
                            <li><a href="{{route('service.image-retouching')}}">Image Retouching</a></li>
                            <li><a href="{{route('service.image-manipulation')}}">Image Manipulation</a></li>
                            <li><a href="{{route('service.photo-resizing')}}">Image Resizing</a></li>
                            <li><a href="other.html">Other</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h4>IMPORTANT LINKS</h4>
                        <ul>
                            <li><a href="{{route('why-us')}}"> Why Choose Us</a></li>
                            <li><a href="{{route('home')}}"> Terms of Use</a></li>
                            <li><a href="{{route('free-trial')}}"> Free Trial</a></li>
                            <li><a href="{{route('free-trial')}}">Upload File</a></li>
                            <li><a href="{{route('contact-us')}}">Contact Us</a></li>
                            <li><a href="{{route('order-now')}}">Order Now</a></li>
                            <li><a href="{{route('portfolio')}}"> Recent Work</a></li>
                            <li><a href="{{route('about-us')}}">About</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h4> MARKETING & SUPPORT</h4>
                        <ul class="social-link">
                            <li class="gm"><a href="bdgraphicdesignpoint@gmail.com">bdgraphicdesignpoint@gmail.com
                                </a></li>
                            <li class="tw"><a href="https://twitter.com/home">Twitter</a></li>
                            <li class="li"><a href="https://www.linkedin.com/feed/?trk=nav_logo">Linkedin</a></li>
                            <li class="fac"><a
                                    href="https://www.facebook.com/profile.php?id=100037949362795">Facebook</a></li>
                            <li class="nu"><a href="#">+8801903-780549</a></li>
                            <li class="yo"><a
                                    href="https://www.youtube.com/channel/UCejlpTuyrxWke7Mx1tgBRdA">Youtube</a></li>
                            <li class="sk"><a href="#">Skype</a></li>
                            <li class="in"><a href="#">Instagram</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h4> ABOUT US</h4>
                        <p>Graphicsdesignpoint is a One Stop Solution of your all Graphic Design need. There are a
                            lot
                            of design firms or providers on the globe but not each every one send back excellent
                            work.
                            So there is no doubt you will get a better service from our company</p>
                    </div>

                </div>
                <div class="col-md-12">
                    <div class="copyright">
                        <p class="text-center"> Copyright &#169; 2020 Graphics Design Point </p>
                    </div>

                    <ul class="d-flex payment">
                        <li><a href="#"><img src="{{asset('Inc/Frontend')}}/img/paypal 2.png" alt="" style="width:150px ;"></a></li>
                        <li><a href="#"><img src="{{asset('Inc/Frontend')}}/img/payoneer.png" alt="" style="width:150px ;"></a></li>

                    </ul>

                </div>


            </div>

        </div>

    </div>

</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.js"
        integrity="sha512-14GPUgKFTeCsgj5WWZpTNQ525GYlOK3DMTqrjsly3TDIDnOUbZ5sWyfI6HqsWUmMmaCoa6q7FHrbq9xdqNhmYg=="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

<!-- Fancybox  -->

<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="{{asset('Inc/Frontend/js/intlTelInput.js')}}"></script>

<script src="{{asset('Inc/Frontend/js/custom.js')}}"></script>
<script>
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
        utilsScript: "{{asset('Inc/Frontend/js/utils.js')}}",
    });

    // Free-trial js end

</script>

</body>

</html>
