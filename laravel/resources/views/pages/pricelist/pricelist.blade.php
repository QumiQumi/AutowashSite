@extends('layouts.default')
@section('content')

<div class="tabs" id="about">
    <div class="container ">
            <div class="t-head">
                    <h3 class="head">Прайс</h3>
            </div>
        <form method="post" action="{{route('pricelist.store')}}">
            @csrf
            <table id='tabl' class="table table-bordered table-hover">
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
                        </tr>
                    @endforeach
                    @can('admin-panel')
                    <tr>
                        <td>
                            <input type='text' name='name' required>
                        </td>
                        @php
                        $i=0;
                        @endphp
                        @foreach (App\Car::all()->sortBy('id') as $car)
                        <td>
                            <input type='number' name='price[{{$car->id}}]' min='0' required>
                        </td>
                        @endforeach
                    </tr>
                    @endcan
                </tbody>
            </table>
            @can('admin-panel')
            <button type="submit" class="btn btn-default btn-block">Создать услугу</button>
            @endcan
        {{-- <input type='button' value='Ещё' onClick='add();'> --}}
        </form>
    </div>
</div>
@stop
@section('scripts')
<script language="JavaScript">
    function add(){
   var addTR = document.getElementById('tabl').insertRow(-1);
   @foreach ($pricelist as $item)
   var addTD =addTR.insertCell(-1);
   addTD.innerHTML = "<input type='text' name='1'>";
   @endforeach
   }
</script>


@endsection
