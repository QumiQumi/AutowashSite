@extends('layouts.default')
@section('content')
<div class="tabs" id="about">
        {{-- Отзывы --}}
        <div class="container ">
            {{-- Добавить отзыв --}}
            <div class="t-head">
                <h3 class="head">Изменить статью</h3>
            </div>
            <form method="post" action="{{route('news.update',$article)}}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <p><label for="name">Название</label></p>
                    <input id="name"class="form-control noresize"
                        name="name"type="text" required value="{{$article->name}}">
                    </input>
                </div>
                <div class="form-group">
                        <p><label for="description">Краткое описание</label></p>
                        <input id="description"class="form-control noresize"
                            name="description" type="text" required value="{{$article->description}}">
                        </input>
                    </div>
                <div class="form-group">
                    <p><label for="text">Текст</label></p>
                    <textarea id="text" class="form-control noresize"
                        name="text" rows="30" required>
                        {{$article->text}}
                    </textarea>
                </div>
                <button type="submit" class="btn btn-default btn-lg btn-block">ОТПРАВИТЬ</button>
            </form>
        </div>
    </div>
@endsection
