<!--author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
if(isset($_POST['next_id_pemohon']))
{
	ini_set('session.cache_limiter','public');
	session_cache_limiter(false);
	session_start();
	///$_SESSION['pengadilan_agama'] = "pengadilan agama";
	//$_SESSION['pilihan'] = $_GET['text_pengadilan_agama'];	
	
	//$_SESSION['pengadilan_agama'] = "pengadilan agama";
	//$_SESSION['pilihan_pemohon'] = $_POST['opt_pilihan_pemohon'];
	$_SESSION['nama_ktp_pnggt'] = $_POST['nama_ktp'];
	$_SESSION['tempat_lahir_pggt'] = $_POST['tempat_lahir'];
	$_SESSION['tanggal_lahir_pggt'] = $_POST['tanggal_lahir'];
	$_SESSION['umur_pggt'] = $_POST['umur'];
	$_SESSION['jenis_kelamin_pggt'] = $_POST['jenis_kelamin'];
	$_SESSION['agama_pggt'] = $_POST['agama'];
	$_SESSION['warganegara_pggt'] = $_POST['warganegara'];
	
	
	
	
	echo "pengadilan : ". $_SESSION['pengadilan_agama'] ;
	echo nl2br ("\n");
	echo "kab/kota : ". $_SESSION['pilihan'];
	echo nl2br ("\n");
	echo "pilihan pemohon : ". $_SESSION['pilihan_pemohon'];
	echo nl2br ("\n");
	echo "nama pemohon : ". $_SESSION['nama_ktp_pggt'];
	echo nl2br ("\n");
	

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
		<form action="form_awal_mula_selisih.php" method="post">	
			<label class="head">Anak-anak dari pernikahan</label>
			<div class="w3l-options1">
					<select class="category1" required="" name="opt_anak_dari_nikah" >
						<option value="">pilih </option>
						<option value="Belum berhubungan suami istri">belum berhubungan suami istri</option>
						<option value="Belum dikaruniai anak">Belum dikaruniai anak</option>
						<option value="Telah dikaruniai anak">Telah dikaruniai anak</option>
					</select>
			</div>
			<div class="clear"></div>	
			<div class="w3l-user">
				<label class="head">anak 1</label>				
			</div>
			<div class="w3l-user">
				<label class="head">nama</label>
				<input type="text" name="nama_anak_1" placeholder="" >
			</div>
			<div class="w3l-user">
				<label class="head">tanggal lahir</label>
				<input type="text" name="tgl_lhr_anak_1" placeholder="" >
			</div>
			<div class="clear"></div>	
			<label class="head">jenis kelamin</label>
			<div class="w3l-options1">
					<select class="category1" name="jns_klmn_anak_1" >
						<option value="">pilih </option>
						<option value="Laki-laki">Laki-laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
			</div>
			<div class="clear"></div>	
			<div class="w3l-user">
				<label class="head">anak 2</label>				
			</div>
			<div class="w3l-user">
				<label class="head">nama</label>
				<input type="text" name="nama_anak_2" placeholder="" >
			</div>
			<div class="w3l-user">
				<label class="head">tanggal lahir</label>
				<input type="text" name="tgl_lhr_anak_2" placeholder="" >
			</div>
			<div class="clear"></div>	
			<label class="head">jenis kelamin</label>
			<div class="w3l-options1">
					<select class="category1" name="jns_klmn_anak_2" >
						<option value="">pilih </option>
						<option value="Laki-laki">Laki-laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
			</div>
			<div class="clear"></div>	
			<div class="w3l-user">
				<label class="head">anak 3</label>				
			</div>
			<div class="w3l-user">
				<label class="head">nama</label>
				<input type="text" name="nama_anak_3" placeholder="" >
			</div>
			<div class="w3l-user">
				<label class="head">tanggal lahir</label>
				<input type="text" name="tgl_lhr_anak_3" placeholder="" >
			</div>
			<div class="clear"></div>	
			<label class="head">jenis kelamin</label>
			<div class="w3l-options1">
					<select class="category1" name="jns_klmn_anak_3" >
						<option value="">pilih </option>
						<option value="Laki-laki">Laki-laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
			</div>
			
			<div class="clear"></div>			
			<div class="w3l-rem">
					
				<div class="btn">
					<input type="submit" name="submit" value="next"/>
				</div>
			</div>
			<div class="clear"></div>
			<div class="w3l-rem">
					
				<div class="btn">
					<input type="submit" name="back" value="back" onClick="history.go(-1);"/>
				</div>
			</div>
		</form>
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