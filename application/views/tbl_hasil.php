<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
		<tilte>Hasil bayar</title>
		<?php 
		$this->load->view('kepala');
		?>
		<style>
				tr {
						
						border:1px solid #000;
				}
				table {
						
						border:1px solid #000
				}
				tr:nth-child(odd) {
						
						background:#eee
				}
				
		</style>
</head>
<body>
<div data-role="page" data-add-back-btn="true" >
    <div data-role="header">
        <h1>Hasil Bayar</h1>
    </div><!-- /header -->
	
    <div data-role="content">
    <!--- Batas tabel
		<table style="text-align: center; position: fixed{ top: 20px, left: 10px}" >
				<tr style="background: #ddd">
						<td align="center">
								<b>No.</b>
						</td>
						<td align="center">
								<b>Nama Makanan</b>
						</td>
						<td align="center">
								<b>Harga Makanan</b>
						</td>
						<td align="center">
								<b>Jumlah Porsi</b>
						</td>
						<td align="center">
								<b>Total Bayar</b>
						</td>
						
				</tr>
				<?php
				foreach ($tampil->result() as $row){
						echo "<tr >";
						echo"<td align='center'>";
						echo $row->id_bayar;
						echo"</td>";
						echo"<td>";
						echo $row->nama_makanan;
						echo"</td>";
						echo"<td>";
						echo $row->harga_makanan;
						echo"</td>";
						echo"<td>";
						echo $row->jumlah_porsi;
						echo"</td>";
						echo"<td>";
						echo $row->total_bayar;
						echo"</td>";
						
				echo"</tr>";
				}
				
				?>
				</table>
				-------->
				<table align="center" cellspacing="2" cellpadding="1" style="text-align: center; position: fixed;{ top: 20px, left: 10px}">
				<tr style="background: #ddd">
						<td align="center">
								<b>No.</b>
						</td>
						<td align="center">
								<b>Nama Makanan</b>
						</td>
						<td align="center">
								<b>Harga Makanan</b>
						</td>
						<td align="center">
								<b>Jumlah Porsi</b>
						</td>
						<td align="center">
								<b>Total Bayar</b>
						</td>
						
				</tr>
				<?php $i=0; foreach($tampil->result() as $row){ $i++; ?>
				<tr align="center" valign="top">
				<td><?php echo $i; ?></td>
				<td><?php echo $row->nama_makanan; ?></td>
				<td><?php echo $row->harga_makanan; ?></td>
				<td><?php echo $row->jumlah_porsi; ?></td>
				<td><?php echo $row->total_bayar; ?></td>
				</tr>

				<?php } ?>
		</table>
   
    </div>  <!-- /content -->
</div><!-- /page -->
</body>
</html>

