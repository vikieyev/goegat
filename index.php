<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<?php
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
?>
<?php
session_start();
session_destroy();
?>

<html lang="zxx">

<head>
    <title>GOEGAT</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Switch Login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="css/style_login.css" type="text/css" media="all">
    <!-- //Custom-Stylesheet-Links -->
    <!--fonts -->
    <link href="//fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400,500,600,700,800" rel="stylesheet">
    <!-- //fonts -->
    <!-- Font-Awesome-File-Links -->
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all">
</head>

<body>
    <h1 class="title-agile text-center">GOEGAT</h1>
    <div class="content-w3ls">
        <div class="content-top-agile">
            <h2><span lang="en-us">pilihan</span></h2>
        </div>
        <div class="content-bottom">
           <form action="form_pengadilan_agama.php" method="post">
           
                <div class="wthree-field">
                    <input id="signin1" name="signin1" type="submit" value="Pengadilan agama" />
                </div>
                
                <br>
				<!--
			<div class="field-group">
                    
                    <div class="wthree-field">
                        <input name="text_pengadilan_agama" id="text_pengadilan_agama" type="text" value="<?php echo htmlspecialchars($_GET['text_pengadilan_agama']); ?>" placeholder="nama kabupaten" required>
                    </div>
                </div>
				-->
            </form>
            <br>
			
            <form action="form_pengadilan_negeri.php" method="post">
            <div class="wthree-field">

					<td><input type="submit" name="signin2" value="pengadilan negeri" /></td>
			</div>
			<br>
			
			

			<!--
			<div class="field-group">
                    
                    <div class="wthree-field">
                        <input name="text_pengadilan_negeri" id="text_pengadilan_negeri" type="text" "value="" placeholder="nama kabupaten" required>
                    </div>
                </div>
				-->
			</form>
			<br>

			<form action="form_download_doc.php" method="post">
            <div class="wthree-field">

					<td><input type="submit" name="donload_doc" value="download doc" /></td>
			</div>
			<br>
            
        </div>
    </div>
	

	
    </body>
<!-- //Body -->

</html>