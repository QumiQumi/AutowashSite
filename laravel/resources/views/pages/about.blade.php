@extends('layouts.default')
@section('content')

<div class="main-top" >
    <!-- banner section -->
    <div class="pogoSlider" id="js-main-slider">

        <div class="pogoSlider-slide" data-transition="verticalSlide" data-duration="1000" style="background-image:url(images/bannerm1.jpg);">
            <div class="pogoSlider-slide-element">
                <h3>МЫ <span>МОЕМ</span> ЛЮБЫЕ АВТОМОБИЛИ</h3>
            </div>
        </div>

        <div class="pogoSlider-slide " data-transition="verticalSlide" data-duration="1000" style="background-image:url(images/bannerm2.jpg);">
            <div class="pogoSlider-slide-element">
                <h3><span>МОЙКА</span> ДВИГАТЕЛЯ</h3>
            </div>
        </div>
        <div class="pogoSlider-slide " data-transition="verticalSlide" data-duration="1000" style="background-image:url(images/bannerm3.jpg);">
            <div class="pogoSlider-slide-element">
                <h3> <span>ПОЛИРОВКА</span> АВТОМОБИЛЯ</h3>
            </div>
        </div>
        <div class="pogoSlider-slide " data-transition="verticalSlide" data-duration="1000" style="background-image:url(images/bannerm4.jpg);">
            <div class="pogoSlider-slide-element">

                <h3>ПОКРЫТИЕ <span>ЖИДКИМ</span> ПОЛИМЕРОМ</h3>
            </div>
        </div>
    </div>
    <!-- /banner section -->

</div>

{{-- Why us? --}}
<div class="tabs" id="about">
    <div class="container">
        <div class="t-head">
            <h3 class="head">Почему выбирают нас?</h3>
        </div>
        <div class="tabs-grids">
            <div id="parentVerticalTab">
                <div class="resp-tabs-container hor_1">
                    @foreach ($abouts as $about )
                    <div class="text agile-info">
                            <h4>{{$about->title}} </h4>
                            <p>{{$about->body}} </p>
                    </div>

                    <img src="images/m{{$loop->index+1}}.jpg" alt=" " class="img-responsive" />
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

{{-- banner --}}
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
                    <h3>Чистых машин</h3>
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
                        <p class="counter">10000</p>
                    </div>
                    <div class="clearfix"> </div>
                    <h3>Save Income</h3>
                </div>

                <div class="clearfix"> </div>

            </div>
        </div>
@stop

@section('scripts')
     <!-- js files -->
    <!-- POGO SLIDER box js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script>
    <script src="js/main.js"></script>


@endsection
