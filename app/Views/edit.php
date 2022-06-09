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
				<div class="col-md-4"><h3>Edit data Anda di sini</h3>
				
					<form method="post"  action = "/mvc-example/?act=update&i=<?php echo '' . $rs['id'] . '';?>" >

					  <div class="form-group">
					    <label for="exampleEditNim">NIM</label>
					    <input type="text" class="form-control" id="exampleEditNim" name="nim" value="<?php echo '' . $rs['nim'] . '';?>">
					  </div>
					  <div class="form-group">
					    <label for="exampleEditNama">Nama</label>
					    <input type="text" class="form-control" id="exampleEditNama" name="nama" value="<?php echo '' . $rs['nama'] . '';?>">
					  </div>
					  <div class="form-group">
					    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo '' . $rs['id'] . '';?>">
					  </div>
					  <button type="submit" class="btn btn-default" >Update</button>
					</form>
					<br/>
					<a href="/mvc-example/?act=tampil-data">Lihat Hasil Input</a>
				</div>
				<div class="col-md-4">&nbsp;</div>
			</div>
		</div>
	</body>
</html>
