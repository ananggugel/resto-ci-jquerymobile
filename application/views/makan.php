<!DOCTYPE html>
<html lang="en">
<head>

	<title>Resto Makanan</title>
	<?php
	$this->load->view('kepala');
	?>
</head>
<body>
<div data-role="page" id="makan2" data-add-back-btn="true">

<div data-role="header">
<h1>Makanan</h1>
</div>

<div data-role="content">
<?php
    if(@$msg<>"") echo @$msm;
?>
<!--untuk melakukan aksi simpan-->
<?php echo form_open('makan/simpan')?>
<form>
		<table width="100%">
		<tr>
			<td></td><td><input type="hidden" name="id_makanan" id="id_makanan"/></td>
		</tr>
		<tr>
			<td>Nama Makanan</td>
			<td><input type="text" name="nama_makanan" id="nama" required/></td>
		</tr>
		<tr>
				<td colspan="2"><input type="submit" value="Simpan" id="simpan" name="simpan"/></td>
		</tr>
		
		</table>
</form>

</div><!-- /content -->
</div><!-- /page -->
</body>
</html>