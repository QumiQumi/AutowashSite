@extends('layouts.default')
@section('content')

<h1>Прайс</h1>
<table class="table table-light">
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

        <tr>
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
        </tr>

        @endforeach
    </tbody>

</table>

@stop
