<!--author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php

if(isset($_POST['signin2']))
{
	ini_set('session.cache_limiter','public');
	session_cache_limiter(false);
	session_start();
	$_SESSION['pengadilan_negeri'] = "pengadilan negeri";
	#$_SESSION['pilihan'] = $_POST['text_pengadilan_agama'];	
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

<?php
session_start();
 
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	//header("location:./index.php");
}
//menampilkan pesan selamat datang
//echo "USER : ". $_SESSION['username'];
?>


<body>
	<h1 class="title-agile text-center">GUGAT CERAI</h1>
<div class="w3l-main">
	<div class="w3l-from">
		<form action="form_identitas_penggugat_pn.php" method="post">	
			
				<label class="head">Pilihan</label>
				
				<div class="w3l-details3">
				
				<div class="w3l-options1">
					<select class="category1" required="" name="opt_pilihan_pemohon" >
						<option value="">pilih pemohon</option>
						<option value="PENGGUGAT LAKI-LAKI">pemohon laki-laki / suami</option>
						<option value="PENGGUGAT PEREMPUAN">pemohon wanita / istri</option>
					</select>
				</div>
				</div>
				<div class="clear"></div>
				<div class="btn">
					<input type="submit" name="next_pilihan_pemohon" value="next"/>
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