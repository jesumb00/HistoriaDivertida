<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
    <body>
    <x-menu />
        <h2>Categoria</h2>
        <table>
            <tr>
                <td >Id</td>
                <td >Nombre</td>
                <td>Apellidos</td>
                <td>Telefono</td>
                <td>Estrella</td>
                <td>Categoria_id</td>
                <td>Eliminar</td>
            </tr>
            @foreach ($personas as $persona)
            <tr><td >
                    {{$persona->id}}
                    </td><td>
                    <a href='{{route('personas.show',$persona)}}'>{{$persona->nombre}}</a>
                    </td>
                    <td>
                        <a href='{{route('personas.show',$persona)}}'>{{$persona->apellidos}}</a>
                    </td>
                    <td>
                        <a href='{{route('personas.show',$persona)}}'>{{$persona->telefono}}</a>
                    </td>
                    <td>
                        <form action='{{route('personas.update',$persona)}}' method='POST' >
                            @method('PUT')
                        @if($persona->estrella==true)
                            <p id='estrella'>⚝<input type="submit" name="estrellaSi" value='si'></p>
                        @else
                            <p >⚝<input type="submit" name="estrellaNo" value='no'></p>
                        @endif
                        </form>
                    </td>
                    <td>
                        <a href='{{route('personas.show',$persona)}}'>{{$persona->categoria_id}}</a>
                    </td><td>
                    <form action='{{ route('personas.destroy', $persona) }}' method='post'>
                        @method('delete')
                        @csrf

                        <button type='submit'>(X)</button>
                    </form>
                </td></tr>
            @endforeach
        </table>
        <button><a href='{{route('personas.create')}}'>Crear</a></button>
        <button><a href='/'>Inicio</a></button>
    <x-pie lugar="listado" fecha="{{Carbon\Carbon::now()->toDateTimeString()}}"/>
    </body>
</html>
