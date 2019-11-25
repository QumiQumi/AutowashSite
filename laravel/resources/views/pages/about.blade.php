@extends('layouts.default') @section('content')

<div class="main-top" id="home">
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



<div class="tabs" id="about">
    <div class="container">
        <div class="t-head">
            <h3 class="head">Почему выбирают нас?</h3>
        </div>
        <div class="tabs-grids">
            <div id="parentVerticalTab">
                {{-- <div class="resp-tabs-nav">
                    <ul class="resp-tabs-list hor_1">
                        @foreach ($abouts as $about)
                        <li>{{$about->title}} </li>
                        @endforeach
                    </ul>
                </div> --}}
                <div class="resp-tabs-container hor_1">
                    @foreach ($abouts as $about )
                    <div class="text agile-info">
                            <h4>{{$about->title}} </h4>
                            <p>{{$about->body}} </p>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@stop
