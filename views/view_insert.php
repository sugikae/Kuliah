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
								  	
		<?php echo form_open('C_insert_formValidation/insert'); ?>
	       <h3>Masukkan Data Penghuni</h3>
	       <div class='alert alert-warning'><?php echo validation_errors();?></div>
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
	       	  			<td><input type="text" name="" value="" placeholder="<?php echo $last->ID+1; ?>" class="form form-control" disabled></td>
	       	  		</tr>
	       	  		<tr>
	       	  			<td>Nama</td>
	       	  			<td><input type="text" name="in_nama" value="<?php  echo set_value('in_nama');?>" placeholder="" class="form form-control"></td>
	       	  		</tr>
	       	  		<tr>
	       	  			<td>Alamat</td>
	       	  			<td><input type="text" name="in_alamat" value="<?php  echo set_value('in_alamat');?>" placeholder="" class="form form-control"></td>
	       	  		</tr>
	       	  		<tr>
	       	  			<td>Nama Orang Tua</td>
	       	  			<td><input type="text" name="in_ortu" value="<?php  echo set_value('in_ortu');?>" placeholder="" class="form form-control"></td>
	       	  		</tr>
	       	  		<tr>
	       	  			<td>Nomor Telepon</td>
	       	  			<td><input type="text" name="in_nope" value="<?php  echo set_value('in_nope');?>" placeholder="" class="form form-control"></td>
	       	  		</tr>
	       	  		<tr>
	       	  			<td>Tanggal Masuk</td>
	       	  			<td><input type="text" name="" value="<?php echo date('Y-m-d'); ?>" placeholder="" class="form form-control"></td>
	       	  		</tr>
	       	  		<tr>
	       	  		<td></td>
	       	  			<td>
	       	  				<input type="submit" name="" value="INSERT" class="btn btn-success"> 
							<button type="button" class="btn btn-warning"><a href="<?=base_url()?>C_insert_formValidation">BACK</a></button>
	       	  			</td>

	       	  		</tr>
	       	  	</tbody>
	       	  </table>  
               
        <?php echo form_close();?>

		</div>
		</div>
	</div>
</body>
</html>
<script src="<?=base_url()?>assets/bootstrap/js/jquery.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.js" type="text/javascript"></script>