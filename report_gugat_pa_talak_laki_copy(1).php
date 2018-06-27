<?php
	session_start();
    #header("Content-type: application/vnd.ms-word");
    header("Content-type: application/msword");
    header("Content-Disposition: attachment; Filename={$_SESSION['nama_ktp_pnggt']}_{$_SESSION['bin_binti_pnggt']}_{$_SESSION['kec_ktp_pggt']}_{$_SESSION['kab_ktp_pggt']}.doc");
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
}
</style>
</head>




<html>
<body>

<p align="center" class="MsoNormal">
&nbsp;</p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:
IN">&nbsp;<span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style="mso-ansi-language:
IN" class="auto-style2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span lang="IN" style="mso-ansi-language:
IN"><span class="auto-style2"><span class="auto-style1"> </span> </span><?php echo $_SESSION['kab_ktp_pggt']; ?> ,<span class="auto-style1"><span class="auto-style2"> <?php echo $_SESSION['tanggal']; ?>
</span></span></span></span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">
<span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></p>
<p align="center" class="MsoNormal">
<span lang="IN" style="mso-ansi-language:IN">&nbsp;</span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Kepada yang 
terhormat,</span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Ketua </span>
<span lang="EN-ID">Pengadilan Agama
<span style="background: ; mso-highlight: "><?php
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
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">di -</span><span lang="EN-ID" style="background: ; mso-highlight: "><?php
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
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">&nbsp;</span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">&nbsp;</span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Dengan hormat,</span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Yang bertanda 
tangan dibawah ini, saya :</span></p>
<p class="MsoNormal"><b style="mso-bidi-font-weight:normal">
<span lang="IN" style="background: ; mso-highlight: ; mso-ansi-language: IN">
<?php echo $_SESSION['nama_ktp_pnggt']; ?> bin <?php echo $_SESSION['bin_binti_pnggt']; ?></span></b><span lang="IN" style="mso-ansi-language:IN">, 
Tempat / tanggal lahir : </span><span style="mso-ansi-language:IN"><?php echo $_SESSION['tempat_lahir_pggt']; ?></span><span lang="IN" style="mso-ansi-language:IN"><span style="background: ; mso-highlight: ">
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
.</span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Selanjutnya 
disebut sebagai Penggugat ;</span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Dengan ini, 
Penggugat mengajukan Gugatan Cerai Talak terhadap Istri saya :</span></p>
<p class="MsoNormal"><b style="mso-bidi-font-weight:normal">
<span lang="IN" style="background: ; mso-highlight: ; mso-ansi-language: IN">
<?php echo $_SESSION['nama_ktp_tggt']; ?> binti <?php echo $_SESSION['bin_binti_tggt']; ?></span></b><span lang="IN" style="mso-ansi-language:IN">, 
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
<span lang="EN-ID" style="background: ; mso-highlight: "><?php echo $_SESSION['kab_ktp_tggt']; ?></span><span lang="IN" style="mso-ansi-language:IN">, 
Provinsi :<span style="background: ; mso-highlight: "><?php echo $_SESSION['prov_ktp_tggt']; ?></span> 
;</span></p>

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
IN" class="auto-style3">, Provinsi : <?php echo $_SESSION['prov_skrg_tggt']; ?> </span><span lang="IN" style="mso-themecolor:text1;mso-ansi-language:
IN">;<o:p></o:p></span></p>
</div>

<div class="MsoNormal" <?php 
$style = "";
if ($_SESSION['kab_skrg_tggt'] != "" && $_SESSION['keberadaan_tdk_diketahui_tggt'] == "tidak")
{ 
	#echo $_SESSION['kab_ktp_pggt'];
	$style = "style='display:none;'";
}

echo $style; ### UNTUK IF ELSE TEMPAT KABUPATEN DAN ALAMAT SEKARANG YG NAMPAK ######################
?>>


<p class="MsoNormal">
<span lang="IN" style="mso-themecolor:text1;
;mso-ansi-language:IN" class="auto-style3">Sekarang tidak diketahui alamatnya yang 
pasti di wilayah Negara Kesatuan Republik Indonesia ;</span><span lang="EN-ID" ;mso-themecolor:text1"><o:p></o:p></span></p>

</div>

<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Selanjutnya 
disebut sebagai Tergugat ;</span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Adapun dasar 
dan alasan / dalil-dalil gugatan ini diajukan adalah sebagai berikut :</span></p>
<p class="listparagraph1"><span lang="IN" style="mso-ansi-language:IN">1.</span><span lang="IN" style="font-size:7.0pt;
mso-ansi-language:IN">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span lang="IN" style="mso-ansi-language:IN">Bahwa pada tanggal
<b style="mso-bidi-font-weight:
normal"><span style="background: ; mso-highlight: "><?php echo $_SESSION['dalil_tgl_nikah']; ?></span></b></span>
<b style="mso-bidi-font-weight:
normal"><span style="background: ; mso-highlight: ">
<span style="mso-ansi-language:IN">&nbsp;</span></span></b><span lang="IN" style="mso-ansi-language:IN">Penggugat 
telah melangsungkan pernikahan dengan Tergugat yang dilaksanakan sah menurut 
hukum dan sesuai dengan tuntunan ajaran agama Islam. Pernikahan tersebut telah 
dicatat oleh Pegawai Pencatat Nikah Kantor Urusan Agama Kecamatan</span><b style="mso-bidi-font-weight:normal"><span style="background: ; mso-highlight: "><span style="mso-ansi-language:IN"> </span>
<span lang="IN" style="mso-ansi-language:IN"><?php echo $_SESSION['dalil_kecamatan']; ?></span></span><span lang="IN" style="mso-ansi-language:IN">,
</span>
</b>
<span lang="IN" style="mso-ansi-language:IN">Kota / Kabupaten <b style="mso-bidi-font-weight:
normal"><span style="background: ; mso-highlight: "><?php echo $_SESSION['dalil_kabupaten']; ?></span></b>, 
sebagaimana dalam Kutipan Akta NikahNomor :
<b style="mso-bidi-font-weight:
normal"><span style="background: ; mso-highlight: "><?php echo $_SESSION['no_akta_nikah']; ?></span></b>, 
Tanggal <b style="mso-bidi-font-weight:normal">
<span style="background: ; mso-highlight: "><?php echo $_SESSION['tgl_akta_nikah']; ?></span></b>;</span></p>
<p class="listparagraph1"><span lang="IN" style="mso-ansi-language:IN">2.</span><span lang="IN" style="font-size:7.0pt;
mso-ansi-language:IN">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span lang="IN" style="mso-ansi-language:IN">Bahwa sebelum menikah Penggugat 
(suami) berstatus <?php echo $_SESSION['status_penggugat']; ?> dan Tergugat<span style="mso-spacerun:yes">&nbsp;
</span>(istri) berstatus <?php echo $_SESSION['status_tergugat']; ?>, kemudian perkawinan antara Penggugat dan 
Tergugat dilangsungkan berdasarkan kehendak kedua belah pihak dengan tujuan 
membentuk rumah tangga yang<i style="mso-bidi-font-style:normal">sakinah, 
mawaddah, warahmah</i> yang diridhoi oleh Allah swt ;<span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></p>
<p class="listparagraph1CxSpMiddle">
<span lang="IN" style="mso-ansi-language:IN">3.</span><span lang="IN" style="font-size:
7.0pt;mso-ansi-language:IN">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span lang="IN" style="mso-ansi-language:IN">Bahwa setelah pernikahan tersebut, 
Penggugat dengan tergugat bertempat tinggal bersama
<b style="mso-bidi-font-weight:
normal"><span style="background: ; mso-highlight: "><?php echo $_SESSION['opt_tmpt_tgl_bersama_stlh_nikah']; ?></span></b></span>
<b style="mso-bidi-font-weight:
normal"><span style="background: ; mso-highlight: ">
<span style="mso-ansi-language:IN">&nbsp;</span></span></b><span lang="IN" style="mso-ansi-language:IN">yang 
beralamat di <b style="mso-bidi-font-weight:normal">
<span style="background: ; mso-highlight: "><?php echo $_SESSION['jalan_stlh_nikah']; ?> , 
<span class="auto-style4">RT</span></b><span style="mso-bidi-font-weight:normal"> <?php echo $_SESSION['rt_stlh_nikah']; ?> RW <?php echo $_SESSION['rw_stlh_nikah']; ?>
</span> <b style="mso-bidi-font-weight:normal">
, 
Kelurahan <?php echo $_SESSION['kel_stlh_nikah']; ?>, Kecamatan<span lang="en-us">
</span><?php echo $_SESSION['kec_stlh_nikah']; ?>, Kota / Kabupaten<span lang="en-us">
</span><?php echo $_SESSION['kab_stlh_nikah']; ?>, Provinsi<span lang="en-us"> </span><?php echo $_SESSION['prov_stlh_nikah']; ?></b></span><span style="background: ; mso-highlight: ">,</span> 
Selama <b style="mso-bidi-font-weight:
normal"><span style="background: ; mso-highlight: "><?php echo $_SESSION['lama_tahun']; ?></span></b> 
tahun <b style="mso-bidi-font-weight:normal">
<span style="background: ; mso-highlight: "><?php echo $_SESSION['lama_bulan']; ?></span></b> bulan;<span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></p>
<p class="listparagraph1CxSpMiddle">
<span lang="IN" style="mso-ansi-language:IN">4.</span><span lang="IN" style="font-size:
7.0pt;mso-ansi-language:IN">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span lang="IN" style="mso-ansi-language:IN">Bahwa selama pernikahan tersebut 
antara penggugat<span style="mso-spacerun:yes">&nbsp; </span>dengan tergugat<span style="background: ; mso-highlight: ">,
<b style="mso-bidi-font-weight:
normal"><?php echo $_SESSION['opt_anak_dari_nikah']; ?></b></span></span><span style="background: ; mso-highlight: "><b style="mso-bidi-font-weight:
normal"><span style="mso-ansi-language:IN"> </span></b></span>
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
text1">yang bernama :</span><span style="color:#7F7F7F;mso-themecolor:text1"><o:p></o:p></span></span></p>


<p class="listparagraph1CxSpMiddle">
<span lang="IN" style="color:#7F7F7F;mso-themecolor:text1;mso-ansi-language:
IN">- </span> <span style="background: ; mso-highlight: ">
<span lang="IN" style="mso-themecolor:text1;mso-ansi-language:
IN" class="auto-style3"><?php echo $_SESSION['nama_anak_1']; ?>, Tempat / 
tanggal lahir : <?php echo $_SESSION['tgl_lhr_anak_1']; ?>, Jenis kelamin : <?php echo $_SESSION['jns_klmn_anak_1']; ?> </span>
<span lang="IN" style="color:#7F7F7F;mso-themecolor:text1;mso-ansi-language:
IN">;</span></span><o:p></o:p></p>
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

<p class="listparagraph1CxSpMiddle">
<o:p>
<span lang="IN" style="color:#7F7F7F;mso-themecolor:text1;mso-ansi-language:
IN">- </span> <span style="background: ; mso-highlight: ">
<span lang="IN" style="mso-themecolor:text1;mso-ansi-language:
IN" class="auto-style3"><?php echo $_SESSION['nama_anak_2']; ?>, Tempat / 
tanggal lahir : <?php echo $_SESSION['tgl_lhr_anak_2']; ?>, Jenis kelamin : <?php echo $_SESSION['jns_klmn_anak_2']; ?> </span>
<span lang="IN" style="color:#7F7F7F;mso-themecolor:text1;mso-ansi-language:
IN">;</span></span><o:p></o:p></o:p></p>
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
<span lang="IN" style="color:#7F7F7F;mso-themecolor:text1;mso-themetint:128;mso-ansi-language:
IN">- </span> <span style="background: ; mso-highlight: ">
<span lang="IN" style="mso-themecolor:text1;mso-ansi-language:
IN" class="auto-style3"><?php echo $_SESSION['nama_anak_3']; ?>, Tempat / 
tanggal lahir : <?php echo $_SESSION['tgl_lhr_anak_3']; ?>, Jenis kelamin : <?php echo $_SESSION['jns_klmn_anak_3']; ?> </span>
<span lang="IN" style="color:#7F7F7F;mso-themecolor:text1;mso-ansi-language:
IN">;</span></span><span lang="EN-ID" style="color:#7F7F7F;mso-themecolor:text1"><o:p></o:p></span></o:p></o:p></p>
</div>
<p class="listparagraph1"><span lang="IN" style="mso-ansi-language:IN">5.</span><span lang="IN" style="font-size:7.0pt;
mso-ansi-language:IN">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span lang="IN" style="mso-ansi-language:IN">Bahwa pada awalanya kehidupan rumah 
tangga antara Pengguggat dan Tergugat berjalan harmonis, namun sejak
<b style="mso-bidi-font-weight:
normal"><span style="background: ; mso-highlight: "><?php echo $_SESSION['tgl_awal_mula_selisih']; ?></span></b> 
rumah tangga Pengguggat dengan Tergugat mulai goyah dan sering terjadi 
perselisihan dan pertengkaran yang disebabkan </span>
<b style="mso-bidi-font-weight:
normal"><span lang="EN-ID" style="background: ; mso-highlight: ">
<?php echo $_SESSION['txt_alasan_perselisihan']; ?></span></b><span lang="IN" style="mso-ansi-language:IN">;</span></p>
<p class="listparagraph1CxSpMiddle">
<span lang="IN" style="mso-ansi-language:IN">6.</span><span lang="IN" style="font-size:7.0pt;mso-ansi-language:IN">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><span lang="IN" style="mso-ansi-language:IN;mso-fareast-language:IN">
Bahwa</span><span lang="IN" style="mso-ansi-language:IN"> puncak perselisihan 
dan pertengkaran tersebut terjadi pada tanggal
<b style="mso-bidi-font-weight:normal">
<span style="background: ; mso-highlight: "><?php echo $_SESSION['tgl_puncak_selisih']; ?></span></b></span></p>
<p class="listparagraph1CxSpMiddle">
<span lang="IN" style="mso-ansi-language:IN">yang akibatnya Penggugat dan 
Tergugat Pisah Ranjang sejak <b style="mso-bidi-font-weight:normal">
<span style="background: ; mso-highlight: "><?php echo $_SESSION['tgl_pisah_ranjang']; ?></span></b> 
sampai dengan sekarang, dikarenakan <b style="mso-bidi-font-weight:normal">
<span style="background: ; mso-highlight: "><?php echo $_SESSION['txt_alasan_psh_ranjang']; ?></span></b>; <span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></p>
<p class="listparagraph1CxSpMiddle">
<span lang="IN" style="mso-ansi-language:IN">7.</span><span lang="IN" style="font-size:7.0pt;mso-ansi-language:IN">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><span lang="IN" style="mso-ansi-language:IN;mso-fareast-language:IN">
Bahwa</span><span lang="IN" style="mso-ansi-language:IN"> atas sikap atau 
perbuatan tergugat tersebut, penggugat merasa sangat menderita lahir batin dan 
oleh karenanya penggugat tidak rela dan berkesimpulan bahwa tergugat adalah 
istri yang tidak bertanggungjawab ;</span></p>
<p class="listparagraph1"><span lang="IN" style="mso-ansi-language:IN">8.</span><span lang="IN" style="font-size:7.0pt;
mso-ansi-language:IN">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span lang="EN-ID">Bahwaikatan</span> <span lang="EN-ID">perkawinan</span> <span lang="EN-ID">antara</span> <span lang="EN-ID">Penggugat 
dan Tergugat</span>
<span lang="EN-ID">sebagaimana yang </span>
<span lang="IN" style="mso-ansi-language:
IN">diuraikan</span> <span lang="EN-ID">diatas</span> <span lang="EN-ID">sudah</span> <span lang="EN-ID">sulit</span> <span lang="EN-ID">dibina</span> <span lang="EN-ID">untuk</span> <span lang="EN-ID">membentuk</span> <span lang="EN-ID">suatu</span> <span lang="EN-ID">rumah</span> <span lang="EN-ID">tangga 
yang <i>sakinah, mawaddah<span lang="en-us"> </span>warahmah</i></span><i> </i><span lang="EN-ID">sebagaimana</span> <span lang="EN-ID">maksud dan 
tujuan</span> <span lang="EN-ID">dari</span> <span lang="EN-ID">suatu</span> <span lang="EN-ID">perkawinan, sehingga</span> <span lang="EN-ID">lebih</span> <span lang="EN-ID">baik</span> <span lang="EN-ID">diputus</span> <span lang="EN-ID">karena</span> <span lang="EN-ID">perceraian;</span><span lang="EN-ID" style="mso-fareast-font-family:&quot;Times New Roman&quot;"><o:p></o:p></span></p>
<p class="listparagraph1"><span lang="IN" style="mso-ansi-language:IN">9.</span><span lang="IN" style="font-size:7.0pt;
mso-ansi-language:IN">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span lang="IN" style="mso-ansi-language:IN;mso-fareast-language:IN">Bahwa
</span><span lang="IN" style="mso-ansi-language:IN">Penggugat sanggup membayar 
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

<p class="listparagraph1CxSpLast">
<span lang="IN" style="mso-themecolor:text1;mso-ansi-language:IN" class="auto-style3">10.</span><span lang="IN" style="font-size:7.0pt;mso-themecolor:text1;
mso-ansi-language:IN" class="auto-style3">&nbsp; </span>
<span lang="IN" style="mso-themecolor:text1;mso-ansi-language:IN" class="auto-style3">Bahwa untuk 
menjamin kehidupan yang layak anak kami ter</span><span lang="EN-ID" style="mso-themecolor:text1" class="auto-style3">se</span><span lang="IN" style="mso-themecolor:text1;mso-ansi-language:
IN" class="auto-style3">but, Penggugat mohon kepada Majelis Hakim untuk hak asuh anak jatuh kepada 
Penggugat ;</span><span lang="EN-ID" style="color:#7F7F7F;mso-themecolor:text1"><o:p></o:p></span></p>
</div>

<p class="MsoNormal">
<span lang="IN" style="mso-fareast-font-family:&quot;Times New Roman&quot;;mso-ansi-language:
IN">Berdasarkan hal-hal yang telah Penggugat uraikan di atas, Penggugat mohon 
agar Ketua Pengadilan Agama</span><span style="mso-fareast-font-family:&quot;Times New Roman&quot;;mso-ansi-language:
IN"> </span><b style="mso-bidi-font-weight:normal"><span lang="EN-ID" style="background: ; mso-highlight: "><?php
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
?></span></b><span style="mso-fareast-font-family:&quot;Times New Roman&quot;;mso-ansi-language:
IN"> </span><span lang="IN" style="mso-fareast-font-family:&quot;Times New Roman&quot;;mso-ansi-language:
IN">c.q Majelis Hakim yang memeriksa dan mengadili perkara ini menjatuhkan amar 
putusan sebagai berikut :</span></p>
<p class="MsoNormal">
<span lang="IN" style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-ansi-language:IN">1.</span><span lang="IN" style="font-size:7.0pt;mso-fareast-font-family:
&quot;Times New Roman&quot;;mso-ansi-language:IN">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span lang="IN" style="mso-fareast-font-family:&quot;Times New Roman&quot;;mso-ansi-language:
IN">Mengabulkan gugatan Penggugat untuk</span><span lang="IN" style="mso-bidi-font-size:
11.0pt;mso-fareast-font-family:Calibri;mso-ansi-language:IN"> seluruhnya ;</span></p>
<p class="MsoNormal">
<span lang="IN" style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-ansi-language:IN">2.</span><span lang="IN" style="font-size:7.0pt;mso-fareast-font-family:
&quot;Times New Roman&quot;;mso-ansi-language:IN">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><span lang="EN-ID">Menetapkan, 
memberiijin</span> <span lang="EN-ID">kepada</span> <span lang="EN-ID">Penggugat</span> <span lang="EN-ID">untuk</span> <span lang="EN-ID">mengucapkan</span> <span lang="EN-ID">Ikrar</span> <span lang="EN-ID">Talak</span> <span lang="EN-ID">terhadap</span> <span lang="EN-ID">Tergugat</span> <span lang="EN-ID">dihadapan</span> <span lang="EN-ID">sidang</span> <span lang="EN-ID">Pengadilan 
Agama</span><b style="mso-bidi-font-weight:normal"><span style="background: ; mso-highlight: ; mso-ansi-language: IN"> </span><span lang="IN" style="background: ; mso-highlight: ; mso-ansi-language: IN"><?php
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
?></span></b><span lang="IN" style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:Calibri;
mso-ansi-language:IN">;</span><span lang="EN-ID" style="mso-fareast-font-family:
Calibri"><o:p></o:p></span></p>
<p class="MsoNormal">
<span lang="IN" style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-ansi-language:IN">3.</span><span lang="IN" style="font-size:7.0pt;mso-fareast-font-family:
&quot;Times New Roman&quot;;mso-ansi-language:IN">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><span lang="EN-ID">Menetapkan</span><span lang="IN" style="mso-bidi-font-size:11.0pt;
mso-fareast-font-family:Calibri;mso-ansi-language:IN"> biaya perkara yang timbul 
dalam perkara<span style="mso-spacerun:yes">&nbsp; </span>ini sesuai dengan 
peraturan perundang-undangan yang berlaku ;

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


<p class="MsoNormal">
<span lang="IN" style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:
&quot;Times New Roman&quot;;mso-themecolor:text1;
mso-ansi-language:IN" class="auto-style3">4.</span><span lang="IN" style="font-size:7.0pt;mso-fareast-font-family:
&quot;Times New Roman&quot;;mso-themecolor:text1;
mso-ansi-language:IN" class="auto-style3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span lang="IN" style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:Calibri;mso-themecolor:text1;mso-ansi-language:IN" class="auto-style3">Menyatakan anak 
kami yang bernama, <b style="mso-bidi-font-weight:normal">
<span style="background: ; mso-highlight: "><?php echo $_SESSION['nama_anak_1']; ?></span></b></span><b style="mso-bidi-font-weight:normal"><span style="background: ; mso-highlight: "><span style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:Calibri;mso-themecolor:text1;mso-ansi-language:IN" class="auto-style3">, <?php echo $_SESSION['nama_anak_2']; ?>, <?php echo $_SESSION['nama_anak_3']; ?> </span>
</span></b>
<span lang="IN" style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:Calibri;mso-themecolor:text1;mso-ansi-language:IN" class="auto-style3">bera</span><span style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:Calibri;mso-themecolor:text1;mso-ansi-language:IN" class="auto-style3">d</span><span lang="IN" style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:Calibri;mso-themecolor:text1;mso-ansi-language:IN" class="auto-style3">a 
dibawah asuhan Penggugat </span>
<span lang="IN" style="mso-bidi-font-size:11.0pt;
mso-fareast-font-family:Calibri;color:#BFBFBF;mso-themecolor:background1;
mso-themeshade:191;mso-ansi-language:IN">.</span></p>
</div>

<p class="MsoNormal">
<span lang="IN" style="mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-ansi-language:IN">Demikian</span><span lang="IN" style="mso-bidi-font-size:
11.0pt;mso-fareast-font-family:Calibri;mso-ansi-language:IN"> atas terkabulnya 
gugatan ini Penggugat menyampaikan terima kasih,Apabila Majelis Hakim yang 
memeriksa, mengadili dan memutus perkara ini berpendapat lain, mohon putusan 
yang seadil-adilnya.</span></p>
<p align="center" class="MsoNormal">
<span lang="IN" style="font-size:14.0pt;mso-bidi-font-size:
12.0pt;mso-ansi-language:IN">Hormat Kami,</span></p>
<p align="center" class="MsoNormal">
<span lang="IN" style="font-size:14.0pt;mso-bidi-font-size:
12.0pt;mso-ansi-language:IN">Penggugat</span></p>
<p align="center" class="MsoNormal"><span lang="EN-ID"><o:p>&nbsp;</o:p></span></p>
<p align="center" class="MsoNormal"><b style="mso-bidi-font-weight:normal">
<span lang="EN-ID" style="font-size: 14.0pt; mso-bidi-font-size: 12.0pt; background: ; mso-highlight: ">
<?php echo $_SESSION['nama_ktp_pnggt']; ?></span></b><span style="font-size:14.0pt;
mso-bidi-font-size:12.0pt;mso-ansi-language:IN"> </span><span lang="IN" style="font-size:14.0pt;
mso-bidi-font-size:12.0pt;mso-ansi-language:IN">bin
<b style="mso-bidi-font-weight:
normal"><span style="background: ; mso-highlight: "><?php echo $_SESSION['bin_binti_pnggt']; ?></span></b></span><b style="mso-bidi-font-weight:normal"><span lang="IN" style="mso-ansi-language:
IN"><o:p></o:p></span></b></p>
<p class="MsoNormal">
<span lang="IN" style="font-size:14.0pt;mso-bidi-font-size:12.0pt;mso-ansi-language:
IN">&nbsp;</span></p>
<p class="MsoNormal">
<span lang="IN" style="font-size:14.0pt;mso-bidi-font-size:12.0pt;mso-ansi-language:
IN">&nbsp;</span></p>
<p class="MsoNormal">
<span lang="IN" style="font-size:14.0pt;mso-bidi-font-size:12.0pt;mso-ansi-language:
IN">&nbsp;</span></p>
<p class="MsoNormal"><span lang="EN-ID">&nbsp;</span></p>

</body>
</html>