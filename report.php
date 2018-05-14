<?php
    header("Content-type: application/vnd.ms-word");
    header("Content-Disposition: attachment; Filename=coba.doc");
?>

<?php
if(isset($_POST['preview']))
{
	session_start();
	$_SESSION['pilihan_pemohon'] = $_POST['opt_pilihan_pemohon'];
	echo "pengadilan : ". $_SESSION['pengadilan_agama'] ;
	echo nl2br ("\n");
	echo "kab/kota : ". $_SESSION['pilihan'];
	echo '<pre>';
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
</style>
</head>




<html>
<body>

<p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
text-align:justify;text-justify:inter-ideograph;line-height:normal"><b>
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;"><?php echo $_SESSION['pilihan']; ?>, ___ _______________ ________________</span></b><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;"><o:p></o:p></span></p>
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><b><i>
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;">Kepada Yth.,</span></i></b><i><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;"><o:p></o:p></span></i></p>
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><b><i>
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;">Ketua Pengadilan Agama 
<?php echo $_SESSION['pilihan']; ?> <o:p></o:p></span></i></b></p>
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><b><i>
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;">_________________________<o:p></o:p></span></i></b></p>
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><i>
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;">________________________<o:p></o:p></span></i></p>
<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal"><i>
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;">_____________<o:p></o:p></span></i></p>
<p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal">
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;">Perihal: <b>Gugatan Cerai</b><o:p></o:p></span></p>
<p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal">
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;">Dengan hormat<o:p></o:p></span></p>
<p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal">
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;">Yang bertanda tangan di 
bawah ini<o:p></o:p></span></p>
<p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:1.0cm;text-align:justify;text-justify:inter-ideograph;line-height:
normal"><b>
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;"><?php echo $_SESSION['nama_ktp_pnggt']; ?></span></b><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;">, agama Islam, umur __ tahun, pekerjaan swasta, 
bertempat tinggal di _____________________, dala<a name="_GoBack"></a>m gugatan 
ini selanjutnya disebut PENGGUGAT;<o:p></o:p></span></p>
<p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
text-align:justify;text-justify:inter-ideograph;line-height:normal">
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;">PENGGUGAT dengan ini hendak mengajukan gugatan 
cerai terhadap:<o:p></o:p></span></p>
<p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:1.0cm;text-align:justify;text-justify:inter-ideograph;line-height:
normal"><b>
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;">______________</span></b><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;">, agama Islam, umur __ tahun, pekerjaan swasta, 
bertempat tinggal di ________________________, dalam gugatan ini selanjutnya 
disebut TERGUGAT<o:p></o:p></span></p>
<p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
text-align:justify;text-justify:inter-ideograph;line-height:normal">
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;">Adapun yang menjadi dasar-dasar diajukannya gugatan 
cerai ini adalah sebagai berikut:<o:p></o:p></span></p>
<p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:36.0pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-18.0pt;line-height:normal;mso-list:l1 level1 lfo1;tab-stops:list 36.0pt"><![if !supportLists]>
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;"><span style="mso-list:Ignore">1.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;">Bahwa, pada tanggal 
_________________ PENGGUGAT dan TERGUGAT telah melangsungkan perkawinan yang 
tercatat di Kantor Urusan Agama (KUA) Kecamatan ___________ Propinsi 
_____________, berdasarkan Akta Nikah No.: _____________ tanggal ______________;<o:p></o:p></span></p>
<p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:36.0pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-18.0pt;line-height:normal;mso-list:l1 level1 lfo1;tab-stops:list 36.0pt"><![if !supportLists]>
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;"><span style="mso-list:Ignore">2.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;">Bahwa, pada awal masa 
perkawinan, PENGGUGAT dan TERGUGAT telah tinggal bersama dan hidup rukun, bahkan 
PENGGUGAT dan TERGUGAT telah dikaruniai seorang anak laki-laki yang bernama <b>
______________</b>, lahir di __________ tanggal _____________ dengan Akta 
Kelahiran No_____tanggal_____;<o:p></o:p></span></p>
<p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:36.0pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-18.0pt;line-height:normal;mso-list:l1 level1 lfo1;tab-stops:list 36.0pt"><![if !supportLists]>
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;"><span style="mso-list:Ignore">3.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;">Bahwa, sejak kurang lebih 
__ (____) tahun terakhir, diantara PENGGUGAT dan TERGUGAT sering terjadi 
perselisihan dan pertengkaran, dan meskipun perselisihan dan pertengkaran 
tersebut sering berujung pada perdamaian, namun perselisihan dan pertengkaran 
tersebut tetap terulang secara terus-menerus;<o:p></o:p></span></p>
<p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:36.0pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-18.0pt;line-height:normal;mso-list:l1 level1 lfo1;tab-stops:list 36.0pt"><![if !supportLists]>
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;"><span style="mso-list:Ignore">4.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;">Bahwa, untuk mengatasi 
perselisihan dan pertengkaran tersebut, PENGGUGAT dan TERGUGAT telah melakukan 
berbagai upaya untuk menghindari terjadinya keretakan rumah tangga, antara lain 
dengan melakukan konsultasi perkawinan pada lembaga konsultan perkawinan, serta 
melibatkan pihak keluarga masing-masing PENGGUGAT dan TERGUGAT sebagai mediator, 
namun perselisihan yang terjadi diantara PENGGUGAT dan TERGUGAT terus saja 
berlangsung dan mengakibatkan keretakan rumah tangga PENGGUGAT dan TERGUGAT;<o:p></o:p></span></p>
<p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:36.0pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-18.0pt;line-height:normal;mso-list:l1 level1 lfo1;tab-stops:list 36.0pt"><![if !supportLists]>
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;"><span style="mso-list:Ignore">5.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;">Bahwa, dengan terjadinya 
perselisihan dan pertengkaran yang terus menerus tersebut, maka lembaga 
perkawinan yang telah dibina selama kurang lebih ___ (_______) tahun tersebut 
tidak lagi menjadi wadah untuk saling berbagai, saling menyayangi dan saling 
membantu satu sama lain, serta menanamkan budi pekerti terhadap anak dari 
PENGGUGAT dan TERGUGAT.<o:p></o:p></span></p>
<p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
text-align:justify;text-justify:inter-ideograph;line-height:normal">
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;">Berdasarkan uraian tersebut diatas, PENGGUGAT 
dengan ini memohon kepada Majelis Hakim yang memeriksa perkara ini untuk 
memutuskan sebagai berikut:<o:p></o:p></span></p>
<p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:36.0pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-18.0pt;line-height:normal;mso-list:l0 level1 lfo2;tab-stops:list 36.0pt"><![if !supportLists]>
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;"><span style="mso-list:Ignore">1.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;">Mengabulkan gugatan 
PENGGUGAT untuk seluruhnya;<o:p></o:p></span></p>
<p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:36.0pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-18.0pt;line-height:normal;mso-list:l0 level1 lfo2;tab-stops:list 36.0pt"><![if !supportLists]>
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;"><span style="mso-list:Ignore">2.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;">Menyatakan putusnya 
perkawinan antara PENGGUGAT dan TERGUGAT sebagaimana dimaksud dalam Akta Nikah 
No.: ___________ tanggal ___________ yang tercatat di Kantor Urusan Agama 
Kecamatan ____________ Propinsi ____________;<o:p></o:p></span></p>
<p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:36.0pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-18.0pt;line-height:normal;mso-list:l0 level1 lfo2;tab-stops:list 36.0pt"><![if !supportLists]>
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;"><span style="mso-list:Ignore">3.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;">Menyatakan hak asuh anak 
(hadhanah) berada di dalam kekuasaan PENGGUGAT;<o:p></o:p></span></p>
<p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:36.0pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-18.0pt;line-height:normal;mso-list:l0 level1 lfo2;tab-stops:list 36.0pt"><![if !supportLists]>
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;"><span style="mso-list:Ignore">4.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;">Menyatakan seluruh harta 
bersama dibagi 2 (dua) sama rata diantara PENGGUGAT dan TERGUGAT;<o:p></o:p></span></p>
<p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:36.0pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-18.0pt;line-height:normal;mso-list:l0 level1 lfo2;tab-stops:list 36.0pt"><![if !supportLists]>
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;"><span style="mso-list:Ignore">5.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;">Menghukum TERGUGAT untuk 
memberikan uang iddah kepada PENGGUGAT sebesar Rp. 6.000.000 (enam juta rupiah);<o:p></o:p></span></p>
<p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:36.0pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-18.0pt;line-height:normal;mso-list:l0 level1 lfo2;tab-stops:list 36.0pt"><![if !supportLists]>
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;"><span style="mso-list:Ignore">6.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;">Menghukum TERGUGAT untuk 
memberikan nafkah anak sebesar Rp. 2.000.000 (dua juta rupiah) setiap bulan 
hingga anak dewasa;<o:p></o:p></span></p>
<p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:36.0pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-18.0pt;line-height:normal;mso-list:l0 level1 lfo2;tab-stops:list 36.0pt"><![if !supportLists]>
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;"><span style="mso-list:Ignore">7.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;">Menghukum TERGUGAT untuk 
membayar biaya perkara.<o:p></o:p></span></p>
<p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
text-align:justify;text-justify:inter-ideograph;line-height:normal">
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;">Apabila Majelis Hakim berkehendak lain, mohon 
putusan yang seadil-adilnya (<i>ex aequo et bono</i>).<o:p></o:p></span></p>
<p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
text-align:justify;text-justify:inter-ideograph;line-height:normal">
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;">Hormat PENGGUGAT,<o:p></o:p></span></p>
<p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal">
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;">&nbsp;<o:p></o:p></span></p>
<p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><b>
<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;">____________________</span></b><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;"><o:p></o:p></span></p>

</body>
</html>