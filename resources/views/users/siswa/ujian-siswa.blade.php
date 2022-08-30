<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
	<title>Online Exam</title>
	<!-- CSS Files -->
	<link rel="stylesheet" type="text/css" href="users/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="users/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="users/css/template.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="users/css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="users/css/style.css" />
	<script src="https://kit.fontawesome.com/1935d064dd.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="header-area header-sticky">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="main-nav">
						<!-- Logo -->
						<a href="index.html" class="logo">
							<b style="color: #FA0000;">Halaman</b> Siswa
						</a>
						<!-- End Logo -->
						<!-- Menu Start -->
						<ul class="nav">
							<li class="scroll-to-section"><a href="/halaman-siswa">Profil</a></li>
							<li class="scroll-to-section"><a href="/kelas-siswa">Kelas</a></li>
							<li class="scroll-to-section"><a href="/nilai-siswa">Nilai</a></li>
							<li class="scroll-to-section"><a href="/logoutsiswa">Logout</a></li>
						</ul>
						<a class="menu-trigger">
							<span>menu</span>
						</a>
						<!-- Menu End -->
					</nav>
				</div>
			</div>
		</div>
	</header>

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <p class="text-lg ml-3">Ujian Siswa</p>
                            <p class="text-lg ml-auto">{{auth('siswa')->user()->nama}}</p>
                        </div>
                    </div>
					<div class="col-md-10 border p-4">
						<div class="card-body-2">
							<h5 class="card-text float-right font-weight-bold">Ujian Tengah Semester</h5>
							<p id="count-down"></p>
							<p id="progress">Pertanyaan x dari y</p>
						</div>
						<hr>

						<div class="ujian-box">
							<div id="ujian">
								<div class="ujian-repeat">
									<a href="/soal-siswa">Mulai Ujian</a>
								</div>
							</div>
						</div>
						<!-- <button type="button" data-toggle="modal" data-target="#kode" class="main-button">
								Read More
							</button> -->
					</div>
                </div>
            </div>
        </div>
    </section>

	<!-- modal kode ujian -->
	

	<!-- <div class="modal fade" id="kode" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Masukkan Kode Ujian</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="col-7 ml-2 mt-3">
						<label>Kode Ujian</label>
						<input type="number" class="form-control" placeholder="kode soal">
					</div>
				</div>
				<div class="modal-footer">
					<a href="/soal-siswa"><button type="submit" class="btn btn-secondary" data-dismiss="modal">Kirim</button></a>
				</div>
			</div>
		</div>
	</div> -->

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