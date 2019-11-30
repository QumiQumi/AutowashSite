@extends('layouts.default')
@section('content')


<div class="tabs" id="about">
    {{-- Отзывы --}}
    <div class="container ">
        {{-- Добавить отзыв --}}
        <div class="t-head">
            <h3 class="head">Добавить отзыв</h3>
        </div>
        <form method="post" action="{{route('comments')}}">
            @csrf
            <div class="form-group">
                    <textarea id="my-textarea" class="form-control noresize" name="text" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-default btn-lg btn-block">ОТПРАВИТЬ</button>
        </form>
    </div>
</div>
<div class="tabs" id="work">
    {{-- Отзывы --}}
    <div class="container ">

        <div class="t-head">
                <h3 class="head">Отзывы</h3>
        </div>
        @foreach ($comments as $comment)
                        <div class="panel panel-default post">
                            <div class="row panel-body">
                                <div class="col-sm-2 text-center">
                                    <img src="/images/user_1.jpg" class="img-circle avatar" alt="user profile image">
                                </div>
                                <div class="col-sm-10">
                                        <h4><a href="#"><b>{{$comment->user->name}}</b></a></h4>
                                        <h6 class="text-muted time">{{$comment->created_at}}</h6>
                                    <p>{{$comment->text}}</p>
                                </div>
                            </div>
                        </div>
        @endforeach
    </div>
</div>

@stop
