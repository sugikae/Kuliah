<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Daftar Penghuni</title>
	<link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.css">
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<div class="collapse navbar-collapse navbar-ex1-collapse text-center">
				<h2> DAFTAR PENGHUNI KOS KOS AN </h2>
			</div>
		</div>
	</nav>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar">a</span>
					<span class="icon-bar">a</span>
					<span class="icon-bar">a</span>
				</button>
				<!-- <a class="navbar-brand" href=" ">About Me</a> -->
		
			</div>
			<!-- <button type="button" class="btn btn-default"><a href="C_koneksi/insert">Tambah Data</a></button> -->
			<button type="button" class="btn btn-default"><a href="C_insert_formValidation/insert">Tambah Data</a></button>
			
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<h1 class="text-center">Objek</h1>
				<table class="table table-bordered text-center"> 
					<thead>
						<tr>
							<td>ID</td>
							<td>Nama</td>
							<td>Alamat</td>
							<td>Nama Ortu</td>
							<td>Nomer HP</td>
							<td>Tanggal Masuk</td>
							<td>Action</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($objek as $key) {?>
						<tr>
							<td><?php echo $key->ID; ?></td>
							<td><?php echo $key->nama; ?></td>
							<td><?php echo $key->alamat; ?></td>
							<td><?php echo $key->nama_ortu; ?></td>
							<td><?php echo $key->nomer_hp; ?></td>
							<td><?php echo $key->tanggal_masuk; ?></td>
							<td><button class="btn btn-success" type=""><a href="<?php echo base_url('C_koneksi/select_edit_data/'.$key->ID);?>">Edit</a></button>
							<button class="btn btn-warning" type=""><a href="<?php echo base_url('C_koneksi/select_delete_data/'.$key->ID);?>">Delete</a></button></td>
							

						</tr>
						<?php } ?>
					
					</tbody> 
				</table>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
</body>
</html>
<script src="<?=base_url()?>assets/bootstrap/js/jquery.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.js" type="text/javascript"></script>