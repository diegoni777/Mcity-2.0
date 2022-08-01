<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Producto</th>
            <th>Codigo</th>
            <th>tipo</th>
            <th>precio</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produ as $pro)
        <tr>
            <td>{{ $pro->idp}}</td>
            <td>{{ $pro->producto }}</td>
            <td>{{ $pro->codigo }}</td>
            <td>{{ $pro->tipo}}</td>
            <td>{{ $pro->precio}}</td>
        </tr>
        @endforeach
    </tbody>
</table>