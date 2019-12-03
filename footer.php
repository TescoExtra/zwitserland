<footer class="bg-darkbrown">
    <div class="container">
        <div class="row">
            <div class="widget_text col-xs-12 col-sm-4 col-md-4 col-lg-4"><div class="textwidget custom-html-widget">
                <img src="http://localhost/projecten/wp-content/themes/shsite/css/images/fg-small.png" alt="Frictional Games" width="210" height="75">
<p>NC Tuinservice is een bedrijf dat uw tuin kan komen verbeteren/maken. </p>
<a class="btn outline arrow" href="https://www.frictionalgames.com/site/">Go to the Newsletter</a></div></div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">		<img src="http://localhost/projecten/wp-content/themes/shsite/css/images/fg.png" alt="Frictional Games" width="120" height="75" style="margin-left: 20%;">
                    <p>This website is gemaakt door <br/>
                    Nick van Herck & Ashbert Bergrok.
                    </p>
        </div>
            <div class="widget_text col-xs-12 col-sm-4 col-md-4 col-lg-4"><h4 class="contact-title">Contact Information</h4><div class="textwidget custom-html-widget"><ul>
<li class="company">NC Tuinservice</li>
<li>5021 BM</li>
<li> Van de Jeffstraat 34</li>
<li> Nederland </li>
<li class="phone"><span>Call NC:</span> <a href="tel:46 708 88 52 33">+06 202 152 85</a></li>
</ul>
<a href="https://www.frictionalgames.com/site/contact" class="btn outline arrow">Stuur een email</a>
</div></div>
        </div>
        <br/>
        <br/>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <ul class="bottom light">
                    <li><a href="#">NC Tuinservice</a></li>
                    <li><a href="#">Social Media</a></li>
                    <li><a href="#" target="_blank">Nickert</a></li>
                    <li style="font-weight: normal;">Copyright © 2019</li>
                </ul>
            </div>
        </div>
    </div>
</footer>

</div><script type="text/javascript" src="http://localhost/projecten/wp-content/themes/shsite/js/jquery/jquery.js"></script>
<script type="text/javascript" src="http://localhost/projecten/wp-content/themes/shsite/js/jquery/jquery-migrate.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript" src="http://localhost/projecten/wp-content/themes/shsite/js/front.min.js"></script>

<script type="text/javascript" src="http://localhost/projecten/wp-content/themes/shsite/js/plugin.min.js"></script>

<script type="text/javascript" src="http://localhost/projecten/wp-content/themes/shsite/js/custom.js"></script>



<script>

    jQuery(document).ready(function ($) {

        var header = $("header");
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            if (scroll >= 1) {
                header.addClass("fixed");
            } else {
                header.removeClass("fixed");
            }
        });
        $('.hamburger-animation').click(function () {
            if ($('.hamburger-animation').hasClass('is-active')) {
                $('#menu').removeClass('navbar-collapse');
                $('#menu').addClass('mobile-menu');
                $('#menu').addClass('active');

            } else {
                $('#menu').removeClass('active');
            }
        });
        if ($(window).width() < 960) {
            $('.logo-big').attr('width', 175).attr('height', 192);
        }
        if ($(window).width() < 569) {
            $('.logo-big').attr('width', 140).attr('height', 154);
        }
        $(".totop").hide();

        // fade in .totop
        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('.totop').fadeIn();
                } else {
                    $('.totop').fadeOut();
                }
            });

            // scroll body to 0px on click
            $('.totop').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
        });
    });

</script>