@extends('../layouts.plantilla')

@section('cabecera')

    EDITAR REGISTROS

@endsection

@section('contenido')

    <form action="/productos/{{$producto->id}}" method="POST">

        <table>
            <tr>
               <td>Nombre:</td>
                
               <td><input type="text" name="NombreArticulo" value="{{$producto->NombreArticulo}}">
                  {{csrf_field()}}
                  <input type="hidden" name="_method" value="PUT">
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

    </form>

    <form action="/productos/{{$producto->id}}" method="post">  

    {{csrf_field()}}

    <input type="hidden" name="_method" value="DELETE">

    <input type="submit" value="Eliminar">

    </form>

@endsection

@section('pie')
    
@endsection