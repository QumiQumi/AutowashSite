@extends('layouts.default')
@section('content')

<div class="tabs-grids " id="about">
        <div class="container">
            @can('admin-panel')
                <form action="{{route('pricelist.update', $service)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <p><label for="name">Название</label></p>
                        <input id="name"class="form-control noresize"
                            name="name"type="text" required value="{{$service->name}}">
                        </input>
                    </div>
                    <div class="form-group">
                        <p><label for="description">Текст</label></p>
                        <textarea id="description" class="form-control noresize"
                            name="description" rows="30" required>
                            {{$service->description}}
                        </textarea>
                    </div>
                    <button class="btn btn-warning btn-block m-bottom-xxs" type="submit">Сохранить</button>
                </form>
                <div>
                    <h1>
                    <form id="delete-service-form" action="{{route('pricelist.destroy', $service)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-block m-bottom-xxs" type="submit">Удалить</button>
                    </form>
                    </h1>
                </div>
            @else
                <div class="t-head">
                    <h3 class="head">{{$service->name}} </h3>
                </div>
                @if ($service->image!='default.jpg')
                <div class="text-center">
                    <img src="/images/{{$service->image}}" alt=" " class="img" />
                </div>
                @endif
                <div class="tabs-grids">
                    <div id="parentVerticalTab">
                        <div class="resp-tabs-container hor_1">

                            <div class="text agile-info text-pre">
                                    <p>{{$service->description}}</p>
                            </div>

                        </div>
                    </div>
                </div>
            @endcan

        </div>
    </div>

@stop
