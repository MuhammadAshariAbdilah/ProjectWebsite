<!-- *******  ********  *     *  *******  *******   *
     *     *  *         *     *  *     *  *     *   *
	 *     *  ********  *     *  *     *  *     *   *
	 * *** *         *  * *** *  * *** *  ********  *
	 *     *         *  *     *  *     *  *      *  *
	 *     *  ********  *     *  *     *  *      *  * -->
<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FJM TEKNIK</title>
     <link rel="stylesheet" href="style.css" type="text/css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
       <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'/>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
         <script src="js/jquery-min.js" type="text/javascript"></script>
          <script src="js/s3slider.js" type="text/javascript"></script>
           <script type="text/javascript">
            $(document).ready(function() {
             $('#slider').s3Slider({
              timeOut: 3000
               });
                });
                 </script>
                  </head>
                   <script>
                    window.onscroll = changePos;

                      function changePos() {
                       var header = document.getElementById("header");
                        if (window.pageYOffset > 50) {
                         header.style.position = "relative";
                          header.style.top = pageYOffset + "px";
                           } else {
                            header.style.position = "";
                             header.style.top = "";
                              }
                               }
                                </script>
								<script type='text/javascript'>
//<![CDATA[

;(function(){

var msg = "SELAMAT DATANG DI FJM TEKNIK";

var size = 25;

var circleY = 0.75; var circleX = 2;

var letter_spacing = 5;

var diameter = 10;

var rotation = 0.2;

var speed = 0.3;

if (!window.addEventListener && !window.attachEvent || !document.createElement) return;

msg = msg.split('');
var n = msg.length - 1, a = Math.round(size * diameter * 0.208333), currStep = 20,
ymouse = a * circleY + 20, xmouse = a * circleX + 20, y = [], x = [], Y = [], X = [],
o = document.createElement('div'), oi = document.createElement('div'),
b = document.compatMode && document.compatMode != "BackCompat"? document.documentElement :

document.body,

mouse = function(e){
e = e || window.event;
ymouse = !isNaN(e.pageY)? e.pageY : e.clientY; // y-position
xmouse = !isNaN(e.pageX)? e.pageX : e.clientX; // x-position
},

makecircle = function(){ // rotation/positioning
if(init.nopy){
o.style.top = (b || document.body).scrollTop + 'px';
o.style.left = (b || document.body).scrollLeft + 'px';
};
currStep -= rotation;
for (var d, i = n; i > -1; --i){ // makes the circle
d = document.getElementById('iemsg' + i).style;
d.top = Math.round(y[i] + a * Math.sin((currStep + i) / letter_spacing) * circleY - 15) +

'px';
d.left = Math.round(x[i] + a * Math.cos((currStep + i) / letter_spacing) * circleX) + 'px';
};
},

drag = function(){ // makes the resistance
y[0] = Y[0] += (ymouse - Y[0]) * speed;
x[0] = X[0] += (xmouse - 20 - X[0]) * speed;
for (var i = n; i > 0; --i){
y[i] = Y[i] += (y[i-1] - Y[i]) * speed;
x[i] = X[i] += (x[i-1] - X[i]) * speed;
};
makecircle();
},

init = function(){ // appends message divs, & sets initial values for positioning arrays
if(!isNaN(window.pageYOffset)){
ymouse += window.pageYOffset;
xmouse += window.pageXOffset;
} else init.nopy = true;
for (var d, i = n; i > -1; --i){
d = document.createElement('div'); d.id = 'iemsg' + i;
d.style.height = d.style.width = a + 'px';
d.appendChild(document.createTextNode(msg[i]));
oi.appendChild(d); y[i] = x[i] = Y[i] = X[i] = 0;
};
o.appendChild(oi); document.body.appendChild(o);
setInterval(drag, 25);
},

ascroll = function(){
ymouse += window.pageYOffset;
xmouse += window.pageXOffset;
window.removeEventListener('scroll', ascroll, false);
};

o.id = 'outerCircleText'; o.style.fontSize = size + 'px';

if (window.addEventListener){
window.addEventListener('load', init, false);
document.addEventListener('mouseover', mouse, false);
document.addEventListener('mousemove', mouse, false);
if (/Apple/.test(navigator.vendor))
window.addEventListener('scroll', ascroll, false);
}
else if (window.attachEvent){
window.attachEvent('onload', init);
document.attachEvent('onmousemove', mouse);
};

})();
//]]>
</script>
                                 <!--[if lt IE 9]> 
                                  <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
                                   <![endif]-->
                                    <body>
                                     <div id="header">
                                       <ul class="topnav">
									   <li><a href="https://fjmteknik.com">BERANDA</a></li>
									   <li><a href="https://fjmteknik.com/Harga.php">DAFTAR HARGA</a></li>
									   <li><a href="https://fjmteknik.com/Tentang.php">TENTANG KAMI</a></li>
									   <li class="icon">
									   <a href="javascript:void(0);" onClick="myFunction()">☰</a>
									   </li>
									   </ul>
									   <script>
									   function myFunction() {
									   	document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
									   }
									   </script>
                                       <div class="example_parent_element">
                                       <div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style">
                                       <a href="https://api.whatsapp.com/send?phone=6281296006881" class="a2a_button_whatsapp">Chat</a>
                                       </div>
                                       <script async src="https://static.addtoany.com/menu/page.js"></script>
                                    </div>
                                    </div>
                       <table align="center">
                                             <tr>
                                                 <td>
                                                     <div id="slide">

                                                     <div style="text-align:center;background:#FFF;color:white;padding:0;margin:0;">			
		
<!-- start slider -->
	<div id="slider">
        <ul id="sliderContent">
		            <li class="sliderImage">
                <a style="outline:none;"><img class="slider" src="Gambar/Lampiran.jpg" alt="1" style="border:0;"/></a>
                <span class="top"><strong>FAISAL JAYA MANDIRI</strong><br />Lokasi : Jl. Kh. A. Junaedi No. 07 Setia Asih, Tarumajaya - Bekasi<i class="fa fa-location fa-2x fa-fw"></i></span>
            </li>
		            <li class="sliderImage">
                <a style="outline:none;"><img class="slider" src="Gambar/00.jpg" alt="1" style="border:0;"/></a>
                <span class="top"><strong>Melayani Pemasangan Baja Ringan</strong><br />FJM TEKNIK Sedang Melakukan Pemasangan Baja Ringan</span>
            </li>
            <li class="sliderImage">
                <a style="outline:none;"><img class="slider" src="Gambar/1.jpg" alt="1" style="border:0;"/></a>
                <span class="top"><strong>Melayani Pemasangan Tangga</strong><br />FJM TEKNIK Sedang Melakukan Pemasangan Tangga</span>
            </li>
            <li class="sliderImage">
                <a style="outline:none;"><img class="slider" src="Gambar/2.jpg" alt="2" style="border:0;" /></a>
                <span class="top"><strong>Pekerjaan Pemasangan Jendela</strong><br />FJM TEKNIK  Sedang Melakukan Pemasangan Jedela</span>
            </li>
            <li class="sliderImage">
                <a style="outline:none;"><img class="slider" src="Gambar/3.jpg" alt="3" style="border:0;" /></a>
                <span class="bottom"><strong>Pekerjaan Pemasangan Pagar</strong><br />FJM TEKNIK Sedang Melakukan Pemasangan Pagar</span>
            </li>
            <li class="sliderImage">
                <a style="outline:none;"><img class="slider" src="Gambar/4.jpg" alt="4" style="border:0;" /></a>
                <span class="bottom"><strong>Pekerjaan Renovasi Rumah</strong><br />FJM TEKNIK Sedang Melakukan Renovasi Rumah</span>
            </li>
            <li class="sliderImage">
                <a style="outline:none;"><img class="slider" src="Gambar/5.jpg" alt="5" style="border:0;" /></a>
                <span class="top"><strong>Pekerjaan Renovasi Rumah</strong><br />FJM TEKNIK Sedang Melakukan Renovasi Rumah Tingkat 2</span>
            </li>
            <div class="clear sliderImage"></div>
        </ul>
    </div>
<!-- // end slider -->
</div>
</div>
</div>
</td>
</tr>
</table>			
<div class="content fjm1 right">
<div class="layarkecil">
<img class="respon" src="Gambar/Logo.jpg">
</div>
<p>FJM Teknik. Kami yang bergerak dibidang Jasa Las, Pekerjaan Aluminium, & Renovasi/Bangun Baru. Yang mengerjakan diantaranya :</p>

<h2>PENGELASAN :</h2>
<li>Pagar</li>
<li>Kanopi</li>
<li>Relling Tangga</li>
<li>Tangga Putar</li>
<li>Tralis</li>
<li>Follding Gate</li>
<li>Pintu Ram Nyamuk</li>
<li>Pekerjaan Kontruksi DLL.</li>

<h2>ALUMINIUM :</h2>
<li>Kusen Pintu Aluminium</li>
<li>Jendela</li>
<li>Etalase</li>
<li>Partisi Gypsum,</li>
<li>Partisi Aluminum</li>
<li>Partisi Kaca</li>
<li>Kaca Sanblast DLL.</li>

<h2>RENOVASI ATAU BANGUN BARU :</h2>

<li>Pemasangan Plafon</li>
<li>Intalasi listrik</li>
<li>Pemasangan Plafon</li>
<li>Pemasangan Atap Baja Ringan</li>
<li>Pemasangan Keramik</li>
<li>Pengecetan DLL.</li>

<p>Serta Melayani request berbagi desain, dg biaya yg bisa dikondisikan sesuai dg budget Anda.

Adapun cara memesan jasa kami ialah :</p>
<h2>Tahap Pertama :</h2>
<li class="blue">Survei</li>

<p>Pada tahap ini perwakilan kami akan membantu
costumer untuk mengetahui berbagai informasi seperti
jenis bahan, jenis finishing, kisaran harga dan cara melakukan pengukuran sesuai dengan ruangan yang ada di lokasi. Dengan kata lain kami akan mengirim perwakilan ke rumah anda perwakilan kami akan mambawa katalog album yang bisa anda pilih semuai kebutuhan.</p>

<h2>Tahap Kedua :</h2>
<li class="blue">Desain</li>

<p>proses desain akan dilakukan setelah proses survei
lokasi dan pengukuran lokasi.
Pada tahap ini Anda masih bisa melakukan refisi atau penambahan detail lainnya</p>

<h2>Tahap Ketiga :</h2>
<li class="blue">Penawaran Harga</li>

<p>Jika desain sudah di setujui, maka selanjutnya akan
di ajukan penawaran harga sesuai dengan desain yang sudah deal</p>

<h2>Tahap kelima :</h2>
<li class="blue">Proses Produksi</li>

<p>Untuk proses produksi, dalam kondisi normal
membutuhkan waktu 7 hari kerja. Pada tahap ini konsumen diwajibkan membayar DP sebesar 50% untuk produksi barang dan pelunasan dapat dilakukan setelah pengiriman barang</p>

<h2>Tahap Terakhir :</h2>
<li class="blue">Penyetingan</li>

<p>Pada tahap terakhir kami akan melakukan pengiriman barang serta penyetingan letak sesuai kebutuhan.</p>

FJM Teknik Siap Melayani Anda

Pernahkah Anda memakai Jasa Teknik, Lalu Apakah Salah Satu Atau Bahkan Hampir Semua Hal Ini Pernah Anda Rasakan?

<li>Respon Lama Tidak Memberikan Informasi Progress,</li>

<li>Pesanan Harga Mahal</li>

<li>Tidak Transparan Terhadap Bahan Yang Digunakan</li>

<li>Susah Diajak Konsultasi</li>

<li>Pesanan Tidak Tepat Waktu</li>

<li>Tidak Memberikan Garansi Pekerjaan</li>

<p>80,5% konsumen kami pernah merasakan hal di atas. Kabar baiknya, kami hadir untuk mencoret keluhan-keluhan di atas. Bagi Anda yang baru mau atau akan menggunakan Jasa Teknik, tentu Anda tidak ingin mengalami hal tersebut.</p>

<p><b>6 Alasan Mengapa Anda Harus Menggunakan Jasa teknik di FJM Teknik?</b></p>
</div>
<div class="wadah">
<div id="kanan1">
<img  style="border-radius:80px;" class="forUp" src="Gambar/TRANSFARAN.jpg">
<h2>Transparan</h2>

1 . Seberapa kuat bahan yang dipakai?<br>

2 . Berapa ketebalannya?<br>

3 . Bahan yang dipakai kualitas 1 bukan?<br>

<p>Secara transparan kami beritahu Anda jenis bahan dan kekuatannya.</p>

<hr>
</div>
<br>
<div id="kiri1">
<img class="forUp" src="Gambar/Cepat.png">
<h2>Respon Cepat</h2>
<p>Kami sangat menghargai Anda, terutama waktu Anda. Oleh karena itu, kami berupaya semaksimal mungkin untuk tidak membuat Anda menunggu sehingga informasi segera Anda dapatkan.</p>
<hr>
</div>
<br>
<div id="kanan2">
<img class="forUp" src="Gambar/Proses.png">
<h2>Update Progress</h2>
1 . Apakah pesanan saya sudah dikerjakan?<br>

2 . Bagaimana progressnya?<br>

3 . Benar-benar dikerjakan atau tidak?<br>
<p>Pertanyaan tersebut tidak akan Anda jumpai jika Anda menggunakan jasa kami.</p>
<hr>
</div>
<br>
<div id="kiri2">
<img class="forUp" src="Gambar/Konsultasi.png">
<h2>Konsultasi</h2>
<p>Anda dapat melakukan konsultasi dengan kami mengenai jenis bahan maupun design yang Anda inginkan.</p>
<hr>
</div>
<div id="kanan1">
<img class="forUp" src="Gambar/Kompensasi.png">
<h2>Kompensasi</h2>
<p>Kami akan berikan kompensasi jika pesanan Anda terlambat dari waktu yang telah disepakati sebelumnya.</p>
</div>
<div id="kiri1">
<h2>HUBUNGI KAMI :</h2>
<p><b><i class="fa fa-phone fa-2x fa-fw"></i>Tlpn     : 081296006881</b></p>
<p><b><i class="fa fa-envelope-o fa-2x fa-fw"></i>Email    : ashari@fjmteknik.com</b></p>
<p><b><i class="fa fa-sitemap fa-2x fa-fw"></i>Alamat   : Jl. Kh. A. Junaedi No. 07 Setia Asih, Tarumajaya - Bekasi</b></p>
<p>Team yang professional, ahli di bidangnya masing – masing, dan tepat waktu di setiap proyek yg kami kerjakan</p>
</div>
<div id="down">
&copy; Copyright Fjm Teknik 2019
</div>
</body>
</html>