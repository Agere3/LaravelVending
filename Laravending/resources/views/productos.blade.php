@extends('plantilles.header')
@section('principal')
    <table id="products">
        <tr>
            <td>
                <img id="1" src="/images/{{$listado[0]->img}}.jpg" onclick="window.location='{{ url('consulta/1') }}'">
                <h4>{{$listado[0]->precio}}€</h4>
            </td>
            <td>
                <img id="2" src="/images/{{$listado[1]->img}}.jpg" onclick="window.location='{{ url('consulta/2') }}'">
                <h4>{{$listado[1]->precio}}€</h4>
            </td>
            <td>
                <img id="3" src="/images/{{$listado[2]->img}}.jpeg" onclick="window.location='{{ url('consulta/3') }}'">
                <h4>{{$listado[2]->precio}}€</h4>
            </td>
            <td>
                <img id="4" src="/images/{{$listado[3]->img}}.jpg" onclick="window.location='{{ url('consulta/4') }}'">
                <h4>{{$listado[3]->precio}}€</h4>
            </td>
        </tr>
        <tr>
            <td>
                <img id="5" src="/images/{{$listado[4]->img}}.jpg" onclick="window.location='{{ url('consulta/5') }}'">
                <h4>{{$listado[4]->precio}}€</h4>
            </td>
            <td>
                <img id="6" src="/images/{{$listado[5]->img}}.jpg" onclick="window.location='{{ url('consulta/6') }}'">
                <h4>{{$listado[5]->precio}}€</h4>
            </td>
            <td>
                <img id="7" src="/images/{{$listado[6]->img}}.jpg" onclick="window.location='{{ url('consulta/7') }}'">
                <h4>{{$listado[6]->precio}}€</h4>
            </td>
            <td>
                <img id="8" src="/images/{{$listado[7]->img}}.jpg" onclick="window.location='{{ url('consulta/8') }}'">
                <h4>{{$listado[7]->precio}}€</h4>
            </td>
        </tr>
        <tr>
            <td>
                <img id="9" src="/images/{{$listado[8]->img}}.jpg" onclick="window.location='{{ url('consulta/9') }}'">
                <h4>{{$listado[8]->precio}}€</h4>
            </td>
            <td>
                <img id="10" src="/images/{{$listado[9]->img}}.jpeg" onclick="window.location='{{ url('consulta/10') }}'">
                <h4>{{$listado[9]->precio}}€</h4>
            </td>
            <td>
                <img id="11" src="/images/{{$listado[10]->img}}.jpg" onclick="window.location='{{ url('consulta/11') }}'">
                <h4>{{$listado[10]->precio}}€</h4>
            </td>
            <td>
                <img id="12" src="/images/{{$listado[11]->img}}.jpg" onclick="window.location='{{ url('consulta/12') }}'">
                <h4>{{$listado[11]->precio}}€</h4>
            </td>
        </tr>
    </table>
@endsection
