<!--author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
if(isset($_POST['next_dalil_kua']))
{
	ini_set('session.cache_limiter','public');
	session_cache_limiter(false);
	session_start();
	
	$_SESSION['dalil_tgl_nikah'] = $_POST['dalil_tgl_nikah'];
	$_SESSION['dalil_kecamatan'] = $_POST['dalil_kecamatan'];
	$_SESSION['dalil_kabupaten'] = $_POST['dalil_kabupaten'];
	$_SESSION['no_akta_nikah'] = $_POST['no_akta_nikah'];
	$_SESSION['tgl_akta_nikah'] = $_POST['tgl_akta_nikah'];
	$_SESSION['status_penggugat'] = $_POST['status_penggugat'];
	$_SESSION['status_tergugat'] = $_POST['status_tergugat'];
	$_SESSION['status_penggugat'] = $_POST['status_penggugat'];
	$_SESSION['opt_tmpt_tgl_bersama_stlh_nikah'] = $_POST['opt_tmpt_tgl_bersama_stlh_nikah'];
	$_SESSION['lama_tahun'] = $_POST['lama_tahun'];
	$_SESSION['lama_bulan'] = $_POST['lama_bulan'];
	$_SESSION['jalan_stlh_nikah'] = $_POST['jalan_stlh_nikah'];
	$_SESSION['rt_stlh_nikah'] = $_POST['rt_stlh_nikah'];
	$_SESSION['rw_stlh_nikah'] = $_POST['rw_stlh_nikah'];
	$_SESSION['kel_stlh_nikah'] = $_POST['kel_stlh_nikah'];
	$_SESSION['kec_stlh_nikah'] = $_POST['kec_stlh_nikah'];
	$_SESSION['kab_stlh_nikah'] = $_POST['kab_stlh_nikah'];
	$_SESSION['prov_stlh_nikah'] = $_POST['prov_stlh_nikah'];
	$_SESSION['dalil_tmpt_nikah'] = $_POST['dalil_tmpt_nikah'];

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
<link rel="stylesheet" href="css/style_login.css" type="text/css" media="all">

<!-- //css files -->
</head>

<body>
	<h1 class="title-agile text-center" >DALIL/ALASAN CERAI</h1>
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
				<input type="text" name="nama_anak_1" placeholder="tidak diisi bila tidak ada anak" >
			</div>
			<div class="w3l-user">
				<label class="head">tempat/tanggal lahir</label>
				<input type="text" name="tgl_lhr_anak_1" placeholder="tempat/tanggal-bulan-tahun" >
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
				<input type="text" name="nama_anak_2" placeholder="tidak diisi bila tidak ada anak" >
			</div>
			<div class="w3l-user">
				<label class="head">tempat/tanggal lahir</label>
				<input type="text" name="tgl_lhr_anak_2" placeholder="tempat/tanggal-bulan-tahun" >
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
				<input type="text" name="nama_anak_3" placeholder="tidak diisi bila tidak ada anak" >
			</div>
			<div class="w3l-user">
				<label class="head">tempat/tanggal lahir</label>
				<input type="text" name="tgl_lhr_anak_3" placeholder="tempat/tanggal-bulan-tahun" >
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
			
			<div class="clear"><br></div>
			
			<div class="w3l-lef1" 
			<?php
			$style = "";
			if ($_SESSION['pilihan_pemohon'] == "CERAI GUGAT" || $_SESSION['pilihan_pemohon'] == "CERAI TALAK" || $_SESSION['pilihan_pemohon'] == "PENGGUGAT LAKI-LAKI" || $_SESSION['pilihan_pemohon'] == "PENGGUGAT PEREMPUAN")
			{ 
				$style = "";
			}
			else
			{
				$style = "style='display:none;'";
				
			}
			
			echo $style; ### UNTUK IF ELSE NAFKAH ANAK ######################
			?>>
				<label class="w3l-head2">Permohonan Hak Asuh Anak<br></label>
					<ul>
						<li>
							<input type="radio" name="permohonan_nafkah_anak" value="iya">
							<label class="w3l-set">IYA</label>
						</li>
						<li>
							<input type="radio" name="permohonan_nafkah_anak" value="tidak" CHECKED="On" >
							<label class="w3l-set">TIDAK</label>
						</li>
					</ul>
				<div class="clear"></div>
			</div>
			
			<div class="w3l-user" <?php
			$style = "";
			if ($_SESSION['pilihan_pemohon'] == "CERAI GUGAT" || $_SESSION['pilihan_pemohon'] == "PENGGUGAT PEREMPUAN")
			{ 
				$style = "";
			}
			else
			{
				$style = "style='display:none;'";
				
			}
			
			echo $style; ### UNTUK IF ELSE NAFKAH ANAK ######################
			?>>

				<label class="head">besar nafkah tiap anak dalam Rupiah</label>
				<input type="text" name="besar_nafkah_anak" placeholder=" 100000 / kosongkan jika tidak memohon hak asuh diatas" >
			</div>


			
			<div class="w3l-rem">
					
				<div class="btn">
					<input type="submit" name="next_form_anak" value="next"/>
				</div>
			</div>
			<div class="clear"></div>
					</form>
		<div class="btn">
					<input type="submit" name="back" value="back" onClick="history.back();"/>
		</div>
		<!--
		<form action="report_2.php" method="post" target="_blank">
			<div class="btn" >
					<input type="submit" name="preview" value="preview"/>
			</div>
		</form>
		-->
	</div>
</div>
	<footer>&copy; 2018 PT.LawuSoft

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