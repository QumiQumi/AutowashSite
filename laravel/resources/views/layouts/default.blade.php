

<!DOCTYPE HTML>
<html>

<head>
    @include('includes.head')
</head>

<body id="home">
    @include('includes.header')
    @yield('content')
    <!-- Nav tabs -->
    <!--what-we-do-->
{{--

    <!--//what-we-do-->
    <!--count-down -->
    <div class="count" id="service">
        <div class="container">
            <div class="col-md-3 agile_count_grid">
                <div class="agile_count_grid_left">
                    <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                </div>
                <div class="agile_count_grid_right">
                    <p class="counter">324</p>
                </div>
                <div class="clearfix"> </div>
                <h3>Creative Design</h3>
            </div>
            <div class="col-md-3 agile_count_grid">
                <div class="agile_count_grid_left">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                </div>
                <div class="agile_count_grid_right">
                    <p class="counter">543</p>
                </div>
                <div class="clearfix"> </div>
                <h3>Happy Clients</h3>
            </div>
            <div class="col-md-3 agile_count_grid">
                <div class="agile_count_grid_left">
                    <span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
                </div>
                <div class="agile_count_grid_right">
                    <p class="counter">434</p>
                </div>
                <div class="clearfix"> </div>
                <h3>People Loved</h3>
            </div>
            <div class="col-md-3 agile_count_grid">
                <div class="agile_count_grid_left">
                    <span class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></span>
                </div>
                <div class="agile_count_grid_right">
                    <p class="counter">234</p>
                </div>
                <div class="clearfix"> </div>
                <h3>Save Income</h3>
            </div>
            <div class="clearfix"> </div>

        </div>
    </div>
    <!-- //count-down -->
    <!-- work -->
    <div class="work" id="work">
        <h3 class="head">Our Works</h3>
        <p class="urna">Vestibulum commodo urna sit amet volutpat.</p>

        <div class="agileits_works-top">
            <div class="col-md-4 agileits_works-grid">
                <img src="images/4.jpg" alt=" " class="img-responsive" />
            </div>
            <div class="col-md-4 agileits_works-grid two">
                <div class="wthree-text">
                    <h4>Lorem Ipsum</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry,Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                </div>

            </div>
            <div class="col-md-4 agileits_works-grid">
                <img src="images/10.jpg" alt=" " class="img-responsive" />
            </div>
            <div class="clearfix"> </div>
        </div>

        <div class="agileits_work_grids">
            <ul id="flexiselDemo1">
                <li>
                    <div class="agileits_work_grid view view-sixth">
                        <img src="images/2.jpg" alt=" " class="img-responsive" />
                        <div class="mask">
                            <a href="#" class="info"><i class="fa fa-cogs" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="agileits_work_grid view view-sixth">
                        <img src="images/3.jpg" alt=" " class="img-responsive" />
                        <div class="mask">
                            <a href="#" class="info"><i class="fa fa-car" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="agileits_work_grid view view-sixth">
                        <img src="images/4.jpg" alt=" " class="img-responsive" />
                        <div class="mask">
                            <a href="#" class="info"><i class="fa fa-cogs" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="agileits_work_grid view view-sixth">
                        <img src="images/5.jpg" alt=" " class="img-responsive" />
                        <div class="mask">
                            <a href="#" class="info"><i class="fa fa-car" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </li>
            </ul>

        </div>
    </div>
    <!-- //work -->
    <!--team -->
    <div class="team" id="team">
        <div class="container">
            <h3 class="head">Meet Our Team</h3>
            <p class="urna">Vestibulum commodo urna sit amet volutpat.</p>
            <div class="agile_team_grids">
                <div class="col-md-3 agile_team_grid">
                    <div class="agile_team_grid_main">
                        <img src="images/t1.jpg" alt=" " class="img-responsive">
                        <div class="p-mask">
                            <ul class="top-links two">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="agile_team_grid1">
                        <h3>Riya John</h3>
                        <p>Car Repair</p>
                    </div>
                </div>
                <div class="col-md-3 agile_team_grid">
                    <div class="agile_team_grid_main">
                        <img src="images/t2.jpg" alt=" " class="img-responsive">
                        <div class="p-mask">
                            <ul class="top-links two">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="agile_team_grid1">
                        <h3>Williamson </h3>
                        <p>Car Inspection</p>
                    </div>
                </div>
                <div class="col-md-3 agile_team_grid three">
                    <div class="agile_team_grid_main">
                        <img src="images/t3.jpg" alt=" " class="img-responsive">
                        <div class="p-mask">
                            <ul class="top-links two">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="agile_team_grid1">
                        <h3>Rosy John</h3>
                        <p>Car Wash</p>
                    </div>
                </div>
                <div class="col-md-3 agile_team_grid four">
                    <div class="agile_team_grid_main">
                        <img src="images/t4.jpg" alt=" " class="img-responsive">
                        <div class="p-mask">
                            <ul class="top-links two">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="agile_team_grid1">
                        <h3>David Pal</h3>
                        <p>Car Delivery</p>
                    </div>
                </div>

                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //team -->
    <!--Gallery-->
    <div class="gallery" id="gallery">
        <div class="container">
            <h3 class="head">Our Gallery</h3>
            <p class="urna">Vestibulum commodo urna sit amet volutpat.</p>

            <div class="gallery-grids">
                <div class="col-md-4 baner-top">
                    <a href="images/1.jpg" class="b-link-stripe b-animate-go  swipebox">
                        <div class="gal-spin-effect vertical ">
                            <img src="images/1.jpg" alt=" " />
                            <div class="gal-text-box">
                                <div class="info-gal-con">
                                    <h4>Car Towing</h4>
                                    <span class="separator"></span>
                                    <p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
                                    <span class="separator"></span>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 baner-top">
                    <a href="images/2.jpg" class="b-link-stripe b-animate-go  swipebox">
                        <div class="gal-spin-effect vertical ">
                            <img src="images/2.jpg" alt=" " />
                            <div class="gal-text-box">
                                <div class="info-gal-con">
                                    <h4>Car Towing</h4>
                                    <span class="separator"></span>
                                    <p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
                                    <span class="separator"></span>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 baner-top ban-mar">
                    <a href="images/3.jpg" class="b-link-stripe b-animate-go  swipebox">
                        <div class="gal-spin-effect vertical ">
                            <img src="images/3.jpg" alt=" " />
                            <div class="gal-text-box">
                                <div class="info-gal-con">
                                    <h4>Car Towing</h4>
                                    <span class="separator"></span>
                                    <p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
                                    <span class="separator"></span>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 baner-top ban-mar">
                    <a href="images/4.jpg" class="b-link-stripe b-animate-go  swipebox">
                        <div class="gal-spin-effect vertical ">
                            <img src="images/4.jpg" alt=" " />
                            <div class="gal-text-box">
                                <div class="info-gal-con">
                                    <h4>Car Towing</h4>
                                    <span class="separator"></span>
                                    <p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
                                    <span class="separator"></span>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 baner-top ban-mar">
                    <a href="images/5.jpg" class="b-link-stripe b-animate-go  swipebox">
                        <div class="gal-spin-effect vertical ">
                            <img src="images/5.jpg" alt=" " />
                            <div class="gal-text-box">
                                <div class="info-gal-con">
                                    <h4>Car Towing</h4>
                                    <span class="separator"></span>
                                    <p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
                                    <span class="separator"></span>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 baner-top ban-mar">
                    <a href="images/6.jpg" class="b-link-stripe b-animate-go  swipebox">
                        <div class="gal-spin-effect vertical ">
                            <img src="images/6.jpg" alt=" " />
                            <div class="gal-text-box">
                                <div class="info-gal-con">
                                    <h4>Car Towing</h4>
                                    <span class="separator"></span>
                                    <p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
                                    <span class="separator"></span>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 baner-top">
                    <a href="images/7.jpg" class="b-link-stripe b-animate-go  swipebox">
                        <div class="gal-spin-effect vertical ">
                            <img src="images/7.jpg" alt=" " />
                            <div class="gal-text-box">
                                <div class="info-gal-con">
                                    <h4>Car Towing</h4>
                                    <span class="separator"></span>
                                    <p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
                                    <span class="separator"></span>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 baner-top">
                    <a href="images/8.jpg" class="b-link-stripe b-animate-go  swipebox">
                        <div class="gal-spin-effect vertical ">
                            <img src="images/8.jpg" alt=" " />
                            <div class="gal-text-box">
                                <div class="info-gal-con">
                                    <h4>Car Towing</h4>
                                    <span class="separator"></span>
                                    <p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
                                    <span class="separator"></span>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 baner-top">
                    <a href="images/9.jpg" class="b-link-stripe b-animate-go  swipebox">
                        <div class="gal-spin-effect vertical ">
                            <img src="images/9.jpg" alt=" " />
                            <div class="gal-text-box">
                                <div class="info-gal-con">
                                    <h4>Car Towing</h4>
                                    <span class="separator"></span>
                                    <p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
                                    <span class="separator"></span>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //gallery -->
    <!-- newsletter -->
    <div class="newsletter" id="contact">
        <div class="container">
            <div class="col-md-6 w3agile_newsletter_left">
                <h3>Contact With us</h3>
                <p>Donec porta lacus vitae urna placerat, vitae dapibus nulla eleifend. Donec aliquam neque quis felis viverra pulvinar. Aliquam erat volutpat. Nam enim metus, faucibus non porttitor id, laoreet quis sapien.</p>
                <p>Lorem porta lacus vitae urna placerat, vitae dapibus nulla eleifend. Donec aliquam neque quis felis viverra pulvinar. Aliquam erat volutpat. Nam enim metus, faucibus non porttitor id, laoreet quis sapien.</p>
                <ul class="top-links two three">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-md-6 w3agile_newsletter_right">
                <form action="#" method="post">
                    <p>Your Name </p>
                    <input type="text" name="Your Name" required="" />
                    <p>Your Email </p>
                    <input type="email" name="Your Email" required="" />
                    <p>Your Message </p>
                    <textarea placeholder="" required=""></textarea>

                    <input type="submit" value="SUBMIT">
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //newsletter -->
    <!-- map -->
    <div class="map agileits">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26359195.17562375!2d-113.7156245614499!3d36.2473834534249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1471497559566"
            frameborder="0" style="border:0" allowfullscreen></iframe>
        <div class="map-grids">
            <div class="map-grid-left">
                <ul>
                    <li class="dot"><i class="fa fa-location-arrow" aria-hidden="true"></i> BD 2 Mars, N1 136, Morocco Casablanca</li>
                    <li class="mobile"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +212 522 275 386</li>
                    <li class="mes"><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">Example @mail.com</a></li>
                </ul>
                <p class="text">OUR LOCATION </p>
                <label class="right-arrow"> </label>
            </div>
            <div class="map-grid-right">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
            </div>
            <div class="clearfix"> </div>
        </div>

    </div>
    <!-- //map --> --}}


    @include('includes.footer')
</body>

</html>
