@extends('layouts.default')
@section('content')

<div class="tabs" id="about">
        <div class="container ">
                <div class="t-head">
                        <h3 class="head">Отзывы</h3>
                </div>

                @foreach ($comments as $comment)
                    <div class="row">
                            <div class="col-8">
                                <div class="card card-white post">
                                    <div class="post-heading">
                                        <div class="float-left image">
                                            <img src="/images/user_1.jpg" class="img-circle avatar" alt="user profile image">
                                        </div>
                                        <div class="float-left meta">
                                            <div class="title h5">
                                                <a href="#"><b>{{$comment->user->name}}</b></a>
                                            </div>
                                            <h6 class="text-muted time">{{$comment->created_at}}</h6>
                                        </div>
                                    </div>
                                    <div class="post-description">
                                        <p>{{$comment->text}}</p>

                                    </div>
                                </div>
                            </div>

                    </div>
                @endforeach

        </div>
    </div>

@stop
