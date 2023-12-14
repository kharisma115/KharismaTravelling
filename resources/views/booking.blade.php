@extends('layouts.app')
@section ('content')

<section id="booking" class="booking">
    <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Traveling</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
        }

        section {
            max-width: 600px;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: grid;
            gap: 15px;
        }

        label {
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #333;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <header>
        <h1>Booking Traveling</h1>
    </header>

    <section>
        <form action="process_booking.php" method="post">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="destination">Tujuan:</label>
            <select id="destination" name="destination" required>
                <option value="bali">Bali</option>
                <option value="paris">Paris</option>
                <option value="tokyo">Tokyo</option>
            </select>

            <label for="departure-date">Tanggal Keberangkatan:</label>
            <input type="date" id="departure-date" name="departure-date" required>

            <label for="return-date">Tanggal Kembali:</label>
            <input type="date" id="return-date" name="return-date" required>

            <label for="passengers">Jumlah Penumpang:</label>
            <input type="number" id="passengers" name="passengers" min="1" required>

            <button type="submit">Pesan Sekarang</button>
        </form>
    </section>

</body>
</html> -->

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>

        <div class="menu">
            <h1 class="heading">PELAYANAN KAMI</h1>
            <div class="box-container">
                <div class="box">
                    <img src="img/petualangan.png" alt="">
                    <h3>Petualangan</h3>
                  
                </div>

                <div class="box">
                    <img src="img/pemandu.png" alt="">
                    <h3>Pemandu Wisata</h3>
                   

                </div>

                <div class="box">
                    <img src="img/fd.jpg" alt="">
                    <h3>Makanan Dan Minuman</h3>
                  

                </div>
                <div class="box">
                    <img src="img/inap.jpeg" alt="">
                    <h3>Penginapan</h3> 

                </div>
            </div>
        </div>
        <div class="container">
            <div class="container m-4"></div>
            <div class="row">
                <div class="col-xl-6 col-lg-7" data-aos="fade-right">
                    <img src="img/pm.jpg" class="img-fluid" alt="">
                    <div class="container m-2"></div>
                    <img src="img/pt1.jpg" class="img-fluid" alt="">
                    <div class="container m-2"></div>
                    <img src="img/fd3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0">
                    <h3 data-aos="fade-up">Beragam ide liburan disini yang menarik perhatian anda</h3>
                    bermimpi untuk menjelajahi destinasi eksotis yang memadukan keindahan alam, warisan budaya, dan petualangan tak terlupakan. Rencananya termasuk mengunjungi tempat-tempat ikonik, mencicipi hidangan lokal yang autentik, dan berinteraksi dengan masyarakat setempat untuk mendapatkan pengalaman yang mendalam. Dari pantai berpasir putih yang menakjubkan hingga gunung yang menjulang tinggi, pelancong ini ingin menciptakan kenangan abadi dan memperkaya jiwa mereka melalui petualangan unik di setiap sudut dunia yang mereka kunjungi.</p>
                    <div class="icon-box" data-aos="fade-up">
                        <i class="bx bx-receipt"></i>
                        <h4>Petualangan</h4>
                        petualangan adalah panggilan yang menggetarkan jiwa, meminta kita untuk mengeksplorasi keindahan yang tersembunyi .</p>
                    </div>

                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Pemandu Wisata</h4>
                        Pemandu wisata traveller bukan hanya sekadar narator destinasi, tetapi pemandu jiwa yang menghidupkan setiap sudut petualangan, mengisi cerita perjalanan dengan warna-warna lokal, dan membimbing dengan kecintaan pada keindahan yang belum dijelajahi.</p>
                    </div>

                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Kuliner Lokal</h4>
                        Menikmati makanan lokal merupakan bagian tak terpisahkan dari keseruan travelling. Merasakan cita rasa unik, mencoba hidangan tradisional, dan menjelajahi pasar lokal adalah pengalaman kuliner yang tak terlupakan.
                        <h4>Berikut Contohnya</h4>
                        <div class="container text-center">
                            <div class="row">
                                <div class="col">
                                    <div class="card" style="width: 15rem;">
                                        <img src="img/ns.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Nasi Padang</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card" style="width: 15rem;">
                                        <img src="img/rw.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Rawon</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card" style="width: 15rem;">
                                        <img src="img/st1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"> Sate Ayam</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card" style="width: 15rem;">
                                        <img src="img/gr.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Gurame</h5>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <!-- <img src="img/rw.jpg" alt="" width="170px">
                                rawon</p> -->

                    </div>
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Penginapan</h4>
                                    Dipersembahkan untuk para traveller yang haus akan petualangan, penginapan ini adalah tempat magis yang memelukmu dengan kenyamanan . Tersembunyi di antara alam yang menakjubkan, penginapan ini menyediakan tempat istirahat yang nyaman, menyuguhkan sentuhan lokal yang autentik, dan merawat jiwa penjelajah yang selalu merindukan keindahan baru.</p>
                                </div>
                </div>
            </div>

        </div>

        @endsection