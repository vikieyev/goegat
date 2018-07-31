<!--author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
if(isset($_POST['proses']))
{
	session_start();
	
	$_SESSION['email_user'] = $_POST['email_user'];
	$_SESSION['no_tlp'] = $_POST['no_tlp'];
	//$namafile = $_SESSION['email_user']."+".$_SESSION['harga_bayar'];
	$namafile = $_SESSION['email_user'];

	$sessionfile = fopen( "./data_user/$namafile" , "w");
	fputs($sessionfile, session_encode() );
	fclose($sessionfile);

	
	var_dump($_SESSION);
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
<link rel="stylesheet" href="css/style_login.css" type="text/css" media="all">

<link rel="stylesheet" href="css/jquery-ui.css"/>
<link href="css/style_gugat_cerai.css" rel="stylesheet" type="text/css" media="all"/><!--stylesheet-css-->
<link href="//fonts.googleapis.com/css?family=Poppins" rel="stylesheet"><!--online-fonts-->
<link href="//fonts.googleapis.com/css?family=Raleway" rel="stylesheet"><!--online-fonts-->
<!-- //css files -->

</head>

<body>

	<h1  class="title-agile text-center">KETERANGAN</h1>
<div class="w3l-main">
	<div class="w3l-from">
		
			<div class="w3l-user">
				<label class="head">TERIMA KASIH</label>
				<label class="head">- TELAH MENGGUNAKAN APP INI</label>
				<label class="head">- DONASI ANDA SANGAT BERARTI UNTUK MEMBANTU KAMI MENDEVELOP APP YANG BERGUNA BAGI MASYARAKAT DI MASA DEPAN</label>
				<label class="head">- SILAHAKAN DOWNLOAD DOKUMEN ANDA DENGAN MENEKAN TOMBOL DOWNLOAD</label>
				



				<!--
				<input type="text" name="email_user" placeholder="" required="" >
			</div>
			<div class="clear"></div>
			
			<div class="w3l-rem">
					
				<div class="btn">
					<input type="submit" name="proses" value="CEK DOKUMEN "  />
				</div>
			</div>
			
			<div class="clear"></div>
			<div class="w3l-rem">
					
				<div class="btn">
					<input type="submit" name="back" value="back" onClick="history.go(-1);"/>
				</div>
			</div>
			
		</form>
		-->
		<form action="token.php" id="bayar">
			<div class="btn" id="bayar">
				<input type="submit" name="donasi" value="donasi"/>
			</div>
		</form>	
		
		<form action="form_download_doc.php" >
			<div class="btn" >
					<input type="submit" name="preview" value="download"/>
			</div>
		</form>
	
</div>
	<footer>&copy; 2018 PT.LawuSoft

	</footer>
	<!-- Default-JavaScript --> <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- script bayar -->
	

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