<?php
    header("Content-type: application/vnd.ms-word");
    header("Content-Disposition: attachment; Filename=coba.doc");
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
	$_SESSION['tanggal']= date('Y-m-d');
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
var_dump($_SESSION);
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
</style>
</head>




<html>
<body>

<p align="center" class="MsoNormal">
<span lang="IN" style="mso-ansi-language:IN"><o:p></o:p>
</span></p>
<p align="center" class="MsoNormal">
<span lang="IN" style="mso-ansi-language:IN"><o:p>
<span style="text-decoration:none">&nbsp;</span></span><span style="mso-ansi-language:IN"><span style="text-decoration:none"><?php echo $_SESSION['tanggal']; ?></span></span></o:p></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">
<span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo $_SESSION['pilihan']; ?></span></span></p>
<p align="center" class="MsoNormal"><u>
<span lang="IN" style="mso-ansi-language:IN"><o:p>
<span style="text-decoration:none">&nbsp;</span></o:p></span></u></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Kepada yang 
terhormat,<o:p></o:p></span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Ketua </span>
pengadilan agama <?php echo $_SESSION['kab_ktp_pggt']; ?></p>
<p class="MsoNormal"> </p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">di -</span> 
<?php echo $_SESSION['kab_ktp_pggt']; ?></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN"><o:p>&nbsp;</o:p></span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN"><o:p>&nbsp;</o:p></span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Dengan hormat,<o:p></o:p></span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Yang bertanda 
tangan dibawah ini, saya :<o:p></o:p></span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Nama
<span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>: </span><span style="mso-ansi-language:IN"><?php echo $_SESSION['nama_ktp_pnggt']; ?></span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Tempat / 
tanggal Lahir<span style="mso-tab-count:
1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>: </span>
<span style="mso-ansi-language:IN"><?php echo $_SESSION['tempat_lahir_pggt']; ?></span><span lang="IN" style="mso-ansi-language:IN"><span style="mso-tab-count:2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span> </span><span style="mso-ansi-language:IN"><o:p>,<?php echo $_SESSION['tanggal_lahir_pggt']; ?></o:p></span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Umur<span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>: </span><span style="mso-ansi-language:IN"><?php echo $_SESSION['umur_pggt']; ?></span><span lang="IN" style="mso-ansi-language:IN"><span style="mso-tab-count:1">&nbsp;
</span><o:p></o:p></span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Jenis Kelamin<span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>: </span><span style="mso-ansi-language:IN"><?php echo $_SESSION['jenis_kelamin_pggt']; ?></span><span lang="IN" style="mso-ansi-language:IN"><span style="mso-tab-count:1">&nbsp;
</span><o:p></o:p></span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Agama<span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>: </span><span style="mso-ansi-language:IN"><?php echo $_SESSION['agama_pggt']; ?></span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Warganegara<span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>: </span><span style="mso-ansi-language:IN"><?php echo $_SESSION['warganegara_pggt']; ?></span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Pekerjaan
<span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>: </span><span style="mso-ansi-language:IN"><?php echo $_SESSION['pekerjaan_pggt']; ?></span><span lang="IN" style="mso-ansi-language:IN"><span style="mso-tab-count:1">&nbsp;
</span><o:p></o:p></span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Status Kawin<span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>: </span><span style="mso-ansi-language:IN"><?php echo $_SESSION['status_kawin_pggt']; ?></span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Pendidikan<span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>:</span><span style="mso-ansi-language:IN"> <o:p><?php echo $_SESSION['pendidikan_pggt']; ?></o:p></span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Alamat<span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>:</span><span style="mso-ansi-language:IN"> <?php echo $_SESSION['jalan_ktp_pggt']; ?></span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">
<span style="mso-tab-count:2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>RT</span> <span style="mso-tab-count:1">
<span style="mso-ansi-language:IN">
<?php echo $_SESSION['rt_ktp_pggt']; ?></span><span lang="IN" style="mso-ansi-language:IN">&nbsp;&nbsp;&nbsp;&nbsp; </span> </span><span lang="IN" style="mso-ansi-language:IN">
RW</span><span style="mso-tab-count:1"><span style="mso-ansi-language:IN"> <?php echo $_SESSION['rw_ktp_pggt']; ?></span><span lang="IN" style="mso-ansi-language:IN">&nbsp;&nbsp;&nbsp; </span> </span><span lang="IN" style="mso-ansi-language:IN">
Kel.</span><span style="mso-ansi-language:IN"> <o:p><?php echo $_SESSION['kel_desa_ktp_pggt']; ?></o:p>
</span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">
<span style="mso-tab-count:2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>Kec</span><span style="mso-ansi-language:IN">. <?php echo $_SESSION['kec_ktp_pggt']; ?></span><span lang="IN" style="mso-ansi-language:IN"><span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp; </span>Kab.      </span>
<span style="mso-ansi-language:IN"><?php echo $_SESSION['kab_ktp_pggt']; ?></span><span style="mso-tab-count:1"><span lang="IN" style="mso-ansi-language:IN">&nbsp;&nbsp;&nbsp;&nbsp; </span> </span><span lang="IN" style="mso-ansi-language:IN">Prov.</span><span style="mso-ansi-language:IN"> 
<?php echo $_SESSION['prov_ktp_pggt']; ?></span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Selanjutnya 
disebut sebagai Penggugat ;<o:p></o:p></span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Dengan ini, 
Penggugat mengajukan Gugatan Cerai terhadap Istri saya : <o:p></o:p></span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Nama
<span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>:</span><span style="mso-tab-count:1"><span style="mso-ansi-language:IN"> 
<?php echo $_SESSION['nama_ktp_tggt']; ?></span><span lang="IN" style="mso-ansi-language:IN">&nbsp;</span></span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Tempat / 
tanggal Lahir<span style="mso-tab-count:
1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>:</span><span style="mso-ansi-language:IN"> 
<?php echo $_SESSION['tempat_lahir_tggt']; ?></span><span lang="IN" style="mso-ansi-language:IN"><span style="mso-tab-count:2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span lang="en-us">, 
<?php echo $_SESSION['tanggal_lahir_tggt']; ?></span>&nbsp;
</span><o:p></o:p></span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Umur<span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>:</span><span style="mso-ansi-language:IN"> <?php echo $_SESSION['umur_tggt']; ?></span>
<span style="mso-tab-count:1"><span lang="IN" style="mso-ansi-language:IN">&nbsp; </span>
</span><span lang="IN" style="mso-ansi-language:IN"><o:p></o:p></span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Jenis Kelamin<span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>:</span><span style="mso-ansi-language:IN"> <?php echo $_SESSION['jenis_kelamin_tggt']; ?></span><span style="mso-tab-count:1"><span lang="IN" style="mso-ansi-language:IN">&nbsp; </span>
</span><span lang="IN" style="mso-ansi-language:IN"><o:p></o:p></span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Agama<span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>:</span><span style="mso-ansi-language:IN"> <?php echo $_SESSION['agama_tggt']; ?></span><span style="mso-tab-count:1"><span lang="IN" style="mso-ansi-language:IN">&nbsp; </span>
</span><span lang="IN" style="mso-ansi-language:IN"><o:p></o:p></span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Warganegara<span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>:</span><span style="mso-ansi-language:IN"> <?php echo $_SESSION['warganegara_tggt']; ?></span><span style="mso-tab-count:1"><span lang="IN" style="mso-ansi-language:IN"> </span>
</span><span lang="IN" style="mso-ansi-language:IN"><o:p></o:p></span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Pekerjaan
<span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>:</span><span style="mso-ansi-language:IN"> <?php echo $_SESSION['pekerjaan_tggt']; ?></span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Status Kawin<span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>:</span><span style="mso-ansi-language:IN"> <?php echo $_SESSION['status_kawin_tggt']; ?></span><span style="mso-tab-count:1"><span lang="IN" style="mso-ansi-language:IN"> </span>
</span><span lang="IN" style="mso-ansi-language:IN"><o:p></o:p></span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Pendidikan<span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>:</span><span style="mso-ansi-language:IN"> <?php echo $_SESSION['pendidikan_tggt']; ?></span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Alamat<span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>:</span><span style="mso-ansi-language:IN"> <?php echo $_SESSION['jalan_ktp_tggt']; ?></span><span style="mso-tab-count:1"><span lang="IN" style="mso-ansi-language:IN">&nbsp; </span>
</span><span lang="IN" style="mso-ansi-language:IN"><o:p></o:p></span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">
<span style="mso-tab-count:2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>RT</span> <?php echo $_SESSION['rt_ktp_tggt']; ?><span style="mso-tab-count:1"><span lang="IN" style="mso-ansi-language:IN">&nbsp;&nbsp;&nbsp;&nbsp; </span> </span><span lang="IN" style="mso-ansi-language:IN">
RW</span><span style="mso-tab-count:1"><span style="mso-ansi-language:IN"> 
<?php echo $_SESSION['rw_ktp_tggt']; ?></span><span lang="IN" style="mso-ansi-language:IN">&nbsp;&nbsp;&nbsp;&nbsp; </span> </span><span lang="IN" style="mso-ansi-language:IN">
Kel</span><span style="mso-ansi-language:IN">. <?php echo $_SESSION['kel_desa_ktp_tggt']; ?></span><span style="mso-tab-count:1"><span lang="IN" style="mso-ansi-language:IN">&nbsp; </span>
</span><span lang="IN" style="mso-ansi-language:IN">
<o:p></o:p></span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">
<span style="mso-tab-count:2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>Kec.</span><span style="mso-tab-count:1"><span style="mso-ansi-language:IN"> 
<?php echo $_SESSION['kec_ktp_tggt']; ?></span><span lang="IN" style="mso-ansi-language:IN">&nbsp;&nbsp;&nbsp; </span> </span><span lang="IN" style="mso-ansi-language:IN">
Kab.</span> <?php echo $_SESSION['kab_ktp_tggt']; ?><span style="mso-tab-count:1"><span lang="IN" style="mso-ansi-language:IN">&nbsp;&nbsp;&nbsp;&nbsp; </span> </span><span lang="IN" style="mso-ansi-language:IN">
Prov.</span><span style="mso-ansi-language:IN"> <?php echo $_SESSION['prov_ktp_tggt']; ?></span><span lang="IN" style="mso-ansi-language:IN"><span style="mso-tab-count:1">
</span><o:p></o:p></span></p>
<p class="MsoNormal">
<span lang="IN" style="color:#BFBFBF;mso-themecolor:background1;mso-themeshade:191;mso-ansi-language:
IN">Alamat tinggal sekarang<span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;
</span>:</span><span style="color:#BFBFBF;mso-themecolor:background1;mso-themeshade:191;mso-ansi-language:
IN"> <?php echo $_SESSION['almt_skrg_tggt']; ?></span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">
<span style="mso-tab-count:2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span style="color:#BFBFBF;mso-themecolor:background1;mso-themeshade:191">RT<span lang="en-us"> 
<?php echo $_SESSION['rt_skrg_tggt']; ?></span><span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp; </span>RW<span lang="en-us"> 
<?php echo $_SESSION['rw_skrg_tggt']; ?></span><span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp; </span>
Kel<span lang="en-us"> <?php echo $_SESSION['kel_desa_skrg_tggt']; ?></span><span style="mso-tab-count:1">
</span><o:p></o:p></span></span></p>
<p class="MsoNormal">
<span lang="IN" style="color:#BFBFBF;mso-themecolor:background1;mso-themeshade:191;
mso-ansi-language:IN"><span style="mso-tab-count:2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>Kec</span><span style="color:#BFBFBF;mso-themecolor:background1;mso-themeshade:191;
mso-ansi-language:IN">.<?php echo $_SESSION['kec_skrg_tggt']; ?></span><span lang="IN" style="color:#BFBFBF;mso-themecolor:background1;mso-themeshade:191;
mso-ansi-language:IN"><span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp; </span>Kab</span><span style="color:#BFBFBF;mso-themecolor:background1;mso-themeshade:191;
mso-ansi-language:IN">.<?php echo $_SESSION['kab_skrg_tggt']; ?></span><span style="mso-tab-count:1"><span lang="IN" style="color:#BFBFBF;mso-themecolor:background1;mso-themeshade:191;
mso-ansi-language:IN">&nbsp;&nbsp;&nbsp;&nbsp; </span> </span><span lang="IN" style="color:#BFBFBF;mso-themecolor:background1;mso-themeshade:191;
mso-ansi-language:IN">Prov</span><span style="color:#BFBFBF;mso-themecolor:background1;mso-themeshade:191;
mso-ansi-language:IN">.<?php echo $_SESSION['prov_skrg_tggt']; ?></span><u><span style="mso-tab-count:1"><span lang="IN" style="color:#BFBFBF;mso-themecolor:background1;mso-themeshade:191;
mso-ansi-language:IN">&nbsp; </span>
</span></u><span lang="IN" style="mso-ansi-language:IN"><o:p></o:p>
</span></p>
<p class="MsoNormal">
<span lang="IN" style="color:#BFBFBF;mso-themecolor:background1;mso-themeshade:191;
mso-ansi-language:IN"><span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>Sekarang tidak diketahui alamatnya yang pasti di wilayah Negara Kesatuan 
Republik Indonesia ;<o:p></o:p></span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Selanjutnya 
disebut sebagai Tergugat ;<o:p></o:p></span></p>
<p class="MsoNormal"><span lang="IN" style="mso-ansi-language:IN">Adapun dasar 
dan alasan / dalil-dalil gugatan ini diajukan adalah sebagai berikut :<o:p></o:p></span></p>
<p class="ListParagraph1" style="margin-top:0cm;margin-right:0cm;margin-bottom:
10.0pt;margin-left:35.7pt;text-align:justify;text-indent:-17.85pt;line-height:
24.0pt;mso-line-height-rule:exactly;mso-list:l1 level1 lfo1;tab-stops:196.3pt"><![if !supportLists]>
<span lang="IN" style="mso-ansi-language:IN"><span style="mso-list:Ignore">1.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang="IN" style="mso-ansi-language:IN">
Bahwa pada tanggal</span><span style="mso-ansi-language:IN"> <?php echo $_SESSION['dalil_tgl_nikah']; ?></span><span lang="IN" style="mso-ansi-language:IN"><span style="mso-spacerun:yes">&nbsp; </span>
Penggugat telah melangsungkan pernikahan dengan Tergugat yang dilaksanakan di</span><span style="mso-ansi-language:IN"> 
 <?php echo $_SESSION['dalil_tmpt_nikah']; ?></span><span lang="IN" style="mso-ansi-language:IN">, sah menurut hukum dan tata cara agama serta telah di catatkan pada 
Kantor Catatan Sipil Kota/Kabupaten</span><span style="mso-ansi-language:IN"> 
<?php echo $_SESSION['dalil_kab_nikah']; ?></span><span lang="IN" style="mso-ansi-language:IN">, sebagaimana dalam Kutipan Akta 
Perkawinan Nomor</span><span style="mso-ansi-language:IN"> <?php echo $_SESSION['no_akta_nikah']; ?></span><span lang="IN" style="mso-ansi-language:IN">
, Tanggal </span><span style="mso-ansi-language:IN"> <?php echo $_SESSION['tgl_akta_nikah']; ?></span><span lang="IN" style="mso-ansi-language:IN">;<o:p></o:p></span></p>
<p class="ListParagraph1" style="margin-top:0cm;margin-right:0cm;margin-bottom:
10.0pt;margin-left:35.7pt;text-align:justify;text-indent:-17.85pt;line-height:
24.0pt;mso-line-height-rule:exactly;mso-list:l1 level1 lfo1;tab-stops:196.3pt"><![if !supportLists]>
<span lang="IN" style="mso-ansi-language:IN"><span style="mso-list:Ignore">2.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang="IN" style="mso-ansi-language:IN">
Bahwa sebelum menikah Penggugat (istri) berstatus</span><span style="mso-ansi-language:IN"> 
<?php echo $_SESSION['status_penggugat']; ?></span><span lang="IN" style="mso-ansi-language:IN">
dan Tergugat<span style="mso-spacerun:yes">&nbsp;
</span>(suami) berstatus</span><span style="mso-ansi-language:IN"> <?php echo $_SESSION['status_tergugat']; ?></span><span lang="IN" style="mso-ansi-language:IN">, kemudian perkawinan antara Penggugat dan 
Tergugat dilangsungkan berdasarkan kehendak kedua belah pihak dengan tujuan 
membentuk rumah tangga yang<i style="mso-bidi-font-style:normal"> </i>bahagia 
dan kekal ;<span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><o:p></o:p></span></p>
<p class="ListParagraph1CxSpMiddle" style="margin-top:0cm;margin-right:0cm;
margin-bottom:10.0pt;margin-left:35.7pt;mso-add-space:auto;text-align:justify;
text-indent:-17.85pt;line-height:30.0pt;mso-line-height-rule:exactly;
mso-list:l1 level1 lfo1"><![if !supportLists]>
<span lang="IN" style="mso-ansi-language:
IN"><span style="mso-list:Ignore">3.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang="IN" style="mso-ansi-language:IN">
Bahwa setelah pernikahan tersebut, Penggugat dengan tergugat bertempat tinggal 
bersama</span><span style="mso-ansi-language:IN"> <?php echo $_SESSION['opt_tmpt_tgl_bersama_stlh_nikah']; ?></span>
<span lang="IN" style="mso-ansi-language:
IN">yang beralamat di</span><span style="mso-ansi-language:
IN"> <?php echo $_SESSION['jalan_stlh_nikah']; ?></span><span lang="IN" style="mso-ansi-language:
IN">, RT</span><span style="mso-ansi-language:
IN"> <?php echo $_SESSION['rt_stlh_nikah']; ?></span><span lang="IN" style="mso-ansi-language:
IN"> RW</span><span style="mso-ansi-language:
IN"> <?php echo $_SESSION['rw_stlh_nikah']; ?> </span><span lang="IN" style="mso-ansi-language:
IN"> Kel.</span><span style="mso-ansi-language:
IN"> <?php echo $_SESSION['kel_stlh_nikah']; ?></span><span lang="IN" style="mso-ansi-language:
IN">, 
Kec.</span><span style="mso-ansi-language:
IN"> <?php echo $_SESSION['kec_stlh_nikah']; ?></span><span lang="IN" style="mso-ansi-language:
IN">, Kab.</span><span style="mso-ansi-language:
IN"> <?php echo $_SESSION['kab_stlh_nikah']; ?></span><span lang="IN" style="mso-ansi-language:
IN">, Prov.</span><span style="mso-ansi-language:
IN"> <?php echo $_SESSION['prov_stlh_nikah']; ?></span><span lang="IN" style="mso-ansi-language:
IN">, Selama</span><span style="mso-ansi-language:
IN"> <?php echo $_SESSION['lama_tahun']; ?></span><span lang="IN" style="mso-ansi-language:
IN"> tahun </span><span style="mso-ansi-language:
IN"> <?php echo $_SESSION['lama_bulan']; ?> bulan</span><span lang="IN" style="mso-ansi-language:
IN">;<span style="mso-tab-count:1">
</span><o:p></o:p></span></p>
<p class="ListParagraph1CxSpMiddle" style="margin-top:0cm;margin-right:0cm;
margin-bottom:10.0pt;margin-left:35.7pt;mso-add-space:auto;text-indent:-17.85pt;
line-height:24.0pt;mso-line-height-rule:exactly;mso-list:l1 level1 lfo1;
tab-stops:196.3pt"><![if !supportLists]>
<span lang="IN" style="mso-ansi-language:
IN"><span style="mso-list:Ignore">4.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang="IN" style="mso-ansi-language:IN">
Bahwa selama pernikahan tersebut antara penggugat<span style="mso-spacerun:yes">&nbsp;
</span>dengan tergugat, </span><span style="mso-ansi-language:IN">
<?php echo $_SESSION['opt_anak_dari_nikah']; ?></span>
<span lang="IN" style="mso-ansi-language:IN">
&nbsp;<span style="color:#BFBFBF;
mso-themecolor:background1;mso-themeshade:191">orang anak yang bernama :</span><o:p></o:p></span></p>
<p class="ListParagraph1CxSpMiddle" style="margin-bottom:10.0pt;mso-add-space:
auto;text-align:justify;line-height:30.0pt;mso-line-height-rule:exactly;
tab-stops:196.3pt">
<span lang="IN" style="color:#BFBFBF;mso-themecolor:background1;
mso-themeshade:191;mso-ansi-language:IN">- _____________________, lahir tanggal 
_____________,<span style="mso-spacerun:yes">&nbsp; </span>jenis kelamin ______ 
;<o:p></o:p></span></p>
<p class="ListParagraph1" style="margin-top:0cm;margin-right:0cm;margin-bottom:
10.0pt;margin-left:35.7pt;text-align:justify;text-indent:-17.85pt;line-height:
24.0pt;mso-line-height-rule:exactly;mso-list:l1 level1 lfo1;tab-stops:196.3pt"><![if !supportLists]>
<span lang="IN" style="mso-ansi-language:IN"><span style="mso-list:Ignore">5.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang="IN" style="mso-ansi-language:IN">
Bahwa pada awalanya kehidupan rumah tangga antara Pengguggat dan Tergugat 
berjalan harmonis, namun sejak</span><span style="mso-ansi-language:IN"> <?php echo $_SESSION['tgl_awal_mula_selisih']; ?></span><span lang="IN" style="mso-ansi-language:IN">
rumah tangga Pengguggat dengan Tergugat mulai goyah dan sering terjadi 
perselisihan dan pertengkaran yang disebabkan</span><span style="mso-ansi-language:IN"> 
<?php echo $_SESSION['txt_alasan_perselisihan']; ?></span><span lang="IN" style="mso-ansi-language:IN">
;<o:p></o:p></span></p>
<p class="ListParagraph1CxSpMiddle" style="margin-top:0cm;margin-right:0cm;
margin-bottom:10.0pt;margin-left:35.7pt;mso-add-space:auto;text-align:justify;
text-indent:-17.85pt;line-height:24.0pt;mso-line-height-rule:exactly;
mso-list:l1 level1 lfo1;tab-stops:196.3pt"><![if !supportLists]>
<span lang="IN" style="mso-ansi-language:IN"><span style="mso-list:Ignore">6.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>
<span lang="IN" style="mso-ansi-language:IN;mso-fareast-language:IN">Bahwa</span><span lang="IN" style="mso-ansi-language:IN"> 
puncak perselisihan dan pertengkaran tersebut terjadi pada tanggal</span><span style="mso-ansi-language:IN"> 
<?php echo $_SESSION['tgl_puncak_selisih']; ?></span><span lang="IN" style="mso-ansi-language:IN"> 
<o:p></o:p>
</span></p>
<p class="ListParagraph1CxSpMiddle" style="margin-top:0cm;margin-right:0cm;
margin-bottom:10.0pt;margin-left:35.7pt;mso-add-space:auto;text-align:justify;
line-height:24.0pt;mso-line-height-rule:exactly;tab-stops:196.3pt">
<span lang="IN" style="mso-ansi-language:IN">yang akibatnya Penggugat dan 
Tergugat Pisah Ranjang sejak</span><span style="mso-ansi-language:IN"> <?php echo $_SESSION['tgl_pisah_ranjang']; ?></span><span lang="IN" style="mso-ansi-language:IN"> 
sampai dengan sekarang, dikarenakan</span><span style="mso-ansi-language:IN"> 
<?php echo $_SESSION['txt_alasan_psh_ranjang']; ?></span><span lang="IN" style="mso-ansi-language:IN">; <span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><o:p></o:p></span></p>
<p class="ListParagraph1CxSpMiddle" style="margin-top:0cm;margin-right:0cm;
margin-bottom:10.0pt;margin-left:35.7pt;mso-add-space:auto;text-align:justify;
text-indent:-17.85pt;line-height:30.0pt;mso-line-height-rule:exactly;
mso-list:l1 level1 lfo1;tab-stops:196.3pt"><![if !supportLists]>
<span lang="IN" style="mso-ansi-language:IN"><span style="mso-list:Ignore">7.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>
<span lang="IN" style="mso-ansi-language:IN;mso-fareast-language:IN">Bahwa</span><span lang="IN" style="mso-ansi-language:IN"> 
atas sikap atau perbuatan tergugat tersebut, penggugat merasa sangat menderita 
lahir batin dan oleh karenanya penggugat tidak rela dan berkesimpulan bahwa 
tergugat adalah istri yang tidak bertanggungjawab ;<o:p></o:p></span></p>
<p class="ListParagraph1" style="margin-top:0cm;margin-right:0cm;margin-bottom:
10.0pt;margin-left:35.7pt;text-align:justify;text-indent:-17.85pt;line-height:
24.0pt;mso-line-height-rule:exactly;mso-list:l1 level1 lfo1;tab-stops:196.3pt"><![if !supportLists]>
<span lang="IN" style="mso-ansi-language:IN"><span style="mso-list:Ignore">8.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>
<span lang="IN" style="mso-ansi-language:IN;mso-fareast-language:IN">Bahwa
</span><span lang="IN" style="mso-ansi-language:IN">ikatan perkawinan antara 
Penggugat dan Tergugat sebagaimana yang diuraikan diatas sudah sulit dibina 
untuk membentuk suatu rumah tangga yang rukun, damai dan bahagia, sebagaimana 
maksud dan tujuan dari suatu perkawinan semula untuk membentuk keluarga yang 
bahagia dan kekal sebagaimana amanat Undang-undang no. 1 tahun 1974 tentang 
Perkawinan, sehingga lebih baik diputus karena perceraian;<o:p></o:p></span></p>
<p class="ListParagraph1" style="margin-top:0cm;margin-right:0cm;margin-bottom:
10.0pt;margin-left:35.7pt;text-align:justify;text-indent:-17.85pt;line-height:
24.0pt;mso-line-height-rule:exactly;mso-list:l1 level1 lfo1;tab-stops:196.3pt"><![if !supportLists]>
<span lang="IN" style="mso-ansi-language:IN"><span style="mso-list:Ignore">9.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>
<span lang="IN" style="mso-ansi-language:IN;mso-fareast-language:IN">Bahwa
</span><span lang="IN" style="mso-ansi-language:IN">Penggugat sanggup membayar 
biaya perkara;<o:p></o:p></span></p>
<p class="ListParagraph1CxSpLast" style="margin-top:0cm;margin-right:0cm;
margin-bottom:10.0pt;margin-left:35.7pt;mso-add-space:auto;text-align:justify;
text-indent:-17.85pt;line-height:30.0pt;mso-line-height-rule:exactly;
mso-list:l1 level1 lfo1;tab-stops:196.3pt"><![if !supportLists]>
<span lang="IN" style="color:#BFBFBF;mso-themecolor:background1;mso-themeshade:191;mso-ansi-language:
IN"><span style="mso-list:Ignore">10.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;
</span></span></span><![endif]>
<span lang="IN" style="color:#BFBFBF;mso-themecolor:
background1;mso-themeshade:191;mso-ansi-language:IN">Bahwa untuk menjamin 
kehidupan yang layak anak kami ter</span><span style="color:#BFBFBF;mso-themecolor:
background1;mso-themeshade:191">se</span><span lang="IN" style="color:#BFBFBF;
mso-themecolor:background1;mso-themeshade:191;mso-ansi-language:IN">but, 
Penggugat mohon kepada Majelis Hakim untuk hak asuh anak jatuh kepada Penggugat 
;<o:p></o:p></span></p>
<p class="MsoNormal">
<span lang="IN" style="mso-fareast-font-family:
&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;mso-ansi-language:
IN">Berdasarkan hal-hal yang telah Penggugat uraikan di atas, Penggugat mohon 
agar Ketua Pengadilan Negeri</span> <?php echo $_SESSION['kab_ktp_pggt']; ?><span style="mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-bidi-font-family:&quot;Times New Roman&quot;"> </span>
<span lang="IN" style="mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;
mso-ansi-language:IN">c.q Majelis Hakim yang memeriksa dan mengadili perkara ini 
menjatuhkan amar putusan sebagai berikut :<o:p></o:p></span></p>
<p class="MsoNormal"><![if !supportLists]>
<span lang="IN" style="mso-bidi-font-size:
11.0pt;line-height:115%;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
&quot;Times New Roman&quot;;mso-ansi-language:IN"><span style="mso-list:Ignore">
1.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>
<span lang="IN" style="mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
&quot;Times New Roman&quot;;mso-ansi-language:IN">Mengabulkan gugatan Penggugat 
untuk</span><span lang="IN" style="mso-bidi-font-size:11.0pt;line-height:115%;mso-fareast-font-family:
Calibri;mso-bidi-font-family:&quot;Times New Roman&quot;;mso-ansi-language:IN"> 
seluruhnya ;<o:p></o:p></span></p>
<p class="MsoNormal"><![if !supportLists]>
<span lang="IN" style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-bidi-font-family:&quot;Times New Roman&quot;;mso-ansi-language:IN">
<span style="mso-list:Ignore">2.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>
<span lang="IN" style="mso-bidi-font-size:11.0pt;
mso-fareast-font-family:Calibri;mso-bidi-font-family:&quot;Times New Roman&quot;;
mso-ansi-language:IN">Menetapkan dan menyatakan perkawinan antara Penggugat 
dengan Tergugat, putus karena perceraian dengan segala akibat hukumnya ;<o:p></o:p></span></p>
<p class="MsoNormal"><![if !supportLists]>
<span lang="IN" style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-bidi-font-family:&quot;Times New Roman&quot;;mso-ansi-language:IN">
<span style="mso-list:Ignore">3.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>
<span lang="IN" style="mso-bidi-font-size:11.0pt;
mso-fareast-font-family:Calibri;mso-bidi-font-family:&quot;Times New Roman&quot;;
mso-ansi-language:IN">Menetapkan biaya perkara yang timbul dalam perkara<span style="mso-spacerun:yes">&nbsp;
</span>ini sesuai dengan peraturan perundang-undangan yang berlaku ;<o:p></o:p></span></p>
<p class="MsoNormal"><![if !supportLists]>
<span lang="IN" style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-bidi-font-family:&quot;Times New Roman&quot;;color:#BFBFBF;mso-themecolor:background1;
mso-themeshade:191;mso-ansi-language:IN"><span style="mso-list:Ignore">4.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>
<span lang="IN" style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:Calibri;
mso-bidi-font-family:&quot;Times New Roman&quot;;color:#BFBFBF;mso-themecolor:background1;
mso-themeshade:191;mso-ansi-language:IN">Menyatakan anak kami yang bernama,
</span>
<span style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
&quot;Times New Roman&quot;;color:#BFBFBF;mso-themecolor:background1;mso-themeshade:191">
____________ </span><a name="_GoBack"></a>
<span lang="IN" style="mso-bidi-font-size:11.0pt;
mso-fareast-font-family:Calibri;mso-bidi-font-family:&quot;Times New Roman&quot;;
color:#BFBFBF;mso-themecolor:background1;mso-themeshade:191;mso-ansi-language:
IN">berapa dibawah asuhan Penggugat .<o:p></o:p></span></p>
<p class="MsoNormal">
<span lang="IN" style="mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-bidi-font-family:&quot;Times New Roman&quot;;mso-ansi-language:IN">Demikian</span><span lang="IN" style="mso-bidi-font-size:11.0pt;mso-fareast-font-family:Calibri;
mso-bidi-font-family:&quot;Times New Roman&quot;;mso-ansi-language:IN"> atas 
terkabulnya gugatan ini Penggugat menyampaikan terima kasih,Apabila Majelis 
Hakim yang memeriksa, mengadili dan memutus perkara ini berpendapat lain, mohon 
putusan yang seadil-adilnya.<o:p></o:p></span></p>
<p class="MsoNormal">
<span lang="IN" style="font-size:14.0pt;mso-bidi-font-size:
12.0pt;mso-bidi-font-family:&quot;Times New Roman&quot;;mso-ansi-language:IN">
<span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>Hormat Kami,<o:p></o:p></span></p>
<p class="MsoNormal">
<span lang="IN" style="font-size:14.0pt;mso-bidi-font-size:12.0pt;mso-bidi-font-family:&quot;Times New Roman&quot;;
mso-ansi-language:IN"><span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>Penggugat</span><span style="font-size:14.0pt;mso-bidi-font-size:12.0pt;mso-bidi-font-family:&quot;Times New Roman&quot;"><o:p></o:p></span></p>
<p class="MsoNormal">
<span style="font-size:
14.0pt;mso-bidi-font-size:12.0pt;mso-bidi-font-family:&quot;Times New Roman&quot;"><o:p>
&nbsp;</o:p></span></p>
<p class="MsoNormal">
<span style="font-size:
14.0pt;mso-bidi-font-size:12.0pt;mso-bidi-font-family:&quot;Times New Roman&quot;">
<span style="mso-tab-count:2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo $_SESSION['nama_ktp_pnggt']; ?></span></span></p>
<p class="MsoNormal">
<span lang="IN" style="font-size:14.0pt;mso-bidi-font-size:
12.0pt;line-height:150%;mso-bidi-font-family:&quot;Times New Roman&quot;;mso-ansi-language:
IN"><o:p>&nbsp;</o:p></span></p>
<p class="MsoNormal">
<span lang="IN" style="font-size:14.0pt;mso-bidi-font-size:
12.0pt;line-height:150%;mso-bidi-font-family:&quot;Times New Roman&quot;;mso-ansi-language:
IN"><o:p>&nbsp;</o:p></span></p>
<p class="MsoNormal">
<span lang="IN" style="font-size:14.0pt;mso-bidi-font-size:
12.0pt;line-height:150%;mso-bidi-font-family:&quot;Times New Roman&quot;;mso-ansi-language:
IN"><o:p>&nbsp;</o:p></span></p>
<p class="MsoNormal"><o:p>&nbsp;</o:p></p>

</body>
</html>