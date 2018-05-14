
<?php
if(isset($_POST['next_pilihan_pemohon']))
{
	session_start();
	///$_SESSION['pengadilan_agama'] = "pengadilan agama";
	//$_SESSION['pilihan'] = $_GET['text_pengadilan_agama'];	
	
	//$_SESSION['pengadilan_agama'] = "pengadilan agama";
	$_SESSION['pilihan_pemohon'] = $_POST['opt_pilihan_pemohon'];	
	
	echo "pengadilan : ". $_SESSION['pengadilan_agama'] ;
	echo nl2br ("\n");
	echo "kab/kota : ". $_SESSION['pilihan'];
	echo nl2br ("\n");
	echo "pilihan pemohon : ". $_SESSION['pilihan_pemohon'];
	echo nl2br ("\n");
	
	
	echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
}
?>
<html>
<body>
<?php
//session_start();
?>

</body>
</html>