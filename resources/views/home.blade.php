<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Resraurent Reservation</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom fonts -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles-->
    <link href="{{asset('css/agency.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/login.css')}}" rel="stylesheet">

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">WBO Resraurent Reservation</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <ul class="navbar-nav text-uppercase ml-auto   ">
                    <li class="nav-item">
                        @if (Auth::guard('web')->check())
                            <a class="nav-link " href="{{ url('/home') }}">Home</a>
                        @else
                            <a class="nav-link " href="{{ url('/') }}">Home</a>
                        @endif


                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('user.menus.index')}}">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#portfolio">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#contact">Contact</a>
                    </li>
                    @if (Auth::guest())
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger js-signin-modal-trigger " href="{{ url('/login') }}" >Login</a>
                        </li>
                    @else
                        <li class="nave-link dropdown nav-item ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Hello {{ Auth::user()->name }}<span class="caret"></span>
                            </a>


                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{route('user.profiles.edit',Auth::guard('web')->id())}}"><i class="fa fa-user fa-fw"></i> View Profile</a>
                                </li>

                                <li><a href="{{route('user.reservationss.index')}}"><i class="fa fa-gear fa-fw"></i> View Reservations</a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                <li>
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ 'App\Admin' == Auth::getProvider()->getModel() ? route('admin.logout') : route('users.logout')  }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </ul>
        </div>
    </div>
</nav>

<!-- Header -->
<header class="masthead">
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">Welcome To Our</div>
            <div class="intro-heading text-uppercase">Fine Dining Resraurent!</div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger " href="{{route('user.reservations.create')}}" >Reserve Now</a>
        </div>
    </div>
</header>


<!-- Gallery -->
<section class="bg-light" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Gallery</h2>
                <h3 class="section-subheading text-muted">Following the best hygiene standrads.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="{{asset('img/01-thumbnail.jpg')}}" alt="">
                </a>
                <div class="portfolio-caption">

                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="{{asset('img/02-thumbnail.jpg')}}" alt="">
                </a>
                <div class="portfolio-caption">

                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="{{asset('img/03-thumbnail.jpg')}}" alt="">
                </a>
                <div class="portfolio-caption">

                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="{{asset('img/04-thumbnail.jpg')}}" alt="">
                </a>
                <div class="portfolio-caption">

                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="{{asset('img/05-thumbnail.jpg')}}" alt="">
                </a>
                <div class="portfolio-caption">

                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="{{asset('img/06-thumbnail.jpg')}}" alt="">
                </a>
                <div class="portfolio-caption">

                </div>
            </div>
        </div>
    </div>
</section>

<!-- About -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">About</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">
                    <li>
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="{{asset('img/1.jpg')}}" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">

                                <h4 class="subheading">Progress</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">In such a short period, this group has become one of the region’s leading best restaurant chain while serving variety of food with highest quality standard is the backbone of this group.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="{{asset('img/2.jpg')}}" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">

                                <h4 class="subheading">Objective</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">The company objective is to establish superior dining facilities in prime locations that offer high quality dining experiences in a friendly relaxed environment at an affordable price that represents excellent value for money.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="{{asset('img/3.jpg')}}" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">

                                <h4 class="subheading">Food Fun For Everyone</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Unlike other fine dining restaurants in Pakistan, we control all aspects of our supply chain so that we can assure we are only serving the best meats, spices and bakery items to our distinguished guests.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>Be Part
                                <br>Of Our
                                <br>Success!</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<!-- Contact -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">

                <h1 class="section-subheading text-muted">Operating Hours</h1>
                <h6 class="section-heading text-uppercase">Mon-Thu/Sat-Sun  12:30 PM - 01:30 AM</h6>
                <h6 class="section-heading text-uppercase">Fri  02:30 PM - 01:30 AM</h6>
                <h6 class="section-heading text-uppercase">Phone: +92-303-4346076</h6>
                <h6 class="section-heading text-uppercase">Mail Us: Queries@restaurentreservation.com</h6>
                <h1 class="section-subheading text-muted">Contact Us</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; WBO Restaurant Reservation 2018</span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                        <a href="https://www.twitter.com/">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.linkedin.com/">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4"  >
                <ul class="list-inline quicklinks">
                    <li class="list-inline-item">
                        <span><a href="#">Privacy Policy</a></span>
                    </li>
                    <li class="list-inline-item">
                        {{--<font color="#212529"><a href="#">Terms of Use</a></font>--}}
                        <span color="#212529"><a href="#">Terms of Use</a></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<!--Gallery Big Pic Modal  -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->

                            <img class="img-fluid d-block mx-auto" src="{{asset('img/01-full.jpg')}}" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->

                            <img class="img-fluid d-block mx-auto" src="{{asset('img/02-full.jpg')}}" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->

                            <img class="img-fluid d-block mx-auto" src="{{asset('img/03-full.jpg')}}" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->

                            <img class="img-fluid d-block mx-auto" src="{{asset('img/04-full.jpg')}}" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->

                            <img class="img-fluid d-block mx-auto" src="{{asset('img/05-full.jpg')}}" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->

                            <img class="img-fluid d-block mx-auto" src="{{asset('img/06-full.jpg')}}" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!---------------------------------------------------------------------------------->



<!----------------------------reservation form----------------------------------------------------------->

<div class="cd-signin-modal js-reservation-modal"> <!-- this is the entire modal form, including the background -->
    <div class="cd-signin-modal__container"> <!-- this is the container wrapper -->
        <ul class="cd-signin-modal__switcher js-reservation-modal-switcher js-reservation-modal-trigger">

            <li><a href="#0" data-signin="reservation" data-type="reservation" style="font-size:20px">Reservatin Form</a></li>
        </ul>


        <div class="cd-signin-modal__block js-reservation-modal-block" data-type="reservation"> <!-- reservation form -->
            <form class="cd-signin-modal__form">
                <p class="cd-signin-modal__fieldset">
                    <label class="cd-signin-modal__label cd-signin-modal__label--phone cd-signin-modal__label--image-replace" for="Location">Location</label>
                    <select class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" name="location" required >
                        <option value="select your destination" style="display:none"  disabled selected>Select Your Destination</option>

                        <option value="lahore">Lahore</option>
                        <option value="karachi">Karachi</option>
                        <option value="islamabad">Islamabad</option>



                    </select>
                </p>
                <p class="cd-signin-modal__fieldset">
                    <label class="cd-signin-modal__label cd-signin-modal__label--phone cd-signin-modal__label--image-replace" for="date">Date</label>
                    <input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="date" type="date" placeholder="Date" required/>

                </p>
                <p class="cd-signin-modal__fieldset">
                    <label class="cd-signin-modal__label cd-signin-modal__label--phone cd-signin-modal__label--image-replace" for="time">Time</label>
                    <input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border time" id="time" type="time" placeholder="Time"   value="12:30" required/>

                </p>

                <p class="cd-signin-modal__fieldset">
                    <label class="cd-signin-modal__label cd-signin-modal__label--phone cd-signin-modal__label--image-replace" for="guests">Guests</label>
                    <input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border date" id="guests" type="number" placeholder="No of Guests" min="2" max="20"  required/>

                </p>

                <p class="cd-signin-modal__fieldset">
                    <label class="cd-signin-modal__label cd-signin-modal__label--phone cd-signin-modal__label--image-replace" for="rserve-phone">Phone</label>
                    <input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="reserve-phone" type="text" placeholder="Confirmation Phone e.g. 03034346076" maxlength="11" required/>

                </p>

                <p class="cd-signin-modal__fieldset">
                    <label class="cd-signin-modal__label cd-signin-modal__label--phone cd-signin-modal__label--image-replace" for="message">Special Note</label>

                    <textarea id="message" name="message" class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" maxlength="100">Special Note</textarea>
                </p>



                <p class="cd-signin-modal__fieldset">
                    <input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding" type="submit" value="Submit">
                </p>
            </form>
        </div> <!-- cd-signin-modal__block -->
        <a href="#0" class="cd-signin-modal__close js-close">Close</a>
    </div> <!-- cd-signin-modal__container -->
</div> <!-- cd-signin-modal -->



















<!---------------------------------------------------------------------------------->
<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!-- Plugin JavaScript -->
<script src="{{asset('jquery.easing.min.js')}}"></script>

<!-- Contact form JavaScript -->
<script src="{{asset('js/jqBootstrapValidation.js')}}"></script>
{{--
<script src="{{asset('js/contact_me.js'}}"></script>
--}}

<!-- Custom scripts for this template -->
<script src="{{asset('js/agency.min.js')}}"></script>
<script src="{{asset('js/login.js')}}"></script>
<script src="{{asset('js/reservation.js')}}"></script>
<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


</body>

</html>
