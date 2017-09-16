@extends('app')
@section('content')
    <section class="order-list section-block">
        <div class="container">
            <div class="headline">
                <span>Užsakymų sąrašas</span>
            </div>
            <div class="content">
                <div class="pull-right col-md-5 search">
                    <form action="{{route('orders.page')}}" method="get">
                        <div class="form-group">
                            <input type="text" placeholder="Paieška" name="search" value="{{(request()->get('search'))?request()->get('search'):null}}">
                            <div class="pull-right">
                                @if(request()->get('search'))
                                    <a href="{{route('orders.page')}}" class="text-danger">Išvalyti</a>
                                @endif
                                <input type="submit" class="bt bt-info">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="clearfix"></div>
                @if($orders->isnotEmpty())
                <div class="table-holder">
                    <table id="order-table" class="table">
                        <thead>
                            <tr>
                                <th data-id="0">Vardas Pavardė</th>
                                <th data-id="1">El.pašto adresas</th>
                                <th data-id="2">Amžius</th>
                                <th data-id="3">Ūgis</th>
                                <th data-id="4">Svoris</th>
                                <th>Nuotraukos</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $key => $order)
                                <tr>
                                    <td>{{$order->name}}</td>
                                    <td>{{$order->email}}</td>
                                    <td>{{$order->age}}</td>
                                    <td>{{$order->height}}</td>
                                    <td>{{$order->weight}}</td>
                                    <td>
                                        @foreach($order->images as $key => $image)
                                            <a target="_blank" href="{{asset($image->image)}}">{{++$key}}</a>
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                    <p>Nieko nerasta...</p>
                @endif
                @if(!request()->get('search'))
                    <div class="pull-right">
                    {{$orders->links()}}
                    </div>
                @endif

            </div>
        </div>
    </section>
@endsection