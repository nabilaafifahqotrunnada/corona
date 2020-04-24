<!DOCTYPE html>
<html lang="en">
<?php
include "koneksi.php";
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Java Emergency Hospital</title>

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
                        <a class="nav-link" href="info.php">INFO
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="user.php">USER
                        </a>
                    </li>
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
                    <img src="jawa.png" alt="Buku" style="padding-top: 10vh" />
                    <br><br>
                    <h3> Emergency Hospital Jawa </h3>
                </div> 
                <div class="col-md-7 col-sm-12  text-white">
                <br><br><br><br>
                    <p><button class="btn btn-light px-5 py-2 primary-btn" onclick="location.href='#a';">
                    DKI Jakarta
                    </button>
                    <button class="btn btn-light px-5 py-2 primary-btn" onclick="location.href='#b';">
                    Banten
                    </button></p><br><br>
                    <p><button class="btn btn-light px-5 py-2 primary-btn" onclick="location.href='#c';">
                    Jawa Barat
                    </button>
                    <button class="btn btn-light px-5 py-2 primary-btn" onclick="location.href='#d';">
                    Jawa Tengah
                    </button></p><br><br>
                    <p><button class="btn btn-light px-5 py-2 primary-btn" onclick="location.href='#e';">
                    DI Yogyakarta
                    </button>
                    <button class="btn btn-light px-5 py-2 primary-btn" onclick="location.href='#f';">
                    Jawa Timur
                    </button></p><br>
        </div>
    </header>
    <main class = "main">
        <section class="section-1" id="a">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-4 col-8">
                        <div class="panel text-left">
                            <h1>DKI JAKARTA</h1>
                            <p class="pt-4">
                            <b>RSPI Sulianti Saroso, Sunter, Jakarta Utara.</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">(021) 6506559</span>
                            </p>
                            <p>
                            <b>RSPAD Gatot Soebroto, Jakarta Pusat.</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">(021) 3440693</span>
                            </p>
                            <p>
                            <b>Rumah Sakit Umum Daerah (RSUD) Tarakan, Cideng, Gambir, Jakarta Pusat.</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">(021) 3503003</span>
                            </p>
                            <p>
                            <b>RSAL Mintoharjo, Bendungan Hilir, Jakarta Pusat.</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">(021) 5703081</span>
                            </p>
                            <p>
                            <b>RSUD Cengkareng, Cengkareng, Jakarta Barat.</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">(021) 54372874</span>
                            </p>
                            <p>
                            <b>Rumah Sakit Pelni, Slipi, Jakarta Barat.</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">(021) 5306901</span>
                            </p>
                            <p>
                            <b>RSUD Pasar Minggu, Jakarta Selatan.</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">(021) 29059999</span>
                            </p>
                            <p>
                            <b>RSUP Fatmawati, Jakarta Selatan.</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">(021) 7501524</span>
                            </p>
                            <p>
                            <b>RS Umum Bhayangkara Tk 1 R Said Sukanto (RS Polri), Jakarta Timur.</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">(021) 8093288</span>
                            </p>
                            <p>
                            <b>Rumah Sakit Khusus Daerah (RSKD) Duren Sawit, Jakarta Timur.</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">(021) 86552365</span>
                            </p>
                            <p>
                            <b>RSUP Persahabatan, Jakarta Timur.</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">(021) 4891708</span>
                            </p>
                            <p>
                            <b>Sumber: http://bit.ly/coronaJakarta, http://bit.ly/apdetJakarta</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-1" id="b">
            <div class="container text-center">
                <div class="row">
                <div class="col-md-6 col-12">
                        <div class="pray">
                            <img src="blank.png" alt="Pepustakaan" class="" />
                        </div>
                    </div>
                    <div class="col-md-4 col-8">
                        <div class="panel text-right">
                            <h1>BANTEN</h1>
                            <p class="pt-4">
                            <b>RSU Kabupaten Tangerang, Kota Tangerang.</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">(021) 5523507</span><br>
                            </p>
                            <p>
                            <b>RS Siloam, Kelapa Dua, Tangerang.</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">(021) 80524900</span>
                            </p>
                            <p>
                            <b>RSUD Dr Drajat Prawiranegara, Kota Serang.</b>
                            </p>
                            <p>
                            <b>Sumber: http://bit.ly/apdetJabar</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-1" id="c">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-4 col-8">
                        <div class="panel text-left">
                            <h1>JAWA BARAT</h1>
                            <p class="pt-4">
                            <b>RSUP Dr Hasan Sadikin, Kota Bandung.</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">(022) 203495355</span>
                            </p>
                            <p>
                            <b>RS Paru Dr H A Rotinsulu, Kota Bandung..</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">(022) 3034446</span>
                            </p><p>
                            <b>RS Mitra Keluarga Pratama Jatiasih, Jatimekar, Kota Bekasi.</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">(021) 85511000</span>
                            </p><p>
                            <b>RS Paru Dr M Goenawan Partowidigdo, Cisarua, Bogor.</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">(0251) 8253630</span>
                            </p><p>
                            <b>RS Hermina, Karawang Timur, Karawang.</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">(0262) 232720</span>
                            </p><p>
                            <b>RSUD Dr Slamet Garut.</b>
                            </p><p>
                            <b>RSUD R Syamsudin SH, Kota Sukabumi</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">(0266) 225180, 225181</span>
                            </p><p>
                            <b>RSUD Kabupaten Indramayu.</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">(0234) 272655</span>
                            </p>
                            <p>
                            <b>RSD Gunung Jati Kota Cirebon</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">(0231) 206330</span>
                            </p>
                            <p>
                            <b>RS TK II 03.05.01 Dustira, Kota Cimahi.</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">(022) 6652207</span>
                            </p>
                            <p>Dinas Kesehatan Jawa Barat telah membuka sambungan telepon (hotline) di nomor <span class= "span" style= "background-color: black;">08112093306</span> bagi masyarakat Jawa Barat yang membutuhkan informasi mengenai virus corona.</p>
                            <p>
                            <b>Sumber: http://bit.ly/coronaJabar, http://bit.ly/apdetJabar</b>
                            </p>
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
                            <img src="blank.png" alt="Pepustakaan" class="" />
                        </div>
                    </div>
                    <div class="col-md-4 col-8">
                        <div class="panel text-right">
                            <h1>JAWA TENGAH</h1>
                            <p class="pt-4">
                            <b><span class= "span" style= "background-color: gray;">Eks Karesidenan Semarang</span><br>
(Kota Semarang, Kabupaten Semarang, Kota Salatiga, Kabupaten Kendal, Kabupaten Demak, Kabupaten Grobogan)</b><br><br>
<b>RSUP dr Kariadi, Semarang.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(024) 8413476</span></b><br>
<b>RSUD KRMT Wongsonegoro, Kota Semarang.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(024) 6711500</span></b><br>
<b>RSUD Tugurejo, Semarang.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(024) 7605297</span></b><br>
<b>RSU Sultan Agung, Semarang.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(024) 6580019</span></b><br>
<b>RSU St Elizabeth, Semarang.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(024) 8310035</span></b><br>
<b>RSU Telogorejo, Semarang.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(024) 86466000</span></b><br>
<b>RSU Columbia Asia, Semarang.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(024) 7629999</span></b><br>
<b>RSU Tk III Bhakti Wira Tamtama, Kota Semarang.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(024) 3555944</span></b><br>
<b>RSU Bhayangkara, Semarang.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(024) 6720675</span></b><br>
<b>RSUD Salatiga.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0298) 324074</span></b><br>
<b>RS Paru Dr Ario Wirawan, Salatiga.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0298) 326130</span></b><br>
<b>RSU Tk IV 04.07.03 dr Asmir, Salatiga.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0298) 326045</span></b><br>
<b>RSUD Dr H Soewondo, Kendal.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0294) 381433</span></b><br>
<b>RSUD Ambarawa.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0298) 591020</span></b><br>
<b>RSUD Sunan Kalijaga, Demak.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0291) 685018</span></b><br>
<b>RSUD dr R Soedjati, Grobogan.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0292) 421004</span></b><br><br><br><br>
<b><span class= "span" style= "background-color: gray;">Eks Karesidenan Kedu</span><br>
(Kabupaten Purworejo, Kabupaten Temanggung, Kabupaten Wonosobo, Kabupaten Magelang, Kota Magelang, Kabupaten Kebumen)</b><br><br>
<b>RSUD Tidar Kota, Magelang.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0293) 362260</span></b><br>
<b>RSU Tk II dr Seodjono, Magelang.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0293) 363061</span></b><br>
<b>RSUD Muntilan, Kabupaten Magelang.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0293) 587004</span></b><br>
<b>RSUD Setjonegoro, Wonosobo.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0286) 321091</span></b><br>
<b>RSUD dr Soedirman, Kabupaten Kebumen.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0287) 381101</span></b><br>
<b>RSUD Djojonegoro, Temanggung.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0293) 491119</span></b><br>
<b>RSUD Dr Tjitrowardojo, Purworejo.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0275) 321118</span><br><br><br><br>
<b><span class= "span" style= "background-color: gray;">Eks Karesidenan Pati</span><br>
(Kabupaten Pati, Kabupaten Kudus, Kabupaten Jepara, Kabupaten Blora, Kabupaten Rembang)</b><br><br>
<b>RSUD Dr Loekmonohadi, Kudus.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0291) 431831</span></b><br>
<b>RSU Mardi Rahayu, Kudus.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0291) 438234</span></b><br>
<b>RSUD RAA Soewondo, Pati.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0295) 381102</span></b><br>
<b>RSUD RA Kartini, Jepara.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0291) 591175</span></b><br>
<b>RSUD dr R Soetrasno, Rembang.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0295) 691444</span></b><br>
<b>RSUD dr R Soetijono, Blora.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0296) 531118</span><br><br><br><br>
<b><span class= "span" style= "background-color: gray;">Eks Karesidenan Pekalongan</span><br>
(Kabupaten Pekalongan, Kota Pekalongan, Kabupaten Batang, Kabupaten Tegal, Kota Tegal, Kabupaten Brebes, Kabupaten Pemalang)</b><br><br>
<b>RSUD Kraton Kabupaten, Pekalongan.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0285) 421621</span></b><br>
<b>RSUD Bendan, Kota Pekalongan.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0285) 437222</span></b><br>
<b>RSUD Kajen, Kabupaten Pekalongan.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0285) 385231</span></b><br>
<b>RSUD Batang.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0285) 4493034</span></b><br>
<b>RSUD Dr H RM Soeselo, Slawi, Kabupaten Tegal.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0283) 491016</span></b><br>
<b>RSUD Kardinah, Tegal.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0283) 350377</span></b><br>
<b>RSU Islam Harapan Anda, Kota Tegal.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0283) 358244</span></b><br>
<b>RSUD Dr M Ashari, Pemalang.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0284) 321614</span></b><br>
<b>RSUD Brebes.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0283) 671431</span><br><br><br><br>
<b><span class= "span" style= "background-color: gray;">Eks Karesidenan Banyumas</span><br>
(Kabupaten Banyumas, Kabupaten Banjarnegara, Kabupaten Cilacap, Kabupaten Purbalingga)/<b><br><br>
<b>RSUD Banyumas.</b><br> 
Telepon: <span class= "span" style= "background-color: black;">(0281) 796182</span></b><br>
<b>RSUD Prof Dr Margono Soekarjo, Purwokerto. </b><br>
Telepon: <span class= "span" style= "background-color: black;">(0281) 632708</span></b><br>
<b>RSU Tk III Wijayakusuma, Purwokerto.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0281) 633062</span></b><br>
<b>RSUD Cilacap</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0282) 533010</span></b><br>
<b>RSUD Hj Anna Lasmanah, Banjarnegara.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0286) 591464</span></b><br>
<b>RSUD dr R Goeteng Taroenadibrata, Purbalingga.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0281) 891016</span><br><br><br><br>
<b><span class= "span" style= "background-color: gray;">Eks Karesidenan Surakarta</span><br>
(Kabupaten Klaten, Kabupaten Boyolali, Kabupaten Wonogiri, Kabupaten Sukoharjo, Kabupaten Sragen, Kota Surakarta, Kabupaten Karanganyar)</b><br><br>
<b>RSUD Dr Moewardi, Solo.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0271) 634634</span></b><br>
<b>RSUD Kota Surakarta.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0271) 715300</span></b><br>
<b>RS Kasih Ibu, Surakarta.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0271) 714422</span></b><br>
<b>RS dr Oen, Surakarta.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0271) 643139</span></b><br>
<b>RSU Tk IV Slamet Riyadi, Surakarta.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0271) 714656</span></b><br>
<b>RSU PKU Muhammadiyah, Surakarta.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0271) 714578</span></b><br>
<b>RSUD Ir Soekarno, Sukoharjo.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0271) 593118</span></b><br>
<b>RSUD Pandan Arang, Boyolali.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0276) 321065</span></b><br>
<b>RSUD Soehadi Prijonegoro, Sragen.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0271) 891068</span></b><br>
<b>RSUD Karanganyar.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0271) 495673</span></b><br>
<b>RSUD Dr Soediran MS, Wonogiri.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0273) 321008</span></b><br>
<b>RSUP dr Soeradji Tirtonegoro, Klaten.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0272) 321041</span></b><br>
<b>RSU Islam, Klaten.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0272) 322252</span></b><br>
<b>RSUD Bagas Waras, Klaten.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0272) 3359666</span></b><br><br>
                            <p>
                            <b>Sumber: http://bit.ly/CoronaJateng</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-1" id="e">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-4 col-8">
                        <div class="panel text-left">
                            <h1>DI YOGYAKARTA</h1>
                            <p class="pt-4">
                            <b>RSUP dr Sardjito, Sleman.</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">(0274) 631190, 587333</span>
                            </p>
                            <p>
                            <b>RSUD Panembahan Senopati, Bantul.</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">(0274) 367381, 367386</span>
                            </p>
                            <p>
                            <b>RSUD Kota Yogyakarta.</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">(0274) 371195, 386691</span>
                            </p>
                            <p>
                            <b>RSUD Wates.</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">(0274) 773169</span>
                            </p>
                            <p>Tersedia layanan kontak darurat di nomor <span class= "span" style= "background-color: black;">08112764800</span> untuk warga Daerah Istimewa Yogyakarta yang membutuhkan informasi terkait wabah virus corona.</p>
                            <p>
                            <b>Sumber: http://bit.ly/coronaYogyakarta</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-1" id="f">
            <div class="container text-center">
                <div class="row">
                <div class="col-md-6 col-12">
                        <div class="pray">
                            <img src="blank.png" alt="Pepustakaan" class="" />
                        </div>
                    </div>
                    <div class="col-md-4 col-8">
                        <div class="panel text-right">
                            <h1>JAWA TIMUR</h1>
                            <p class="pt-4">
                            <b><b><span class= "span" style= "background-color: gray;">Eks Karesidenan Madiun</span><br>
(Madiun, Ngawi, Magetan, Ponorogo, Pacitan)</b><br><br>
<b>RSUD dr. Soedono Kabupaten Madiun</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0351) 464325, 464326, 454567</span></b><br>
<b>RSUD Soeroto Ngawi Kabupaten Ngawi</b><br>
<b>RSUD dr Harjono S Kabupaten Ponorogo</b><br><br><br>   
<b><span class= "span" style= "background-color: gray;">Eks Karesidenan Kediri</span><br> 
(Kediri, Tulungagung, Blitar, Trenggalek, Nganjuk)</b><br><br>
<b>RSUD Mardi Waluyo Kabupaten Blitar</b><br>
<b>RSUD Kabupaten Kediri</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0354) 391718</span></b><br>
<b>RSUD Gambiran Kota Kediri</b><br>
<b>RSM Ahmad Dahlan Kota Kediri</b><br>
<b>RSUD Nganjuk Kabupaten Nganjuk</b><br>
<b>RSUD Soedomo Kabupaten Trenggalek</b><br>
<b>RSUD dr Iskak Tulungagung Kabupaten Tulungagung</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0355) 322609</span></b><br><br><br>
<b><span class= "span" style= "background-color: gray;">Eks Karesidenan Bojonegoro</span><br>
(Kabupaten Bojonegoro, Kabupaten Lamongan, Kabupaten Tuban)</b><br><br>
<b>RSUD dr R Sosodoro Djatikoesomo Kabupaten Bojonegoro</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0353) 3412133</span></b><br>
<b>RSUD dr Soegiri Lamongan Kabupaten Lamongan</b><br>
<b>RSU Muhammadiyah Lamongan Kabupaten. Lamongan</b><br>
<b>RSUD dr R Koesma Tuban Kabupaten Tuban</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0356) 321010, 325696, 323266</span></b><br><br><br>
<b><span class= "span" style= "background-color: gray;">Eks Karesidenan Surabaya</span><br>
(Kabupaten Sidoarjo, Mojokerto, Lamongan, Gresik, Jombang, Kota Surabaya, Mojokerto)</b><br><br>
<b>RSUD dr. Soetomo Kota Surabaya</b><br>
Telepon: <span class= "span" style= "background-color: black;">(031) 5501001</span> IGD: <span class= "span" style= "background-color: black;">(031) 5501239</span></b><br>
<b>RSU Katholik Surabaya Kota Surabaya</b><br>
<b>RSU Adi Husada Undaan Kota Surabaya</b><br>
<b>RSU PHC Surabaya Kota Surabaya</b><br>
<b>RSUD Bhakti Dharma Husada Kota Surabaya</b><br>
<b>RSI Surabaya Jemursari Kota Surabaya</b><br>
<b>RSU Siloam Hospital Surabaya Kota Surabaya</b><br>
<b>RSU Haji Surabaya Kota Surabaya</b><br>
<b>RSU Premier Surabaya Kota Surabaya</b><br>
<b>RSU Husada Utama Surabaya Kota Surabaya</b><br>
<b>RSU Bhayangkara Tk. II HS. Samsoeri Mertojoso Kota Surabaya</b><br>
<b>RSU Manyar Medical Center Kota Surabaya</b><br>
<b>RS Universitas Airlangga Kampus C Universitas Airlangga, Mulyorejo, Surabaya.</b><br>
Telepon: <span class= "span" style= "background-color: black;">(031) 5916290, 5916287, 58208280</span></b><br>
<b>RSU National Hospital Kota Surabaya</b><br>
<b>RSU Royal Surabaya Kota Surabaya</b><br>
<b>RS Brawijaya Kota Surabaya</b><br>
<b>Rumkital Ramelan Kota Surabaya</b><br>
<b>RS Menur Kota Surabaya</b><br>
<b>RSUD Ibnu Sina Kabupaten Gresik</b><br>
<b>RSUD Kabupaten Jombang</b><br>
<b>RSUD Prof Dr Soekandar Kabupaten Mojokerto</b><br>
<b>RSUD Sidoarjo Kabupaten Sidoarjo</b><br>
Telepon: <span class= "span" style= "background-color: black;">(031) 8961649</span></b><br>
<b>RSI Siti Hajar Sidoarjo Kabupaten Sidoarjo</b><br>
<b>RSU Mitra Keluarga Waru Kabupaten Sidoarjo</b><br>
<b>RSU Siti Khodijah Kabupaten Sidoarjo</b><br>
<b>RS Anwar Medika Kabupaten Sidoarjo</b><br><br><br>
<b><span class= "span" style= "background-color: gray;">Eks Karesidenan Malang</span><br> 
(Kabupaten Malang, Kabupaten Pasuruan, Kota Malang, Kota Pasuruan, Kabupaten Probolinggo, Kota Probolinggo, dan Kota Batu, Kabupaten Lumajang)</b><br><br>
<b>RSU Wava Husada Malang Kabupaten Malang</b><br>
<b>RSUD Kanjuruhan Kepanjen Kabupaten Malang</b><br>
<b>RS Prima Husada Kabupaten Malang</b><br>
<b>RS Tk.II dr. Soepraoen Kota Malang</b><br>
<b>RSU Panti Waluya Sawahan Kota Malang</b><br>
<b>RSU Lavalette Malang Kota Malang</b><br>
<b>RSUD dr. Saiful Anwar Kota Malang</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0341) 362101</span></b><br>
<b>RSUD Karsa Husada Kota Batu</b><br>
<b>RSUD dr Haryoto Kabupaten Lumajang</b><br>
<b>RS Djatiroto Lumajang Kabupaten Lumajang</b><br>
<b>RSUD Bangil Kabupaten Pasuruan</b><br>
<b>RSUD Moh Saleh Probolinggo Kota Probolinggo</b><br>
<b>RS Waluyo Djati Kabupaten Probolinggo</b><br><br><br>
<b><span class= "span" style= "background-color: gray;">Eks Karesidenan Madura</span><br>
(Kabupaten Bangkalan, Kabupaten Pamekasan, Kabupaten Sampang, Kabupaten Sumenep)</b><br><br>
<b>RSUD Syarifah Ambami Rato Ebo Kabupaten Bangkalan</b><br>
<b>RSUD dr H Slamet Martodirdjo Pamekasan Kabupaten Pamekasan</b><br><br><br>
<b><span class= "span" style= "background-color: gray;">Eks Karesidenan Besuki</span><br>
(Kabupaten Banyuwangi, Kabupaten Bondowoso, Kabupaten Jember, Kabupaten Situbondo)</b><br><br>
<b>RSUD Blambangan Kabupaten Banyuwangi</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0333) 421118, 421071</span></b><br>
<b>RSUD dr H Koesnadi Bondowoso Kabupaten Bondowoso</b><br>
<b>RSUD dr. Soebandi Kabupaten Jember</b><br>
Telepon: <span class= "span" style= "background-color: black;">(0331) 487441</span></b><br>
<b>RS Baladhika Husada KabupatenJember</b><br>
<b>RS Bina Sehat Jember Kabupaten Jember</b><br>
<b>RS Citra Husada Kabupaten Jember</b><br>
<b>RS Paru Jember Kabupaten Jember</b><br><br>
                            <p>Pemprov Jatim membuka posko penanganan wabah corona. <br>Posko ini buka 24 jam, berlokasi di Gedung Negara Grahadi yang ada di Jl Gubernur Suryo, Surabaya. <br>Selain itu, tersedia pula layanan
<b>call center</b> yang dapat dihubungi melalui nomor: <span class= "span" style= "background-color: black;">1500117, 081334367800, 08124922279.</span>
                            <br><br><b>Sumber: http://bit.ly/coronaJatim</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <main>
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