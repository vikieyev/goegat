<?php
// Start the buffering //
ob_start();
?>

<?php
	session_start();
    #header("Content-type: application/vnd.ms-word");
    header("Content-type: application/msword");
    header("Content-Disposition: attachment; Filename={$_SESSION['email_user']}.doc");
	date_default_timezone_set('Etc/UTC');
?>

<?php
if(isset($_POST['preview']))
{
	
	session_start();
	#$_SESSION['pilihan_pemohon'] = $_POST['opt_pilihan_pemohon'];
	#echo "pengadilan : ". $_SESSION['pengadilan_agama'] ;
	#echo nl2br ("\n");
	#echo "kab/kota : ". $_SESSION['pilihan'];
	#echo '<pre>';
	$_SESSION['tanggal']= date('d-m-Y');
	#header('Location: report.php');
	/*
	$_SESSION['pengadilan_agama'] = "pengadilan agama";
	$_SESSION['pilihan'] = $_POST['text_pengadilan_agama'];	
	$_SESSION['pilihan_pemohon'] = $_POST['opt_pilihan_pemohon'];
	
	$_SESSION['bin_binti_pnggt'] = $_POST['binti'];
	$_SESSION['nama_ktp_pnggt'] = $_POST['nama_ktp'];
	$_SESSION['tempat_lahir_pggt'] = $_POST['tempat_lahir'];
	$_SESSION['tanggal_lahir_pggt'] = $_POST['tanggal_lahir'];
	$_SESSION['umur_pggt'] = $_POST['umur'];
	$_SESSION['jenis_kelamin_pggt'] = $_POST['jenis_kelamin'];
	$_SESSION['agama_pggt'] = $_POST['agama'];
	$_SESSION['warganegara_pggt'] = $_POST['warganegara'];
	$_SESSION['jalan_ktp_pggt'] = $_POST['jalan_ktp'];
	$_SESSION['rt_ktp_pggt'] = $_POST['rt_ktp'];
	$_SESSION['rw_ktp_pggt'] = $_POST['rw_ktp'];
	$_SESSION['kel_desa_ktp_pggt'] = $_POST['kel_desa_ktp'];
	$_SESSION['kec_ktp_pggt'] = $_POST['kec_ktp'];
	$_SESSION['kab_ktp_pggt'] = $_POST['kab_ktp'];
	$_SESSION['prov_ktp_pggt'] = $_POST['prov_ktp'];
	$_SESSION['almt_skrg_pggt'] = $_POST['jalan_skrg'];
	$_SESSION['rt_skrg_pggt'] = $_POST['rt_skrg'];
	$_SESSION['rw_skrg_pggt'] = $_POST['rw_skrg'];
	$_SESSION['kel_desa_skrg_pggt'] = $_POST['kel_desa_skrg'];
	$_SESSION['kec_skrg_pggt'] = $_POST['kec_skrg'];
	$_SESSION['kab_skrg_pggt'] = $_POST['kab_skrg'];
	$_SESSION['prov_skrg_pggt'] = $_POST['prov_skrg'];
	$_SESSION['pekerjaan_pggt'] = $_POST['pekerjaan_pggt'];
	$_SESSION['pendidikan_pggt'] = $_POST['pendidikan_pggt'];
	$_SESSION['status_kawin_pggt'] = $_POST['status_kawin_pggt'];
	
	$_SESSION['bin_binti_tggt'] = $_POST['binti_tggt'];
	$_SESSION['nama_ktp_tggt'] = $_POST['nama_ktp_2'];
	$_SESSION['tempat_lahir_tggt'] = $_POST['tempat_lahir_tggt'];
	$_SESSION['tanggal_lahir_tggt'] = $_POST['tanggal_lahir_tggt'];
	$_SESSION['umur_tggt'] = $_POST['umur_tggt'];
	$_SESSION['jenis_kelamin_tggt'] = $_POST['jenis_kelamin_tggt'];
	$_SESSION['agama_tggt'] = $_POST['agama_tggt'];
	$_SESSION['warganegara_tggt'] = $_POST['warganegara_tggt'];
	$_SESSION['jalan_ktp_tggt'] = $_POST['jalan_ktp_tggt'];
	$_SESSION['rt_ktp_tggt'] = $_POST['rt_ktp_tggt'];
	$_SESSION['rw_ktp_tggt'] = $_POST['rw_ktp_tggt'];
	$_SESSION['kel_desa_ktp_tggt'] = $_POST['kel_desa_ktp_tggt'];
	$_SESSION['kec_ktp_tggt'] = $_POST['kec_ktp_tggt'];
	$_SESSION['kab_ktp_tggt'] = $_POST['kab_ktp_tggt'];
	$_SESSION['prov_ktp_tggt'] = $_POST['prov_ktp_tggt'];
	$_SESSION['almt_skrg_tggt'] = $_POST['jalan_skrg_tggt'];
	$_SESSION['rt_skrg_tggt'] = $_POST['rt_skrg_tggt'];
	$_SESSION['rw_skrg_tggt'] = $_POST['rw_skrg_tggt'];
	$_SESSION['kel_desa_skrg_tggt'] = $_POST['kel_desa_skrg_tggt'];
	$_SESSION['kec_skrg_tggt'] = $_POST['kec_skrg_tggt'];
	$_SESSION['kab_skrg_tggt'] = $_POST['kab_skrg_tggt'];
	$_SESSION['prov_skrg_tggt'] = $_POST['prov_skrg_tggt'];
	$_SESSION['pekerjaan_tggt'] = $_POST['pekerjaan_tggt'];
	$_SESSION['pendidikan_tggt'] = $_POST['pendidikan_tggt'];
	$_SESSION['status_kawin_tggt'] = $_POST['status_kawin_tggt'];
	$_SESSION['keberadaan_tdk_diketahui_tggt']
	
	$_SESSION['dalil_tgl_nikah'] = $_POST['dalil_tgl_nikah'];
	$_SESSION['dalil_kecamatan'] = $_POST['dalil_kecamatan'];
	$_SESSION['dalil_kabupaten'] = $_POST['dalil_kabupaten'];
	$_SESSION['no_akta_nikah'] = $_POST['no_akta_nikah'];
	$_SESSION['tgl_akta_nikah'] = $_POST['tgl_akta_nikah'];
	$_SESSION['status_penggugat'] = $_POST['status_penggugat'];
	$_SESSION['status_tergugat'] = $_POST['status_tergugat'];
	$_SESSION['status_penggugat'] = $_POST['status_penggugat'];
	$_SESSION['opt_tmpt_tgl_bersama_stlh_nikah'] = $_POST['opt_tmpt_tgl_bersama_stlh_nikah'];
	$_SESSION['lama_tahun'] = $_POST['lama_tahun'];
	$_SESSION['lama_bulan'] = $_POST['lama_bulan'];
	$_SESSION['jalan_stlh_nikah'] = $_POST['jalan_stlh_nikah'];
	$_SESSION['rt_stlh_nikah'] = $_POST['rt_stlh_nikah'];
	$_SESSION['rw_stlh_nikah'] = $_POST['rw_stlh_nikah'];
	$_SESSION['kel_stlh_nikah'] = $_POST['kel_stlh_nikah'];
	$_SESSION['kec_stlh_nikah'] = $_POST['kec_stlh_nikah'];
	$_SESSION['kab_stlh_nikah'] = $_POST['kab_stlh_nikah'];
	$_SESSION['prov_stlh_nikah'] = $_POST['prov_stlh_nikah'];
	
	$_SESSION['opt_anak_dari_nikah'] = $_POST['opt_anak_dari_nikah'];
	$_SESSION['nama_anak_1'] = $_POST['nama_anak_1'];
	$_SESSION['nama_anak_2'] = $_POST['nama_anak_2'];
	$_SESSION['nama_anak_3'] = $_POST['nama_anak_3'];
	$_SESSION['tgl_lhr_anak_1'] = $_POST['tgl_lhr_anak_1'];
	$_SESSION['tgl_lhr_anak_2'] = $_POST['tgl_lhr_anak_2'];
	$_SESSION['tgl_lhr_anak_3'] = $_POST['tgl_lhr_anak_3'];
	$_SESSION['jns_klmn_anak_1'] = $_POST['jns_klmn_anak_1'];
	$_SESSION['jns_klmn_anak_2'] = $_POST['jns_klmn_anak_2'];
	$_SESSION['jns_klmn_anak_3'] = $_POST['jns_klmn_anak_3'];
	
	$_SESSION['tgl_awal_mula_selisih'] = $_POST['tgl_awal_mula_selisih'];
	$_SESSION['txt_alasan_perselisihan'] = $_POST['txt_alasan_perselisihan'];
	$_SESSION['tgl_puncak_selisih'] = $_POST['tgl_puncak_selisih'];
	$_SESSION['tgl_pisah_ranjang'] = $_POST['tgl_pisah_ranjang'];
	$_SESSION['txt_alasan_psh_ranjang'] = $_POST['txt_alasan_psh_ranjang'];
	*/
#var_dump($_SESSION);
echo '</pre>';
}
?>
<head>
<style type="text/css">
 p.MsoNormal
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:0cm;
	line-height:115%;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	}
.shape {behavior:url(#default#VML);}
p.ListParagraph1
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	}
p.ListParagraph1CxSpMiddle
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	}
p.ListParagraph1CxSpLast
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	}
.auto-style1 {
	background-color: #FFFF00;
}
.auto-style2 {
	background-color: #FFFFFF;
}
.auto-style3 {
	color: #000000;
}
.auto-style4 {
	font-weight: normal;
	font-size: small;
}
.auto-style5 {
	font-family: "Times New Roman", Times, serif;
}
.auto-style6 {
	color: #000000;
	font-family: "Times New Roman", Times, serif;
	font-size: small;
}
.auto-style7 {
	font-size: small;
}
.auto-style8 {
	font-family: "Times New Roman", Times, serif;
	font-size: small;
}
.auto-style9 {
	color: #000000;
	font-size: small;
}
.auto-style10 {
	background-color: #FFFFFF;
	font-size: small;
}
</style>
</head>




<html>
<body>
<font face="aerial" >

<p class="auto-style5" align="right"><span lang="IN" style="mso-ansi-language:
IN"><span class="auto-style7">&nbsp;</span><span style="mso-tab-count:1" class="auto-style7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style="mso-ansi-language:
IN" class="auto-style10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span lang="IN" style="mso-ansi-language:
IN"><span class="auto-style2"><span class="auto-style1"> </span> </span>
<span class="auto-style7"><?php
### UNTUK IF ELSE TEMPAT KABUPATEN DAN ALAMAT SEKARANG YG NAMPAK ######################
#$style = "";
if ($_SESSION['kab_skrg_pggt'] == "")
{ 
	echo $_SESSION['kab_ktp_pggt'];
	#$style = "style='display:none;'";
}
else
{
	echo $_SESSION['kab_skrg_pggt'];
} 
?> </span>,<span class="auto-style1"><span class="auto-style2"> 
<span class="auto-style7"> <?php echo $_SESSION['tanggal']; ?>
</span>
</span></span></span><span class="auto-style7"></span></span></p>
<p class="auto-style5"><span lang="IN" style="mso-ansi-language:IN">
<span style="mso-tab-count:1" class="auto-style7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></p>
<p align="center" class="auto-style5">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style7">&nbsp;</span></p>
<p class="auto-style5">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style7">Kepada yang 
terhormat,</span></p>
<p class="auto-style5">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style7">Ketua </span>
<span lang="EN-ID" class="auto-style7">Pengadilan </span>
<span class="auto-style7">Negeri</span><span lang="EN-ID">
<span style="background: ; mso-highlight: " class="auto-style7"><?php
### UNTUK IF ELSE TEMPAT KABUPATEN DAN ALAMAT SEKARANG YG NAMPAK ######################
#$style = "";
if ($_SESSION['kab_skrg_pggt'] == "")
{ 
	echo $_SESSION['kab_ktp_pggt'];
	#$style = "style='display:none;'";
}
else
{
	echo $_SESSION['kab_skrg_pggt'];
} 
?></span><a name="_GoBack"></a></span></p>
<p class="auto-style5">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style7">di -</span><span lang="EN-ID" style="background: ; mso-highlight: " class="auto-style7"><?php
### UNTUK IF ELSE TEMPAT KABUPATEN DAN ALAMAT SEKARANG YG NAMPAK ######################
#$style = "";
if ($_SESSION['kab_skrg_pggt'] == "")
{ 
	echo $_SESSION['kab_ktp_pggt'];
	#$style = "style='display:none;'";
}
else
{
	echo $_SESSION['kab_skrg_pggt'];
} 
	 
?></span></p>
<p class="auto-style5">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style7">&nbsp;</span></p>
<p class="auto-style5">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style7">&nbsp;</span></p>
<p class="auto-style5">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style7">Dengan hormat,</span></p>
<p class="auto-style5">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style7">Yang bertanda 
tangan dibawah ini, saya :</span></p>
<p class="auto-style5"><span style="mso-bidi-font-weight:normal">
<span lang="IN" style="background: ; mso-highlight: ; mso-ansi-language: IN" class="auto-style7">
<?php echo $_SESSION['nama_ktp_pnggt']; ?> </span></span>
<span lang="IN" style="mso-ansi-language:IN" class="auto-style7">, 
Tempat / tanggal lahir : </span>
<span style="mso-ansi-language:IN" class="auto-style7"><?php echo $_SESSION['tempat_lahir_pggt']; ?></span><span lang="IN" style="mso-ansi-language:IN"><span style="background: ; mso-highlight: ">
<span class="auto-style7">/ <?php echo $_SESSION['tanggal_lahir_pggt']; ?>
</span></span><span class="auto-style7">, Umur :
</span>
<span style="background: ; mso-highlight: " class="auto-style7"><?php echo $_SESSION['umur_pggt']; ?></span> 
<span class="auto-style7">tahun,</span><span style="mso-spacerun:yes" class="auto-style7">&nbsp;
</span><span class="auto-style7">Jenis kelamin : </span> 
<span style="background: ; mso-highlight: " class="auto-style7">
<?php echo $_SESSION['jenis_kelamin_pggt']; ?></span>,<span style="mso-spacerun:yes" class="auto-style7">&nbsp; </span>
<span class="auto-style7">Agama :
</span>
<span style="background: ; mso-highlight: "><span class="auto-style7"><?php echo $_SESSION['agama_pggt']; ?>,</span></span><span class="auto-style7"> Warga 
negara : </span> 
<span style="background: ; mso-highlight: " class="auto-style7"><?php echo $_SESSION['warganegara_pggt']; ?></span>
<span class="auto-style7">, 
Pekerjaan : </span> 
<span style="background: ; mso-highlight: " class="auto-style7"><?php echo $_SESSION['pekerjaan_pggt']; ?></span>
<span class="auto-style7">, 
Status : </span> 
<span style="background: ; mso-highlight: " class="auto-style7"><?php echo $_SESSION['status_kawin_pggt']; ?></span>
<span class="auto-style7">, 
Pendidikan : </span> 
<span style="background: ; mso-highlight: " class="auto-style7"><?php echo $_SESSION['pendidikan_pggt']; ?></span>
<span class="auto-style7">, 
Alamat : </span> 
<span style="background: ; mso-highlight: " class="auto-style7"><?php echo $_SESSION['jalan_ktp_pggt']; ?></span>
<span class="auto-style7">, 
RT. </span> <span style="background: ; mso-highlight: " class="auto-style7"><?php echo $_SESSION['rt_ktp_pggt']; ?></span> 
<span class="auto-style7">RW.
</span>
<span style="background: ; mso-highlight: " class="auto-style7"><?php echo $_SESSION['rw_ktp_pggt']; ?></span>,<span style="mso-spacerun:yes" class="auto-style7">&nbsp;
</span><span class="auto-style7">Kelurahan / Desa :
</span>
<span style="background: ; mso-highlight: " class="auto-style7"><?php echo $_SESSION['kel_desa_ktp_pggt']; ?></span>
<span class="auto-style7">, Kecamatan 
: </span> <span style="background: ; mso-highlight: " class="auto-style7"><?php echo $_SESSION['kec_ktp_pggt']; ?></span>
<span class="auto-style7">, Kota / 
Kabupaten : </span> 
<span style="background: ; mso-highlight: " class="auto-style7"><?php echo $_SESSION['kab_ktp_pggt']; ?></span>
<span class="auto-style7">, 
Provinsi : </span> 
<span style="background: ; mso-highlight: " class="auto-style7"><?php echo $_SESSION['prov_ktp_pggt']; ?></span> 
<span class="auto-style7">.</span></span></p>

<div class="MsoNormal" <?php
$style = "";
if ($_SESSION['kab_skrg_pggt'] == "")
{ 
	#echo $_SESSION['kab_ktp_pggt'];
	$style = "style='display:none;'";
}

echo $style; ### UNTUK IF ELSE TEMPAT KABUPATEN DAN ALAMAT SEKARANG YG NAMPAK ######################
?>>

<p class="MsoNormal">
<span class="auto-style8">
<span lang="IN" style="mso-themecolor:text1;
;mso-ansi-language:IN" class="auto-style3">Alamat tinggal sekarang :<?php echo $_SESSION['almt_skrg_pggt']; ?>, RT</span><span style="mso-themecolor:text1;mso-ansi-language:
EN-US" class="auto-style3"> <?php echo $_SESSION['rt_skrg_pggt']; ?></span>
<span lang="IN" style="mso-themecolor:text1
;mso-ansi-language:IN" class="auto-style3">RW</span><span style="mso-themecolor:text1;mso-ansi-language:EN-US" class="auto-style3"> <?php echo $_SESSION['rw_skrg_pggt']; ?></span>
<span lang="IN" style="mso-themecolor:text1;mso-ansi-language:
IN" class="auto-style3">,Kelurahan / desa :<span style="mso-spacerun:yes">&nbsp; </span><?php echo $_SESSION['kel_desa_skrg_pggt']; ?>, 
Kecamatan : <?php echo $_SESSION['kec_skrg_pggt']; ?>, Kota /<span style="mso-spacerun:yes">&nbsp; </span>Kabupaten 
: </span>
<span lang="EN-ID" style="mso-themecolor:text1" class="auto-style3">
<?php echo $_SESSION['kab_skrg_pggt']; ?></span>
<span lang="IN" style="mso-themecolor:text1;mso-ansi-language:
IN" class="auto-style3">, Provinsi : <?php echo $_SESSION['prov_skrg_pggt']; ?> </span>
</span><span lang="IN" style="mso-themecolor:text1;mso-ansi-language:
IN">;<o:p></o:p></span></p>

</div>

<p class="auto-style5">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style7">Selanjutnya 
disebut sebagai Penggugat ;</span></p>
<p class="auto-style5">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style7">Dengan ini, 
Penggugat mengajukan Gugatan Cerai terhadap </span>
<span style="mso-ansi-language:IN" class="auto-style7">Suami</span><span lang="IN" style="mso-ansi-language:IN" class="auto-style7"> saya :</span></p>
<span style="mso-bidi-font-weight:normal">
<p class="MsoNormal"></span>
<span class="auto-style5">
<span lang="IN" style="background: ; mso-highlight: ; mso-ansi-language: IN">
<span style="mso-bidi-font-weight:normal">
<span class="auto-style7">
<?php echo $_SESSION['nama_ktp_tggt']; ?> </span> </span>
<span class="auto-style7"><b style="mso-bidi-font-weight:normal">
&nbsp;</b></span></span><span class="auto-style7"><span lang="IN" style="mso-ansi-language:IN">, 
Tempat / tanggal lahir : <span style="background: ; mso-highlight: ">
<?php echo $_SESSION['tempat_lahir_tggt']; ?> / </span></span>
<span style="background: ; mso-highlight: ; mso-ansi-language: EN-US">
<?php echo $_SESSION['tanggal_lahir_tggt']; ?></span><span lang="IN" style="mso-ansi-language:IN">, Umur:
<span style="background: ; mso-highlight: "><?php echo $_SESSION['umur_tggt']; ?></span></span>
<span style="background: ; mso-highlight: ">
<span style="mso-ansi-language:IN">&nbsp;</span></span><span lang="IN" style="mso-ansi-language:IN">tahun, Jenis 
kelamin<span style="mso-tab-count:0">&nbsp; </span>: <span style="background: ; mso-highlight: ">
<?php echo $_SESSION['jenis_kelamin_tggt']; ?>,</span>Agama<span style="mso-tab-count:0">&nbsp;
</span><span style="background: ; mso-highlight: ">: <?php echo $_SESSION['agama_tggt']; ?></span>,Warga 
Negara : <?php echo $_SESSION['warganegara_tggt']; ?>, Pekerjaan :
<span style="background: ; mso-highlight: "><?php echo $_SESSION['pekerjaan_tggt']; ?></span>, 
Status : <span style="background: ; mso-highlight: "><?php echo $_SESSION['status_kawin_tggt']; ?></span>, 
Pendidikan<span style="mso-tab-count:0">&nbsp;</span>:<span style="background: ; mso-highlight: "><?php echo $_SESSION['pendidikan_tggt']; ?></span>, Alamat<span style="mso-tab-count:0"> </span>:
<span style="background: ; mso-highlight: "><?php echo $_SESSION['jalan_ktp_tggt']; ?>,</span>RT.</span></span><span lang="EN-ID" style="background: ; mso-highlight: "><span class="auto-style7"><?php echo $_SESSION['rt_ktp_tggt']; ?></span></span><span class="auto-style7">&nbsp;
<span lang="IN" style="mso-ansi-language:IN">RW.
<span style="background: ; mso-highlight: "><?php echo $_SESSION['rw_ktp_tggt']; ?></span>, Kelurahan / 
desa : <span style="background: ; mso-highlight: "><?php echo $_SESSION['kel_desa_ktp_tggt']; ?></span>, 
Kecamatan : <span style="background: ; mso-highlight: "><?php echo $_SESSION['kec_ktp_tggt']; ?>,</span> 
Kota /<span style="mso-spacerun:yes">&nbsp; </span>Kabupaten : </span>
<span lang="EN-ID" style="background: ; mso-highlight: "><?php echo $_SESSION['kab_ktp_tggt']; ?></span>
</span><span lang="IN" style="mso-ansi-language:IN"><span class="auto-style7">, 
Provinsi :<span style="background: ; mso-highlight: "><?php echo $_SESSION['prov_ktp_tggt']; ?></span> 
;</span></span></span></p>

<div class="MsoNormal" <?php
$style = "";
if ($_SESSION['kab_skrg_tggt'] == "")
{ 
	#echo $_SESSION['kab_ktp_pggt'];
	$style = "style='display:none;'";
}

echo $style; ### UNTUK IF ELSE TEMPAT KABUPATEN DAN ALAMAT SEKARANG YG NAMPAK ######################
?>>

<p class="MsoNormal">
<span class="auto-style8">
<span lang="IN" style="mso-themecolor:text1;
;mso-ansi-language:IN" class="auto-style3">Alamat tinggal sekarang :<?php echo $_SESSION['almt_skrg_tggt']; ?>, RT</span><span style="mso-themecolor:text1;mso-ansi-language:
EN-US" class="auto-style3"> <?php echo $_SESSION['rt_skrg_tggt']; ?></span>
<span lang="IN" style="mso-themecolor:text1
;mso-ansi-language:IN" class="auto-style3">RW</span><span style="mso-themecolor:text1;mso-ansi-language:EN-US" class="auto-style3"> <?php echo $_SESSION['rw_skrg_tggt']; ?></span>
<span lang="IN" style="mso-themecolor:text1;mso-ansi-language:
IN" class="auto-style3">,Kelurahan / desa :<span style="mso-spacerun:yes">&nbsp; </span><?php echo $_SESSION['kel_desa_skrg_tggt']; ?>, 
Kecamatan : <?php echo $_SESSION['kec_skrg_tggt']; ?>, Kota /<span style="mso-spacerun:yes">&nbsp; </span>Kabupaten 
: </span>
<span lang="EN-ID" style="mso-themecolor:text1" class="auto-style3">
<?php echo $_SESSION['kab_skrg_tggt']; ?></span>
<span lang="IN" style="mso-themecolor:text1;mso-ansi-language:
IN" class="auto-style3">, Provinsi : <?php echo $_SESSION['prov_skrg_tggt']; ?> </span>
</span><span lang="IN" style="mso-themecolor:text1;mso-ansi-language:
IN">;<o:p></o:p></span></p>
</div>

<div class="MsoNormal" <?php 
$style = "";
if ($_SESSION['keberadaan_tdk_diketahui_tggt'] == "tidak")
{ 
	$style = "style='display:none;'";
	echo $style;
}
else
{
	echo $style; ### UNTUK IF ELSE TEMPAT KABUPATEN DAN ALAMAT SEKARANG YG NAMPAK ######################
}
?>>


<p class="MsoNormal">
<span lang="IN" style="mso-themecolor:text1;
;mso-ansi-language:IN" class="auto-style6">Sekarang tidak diketahui alamatnya yang 
pasti di wilayah Negara Kesatuan Republik Indonesia ;</span><span lang="EN-ID" ;mso-themecolor:text1"><o:p></o:p></span></p>

</div>

<p class="auto-style5">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style7">Selanjutnya 
disebut sebagai Tergugat ;</span></p>
<p class="auto-style5">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style7">Adapun dasar 
dan alasan / dalil-dalil gugatan ini diajukan adalah sebagai berikut :</span></p>
<p class="listparagraph1"><span class="auto-style5">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style7">1.</span><span lang="IN" style="mso-ansi-language:IN" class="auto-style7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span lang="IN" style="mso-ansi-language:IN"><span class="auto-style7">Bahwa pada tanggal
<span style="mso-bidi-font-weight:
normal"><span style="background: ; mso-highlight: "> <?php echo $_SESSION['dalil_tgl_nikah']; ?> ,</span>
</span></span></span><span class="auto-style7"><span style="background: ; mso-highlight: ">
<span style="mso-ansi-language:IN">
<b style="mso-bidi-font-weight:
normal">&nbsp;</b></span></span><span lang="IN" style="mso-ansi-language:IN">Penggugat 
telah melangsungkan pernikahan dengan Tergugat yang dilaksanakan</span><span style="mso-ansi-language:IN"> 
di <?php echo $_SESSION['dalil_tmpt_nikah']; ?></span></span></span><span lang="IN" style="mso-ansi-language:IN">
<span class="auto-style5"><span class="auto-style7">.
</span></span>
<span lang="IN" style="mso-fareast-font-family:Calibri;mso-fareast-theme-font:
minor-latin;mso-bidi-theme-font:minor-bidi;mso-ansi-language:IN;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA" class="auto-style8">sah menurut hukum dan tata cara agama serta telah 
di catatkan pada Kantor Catatan Sipil Kota/Kabupaten</span> 
<span style="mso-bidi-font-weight:
normal"><span style="background: ; mso-highlight: " class="auto-style5">
<span class="auto-style7"><?php echo $_SESSION['dalil_kabupaten']; ?></span></span>
</span><span class="auto-style5"><span class="auto-style7">, 
sebagaimana dalam Kutipan Akta Nikah<span lang="en-us"> </span>Nomor :
<span style="mso-bidi-font-weight:
normal"><span style="background: ; mso-highlight: "><?php echo $_SESSION['no_akta_nikah']; ?></span>
</span>, 
Tanggal <span style="mso-bidi-font-weight:normal">
<span style="background: ; mso-highlight: "><?php echo $_SESSION['tgl_akta_nikah']; ?></span>
</span>;</span></span></span></p>
<p class="auto-style5">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style7">2.</span><span lang="IN" style="mso-ansi-language:IN" class="auto-style7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span lang="IN" style="mso-ansi-language:IN" class="auto-style7">Bahwa sebelum menikah Penggugat 
(</span><span style="mso-ansi-language:IN" class="auto-style7">istri</span><span lang="IN" style="mso-ansi-language:IN"><span class="auto-style7">) berstatus <?php echo $_SESSION['status_penggugat']; ?> dan Tergugat</span><span style="mso-spacerun:yes" class="auto-style7">&nbsp;
</span><span class="auto-style7">(</span></span><span style="mso-ansi-language:IN" class="auto-style7">suami</span><span lang="IN" style="mso-ansi-language:IN"><span class="auto-style7">) berstatus <?php echo $_SESSION['status_tergugat']; ?>, kemudian perkawinan antara Penggugat dan 
Tergugat dilangsungkan berdasarkan kehendak kedua belah pihak dengan tujuan 
membentuk rumah tangga yang</span></span><span style="mso-ansi-language:IN" class="auto-style7"> bahagia 
dan kekal</span><span lang="IN" style="mso-ansi-language:IN"><span class="auto-style7"> ;</span><span style="mso-spacerun:yes" class="auto-style7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></p>
<p class="auto-style5">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style7">3.</span><span lang="IN" style="mso-ansi-language:IN" class="auto-style7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span lang="IN" style="mso-ansi-language:IN"><span class="auto-style7">Bahwa setelah pernikahan tersebut, 
Penggugat dengan tergugat bertempat tinggal bersama
</span>
<span style="mso-bidi-font-weight:
normal"><span style="background: ; mso-highlight: " class="auto-style7"><?php echo $_SESSION['opt_tmpt_tgl_bersama_stlh_nikah']; ?></span>
</span></span>
<b style="mso-bidi-font-weight:
normal"><span style="background: ; mso-highlight: ">
<span style="mso-ansi-language:IN" class="auto-style7">&nbsp;</span></span></b><span lang="IN" style="mso-ansi-language:IN"><span class="auto-style7">yang 
beralamat di
</span>
<span style="background: ; mso-highlight: "> 
<span style="mso-bidi-font-weight:normal">
<span class="auto-style7">
<?php echo $_SESSION['jalan_stlh_nikah']; ?> , 
RT <?php echo $_SESSION['rt_stlh_nikah']; ?> RW <?php echo $_SESSION['rw_stlh_nikah']; ?>
</span>
</span> <b style="mso-bidi-font-weight:normal">
<span class="auto-style7">, 
</span> 
</b> <span style="mso-bidi-font-weight:normal">
<span class="auto-style7">Kelurahan <?php echo $_SESSION['kel_stlh_nikah']; ?>
</span></span> <b style="mso-bidi-font-weight:normal">
<span class="auto-style7">, </span> </b> 
<span style="mso-bidi-font-weight:normal" class="auto-style7">
Kecamatan</span><b style="mso-bidi-font-weight:normal"><span lang="en-us" class="auto-style7">
</span></b> <span style="mso-bidi-font-weight:normal" class="auto-style7">
<?php echo $_SESSION['kec_stlh_nikah']; ?></span> <b style="mso-bidi-font-weight:normal">
<span class="auto-style7">, </span> </b> 
<span style="mso-bidi-font-weight:normal" class="auto-style7">
Kota</span><b style="mso-bidi-font-weight:normal"><span class="auto-style7">
/ </span> </b> <span style="mso-bidi-font-weight:normal" class="auto-style7">
Kabupaten</span><b style="mso-bidi-font-weight:normal"><span lang="en-us" class="auto-style7">
</span></b> <span style="mso-bidi-font-weight:normal" class="auto-style7">
<?php echo $_SESSION['kab_stlh_nikah']; ?></span> <b style="mso-bidi-font-weight:normal">
<span class="auto-style7">, </span> </b> 
<span style="mso-bidi-font-weight:normal" class="auto-style7">
Provinsi</span><b style="mso-bidi-font-weight:normal"><span lang="en-us" class="auto-style7"> </span></b> 
<span style="mso-bidi-font-weight:normal" class="auto-style7">
<?php echo $_SESSION['prov_stlh_nikah']; ?></span><span class="auto-style7">,</span></span><span class="auto-style7"> 
Selama </span> <span style="mso-bidi-font-weight:
normal"><span style="background: ; mso-highlight: " class="auto-style7"><?php echo $_SESSION['lama_tahun']; ?></span>
</span> 
<span class="auto-style7">tahun </span> <span style="mso-bidi-font-weight:normal">
<span style="background: ; mso-highlight: " class="auto-style7"><?php echo $_SESSION['lama_bulan']; ?></span>
</span> <span class="auto-style7">bulan;</span><span style="mso-tab-count:1" class="auto-style7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></p>
<p class="auto-style5">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style7">4.</span><span lang="IN" style="mso-ansi-language:IN" class="auto-style7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span lang="IN" style="mso-ansi-language:IN"><span class="auto-style7">Bahwa selama pernikahan tersebut 
antara penggugat</span><span style="mso-spacerun:yes" class="auto-style7">&nbsp; </span>
<span class="auto-style7">dengan tergugat</span><span style="background: ; mso-highlight: "><span class="auto-style7">,
</span>
<span style="mso-bidi-font-weight:
normal" class="auto-style7"><?php echo $_SESSION['opt_anak_dari_nikah']; ?></span></span></span>
</p>
<div class="MsoNormal" <?php 
$style = "";
if ($_SESSION['nama_anak_1'] == "")
{ 
	#echo $_SESSION['kab_ktp_pggt'];
	$style = "style='display:none;'";
}

echo $style; ### UNTUK IF ELSE anak dari pernikahan  ######################
?>>

<p class="listparagraph1CxSpMiddle">
<span lang="IN" style="mso-ansi-language:IN">
<span style="color:black;mso-themecolor:
text1" class="auto-style8">yang bernama :</span><span style="color:#7F7F7F;mso-themecolor:text1"><o:p></o:p></span></span></p>


<p class="auto-style5">
<span lang="IN" style="color:#7F7F7F;mso-themecolor:text1;mso-ansi-language:
IN" class="auto-style7">- </span> <span style="background: ; mso-highlight: ">
<span lang="IN" style="mso-themecolor:text1;mso-ansi-language:
IN" class="auto-style3"><span class="auto-style7"><?php echo $_SESSION['nama_anak_1']; ?>, Tempat / 
tanggal lahir : <?php echo $_SESSION['tgl_lhr_anak_1']; ?>, Jenis kelamin : <?php echo $_SESSION['jns_klmn_anak_1']; ?> 
</span> </span>
<span lang="IN" style="color:#7F7F7F;mso-themecolor:text1;mso-ansi-language:
IN" class="auto-style7">;</span></span><o:p></o:p></p>
</div>
<div class="MsoNormal" <?php
 $style = "";
if ($_SESSION['nama_anak_2'] == "")
{ 
	#echo $_SESSION['kab_ktp_pggt'];
	$style = "style='display:none;'";
}

echo $style; ### UNTUK IF ELSE anak dari pernikahan  ######################
?>>

<p class="auto-style5">
<o:p>
<span lang="IN" style="color:#7F7F7F;mso-themecolor:text1;mso-ansi-language:
IN" class="auto-style7">- </span> <span style="background: ; mso-highlight: ">
<span lang="IN" style="mso-themecolor:text1;mso-ansi-language:
IN" class="auto-style3"><span class="auto-style7"><?php echo $_SESSION['nama_anak_2']; ?>, Tempat / 
tanggal lahir : <?php echo $_SESSION['tgl_lhr_anak_2']; ?>, Jenis kelamin : <?php echo $_SESSION['jns_klmn_anak_2']; ?> 
</span> </span>
<span lang="IN" style="color:#7F7F7F;mso-themecolor:text1;mso-ansi-language:
IN" class="auto-style7">;</span></span><o:p></o:p></o:p></p>
</div>
<div class="MsoNormal" <?php
 $style = "";
if ($_SESSION['nama_anak_3'] == "")
{ 
	#echo $_SESSION['kab_ktp_pggt'];
	$style = "style='display:none;'";
}

echo $style; ### UNTUK IF ELSE anak dari pernikahan  ######################
?>>

<p class="listparagraph1CxSpMiddle">
<o:p>
<o:p>
<span class="auto-style8">
<span lang="IN" style="color:#7F7F7F;mso-themecolor:text1;mso-themetint:128;mso-ansi-language:
IN">- </span> <span style="background: ; mso-highlight: ">
<span lang="IN" style="mso-themecolor:text1;mso-ansi-language:
IN" class="auto-style3"><?php echo $_SESSION['nama_anak_3']; ?>, Tempat / 
tanggal lahir : <?php echo $_SESSION['tgl_lhr_anak_3']; ?>, Jenis kelamin : <?php echo $_SESSION['jns_klmn_anak_3']; ?> </span>
<span lang="IN" style="color:#7F7F7F;mso-themecolor:text1;mso-ansi-language:
IN">;</span></span></span><span lang="EN-ID" style="color:#7F7F7F;mso-themecolor:text1"><o:p></o:p></span></o:p></o:p></p>
</div>
<p class="auto-style5">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style7">5.</span><span lang="IN" style="mso-ansi-language:IN" class="auto-style7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span lang="IN" style="mso-ansi-language:IN"><span class="auto-style7">Bahwa pada awalanya kehidupan rumah 
tangga antara Pengguggat dan Tergugat berjalan harmonis, namun sejak
</span>
<span style="mso-bidi-font-weight:
normal"><span style="background: ; mso-highlight: " class="auto-style7"><?php echo $_SESSION['tgl_awal_mula_selisih']; ?></span>
</span> 
<span class="auto-style7">rumah tangga Pengguggat dengan Tergugat mulai goyah dan sering terjadi 
perselisihan dan pertengkaran yang disebabkan </span> </span>
<span style="mso-bidi-font-weight:
normal">
<span lang="EN-ID" style="background: ; mso-highlight: " class="auto-style7">
<?php echo $_SESSION['txt_alasan_perselisihan']; ?></span></span>
<span lang="IN" style="mso-ansi-language:IN" class="auto-style7">;</span></p>
<p class="auto-style5">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style7">6.</span><span lang="IN" style="mso-ansi-language:IN" class="auto-style7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span lang="IN" style="mso-ansi-language:IN;mso-fareast-language:IN" class="auto-style7">
Bahwa</span><span lang="IN" style="mso-ansi-language:IN"><span class="auto-style7"> puncak perselisihan 
dan pertengkaran tersebut terjadi pada tanggal
</span>
<span style="mso-bidi-font-weight:normal">
<span style="background: ; mso-highlight: " class="auto-style7"><?php echo $_SESSION['tgl_puncak_selisih']; ?></span>
</span><span class="auto-style7">yang akibatnya Penggugat dan 
Tergugat Pisah Ranjang sejak </span> <span style="mso-bidi-font-weight:normal">
<span style="background: ; mso-highlight: " class="auto-style7"><?php echo $_SESSION['tgl_pisah_ranjang']; ?></span>
</span> 
<span class="auto-style7">sampai dengan sekarang, dikarenakan </span> <span style="mso-bidi-font-weight:normal">
<span style="background: ; mso-highlight: " class="auto-style7"><?php echo $_SESSION['txt_alasan_psh_ranjang']; ?></span>
</span><span class="auto-style7">; </span> 
<span style="mso-tab-count:1" class="auto-style7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></p>
<p class="auto-style5">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style7">7.</span><span lang="IN" style="mso-ansi-language:IN" class="auto-style7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span lang="IN" style="mso-ansi-language:IN;mso-fareast-language:IN" class="auto-style7">
Bahwa</span><span lang="IN" style="mso-ansi-language:IN" class="auto-style7"> atas sikap atau 
perbuatan tergugat tersebut, penggugat merasa sangat menderita lahir batin dan 
oleh karenanya penggugat tidak rela dan berkesimpulan bahwa tergugat adalah </span>
<span style="mso-ansi-language:IN" class="auto-style7"> suami</span><span lang="IN" style="mso-ansi-language:IN" class="auto-style7"> yang tidak bertanggungjawab ;</span></p>
<p class="listparagraph1"><span class="auto-style5">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style7">8.</span><span lang="IN" style="mso-ansi-language:IN" class="auto-style7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="IN" style="mso-fareast-font-family:Calibri;mso-fareast-theme-font:
minor-latin;mso-bidi-theme-font:minor-bidi;mso-ansi-language:IN;mso-fareast-language:
IN;mso-bidi-language:AR-SA" class="auto-style8">Bahwa </span>
<span lang="IN" style="mso-fareast-font-family:Calibri;
mso-fareast-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi;mso-ansi-language:
IN;mso-fareast-language:EN-US;mso-bidi-language:AR-SA" class="auto-style8">ikatan perkawinan antara 
Penggugat dan Tergugat sebagaimana yang diuraikan diatas sudah sulit dibina 
untuk membentuk suatu rumah tangga yang rukun, damai dan bahagia, sebagaimana 
maksud dan tujuan dari suatu perkawinan semula untuk membentuk keluarga yang 
bahagia dan kekal sebagaimana amanat Undang-undang no. 1 tahun 1974 tentang 
Perkawinan, sehingga lebih baik diputus karena perceraian</span><span lang="EN-ID" class="auto-style8">;</span><span lang="EN-ID" style="mso-fareast-font-family:&quot;Times New Roman&quot;"><o:p></o:p></span></p>
<p class="auto-style5">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style7">9.</span><span lang="IN" style="mso-ansi-language:IN" class="auto-style7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span lang="IN" style="mso-ansi-language:IN;mso-fareast-language:IN" class="auto-style7">Bahwa
</span><span lang="IN" style="mso-ansi-language:IN" class="auto-style7">Penggugat sanggup membayar 
biaya perkara;</span></p>

<div class="MsoNormal" <?php 
$style = "";
if ($_SESSION['permohonan_nafkah_anak'] == "tidak")
{ 
	#echo $_SESSION['kab_ktp_pggt'];
	$style = "style='display:none;'";
}

echo $style; ### UNTUK IF ELSE anak dari pernikahan hak asuuuh  ######################
?>>

<p class="auto-style5">
<span lang="IN" style="mso-themecolor:text1;mso-ansi-language:IN" class="auto-style9">10.</span><span style="mso-themecolor:text1;mso-ansi-language:IN" class="auto-style9"> </span>


<span lang="IN"  
<?php 
$style = "mso-ansi-language:IN";
if ($_SESSION['nama_anak_1'] == "")
{ 
	$style = "style='display:none;'";
}

echo $style; ### UNTUK IF ELSE anak dari pernikahan hak asuuuh  ######################
?>><span class="auto-style7">Bahwa anak kami yang bernama

</span>

<span style="background: ; mso-highlight: "><span class="auto-style7"><?php echo $_SESSION['nama_anak_1']; ?>
</span>,<span style="mso-spacerun:yes" class="auto-style7">&nbsp;
</span></span><span class="auto-style3">
<span style="background: ; mso-highlight: "><span class="auto-style7">Tempat / tanggal lahir : 
<?php echo $_SESSION['tgl_lhr_anak_1']; ?>, Jenis kelamin : <?php echo $_SESSION['jns_klmn_anak_1']; ?>
</span></span><span class="auto-style7">&nbsp;
</span>
</span>
</span>
<span lang="IN" 
<?php 
$style = "mso-ansi-language:IN";
if ($_SESSION['nama_anak_2'] == "")
{ 
	$style = "style='display:none;'";
}

echo $style; ### UNTUK IF ELSE anak dari pernikahan hak asuuuh  ######################
?>> <span style="background: ; mso-highlight: "><span class="auto-style7"><?php echo $_SESSION['nama_anak_2']; ?>
</span>,<span style="mso-spacerun:yes" class="auto-style7">&nbsp;
</span></span><span class="auto-style3">
<span style="background: ; mso-highlight: "><span class="auto-style7">Tempat / tanggal lahir : 
<?php echo $_SESSION['tgl_lhr_anak_2']; ?>, Jenis kelamin : <?php echo $_SESSION['jns_klmn_anak_2']; ?>
</span></span> <span class="auto-style7">&nbsp;
</span>
</span>
</span>
<span lang="IN"  
<?php 
$style = "mso-ansi-language:IN";
if ($_SESSION['nama_anak_3'] == "")
{ 
	$style = "style='display:none;'";
}

echo $style; ### UNTUK IF ELSE anak dari pernikahan hak asuuuh  ######################
?>>
<span style="background: ; mso-highlight: "><span class="auto-style7"><?php echo $_SESSION['nama_anak_3']; ?>
</span>,<span style="mso-spacerun:yes" class="auto-style7">&nbsp;
</span></span><span class="auto-style3">
<span style="background: ; mso-highlight: "><span class="auto-style7">Tempat / tanggal lahir : 
<?php echo $_SESSION['tgl_lhr_anak_3']; ?>, Jenis kelamin : <?php echo $_SESSION['jns_klmn_anak_3']; ?>
</span></span>
</span>


<span lang="IN" style="mso-ansi-language:IN" class="auto-style7">,</span></span><span lang="IN" style="mso-ansi-language:IN" class="auto-style7"> 
sampai dengan diajukannya gugatan ini berada dalam pengasuhan Penggugat</span>,<span lang="IN" style="mso-ansi-language:IN"><span style="mso-spacerun:yes" class="auto-style7">&nbsp;
</span><span class="auto-style7">maka apabila terjadi perceraian hak asuh anak berada pada Penggugat 
sebagai Ibu Kandungnya ;</span><o:p></o:p></span></p>



	<p class="listparagraph1CxSpLast">
	<o:p><span class="auto-style8">11.
	</span>
	<span lang="IN" style="mso-fareast-font-family:Calibri;mso-fareast-theme-font:
minor-latin;mso-bidi-theme-font:minor-bidi;mso-ansi-language:IN;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA" class="auto-style8">Bahwa untuk menjamin kehidupan yang layak anak 
	kami tersebut, sudah sepatutnya Tergugat sebagai ayah dibebani untuk 
	memberikan biaya nafkah/kebutuhan<span style="mso-spacerun:yes">&nbsp; </span>
	sehari-hari dari anak kami tersebut sebesar Rp.</span><span lang="IN" style="mso-fareast-font-family:Calibri;
mso-fareast-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi;mso-ansi-language:
EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA" class="auto-style8"> </span>
	<span lang="IN" style="mso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-bidi-theme-font:
minor-bidi;mso-ansi-language:IN;mso-fareast-language:EN-US;mso-bidi-language:
AR-SA" class="auto-style8"><?php echo $_SESSION['besar_nafkah_anak']; ?>,- setiap bulannya</span></o:p></p>

</div>

<p class="auto-style5">
<span lang="IN" style="mso-fareast-font-family:&quot;Times New Roman&quot;;mso-ansi-language:
IN" class="auto-style7">Berdasarkan hal-hal yang telah Penggugat uraikan di atas, Penggugat mohon 
agar Ketua Pengadilan </span>
<span style="mso-fareast-font-family:&quot;Times New Roman&quot;;mso-ansi-language:
IN" class="auto-style7">Negeri </span><span style="mso-bidi-font-weight:normal">
<span lang="EN-ID" style="background: ; mso-highlight: " class="auto-style7"><?php
### UNTUK IF ELSE TEMPAT KABUPATEN DAN ALAMAT SEKARANG YG NAMPAK ######################
#$style = "";
if ($_SESSION['kab_skrg_pggt'] == "")
{ 
	echo $_SESSION['kab_ktp_pggt'];
	#$style = "style='display:none;'";
}
else
{
	echo $_SESSION['kab_skrg_pggt'];
} 
?></span></span>
<span lang="IN" style="mso-fareast-font-family:&quot;Times New Roman&quot;;mso-ansi-language:
IN" class="auto-style7">c.q Majelis Hakim yang memeriksa dan mengadili perkara ini menjatuhkan amar 
putusan sebagai berikut :</span></p>
<p class="auto-style5">
<span lang="IN" style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-ansi-language:IN" class="auto-style7">1.</span><span lang="IN" style="mso-fareast-font-family:
&quot;Times New Roman&quot;;mso-ansi-language:IN" class="auto-style7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span lang="IN" style="mso-fareast-font-family:&quot;Times New Roman&quot;;mso-ansi-language:
IN" class="auto-style7">Mengabulkan gugatan Penggugat untuk</span><span lang="IN" style="mso-bidi-font-size:
11.0pt;mso-fareast-font-family:Calibri;mso-ansi-language:IN" class="auto-style7"> seluruhnya ;</span></p>
<p class="MsoNormal">
<span class="auto-style5">
<span lang="IN" style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-ansi-language:IN" class="auto-style7">2.</span><span lang="IN" style="mso-fareast-font-family:
&quot;Times New Roman&quot;;mso-ansi-language:IN" class="auto-style7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
</span>
<span lang="IN" style="mso-bidi-font-size:
11.0pt;mso-fareast-font-family:Calibri;
mso-ansi-language:IN;mso-fareast-language:EN-US;mso-bidi-language:AR-SA" class="auto-style8">
Menetapkan dan menyatakan perkawinan antara Penggugat dengan Tergugat, putus 
karena perceraian dengan segala akibat hukumnya</span><span style="font-size:7.0pt;mso-fareast-font-family:
&quot;Times New Roman&quot;;mso-ansi-language:IN"><span style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:Calibri;mso-ansi-language:IN;mso-fareast-language:EN-US;
mso-bidi-language:AR-SA" class="auto-style8"> </span></span>
<span lang="IN" style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:Calibri;
mso-ansi-language:IN" class="auto-style8">;</span><span lang="EN-ID" style="mso-fareast-font-family:
Calibri"><o:p></o:p></span></p>
<p class="auto-style5">
<span lang="IN" style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-ansi-language:IN" class="auto-style7">3.</span><span lang="IN" style="mso-fareast-font-family:
&quot;Times New Roman&quot;;mso-ansi-language:IN" class="auto-style7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><span lang="EN-ID" class="auto-style7">Menetapkan</span><span lang="IN" style="mso-bidi-font-size:11.0pt;
mso-fareast-font-family:Calibri;mso-ansi-language:IN"><span class="auto-style7"> biaya perkara yang timbul 
dalam perkara</span><span style="mso-spacerun:yes" class="auto-style7">&nbsp; </span>
<span class="auto-style7">ini sesuai dengan 
peraturan perundang-undangan yang berlaku ;

</span>

</span></p>

<div class="MsoNormal" <?php 
$style = "";
if ($_SESSION['nama_anak_1'] == "")
{ 
	#echo $_SESSION['kab_ktp_pggt'];
	$style = "style='display:none;'";
}

echo $style; ### UNTUK IF ELSE anak dari pernikahan hak asuuuh  ######################
?>>


<p class="auto-style5">
<span lang="IN" style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:
&quot;Times New Roman&quot;;mso-themecolor:text1;
mso-ansi-language:IN" class="auto-style9">4.</span><span lang="IN" style="mso-fareast-font-family:
&quot;Times New Roman&quot;;mso-themecolor:text1;
mso-ansi-language:IN" class="auto-style9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span lang="IN" style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:Calibri;mso-themecolor:text1;mso-ansi-language:IN" class="auto-style3">
<span class="auto-style7">Menyatakan anak 
kami yang bernama, </span> <span style="mso-bidi-font-weight:normal">
<span style="background: ; mso-highlight: " class="auto-style7"><?php echo $_SESSION['nama_anak_1']; ?></span>
</span></span><span style="background: ; mso-highlight: "><b style="mso-bidi-font-weight:normal"><span style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:Calibri;mso-themecolor:text1;mso-ansi-language:IN" class="auto-style3">
<span class="auto-style7">, 
</span> 
<span class="auto-style4"> <?php echo $_SESSION['nama_anak_2']; ?></span>
<span class="auto-style7">, </span> </span>
</b>
<span style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:Calibri;mso-themecolor:text1;mso-ansi-language:IN" class="auto-style3">
<span style="mso-bidi-font-weight:normal" class="auto-style7"> <?php echo $_SESSION['nama_anak_3']; ?> 
</span>
</span>
</span>
<span lang="IN" style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:Calibri;mso-themecolor:text1;mso-ansi-language:IN" class="auto-style9">bera</span><span style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:Calibri;mso-themecolor:text1;mso-ansi-language:IN" class="auto-style9">d</span><span lang="IN" style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:Calibri;mso-themecolor:text1;mso-ansi-language:IN" class="auto-style9">a 
dibawah asuhan Penggugat </span>
<span lang="IN" style="mso-bidi-font-size:11.0pt;
mso-fareast-font-family:Calibri;color:#BFBFBF;mso-themecolor:background1;
mso-themeshade:191;mso-ansi-language:IN" class="auto-style7">.</span></p>
	</span></span>
	<span style="mso-fareast-font-family:&quot;Times New Roman&quot;;mso-ansi-language:
IN">
	<p class="MsoNormal">5<![if !supportLists]><span lang="IN" style="mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
&quot;Times New Roman&quot;;mso-ansi-language:IN"><span style="mso-list:Ignore">.<span style="font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;" class="auto-style8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</span></span></span><![endif]>
	<span lang="IN" style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:Calibri;
mso-bidi-font-family:&quot;Times New Roman&quot;;mso-ansi-language:IN" class="auto-style8">Menghukum 
	Tergugat untuk memberikan kepada Penggugat nafkah anak sebesar
	<span style="background: ; mso-highlight: ">Rp. <?php echo $_SESSION['besar_nafkah_anak']; ?>,-</span></span><span lang="IN" style="mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;
mso-ansi-language:IN"><o:p></o:p></span></p>
</div>

</span>
<span lang="IN" style="mso-fareast-font-family:&quot;Times New Roman&quot;;mso-ansi-language:
IN">

<p class="auto-style5">
<span lang="IN" style="mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-ansi-language:IN" class="auto-style7">Demikian</span><span lang="IN" style="mso-bidi-font-size:
11.0pt;mso-fareast-font-family:Calibri;mso-ansi-language:IN" class="auto-style7"> atas terkabulnya 
gugatan ini Penggugat menyampaikan terima kasih,Apabila Majelis Hakim yang 
memeriksa, mengadili dan memutus perkara ini berpendapat lain, mohon putusan 
yang seadil-adilnya.</span></p>
<p align="right" class="auto-style5">
<span lang="IN" style="mso-bidi-font-size:
12.0pt;mso-ansi-language:IN" class="auto-style7">Hormat Kami,</span></p>
<p align="right" class="auto-style5">
<span lang="IN" style="mso-bidi-font-size:
12.0pt;mso-ansi-language:IN" class="auto-style7">Penggugat</span></p>
<p align="center" class="auto-style5"><span lang="EN-ID" class="auto-style7"><o:p>&nbsp;</o:p></span></p>
<p align="right" class="MsoNormal"><span style="mso-bidi-font-weight:normal">
<span lang="EN-ID" style="mso-bidi-font-size: 12.0pt; background:; mso-highlight:" class="auto-style8">
<?php echo $_SESSION['nama_ktp_pnggt']; ?></span></span>
<span lang="IN" style="mso-bidi-font-size:12.0pt;mso-ansi-language:IN" class="auto-style8">&nbsp;</span><b style="mso-bidi-font-weight:normal"><span lang="IN" style="mso-ansi-language:
IN"><o:p></o:p></span></b></p>
<p class="auto-style5">
<span lang="IN" style="mso-bidi-font-size:12.0pt;mso-ansi-language:
IN" class="auto-style7">&nbsp;</span></p>
<p class="auto-style5">
<span lang="IN" style="mso-bidi-font-size:12.0pt;mso-ansi-language:
IN" class="auto-style7">&nbsp;</span></p>
<p class="auto-style5">
<span lang="IN" style="mso-bidi-font-size:12.0pt;mso-ansi-language:
IN" class="auto-style7">&nbsp;</span></p>
<p class="auto-style5"><span lang="EN-ID" class="auto-style7">&nbsp;</span></p>
</font>
</body>
</html>
<?php

// Get the content that is in the buffer and put it in your file //
file_put_contents('data_doc/'.$_SESSION['email_user'].'.doc', ob_get_contents());
?>