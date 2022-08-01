<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Sub_total</th>
            <th>total</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($vent as $venta)
        <tr>
            <td>{{ $venta->id}}</td>
            <td>{{ $venta->producto }}</td>
            <td>{{ $venta->precio }}</td>
            <td>{{ $venta->cantidad}}</td>
            <td>{{ $venta->sub_total}}</td>
            <td>{{ $venta->total}}</td>
        </tr>
        @endforeach
    </tbody>
</table>