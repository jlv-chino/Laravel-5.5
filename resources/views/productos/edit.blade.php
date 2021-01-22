@extends('../layouts.plantilla')

@section('cabecera')

    EDITAR REGISTROS

@endsection

@section('contenido')

    <form action="/productos" method="POST">

        <table>
            <tr>
               <td>Nombre:</td>
                
               <td><input type="text" name="NombreArticulo">
                  {{csrf_field()}}
               </td>  
            </tr>  

            <tr>
                <td>Sección</td>
                <td><input type="text" name="Seccion"></td>
            </tr>

            <tr>
                <td>Precio</td>
                <td><input type="text" name="Precio"></td>
            </tr>

            <tr>
                <td>Fecha</td>
                <td><input type="text" name="Fecha"></td>
            </tr>

            <tr>
                <td>País de origen</td>
                <td><input type="text" name="PaisOrigen"></td>
            </tr>

            <tr>
                <td><input type="submit" value="Enviar" name="Enviar"></td> 
                <td><input type="reset" value="Borrar" name="Borrar"></td> 
            </tr>
        </table>

    </form>

@endsection

@section('pie')
    
@endsection