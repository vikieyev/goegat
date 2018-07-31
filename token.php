<?php
session_start();
/*
require_once('veritrans/Veritrans.php');
date_default_timezone_set('Etc/UTC');

//Set Your server key
Veritrans_Config::$serverKey = "Mid-server-uqc4UJhq30Io2Or8s4GgFNqs";

// Uncomment for production environment
//Veritrans_Config::$isProduction = true;

Veritrans_Config::$isSanitized = true;
Veritrans_Config::$is3ds = true;

$transaction = array(
    'transaction_details' => array(
        'order_id' => $_SESSION['email_user'].date('d-m-Y-H-i-s'),
        'gross_amount' => 15000, // no decimal allowed
      ),
        'enabled_payments' => array('credit_card')

    );
/*  
// Fill transaction details
$transaction_details = array(
  'order_id' => $_SESSION['email_user'].date('d-m-Y-H-i-s'),
  'gross_amount' => 15000, // no decimal allowed
  'enabled_payments' => array('credit_card','mandiri_clickpay')

);

// Mandatory for Mandiri bill payment and BCA KlikPay
// Optional for other payment methods
$item1_details = array(
    'id' => 'a1',
    'price' => 15000,
    'quantity' => 1,
    'name' => "DONASI RISET APP"
    );


$item_details = array ($item1_details);



$customer_details = array(
    'first_name'    => $_SESSION['nama_ktp_pnggt'], //optional
    'email'         => $_SESSION['email_user'], //mandatory
    'phone'         => $_SESSION['no_tlp'], //mandatory
    );

// Fill transaction details
$transaction = array(
    'transaction_details' => $transaction_details,
    'customer_details' => $customer_details,
    'item_details' => $item_details,
    );
    

    

$snapToken = Veritrans_Snap::getSnapToken($transaction);
#echo "$snapToken";

#echo date('d-m-Y-H-i-s');
*/
?>
 
<html>

  <head>
			  <style type="text/css">
			  .wrapper {
			    text-align: center;
			}
			
			.button {
			    position: absolute;
			    top: 50%;
			    right:50%;
			    			    			
			 }
			  .auto-style1 {
				  position: absolute;
				  top: 50%;
				  right: 50%;
				  font-size: large;
			  }
			</style>
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

    <script type="text/javascript"
            src="https://app.midtrans.com/snap/snap.js"
            data-client-key="Mid-client-1Z6lHH2hDCBlnR_2"></script> 
    </head>
  <body>
  <h1>DONASI</h1>
<div class="w3l-main">
	<div class="w3l-from">
		<label class="head">TERIMA KASIH</label>
		<label class="head">donasi bisa ditranfer ke rek Bank Syariah Mandiri 7087808542 atas nama YUSLICH YANRESPATI</label>
		
		<div class="btn">
					<input type="submit" name="back" value="back" onClick="history.back();"/>
		</div>

	</div>
</div>  
  <!--
    <div class="w3l-main">
    <label class="head">- silahkan pilih metode pembayaran donasi</label>
				<br>
	<label class="head">- terima kasih banyak<br>
		<br></label>&nbsp;<br>

	<div class="wrapper">
	<div class="btn">
    <button id="pay-button" class="auto-style1">
		METODE PEMBAYARAN DONASI
	</button>
	</div>
	</div>
    <script type="text/javascript">
      var payButton = document.getElementById('pay-button');
      payButton.addEventListener('click', function () {
        snap.pay('<?php echo $snapToken; ?>'); // store your snap token here
      });
    </script>
    </div>
    -->
  </body>
  

  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
</html>
