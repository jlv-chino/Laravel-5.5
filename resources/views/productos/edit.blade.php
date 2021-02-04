@extends('../layouts.plantilla')

@section('cabecera')

    EDITAR REGISTROS

@endsection

@section('contenido')

    {!! Form::model($producto, ['method'=>'POST', 'action'=>['ProductosController@update', $producto->id]]) !!}    

        <table>
            <tr>
               <td>Nombre:</td>
                
               <td><input type="text" name="NombreArticulo" value="{{$producto->NombreArticulo}}">
                  {{csrf_field()}}
               </td>  
            </tr>  

            <tr>
                <td>Sección</td>
                <td><input type="text" name="Seccion" value="{{$producto->Seccion}}"></td>
            </tr>

            <tr>
                <td>Precio</td>
                <td><input type="text" name="Precio" value="{{$producto->Precio}}"></td>
            </tr>

            <tr>
                <td>Fecha</td>
                <td><input type="text" name="Fecha" value="{{$producto->Fecha}}"></td>
            </tr>

            <tr>
                <td>País de origen</td>
                <td><input type="text" name="PaisOrigen" value="{{$producto->PaisOrigen}}"></td>
            </tr>

            <tr>
                <td><input type="submit" value="Actualizar" name="Actualizar"></td> 
                <td><input type="reset" value="Vaciar" name="Vaciar"></td> 
            </tr>
        </table>

    {!! Form::close() !!}

    {!! Form::open(['method'=>'DELETE', 'action'=>['ProductosController@destroy', $producto->id]]) !!}    
     
    {{csrf_field()}}

    <input type="hidden" name="_method" value="DELETE">

    <input type="submit" value="Eliminar">

    {!! Form::close() !!}

@endsection

@section('pie')
    
@endsection