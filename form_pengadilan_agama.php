<!--author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php

if(isset($_POST['signin1']))
{
	ini_set('session.cache_limiter','public');
	session_cache_limiter(false);
	session_start();
	$_SESSION['pengadilan_agama'] = "pengadilan agama";
	$_SESSION['pilihan'] = $_POST['text_pengadilan_agama'];
	#var_dump($_SESSION);
	
}

?>	

<?php
/*
echo "pengadilan : ". $_SESSION['pengadilan_agama'] ;
echo nl2br ("\n");
echo "kab/kota : ". $_SESSION['pilihan'];

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
*/
?>

<!DOCTYPE html>
<html>
<head>
<script>
function goBack() {
    window.history.back()
}
</script>
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
	<h1 class="title-agile text-center"> GUGAT CERAI</h1>
<div class="w3l-main">
	<div class="w3l-from">
		<form action="form_identitas_penggugat.php" method="post">	
			
				<label class="head">Pilihan</label>
				
				<div class="w3l-details3">
				
				<div class="w3l-options1">
					<select class="category1" required="" name="opt_pilihan_pemohon" >
						<option value="">pilih pemohon</option>
						<option value="CERAI TALAK">CERAI TALAK (pemohon laki-laki / suami)</option>
						<option value="CERAI GUGAT">CERAI GUGAT (pemohon wanita / istri) </option>
					</select>
				</div>
				</div>
				<div class="clear"></div>
				<div class="btn">
					<input type="submit" name="next_pilihan_pemohon" value="next"/>
				</div>
				<div class="clear"></div>
			<div class="w3l-rem">
					
				
			</div>

				
				
			
			<div class="clear"></div>
		</form>
		<div class="btn" onclick="goBack();">
					<input  type="submit" name="back" value="back" />
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