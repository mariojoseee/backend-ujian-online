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
							<p class="text-lg ml-3">Siswa</p>
							<p class="text-lg ml-auto">{{auth('siswa')->user()->nama}}</p>
						</div>
					</div> 

					<div class="col-lg-7">
						<div class="card border-0">
							<div class="card-header bg-danger text-center p-4">
								<h1 class="text-white m-0">Edit Profile Siswa</h1>
							</div>
							
							<div class="card-body rounded-bottom .bg-light p-5">
								<form action="/updateProfile" method="post">
                                @method('put')
                                @csrf
									<div class="form-group">
										<label>NIS</label>
										<input type="number" class="form-control" placeholder="nis" value="{{auth('siswa')->user()->nis}}" disabled>
									</div>

									<div class="form-group">
										<label>Nama Siswa</label>
										<input type="text" class="form-control  @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="nama siswa" value="{{auth('siswa')->user()->nama}}">
                                        @error('nama')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                            </div>
                                        @enderror
									</div>

									<div class="form-group">
										<label>Email</label>
										<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="email" value="{{auth('siswa')->user()->email}}">
                                        @error('email')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                            </div>
                                        @enderror
									</div>

                                    <div class="form-group">
										<label>Nomor Handphone</label>
										<input type="text" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" name="no_telp" placeholder="nomor handphone" value="{{auth('siswa')->user()->no_telp}}">
                                        @error('no_telp')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                            </div>
                                        @enderror
									</div>

									<div>
										<button class="btn btn-success btn-block border-0 py-3" type="submit">
											Edit
										</button>

										<button class="btn btn-danger btn-block border-0 py-3" type="button">
											<a href="/halaman-siswa" class="text-white">Batal</a>
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</body>

</html>