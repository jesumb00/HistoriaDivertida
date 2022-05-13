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
            </tr>
            @foreach ($categorias as $categoria)
            <tr><td >
                    {{$categoria->id}}
                    </td><td>
                    <a href='{{route('categorias.show',$categoria)}}'>{{$categoria->nombre}}</a>
                    </td><td>
                <form action='{{ route('categorias.destroy', $categoria) }}' method='post'>
                    @method('delete')
                    @csrf

                    <button type='submit'>(X)</button>
                </form>
                </td></tr>
            @endforeach
        </table>
        <button><a href='{{route('categorias.create')}}'>Crear</a></button>
        <button><a href='/'>Inicio</a></button>
    <x-pie lugar="listado" fecha="{{Carbon\Carbon::now()->toDateTimeString()}}"/>
    </body>
</html>
