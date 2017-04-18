<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>INSERT</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
		<div class="col-md-6">
								  	
		<form action="<?=base_url()?>C_koneksi/proses_Edit" method="POST">
	       <h3>Masukkan Data Penghuni</h3>
	       	<table class="table table-bordered">

	       	  	<thead>
	       	  		<tr>
	       	  			<th>Title</th>
	       	  			<th>Data</th>
	       	  		</tr>
	       	  	</thead>
	       	  	<tbody>
	       	  		<tr>
	       	  			<td>ID</td>
	       	  			<td><input type="text" name="ID" value="<?php echo $ID->ID; ?>" placeholder="" class="form form-control"></td>
	       	  		</tr>
	       	  		<tr>
	       	  			<td>Nama</td>
	       	  			<td><input type="text" name="nama" value="<?php echo $ID->nama; ?>" placeholder="" class="form form-control"></td>
	       	  		</tr>
	       	  		<tr>
	       	  			<td>Alamat</td>
	       	  			<td><input type="text" name="alamat" value="<?php echo $ID->alamat; ?>" placeholder="" class="form form-control"></td>
	       	  		</tr>
	       	  		<tr>
	       	  			<td>Nama Orang Tua</td>
	       	  			<td><input type="text" name="nama_ortu" value="<?php echo $ID->nama_ortu; ?>" placeholder="" class="form form-control"></td>
	       	  		</tr>
	       	  		<tr>
	       	  			<td>Nomor Telepon</td>
	       	  			<td><input type="text" name="nomer_hp" value="<?php echo $ID->nomer_hp; ?>" placeholder="" class="form form-control"></td>
	       	  		</tr>
	       	  		<tr>
	       	  			<td>Tanggal Masuk</td>
	       	  			<td><input type="text" name="tanggal_masuk" value="<?php echo $ID->tanggal_masuk; ?>" placeholder="" class="form form-control"></td>
	       	  		</tr>
	       	  		<tr>
	       	  		<td></td>
	       	  			<td>
	       	  				<input type="submit" name="" value="SAVE" class="btn btn-success"> 
	       	  			</td>

	       	  		</tr>
	       	  	</tbody>
	       	  </table>  
               
        </form>

		</div>
		</div>
	</div>
</body>
</html>
<script src="<?=base_url()?>assets/bootstrap/js/jquery.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.js" type="text/javascript"></script>