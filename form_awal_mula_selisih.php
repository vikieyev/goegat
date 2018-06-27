<!--author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
if(isset($_POST['next_form_anak']))
{
	ini_set('session.cache_limiter','public');
	session_cache_limiter(false);
	session_start();
	
	$_SESSION['opt_anak_dari_nikah'] = $_POST['opt_anak_dari_nikah'];
	$_SESSION['nama_anak_1'] = $_POST['nama_anak_1'];
	$_SESSION['nama_anak_2'] = $_POST['nama_anak_2'];
	$_SESSION['nama_anak_3'] = $_POST['nama_anak_3'];
	$_SESSION['tgl_lhr_anak_1'] = $_POST['tgl_lhr_anak_1'];
	$_SESSION['tgl_lhr_anak_2'] = $_POST['tgl_lhr_anak_2'];
	$_SESSION['tgl_lhr_anak_3'] = $_POST['tgl_lhr_anak_3'];
	$_SESSION['jns_klmn_anak_1'] = $_POST['jns_klmn_anak_1'];
	$_SESSION['jns_klmn_anak_2'] = $_POST['jns_klmn_anak_2'];
	$_SESSION['jns_klmn_anak_3'] = $_POST['jns_klmn_anak_3'];
	
	$_SESSION['permohonan_nafkah_anak'] = $_POST['permohonan_nafkah_anak'];
	$_SESSION['besar_nafkah_anak'] = $_POST['besar_nafkah_anak'];
	
	#var_dump($_SESSION);
	#echo "permohonan_nafkah_anak : ". $_SESSION['permohonan_nafkah_anak'];
	#echo nl2br ("\n");
	#echo "besar nafkah anak : ". $_SESSION['besar_nafkah_anak']; 
	#echo nl2br ("\n");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>GOEGAT</title>
<!-- metatags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="modern appointment form a Flat Responsive Widget,Login form widgets, Sign up Web 	forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/jquery-ui.css"/>
<link href="css/style_gugat_cerai.css" rel="stylesheet" type="text/css" media="all"/><!--stylesheet-css-->
<link href="//fonts.googleapis.com/css?family=Poppins" rel="stylesheet"><!--online-fonts-->
<link href="//fonts.googleapis.com/css?family=Raleway" rel="stylesheet"><!--online-fonts-->
<!-- //css files -->
</head>

<body>
	<h1>FORM DALIL/ALASAN CERAI</h1>
<div class="w3l-main">
	<div class="w3l-from">
		<form action="bayar_pa.php" method="post">
			
			<div class="w3l-user">
				<label class="head">awal mula selisih</label>
				<input type="text" name="tgl_awal_mula_selisih" placeholder="hari/bulan/tahun" required="" >
			</div>
			
			<div class="w3l-rem">
				<div class="w3l-right">
					<label class="w3l-set2">Alasan perselisihan / pertengkaran disebabkan.</label>
					<textarea name="txt_alasan_perselisihan"></textarea>
				</div>
			</div>
			<div class="clear"></div>

			<div class="w3l-user">
				<label class="head">Puncak perselisihan / pertengkaran bulan dan tahun</label>
				<input type="text" name="tgl_puncak_selisih" placeholder="hari/bulan/tahun" required="" >
			</div>
			<div class="w3l-user">
				<label class="head">Pisah ranjang sejak</label>
				<input type="text" name="tgl_pisah_ranjang" placeholder="hari/bulan/tahun" required="" >
			</div>
			<div class="w3l-rem">
				<div class="w3l-right">
					<label class="w3l-set2">Alasan Pisah ranjang.</label>
					<textarea name="txt_alasan_psh_ranjang"></textarea>
				</div>	
			</div>

			<div class="clear"></div>
			
			<div class="w3l-rem">
					
				<div class="btn">
					<input type="submit" name="next_awal_mula_selisih" value="next"/>
				</div>
			</div>
			<div class="clear"></div>
			<div class="w3l-rem">
					
				<div class="btn">
					<input type="submit" name="back" value="back" onClick="history.go(-1);"/>
				</div>
			</div>
		</form>
		<!--
		<form action="report_2.php" method="post" target="_blank">
			<div class="btn" >
					<input type="submit" name="preview" value="preview"/>
			</div>
		</form>
		-->
	</div>
</div>
	<footer>&copy; 2017 modern appointment Form. All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a>
	</footer>
	<!-- Default-JavaScript --> <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

<!-- Calendar -->
<script src="js/jquery-ui.js"></script>
	<script>
		$(function() {
		$( "#datepicker,#datepicker1" ).datepicker();
		});
	</script>
<!-- //Calendar -->

</body>
</html>