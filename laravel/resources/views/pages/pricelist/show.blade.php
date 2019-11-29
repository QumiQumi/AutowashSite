@extends('layouts.default')
@section('content')

<div class="tabs" id="about">
        <div class="container">
            <div class="t-head">

                <h3 class="head">{{$service->name}} </h3>
            </div>
            <div class="tabs-grids">
                <div id="parentVerticalTab">
                    <div class="resp-tabs-container hor_1">

                        <div class="text agile-info text-pre">

                                <p>{{$service->description}}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
