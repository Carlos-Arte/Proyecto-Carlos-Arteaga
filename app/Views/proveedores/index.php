<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>proveedores</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

	<div>
		<h1>Proveedores</h1>
        <a href="<?= base_url('proveedores/Crear') ?>" class="btn btn-secondary">Crear Proveedor</a>
	</div>

	<div class="container">
		<table class="table table-justify table-stripped table-hover">
			<thead>
				<th>Proveedor</th>
				<th>Razón Social</th>
                <th>Producto</th>
                <th>Accion</th>
                <th>Acciones</th>
			</thead>
			<tbody>
				<?php foreach($proveedores as $proveedor): ?>
					<tr>
						<td><?= $proveedor['nombre'] ?></td>
						<td><?= $proveedor['razon_social'] ?></td>
                        <td><?= $proveedor['tipo_productos'] ?></td>
                        <td><a href="<?= base_url('proveedores/edit/'.$proveedor['nombre']) ?>" class="btn btn-danger">Editar</a></td>
                        <td>
                            ver | eliminar
                        </td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>