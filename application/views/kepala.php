<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="vieport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo 'http://localhost/resto33/jquerymobile/jquery.mobile-1.3.2.min.css';?>"/>
<script src="<?php echo "http://localhost/resto33/jquerymobile/jquery-1.8.2.min.js"; ?>"></script>
<script src="<?php echo 'http://localhost/resto33/jquerymobile/jquery.mobile-1.3.2.min.js'?>"></script>
<script>
function hitung(){
	var harga = document.getElementsByName("harga_makanan")[0].value;
	var jumlah = document.getElementsByName("jumlah_porsi")[0].value;
	var total = parseInt (harga) * parseInt (jumlah);
	document.getElementsByName("total_bayar")[0].value = total;
}
	$(document).ready(function(){
	hitung();
});
</script>