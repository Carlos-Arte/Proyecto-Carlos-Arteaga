<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Productos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

	<div>
		<h1>Productos</h1>
	</div>

	<div class="container">
		<table class="table table-justify table-stripped table-hover">
			<thead>
				<th>SKU</th>
				<th>Nombre del producto</th>
                <th>Nombre Corto</th>
                <th>Descripción</th>
                <th>Imagen</th>
                <th>Precio de venta</th>
                <th>Precio Compra</th>
                <th>Accion</th>
                <th>Acciones</th>
			</thead>
			
			<tbody>
				<?php foreach($productos as $productos): ?>
					<tr>
						<td><?= $productos['sku'] ?></td>
						<td><?= $productos['nombre_producto'] ?></td>
                        <td><?= $productos['nombre_corto'] ?></td>
                        <td><?= $productos['descripcion'] ?></td>
                        <td><?= $productos['imagen'] ?></td>
                        <td><?= $productos['precio_venta'] ?></td>
                        <td><?= $productos['precio_compra'] ?></td>
                        <td><a href="<?= base_url('productos/edit/'.$productos['sku']) ?>" class="btn btn-primary">Editar</a></td>
                        <td>
                            ver | eliminar
                        </td>
					</tr>
				<?php endforeach; ?>
			</tbody>

		</table>
	</div>
<a href="<?= base_url('productos/nuevo') ?>" class="btn btn-success">Crear producto</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>