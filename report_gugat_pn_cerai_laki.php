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
	
	$_SESSION['dalil_tmpt_nikah'] = $_POST['dalil_tmpt_nikah'];

	
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
.auto-style5 {
	text-align: right;
}
.auto-style6 {
	font-family: "Times New Roman", Times, serif;
}
.auto-style7 {
	color: #000000;
	font-family: "Times New Roman", Times, serif;
	font-size: small;
}
.auto-style8 {
	font-size: small;
}
.auto-style9 {
	font-family: "Times New Roman", Times, serif;
	font-size: small;
}
.auto-style10 {
	text-align: center;
}
.auto-style11 {
	font-family: "Times New Roman", Times, serif;
	font-size: small;
	background-color: #FFFFFF;
}
.auto-style13 {
	color: #000000;
	font-size: small;
}
</style>
</head>




<html>
<body>
<font face="aerial" >

<p class="auto-style5" align="right"><span lang="IN" style="mso-ansi-language:
IN"><span class="auto-style9">&nbsp;</span><span style="mso-tab-count:1" class="auto-style9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style="mso-ansi-language:
IN" class="auto-style11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span lang="IN" style="mso-ansi-language:
IN">&nbsp;<span class="auto-style9"><?php echo $_SESSION['kab_ktp_pggt']; ?></span>,<span class="auto-style1"><span class="auto-style2"> 
<span class="auto-style6"><span class="auto-style8"> <?php echo $_SESSION['tanggal']; ?>
&nbsp;</span></span></span></span></span><span class="auto-style9"></span></span></p>
<p><span lang="IN" style="mso-ansi-language:IN">
<span style="mso-tab-count:1" class="auto-style9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></p>
<p align="center">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style9">&nbsp;</span></p>
<p class="auto-style6">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style8">Kepada yang 
terhormat,</span></p>
<p class="auto-style6">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style8">Ketua </span>
<span lang="EN-ID" class="auto-style8">Pengadilan </span>
<span class="auto-style8">Negeri</span><span lang="EN-ID">
<span style="background: ; mso-highlight: " class="auto-style8"><?php
### UNTUK IF ELSE TEMPAT KABUPATEN DAN ALAMAT SEKARANG YG NAMPAK ######################
#$style = "";
if ($_SESSION['kab_skrg_tggt'] == "")
{ 
	echo $_SESSION['kab_ktp_tggt'];
	#$style = "style='display:none;'";
}
else if ($_SESSION['kab_skrg_tggt'] == "" && ($_SESSION['kab_ktp_tggt'] =! $_SESSION['kab_ktp_pggt']) )
{
	echo $_SESSION['kab_ktp_pggt'];

}
else if ($_SESSION['keberadaan_tdk_diketahui_tggt'] == "iya" )
{
	echo $_SESSION['kab_ktp_pggt'];
}
else
{
	echo $_SESSION['kab_skrg_tggt'];
} 
?></span><a name="_GoBack"></a></span></p>
<p class="auto-style6">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style8">di -</span><span lang="EN-ID" style="background: ; mso-highlight: " class="auto-style8"><?php
### UNTUK IF ELSE TEMPAT KABUPATEN DAN ALAMAT SEKARANG YG NAMPAK ######################
#$style = "";
if ($_SESSION['kab_skrg_tggt'] == "")
{ 
	echo $_SESSION['kab_ktp_tggt'];
	#$style = "style='display:none;'";
}
else if ($_SESSION['kab_skrg_tggt'] == "" && ($_SESSION['kab_ktp_tggt'] =! $_SESSION['kab_ktp_pggt']) )
{
	echo $_SESSION['kab_ktp_pggt'];

}
else if ($_SESSION['keberadaan_tdk_diketahui_tggt'] == "iya" )
{
	echo $_SESSION['kab_ktp_pggt'];
}
else
{
	echo $_SESSION['kab_skrg_tggt'];
} 
?></span></p>
<p><span lang="IN" style="mso-ansi-language:IN" class="auto-style9">&nbsp;</span></p>
<p><span lang="IN" style="mso-ansi-language:IN" class="auto-style9">&nbsp;</span></p>
<p class="auto-style6">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style8">Dengan hormat,</span></p>
<p class="auto-style6">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style8">Yang bertanda 
tangan dibawah ini, saya :</span></p>
<span style="mso-bidi-font-weight:normal">
<p class="MsoNormal"></span>
<span lang="IN" style="background: ; mso-highlight: ; mso-ansi-language: IN">
<span class="auto-style6"><span class="auto-style8">
<span style="mso-bidi-font-weight:normal">
<?php echo $_SESSION['nama_ktp_pnggt']; ?> &nbsp;</span></span></span></span><span class="auto-style6"><span class="auto-style8"><span lang="IN" style="mso-ansi-language:IN">, 
Tempat / tanggal lahir : </span><span style="mso-ansi-language:IN"><?php echo $_SESSION['tempat_lahir_pggt']; ?></span>
</span><span lang="IN" style="mso-ansi-language:IN"><span class="auto-style8"><span style="background: ; mso-highlight: ">
/ <?php echo $_SESSION['tanggal_lahir_pggt']; ?></span>, Umur :
<span style="background: ; mso-highlight: "><?php echo $_SESSION['umur_pggt']; ?></span> tahun,<span style="mso-spacerun:yes">&nbsp;
</span>Jenis kelamin : <span style="background: ; mso-highlight: ">
<?php echo $_SESSION['jenis_kelamin_pggt']; ?></span>,<span style="mso-spacerun:yes">&nbsp; </span>Agama :
<span style="background: ; mso-highlight: "><?php echo $_SESSION['agama_pggt']; ?>,</span> Warga 
negara : <span style="background: ; mso-highlight: "><?php echo $_SESSION['warganegara_pggt']; ?></span>, 
Pekerjaan : <span style="background: ; mso-highlight: "><?php echo $_SESSION['pekerjaan_pggt']; ?></span>, 
Status : <span style="background: ; mso-highlight: "><?php echo $_SESSION['status_kawin_pggt']; ?></span>, 
Pendidikan : <span style="background: ; mso-highlight: "><?php echo $_SESSION['pendidikan_pggt']; ?></span>, 
Alamat : <span style="background: ; mso-highlight: "><?php echo $_SESSION['jalan_ktp_pggt']; ?></span>, 
RT. <span style="background: ; mso-highlight: "><?php echo $_SESSION['rt_ktp_pggt']; ?></span> RW.
<span style="background: ; mso-highlight: "><?php echo $_SESSION['rw_ktp_pggt']; ?></span>,<span style="mso-spacerun:yes">&nbsp;
</span>Kelurahan / Desa :
<span style="background: ; mso-highlight: "><?php echo $_SESSION['kel_desa_ktp_pggt']; ?></span>, Kecamatan 
: <span style="background: ; mso-highlight: "><?php echo $_SESSION['kec_ktp_pggt']; ?></span>, Kota / 
Kabupaten : <span style="background: ; mso-highlight: "><?php echo $_SESSION['kab_ktp_pggt']; ?></span>, 
Provinsi : <span style="background: ; mso-highlight: "><?php echo $_SESSION['prov_ktp_pggt']; ?></span> 
.</span></span></span></p>

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
<span class="auto-style9">
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


<p class="auto-style6">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style8">Selanjutnya 
disebut sebagai Penggugat ;</span></p>
<p class="auto-style6">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style8">Dengan ini, 
Penggugat mengajukan Gugatan Cerai terhadap Istri saya :</span></p>
<span style="mso-bidi-font-weight:normal">
<p class="MsoNormal"></span>
<span lang="IN" style="background: ; mso-highlight: ; mso-ansi-language: IN">
<span class="auto-style6"><span class="auto-style8">
<span style="mso-bidi-font-weight:normal">
<?php echo $_SESSION['nama_ktp_tggt']; ?> &nbsp;</span></span></span></span><span class="auto-style6"><span class="auto-style8"><span lang="IN" style="mso-ansi-language:IN">, 
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
<span style="background: ; mso-highlight: "><?php echo $_SESSION['jalan_ktp_tggt']; ?>,</span>RT.</span><span lang="EN-ID" style="background: ; mso-highlight: "><?php echo $_SESSION['rt_ktp_tggt']; ?></span>&nbsp;
<span lang="IN" style="mso-ansi-language:IN">RW.
<span style="background: ; mso-highlight: "><?php echo $_SESSION['rw_ktp_tggt']; ?></span>, Kelurahan / 
desa : <span style="background: ; mso-highlight: "><?php echo $_SESSION['kel_desa_ktp_tggt']; ?></span>, 
Kecamatan : <span style="background: ; mso-highlight: "><?php echo $_SESSION['kec_ktp_tggt']; ?>,</span> 
Kota /<span style="mso-spacerun:yes">&nbsp; </span>Kabupaten : </span>
<span lang="EN-ID" style="background: ; mso-highlight: "><?php echo $_SESSION['kab_ktp_tggt']; ?></span>
</span><span lang="IN" style="mso-ansi-language:IN"><span class="auto-style8">, 
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
<span class="auto-style9">
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
;mso-ansi-language:IN" class="auto-style7">Sekarang tidak diketahui alamatnya yang 
pasti di wilayah Negara Kesatuan Republik Indonesia ;</span><span lang="EN-ID" ;mso-themecolor:text1"><o:p></o:p></span></p>

</div>

<p class="auto-style6">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style8">Selanjutnya 
disebut sebagai Tergugat ;</span></p>
<p class="auto-style6">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style8">Adapun dasar 
dan alasan / dalil-dalil gugatan ini diajukan adalah sebagai berikut :</span></p>
<p class="listparagraph1"><span class="auto-style6">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style8">1.</span><span lang="IN" style="mso-ansi-language:IN" class="auto-style8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span lang="IN" style="mso-ansi-language:IN"><span class="auto-style8">Bahwa pada tanggal
<span style="mso-bidi-font-weight:
normal"><span style="background: ; mso-highlight: "><?php echo $_SESSION['dalil_tgl_nikah']; ?></span>
</span></span></span>
<span class="auto-style8">
<span style="mso-bidi-font-weight:
normal"><span style="background: ; mso-highlight: ">
<span style="mso-ansi-language:IN">&nbsp;</span></span></span><span lang="IN" style="mso-ansi-language:IN">Penggugat 
telah melangsungkan pernikahan dengan Tergugat yang dilaksanakan </span>
<span style="mso-ansi-language:IN">di <?php echo $_SESSION['dalil_tmpt_nikah']; ?></span>
</span></span><span lang="IN" style="mso-ansi-language:IN">
<span class="auto-style6"><span class="auto-style8">. 
</span></span> 
<span lang="IN" style="mso-fareast-font-family:Calibri;mso-fareast-theme-font:
minor-latin;mso-bidi-theme-font:minor-bidi;mso-ansi-language:IN;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA" class="auto-style9">sah menurut hukum dan tata cara agama serta
</span><span class="auto-style6"><span class="auto-style8">telah 
dicatat</span></span></span><span class="auto-style6"><span style="mso-ansi-language:IN"><span class="auto-style8">kan</span></span></span><span lang="IN" style="mso-ansi-language:IN">
<span lang="IN" style="mso-fareast-font-family:Calibri;mso-fareast-theme-font:
minor-latin;mso-bidi-theme-font:minor-bidi;mso-ansi-language:IN;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA" class="auto-style9">pada Kantor Catatan Sipil</span></span><span style="mso-ansi-language:IN"><span style="mso-fareast-font-family:Calibri;mso-fareast-theme-font:
minor-latin;mso-bidi-theme-font:minor-bidi;mso-ansi-language:IN;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA" class="auto-style9"> </span></span>
<span lang="IN" style="mso-ansi-language:IN" class="auto-style9">Kota / Kabupaten 
<span style="mso-bidi-font-weight:
normal"><span style="background: ; mso-highlight: "><?php echo $_SESSION['dalil_kabupaten']; ?></span>
</span>, 
sebagaimana dalam Kutipan Akta Nikah</span><span style="mso-ansi-language:IN" class="auto-style9"> </span>
<span lang="IN" style="mso-ansi-language:IN" class="auto-style9">Nomor :
<span style="mso-bidi-font-weight:
normal"><span style="background: ; mso-highlight: "><?php echo $_SESSION['no_akta_nikah']; ?></span>
</span>, 
Tanggal <span style="mso-bidi-font-weight:normal">
<span style="background: ; mso-highlight: "><?php echo $_SESSION['tgl_akta_nikah']; ?></span>
</span>;</span></p>
<p class="auto-style6">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style8">2.</span><span lang="IN" style="mso-ansi-language:IN" class="auto-style8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span lang="IN" style="mso-ansi-language:IN"><span class="auto-style8">Bahwa sebelum menikah Penggugat 
(suami) berstatus <?php echo $_SESSION['status_penggugat']; ?> dan Tergugat</span><span style="mso-spacerun:yes" class="auto-style8">&nbsp;
</span><span class="auto-style8">(istri) berstatus <?php echo $_SESSION['status_tergugat']; ?>, kemudian perkawinan antara Penggugat dan 
Tergugat dilangsungkan berdasarkan kehendak kedua belah pihak dengan tujuan 
membentuk rumah tangga yang</span></span><span style="mso-ansi-language:IN" class="auto-style8"> bahagia 
dan kekal.</span><span lang="IN" style="mso-ansi-language:IN"><span style="mso-spacerun:yes" class="auto-style8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></p>
<p class="auto-style6">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style8">3.</span><span lang="IN" style="mso-ansi-language:IN" class="auto-style8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span lang="IN" style="mso-ansi-language:IN"><span class="auto-style8">Bahwa setelah pernikahan tersebut, 
Penggugat dengan tergugat bertempat tinggal bersama
</span>
<span style="mso-bidi-font-weight:
normal"><span style="background: ; mso-highlight: " class="auto-style8"><?php echo $_SESSION['opt_tmpt_tgl_bersama_stlh_nikah']; ?></span>
</span></span>
<span style="mso-bidi-font-weight:
normal"><span style="background: ; mso-highlight: ">
<span style="mso-ansi-language:IN" class="auto-style8">&nbsp;</span></span></span><span lang="IN" style="mso-ansi-language:IN"><span class="auto-style8">yang 
beralamat di </span>
<span style="background: ; mso-highlight: "> 
<span style="mso-bidi-font-weight:normal">
<span class="auto-style8"><?php echo $_SESSION['jalan_stlh_nikah']; ?> , 
RT <?php echo $_SESSION['rt_stlh_nikah']; ?> RW <?php echo $_SESSION['rw_stlh_nikah']; ?>
, 
Kelurahan <?php echo $_SESSION['kel_stlh_nikah']; ?>, Kecamatan</span><span lang="en-us" class="auto-style8">
</span><span class="auto-style8"><?php echo $_SESSION['kec_stlh_nikah']; ?>, Kota / Kabupaten</span><span lang="en-us" class="auto-style8">
</span><span class="auto-style8"><?php echo $_SESSION['kab_stlh_nikah']; ?>, Provinsi</span><span lang="en-us" class="auto-style8"> </span>
<span class="auto-style8"><?php echo $_SESSION['prov_stlh_nikah']; ?></span>
</span><span class="auto-style8">,</span></span><span class="auto-style8"> 
Selama </span> <span style="mso-bidi-font-weight:
normal"><span style="background: ; mso-highlight: " class="auto-style8"><?php echo $_SESSION['lama_tahun']; ?></span>
</span> 
<span class="auto-style8">tahun </span> 
<span style="mso-bidi-font-weight:normal">
<span style="background: ; mso-highlight: " class="auto-style8"><?php echo $_SESSION['lama_bulan']; ?></span>
</span> <span class="auto-style8">bulan;</span><span style="mso-tab-count:1" class="auto-style8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></p>
<p class="auto-style6">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style8">4.</span><span lang="IN" style="mso-ansi-language:IN" class="auto-style8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span lang="IN" style="mso-ansi-language:IN"><span class="auto-style8">Bahwa selama pernikahan tersebut 
antara penggugat</span><span style="mso-spacerun:yes" class="auto-style8">&nbsp; </span>
<span class="auto-style8">dengan tergugat</span><span style="background: ; mso-highlight: "><span class="auto-style8">,
</span>
<span style="mso-bidi-font-weight:
normal" class="auto-style8"><?php echo $_SESSION['opt_anak_dari_nikah']; ?>
</span></span></span>
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
text1" class="auto-style9">yang bernama :</span><span style="color:#7F7F7F;mso-themecolor:text1"><o:p></o:p></span></span></p>


<p class="auto-style6">
<span lang="IN" style="color:#7F7F7F;mso-themecolor:text1;mso-ansi-language:
IN" class="auto-style8">- </span> <span style="background: ; mso-highlight: ">
<span lang="IN" style="mso-themecolor:text1;mso-ansi-language:
IN" class="auto-style3"><span class="auto-style8"><?php echo $_SESSION['nama_anak_1']; ?>, Tempat / 
tanggal lahir : <?php echo $_SESSION['tgl_lhr_anak_1']; ?>, Jenis kelamin : <?php echo $_SESSION['jns_klmn_anak_1']; ?> 
</span> </span>
<span lang="IN" style="color:#7F7F7F;mso-themecolor:text1;mso-ansi-language:
IN" class="auto-style8">;</span></span><o:p></o:p></p>
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

<p class="auto-style6">
<o:p>
<span lang="IN" style="color:#7F7F7F;mso-themecolor:text1;mso-ansi-language:
IN" class="auto-style8">- </span> <span style="background: ; mso-highlight: ">
<span lang="IN" style="mso-themecolor:text1;mso-ansi-language:
IN" class="auto-style3"><span class="auto-style8"><?php echo $_SESSION['nama_anak_2']; ?>, Tempat / 
tanggal lahir : <?php echo $_SESSION['tgl_lhr_anak_2']; ?>, Jenis kelamin : <?php echo $_SESSION['jns_klmn_anak_2']; ?> 
</span> </span>
<span lang="IN" style="color:#7F7F7F;mso-themecolor:text1;mso-ansi-language:
IN" class="auto-style8">;</span></span><o:p></o:p></o:p></p>
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
<span class="auto-style9">
<span lang="IN" style="color:#7F7F7F;mso-themecolor:text1;mso-themetint:128;mso-ansi-language:
IN">- </span> <span style="background: ; mso-highlight: ">
<span lang="IN" style="mso-themecolor:text1;mso-ansi-language:
IN" class="auto-style3"><?php echo $_SESSION['nama_anak_3']; ?>, Tempat / 
tanggal lahir : <?php echo $_SESSION['tgl_lhr_anak_3']; ?>, Jenis kelamin : <?php echo $_SESSION['jns_klmn_anak_3']; ?> </span>
<span lang="IN" style="color:#7F7F7F;mso-themecolor:text1;mso-ansi-language:
IN">;</span></span></span><span lang="EN-ID" style="color:#7F7F7F;mso-themecolor:text1"><o:p></o:p></span></o:p></o:p></p>
</div>
<p class="auto-style6">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style8">5.</span><span lang="IN" style="mso-ansi-language:IN" class="auto-style8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span lang="IN" style="mso-ansi-language:IN"><span class="auto-style8">Bahwa pada awalanya kehidupan rumah 
tangga antara Pengguggat dan Tergugat berjalan harmonis, namun sejak
</span>
<span style="mso-bidi-font-weight:
normal"><span style="background: ; mso-highlight: " class="auto-style8"><?php echo $_SESSION['tgl_awal_mula_selisih']; ?></span>
</span> 
<span class="auto-style8">rumah tangga Pengguggat dengan Tergugat mulai goyah dan sering terjadi 
perselisihan dan pertengkaran yang disebabkan </span> </span>
<span style="mso-bidi-font-weight:
normal">
<span lang="EN-ID" style="background: ; mso-highlight: " class="auto-style8">
<?php echo $_SESSION['txt_alasan_perselisihan']; ?></span></span>
<span lang="IN" style="mso-ansi-language:IN" class="auto-style8">;</span></p>
<p class="auto-style6">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style8">6.</span><span lang="IN" style="mso-ansi-language:IN" class="auto-style8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span lang="IN" style="mso-ansi-language:IN;mso-fareast-language:IN" class="auto-style8">
Bahwa</span><span lang="IN" style="mso-ansi-language:IN"><span class="auto-style8"> puncak perselisihan 
dan pertengkaran tersebut terjadi pada tanggal
</span>
<span style="mso-bidi-font-weight:normal">
<span style="background: ; mso-highlight: " class="auto-style8"><?php echo $_SESSION['tgl_puncak_selisih']; ?></span>
</span><span class="auto-style8">yang akibatnya Penggugat dan 
Tergugat Pisah Ranjang sejak </span> <span style="mso-bidi-font-weight:normal">
<span style="background: ; mso-highlight: " class="auto-style8"><?php echo $_SESSION['tgl_pisah_ranjang']; ?></span>
</span> 
<span class="auto-style8">sampai dengan sekarang, dikarenakan </span> 
<span style="mso-bidi-font-weight:normal">
<span style="background: ; mso-highlight: " class="auto-style8"><?php echo $_SESSION['txt_alasan_psh_ranjang']; ?></span>
</span><span class="auto-style8">; </span> 
<span style="mso-tab-count:1" class="auto-style8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></p>
<p class="auto-style6">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style8">7.</span><span lang="IN" style="mso-ansi-language:IN" class="auto-style8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span lang="IN" style="mso-ansi-language:IN;mso-fareast-language:IN" class="auto-style8">
Bahwa</span><span lang="IN" style="mso-ansi-language:IN" class="auto-style8"> atas sikap atau 
perbuatan tergugat tersebut, penggugat merasa sangat menderita lahir batin dan 
oleh karenanya penggugat tidak rela dan berkesimpulan bahwa tergugat adalah 
istri yang tidak bertanggungjawab ;</span></p>
<p class="listparagraph1"><span class="auto-style6">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style8">8.</span><span lang="IN" style="mso-ansi-language:IN" class="auto-style8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="IN" style="mso-fareast-font-family:Calibri;mso-fareast-theme-font:
minor-latin;mso-bidi-theme-font:minor-bidi;mso-ansi-language:IN;mso-fareast-language:
IN;mso-bidi-language:AR-SA" class="auto-style9">Bahwa </span>
<span lang="IN" style="mso-fareast-font-family:Calibri;
mso-fareast-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi;mso-ansi-language:
IN;mso-fareast-language:EN-US;mso-bidi-language:AR-SA" class="auto-style9">ikatan perkawinan antara 
Penggugat dan Tergugat sebagaimana yang diuraikan diatas sudah sulit dibina 
untuk membentuk suatu rumah tangga yang rukun, damai dan bahagia, sebagaimana 
maksud dan tujuan dari suatu perkawinan semula untuk membentuk keluarga yang 
bahagia dan kekal sebagaimana amanat Undang-undang no. 1 tahun 1974 tentang 
Perkawinan, sehingga lebih baik diputus karena perceraian</span><span lang="EN-ID" class="auto-style9">;</span><span lang="EN-ID" style="mso-fareast-font-family:&quot;Times New Roman&quot;"><o:p></o:p></span></p>
<p class="auto-style6">
<span lang="IN" style="mso-ansi-language:IN" class="auto-style8">9.</span><span lang="IN" style="mso-ansi-language:IN" class="auto-style8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span lang="IN" style="mso-ansi-language:IN;mso-fareast-language:IN" class="auto-style8">Bahwa
</span><span lang="IN" style="mso-ansi-language:IN" class="auto-style8">Penggugat sanggup membayar 
biaya perkara;</span></p>

<div class="MsoNormal" <?php 
$style = "";
if ($_SESSION['nama_anak_1'] == "")
{ 
	#echo $_SESSION['kab_ktp_pggt'];
	$style = "style='display:none;'";
}

echo $style; ### UNTUK IF ELSE anak dari pernikahan hak asuuuh  ######################
?>>

<p class="auto-style6">
<span lang="IN" style="mso-themecolor:text1;mso-ansi-language:IN" class="auto-style13">10.</span><span lang="IN" style="mso-themecolor:text1;
mso-ansi-language:IN" class="auto-style13">&nbsp; </span>
<span lang="IN" style="mso-themecolor:text1;mso-ansi-language:IN" class="auto-style13">Bahwa untuk 
menjamin kehidupan yang layak anak kami ter</span><span lang="EN-ID" style="mso-themecolor:text1" class="auto-style13">se</span><span lang="IN" style="mso-themecolor:text1;mso-ansi-language:
IN" class="auto-style13">but, Penggugat mohon kepada Majelis Hakim untuk hak asuh anak jatuh kepada 
Penggugat ;</span><o:p></o:p></p>
	<p class="listparagraph1CxSpLast">
	<o:p></o:p></p>
</div>

<p class="auto-style6">
<span lang="IN" style="mso-fareast-font-family:&quot;Times New Roman&quot;;mso-ansi-language:
IN" class="auto-style8">Berdasarkan hal-hal yang telah Penggugat uraikan di atas, Penggugat mohon 
agar Ketua Pengadilan </span>
<span style="mso-fareast-font-family:&quot;Times New Roman&quot;;mso-ansi-language:
IN" class="auto-style8">Negeri </span><span style="mso-bidi-font-weight:normal">
<span lang="EN-ID" style="background: ; mso-highlight: " class="auto-style8"><?php
### UNTUK IF ELSE TEMPAT KABUPATEN DAN ALAMAT SEKARANG YG NAMPAK ######################
#$style = "";
if ($_SESSION['kab_skrg_tggt'] == "")
{ 
	echo $_SESSION['kab_ktp_tggt'];
	#$style = "style='display:none;'";
}
else if ($_SESSION['kab_skrg_tggt'] == "" && ($_SESSION['kab_ktp_tggt'] =! $_SESSION['kab_ktp_pggt']) )
{
	echo $_SESSION['kab_ktp_pggt'];

}
else if ($_SESSION['keberadaan_tdk_diketahui_tggt'] == "iya" )
{
	echo $_SESSION['kab_ktp_pggt'];
}
else
{
	echo $_SESSION['kab_skrg_tggt'];
} 
?></span></span>
<span style="mso-fareast-font-family:&quot;Times New Roman&quot;;mso-ansi-language:
IN" class="auto-style8">&nbsp;</span><span lang="IN" style="mso-fareast-font-family:&quot;Times New Roman&quot;;mso-ansi-language:
IN" class="auto-style8">c.q Majelis Hakim yang memeriksa dan mengadili perkara ini menjatuhkan amar 
putusan sebagai berikut :</span></p>
<p class="auto-style6">
<span lang="IN" style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-ansi-language:IN" class="auto-style8">1.</span><span lang="IN" style="mso-fareast-font-family:
&quot;Times New Roman&quot;;mso-ansi-language:IN" class="auto-style8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span lang="IN" style="mso-fareast-font-family:&quot;Times New Roman&quot;;mso-ansi-language:
IN" class="auto-style8">Mengabulkan gugatan Penggugat untuk</span><span lang="IN" style="mso-bidi-font-size:
11.0pt;mso-fareast-font-family:Calibri;mso-ansi-language:IN" class="auto-style8"> seluruhnya ;</span></p>
<p class="MsoNormal">
<span class="auto-style6">
<span lang="IN" style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-ansi-language:IN" class="auto-style8">2.</span></span><span lang="IN" style="mso-fareast-font-family:
&quot;Times New Roman&quot;;mso-ansi-language:IN"><span class="auto-style9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
</span><span lang="IN" style="font-size:12pt;mso-fareast-font-family:
&quot;Times New Roman&quot;;mso-ansi-language:IN">
<span lang="IN" style="mso-bidi-font-size:
11.0pt;mso-fareast-font-family:Calibri;
mso-ansi-language:IN;mso-fareast-language:EN-US;mso-bidi-language:AR-SA" class="auto-style9">
Menetapkan dan menyatakan perkawinan antara Penggugat dengan Tergugat, putus 
karena perceraian dengan segala akibat hukumnya</span></span><span style="font-size:7.0pt;mso-fareast-font-family:
&quot;Times New Roman&quot;;mso-ansi-language:IN"><span style="mso-bidi-font-size:
11.0pt;mso-fareast-font-family:Calibri;
mso-ansi-language:IN;mso-fareast-language:EN-US;mso-bidi-language:AR-SA" class="auto-style9">;</span></span></p>
<p class="auto-style6">
<span lang="IN" style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-ansi-language:IN" class="auto-style8">3.</span><span lang="IN" style="mso-fareast-font-family:
&quot;Times New Roman&quot;;mso-ansi-language:IN" class="auto-style8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><span lang="EN-ID" class="auto-style8">Menetapkan</span><span lang="IN" style="mso-bidi-font-size:11.0pt;
mso-fareast-font-family:Calibri;mso-ansi-language:IN"><span class="auto-style8"> biaya perkara yang timbul 
dalam perkara</span><span style="mso-spacerun:yes" class="auto-style8">&nbsp; </span>
<span class="auto-style8">ini sesuai dengan 
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


<p class="auto-style6">
<span lang="IN" style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:
&quot;Times New Roman&quot;;mso-themecolor:text1;
mso-ansi-language:IN" class="auto-style13">4.</span><span lang="IN" style="mso-fareast-font-family:
&quot;Times New Roman&quot;;mso-themecolor:text1;
mso-ansi-language:IN" class="auto-style13">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span lang="IN" style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:Calibri;mso-themecolor:text1;mso-ansi-language:IN" class="auto-style3">
<span class="auto-style8">Menyatakan anak 
kami yang bernama, </span> <span style="mso-bidi-font-weight:normal">
<span style="background: ; mso-highlight: " class="auto-style8"><?php echo $_SESSION['nama_anak_1']; ?></span>
</span></span><span style="mso-bidi-font-weight:normal"><span style="background: ; mso-highlight: "><span style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:Calibri;mso-themecolor:text1;mso-ansi-language:IN" class="auto-style3">
<span class="auto-style8">, <?php echo $_SESSION['nama_anak_2']; ?>, <?php echo $_SESSION['nama_anak_3']; ?> 
</span> </span>
</span></span>
<span lang="IN" style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:Calibri;mso-themecolor:text1;mso-ansi-language:IN" class="auto-style13">bera</span><span style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:Calibri;mso-themecolor:text1;mso-ansi-language:IN" class="auto-style13">d</span><span lang="IN" style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:Calibri;mso-themecolor:text1;mso-ansi-language:IN" class="auto-style13">a 
dibawah asuhan Penggugat </span>
<span lang="IN" style="mso-bidi-font-size:11.0pt;
mso-fareast-font-family:Calibri;color:#BFBFBF;mso-themecolor:background1;
mso-themeshade:191;mso-ansi-language:IN" class="auto-style8">.</span></p>
</div>

<p class="auto-style6">
<span lang="IN" style="mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-ansi-language:IN" class="auto-style8">Demikian</span><span lang="IN" style="mso-bidi-font-size:
11.0pt;mso-fareast-font-family:Calibri;mso-ansi-language:IN" class="auto-style8"> atas terkabulnya 
gugatan ini Penggugat menyampaikan terima kasih,Apabila Majelis Hakim yang 
memeriksa, mengadili dan memutus perkara ini berpendapat lain, mohon putusan 
yang seadil-adilnya.</span></p>
<p class="auto-style10" align="right">
<span style="mso-bidi-font-size:
12.0pt;mso-ansi-language:IN" class="auto-style9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span lang="IN" style="mso-bidi-font-size:
12.0pt;mso-ansi-language:IN" class="auto-style9">Hormat Kami,</span></p>
<p class="auto-style10" align="right">
<span style="mso-bidi-font-size:
12.0pt;mso-ansi-language:IN" class="auto-style9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span lang="IN" style="mso-bidi-font-size:
12.0pt;mso-ansi-language:IN" class="auto-style9">Penggugat</span></p>
<p class="auto-style10"><span lang="EN-ID" class="auto-style9"><o:p>&nbsp;</o:p></span></p>
<p class="auto-style10" align="right"><span style="mso-bidi-font-weight:normal">
<span style="background-position: 0% 0%; mso-bidi-font-size: 12.0pt; background-image: none; background-repeat: repeat; background-attachment: scroll;" class="auto-style11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span lang="EN-ID" style="background-position: 0% 0%; mso-bidi-font-size: 12.0pt; background-image: none; background-repeat: repeat; background-attachment: scroll;" class="auto-style11">
 &nbsp;</span><span lang="EN-ID" style="mso-bidi-font-size: 12.0pt;" class="auto-style9"><span class="auto-style2"><?php echo $_SESSION['nama_ktp_pnggt']; ?></span></span></span><span lang="IN" style="mso-bidi-font-size:12.0pt;mso-ansi-language:IN" class="auto-style11">&nbsp;</span></p>
<p>
<span lang="IN" style="mso-bidi-font-size:12.0pt;mso-ansi-language:
IN" class="auto-style9">&nbsp;</span></p>
<p>
<span lang="IN" style="mso-bidi-font-size:12.0pt;mso-ansi-language:
IN" class="auto-style9">&nbsp;</span></p>
<p>
<span lang="IN" style="mso-bidi-font-size:12.0pt;mso-ansi-language:
IN" class="auto-style9">&nbsp;</span></p>
<p><span lang="EN-ID" class="auto-style9">&nbsp;</span></p>
</font>
</body>
</html>
<?php

// Get the content that is in the buffer and put it in your file //
file_put_contents('data_doc/'.$_SESSION['email_user'].'.doc', ob_get_contents());
?>