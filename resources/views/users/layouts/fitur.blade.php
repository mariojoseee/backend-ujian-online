<!DOCTYPE html>
<html lang="en">

@include('users.includes.head')
@include('users.includes.navbar')

<body>
    <div class="fitur-area" id="fitur">
        <div class="fitur-text">
			<div class="container">
				<div class="row">
					<div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
						<h1>Layanan <em>Fitur</em></h1>
						<p>Banyak dari kegagalan hidup adalah orang-orang yang tidak menyadari betapa dekatnya mereka dengan kesuksesan ketika mereka menyerah.</p>
					</div>
				</div>
			</div>
		</div>
    </div>

    <section class="section">
          <div class="container-fluid ps-0 pe-0">
          <div class="container">
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner rounded-lg">
                    <div class="carousel-item active" data-interval="10000">
                    <img src="users/images/w1.png" class="w-90" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                    <img src="users/images/w2.png" class="w-90" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="users/images/w3.png" class="w-90" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carousel" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carousel" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
          </div>
        </div>
    </section><br>

    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-border-bottom">
                        <div class="d-flex align-items-center center-vertical-sm center-sm">
                            <div class="fitur mr-0 mr-md-4 mb-3 mb-md-0">
                                <img src="users/images/a1.png" alt="">
                            </div>
                            <div>
                                <div class="font-weight-bold text-lg">Ujian Tengah Semester & Ujian Akhir Semester</div>
                                <p class="text-md mb-0">Memberikan kemudahan bagi siswa untuk mengakses website serta memudahkan siswa di dalam menjawab soal-soal ujian.</p>
                            </div>
                        </div>
                    </div>

                    <div class="section-border-bottom">
                        <div class="d-flex align-items-center center-vertical-sm center-sm">
                            <div class="fitur mr-0 mr-md-4 mb-3 mb-md-0">
                                <img src="users/images/a.png" alt="">
                            </div>
                            <div>
                                <div class="font-weight-bold text-lg bold">Tipe Soal</div>
                                <p class="text-md mb-0">Ujian memiliki tipe soal pilihan ganda.</p>
                            </div>
                        </div>
                    </div>

                    <div class="section-border-bottom">
                        <div class="d-flex align-items-center center-vertical-sm center-sm">
                            <div class="fitur mr-0 mr-md-4 mb-3 mb-md-0">
                                <img src="users/images/a3.png" alt="">
                            </div>
                            <div>
                                <div class="font-weight-bold text-lg bold">Konfirmasi Ujian</div>
                                <p class="text-md mb-0">Halaman untuk peserta ujian dalam melakukan peninjauan kembali jawaban ujian yang telah dikerjakan oleh peserta.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
   
</body>
</html>