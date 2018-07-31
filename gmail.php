<?php
require 'testmail.php';

		
$hostname = '{imap.gmail.com:993/imap/ssl}INBOX';
$username = 'yuslich.yan@gmail.com';
$password = 'inashafshah442012';
/*
$hostname = '{imap.gmail.com:993/imap/ssl}INBOX';
$username = 'goegat.rf.gd@gmail.com';
$password = 'Cintasejati87';

$hostname = '{imap.gmail.com:993/imap/ssl}INBOX';
$username = 'vikieyev.leonhart@gmail.com';
$password = 'inashafshah442012';
*/

$inbox = imap_open($hostname,$username,$password) or die('Cannot connect to Gmail: ' . imap_last_error());

$emails = imap_search($inbox, 'FROM "BSMCenter@bsm.co.id " seen');

//$emails = imap_search($inbox, 'FROM "goegat.rf.gd@gmail.com" unseen');
//$sinceDate = "06 June 2018";
//$beforeDate = "10 July 2018"; 
//$emails = imap_search($inbox,'SINCE "'.$sinceDate.'" BEFORE"'.$beforeDate.'"' );

//echo $emails;

if($emails) {

    
    $output = '';

    
    rsort($emails);
	$overview = imap_fetch_overview($inbox,$emails[0],0);
	$message = imap_fetchbody($inbox,$emails[0],1);
	//echo $message;
	//$coba = "Yth:YUSLICH YANRESPATI<br><br>Berikut Notifikasi untuk Anda : Debit<br>Nomor Rekening : 7087808542<br>Nilai Transaksi : IDR-15,310.00<br>Tanggal Transaksi : 05 JUL 2018 23:26<br>Nomor Transaksi : 7087808542.ATM.FEE.SIMP.20180705<br><br>Hubungi BSM Call di 14040";
	$pesan = (explode("<br>",$message));

	//$pesan = (explode("<br>",$coba));
	//echo $pesan[4];
	$pesan2 = (explode("IDR-",$pesan[4]));
	//echo $pesan2[1];
	$pesan3 = (explode(".",$pesan2[1]));
	//echo $pesan3[0]; 
	//echo str_replace(',', '.', $pesan3[0]);
	$kode = str_replace(',', '.', $pesan3[0]); 
	echo "pembayaran = $kode";
	echo "<br>";
	
	//ambil data dari data_user
	foreach (glob("./data_user/*$kode") as $filename) 
	{
  	  $nama_file = (explode("/",$filename));
  	  //echo $nama_file[2];
  	  echo "file yg di move = $nama_file[2]";
	  echo "<br>";

  	  rename("./data_user/$nama_file[2]", "./data_user_bayar/$nama_file[2]");
  	  
  	  $get_email_user=(explode("/",$filename));
  	  //echo $get_email_user[2];
  	  $email_user=(explode("+",$get_email_user[2]));
  	  echo "email user = $email_user[0]";
  	  echo "<br>";
  	  
		//kirim email konfirmasi
		$mail->setFrom('goegat.rf.gd@gmail.com', 'GOEGAT' ); // Set the sender of the message.
		$mail->addAddress($email_user[0], $email_user[0]); // Set the recipient of the message.
		$mail->Subject = 'download dokumen goegat'; // The subject of the message.
		$mail->Body = 'terima kasih sudah melakukan pembayaran, silahkan download di menu download doc dengan format "email anda + harga" contoh gugatcerai@yahoo.com+15.343';
		if ($mail->send()) {
		    echo "Your message was sent successfully!";
		    echo "<br>";
		    echo "email ke $email_user[0] TELAH DIKIRIM";
		} else {
		    echo "Mailer Error: " . $mail->ErrorInfo;
		}
		


  	}

	$status = imap_setflag_full($inbox, $emails[0], "\\Seen \\Flagged", ST_UID);
	//echo $overview[0]->subject;
	
	//echo substr($message,102);
   /*
    foreach($emails as $email_number) {

        
        $overview = imap_fetch_overview($inbox,$email_number,0);
        $message = imap_fetchbody($inbox,$email_number,2);
		//$overview = imap_fetch_overview($inbox,0,0);
        //$message = imap_fetchbody($inbox,0,2);
        
        $output.= '<div class="toggler '.($overview[0]->seen ? 'read' : 'unread').'">';
        $output.= '<span class="subject">'.$overview[0]->subject.'</span> ';
        $output.= '<span class="from">'.$overview[0]->from.'</span>';
        $output.= '<span class="date">on '.$overview[0]->date.'</span>';
        $output.= '</div>';
		#echo $email_number;
        
        $output.= '<div class="body">'.$message.'</div>';
    }
	*/
    echo $output;
	session_start();
	
	date_default_timezone_set('Etc/UTC');
	$tgl = date('d-m-Y-H-i-s');
	//$file_bayar = fopen( "./data_bayar/bsm.$tgl" , "w");
	//fputs($file_bayar, $message );
	//fclose($file_bayar);
	
	//$file = $message;
	// Open the file to get existing content
	//$current = file_get_contents($file);
	// Append a new person to the file
	//$current .= "data_bayar/";
	// Write the contents back to the file
	//file_put_contents('data_bayar/',$file);
	//$string = 'I AM STRING!!';
	//file_put_contents('data_bayar', $string);
}
	
	//$dir    = './data_user';
	//$files1 = scandir($dir);
	//print_r($files1); 


imap_close($inbox);

?>

<html>
<head>

<meta http-equiv="refresh" content="600" > 

</head>
</html>

