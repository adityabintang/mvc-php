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
				<div class="col-md-4"><h3>Edit Data Mahasiswa</h3>
					<form method="post" action="/mvc-example/?act=update">
					  <input type="hidden" name="id" value="<?php echo $rs['id']; ?>">
					  <div class="form-group">
					    <label for="exampleInputNim">NIM</label>
					    <input type="text" class="form-control" id="exampleInputNim" name="nim" placeholder="NIM" value="<?php echo $rs['nim']; ?>">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputNama">Nama</label>
					    <input type="text" class="form-control" id="exampleInputNama" name="nama" placeholder="Nama" value="<?php echo $rs['nama']; ?>">
					  </div>

					  <button type="submit" class="btn btn-default">Update</button>
					  <a href="/mvc-example/?act=tampil-data" class="btn btn-default">Batal</a>
					</form>
				</div>
				<div class="col-md-4">&nbsp;</div>
			</div>
		</div>
	</body>
</html>
