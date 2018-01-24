<!--Template Name: rovan
File Name: index.html
Author Name: ThemeVault
Author URI: http://www.themevault.net/
License URI: http://www.themevault.net/license/-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="icon" href="{{ asset('images/icons/favicon.png') }}"/>
        <title>Sean Global Skrrrr</title>
        <link href="{{ asset('css/christian.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('css/scrolling-nav.css') }}" rel="stylesheet" media="all">
        <!-- Bootstrap core CSS -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Custom styles for this template -->
        <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
        <link href="{{ asset('css/christian.css') }}" rel="stylesheet">
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
        <nav class="navbar navbar-default navbar-fixed-top custom-nav-wrapper">
            <div class="container">
                <div class="col-md-12 col-sm-10 mobile-space-remove">
                    <div class="navbar-header">
                        <button data-target="#myNavbar" data-toggle="collapse" class="navbar-toggle" type="button">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">


                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#myPage"><div class="home-icon"><i class="fa fa-home" aria-hidden="true"></i></div></a></li>
                            <li><a href="#features">features</a></li>
                            <li><a href="#portfolio">portfolio</a></li>
                            <li><a href="#pricing">pricing</a></li>
                            <li class="nav-logo-container"><div class="nav-logo"><a href="#myPage"><img src="{{ asset('images/logo-mid.png') }}"></a></div></li>
                            <li><a href="#resources">resources</a></li>
                            <li><a href="#blog">blog</a></li>
                            <li><a href="#help">help</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>
        <div class="banner-full-image">

            <div class="banner-content">
                <div class="col-set">
                    <div class="left">
                        <div class="title">
                            <h1>Take control with the only property management software designed by property managers</h1>
                        </div>
                    </div>
                    <div class="right">
                        <div class="contact-form">
                            <div class="container">
                                <div class="text-head offspace-35">
                                    <h2 class="text-light">FREE TRIAL</h2>
                                </div>
                                    <form class="offspace-35" id="Contact-Form" method="post">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="contact-form">
                                                    <div class="col-md-12 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input type="text" aria-invalid="false" required="" placeholder="name" class="form-control placeholder-fix" id="name">
                                                            <p class="help-block text-danger"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input type="email" required="" placeholder="email" class="form-control placeholder-fix" id="email">
                                                            <p class="help-block text-danger"></p>
                                                        </div>
                                                    </div>

                                                    <div class=" col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <input type="text" required="" placeholder="subject" class="form-control placeholder-fix" id="subject">
                                                            <p class="help-block text-danger"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <textarea aria-invalid="false" required="" placeholder="message" rows="4" class="form-control placeholder-fix" id="message" name="message"></textarea>
                                                            <p class="help-block text-danger"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="action-buttons text-center">
                                                        <button class="btn" type="reset">Clear</button>
                                                        <button class="btn" type="submit" id="sendFreeTrial">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <section id="services-block" class="">
            <div class="container col-lg-12">
                <div class="col-set">
                    <div class="col col-lg-4 col-md-6 col-sm-12">
                        <h2>LEASING</h2>
                        <div class="text"><p>Access an all-in-one leasing strategy with one click rental listings, online applications, first tenant screening and eLease.</p></div>
                        <a class="btn more" href="">LEARN MORE</a>
                    </div>
                    <div class="col col-blue col-lg-4 col-md-6 col-sm-12">
                        <h2>BUSINESS OPERATION</h2>
                        <div class="text"><p>Track maintenance requests, perform mobile inspections, and talk to residents and owners from one place.</p></div>
                        <a class="btn more" href="">LEARN MORE</a>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-sm-12">
                        <h2>ACCOUNTING</h2>
                        <div class="text"><p>Manage company and property finances with full general ledger accounting. Easily collect rent online.</p></div>
                        <a class="btn more" href="">LEARN MORE</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="video-block">
            <div class="container col-lg-12">
                <div class="video-container">
                    
                </div>
            </div>
        </section>
        <section id="newsletter">
            <div class="container col-lg-12">
                <div class="col-md-3"></div>
                <div class="col-md-4">
                    <h3>SUBSCRIBE TO OUR NEWSLETTER TO RECEIVE UPDATES.</h3>
                </div>
                <div class="col-md-5">
                    <form action="index.html" method="post" class="subscribe-form">
                        <div class="field"><input type="email" name="email" class="subscribe-input" placeholder="Email address" autofocus></div>
                        <div class="button"><button type="submit" class="subscribe-submit">Subscribe Now</button></div>
                    </form>
                </div>
            </div>
        </section>
     
        <section id="about" class="section-padding">
            <div class="container">
                <div class="row offspace-95">
                    <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12">
                        <div class="head-title">
                            <h3>FEATURES</h3>
                        </div>
                        <p class="desc-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s </p>
                        <p class="desc-text offspace-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                        <div class="social-icon-top-head">
                            <ul class="list-unstyled">
                                <li><a class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="skype"><i class="fa fa-skype"></i></a></li>
                                <li><a class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="behanse"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-5 col-xs-12 add-space-mobileview">
                        <div class="image">
                            <img src="{{ asset('images/user-image.png') }}" class="img-responsive" alt="user-image"/>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section id="professional" class="section-padding slider">
            <div class="col-md-12">
                    <div class="col-md-5 left-banner-img">
              
                        <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="testimonial-box">
                                            <p>"without buildium, theres no way we could have crown our business, we never would've been able to handle this many properties or be positioned for growth."</p>
                                            <div class="text-right"><h5>-Ace Regalado</h5></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="testimonial-box">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the industry's standar, when of type and scrambled it to make a type specimen book. It has survived not only </p>
                                            <div class="text-right"><h5>-Erlon Godes</h5></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-7">
                        <div class="row text-center col-md-12">
                            <div class="col-md-6 col-sm-3 col-xs-12 width-set-50 item">
                                <div class="information">
                                    <div class="counter-icon-block"><a class="hi-icon"><img src="{{ asset('images/icons/trophy-cup.png') }}"></a></div>
                                    <h1 class='counter' data-slno='1' data-min='0' data-max='12,500' data-delay='.9' data-increment=1>12,500</h1>
                                    <h5>Property Managers</h5>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-3 col-xs-12 width-set-50 item">
                                <div class="information">
                                    <div class="counter-icon-block"><a class="hi-icon"><img src="{{ asset('images/icons/smile.png') }}"></a></div>
                                    <h1 class='light-line counter' data-slno='1' data-min='0' data-max='1000000' data-delay='.5' data-increment="1">1,000,000</h1>
                                    <h5>Residents</h5>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-3 col-xs-12 width-set-50 item">
                                <div class="information">
                                    <div class="counter-icon-block"><a class="hi-icon"><img src="{{ asset('images/icons/foursquare-button.png') }}"></a></div>
                                    <h1 class='counter' data-slno='1' data-min='0' data-max='175000' data-delay='.5' data-increment="1">175000</h1>
                                    <h5>Owners</h5>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-3 col-xs-12 width-set-50 item">
                                <div class="information pink-line">
                                    <div class="counter-icon-block"><a class="hi-icon"><img src="{{ asset('images/icons/photo-camera.png') }}"></a></div>
                                    <h1 class='light-line counter' data-slno='1' data-min='0' data-max='46' data-delay='.5' data-increment="1">46</h1>
                                    <h5>Countries</h5>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>

            <footer class="offspace-95" style="float: left; width: 100%;">
            <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
                <i class="fa fa-chevron-up"></i>
            </a>
            <div class="container">
                <div class="col-md-12 footer-items">
                    <div class="col-md-3 item">
                        <p>Resources</p>
                        <ul>
                            <li><a href="#">Cost Saving Calculator</a></li>
                            <li><a href="#">Property Management</a></li>
                            <li><a href="#">Laws</a></li>
                            <li><a href="#">Case Studies</a></li>
                            <li><a href="#">Guides and Reports</a></li>
                            <li><a href="">Infographics</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 item">
                        <p>Partnership</p>
                        <ul>
                            <li><a href="#">Affiliate Program</a></li>
                            <li><a href="#">Referral Program</a></li>
                            <li><a href="#">Partners</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 item">
                        <p>About</p>
                        <ul>
                            <li><a href="#">Our Story</a></li>
                            <li><a href="#">News & Events</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Security Policy</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 item">
                        <p>About</p>
                        <ul>
                            <li><a href="#">877-396-7876</a></li>
                            <li><a href="#">Mon-Fri: 9AM to 6PM EOT</a></li>
                            <li><a href="#">Knoweledge Base</a></li>
                            <li><a href="#">Contact Customer Care</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="social-grid">
                    <ul class="list-unstyled text-center">
                        <li><a class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="insta"><i class="fa fa-instagram"></i></a></li>
                        <li><a class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                        <li><a class="youtube"><i class="fa fa-youtube-play"></i></a></li>
                    </ul>
                </div>
                <div class="copyright offspace-35">
                    &copy; 2017 All right reserved. Designed by <a href="http://www.facebook.com/" target="_blank">Unknown</a>
                </div>
            </div>
        </footer>
        <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/scrolling-nav.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/counterup.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/waypoints.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/wow.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/mousescroll.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/jquery.inview.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/magnific-popup.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>
        <script>
        $(document).ready(function(){
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $('#sendFreeTrial').click(function(e){
                e.preventDefault();

                var name = $('#name').val();
                var email = $('#email').val();
                var subject = $('#subject').val();
                var message = $('#message').val();

                console.log('name', name);
                console.log('email', email);
                console.log('subject', subject);
                console.log('message', message);             
                
                $.ajax({
                    /* the route pointing to the post function */
                    url: '/send',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN, 
                        name: name,
                        email: email,
                        subject: subject,
                        message: message
                    },
                    dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (response) { 
                        console.log(response);
                    }
                }); 
            });
       });    
    </script>

        <script>
            jQuery(document).ready(function ($) {
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });
            });
        </script>
        <script>
            $(document).ready(function () {
                // Initialize Tooltip
                $('[data-toggle="tooltip"]').tooltip();

                // Add smooth scrolling to all links in navbar + footer link
                $(".navbar a, footer a[href='#myPage']").on('click', function (event) {

                    // Make sure this.hash has a value before overriding default behavior
                    if (this.hash !== "") {

                        // Prevent default anchor click behavior
                        event.preventDefault();

                        // Store hash
                        var hash = this.hash;

                        // Using jQuery's animate() method to add smooth page scroll
                        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 900, function () {

                            // Add hash (#) to URL when done scrolling (default click behavior)
                            window.location.hash = hash;
                        });
                    } // End if
                });
            })
        </script>

        <script>
            jQuery(function ($) {

                //Initiat WOW JS
                new WOW().init();
                //smoothScroll
                smoothScroll.init();

                // Progress Bar
                $('#skill').bind('inview', function (event, visible, visiblePartX, visiblePartY) {
                    if (visible) {
                        $.each($('div.progress-bar'), function () {
                            $(this).css('width', $(this).attr('aria-valuetransitiongoal') + '%');
                        });
                        $(this).unbind('inview');
                    }
                });
            });
        </script>

    </body>

</html>
