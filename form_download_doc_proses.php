<!--author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
if(isset($_POST['proses']))
{
	#ini_set('session.cache_limiter','public');
	#session_cache_limiter(false);
	session_start();
		
	$_SESSION['email_user'] = $_POST['email_user'];
	$namafile = $_SESSION['email_user'];
	date_default_timezone_set('Etc/UTC');

	$_SESSION['tanggal']= date('d-m-Y');

	//$sessionfile = fopen("./data_user_bayar/$namafile", "r") or die('<body background="images/bg_gugat_cerai.jpg"> <center><h1><font style="background-color:">MAAF DOKUMEN BELUM DIBAYAR</font></h1></center> </br> <center><h1><font style="background-color:white"><a href="form_download_doc.php">Klik untuk Kembali</a></font></h1></center>  </body>');
	$sessionfile = fopen("./data_user/$namafile", "r") or die('<body background="images/bg_gugat_cerai.jpg"> <center><h1><font style="background-color:">MAAF DOKUMEN BELUM DIBAYAR</font></h1></center> </br> <center><h1><font style="background-color:white"><a href="form_download_doc.php">Klik untuk Kembali</a></font></h1></center>  </body>');
	session_decode(fgets($sessionfile,4096) );
	fclose($sessionfile);
	#echo '<a href="form_download_doc.php">Click here</a>';
	#echo $sessionfile;
	
	#var_dump($_SESSION);
	
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
<link rel="stylesheet" href="css/style_login.css" type="text/css" media="all">

<link href="css/style_gugat_cerai.css" rel="stylesheet" type="text/css" media="all"/><!--stylesheet-css-->
<link href="//fonts.googleapis.com/css?family=Poppins" rel="stylesheet"><!--online-fonts-->
<link href="//fonts.googleapis.com/css?family=Raleway" rel="stylesheet"><!--online-fonts-->
<!-- //css files -->
<style type="text/css">
.auto-style1 {
	text-align: center;
}
</style>
</head>

<body>
	<h1 class="title-agile text-center">DOWNLOAD DOKUMEN</h1>
<div class="w3l-main">

	<div class="w3l-from" 
			
		<?php
			$style = "";
			if ($_SESSION['pilihan_pemohon'] != "CERAI TALAK")
			{ 
				#echo $_SESSION['kab_ktp_pggt'];
				$style = "style='display:none;'";
			}else
			{
				$style = "";
			}
			
			echo $style; ### UNTUK IF ELSE TEMPAT KABUPATEN DAN ALAMAT SEKARANG YG NAMPAK ######################
			?> >

		<form action="report_gugat_pa_talak_laki.php" method="post" id="doc_gugat_pa_laki" target="_blank">
			<div class="btn" >
					<input type="submit" name="preview" value="download" />
			</div>
			<div class="clear"><br></div>
			<div class="auto-style1">
			<a href="data_doc/<?php echo $_SESSION['email_user']; ?>.doc">klik disini bila tidak terdownload</a>

			<!--
			<a href="javascript:{}" onclick="document.getElementById('doc_gugat_pa_laki').submit(); return false;">download</a>
			-->
			</div>
		</form>
		
	</div>
	<div class="w3l-from" 
			
		<?php
			$style = "";
			if ($_SESSION['pilihan_pemohon'] != "CERAI GUGAT")
			{ 
				#echo $_SESSION['kab_ktp_pggt'];
				$style = "style='display:none;'";
			}
			else
			{
				$style = "";
			}

			echo $style; ### UNTUK IF ELSE TEMPAT KABUPATEN DAN ALAMAT SEKARANG YG NAMPAK ######################
			?> >

		<form action="report_gugat_pa_cerai_wanita.php" method="post" target="_blank" >
			<div class="btn" >
					<input type="submit" name="preview" value="download" />
			</div>
			<div class="clear"><br></div>
			<div class="auto-style1">
			<a href="data_doc/<?php echo $_SESSION['email_user']; ?>.doc">klik disini bila tidak terdownload</a>

			</div>

		</form>
		
	</div>
	
	<div class="w3l-from" 
			
		<?php
			$style = "";
			if ($_SESSION['pilihan_pemohon'] != "PENGGUGAT LAKI-LAKI")
			{ 
				#echo $_SESSION['kab_ktp_pggt'];
				$style = "style='display:none;'";
			}
			else
			{
				$style = "";
			}

			echo $style; ### UNTUK IF ELSE TEMPAT KABUPATEN DAN ALAMAT SEKARANG YG NAMPAK ######################
			?> >

		<form action="report_gugat_pn_cerai_laki.php" method="post" target="_blank">
			<div class="btn" >
					<input type="submit" name="preview" value="download"/>
			</div>
			<div class="clear"><br></div>
			<div class="auto-style1">
			<a href="data_doc/<?php echo $_SESSION['email_user']; ?>.doc">klik disini bila tidak terdownload</a>

			</div>

		</form>
		
	</div>
	
	<div class="w3l-from" 
			
		<?php
			$style = "";
			if ($_SESSION['pilihan_pemohon'] != "PENGGUGAT PEREMPUAN")
			{ 
				#echo $_SESSION['kab_ktp_pggt'];
				$style = "style='display:none;'";
			}
			else
			{
				$style = "";
			}

			echo $style; ### UNTUK IF ELSE TEMPAT KABUPATEN DAN ALAMAT SEKARANG YG NAMPAK ######################
			?> >

		<form action="report_gugat_pn_cerai_wanita.php" method="post" target="_blank">
			<div class="btn" >
					<input type="submit" name="preview" value="download"/>
			</div>
			<div class="clear"><br></div>
			<div class="auto-style1">
			<a href="data_doc/<?php echo $_SESSION['email_user']; ?>.doc">klik disini bila tidak terdownload</a>

			</div>

		</form>
		
		

		
	</div>

<form  action="index.php" >
		<div class="btn">
					<input type="submit" name="back" value="back" onClick=""/>
		</div>
		</form>

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