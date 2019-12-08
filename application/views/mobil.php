<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>

<body>
	<div class="panel-body">
		<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nama</th>
					<th>Tipe Mobil</th>
					<th>Kapasitas</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($mobil as $key) {?>
				<tr>
					<td><?php echo $key->id ?></td>
					<td><?php echo $key->nama ?></td>
					<td><?php echo $key->tipe_mobil ?></td>
					<td><?php echo $key->kapasitas ?></td>
				</tr>
				<?php }?>
			</tbody>
		</table>

		<!-- /.panel-body -->
	</div>
</body>

</html>
