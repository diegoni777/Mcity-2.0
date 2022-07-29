<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Reporte de alumnos</title>

        <style>
            @import 'https://fonts.googleapis.com/css2?family=Archivo&display=swap';

            body {
                font-size: 14px;
                font-family: 'Archivo', sans-serif;
            }

            h1 {
                text-align: center;
                margin-top: 55px;
            }

            .date {
                float: right;
            }

            img {
                float: left;
                width: 150px;
                height: 129px;
            }

            table {
                border-collapse: separate;
                border-spacing: 0;
                color: #4a4a4d;
                table-layout: fixed;
                width: 100%;
                text-align: center;
            }

            th,
            td {
                padding: 10px 15px;
                vertical-align: middle;
            }

            thead {
                background: #395870;
                background: linear-gradient(#49708f, #293f50);
                color: white;
            }

            tbody tr:nth-child(even) {
                background: #f0f0f2;
            }

            td {
                border-bottom: 1px solid #cecfd5;
                border-right: 1px solid #cecfd5;
            }

            td:first-child {
                border-left: 1px solid #cecfd5;
            }

            .book-title {
                color: #395870;
                display: block;
            }

            .text-offset {
                color: #7c7c80;
                font-size: 12px;
            }

            .item-stock,
            .item-qty {
                text-align: center;
            }

            .item-price {
                text-align: right;
            }

            .item-multiple {
                display: block;
            }

            tfoot {
                text-align: right;
            }

            tfoot tr:last-child {
                background: #f0f0f2;
                color: #395870;
                font-weight: bold;
            }

            tfoot tr:last-child td:first-child {
                border-bottom-left-radius: 5px;
            }

            tfoot tr:last-child td:last-child {
                border-bottom-right-radius: 5px;
            }

        </style>
    </head>

    <body>
        <h2>lista de Usuarios</h2>
        <br>
        <br>
        <div>
            
            <table>
                <thead style="background: #395870;">
                    <tr>
                        <th>ID</th>
                        <th>Matricula</th>
                        <th>Nombre</th>
                        <th>Fecha de N.</th>
                        <th>Genero</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
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
        </div>
            
    </body>

</html>
