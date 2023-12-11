<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Proveedor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    
<div class="container">

    <div class="card">
        <div class="card-header">
            <h3>Formulario de registro de Proveedores</h3>
        </div>

        <div class="card-body">
        <form action="<?= site_url('proveedores') ?>" method="post">
        <div class="form-group">
            <label for="">Nombre del Proveedor:</label>
            <input class="form-control" type="text" name="nombre" id="" required>
        </div>

        <div class="form-group">
            <label for="">Razón Social del Proveedor:</label>
            <input class="form-control" name="razon_social" id="" cols="30" rows="10"></input>
        </div>

        
        <div class="form-group">
            <label for="">Productos:</label>
            <input class="form-control" name="tipo_productos" id="" cols="30" rows="10"></input>
        </div>

        <div class="form-group mt-5">
            <input type="submit" class="btn btn-outline-success" value="Guardar">
        </div>
    </form>
        </div>
    </div>

    
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</body>
</html>