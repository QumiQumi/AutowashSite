@extends('layouts.default')
@section('content')

 {{-- Добавить отзыв --}}
 @auth
<div class="tabs" id="about">
    <div class="container ">
        <div class="t-head">
            <h3 class="head">Добавить отзыв</h3>
        </div>
        <form method="post" action="{{route('comments')}}"  enctype="multipart/form-data">
            {{-- <form> --}}
            @csrf
            <div class="form-group">
                <textarea id="my-textarea" class="form-control noresize" name="text" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-default btn-lg btn-block">ОТПРАВИТЬ</button>
        </form>
    </div>
</div>
@endauth
<div class="tabs" id="about">
    {{-- Отзывы --}}
    <div class="container ">

        <div class="t-head">
                <h3 class="head">Отзывы</h3>
        </div>
        @foreach ($comments as $comment)
            <div class="panel panel-default post">
                <div class="row panel-body">
                    <div class="col-sm-2 text-center vcenter">
                        <div class="img_wrap">
                        <img src="/images/avatars/{{$comment->user->image}}" class="img-circle" alt="user profile image">
                        </div>
                    </div>

                    <div class="col-sm-7 vcenter">
                        <h4><a href="#"><b>{{ $comment->user->name}}</b></a></h4>
                        <h6 class="text-muted time">{{$comment->created_at}}</h6>
                        <p>{{$comment->text}}</p>
                    </div>
                    @if(Auth::check())
                        @if(session()->get('commentId')==$comment->id || Auth::user()->can('admin-panel'))
                            <div class="col-md-2 vcenter">
                                <h1>
                                <a href="{{route('comments.edit', $comment)}}" class="btn btn-warning btn-block m-bottom-xxs">Редактировать</a>
                                <form id="delete-article-form" action="{{route('comments.delete', $comment)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-block m-bottom-xxs" type="submit">Удалить</button>
                                </form>
                            </h1>
                            </div>
                        @endif
                    @endif

                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection

@section('scripts')
{{-- <script type="text/javascript">

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-submit").click(function(e){

        e.preventDefault();

        var text = $("input[name=text]").val();

        $.ajax({
           type:'POST',
           url:"{{route('comments')}}",
           data:{text:text},
           success:function(data){
              alert(data.success);
           }
        });
	});
</script> --}}
@endsection
