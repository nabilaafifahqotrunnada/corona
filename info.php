<!DOCTYPE html>
<html lang="en">
<?php
include "koneksi.php";
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Covid-19 Information</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <header>
        <div class="container-fluid p-2">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">
                <svg class="bi bi-shield-shaded" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M5.443 1.991a60.17 60.17 0 00-2.725.802.454.454 0 00-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 008 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 002.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 00-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 012.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 01-2.418 2.3 6.942 6.942 0 01-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 01-1.007-.586 11.192 11.192 0 01-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 012.415 1.84a61.11 61.11 0 012.772-.815z" clip-rule="evenodd"/>
  <path d="M8 2.25c.909 0 3.188.685 4.254 1.022a.94.94 0 01.656.773c.814 6.424-4.13 9.452-4.91 9.452V2.25z"/>
</svg> Self Quick Test #dirumahaja </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-right text-light"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="user.php">USER
                        </a>
                    </li>
                        <li class="nav-item">
                            <button class="btn btn-light px-5 py-2 primary-btn" onclick="location.href='logout.php';">LOGOUT</button>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container text-center">
            <div class="row">
                <div class="col-md-5 col-sm-12 h-25">
                    <img src="info.png" alt="Buku" style="padding-top: 15vh">
                </div>
                <br><br><br><br><br><br>
                <div class="col-md-7 col-sm-12  text-white">
                <br><br><br><br><br>
                    <h1>INFORMATION</h1>
                    <p>
                        Quick Guide for The Covid-19
                    </p><br>
                    <button class="btn btn-light px-5 py-2 primary-btn" onclick="location.href='#a';">
                        Apa yang bisa anda lakukan?
                    </button><br><br>
                    <button class="btn btn-light px-5 py-2 primary-btn" onclick="location.href='#b';">
                        Hal yang perlu anda ketahui !
                    </button><br><br>
                    <button class="btn btn-light px-5 py-2 primary-btn" onclick="location.href='#c';">
                        Materi seputar Covid-19
                    </button><br><br>
                    <button class="btn btn-light px-5 py-2 primary-btn" onclick="location.href='#d';">
                        Question and Answer
                    </button>
            </div>
        </div>
    </div>
    </header>
    <main class = "main">
        <section class="section-1" id="a">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="pray">
                            <img src="l.png" class="" />
                        </div>
                    </div>
                    <div class="col-md-4 col-8">
                        <div class="panel text-left">
                            <h1>Apa yang bisa Anda lakukan?</h1>
                            <p class="pt-4">
                            1. <b>Ketahui informasi yang benar</b> dan jangan terperangkap dalam hoaks dan informasi yang menyesatkan.</p>
                            <p class="pt-4">2. <b>Tetap di rumah dan pahami cara mengurangi risiko COVID-19</b> dan hal yang perlu dilakukan jika orang tersayangi terkena COVID-19.</p>
                            <p class="pt-4">3. <b>Dukung komunitas Anda. Sebarkan informasi atau link penting</b> melalui Facebook, Instagram, Twitter dan Whatsapp.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-1" id="b">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-4 col-8">
                        <div class="panel text-left">
                            <h1>Dilarang Berdekatan dan Dilarang Berkumpul</h1>
                            <p class="pt-4" style="text-align: left;">1. Warga harus lakukan semua kegiatan di rumah.
                            <br>2. Acara besar harus ditunda atau dibatalkan.
                            <br>3. Belanja kebutuhan dikurangi frekuensinya.
                            <br>4. Jangan bersalaman. 
                            <br>5. Cuci tangan dengan sabun dan air mengalir.
                            <br>5. Bila terpaksa ke kantor, jaga jarak batasi kontak.
                            <br>6. Tutupi bersin/ batuk dengan siku terlipat.
                            <br>7. Pastikan anak mengikuti belajar di rumah.
                            <br>8. Muncul gejala corona telepon hotline 119.
                            </p>
                        </div>
                    </div>
                     <div class="col-md-6 col-12">
                        <div class="pray">
                            <img src="i.jpeg" class="" />
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="pray">
                        <br><br><br>
                            <img src="rapid.png" class="" />
                        </div>
                    </div>
                    <div class="col-md-4 col-8">
                        <div class="panel text-left">
                        <br><br><br>
                            <h1>RAPID TEST</h1>
                            <p class="pt-4" style="text-align: left;"><b>Rapid Test hanya untuk orang yang pernah berkontak erat dengan orang sakit COVID-19 
                            atau pernah berada di wilayah dengan penularan lokal, memiliki gejala seperti demam atau gangguan sistem pernapasan.</b><br>
                            <br><b>OTG (Orang Tanpa Gejala) –</b> mereka yang tidak menunjukkan gejala tetapi pernah melakukan kontak erat dengan orang positif COVID-19.
                            <br><b>ODP (Orang Dalam Pemantauan) –</b> Orang dengan / riwayat demam (≥38 C), pilek/ sakit tenggorokan/ batuk dalam 14 hari terakhir sebelum timbul gejala pernah berada di wilayah dengan penularan lokal atau melakukan kontak erat dengan orang sakit COVID -19.
                            <br><b>PDP (Pasien Dalam Pengawasan)  –</b> Orang dengan atau riwayat Infeksi Saluran Pernapasan Akut (ISPA) berat, dan demam (≥38 C) dalam 14 hari terakhir sebelum timbul gejala pernah berkontak erat dengan orang sakit COVID -19.
                            </p>
                        </div>
                    </div>
                    </section>
                    <section class="section-2 container-fluid p-0" id="c" style="background-color: #f7be16;">
            <div class="cover">
                <div class="overlay"></div>
                <div class="content text-center">
                    <h1>COVID-19</h1>
                    <p>
                        Must Know
                    </p>
                </div>
            </div>
            <div class="container-fluid text-center">
                <br>
                <br>
                <br>
                <div class="numbers d-flex flex-md-row flex-wrap justify-content-center">
                            <div class="rect"style="background-color: white; border: black solid 20px;">
                                <div class="row">
                                    <div class="col-sm">
                                        <img src="a.png" alt="" width="500px" height="600px" style="margin: 50px;">
                                        <img src="ab.jpg" alt="" width="500px" height="600px"style="margin: 50px;">
                                        <br>
                                        <img src="ac.jpeg" alt="" width="500px" height="600px"style="margin: 50px;">
                                        <img src="ad.jpg" alt="" width="500px" height="600px"style="margin: 50px;">
                                        <br>
                                        <img src="ae.png" alt="" width="500px" height="600px"style="margin: 50px;">
                                        <img src="af.png" alt="" width="500px" height="600px"style="margin: 50px;">
                                        </div>
                                </div>
                            </div>
                    </div>
                </div>
        </section>
        <section class="section-1" id="d">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="pray">
                            <img src="q.png" class="" />
                        </div>
                    </div>
                    <div class="col-md-4 col-8">
                        <div class="panel text-left">
                        <br><br><br>
                            <h1 style="font-size: 60pt;">TOP 10 QUESTION</h1>
                        </div>
                        
                    </div><p class="pt-4 text-left">
                            1. <b>Adakah obat khusus untuk mencegah atau mengobati virus corona ? </b>
                            <br>Sampai saat ini, belum ada obat khusus yang disarankan untuk mencegah atau mengobati penyakit yang disebabkan virus corona baru (COVID-19). Mereka yang terinfeksi virus harus menerima perawatan yang tepat untuk meredakan dan mengobati gejala, 
                            dan mereka yang sakit serius harus dibawa ke rumah sakit. Sebagian besar pasien sembuh karena perawatan untuk gejala yang dialami.
                                Beberapa perawatan spesifik saat ini tengah diteliti, dan akan melalui uji klinis. WHO membantu mempercepat upaya penelitian dan 
                                pengembangan dengan sejumlah mitra.</p>
                            <br>
                            <p class="pt-4 text-left">
                            2. <b>Apa saja tindakan pencegahan yang bisa dilakukan ? </b><br> 
                                - Sering suci tangan pakai sabun dan air mengalir<br>
                                - Hindari menyentuh muka<br>
                                - Jauhi orang yang menunjukkan gejala (demam, batuk kering, kelelahan)<br>
                                - Bila Anda mengalami demam, rasa lelah dan batuk kering, segera cari pengobatan<br>
                                - Anda dapat menguatkan sistem kekebalan diri dengan melakukan perilaku sehat, seperti olah raga teratur, 
                                makan makanan bergizi seimbang, tidak merokok dan memastikan Anda dan anak Anda mendapat imunisasi lengkap.</p>
                                <br>
                            <p class="pt-4 text-left">
                            3. <b>Apa saja tanda atau gejala infeksi virus corona ? </b><br>
                            Bila seseorang terinfeksi virus, dia akan menunjukkan gejala dalam 1-14 hari sejak terpapar virus. Gejala umumnya adalah<br>
                                - demam<br>
                                - rasa lelah<br>
                                - batuk kering<br>
                                Sebagian besar orang hanya akan mengalami gejala ringan, namun di kasus-kasus yang tertentu, infeksi dapat menyebabkan pnemonia dan kesulitan bernapas. Pada sebagian kecil kasus, infeksi virus corona bisa berakibat fatal. Orang lanjut usia (lansia) 
                                dan orang-orang dengan masalah kesehatan seperti tekanan darah tinggi, gangguan jantung atau diabetes kemungkinan mengalami sakit lebih serius.</p>
                                <br>
                            <p class="pt-4 text-left">
                            4. <b>Apa yang harus saya lakukan bila anggota keluarga menunjukkan gejala ?</b><br> 
                            Segera cari pertolongan kesehatan bila Anda atau anak mengalami demam, 
                            batuk dan kesulitan bernapas. Telepon sarana kesehatan terlebih dahulu untuk 
                            memberi tahu jika Anda telah melakukan perjalanan ke wilayah di mana dilaporkan 
                            ada kasus virus corona (COVID-19) atau bila Anda pernah bertemu dengan seseorang
                             yang telah melakukan perjalanan ke wilayah itu dan menunjukkan gejala-gejalanya.</p>
                                <br>
                            <p class="pt-4 text-left">
                            5. <b>Apa ada hal yang tidak boleh saya lakukan ? </b><br>
                            Tindakan-tindakan berikut TIDAK efektif melawan COVID-19 dan bahkan bisa berbahaya:<br>
                                - Merokok<br>
                                - Mengenakan lebih dari satu masker<br>
                                - Meminum antibiotik<br>
                                Apa pun keadaannya, jika Anda mengalami demam, batuk dan kesulitan bernapas, 
                                segeralah mencari pertolongan medis untuk mengurangi risiko terkena infeksi 
                                yang lebih parah dan sampaikan riwayat perjalanan Anda baru-baru ini kepada 
                                tenaga kesehatan.</p>
                                <br>
                            <p class="pt-4 text-left">
                            6. <b>Apakah antibiotik efektif mencegah dan mengobati virus corona baru ?</b><br> 
                            Tidak, antibiotik tidak bekerja melawan virus, hanya bakteri. 
                            Virus corona baru adalah virus dan oleh karena itu, antibiotik tidak boleh 
                            digunakan untuk pencegahan ataupun pengobatan. 
                            Antibiotik hanya digunakan sesuai arahan dokter untuk mengobati infeksi bakteri.</p>
                                <br>
                            <p class="pt-4 text-left">
                            7. <b>Apakah manusia dapat terinfeksi Covid-19 dari hewan ?</b><br> 
                            Coronavirus adalah kelompok virus yang biasanya terdapat pada binatang. Terkadang, orang terinfeksi virus-virus ini, yang kemudian menyebar ke orang lain, seperti SARS-CoV dan MERS-CoV. SARS-CoV dikaitkan dengan musang, sedangkan MERS-CoV ditularkan oleh unta. Hewan penular COVID-19 belum bisa dipastikan sampai saat ini.
                            <br>Untuk melindungi diri, misalnya saat mengunjungi pasar hewan hidup, hindari kontak langsung dengan hewan hidup dan permukaan yang bersentuhan dengan hewan. Pastikan kebersihan makanan selalu dijaga. Berhati-hatilah ketika memegang daging, susu atau organ hewan mentah untuk menghindari kontaminasi dengan makanan mentah dan hindari konsumsi produk-produk hewan yang mentah atau tidak matang sempurna.</p>
                                <br>
                            <p class="pt-4 text-left">
                            8. <b>Apa paket kiriman dari wilayah yang ada kasus Covid-19 aman untuk diterima ?</b><br> 
                            Ya. Kecil kemungkinan barang komersial terkontaminasi dari orang yang terinfeksi dan kecil juga risiko tertular virus corona baru dari paket yang sudah berpindah, berada dalam perjalanan, dan terpapar kondisi serta suhu yang berbeda-beda.</p>
                                <br>
                            <p class="pt-4 text-left">
                            9. <b>Apakah penyemprotan cairan desinfektan dapat melindungi saya dari virus corona ?</b><br> 
                            Cairan disinfektan bisa membersihkan virus pada permukaan benda-benda dan BUKAN pada tubuh atau baju dan TIDAK AKAN melindungi Anda dari virus jika berkontak erat dengan orang sakit.

<br>Virus berpindah melalui percikan batuk/bersin orang sakit yang kemudian terhirup orang lain atau menempel di permukaan benda yang kemudian disentuh lalu masuk melalui mata, hidung atau mulut orang lain. Cairan disinfektan dapat membersihkan virus yang menempel di permukaan benda seperti meja, gagang pintu atau saklar lampu yang kerap disentuh orang.

<br>Membersihkan permukaan benda-benda itu sangat penting bila Anda melakukan isolasi diri di rumah dan untuk menggunakan cairan disinfektan, pastikan Anda sudah membaca petunjuk di label produk. Pemakaian cairan disinfektan secara langsung ke tubuh dapat membahayakan diri Anda.</p>
                                <br>
                            <p class="pt-4 text-left">
                            10. <b>Apakah virus corona baru mempengaruhi orang yang lebih tua, atau apakah orang muda juga rentan ?</b><br> 
                            Orang-orang dari segala lapisan usia dapat terinfeksi virus corona baru. Orang yang lebih tua, dan orang-orang dengan masalah kesehatan (seperti tekanan darah tinggi, diabetes, penyakit jantung) akan lebih rentan untuk mengalami sakit parah.

<br>WHO menyarankan semua orang mengambil langkah-langkah untuk melindungi diri dari virus, misalnya dengan mencuci tangan pakai sabun dan air mengalir atau bila tidak tersedia, gunakan cairan pembersih berbahan alkohol (minimal 60%).</p>
    
                </div>
            </div>
        </section>    
    </main>
    <footer>
    <div class="container-fluid p-0">
            <div class="row text-left">
                <div class="col-md-5 col-sm-5">
                    <h4 class="text-light">COVID.19.GO.ID</h4>
                    <p class="pt-4 text-muted">HOTLINE <br> Whatsapp :
                        <span class = "span">081133399000</span><br> Telepon : <span class = "span">119</span>
                    </p>
                    <p class="pt-4 text-muted">WEBSITE</p>
                    <p class="text-muted">
                    <span class = "span">www.covid19.go.id</span><br><span class = "span">www.who.int/emergencies/diseases/novel-coronavirus-2019</span>
                    <br><span class = "span">infeksiemerging.kemkes.go.id</span>
                    </p>
                </div>
                <div class="col-md-5 col-sm-12">
                </div>
                <div class="col-md-2 col-sm-12">
                    <h4 class="text-light">Follow me</h4>
                    <div class="column text-light">
                        <a href="https://www.instagram.com/_nabilafifah/?hl=id"><i class="fab fa-instagram"></i></a>
                    </div><br><br><br>
                    <h4 class="text-light">SUMBER</h4>
                    <div class="column text-light">
                        <a>who.int</a><br>
                        <a>covid19.go.id</a>
                    </div>
                </div>
            </div>
        </div>
</footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./main.js"></script>
</body>
</html>