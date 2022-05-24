@extends('plantilles.header_detalle')
@section('principal')
    <h1>Informació del producte</h1>
    <div>
        Nom: {{ $producto->name }} <br />
        Preu: {{$producto->precio}}€ <br/>
        Pais d'origen: {{ $producto->pais }} <br />s
        kcal per unitat: {{ $producto->kcal1 }} <br />
        kcal/100g: {{ $producto->kcal100 }} <br />
        % grases/100g: {{ $producto->grasas }} <br />
        % carbohidrats/100g: {{ $producto->carbohidratos }} <br />
        % proteïnes/100g: {{ $producto->proteinas }} <br />
    </div>
    <form action="/compraRealizada/{{$producto->precio}}" method="POST">
        @csrf
        @method('put')
        <button>Comprar</button>
    </form>
@endsection
