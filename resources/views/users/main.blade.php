<!DOCTYPE html>
<html lang="en">

@include('users.includes.head')
@include('users.includes.navbar')
<body>
<div class="welcome-area" id="welcome">
		<!-- Header Text Start -->
		<div class="header-text">
			<div class="container">
				<div class="row">
					<div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
						<h1>Selamat <em>Datang</em></h1>
						<p>Banyak dari kegagalan hidup adalah orang-orang yang tidak menyadari betapa dekatnya mereka dengan kesuksesan ketika mereka menyerah.</p>
						<a href="#home" class="main-button-slider">GET STARTED</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Text End -->	
	</div>
	

  <section class="section" id="home">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 50px over 0.6s after 0.4s">
					<div class="features-item">
						<div class="features-icon">
							<h2>01</h2>
							<img src="assets/images/icon-2.png" alt="">
							<h4>Ujian Tengah Semester</h4>
							<p>UTS adalah singkatan dari Ujian Tengah Semester, 
								yang diselenggarakan pada pertengahan semester di tiap 
								perguruan tinggi ataupun di tiap sekolah.</p>
							<button type="button" data-toggle="modal" data-target="#uts" class="main-button">
								Read More
							</button>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
					<div class="features-item">
						<div class="features-icon">
							<h2>02</h2>
							<img src="assets/images/icon-3.png" alt="">
							<h4>Ujian Akhir Semester</h4>
							<p>Ujian Akhir Semester adalah Ujian yang diselenggarakan 
								pada akhir semester setelah proses pembelajaran dan praktikum
								selesai di laksanakan.</p>
							<button type="button" data-toggle="modal" data-target="#uas" class="main-button">
								Read More
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<!-- Modal UTS -->
<div class="modal fade" id="uts" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deskripsi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  UTS adalah singkatan dari Ujian Tengah Semester, yang diselenggarakan pada pertengahan 
	  semester di tiap perguruan tinggi ataupun di tiap sekolah. Di bangku sekolah nilai UTS 
	  sangat penting bagi siswa karena nilai UTS berpengaruh terhadap nilai akhir siswa. <br>
	  Setiap sekolah memiliki komposisi penilaian yang berbeda untuk nilai UTS, yang pada 
	  akhirnya setelah dikalkulasi akan mendapatkan nilai akhir bagi siswa pada suatu mata pelajaran. <br><br>
	  <b>Persyaratan Siswa Mengikuti Ujian Tengah Semester :</b><br>
	  1. Terdaftar sebagai siswa aktif pada semester bersangkutan.<br>
	  2. Memenuhi syarat keuangan / lunas biaya sekolah.<br>
	  3. Tidak sedang terkena sanksi akademis/skorsing.<br><br>

	  <b>Tata Tertib Peserta Ujian Tengah Semester :</b><br>
	  1. Menggunakan pakaian sesuai hari, dan memakai sepatu.<br>
	  2. Hadir sesuai waktu ujian terjadwal.<br>
	  3. Menandatangani daftar hadir ujian. <br>
	  3. Peserta yang datang terlambat, TIDAK diberikan perpanjangan waktu.<br>
	  4. Segala sesuatu yang belum dimengerti selama ujian hanya diperbolehkan ditanyakan kepada pengawas.<br>
	  5. Menjaga ketertiban dan ketenangan pelaksanaan ujian berlangsung.<br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>	

<!-- Modal UAS -->
<div class="modal fade" id="uas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deskripsi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  Ujian Akhir Semester adalah Ujian yang diselenggarakan pada akhir semester setelah proses 
	  pembelajaran dan praktikum selesai di laksanakan.<br>
	  Ujian Akhir Semester ini merupakan bentuk evaluasi akhir mata pelajaran yang menekankan pada 
	  aspek kognitif untuk menentukan kelulusan siswa pada tiap mata pelajaran. UAS dilaksanakan di akhir 
	  semester setelah semua proses belajar mengajar selesai. <br><br>

	  <b>Persyaratan Siswa Mengikuti Ujian Akhir Semester :</b><br>
	  1. Terdaftar sebagai siswa aktif pada semester bersangkutan.<br>
	  2. Memenuhi syarat keuangan / lunas biaya sekolah.<br>
	  3. Tidak sedang terkena sanksi akademis/skorsing. <br>
	  4. Perserta UAS adalah mahasiswa yang jumlah kehadiran dalam perkuliahan sekurang-kurangnya 
	 	 80% atau maksimal 4 kali ketidakhadiran dari total pertemuan tatap muka<br><br>

	  <b>Tata Tertib Peserta Ujian Akhir Semester :</b><br>
	  1. Menggunakan pakaian sesuai hari, dan memakai sepatu.<br>
	  2. Hadir sesuai waktu ujian terjadwal.<br>
	  3. Menandatangani daftar hadir ujian. <br>
	  3. Peserta yang datang terlambat, TIDAK diberikan perpanjangan waktu.<br>
	  4. Segala sesuatu yang belum dimengerti selama ujian hanya diperbolehkan ditanyakan kepada pengawas.<br>
	  5. Menjaga ketertiban dan ketenangan pelaksanaan ujian berlangsung.<br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>	

  <!-- JQuery -->
	<script src="users/js/jquery-2.1.0.min.js"></script>

  <!-- Plugins -->
  <script src="users/js/owl-carousel.js"></script>
  <script src="users/js/scrollreveal.min.js"></script>

  <!-- Global Init -->
  <script src="users/js/custom.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


</body>
</html>