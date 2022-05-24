@extends('plantilles.header')
@section('principal')
    <table id="products">
        <tr>
            <td>
                <img id="1" src="{{URL::asset('/images/cafe.jpg')}}" onclick="window.location='{{ url('detalle/1') }}'" onclick="window.location='{{ url('detalle/1') }}'">
                <h4>3€</h4>
            </td>
            <td>
                <img id="2" src="{{URL::asset('/images/donut_choco.jpg')}}" onclick="window.location='{{ url('detalle/2') }}'">
                <h4>3€</h4>
            </td>
            <td>
                <img id="3" src="{{URL::asset('/images/doritos.jpg')}}" onclick="window.location='{{ url('detalle/3') }}'">
                <h4>3€</h4>
            </td>
            <td>
                <img id="4" src="{{URL::asset('/images/magic_booster.jpg')}}" onclick="window.location='{{ url('detalle/4') }}'">
                <h4>3€</h4>
            </td>
        </tr>
        <tr>
            <td>
                <img id="5" src="{{URL::asset('/images/bocadillo.jpg')}}" onclick="window.location='{{ url('detalle/5') }}'">
                <h4>3€</h4>
            </td>
            <td>
                <img id="6" src="{{URL::asset('/images/chuches.jpg')}}" onclick="window.location='{{ url('detalle/6') }}'">
                <h4>3€</h4>
            </td>
            <td>
                <img id="7" src="{{URL::asset('/images/cerveza.jpeg')}}" onclick="window.location='{{ url('detalle/7') }}'">
                <h4>3€</h4>
            </td>
            <td>
                <img id="8" src="{{URL::asset('/images/palomitas.jpg')}}" onclick="window.location='{{ url('detalle/8') }}'">
                <h4>3€</h4>
            </td>
        </tr>
        <tr>
            <td>
                <img id="9" src="{{URL::asset('/images/.jpg')}}" onclick="window.location='{{ url('detalle/9') }}'">
                <h4>3€</h4>
            </td>
            <td>
                <img id="10" src="{{URL::asset('/images/.jpg')}}" onclick="window.location='{{ url('detalle/10') }}'">
                <h4>3€</h4>
            </td>
            <td>
                <img id="11" src="{{URL::asset('/images/.jpg')}}" onclick="window.location='{{ url('detalle/11') }}'">
                <h4>3€</h4>
            </td>
            <td>
                <img id="12" src="{{URL::asset('/images/.jpg')}}" onclick="window.location='{{ url('detalle/12') }}'">
                <h4>3€</h4>
            </td>
        </tr>
    </table>
@endsection
