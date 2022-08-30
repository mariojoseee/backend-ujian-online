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
    <link rel="stylesheet" type="text/css" href="users/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="users/DataTables/media/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="users/DataTables/media/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
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
                <div class="card-mapel">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <p class="text-lg ml-3">Data Nilai</p>
							<p class="text-lg ml-auto">{{auth('siswa')->user()->nama}}</p>
                        </div>
                    </div>
					
                    <table id="dataNilai" class="table table-striped table-bordered" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>Nama Siswa</th>
                                <th>Ulangan Tengah Semester</th>
                                <th>Ulangan Akhir Semester</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Hartaka Irnanto Nashiruddin</td>
                                <td>5</td>
                                <td>3</td>
                            </tr>

                            <tr>
                                <td>Harsanto Wacana</td>
                                <td>3</td>
                                <td>4</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </section>
</body>
    <script>
        $(document).ready(function(){
            $('#dataNilai').DataTable();
        });
    </script>
    <script type="text/javascript" src="users/DataTables/media/js/jquery.js"></script>
    <script type="text/javascript" src="users/DataTables/media/js/jquery.dataTables.js"></script>
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
</html>