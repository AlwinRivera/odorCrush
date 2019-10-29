<?php /* Template Name: odorcrush */ ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OdorCrush</title>
    <style>
        body,
        html {
        height: 100%;
        }

        body.slider__body {
        margin: 0;
        padding: 0;
        overflow: hidden;
        }

        .slider__container {
        position: fixed;
        display: block;
        height: 100%;
        width: 100%;
        margin: 0;
        padding: 0;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        -webkit-transition: -webkit-transform 500ms ease-in-out;
        transition: -webkit-transform 500ms ease-in-out;
        -o-transition: transform 500ms ease-in-out;
        transition: transform 500ms ease-in-out;
        }

        .slider__page {
        position: relative;
        width: 100%;
        height: 100%;
        }

        .slider__indicators {
        position: fixed;
        left: 60px;
        top: 50%;
        z-index: 2;
        margin: 0;
        padding: 0;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        }
        .slider__indicator {
        opacity: 0.3;
        display: block;
        width: 0.25rem;
        height: 0.25rem;
        margin: 1.5rem 0;
        border-radius: 100px;
        background-color: #fff;
        cursor: default;
        }
        .slider__indicator--active {
        opacity: 1;
        transform: scale(1.5);
        }
        section > span {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-family: sans-serif;
            text-transform: uppercase;
        }
        #home {
            color: #fff;
            font-size: 7vw;
            text-align:center;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("<?php echo get_template_directory_uri(); ?>/assets/images/home.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }
        #about {
            color: #fff;
            font-size: 3.4vw;
            text-align:right;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("<?php echo get_template_directory_uri(); ?>/assets/images/about.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }
        #services {
            color:#2D3136;
            background: #fefefe;
            font-size: 3vw;
            text-align:left;
            background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url("<?php echo get_template_directory_uri(); ?>/assets/images/services1.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }
        #testimonials{
            color:#A78B6F;
            font-size: 1.5vw;
            background: #f7f0ea;
        }
        #footer {
            font-size: 1.5vw;
            background: #2D3136;
            color: #fefefe;
        }
        .topnav {
        overflow: hidden;
        background-color: #333;
        }

        .topnav a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
        }

        .topnav a:hover {
        background-color: #ddd;
        color: black;
        }

        .topnav a.active {
        background-color: #4CAF50;
        color: white;
        }

        .topnav .icon {
        display: none;
        }

        @media screen and (max-width: 600px) {
        .topnav a:not(:first-child) {display: none;}
        .topnav a.icon {
            float: right;
            display: block;
        }
        }

        @media screen and (max-width: 600px) {
        .topnav.responsive {position: relative;}
        .topnav.responsive .icon {
            position: absolute;
            right: 0;
            top: 0;
        }
        .topnav.responsive a {
            float: none;
            display: block;
            text-align: left;
        }
        }

        /* Slideshow container */
        .slideshow-container {
        position: relative;
        background: #f7f0ea;
        }

        /* Slides */
        .mySlides {
        display: none;
        padding: 80px;
        text-align: center;
        }

        /* Next & previous buttons */
        .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        margin-top: -30px;
        padding: 16px;
        color: #A78B6F;
        font-weight: bold;
        font-size: 20px;
        border-radius: 0 3px 3px 0;
        user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
        position: absolute;
        right: 0;
        border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
        background-color: #a78b6f;
        color: #f7f0ea;
        }

        /* The dot/bullet/indicator container */
        .dot-container {
            text-align: center;
            padding: 20px;
            background: #f7f0ea;
        }

        /* The dots/bullets/indicators */
        .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #a78b6f;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
        opacity:.3;
        }

        /* Add a background color to the active dot/circle */
        .active, .dot:hover {
        background-color: #a78b6f;
        opacity:1;
        }

        /* Add an italic font style to all quotes */
        q {
        	font-style: italic;
            color: #A78B6F;
        }

        /* Add a blue color to the author */
        .author {color: #A78B6F;}
    </style>
  </head>
  <body>
    <div class="slides">
        <section id="home">
            <div class="topnav" id="myTopnav">
                <a href="#home" class="active">Home</a>
                <a href="#news">News</a>
                <a href="#contact">Contact</a>
                <a href="#about">About</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <span>
                A MUST-HAVE <br>FOR EVERY<br>HOME
            </span>
        </section>
        <section id="about">
            <span>
                THE EASIEST, MOST AFFORDABLE WAY TO KEEP YOUR WASHING MACHINE FRESH AND CLEAN FOR EVERYDAY USE
                <br>
                <a href="#">CHECKOUT NOW</a>
            </span>
            </section>
        <section id="services">
            <span>
                <ol>
                    <li>GUARANTEED HIGH QUALITY</li>
                    <li>NO HASSLE RETURNS</li>
                    <li>6 MONTH SUPPLY</li>
                </ol>
            </span>
        </section>
        <section id="testimonials">
            <span>
                <div class="slideshow-container">

                <div class="mySlides">
                <q>I’ve been battling a smelly washer for months and felt really frustrated that nothing seemed to work. I found OdorCrush and am so thankful. It helps tremendously with mold, mildew and odors that have been plaguing my machine. The inside of my washer also looks as new as the day we got it.</q>
                <p class="author">- MELISSA WILLIAMS</p>
                </div>

                <div class="mySlides">
                <q>Thank you OdorCrush for adding some freshness to my life! I use these tabs to clean my washer monthly or when it starts smelling a little musty. They are super simple, just toss and go. Super effective at eliminating the odors that build up from doing laundry regularly.</q>
                <p class="author">- CHRIS MONROE</p>
                </div>

                <div class="mySlides">
                <q>Totally worth it! We had a smell in our washer that literally stunk up the whole laundry room and beyond. When it started effecting our clothes I defiantly got concerned. I took a chance and bought OdorCrush and am so happy I did! I’ve used it twice now and it has improved the smell by 100%.</q>
                <p class="author">- LIZ TAYLOR</p>
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

                </div>

                <div class="dot-container">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
                </div>
            </span>
        </section>
        <section id="footer">
            <span>
                <div>
                    <p>
                        ADDRESS:
                        1212 Communications Circle, Suite 102,
                        Virginia Beach, VA 23455
                    </p>
                    <p>
                        PHONE NUMBER:
                        (877) 618-6804
                    </p>
                </div>
                <div>
                    EMAIL:
                    support@odorcrushstore.com
                </div>
                <div>
                    <ul>
                        <li>
                            FAQ
                        </li>
                        <li>
                            Disclaimer
                        </li>
                        <li>
                            Anti-Spam Policy
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="OdorCrush">
                        </li>
                        <li>
                            Privacy Policy
                        </li>
                        <li>
                            Terms and Conditions
                        </li>
                        <li>
                            Refunds
                        </li>
                        <li>
                            Contact Us
                        </li>
                    </ul>
                </div>
            </span>
        </section>
    </div>

    <script>
        var slider = function (sliderElement) {

        var pages = [];
        var currentSlide = 1;
        var isChanging = false;
        var keyUp = {38:1, 33:1};
        var keyDown = {40:1, 34:1};

        var init = function () {

        document.body.classList.add('slider__body');

        // control scrolling
        whatWheel = 'onwheel' in document.createElement('div') ? 'wheel' : document.onmousewheel !== undefined ? 'mousewheel' : 'DOMMouseScroll';
        window.addEventListener(whatWheel, function (e) {
            var direction = e.wheelDelta || e.deltaY;
            if (direction > 0) {
            changeSlide(-1);
            } else {
            changeSlide(1);
            }
        });

        // allow keyboard input
        window.addEventListener('keydown', function (e) {
            if (keyUp[e.keyCode]) {
            changeSlide(-1);
            } else if (keyDown[e.keyCode]) {
            changeSlide(1);
            }
        });

        // page change animation is done
        detectChangeEnd() && document.querySelector(sliderElement).addEventListener(detectChangeEnd(), function () {
            if (isChanging) {
            setTimeout(function() {
                isChanging = false;
                window.location.hash = document.querySelector('[data-slider-index="' + currentSlide + '"]').id;
            }, 400);
            }
        });

        // set up page and build visual indicators
        document.querySelector(sliderElement).classList.add('slider__container');
        var indicatorContainer = document.createElement('div');
        indicatorContainer.classList.add('slider__indicators');

        var index = 1;
        [].forEach.call(document.querySelectorAll(sliderElement + ' > *'), function (section) {

            var indicator = document.createElement('a');
            indicator.classList.add('slider__indicator')
            indicator.setAttribute('data-slider-target-index', index);
            indicatorContainer.appendChild(indicator);

            section.classList.add('slider__page');
            pages.push(section);
            section.setAttribute('data-slider-index', index++);
        });

        document.body.appendChild(indicatorContainer);
        document.querySelector('a[data-slider-target-index = "' + currentSlide +'"]').classList.add('slider__indicator--active');


        // stuff for touch devices
        var touchStartPos = 0;
        var touchStopPos = 0;
        var touchMinLength = 90;
        document.addEventListener('touchstart', function (e) {
            e.preventDefault();
            if (e.type == 'touchstart' || e.type == 'touchmove' || e.type == 'touchend' || e.type == 'touchcancel') {
            var touch = e.touches[0] || e.changedTouches[0];
            touchStartPos = touch.pageY;
            }
        });
        document.addEventListener('touchend', function (e) {
            e.preventDefault();
            if (e.type == 'touchstart' || e.type == 'touchmove' || e.type == 'touchend' || e.type == 'touchcancel') {
            var touch = e.touches[0] || e.changedTouches[0];
            touchStopPos = touch.pageY;
            }
            if (touchStartPos + touchMinLength < touchStopPos) {
            changeSlide(-1);
            } else if (touchStartPos > touchStopPos + touchMinLength) {
            changeSlide(1);
            }
        });
        };


        // prevent double scrolling
        var detectChangeEnd = function () {
        var transition;
        var e = document.createElement('foobar');
        var transitions = {
            'transition': 'transitionend',
            'OTransition': 'oTransitionEnd',
            'MozTransition': 'transitionend',
            'WebkitTransition': 'webkitTransitionEnd'
        };

        for(transition in transitions) {
            if (e.style[transition] !== undefined) {
            return transitions[transition];
            }
        }
        return true;
        };


        // handle css change
        var changeCss = function (obj, styles) {
        for (var _style in styles) {
            if (obj.style[_style] !== undefined) {
            obj.style[_style] = styles[_style];
            }
        }
        };

        // handle page/section change
        var changeSlide = function (direction) {

        // already doing it or last/first page, staph plz
        if (isChanging || (direction == 1 && currentSlide == pages.length) || (direction == -1 && currentSlide == 1)) {
            return;
        }

        // change page
        currentSlide += direction;
        isChanging = true;
        changeCss(document.querySelector(sliderElement), {
            transform: 'translate3d(0, ' + -(currentSlide - 1) * 100 + '%, 0)'
        });

        // change dots
        document.querySelector('a.slider__indicator--active').classList.remove('slider__indicator--active');
        document.querySelector('a[data-slider-target-index="' + currentSlide +'"]').classList.add('slider__indicator--active');
        };

        // go to spesific slide if it exists
        var gotoSlide = function (where) {
        var target = document.querySelector(where).getAttribute('data-slider-index');
        if (target != currentSlide && document.querySelector(where)) {
            changeSlide(target - currentSlide);
        }
        };

        // if page is loaded with hash, go to slide
        if (location.hash) {
        setTimeout(function () {
            window.scrollTo(0, 0);
            gotoSlide(location.hash);
        }, 1);
        };

        // we have lift off
        if (document.readyState === 'complete') {
        init();
        } else {
        window.addEventListener('onload', init(), false);
        }

        // expose gotoSlide function
        return {
        gotoSlide: gotoSlide
        }
        };
    </script>
    <script>
        var mySlider = slider('.slides');
    </script>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        }
    </script>
    <script>
        function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
        }
    </script>
  </body>
</html>

