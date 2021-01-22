@extends('../layouts.plantilla')

@section('cabecera')

    LEER REGISTROS

@endsection

@section('contenido')
<table border="1">
    <tr>
        <td>Nombre Artículo</td>
        <td>Sección</td>
        <td>Precio</td>
        <td>Fecha</td>
        <td>País de Origen</td>
    </tr>
        @foreach($productos as $producto)
            <tr>
                <td><a href="{{route('productos.show', $producto->id)}}">{{$producto->NombreArticulo}}</a></td>
                <td>{{$producto->Seccion}}</td>
                <td>{{$producto->Precio}}</td>
                <td>{{$producto->Fecha}}</td>
                <td>{{$producto->PaisOrigen}}</td>
            </tr>
        @endforeach
</table>

@endsection

@section('pie')
    
@endsection