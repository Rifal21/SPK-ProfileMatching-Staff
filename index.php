<html>
<head>
	<title>Home | Profile Matching</title>
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

	<!-- Container -->
	<div class="container"><br><br>

		<h2>
			<b>Sistem Pendukung Keputusan Pemilihan Staff Pengajar</b>
	  	</h2>
  
		<p style="text-align: justify;">
		Penerimaan Staf pengajar di Yayasan AL-Fatihah melalui proses seleksiterlebih dahulu oleh pihak sekolah. Banyaknya pelamar membuat pihak sekolah kesulitan untuk menentukan staff pengajar yang bisa memenuhistandar dan kriteria yang dibutuhkan untuk memberikan ilmunya kepada siswa-siswinya nanti.Sistem yang ada saat ini di Yayasan AL-Fatihah masih secara manual sehingga kurang efektif dan efesien karena membutuhkan proses dan penentuan yang lama dalam penerimaan staff pengajar. Dan untuk mendapatkan staff pengajar yang berkualitas/bermutu.maka diperlukan suatu metode salah satunya adalah dengan metode Profile Matching. Dalam proses Profile Matching secara garis besar merupakan proses membandingkan antara kompetisi individu ke dalam kompetisi jabatan sehingga dapat diketahui perbedaanya (disebut juga gap), semakin kecil gap yang dihasilkan maka bobot nilainya semakin besar yang berarti memiliki peluang lebih besar untuk diterima. 
		</p>

		<p>
		Adapun tujuan dari penelitian penulis ini adalah : <br>
	1.	Untuk membangun sebuah Sistem Pendukung Keputusan dalamPenerimaan Staff Pengajar di Yayasan AL-Fatihah. <br>
	2.	Untuk menerapkan metode Profile Matching sebagai metode pada Sistem Pengambilan Keputusan Penerimaan Staff Pengajar di Yayasan AL-Fatihah.

		</p>

		<div class="row justify-content-center">
			<div class="col">
				<h4>Administrasi</h4>
				<ul class="list-unstyled">
						<li><b>Core factor (60%) :</b>
								<ul>
										<li>IPK</li>
										<li>Pengalaman Mengajar</li>
								</ul>
							</li>
							<li><b>Secondar factor (40%) :</b>
								<ul>
										<li>Pendidikan Terakhir</li>
										<li>Prestasi Yang Diunggulkan</li>
								</ul>
							</li>
				</ul>
			</div>
			<div class="col">
				<h4>Kemampuan</h4>
				<ul class="list-unstyled">
						<li><b>Core factor (65%) :</b>
								<ul>
										<li>Kemampuan Akademis</li>
										<li>Kemampuan Micro Teaching</li>
								</ul>
							</li>
							<li><b>Secondar factor (35%) :</b>
								<ul>
										<li>Kemampuan Berkomunikasi</li>
										<li>	Kemampuan Memotivasi</li>
								</ul>
							</li>
				</ul>
			</div>
			<div class="col">
				<h4>Sikap dan Perilaku</h4>
				<ul class="list-unstyled">
						<li><b>Core factor (60%) :</b>
								<ul>
										<li>Kepribadian</li>
										<li>Etika</li>
								</ul>
							</li>
							<li><b>Secondar factor (40%) :</b>
								<ul>
										<li>Wibawa</li>
										<li>Kerapihan Berpakaian</li>
								</ul>
							</li>
				</ul>
			</div>
		</div>


		<!-- GAP -->
  		<h4>Aspek Penilaian Kriteria</h4>
  		<table class="table table-hover">
  			<thead>
    			<tr>
			    	<th scope="col">#</th>
			      	<th scope="col">Aspek</th>
			      	<th scope="col">Kriteria</th>
			      	<th scope="col">Nilai Profile</th>
			    </tr>
			</thead>
			<tbody>
    			<tr>
		      		<th scope="row" rowspan="4">1</th>
		      		<td rowspan="4">Administrasi (45%)</td>
		      		<td>IPK</td>
		      		<td>4</td>
					</tr>
    			<tr>
		      		<td>Pengalaman Mengajar</td>
		      		<td>4</td>
					</tr>
    			<tr>
		      		<td>Pendidikan Terakhir</td>
		      		<td>3</td>
					</tr>
    			<tr>
		      		<td>Prestasi yang Diunggulkan</td>
		      		<td>3</td>
					</tr>
					<tr>
		      		<th scope="row" rowspan="4">2</th>
		      		<td rowspan="4">Kemampuan (25%)</td>
		      		<td>Kemampuan Akademis</td>
		      		<td>4</td>
					</tr>
					<tr>
		      		<td>Kemampuan Mikro Teaching</td>
		      		<td>4</td>
					</tr>
    			<tr>
		      		<td>Kemampuan Berkomunikasi</td>
		      		<td>3</td>
					</tr>
    			<tr>
		      		<td>Kemampuan Memotivasi</td>
		      		<td>3</td>
					</tr>
					<tr>
		      		<th scope="row" rowspan="4">2</th>
		      		<td rowspan="4">Sikap dan Perilaku (30%)</td>
		      		<td>Kepribadian</td>
		      		<td>4</td>
					</tr>
					<tr>
		      		<td>Etika</td>
		      		<td>4</td>
					</tr>
    			<tr>
		      		<td>Kewibawaan</td>
		      		<td>3</td>
					</tr>
    			<tr>
		      		<td>Kerapihan Berpakaian</td>
		      		<td>3</td>
					</tr>
			</tbody>
		</table><br><br>
		<!-- /GAP -->

		<!-- BOBOT -->
	  	<h4>Bobot</h4>
	  	<table class="table table-hover">
	  		<thead>
	    		<tr>
	      			<th scope="col">#</th>
	      			<th scope="col">Selisih</th>
	      			<th scope="col">Bobot Nilai</th>
	      			<th scope="col">Keterangan</th>
	    		</tr>
	  		</thead>
	  		<tbody>
			    <tr>
			      	<th scope="row">1</th>
			      	<td>0</td>
			      	<td>5</td>
			      	<td>Tidak ada selisih(kompetensi sesuai dengan yang dibutuhkan)</td>
			    </tr>
			    <tr>
			      	<th scope="row">2</th>
			      	<td>1</td>
			      	<td>4,5</td>
			      	<td>Kompetensi individu kelebihan 1 tingkat/level</td>
			    </tr>
			    <tr>
			      	<th scope="row">3</th>
			      	<td>-1</td>
			      	<td>4</td>
			      	<td>Kompetensi individu kekurangan 1 tingkat/level</td>
			    </tr>
			    <tr>
			      	<th scope="row">4</th>
			     	<td>2</td>
			      	<td>3,5</td>
			      	<td>Kompetensi individu kelebihan 2 tingkat/level</td>
			    </tr>
			    <tr>
			      	<th scope="row">5</th>
			      	<td>-2</td>
			      	<td>3</td>
			      	<td>Kompetensi individu kekurangan 2 tingkat/level</td>
			    </tr>
			    <tr>
			      	<th scope="row">6</th>
			      	<td>3</td>
			      	<td>2,5</td>
			      	<td>Kompetensi individu kelebihan 3 tingkat/level</td>
			    </tr>
			    <tr>
			      	<th scope="row">7</th>
			      	<td>-3</td>
			      	<td>2</td>
			      	<td>Kompetensi individu kekurangan 3 tingkat/level</td>
			    </tr>
			    <tr>
			      	<th scope="row">8</th>
			      	<td>4</td>
			      	<td>1,5</td>
			      	<td>Kompetensi individu kelebihan 4 tingkat/level</td>
			    </tr>
			    <tr>
			      	<th scope="row">9</th>
			      	<td>-4</td>
			      	<td>1</td>
			      	<td>Kompetensi individu kekurangan 4 tingkat/level</td>
			    </tr>
			</tbody>
		</table>
		<!-- /BOBOT -->

	</div>
  	<!-- /Container -->

</body>
</html>