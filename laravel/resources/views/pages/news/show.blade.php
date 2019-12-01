@extends('layouts.default')
@section('content')

<div class="tabs-grids " id="about">
        <div class="container">
            <div class="t-head">
                <h3 class="head">{{$article->name}} </h3>
            </div>
            @if ($article->image!=null)
            <div class="text-center">
                <img src="/images/{{$article->image}}" alt=" " class="img-responsive" />
                {{-- img-responsiv для выраынивания по правому краю --}}
            </div>
            @endif
            <div class="tabs-grids">
                <div id="parentVerticalTab">
                    <div class="resp-tabs-container hor_1">

                        <div class="text agile-info text-pre">

                                <p>{{$article->text}}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
