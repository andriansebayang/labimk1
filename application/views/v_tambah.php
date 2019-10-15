<!DOCTYPE html>
<html>
<head>
	<title>CRUD Data Mahasiswa</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/gaya.css">	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/signup-form.css">
	<script src="<?php echo base_url(); ?>/assets/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
</head>
<body >
	<div class="container">
			<h2 class="jdlatas" align="center">CRUD Data MAHASISWA </h2><br>
	
	<center>
	<h2>SELAMAT DATANG DI SISTEM INFORMASI DATA MAHASISWA</h2>
<br>	
<a href="<?php echo site_url('masuk'); ?>" class="btn btn-info">Tambah Data MAHASISWA</a>
<br>
<br>
	<h3>TABEL DATA MAHASISWA</h3>

<!-- <br>
<br> -->
	<table id="customers" >
		<tr>
			<th>No</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
	<?php
	$no=1;
	foreach($data as $u){
	
	?>
	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $u->nim ?></td>
		<td><?php echo $u->nama ?></td>
		<td><?php echo $u->jenis_kelamin ?></td>
		<td><?php echo $u->alamat ?></td>
		<td>
			<a href="<?php echo site_url('masuk/edit/').$u->nim; ?>" class="btn btn-success">Edit</a>
			<a href="<?php echo site_url('masuk/hapus/').$u->nim; ?>" class="btn btn-danger">Hapus</a>	
<!-- 			<?php echo anchor('masuk/edit/'.$u->nim,'Edit'); ?> ||
 -->            <!-- <?php echo anchor('masuk/hapus/'.$u->nim,'Hapus'); ?>    --> 	
        </td>
	</tr>
	<?php }?>
	</table>
	<br>
	</center>
</div>
</body>
</html>