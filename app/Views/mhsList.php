<html>
	<head>
		<title>Native MVC Example</title>
		<link rel="stylesheet" href="/mvc-example/assets/css/bootstrap.css" />
		<script type="text/javascript" src="/mvc-example/assets/js/bootstrap.js"></script>
	</head>
	<body>
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-4">&nbsp;</div>
				<div class="col-md-4"><h3>Data Mahasiswa</h3>
					<table class="table table-responsive table-bordered table-striped">
						<tr>
							<td>No</td>
							<td>NIM</td>
							<td>Nama</td>
							<td>Aksi</td>
						</tr>
						<?php 

							foreach ($rs as $mahasiswa => $list)
							{
								echo '<tr>
								<td><a href="?act=tampil-data&i='.$list['id'].'">'.$list['id'].'</a></td>
								<td>'.$list['nim'].'</td>
								<td>'.$list['nama'].'</td>
								<td><a href="?act=edit&i='.$list['id'].'">Edit </a> | <a href="?act=hapus&i='.$list['id'].'">Delete </a> </td>
								</tr>'
								;
								
							}

						?>
					</table>
				</div>
				<div class="col-md-4">&nbsp;</div>
			</div>
		</div>
	</body>
</html>
