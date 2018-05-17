<!--author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
if(isset($_POST['next_id_tggt']))
{
	ini_set('session.cache_limiter','public');
	session_cache_limiter(false);
	session_start();
	$_SESSION['bin_binti_tggt'] = $_POST['binti_tggt'];
	$_SESSION['nama_ktp_tggt'] = $_POST['nama_ktp_2'];
	$_SESSION['tempat_lahir_tggt'] = $_POST['tempat_lahir_tggt'];
	$_SESSION['tanggal_lahir_tggt'] = $_POST['tanggal_lahir_tggt'];
	$_SESSION['umur_tggt'] = $_POST['umur_tggt'];
	$_SESSION['jenis_kelamin_tggt'] = $_POST['jenis_kelamin_tggt'];
	$_SESSION['agama_tggt'] = $_POST['agama_tggt'];
	$_SESSION['warganegara_tggt'] = $_POST['warganegara_tggt'];
	$_SESSION['jalan_ktp_tggt'] = $_POST['jalan_ktp_tggt'];
	$_SESSION['rt_ktp_tggt'] = $_POST['rt_ktp_tggt'];
	$_SESSION['rw_ktp_tggt'] = $_POST['rw_ktp_tggt'];
	$_SESSION['kel_desa_ktp_tggt'] = $_POST['kel_desa_ktp_tggt'];
	$_SESSION['kec_ktp_tggt'] = $_POST['kec_ktp_tggt'];
	$_SESSION['kab_ktp_tggt'] = $_POST['kab_ktp_tggt'];
	$_SESSION['prov_ktp_tggt'] = $_POST['prov_ktp_tggt'];
	$_SESSION['almt_skrg_tggt'] = $_POST['jalan_skrg_tggt'];
	$_SESSION['rt_skrg_tggt'] = $_POST['rt_skrg_tggt'];
	$_SESSION['rw_skrg_tggt'] = $_POST['rw_skrg_tggt'];
	$_SESSION['kel_desa_skrg_tggt'] = $_POST['kel_desa_skrg_tggt'];
	$_SESSION['kec_skrg_tggt'] = $_POST['kec_skrg_tggt'];
	$_SESSION['kab_skrg_tggt'] = $_POST['kab_skrg_tggt'];
	$_SESSION['prov_skrg_tggt'] = $_POST['prov_skrg_tggt'];
	$_SESSION['pekerjaan_tggt'] = $_POST['pekerjaan_tggt'];
	$_SESSION['pengadilan_tggt'] = $_POST['pendidikan_tggt'];
	$_SESSION['status_kawin_tggt'] = $_POST['status_kawin_tggt'];
	
	

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
		<form action="form_anak.php" method="post">	
			<div class="w3l-user">
				<label class="head">Masukan tanggal dilangsungkannya pernikahan sesuai dengan Surat Nikah</label>
				<input type="text" name="dalil_tgl_nikah" placeholder="" required="">
			</div>
			<!-
			<div class="w3l-user">
				<label class="head">Tempat KUA pencatat pernikahan</label>				
			</div>
			<div class="w3l-user">
				<label class="head">kecamatan</label>
				<input type="text" name="dalil_kecamatan" placeholder="" required="">
			</div>
			<div class="w3l-user">
				<label class="head">kabupaten</label>
				<input type="text" name="dalil_kabupaten" placeholder="" required="">
			</div>
			<div class="w3l-user">
				<label class="head">no kutipan akta nikah</label>
				<input type="text" name="no_akta_nikah" placeholder="" required="">
			</div>
			<div class="w3l-user">
				<label class="head">tanggal akta nikah</label>
				<input type="text" name="tgl_akta_nikah" placeholder="" required="">
			</div>
			<div class="w3l-user">
				<label class="head">Status Penggugat sebelum nikah</label>
				<input type="text" name="status_penggugat" placeholder="" required="">
			</div>
			<div class="w3l-user">
				<label class="head">Status Tergugat sebelum nikah</label>
				<input type="text" name="status_tergugat" placeholder="" required="">
			</div>
			<div class="w3l-user">
				<label class="head">Status Penggugat sebelum nikah</label>
				<input type="text" name="status_penggugat" placeholder="" required="">
			</div>
			<label class="head">Tempat tinggal bersama setelah menikah</label>
			<div class="w3l-options1">
					<select class="category1" required="" name="opt_tmpt_tgl_bersama_stlh_nikah" >
						<option value="">pilih tempat tinggal</option>
						<option value="Di rumah sendiri">Di rumah sendiri</option>
						<option value="Di rumah orang tua penggugat">Di rumah orang tua penggugat</option>
						<option value="Di rumah orang tua tergugat">Di rumah orang tua tergugat</option>
						<option value="Di rumah kontrakan/kost">Di rumah kontrakan/kost</option>
						<option value="Lainnya..">Lainnya..</option>
					</select>
			</div>
			<div class="clear"></div>	
			<label class="head">Lamanya Tinggal Bersama</label>
			<div class="w3l-user">
				<label class="head">Tahun</label>
				<input type="text" name="lama_tahun" placeholder="" required="">
			</div>
			<div class="w3l-user">
				<label class="head">Bulan</label>
				<input type="text" name="lama_bulan" placeholder="" required="">
			</div>
			
			<div class="clear"></div>	
			<div align="center">
			<label class="head">alamat tinggal bersama setelah menikah</label>
			</div>
			<div class="w3l-user">
				<label class="head">jalan</label>
				<input type="text" name="jalan_stlh_nikah" placeholder="" required="">
			</div>
			<div class="w3l-user">
				<label class="head">rt</label>
				<input type="text" name="rt_stlh_nikah" placeholder="" required="">
			</div>
			<div class="w3l-user">
				<label class="head">rw</label>
				<input type="text" name="rw_stlh_nikah" placeholder="" required="">
			</div>
			<div class="w3l-user">
				<label class="head">kelurahan/desa</label>
				<input type="text" name="kel_stlh_nikah" placeholder="" required="">
			</div>
			<div class="w3l-user">
				<label class="head">kecamatan</label>
				<input type="text" name="kec_stlh_nikah" placeholder="" required="">
			</div>
			<div class="w3l-user">
				<label class="head">kabupaten</label>
				<input type="text" name="kab_stlh_nikah" placeholder="" required="">
			</div>
			<div class="w3l-user">
				<label class="head">provinsi</label>
				<input type="text" name="prov_stlh_nikah" placeholder="" required="">
			</div>
			
			-->
			<div class="clear"></div>			
			<div class="w3l-rem">
					
				<div class="btn">
					<input type="submit" name="next_dalil_kua" value="next"/>
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