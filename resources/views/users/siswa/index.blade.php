<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
	<title>Online Exam</title>
	<!-- CSS Files -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="assets/css/template.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="assets/css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="assets/css/style.css" />
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
							<li class="scroll-to-section"><a href="#" class="menu-item">Profil</a></li>
							<li class="scroll-to-section"><a href="#" class="menu-item">Kelas</a></li>
							<li class="scroll-to-section"><a href="#" class="menu-item">Nilai</a></li>
							<li class="scroll-to-section"><a href="#" class="menu-item">Logout</a></li>
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
                            <p class="text-lg ml-3">Profil Siswa</p>
                        </div>
                    </div>
					<div class="form">
						<div class="col-5 ml-2 mt-2">
							<label>NIS</label>
							<input type="number" class="form-control" placeholder="nis">
						</div>

						<div class="col-5 ml-2 mt-3">
							<label>Nama Siswa</label>
							<input type="nama" class="form-control" placeholder="nama siswa">
						</div>

						<div class="col-5 ml-2 mt-3">
							<label>Email</label>
							<input type="email" class="form-control" placeholder="email">
						</div>

						<div class="col-5 ml-2 mt-3">
							<label>Password</label>
							<input type="password" class="form-control" placeholder="password">
						</div>
					</div>

					<div class="footer-button">
						<button type="button" class="btn btn-success">Simpan</button>
					</div>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>