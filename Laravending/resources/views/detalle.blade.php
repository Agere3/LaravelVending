@extends('plantilles.header_detalle')
@section('principal')
    <h1>Información del producto</h1>
    <div>
        Nombre: {{ $producto->name }} <br />
        Pais de origen: {{ $producto->pais }} <br />
        kcal por unidad: {{ $producto->kcal1 }} <br />
        kcal/100g: {{ $producto->kcal100 }} <br />
        % grasas/100g: {{ $producto->grasas }} <br />
        % carbohidratos/100g: {{ $producto->carbohidratos }} <br />
        % proteinas/100g: {{ $producto->proteinas }} <br />
    </div>
    <form action="/compraRealizada" method="POST">
        @csrf
        <button>Comprar</button>
    </form>
@endsection
