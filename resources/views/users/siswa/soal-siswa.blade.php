<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
	<title>Online Exam</title>
	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('users/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('users/css/font-awesome.css') }}">
	<link rel="stylesheet" href="{{ asset('users/css/template.css') }}">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
	<!-- Google Fonts Roboto -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
	<!-- MDB -->
	<link rel="stylesheet" href="{{ asset('users/css/mdb.min.css') }}" />
	<!-- Custom styles -->
	<link rel="stylesheet" href="{{ asset('users/css/style.css') }}" />
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
							<li class="scroll-to-section"><a href="/nilai-siswa/{{auth('siswa')->user()->id}}">Nilai</a></li>
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
								<p id="pertanyaan"></p>

								<div class="buttons">
									<button class="btn" id="btn0" value="" onclick="">A. <span id="choice0"></span></button>
									<button class="btn" id="btn1" value="">B. <span id="choice1"></span></button>
									<button class="btn" id="btn2" value="">C. <span id="choice2"></span></button>
									<button class="btn" id="btn3" value="">D. <span id="choice3"></span></button>
								</div>
								<hr>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<input type="text" id="siswa_id" value="{{auth('siswa')->user()->id}}" class="d-none">
		<input type="text" id="ujian_id" value="{{$ujian_id}}" class="d-none">
	</section>

	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

	<script>
		function getData(soal) {
			return soal
		}

		async function axiosTest() {
			const response = await axios.get("/getsoal")
			console.log(response.data.soal)
		}
		axiosTest()

		const soalData = getData()
		console.log(soalData)

		const idUjianSoal = document.getElementById('ujian_id')
		axios.get(`/getsoal/${idUjianSoal.value}`)

			// tampil jawaban

			.then((response) => {
				const pSoal = document.getElementById('pertanyaan')
				const soalData = response.data.soal
				console.log(soalData)
				let listSoal = []
				this.allSoal = soalData

				soalData.map((soal, number) => {
					console.log(soal)
					console.log('testSoal')

					listSoal.push(new Pertanyaan(
						soal.soal,

						[soal.jawaban[0] ? (soal.jawaban[0].jawaban) : (''), soal.jawaban[1] ? (soal.jawaban[1].jawaban) : (''), soal.jawaban[2] ? (soal.jawaban[2].jawaban) : (''), soal.jawaban[3] ? (soal.jawaban[3].jawaban) : ('')],
						soal.jawaban[0] ? (soal.jawaban[soal.jawaban.findIndex((o) => o.keterangan === 'Benar')].jawaban) : ('')

					))
				})
				console.log(listSoal)
				console.log('test listSoal')

				function Ujian(soalData) {
					this.score = 0;
					this.pertanyaans = soalData;
					this.pertanyaanIndex = 0;
				}

				Ujian.prototype.getPertanyaanIndex = function() {
					return this.pertanyaans[this.pertanyaanIndex];
				}

				Ujian.prototype.guess = function(answer) {
					console.log(answer)
					console.log(this.getPertanyaanIndex())
					console.log('answer')
					console.log(soalData)
					console.log('testAllSoal')

					//cek id soal
					const soalSekarang = soalData[this.pertanyaanIndex]
					const idSoal = soalSekarang.id
					console.log(idSoal)
					console.log('soalSekarang')

					//cek id siswa
					const idSiswaInput = document.getElementById('siswa_id')
					console.log(idSiswaInput.value)
					console.log('idSiswa')

					//cek id jawaban
					const idJawaban = soalSekarang.jawaban[soalSekarang.jawaban.findIndex((o) => o.jawaban === answer)].id
					console.log(idJawaban)
					console.log('idjawaban')

					//membuat form data
					let formData = new FormData();
					formData.append("siswa_id", idSiswaInput.value);
					formData.append("soal_id", idSoal);
					formData.append("jawaban_id", idJawaban);

					//menyimpan data
					axios({
							method: "post",
							url: "/simpanjawaban",
							data: formData,
							headers: {
								"Content-Type": "multipart/form-data",
							},
						})
						.then(function(response) {
							//handle success
							console.log(response);
						
							if (response.status >= 400) {
								console.log("Berita Gagal Disimpan!!");
							} else {
								console.log("Berita Sugses Disimpan!!");									
							}
						})
						.catch(function(response) {
							//handle error
							console.log(response);

							console.log("Gagal Menyimpan!!");
						});

					if (this.getPertanyaanIndex().isCorrectAnswer(answer)) {
						this.score++;
					}

					this.pertanyaanIndex++;
				}

				Ujian.prototype.isEnded = function() {
					return this.pertanyaanIndex === this.pertanyaans.length;
				}


				function Pertanyaan(text, choices, answer) {
					this.text = text;
					this.choices = choices;
					this.answer = answer;
				}

				Pertanyaan.prototype.isCorrectAnswer = function(choice) {
					return this.answer === choice;
				}


				// Displaying the question
				function displayPertanyaan() {
					if (ujian.isEnded()) {
						showScores();
					} else {
						// show question
						let pertanyaanElement = document.getElementById("pertanyaan");
						pertanyaanElement.innerHTML = ujian.getPertanyaanIndex().text;

						// show options
						let choices = ujian.getPertanyaanIndex().choices;
						for (let i = 0; i < choices.length; i++) {
							let choiceElement = document.getElementById("choice" + i);
							choiceElement.innerHTML = choices[i];
							guess("btn" + i, choices[i]);
						}
						console.log(ujian.getPertanyaanIndex().text);

						showProgress();
					}
				};

				function guess(id, guess) {
					let button = document.getElementById(id);
					button.onclick = function() {
						ujian.guess(guess);
						displayPertanyaan();
					}
				};


				function showProgress() {
					let currentPertanyaanNumber = ujian.pertanyaanIndex + 1;
					let ProgressElement = document.getElementById("progress");
					ProgressElement.innerHTML =
						`Pertanyaan ${currentPertanyaanNumber} dari ${ujian.pertanyaans.length}`;
				};

				function showScores() {
					const nilaiAkhir = ujian.score * (100 / ujian.pertanyaans.length)

					//tambah axios menyimpan data untuk nambah nilai
					//mengambil id siswa
					const idSiswaInput = document.getElementById('siswa_id')
					console.log(idSiswaInput.value)
					console.log('idSiswa')

					//mengambil id ujian
					const idUjian = document.getElementById('ujian_id')
					console.log(idUjian.value)
					console.log('idujian')

					//membuat form data
					let formData = new FormData();
					formData.append("siswa_id", idSiswaInput.value);
					formData.append("ujian_id", idUjian.value);
					formData.append("nilai", nilaiAkhir);

					// //menyimpan data nilai
					axios({
							method: "post",
							url: "/simpannilai",
							data: formData,
							headers: {
								"Content-Type": "multipart/form-data",
							},
						})
						.then(function(response) {
							//handle success
							console.log(response);
						
							if (response.status >= 400) {
								console.log("Berita Gagal Disimpan!!");
							} else {
								console.log("Berita Sugses Disimpan!!");									
							}
						})
						.catch(function(response) {
							//handle error
							console.log(response);

							console.log("Gagal Menyimpan!!");
						});


					let ujianEndHTML =
						`
			<h1>Ujian Completed</h1>
			<h2 id='score'> Skor anda: ${ujian.score} dari ${ujian.pertanyaans.length}</h2>
			<h2 id='nilai'> Nilai anda: ${nilaiAkhir} dari ${100}</h2>
			<div class="ujian-repeat">
				<a href="/nilai-siswa/${idSiswaInput.value}">Selesai</a>
			</div>
			`;
					let ujianElement = document.getElementById("ujian");
					ujianElement.innerHTML = ujianEndHTML;
				};

				let pertanyaans = listSoal
				let ujian = new Ujian(pertanyaans);

				// display ujian
				displayPertanyaan();

				// Add A CountDown for the ujian
				let time = 0.5;
				let ujianTimeInMinutes = time * 60 * 60;
				let ujianTime = ujianTimeInMinutes / 60;

				let counting = document.getElementById("count-down");

				function startCountdown() {
					let ujianTimer = setInterval(function() {
						if (ujianTime <= 0) {
							clearInterval(ujianTimer);
							showScores();
						} else {
							ujianTime--;
							let sec = Math.floor(ujianTime % 60);
							let min = Math.floor(ujianTime / 60) % 60;
							counting.innerHTML = `WAKTU: ${min} : ${sec}`;
						}
					}, 1000);
				}

				startCountdown();

				// pSoal.innerHTML = soalData[0].soal
				console.log(response.data[0])

				console.log(soalData);
			});


		console.log(todoItems)

		const URL = "/getsoal";
		let soal = []
		async function getDataFromApi(URL) {
			const response = await fetch(URL);
			return await response.json();



			console.log(data);
		}
		console.log(soal)
		const getSoal = getDataFromApi(URL)
		console.log(getSoal)

		getDataFromApi(URL);

		// function Ujian(soalData) {
		// 	this.score = 0;
		// 	this.pertanyaans = soalData;
		// 	this.pertanyaanIndex = 0;
		// }

		// Ujian.prototype.getPertanyaanIndex = function() {
		// 	return this.pertanyaans[this.pertanyaanIndex];
		// }

		// Ujian.prototype.guess = function(answer) {
		// 	if(this.getPertanyaanIndex().isCorrectAnswer(answer)) {
		// 		this.score++;
		// 	}

		// 	this.pertanyaanIndex++;
		// }

		// Ujian.prototype.isEnded = function() {
		// 	return this.pertanyaanIndex === this.pertanyaans.length;
		// }


		// function Pertanyaan(text, choices, answer) {
		// 	this.text = text;
		// 	this.choices = choices;
		// 	this.answer = answer;
		// }

		// Pertanyaan.prototype.isCorrectAnswer = function(choice) {
		// 	return this.answer === choice;
		// }


		// // Displaying the question
		// function displayPertanyaan() {
		// 	if(ujian.isEnded()) {
		// 		showScores();
		// 	}
		// 	else {
		// 		// show question
		// 		let pertanyaanElement = document.getElementById("pertanyaan");
		// 		pertanyaanElement.innerHTML = ujian.getPertanyaanIndex().text;

		// 		// show options
		// 		let choices = ujian.getPertanyaanIndex().choices;
		// 		for(let i = 0; i < choices.length; i++) {
		// 			let choiceElement = document.getElementById("choice" + i);
		// 			choiceElement.innerHTML = choices[i];
		// 			guess("btn" + i, choices[i]);
		// 		}
		// 		console.log(ujian.getPertanyaanIndex().text);

		// 		showProgress();
		// 	}
		// };

		// function guess(id, guess) {
		// 	let button = document.getElementById(id);
		// 	button.onclick = function() {
		// 		ujian.guess(guess);
		// 		displayPertanyaan();
		// 	}
		// };


		// function showProgress() {
		// 	let currentPertanyaanNumber = ujian.pertanyaanIndex + 1;
		// 	let ProgressElement = document.getElementById("progress");
		// 	ProgressElement.innerHTML = 
		// 	`Pertanyaan ${currentPertanyaanNumber} dari ${ujian.pertanyaans.length}`;
		// };

		// function showScores() {
		// 	let ujianEndHTML = 
		// 	`
		// 	<h1>Ujian Completed</h1>
		// 	<h2 id='score'> Skor anda: ${ujian.score} dari ${ujian.pertanyaans.length}</h2>
		// 	<div class="ujian-repeat">
		// 		<a href="/nilai-siswa">Selesai</a>
		// 	</div>
		// 	`;
		// 	let ujianElement = document.getElementById("ujian");
		// 	ujianElement.innerHTML = ujianEndHTML;
		// };

		// create questions here

		// let pertanyaans = [
		// 	new Pertanyaan(
		// 		"Kata “atau” merupakan konjungsi?", 

		// 		["Tujuan", "Pilihan","Temporal", "Kesimpulan"], "Pilihan"
		// 	),
		// 	new Pertanyaan(
		// 		"Ceramah bertujuan untuk memberikan?", 
		// 		["Nasihat baik", "Kebencian", "Kemurkaan", "Keburukan"], "Nasihat baik"
		// 	),
		// 	new Pertanyaan(
		// 		"Bahasa yang digunakan dalam teks ceramah adalah?", 
		// 		["Ambigu", "Rancu","Bahasa gaul", "Efektif"], "Efektif"
		// 		),
		// 	new Pertanyaan(
		// 		"Nilai yang menjelaskan baik dan buruk seseorang dalam cerita adalah nilai?", 
		// 		["Agama", "Sosial", "Moral", "Ekonomi"], "Moral"
		// 		),
		// 	new Pertanyaan(
		// 		"Lawan kata dari tetiran adalah?", 
		// 		["Luar", "Asli","Palsu", "Boros"], "Asli"
		// 		)
		// ];


		// // create ujian
		// let ujian = new Ujian(pertanyaans);

		// // display ujian
		// displayPertanyaan();

		// // Add A CountDown for the ujian
		// let time = 0.5;
		// let ujianTimeInMinutes = time * 60 * 60;
		// let ujianTime = ujianTimeInMinutes / 60;

		// let counting = document.getElementById("count-down");

		// function startCountdown(){
		// 	let ujianTimer = setInterval(function(){
		// 	if(ujianTime <= 0) {
		// 		clearInterval(ujianTimer);
		// 		showScores();
		// 	} else {
		// 		ujianTime--;
		// 		let sec = Math.floor(ujianTime % 60);
		// 		let min = Math.floor(ujianTime / 60) % 60;
		// 		counting.innerHTML = `WAKTU: ${min} : ${sec}`;   
		// 	}
		// },1000);
		// }

		// startCountdown();
	</script>
</body>

</html>