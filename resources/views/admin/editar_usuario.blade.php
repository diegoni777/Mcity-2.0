<!DOCTYPE html>
<html lang="es-mx">
<head>
<link rel="stylesheet" href="https://bootswatch.com/5/cyborg/bootstrap.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edición de Usuarios</title>
    <div class="container mt-2">
        <div class="card">
            <div class="card-body bg-primary mt-2 ">
              
            </div>
        </div>
    </div>

    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
   
    
</head>
    
</head>


<body>
    <center>
         <h2>Editar Registro de Usuario</h2>
         <br>
         <form action="{{ route('salvarusu', ['idu' => $usuarios->idu]) }}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
          <table>
            <tr>
              <td>Id Usuario</td>
              <td><input type="text" name="idu" value="{{ $usuarios->idu }}"  readonly>
          </td>
          </tr>

     <tr>
     <td>Nombre:</td>
     <td><input type="text" name="nombre" value="{{ $usuarios->nombre }}"></td>
     </tr>

     <tr>
     <td>Empresa:</td>
     <td><input type="text" name="empresa" value="{{ $usuarios->empresa }}" readonly></td>
     </tr>

     </tr>
     <td>Detalles:</td>
     <td><input type="text" name="detalles" value="{{ $usuarios->detalles }}" readonly></td>
     </td>
     </tr>
     </tr>
     <td>Tipo de Usuario:</td>
     <td><select type="text" name="tipou" value="{{ $usuarios->tipou }}">
        <option>usuario</option>
        <option>admin</option>
    </select></td>
     </tr>
     <td>Foto:</td>
     <td><input type="file" name="fotou1"></td>
     <td><input type="text" name="fotou" value="{{ $usuarios->fotou }}"></td>
</td>
</tr>
     <td>Correo:</td>
     <td><input type="text" name="correo" value="{{ $usuarios->correo }}"></td>
     </td>
     </tr>    
          <tr>
          <td colspan="2">
               <input type="submit" value="Salvar"> | <a href="{{ route('admin') }}">Regresar</a>
          </td>
     </tr>
         </table>
     </form>
     </center>
</body>
</html>