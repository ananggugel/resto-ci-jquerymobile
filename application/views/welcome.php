<html>
	<head>
		<meta charset="UTF-8">
		<tilte>Warung Makan</title>
		<?php 
		$this->load->view('kepala');
		?>
	</head>
	
<body>
<div data-role="page" id="home">
	<div data-role="header">
		<h1>Data Makanan</h1>
	</div> <!----/header-->
	
	<div data-role="content">
		<div class="choice_list">
		<ul data-role="listview" data-inset="true">
		<li><a href="<?php echo base_url();?>index.php/makan"  data-transition="slidedown"> <h3>Input Makanan</h3></a></li>
		<li><a href="<?php echo base_url();?>index.php/bayar" data-transition="slidedown"> <h3>Input Bayar</h3></a></li>
		<li><a href="<?php echo base_url();?>index.php/tbl_hasil" data-transition="slidedown"> <h3>Tabel Bayar</h3></a></li>
		</ul>
		</div>
	</div>
	</ul>
</div>
</body>		
</html>