<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-list"></i> Usuarios </header>
	
	<div class="row wrapper">
		<div class="col-sm-2 m-b-xs">
			<a href="admin.php?m=UsuariosAgregar" class="pull-left btn btn-sm btn-success"><i class="fa fa-plus"></i> Nuevo Usuario </a>
		</div>
		<div class="col-sm-7 m-b-xs text-center"></div>
		<div class="col-sm-3">
			<div class="input-group">
				<input type="text" class="input-sm form-control" placeholder="Buscar"> <span class="input-group-btn"> <button class="btn btn-sm btn-default" type="button"> <i class="fa fa-search"></i> </button> </span>
			</div>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-striped b-t b-light">
			<thead>
				<tr>
					<th width="150">Privilegios</th>
					<th>Nombre</th>
					<th width="200">Nombre de Usuario</th>
					<th width= "150">Ultimo Acceso</th>
					<th width="120"></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>columna 1 </td>
					<td>columna 2 </td>
					<td>columna 3 </td>
					<td>192.168.0.255</td>
					<td>
						<a href="admin.php?m=clientesEditar&id=" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="admin.php?m=clientes&del=" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>
				<tr>
					<td>columna 3 </td>
					<td>columna 2 </td>
					<td>columna 3 </td>
					<td>192.168.0.254</td>
					<td>
						<a href="admin.php?m=clientesEditar&id=" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="admin.php?m=clientes&del=" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>

			</tbody>
		</table>
	</div>

</section>