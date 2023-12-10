<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    
<div class="container">

    <div class="card">
        <div class="card-header">
            <h3>Registro de Productos</h3>
        </div>

        <div class="card-body">
        <form action="<?= site_url('productos') ?>" method="post">
        <div class="form-group">
            <label for="">SKU:</label>
            <input class="form-control" type="text" name="sku" id="" required>
        </div>

        <div class="form-group">
            <label for="">Nombre del producto:</label>
            <input class="form-control" name="nombre_producto" id="" required cols="30" rows="10"></input>
        </div>

        <div class="form-group">
            <label for="">Nombre Corto:</label>
            <input class="form-control" name="nombre_corto" id="" required cols="30" rows="10"></input>
        </div>

        <div class="form-group">
            <label for="">Descripción del Producto:</label>
            <textarea class="form-control" name="descripcion" id="" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group">
            <label for="">Imagen:</label>
            <input class="form-control" name="imagen" id="" cols="30" rows="10"></input>
        </div>

        <div class="form-group">
            <label for="">Precio de venta:</label>
            <input class="form-control" name="precio_venta" id=""  cols="30" rows="10"></input>
        </div>

        <div class="form-group">
            <label for="">Precio Compra:</label>
            <input class="form-control" name="precio_compra" id=""  cols="30" rows="10"></input>
        </div>       


        <div class="form-group mt-5">
            <input type="submit" class="btn btn-success" value="Guardar">
        </div>
    </form>
        </div>
    </div>

    
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</body>
</html>