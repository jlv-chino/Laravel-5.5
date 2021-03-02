@extends('../layouts.plantilla')

@section('cabecera')

    INSERTAR REGISTROS

@endsection

@section('contenido')

    {!! Form::open(['url' => '/productos', 'method' => 'POST']) !!}    

        <table>
            <tr>
               <td>{!! Form::label('NombreArticulo', 'Nombre del artículo') !!}</td>
               <td>{!! Form::text('NombreArticulo') !!}
                  {{csrf_field()}}
               </td>  
            </tr>  

            <tr>
                <td>{!! Form::label('Seccion', 'Sección') !!}</td>
                <td>{!! Form::text('Seccion') !!}</td>
            </tr>

            <tr>
                <td>{!! Form::label('Precio', 'Precio') !!}</td>
                <td>{!! Form::text('Precio') !!}</td>
            </tr>

            <tr>
                <td>{!! Form::label('Fecha', 'Fecha') !!}</td>
                <td>{!! Form::text('Fecha') !!}</td>
            </tr>

            <tr>
                <td>{!! Form::label('PaisOrigen', 'País de origen') !!}</td>
                <td>{!! Form::text('PaisOrigen') !!}</td>
            </tr>

            <tr>
                <td>{!! Form::submit('Enviar') !!}</td> 
                <td>{!! Form::reset('Borrar') !!}</td> 
            </tr>
        </table>
    {!! Form::close() !!}    

    @if (count($errors)>0)

        <ul>
            @foreach ($errors->all() as $error)

               <li>{{$error}}</li> 
                
            @endforeach
        </ul>
        
    @endif

@endsection

@section('pie')
    
@endsection