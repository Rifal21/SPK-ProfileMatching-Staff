<?php
    include "koneksi.php";
?>
<html>
<head>
    <title>Proses | Profile Matching</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="inputdata.php">Input Data</a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="proses.php">Record</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rangking.php">Ranking</a>
          </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
        </ul>
        </div>
    </nav>
    <!-- /Navbar -->

    <div class="container"><br><br>

    <!-- Hapus Record -->
    <form  role="form" method="post" action="inputdata.php" class="form-inline">
        <div class="form-group mb-2">
            <label class="sr-only"></label>
            <input type="text" readonly class="form-control-plaintext" value="Tambah Mahasiswa">
        </div>
        <button type="submit" name="submitdelete" class="btn btn-success">Tambah</button>
    </form>
    <!-- /Hapus Record -->

    <!-- Hapus Record -->
    <form  role="form" method="post" action="recorddelete.php" class="form-inline">
        <div class="form-group mb-2">
            <label class="sr-only"></label>
            <input type="text" readonly class="form-control-plaintext" value="Hapus Semua Record">
        </div>
        <button type="submit" name="submitdelete" class="btn btn-danger">Hapus</button>
    </form>
    <!-- /Hapus Record -->

    <?php
        session_start();
        if (isset($_POST['submitform'])) {

            if(isset($_SESSION['jumlahsiswa'])){

                $jumlah = $_SESSION['jumlahsiswa'];
                $nama = array();

                $nilaiipk = array();
                $textipk = array();
                $gapipk = array();
                $bobotipk = array();

                $nilaipenghasilan = array();
                $textpenghasilan = array();
                $gappenghasilan = array();
                $bobotpenghasilan = array();

                $nilaitanggungan = array();
                $texttanggungan = array();
                $gaptanggungan = array();
                $bobottanggungan = array();

                $nilaismt = array();
                $textsmt = array();
                $gapsmt = array();
                $bobotsmt = array();

                $nilaiakademik = array();
                $textakademik = array();
                $gapakademik = array();
                $bobotakademik= array();

                $nilaimikro = array();
                $textmikro = array();
                $gapmikro = array();
                $bobotmikro= array();

                $nilaikom = array();
                $textkom = array();
                $gapkom = array();
                $bobotkom= array();

                $nilaimotiv = array();
                $textmotiv = array();
                $gapmotiv = array();
                $bobotmotiv= array();

                $nilaipribadi = array();
                $textpribadi = array();
                $gappribadi = array();
                $bobotpribadi= array();

                $nilaietika = array();
                $textetika = array();
                $gapetika = array();
                $bobotetika= array();

                $nilaiwibawa = array();
                $textwibawa = array();
                $gapwibawa = array();
                $bobotwibawa= array();

                $nilairapih = array();
                $textrapih = array();
                $gaprapih = array();
                $bobotrapih= array();

                $ncfsiswa = array();
                $nsfsiswa = array();
                $hasilsiswa = array();
                $total=array();

                for($a=1;$a<=$jumlah;$a++) {

        	       $nama[$a] = $_POST['namasiswa'.$a];
                   $nilaiipk[$a] = $_POST['ipk'.$a];
                   $nilaipenghasilan[$a] = $_POST['penghasilan'.$a];
                   $nilaitanggungan[$a] = $_POST['tanggungan'.$a];
                   $nilaismt[$a] = $_POST['smt'.$a];

        	       $nama[$a] = $_POST['namasiswa'.$a];
                   $nilaiakademik[$a] = $_POST['akademik'.$a];
                   $nilaimikro[$a] = $_POST['mikro'.$a];
                   $nilaikom[$a] = $_POST['kom'.$a];
                   $nilaimotiv[$a] = $_POST['motiv'.$a];

        	       $nama[$a] = $_POST['namasiswa'.$a];
                   $nilaipribadi[$a] = $_POST['pribadi'.$a];
                   $nilaietika[$a] = $_POST['etika'.$a];
                   $nilaiwibawa[$a] = $_POST['wibawa'.$a];
                   $nilairapih[$a] = $_POST['rapih'.$a];

                   $sql = mysqli_query($koneksi,"INSERT INTO siswa (nama, ipk, penghasilan, tanggungan, semester, akademik , mikro,kom,motiv,pribadi,etika,wibawa,rapih) VALUES('$nama[$a]','$nilaiipk[$a]','$nilaipenghasilan[$a]','$nilaitanggungan[$a]','$nilaismt[$a]','$nilaiakademik[$a]','$nilaimikro[$a]','$nilaikom[$a]','$nilaimotiv[$a]','$nilaipribadi[$a]','$nilaietika[$a]','$nilaiwibawa[$a]','$nilairapih[$a]')") or die (mysqli_error($koneksi));

                }

                for($a=1;$a<=$jumlah;$a++) {

                    if ($nilaiipk[$a] == "1"){
                        $textipk[$a] = "1";
                    } elseif ($nilaiipk[$a] == "2") {
                        $textipk[$a] = "2";
                    } elseif ($nilaiipk[$a] == "3") {
                        $textipk[$a] = "3";
                    } else {
                        $textipk[$a] = "4";
                    }

                    if ($nilaipenghasilan[$a] == "4"){
                        $textpenghasilan[$a] = "4";
                    } elseif ($nilaipenghasilan[$a] == "3") {
                        $textpenghasilan[$a] = "3";
                    } elseif ($nilaipenghasilan[$a] == "2") {
                        $textpenghasilan[$a] = "2";
                    } else {
                        $textpenghasilan[$a] = "1";
                    }

                    if ($nilaitanggungan[$a] == "1"){
                        $texttanggungan[$a] = "1";
                    } elseif ($nilaitanggungan[$a] == "2") {
                        $texttanggungan[$a] = "2";
                    } elseif ($nilaitanggungan[$a] == "3") {
                        $texttanggungan[$a] = "3";
                    } else {
                        $texttanggungan[$a] = "4";
                    }

                    if ($nilaismt[$a] == "1"){
                        $textsmt[$a] = "1";
                    } elseif ($nilaismt[$a] == "2") {
                        $textsmt[$a] = "2";
                    } elseif ($nilaismt[$a] == "3") {
                        $textsmt[$a] = "3";
                    } else  {
                        $textsmt[$a] = "4";
                    } 

                    if ($nilaiakademik[$a] == "1"){
                        $textakademik[$a] = "1";
                    } elseif ($nilaiakademik[$a] == "2") {
                        $textakademik[$a] = "2";
                    } elseif ($nilaiakademik[$a] == "3") {
                        $textakademik[$a] = "3";
                    } else  {
                        $textakademik[$a] = "4";
                    } 

                    if ($nilaimikro[$a] == "1"){
                        $textmikro[$a] = "1";
                    } elseif ($nilaimikro[$a] == "2") {
                        $textmikro[$a] = "2";
                    } elseif ($nilaimikro[$a] == "3") {
                        $textmikro[$a] = "3";
                    } else  {
                        $textmikro[$a] = "4";
                    } 

                    if ($nilaikom[$a] == "1"){
                        $textkom[$a] = "1";
                    } elseif ($nilaikom[$a] == "2") {
                        $textkom[$a] = "2";
                    } elseif ($nilaikom[$a] == "3") {
                        $textkom[$a] = "3";
                    } else  {
                        $textkom[$a] = "4";
                    } 

                    if ($nilaimotiv[$a] == "1"){
                        $textmotiv[$a] = "1";
                    } elseif ($nilaimotiv[$a] == "2") {
                        $textmotiv[$a] = "2";
                    } elseif ($nilaimotiv[$a] == "3") {
                        $textmotiv[$a] = "3";
                    } else  {
                        $textmotiv[$a] = "4";
                    } 

                    if ($nilaipribadi[$a] == "1"){
                        $textpribadi[$a] = "1";
                    } elseif ($nilaipribadi[$a] == "2") {
                        $textpribadi[$a] = "2";
                    } elseif ($nilaipribadi[$a] == "3") {
                        $textpribadi[$a] = "3";
                    } else  {
                        $textpribadi[$a] = "4";
                    } 

                    if ($nilaietika[$a] == "1"){
                        $textetika[$a] = "1";
                    } elseif ($nilaietika[$a] == "2") {
                        $textetika[$a] = "2";
                    } elseif ($nilaietika[$a] == "3") {
                        $textetika[$a] = "3";
                    } else  {
                        $textetika[$a] = "4";
                    } 

                    if ($nilaiwibawa[$a] == "1"){
                        $textwibawa[$a] = "1";
                    } elseif ($nilaiwibawa[$a] == "2") {
                        $textwibawa[$a] = "2";
                    } elseif ($nilaiwibawa[$a] == "3") {
                        $textwibawa[$a] = "3";
                    } else  {
                        $textwibawa[$a] = "4";
                    } 

                    if ($nilairapih[$a] == "1"){
                        $textrapih[$a] = "1";
                    } elseif ($nilairapih[$a] == "2") {
                        $textrapih[$a] = "2";
                    } elseif ($nilairapih[$a] == "3") {
                        $textrapih[$a] = "3";
                    } else  {
                        $textrapih[$a] = "4";
                    } 

                    $sql = mysqli_query($koneksi,"INSERT INTO keterangansiswa (nama, ket_ipk, ket_penghasilan, ket_tanggungan, ket_smt, ket_akademik , ket_mikro, ket_kom, ket_motiv , ket_pribadi , ket_etika, ket_wibawa , ket_rapih) VALUES('$nama[$a]','$textipk[$a]','$textpenghasilan[$a]','$texttanggungan[$a]','$textsmt[$a]','$textakademik[$a]','$textmikro[$a]','$textkom[$a]','$textmotiv[$a]','$textpribadi[$a]','$textetika[$a]','$textwibawa[$a]','$textrapih[$a]')") or die (mysqli_error($koneksi));

                }

                for($a=1;$a<=$jumlah;$a++) {
                    
                    $nama[$a] = $_POST['namasiswa'.$a];
                    $gapipk[$a] = $nilaiipk[$a] - 4;
                    $gappenghasilan[$a] = $nilaipenghasilan[$a] - 4;
                    $gaptanggungan[$a] = $nilaitanggungan[$a] - 3;
                    $gapsmt[$a] = $nilaismt[$a] - 3;

                    $nama[$a] = $_POST['namasiswa'.$a];
                    $gapakademik[$a] = $nilaiakademik[$a] - 4;
                    $gapmikro[$a] = $nilaimikro[$a] - 4;
                    $gapkom[$a] = $nilaikom[$a] - 3;
                    $gapmotiv[$a] = $nilaimotiv[$a] - 3;

                    $nama[$a] = $_POST['namasiswa'.$a];
                    $gappribadi[$a] = $nilaipribadi[$a] - 4;
                    $gapetika[$a] = $nilaietika[$a] - 4;
                    $gapwibawa[$a] = $nilaiwibawa[$a] - 3;
                    $gaprapih[$a] = $nilaismt[$a] - 3;

                    

                    $sql = mysqli_query($koneksi,"INSERT INTO gapsiswa (nama, gapipk, gappenghasilan, gaptanggungan, gapsmt, gapakademik,gapmikro,gapkom,gapmotiv,gappribadi,gapetika,gapwibawa,gaprapih) VALUES('$nama[$a]','$gapipk[$a]','$gappenghasilan[$a]','$gaptanggungan[$a]','$gapsmt[$a]','$gapakademik[$a]','$gapmikro[$a]','$gapkom[$a]','$gapmotiv[$a]','$gappribadi[$a]','$gapetika[$a]',' $gapwibawa[$a]','$gaprapih[$a]')") or die (mysqli_error($koneksi));

                }

                for($a=1;$a<=$jumlah;$a++) {

                    if ($gapipk[$a] == "0"){
                        $bobotipk[$a] = "5";
                    } elseif ($gapipk[$a] == "1") {
                        $bobotipk[$a] = "4.5";
                    } elseif ($gapipk[$a] == "-1") {
                        $bobotipk[$a] = "4";
                    } elseif ($gapipk[$a] == "2") {
                        $bobotipk[$a] = "3.5";
                    } elseif ($gapipk[$a] == "-2") {
                        $bobotipk[$a] = "3";
                    } elseif ($gapipk[$a] == "3") {
                        $bobotipk[$a] = "2.5";
                    } elseif ($gapipk[$a] == "-3") {
                        $bobotipk[$a] = "2";
                    } elseif ($gapipk[$a] == "4") {
                        $bobotipk[$a] = "1.5";
                    } else {
                        $bobotipk[$a] = "1";
                    }

                    if ($gappenghasilan[$a] == "0"){
                        $bobotpenghasilan[$a] = "5";
                    } elseif ($gappenghasilan[$a] == "1") {
                        $bobotpenghasilan[$a] = "4.5";
                    } elseif ($gappenghasilan[$a] == "-1") {
                        $bobotpenghasilan[$a] = "4";
                    } elseif ($gappenghasilan[$a] == "2") {
                        $bobotpenghasilan[$a] = "3.5";
                    } elseif ($gappenghasilan[$a] == "-2") {
                        $bobotpenghasilan[$a] = "3";
                    } elseif ($gappenghasilan[$a] == "3") {
                        $bobotpenghasilan[$a] = "2.5";
                    } elseif ($gappenghasilan[$a] == "-3") {
                        $bobotpenghasilan[$a] = "2";
                    } elseif ($gappenghasilan[$a] == "4") {
                        $bobotpenghasilan[$a] = "1.5";
                    } else {
                        $bobotpenghasilan[$a] = "1";
                    }

                    if ($gaptanggungan[$a] == "0"){
                        $bobottanggungan[$a] = "5";
                    } elseif ($gaptanggungan[$a] == "1") {
                        $bobottanggungan[$a] = "4.5";
                    } elseif ($gaptanggungan[$a] == "-1") {
                        $bobottanggungan[$a] = "4";
                    } elseif ($gaptanggungan[$a] == "2") {
                        $bobottanggungan[$a] = "3.5";
                    } elseif ($gaptanggungan[$a] == "-2") {
                        $bobottanggungan[$a] = "3";
                    } elseif ($gaptanggungan[$a] == "3") {
                        $bobottanggungan[$a] = "2.5";
                    } elseif ($gaptanggungan[$a] == "-3") {
                        $bobottanggungan[$a] = "2";
                    } elseif ($gaptanggungank[$a] == "4") {
                        $bobottanggungan[$a] = "1.5";
                    } else {
                        $bobottanggungan[$a] = "1";
                    }

                    if ($gapsmt[$a] == "0"){
                        $bobotsmt[$a] = "5";
                    } elseif ($gapsmt[$a] == "1") {
                        $bobotsmt[$a] = "4.5";
                    } elseif ($gapsmt[$a] == "-1") {
                        $bobotsmt[$a] = "4";
                    } elseif ($gapsmt[$a] == "2") {
                        $bobotsmt[$a] = "3.5";
                    } elseif ($gapsmt[$a] == "-2") {
                        $bobotsmt[$a] = "3";
                    } elseif ($gapsmt[$a] == "3") {
                        $bobotipk[$a] = "2.5";
                    } elseif ($gapsmt[$a] == "-3") {
                        $bobotsmt[$a] = "2";
                    } elseif ($gapsmt[$a] == "4") {
                        $bobotsmt[$a] = "1.5";
                    } else {
                        $bobotsmt[$a] = "1";
                    }

                    if ($gapakademik[$a] == "0"){
                        $bobotakademik[$a] = "5";
                    } elseif ($gapakademik[$a] == "1") {
                        $bobotakademik[$a] = "4.5";
                    } elseif ($gapakademik[$a] == "-1") {
                        $bobotakademik[$a] = "4";
                    } elseif ($gapakademik[$a] == "2") {
                        $bobotakademik[$a] = "3.5";
                    } elseif ($gapakademik[$a] == "-2") {
                        $bobotakademik[$a] = "3";
                    } elseif ($gapakademik[$a] == "3") {
                        $bobotipk[$a] = "2.5";
                    } elseif ($gapakademik[$a] == "-3") {
                        $bobotakademik[$a] = "2";
                    } elseif ($gapakademik[$a] == "4") {
                        $bobotakademik[$a] = "1.5";
                    } else {
                        $bobotakademik[$a] = "1";
                    }

                    if ($gapmikro[$a] == "0"){
                        $bobotmikro[$a] = "5";
                    } elseif ($gapmikro[$a] == "1") {
                        $bobotmikro[$a] = "4.5";
                    } elseif ($gapmikro[$a] == "-1") {
                        $bobotmikro[$a] = "4";
                    } elseif ($gapmikro[$a] == "2") {
                        $bobotmikro[$a] = "3.5";
                    } elseif ($gapmikro[$a] == "-2") {
                        $bobotmikro[$a] = "3";
                    } elseif ($gapmikro[$a] == "3") {
                        $bobotipk[$a] = "2.5";
                    } elseif ($gapmikro[$a] == "-3") {
                        $bobotmikro[$a] = "2";
                    } elseif ($gapmikro[$a] == "4") {
                        $bobotmikro[$a] = "1.5";
                    } else {
                        $bobotmikro[$a] = "1";
                    }

                    if ($gapkom[$a] == "0"){
                        $bobotkom[$a] = "5";
                    } elseif ($gapkom[$a] == "1") {
                        $bobotkom[$a] = "4.5";
                    } elseif ($gapkom[$a] == "-1") {
                        $bobotkom[$a] = "4";
                    } elseif ($gapkom[$a] == "2") {
                        $bobotkom[$a] = "3.5";
                    } elseif ($gapkom[$a] == "-2") {
                        $bobotkom[$a] = "3";
                    } elseif ($gapkom[$a] == "3") {
                        $bobotipk[$a] = "2.5";
                    } elseif ($gapkom[$a] == "-3") {
                        $bobotkom[$a] = "2";
                    } elseif ($gapkom[$a] == "4") {
                        $bobotkom[$a] = "1.5";
                    } else {
                        $bobotkom[$a] = "1";
                    }

                    if ($gapmotiv[$a] == "0"){
                        $bobotmotiv[$a] = "5";
                    } elseif ($gapmotiv[$a] == "1") {
                        $bobotmotiv[$a] = "4.5";
                    } elseif ($gapmotiv[$a] == "-1") {
                        $bobotmotiv[$a] = "4";
                    } elseif ($gapmotiv[$a] == "2") {
                        $bobotmotiv[$a] = "3.5";
                    } elseif ($gapmotiv[$a] == "-2") {
                        $bobotmotiv[$a] = "3";
                    } elseif ($gapmotiv[$a] == "3") {
                        $bobotipk[$a] = "2.5";
                    } elseif ($gapmotiv[$a] == "-3") {
                        $bobotmotiv[$a] = "2";
                    } elseif ($gapmotiv[$a] == "4") {
                        $bobotmotiv[$a] = "1.5";
                    } else {
                        $bobotmotiv[$a] = "1";
                    }

                    if ($gappribadi[$a] == "0"){
                        $bobotpribadi[$a] = "5";
                    } elseif ($gappribadi[$a] == "1") {
                        $bobotpribadi[$a] = "4.5";
                    } elseif ($gappribadi[$a] == "-1") {
                        $bobotpribadi[$a] = "4";
                    } elseif ($gappribadi[$a] == "2") {
                        $bobotpribadi[$a] = "3.5";
                    } elseif ($gappribadi[$a] == "-2") {
                        $bobotpribadi[$a] = "3";
                    } elseif ($gappribadi[$a] == "3") {
                        $bobotipk[$a] = "2.5";
                    } elseif ($gappribadi[$a] == "-3") {
                        $bobotpribadi[$a] = "2";
                    } elseif ($gappribadi[$a] == "4") {
                        $bobotpribadi[$a] = "1.5";
                    } else {
                        $bobotpribadi[$a] = "1";
                    }
                    
                    if ($gapetika[$a] == "0"){
                        $bobotetika[$a] = "5";
                    } elseif ($gapetika[$a] == "1") {
                        $bobotetika[$a] = "4.5";
                    } elseif ($gapetika[$a] == "-1") {
                        $bobotetika[$a] = "4";
                    } elseif ($gapetika[$a] == "2") {
                        $bobotetika[$a] = "3.5";
                    } elseif ($gapetika[$a] == "-2") {
                        $bobotetika[$a] = "3";
                    } elseif ($gapetika[$a] == "3") {
                        $bobotipk[$a] = "2.5";
                    } elseif ($gapetika[$a] == "-3") {
                        $bobotetika[$a] = "2";
                    } elseif ($gapetika[$a] == "4") {
                        $bobotetika[$a] = "1.5";
                    } else {
                        $bobotetika[$a] = "1";
                    }

                    if ($gapwibawa[$a] == "0"){
                        $bobotwibawa[$a] = "5";
                    } elseif ($gapwibawa[$a] == "1") {
                        $bobotwibawa[$a] = "4.5";
                    } elseif ($gapwibawa[$a] == "-1") {
                        $bobotwibawa[$a] = "4";
                    } elseif ($gapwibawa[$a] == "2") {
                        $bobotwibawa[$a] = "3.5";
                    } elseif ($gapwibawa[$a] == "-2") {
                        $bobotwibawa[$a] = "3";
                    } elseif ($gapwibawa[$a] == "3") {
                        $bobotipk[$a] = "2.5";
                    } elseif ($gapwibawa[$a] == "-3") {
                        $bobotwibawa[$a] = "2";
                    } elseif ($gapwibawa[$a] == "4") {
                        $bobotwibawa[$a] = "1.5";
                    } else {
                        $bobotwibawa[$a] = "1";
                    }

                    if ($gaprapih[$a] == "0"){
                        $bobotrapih[$a] = "5";
                    } elseif ($gaprapih[$a] == "1") {
                        $bobotrapih[$a] = "4.5";
                    } elseif ($gaprapih[$a] == "-1") {
                        $bobotrapih[$a] = "4";
                    } elseif ($gaprapih[$a] == "2") {
                        $bobotrapih[$a] = "3.5";
                    } elseif ($gaprapih[$a] == "-2") {
                        $bobotrapih[$a] = "3";
                    } elseif ($gaprapih[$a] == "3") {
                        $bobotipk[$a] = "2.5";
                    } elseif ($gaprapih[$a] == "-3") {
                        $bobotrapih[$a] = "2";
                    } elseif ($gaprapih[$a] == "4") {
                        $bobotrapih[$a] = "1.5";
                    } else {
                        $bobotrapih[$a] = "1";
                    }

                    $ncfasiswa[$a] = (($bobotipk[$a]) + ($bobotpenghasilan[$a]))/2;
                    $ncfksiswa[$a] = (($bobotakademik[$a]) + ($bobotmikro[$a]))/2;
                    $ncfssiswa[$a] = (($bobotpribadi[$a])+ ($bobotetika[$a]))/2;
                    $nsfasiswa[$a] = (($bobottanggungan[$a]) + ($bobotsmt[$a]))/2;
                    $nsfksiswa[$a] = (($bobotkom[$a]) + ($bobotmotiv[$a]))/2;
                    $nsfssiswa[$a] = (($bobotwibawa[$a]) + ($bobotrapih[$a]))/2;
                    $hasilasiswa[$a] = (0.60 * $ncfasiswa[$a]) + (0.40 * $nsfasiswa[$a]);
                    $hasilksiswa[$a] = (0.65 * $ncfksiswa[$a]) + (0.35 * $nsfksiswa[$a]);
                    $hasilssiswa[$a] = (0.60 * $ncfssiswa[$a]) + (0.40 * $nsfssiswa[$a]);

                    $total[$a] = ((0.45 * $hasilasiswa[$a])) + ((0.25 *$hasilasiswa[$a])) + ((0.3 * $hasilasiswa[$a]));

                    $sql = mysqli_query($koneksi,"INSERT INTO hasilsiswa (nama, bobotipk, bobotpenghasilan, bobottanggungan, bobotsmt,bobotakademik,bobotmikro,bobotkom,bobotmotiv,bobotpribadi,bobotetika,bobotwibawa,bobotrapih, ncfa, nsfa, hasila,ncfk, nsfk, hasilk,ncfs, nsfs, hasils,total) VALUES('$nama[$a]','$bobotipk[$a]','$bobotpenghasilan[$a]','$bobottanggungan[$a]','$bobotsmt[$a]','$bobotakademik[$a]','$bobotmikro[$a]','$bobotkom[$a]','$bobotmotiv[$a]','$bobotpribadi[$a]','$bobotetika[$a]','$bobotwibawa[$a]','$bobotrapih[$a]','$ncfasiswa[$a]','$nsfasiswa[$a]','$hasilasiswa[$a]','$ncfksiswa[$a]','$nsfksiswa[$a]','$hasilksiswa[$a]','$ncfssiswa[$a]','$nsfssiswa[$a]','$hasilssiswa[$a]','$total[$a]')") or die (mysqli_error($koneksi));

                }
                
    ?>

    <!-- TUTUP -->
    <?php
            }
        }
    ?>
    <!-- /TUTUP -->
    <br><br>
    <!-- Table -->
    <table class="table">
        <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">IPK</th>
              <th scope="col">Pengalaman Mengajar</th>
              <th scope="col">Pendidikan Terakhir</th>
              <th scope="col">Prestasi Yang Diunggulkan</th>
              <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $query1 = mysqli_query($koneksi,"SELECT * FROM keterangansiswa");
                if(mysqli_num_rows($query1)>0){ 
            ?>
            <?php
                $a = 1;
                while($data = mysqli_fetch_array($query1)){
            ?>
            <tr>
                <th scope="row"><?php echo $a; ?></th>
                <td><?php echo $data["nama"];?></td>
                <td><?php echo $data["ket_ipk"];?></td>
                <td><?php echo $data["ket_penghasilan"];?></td>
                <td><?php echo $data["ket_tanggungan"];?></td>
                <td><?php echo $data["ket_smt"];?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-warning" onclick="window.location.href='delete.php?id=<?php echo $data['nama']; ?>'">Hapus</button>
                    </div>
                </td>
            </tr>
            <?php $a++; } ?>
            <?php } ?>
            </tbody>
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Kemampuan Akademis</th>
                <th scope="col">Kemampuan Micro Teaching</th>
                <th scope="col">Kemampuan Berkomunikasi</th>
                <th scope="col">Kemampuan Memotivasi</th>
            </tr>
            </thead>
            <tbody>
            <?php 
                $query1 = mysqli_query($koneksi,"SELECT * FROM keterangansiswa");
                if(mysqli_num_rows($query1)>0){ 
            ?>
            <?php
                $a = 1;
                while($data = mysqli_fetch_array($query1)){
            ?>
                <th scope="row"><?php echo $a; ?></th>
                <td><?php echo $data["nama"];?></td>
                <td><?php echo $data["ket_akademik"];?></td>
                <td><?php echo $data["ket_mikro"];?></td>
                <td><?php echo $data["ket_kom"];?></td>
                <td><?php echo $data["ket_motiv"];?></td>
            </tr>
            <?php $a++; } ?>
            <?php } ?>
            </tbody>
            <thead class="thead-dark">              
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kepribadian</th>
                    <th scope="col">Etika</th>
                    <th scope="col">Kewibawaan</th>
                    <th scope="col">Kerapihan Berpakaian</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $query1 = mysqli_query($koneksi,"SELECT * FROM keterangansiswa");
                if(mysqli_num_rows($query1)>0){ 
            ?>
            <?php
                $a = 1;
                while($data = mysqli_fetch_array($query1)){
            ?>
            <tr>
                <th scope="row"><?php echo $a; ?></th>
                <td><?php echo $data["nama"];?></td>
                <td><?php echo $data["ket_pribadi"];?></td>
                <td><?php echo $data["ket_etika"];?></td>
                <td><?php echo $data["ket_wibawa"];?></td>
                <td><?php echo $data["ket_rapih"];?></td>
            </tr>
            <?php $a++; } ?>
            <?php } ?>
            </tbody>
    </table>
    <!-- /Tabel -->


    <br><br>


    <!-- Table -->
    <form  role="form" method="post" action="hasil.php" class="form-inline">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">IPK</th>
                    <th scope="col">Pengalaman Mengajar</th>
                    <th scope="col">Pendidikan Terakhir</th>
                    <th scope="col">Prestasi Yang Diunggulkan</th>

                </tr>
            </thead>
            <tbody>
                <?php 
                    $query = mysqli_query($koneksi,"SELECT * FROM siswa");
                    if(mysqli_num_rows($query)>0){ 
                ?>
                <?php
                    $a = 1;
                    while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                  <th scope="row"><?php echo $a; ?></th>
                  <td><?php echo $data["nama"];?></td>
                  <td><?php echo $data["ipk"];?></td>
                  <td><?php echo $data["penghasilan"];?></td>
                  <td><?php echo $data["tanggungan"];?></td>
                  <td><?php echo $data["semester"];?></td>

                </tr>
                <?php $a++; } ?>
                <?php } ?>
            </tbody>
            <thead class="thead-dark">
                <tr>
                  <th scope="col">GAP</th>
                  <th scope="col"></th>
                  <th scope="col">4</th>
                  <th scope="col">4</th>
                  <th scope="col">3</th>
                  <th scope="col">3</th>
                </tr>
            </thead>
            <thead><tr><td></td></tr></thead>
            <thead class="thead-dark">
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kemampuan Akademis</th>
                    <th scope="col">Kemampuan Micro Teaching</th>
                    <th scope="col">Kemampuan Berkomunikasi</th>
                    <th scope="col">Kemampuan Memotivasi</th>
            </thead>
            <tbody>
                <?php 
                    $query = mysqli_query($koneksi,"SELECT * FROM siswa");
                    if(mysqli_num_rows($query)>0){ 
                ?>
                <?php
                    $a = 1;
                    while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <th scope="row"><?php echo $a; ?></th>
                    <td><?php echo $data["nama"];?></td>
                    <td><?php echo $data["akademik"];?></td>
                    <td><?php echo $data["mikro"];?></td>
                    <td><?php echo $data["kom"];?></td>
                    <td><?php echo $data["motiv"];?></td>
                </tr>
                <?php $a++; } ?>
                <?php } ?>
            </tbody>
            <thead class="thead-dark">
                    <th scope="col">GAP</th>
                    <th scope="col"></th>
                    <th scope="col">4</th>
                    <th scope="col">4</th>
                    <th scope="col">3</th>
                    <th scope="col">3</th>
            </thead>
            <thead><tr><td></td></tr></thead>
            <thead class="thead-dark">
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kepribadian</th>
                    <th scope="col">Etika</th>
                    <th scope="col">Kewibawaan</th>
                    <th scope="col">Kerapihan Berpakaian</th>
            </thead>
            <tbody>
                <?php 
                    $query = mysqli_query($koneksi,"SELECT * FROM siswa");
                    if(mysqli_num_rows($query)>0){ 
                ?>
                <?php
                    $a = 1;
                    while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <th scope="row"><?php echo $a; ?></th>
                    <td><?php echo $data["nama"];?></td>
                    <td><?php echo $data["pribadi"];?></td>
                    <td><?php echo $data["etika"];?></td>
                    <td><?php echo $data["wibawa"];?></td>
                    <td><?php echo $data["rapih"];?></td>
                </tr>
                <?php $a++; } ?>
                <?php } ?>
            </tbody>
            <thead class="thead-dark">
                    <th scope="col">GAP</th>
                    <th scope="col"></th>
                    <th scope="col">4</th>
                    <th scope="col">4</th>
                    <th scope="col">3</th>
                    <th scope="col">3</th>
            </thead>
        </table>
        <button type="submit" name="hitunggap" class="btn btn-primary mb-2">Hitung</button>
    </form>
    <!-- /Tabel -->

    </div>

</body>
</html>