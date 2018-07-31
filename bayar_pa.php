<!--author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	session_start();
	$numbers = range(100, 999);
	shuffle($numbers);
	//echo "Rp 15.$numbers[0]";
	$_SESSION['harga_bayar'] = "15.$numbers[0]";
	//var_dump($_SESSION);
?>
<?php
if(isset($_POST['next_awal_mula_selisih']))
{
	ini_set('session.cache_limiter','public');
	session_cache_limiter(false);
	session_start();
	$_SESSION['tgl_awal_mula_selisih'] = $_POST['tgl_awal_mula_selisih'];
	$_SESSION['txt_alasan_perselisihan'] = $_POST['txt_alasan_perselisihan'];
	$_SESSION['tgl_puncak_selisih'] = $_POST['tgl_puncak_selisih'];
	$_SESSION['tgl_pisah_ranjang'] = $_POST['tgl_pisah_ranjang'];
	$_SESSION['txt_alasan_psh_ranjang'] = $_POST['txt_alasan_psh_ranjang'];
	
	//$numbers = range(1, 300);
	//shuffle($numbers);
	//echo $numbers;
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
</head>

<body>
	<h1 class="title-agile text-center">FORM PEMBAYARAN</h1>
<div class="w3l-main">
	<div class="w3l-from">
		<form action="form_konfirmasi.php" method="post">	
			<div class="w3l-mail">
				<label class="head">email anda</label>
				<input type="email" name="email_user" placeholder="" required="" >
			</div>
			<div class="clear"></div>
			<div class="w3l-user">
				<label class="head">no telepon anda</label>
				<input type="text" name="no_tlp" placeholder="" required="" >
			</div>
			<div class="clear"></div>

			
			<div class="w3l-rem">
					
				<div class="btn">
					<input type="submit" name="proses" value="proses "  />
				</div>
			</div>
			
			<div class="clear"></div>
					</form>
		<div class="btn">
					<input type="submit" name="back" value="back" onClick="history.back();"/>
		</div>
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