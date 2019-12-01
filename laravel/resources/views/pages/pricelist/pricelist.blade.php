@extends('layouts.default')
@section('content')

<div class="tabs" id="about">
    <div class="container ">
            <div class="t-head">
                    <h3 class="head">Прайс</h3>
            </div>

        <table class="table table-bordered table-hover">
            <thead class="thead-light">
                <tr>
                    <th>Услуга/Авто</th>
                    @foreach (App\Car::all()->sortBy('id') as $item)
                    <th>
                        {{$item->name}}
                    </th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($pricelist as $item)

                    <tr onclick="window.location.href='{{route('pricelist.show', $item)}}'; return false">
                        <td>
                            {{$item->name}}
                        </td>
                        @php
                        $item->priceForCar->sortBy('car_id')
                        @endphp
                        @foreach ($item->priceForCar as $price)
                        <td>
                            {{$price->price}}
                        </td>
                        @endforeach
                    </a>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>
@stop
