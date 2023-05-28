<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emprende Frustrado - CREAR Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <h4>Nuevo cliente</h4>
        <div class="row">
        <div class="col-xl-12">
            <form action="{{route('cliente.store')}}" method="post">
            @csrf
               <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" class="form-control" name="apellidos" required maxlength="50"> 
               </div>
               <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" required maxlength="30"> 
               </div>
               <div class="form-group">
                    <label for="documento">Documento</label>
                    <input type="text" class="form-control" name="documento" required maxlength="15"> 
               </div>
               <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" class="form-control" name="direccion" required maxlength="100"> 
               </div>
               <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="text" class="form-control" name="telefono" required maxlength="15"> 
               </div>
               <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" required maxlength="50"> 
               </div>
               <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Guardar">
                    <input type="reset" class="btn btn-default" value="Cancelar">
                    <a href="javascript:history.back()">Ir al listado</a>
               </div>
            </form>  
        </div> 

        </div>
    </div>
    
</body>
</html>