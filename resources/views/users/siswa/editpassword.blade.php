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
                            <p class="text-lg ml-3">Ubah Password</p>
                        </div>
                    </div>

                    <form action="/updatepassword" method="post">
                    @method('put')
                    @csrf
                    <div class="form">
						<div class="col-5 ml-2 mt-2">
							<label>Password Saat Ini</label>
							<input type="password" class="form-control @error('current_password') is-invalid @enderror" placeholder="Password Saat Ini" name="current_password">
                                @error('current_password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
						</div>

						<div class="col-5 ml-2 mt-3">
							<label>Password Baru</label>
							<input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password Baru" name="password">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
						</div>

						<div class="col-5 ml-2 mt-3">
							<label>Konfirmasi Password Baru</label>
							<input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Konfirmasi Password Baru" name="password_confirmation">
                                @error('password_confirmation')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
						</div>
					</div>
                    

					<div class="footer-button">
						<a href="/editpassword" ><button type="button" class="btn-danger">Batal</button></a>
						<a href="/editpassword" ><button type="submit" class="btn-success">Simpan</button></a>
					</div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>