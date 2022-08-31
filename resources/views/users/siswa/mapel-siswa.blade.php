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
        <div class="card-mapel">
          <div class="card-body">
            <div class="d-flex flex-row">
              <p class="text-lg ml-3">Mata Pelajaran</p>
              <p class="text-lg ml-auto">{{ auth('siswa')->user()->nama }}</p>
            </div>
          </div>

          <div class="header-mapel">
            <h2>XII MIPA 1</h2>
            <h3>Bahasa Indonesia</h3>
          </div>

          <div id="mapel">
            <div class="header-info">
              <h2>Info!!</h2>
              <h3>Selamat mengerjakan ujian</h3>
            </div>

            @foreach ($ujians as $ujian)
              <div class="header-ujian">
                <a href="/ujian-siswa/{{ $ujian->id }}">
                  <h3><i class="fas fa-clipboard-list"></i>{{ $ujian->jenis }} -> Semester {{ $ujian->semester }}</h3>
                </a>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>


</body>

</html>
