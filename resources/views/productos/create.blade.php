@extends('../layouts.plantilla')

@section('cabecera')
    
@endsection

@section('contenido')

    <form action="/productos" method="POST">

        <input type="text" name="NombreArticulo">

        {{csrf_field()}}

        <input type="submit" value="Enviar" name="Enviar">

    </form>

@endsection

@section('pie')
    
@endsection