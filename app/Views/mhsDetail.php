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
					<?php 

						echo 'id:' . $rs['id'] . '<br/>';
						echo 'NIM:' . $rs['nim'] . '<br/>';
						echo 'Nama:' . $rs['nama'] . '<br/>';

					?>
					<br/>
					<a href="?act=edit&i=<?php echo $rs['id']; ?>" class="btn btn-primary">Edit</a>
					<a href="?act=hapus&i=<?php echo $rs['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
					<a href="?act=tampil-data" class="btn btn-default">Kembali</a>
				</div>
				<div class="col-md-4">&nbsp;</div>
			</div>
		</div>
	</body>
</html>