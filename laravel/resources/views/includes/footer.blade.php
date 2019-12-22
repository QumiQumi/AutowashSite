<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="agileinfo_footer_grids">
            <div class="col-md-4 agileinfo_footer_grid">
                <h2><a href="index.html">Автомобильная <span>Мойка</span></a></h2>
                <ul class="top-links two three">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4 agileinfo_footer_grid">
                <h3>Контактная информация</h3>
                <ul class="agileinfo_footer_grid_list">
                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Томский политехнический университет <span>Томск</span></li>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">bestcarwash@mail.ru</a></li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> +7 (800) 555 35 35</li>
                </ul>
            </div>
            <div class="col-md-4 agileinfo_footer_grid">
                <h3>Навигация по сайту</h3>
                <ul class="agileinfo_footer_grid_nav">
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a class="scroll" href="{{route('about')}}">О компании</a></li>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a class="scroll" href="{{route('pricelist')}}">Прайс</a></li>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a class="scroll" href="{{route('team')}}">Наша командa</a></li>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a class="scroll" href="{{route('contacts')}}">Контакты</a></li>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a class="scroll" href="{{route('news')}}">Новости</a></li>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a class="scroll" href="{{route('comments')}}">Отзывы</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>

    </div>
</div>
<div class="w3agile_footer_copy">
    <p>&copy; 2019 Элитная Автомобильная Мойка.</p>
</div>
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

{{-- Footer --}}
<!-- //footer -->
   <!-- js files -->
    <!-- SLIDER  js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    {{-- <script src="js/jquery.pogo-slider.min.js"></script> --}}
    {{-- <script src="js/main.js"></script> --}}

    <!-- /js files -->
    <!-- Starts-Number-Scroller-Animation-JavaScript -->
    {{-- <script src="js/waypoints.min.js"></script>
    <script src="js/counterup.min.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 20,
                time: 1000
            });
        });
    </script> --}}
    <!-- //Starts-Number-Scroller-Animation-JavaScript -->
    {{-- <script type="text/javascript">
        $(window).load(function() {
            $("#flexiselDemo1").flexisel({
                visibleItems: 4,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 2
                    },
                    tablet: {
                        changePoint: 768,
                        visibleItems: 3
                    }
                }
            });

        });
    </script>
    <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    <link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
    <script src="js/easyResponsiveTabs.js"></script> --}}
    <!--Plug-in Initialisation-->
    {{-- <script type="text/javascript">
        $(document).ready(function() {

            //Vertical Tab
            $('#parentVerticalTab').easyResponsiveTabs({
                type: 'vertical', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                tabidentify: 'hor_1', // The tab groups identifier
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#nested-tabInfo2');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
        });
    </script> --}}
    <!--/script-->

    {{-- <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script> --}}

    <!-- swipe box js -->
    {{-- <script src="js/jquery.swipebox.min.js"></script>
    <script type="text/javascript">
        jQuery(function($) {
            $(".swipebox").swipebox();
        });
    </script> --}}
    <!-- //swipe box js -->

    <script type="text/javascript">
        $(document).ready(function() {
            /*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear'
					 		};
							*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>

    <!--end-smooth-scrolling-->
    <script src="js/bootstrap.js"></script>
    @yield('scripts')
