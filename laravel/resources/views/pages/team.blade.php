@extends('layouts.default')
@section('content')

  <div class="team" id="team">
        <div class="container">
            <h3 class="head">Наша команда</h3>
            @foreach ($team as $teammate)
            <div class="agile_team_grids">
                <div class="col-md-3 agile_team_grid">
                    <div class="agile_team_grid_main">
                        <img src="/images/{{$teammate->photo}}" alt=" " class="img-responsive">
                        <div class="p-mask">
                            <ul class="top-links two">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-vk"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="agile_team_grid1">
                        <h3>{{$teammate->name}}</h3>
                        <p>{{$teammate->description}}</p>
                    </div>
                </div>

            </div>
            @endforeach

        </div>
    </div>
@stop
