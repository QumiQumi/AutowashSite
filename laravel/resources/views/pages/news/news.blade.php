@extends('layouts.default')
@section('content')

<div class="tabs" id="about">
        <div class="container">
            <div class="t-head">
                <h3 class="head">Полезные статьи</h3>
            </div>
            <div class="tabs-grids">
                <div id="parentVerticalTab">
                    <div class="resp-tabs-container hor_1  no-link-decoration">
                        @foreach ($articles as $article )
                        <a href="{{route('news.show', $article)}}">
                            <div class="panel panel-default">
                                <div class="text agile-info panel-body">
                                        <h4>{{$article->name}} </h4>
                                        <p>{{$article->description}} </p>
                                </div>
                            </div>
                        </a>

                        {{-- <img src="images/{{$article->image}}" alt=" " class="img-responsive" /> --}}
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
