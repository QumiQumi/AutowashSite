@extends('layouts.default')
@section('content')

<div class="tabs" id="about">
    {{-- Отзывы --}}
    <div class="container ">
        {{-- Добавить отзыв --}}
        <div class="t-head">
            <h3 class="head">Изменить отзыв</h3>
        </div>
        <form method="post" action="{{route('comments.update',$comment)}}">
            @csrf
            @method('PUT')
            <div class="col-sm-10">
                    <h4><a href="#"><b>{{ $comment->user->name}}</b></a></h4>
                    <h6 class="text-muted time">{{$comment->created_at}}</h6>
                </div>
            <div class="form-group">
                <textarea id="my-textarea" class="form-control noresize" name="text" rows="3" required>{{$comment->text}}</textarea>
            </div>
            <button type="submit" class="btn btn-default btn-lg btn-block">ОТПРАВИТЬ</button>
        </form>
    </div>
</div>

@endsection
