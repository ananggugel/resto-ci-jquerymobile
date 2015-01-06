
	<!DOCTYPE HTML>
	<html>
	<head>
		<meta charset="UTF-8">
		<tilte>Input Bayar</title>
			<?php
			$this->load->view('kepala');
			?>
		</head>
		<body>
			<script>
	/*
	function kali()
	{
	var bil1 = parseFloat
	(document.fform.harga_makanan.value);
	var bil2 = parseFloat
	(document.fform.jumlah_porsi.value);
	var hasil= bil1 * bil2;
	document.fform.total_bayar.value= hasil;
	}
	*/

	</script>
	<div data-role="page" id="bayar" data-add-back-btn="true" >
		<div data-role="header">
			<h1>Input Makanan</h1>
		</div><!-- /header -->

		<div data-role="content">

			<?php echo form_open('bayar/simpan', array('name'=>'fform'))?>
			<tr>
				<td><label>Nama Makanan</label></td>
				<td><select name="nama_makanan">
					<?php
					foreach ($tampil->result() as $row)
					{
						echo "<option value='".$row->nama_makanan."'>".$row->nama_makanan."</option>";
					}
					?>
				</select></td>
			</tr>

			<form name="fform">
				<tr>
					<td><label>Harga Makanan</label></td>
					<td><input type= "text" onchange="hitung()" onkeyup="hitung()" onkeypress="hitung()" onfocus="hitung()" name = "harga_makanan" required/></td>
				</tr>
				<tr>
					<td><label>Jumlah Makanan</label></td>
					<td><input type ="text" onchange="hitung()" onkeyup="hitung()" onkeypress="hitung()" onfocus="hitung()" name = "jumlah_porsi" required/></td>
				</tr>
				<tr>
					<td><label>Total Bayar</label></td>
					<td><input type="text" size="2" name="total_bayar" placeholder="Total bayar" required/></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="Simpan" name="simpan"/></td>
				</tr>
			</form>

		</div> <!-- /content -->

	</div><!-- /page -->
	</body>
	</html>