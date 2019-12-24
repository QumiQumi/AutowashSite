@extends('layouts.default')
@section('content')

<div class="tabs" id="about">
        <div class="container">
            <div class="t-head">
                <h3 class="head">Полезные статьи</h3>
            </div>
            <div class="tabs-grids">
                <div id="parentVerticalTab">
                    <div class="resp-tabs-container hor_1">
                        @foreach ($articles as $article )

                            <div class="panel panel-default">
                                <div class="text agile-info panel-body">
                                    <div class="row">
                                        <div class="col-md-9 vcenter">
                                            <a href="{{route('news.show', $article)}}">
                                                <h4>{{$article->name}}</h4>
                                            </a>
                                            <p>{{$article->description}} </p>
                                        </div>
                                        @can('admin-panel')
                                            <div class="col-md-2 vcenter">
                                                <h1>
                                                <a href="{{route('news.edit', $article)}}" class="btn btn-warning btn-block m-xxs">Редактировать</a>
                                                {{-- <a href="{{route('news.destroy', $article)}}"
                                                    onclick="event.preventDefault();
                                                    document.getElementById('delete-article-form').submit();">
                                                        <i class="fa fa-trash"></i>
                                                </a> --}}
                                                <form id="delete-article-form" action="{{ route('news.destroy', $article) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-block m-xxs" type="submit">Удалить</button>
                                                </form>
                                            </h1>
                                            </div>
                                        @endcan

                                    </div>

                                </div>
                            </div>


                        {{-- <img src="images/{{$article->image}}" alt=" " class="img-responsive" /> --}}
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

