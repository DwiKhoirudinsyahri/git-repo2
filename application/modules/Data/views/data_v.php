<?php echo $add_button;?>

<div class="row">
	<div class="col-md-12">
		<table class="table table-stripped table-bordered">
			<thead>
				<th>No</th>
				<th>Nomor KK</th>
				<th>Alamat</th>
				<th>Petugas</th>
				<th>Tanggal Pendataan</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php 
					if($data_tabel!==""){
					echo $data_tabel;	
					} else { ?>
				<tr>
					<td colspan="6"><center>Tidak Ada Data</center></td>
				</tr>	<?php }	?>
			</tbody>
		</table>
	</div>
</div>