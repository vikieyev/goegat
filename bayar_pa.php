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
	<h1>FORM PEMBAYARAN</h1>
<div class="w3l-main">
	<div class="w3l-from">
		<form action="report.php" method="post">	
			<div class="w3l-user">
				<label class="head">email anda</label>
				<input type="text" name="email_user" placeholder="" required="" >
			</div>
			<div class="clear"></div>
			
			<div class="w3l-rem">
					
				<div class="btn">
					<input type="submit" name="proses" value="proses"/>
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