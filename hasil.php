<?php
    include "koneksi.php";
?>
<html>
<head>
    <title>Hasil | Profile Matching</title>
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


    <!-- Table -->
    <form  role="form" method="post" class="form-inline">
        <table class="table">
            <thead class="thead-dark"><tr><th class="text-center" scope="row" colspan="6">Administrasi</th></tr></thead>
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
            <tbody>
                <?php 
                    $query = mysqli_query($koneksi,"SELECT * FROM gapsiswa");
                    if(mysqli_num_rows($query)>0){ 
                ?>
                <?php
                    $a = 1;
                    while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                  <th scope="row"><?php echo $a; ?></th>
                  <td><?php echo $data["nama"];?></td>
                  <td><?php echo $data["gapipk"];?></td>
                  <td><?php echo $data["gappenghasilan"];?></td>
                  <td><?php echo $data["gaptanggungan"];?></td>
                  <td><?php echo $data["gapsmt"];?></td>
                </tr>
                <?php $a++; } ?>
                <?php } ?>
            </tbody>
            <thead><tr><td></td></tr></thead>
            <thead class="table-warning"><tr><th class="text-center" scope="row" colspan="6">Kemampuan</th></tr></thead>
            <thead class="table-warning">
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
            <thead class="table-warning">
                <tr>
                  <th scope="col">GAP</th>
                  <th scope="col"></th>
                  <th scope="col">4</th>
                  <th scope="col">4</th>
                  <th scope="col">3</th>
                  <th scope="col">3</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $query = mysqli_query($koneksi,"SELECT * FROM gapsiswa");
                    if(mysqli_num_rows($query)>0){ 
                ?>
                <?php
                    $a = 1;
                    while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <th scope="row"><?php echo $a; ?></th>
                    <td><?php echo $data["nama"];?></td>
                    <td><?php echo $data["gapakademik"];?></td>
                    <td><?php echo $data["gapmikro"];?></td>
                    <td><?php echo $data["gapkom"];?></td>
                    <td><?php echo $data["gapmotiv"];?></td>
                </tr>
                <?php $a++; } ?>
                <?php } ?>
            </tbody>
            <thead><tr><td></td></tr></thead>
            <thead class="table-success"><tr><th class="text-center" scope="row" colspan="6">Sikap dan Perilaku</th></tr></thead>
            <thead class="table-success">
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
            <thead class="table-success">
                <tr>
                  <th scope="col">GAP</th>
                  <th scope="col"></th>
                  <th scope="col">4</th>
                  <th scope="col">4</th>
                  <th scope="col">3</th>
                  <th scope="col">3</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $query = mysqli_query($koneksi,"SELECT * FROM gapsiswa");
                    if(mysqli_num_rows($query)>0){ 
                ?>
                <?php
                    $a = 1;
                    while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <th scope="row"><?php echo $a; ?></th>
                    <td><?php echo $data["nama"];?></td>
                    <td><?php echo $data["gappribadi"];?></td>
                    <td><?php echo $data["gapetika"];?></td>
                    <td><?php echo $data["gapwibawa"];?></td>
                    <td><?php echo $data["gaprapih"];?></td>
                </tr>
                <?php $a++; } ?>
                <?php } ?>
            </tbody>
        </table>
    </form>
    <!-- /Tabel -->

    <!-- Tabel -->
    <table class="table">
        <thead class="thead-dark"><tr><th class="text-center" scope="row" colspan="9">Administrasi</th></tr></thead>
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Bobot IPK</th>
                    <th scope="col">Bobot Pengalaman Mengajar</th>
                    <th scope="col">Bobot Pendidikan Terakhir</th>
                    <th scope="col">Bobot Prestasi Yang Diunggulkan</th>
                    <th scope="col">NCF (60%)</th>
                    <th scope="col">NSF (40%)</th>
                    <th scope="col">Hasil Total Aspek</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $query = mysqli_query($koneksi,"SELECT * FROM hasilsiswa");
                    if(mysqli_num_rows($query)>0){ 
                ?>
                <?php
                    $a = 1;
                    while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <th scope="row"><?php echo $a; ?></th>
                    <td><?php echo $data["nama"];?></td>
                    <td><?php echo $data["bobotipk"];?></td>
                    <td><?php echo $data["bobotpenghasilan"];?></td>
                    <td><?php echo $data["bobottanggungan"];?></td>
                    <td><?php echo $data["bobotsmt"];?></td>
                    <td><?php echo $data["ncfa"];?></td>
                    <td><?php echo $data["nsfa"];?></td>
                    <td><?php echo $data["hasila"];?></td>
                </tr>
                <?php $a++; } ?>
                <?php } ?>
            </tbody>
        <thead class="thead-dark"><tr><th class="text-center" scope="row" colspan="9">Kemampuan</th></tr></thead>
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Bobot Kemampuan Akademis</th>
                    <th scope="col">Bobot Kemampuan Micro Teaching</th>
                    <th scope="col">Bobot Kemampuan Berkomunikasi</th>
                    <th scope="col">Bobot Kemampuan Memotivasi</th>
                    <th scope="col">NCF (65%)</th>
                    <th scope="col">NSF (35%)</th>
                    <th scope="col">Hasil Total Aspek</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $query = mysqli_query($koneksi,"SELECT * FROM hasilsiswa");
                    if(mysqli_num_rows($query)>0){ 
                ?>
                <?php
                    $a = 1;
                    while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <th scope="row"><?php echo $a; ?></th>
                    <td><?php echo $data["nama"];?></td>
                    <td><?php echo $data["bobotakademik"];?></td>
                    <td><?php echo $data["bobotmikro"];?></td>
                    <td><?php echo $data["bobotkom"];?></td>
                    <td><?php echo $data["bobotmotiv"];?></td>
                    <td><?php echo $data["ncfk"];?></td>
                    <td><?php echo $data["nsfk"];?></td>
                    <td><?php echo $data["hasilk"];?></td>
                </tr>
                <?php $a++; } ?>
                <?php } ?>
            </tbody>
        <thead class="thead-dark"><tr><th class="text-center" scope="row" colspan="9">Sikap dan Perilaku</th></tr></thead>
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Bobot Kepribadian</th>
                    <th scope="col">Bobot Etika</th>
                    <th scope="col">Bobot Kewibawaan</th>
                    <th scope="col">Bobot Kerapihan Berpakaian</th>
                    <th scope="col">NCF (60%)</th>
                    <th scope="col">NSF (40%)</th>
                    <th scope="col">Hasil Total Aspek</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $query = mysqli_query($koneksi,"SELECT * FROM hasilsiswa");
                    if(mysqli_num_rows($query)>0){ 
                ?>
                <?php
                    $a = 1;
                    while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <th scope="row"><?php echo $a; ?></th>
                    <td><?php echo $data["nama"];?></td>
                    <td><?php echo $data["bobotpribadi"];?></td>
                    <td><?php echo $data["bobotetika"];?></td>
                    <td><?php echo $data["bobotwibawa"];?></td>
                    <td><?php echo $data["bobotrapih"];?></td>
                    <td><?php echo $data["ncfs"];?></td>
                    <td><?php echo $data["nsfs"];?></td>
                    <td><?php echo $data["hasils"];?></td>
                </tr>
                <?php $a++; } ?>
                <?php } ?>
            </tbody>
    </table>
    <!-- /Tabel -->

    <br><br>

    <!-- Hapus Record -->
    <form  role="form" method="post" action="rangking.php" class="form-inline">
        <div class="form-group mb-2">
            <label class="sr-only"></label>
            <input type="text" readonly class="form-control-plaintext" value="Perankingan">
        </div>
        <button type="submit" name="submitranking" class="btn btn-info">Ranking!</button>
    </form>
    <!-- /Hapus Record -->

    </div>

</body>
</html>