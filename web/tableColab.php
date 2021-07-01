<?php
	require_once 'logica/root.php';
	$sql = "SELECT id, aPaterno, aMaterno, nombre, email FROM empleado";
	$result = mysqli_query($conn, $sql);
?>

<div>
	<table class="table table-hover table-condensed table-bordered" id="iddatatable">
		<thead style="background-color: #dc3545;color: white; font-weight: bold;">
			<tr>
				<td>Nombre</td>
				<td>Apellido Paterno</td>
				<td>Apellido Materno</td>
				<td>Email</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			<tr>
				<td>Nombre</td>
				<td>Apellido Paterno</td>
				<td>Apellido Materno</td>
				<td>Email</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
		</tfoot>
		<tbody>
			<?php while($mostrar = mysqli_fetch_row($result)){ ?>
			<tr>
				<td><?php echo $mostrar[1] ?></td>
				<td><?php echo $mostrar[2] ?></td>
				<td><?php echo $mostrar[3] ?></td>
				<td><?php echo $mostrar[4] ?></td>
				<td style="text-align: center;">
					<span class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modalEdit"
					onclick="agregarDatos('<?php echo $mostrar[0] ?>')">
						<span class="fa fa-pencil-square-o"></span>
					</span>
				</td>
				<td style="text-align: center;">
					<span class="btn btn-danger btn-xs" onclick="eliminarDatos('<?php echo $mostrar[0] ?>')">
						<span class="fa fa-trash"></span>
					</span>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>

<script>
	$(document).ready(function() {
		$('#iddatatable').DataTable();
	} );
</script>
