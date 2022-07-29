<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Matricula</th>
            <th>Nombre</th>
            <th>Fecha de N.</th>
            <th>Genero</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($alumnos as $usuario)
        <tr>
            <td>{{ $usuario->idu}}</td>
            <td>{{ $usuario->nombre }}</td>
            <td>{{ $usuario->empresa }}</td>
            <td>{{ $usuario->tipou }}</td>
            <td>{{ $usuario->correo}}</td>
        </tr>
        @endforeach
    </tbody>
</table>