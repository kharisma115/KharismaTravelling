@extends('layouts.app')
@section ('content')
<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">



  <!-- Template Main CSS File -->
  <!-- <link href="../assets/css/style1.css" rel="stylesheet" /> -->
  <link href="assets/css/style1.css" rel="stylesheet">
  <!-- <link href="public/css/style.css" rel="stylesheet"> -->
</head>
<style>

</style>

<section id="home" class="d-flex flex-column justify-content-center align-items-center">
  <div class="container text-center text-md-left" data-aos="fade-up">
    <h1>Traveller</h1>
    <h2>Cari Destinasi Wisatamu Sekarang</h2>
    <a href="/blog" class="btn-get-started scrollto">Mau Kemana</a>
  </div>
</section>

<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="container m-5"></div>

  <!-- <section id="blog" class="blog">
    <div class="container m-3"></div>
    <div class="container text-center">

      <h2 style=" width: 100%; border-bottom: 4px solid #FFA33C"><b>Our Top Destination </b></h2>
      <hr>
      </hr>
    </div>
    <div class="card text-center">
      <div class="card-header">
        Beberapa Contoh Destinasi Kami
      </div> -->
  <!-- <section id="blogg" class="d-flex flex-column justify-content-above align-items-above">
        <div class="container text-above text-md-left" data-aos="fade-up">
          <br>
          <br><br>
          <h2>Mau cari wisata special kami luar negara?</h2>
          <h5>Cari Destinasi Wisatamu Sekarang Di Special Offers Kami</h5>
          <a href="/special" class="btn-get-started scrollto">Cari Disini</a>
        </div>
      </section>

      <div class="card-body">
        <div class="card-text">kunjungan ke beberapa tempat menarik, biasanya dengan maksud rekreasi, edukasi, atau budaya. Tours dapat melibatkan berbagai destinasi, seperti tempat wisata alam, museum, situs bersejarah, atau tempat-tempat budaya lainnya. Perjalanan sering kali diatur oleh agen perjalanan atau perusahaan tur untuk memastikan pengalaman yang menyenangkan dan informatif bagi para peserta.</p>
        <a href="#" class="btn btn-primary">Details</a>
      </div>
      <div class="card-footer text-body-secondary">
        2 days ago
      </div>
    </div> -->
    <div class="container m-3"></div>
  <div class="home_about">
    <div class="image_about">
      <img src="img/travel1.jpg" alt="About Image" class="about_img">
    </div>
    <div class="content_section">
      <div class="tag_about">
      </div>
      <h6 class="about_title">
        We Travel to Explore the World !
      </h6>
      Jadikan kaki kita penjelajah dunia, dan biarkan hati kita menjadi peta keindahan. Mari berangkat bersama, mengecap rasa petualangan di setiap langkah, merasakan sentuhan keberagaman, dan menuliskan kisah-kisah tak terlupakan di setiap sudut bumi. Bersiaplah untuk merayakan kehidupan, karena perjalanan bukan hanya destinasi, tetapi juga kumpulan momen-momen ajaib yang menanti untuk diabadikan.
      </p>
    </div>
  </div>

  <div class="travel-categories-section">
    <div class="tag-section tag-center">
    </div>
    <div class="container text-center">
    <h2 style=" width: 100%; border-bottom: 4px solid #FFA33C"><b> ADVENTURE </b></h2>
    </div>
    <div class="category-box-section">
      <div class="category-box">
        <img src="img/bg1.jpg" alt="Category Image" class="cat-img">
        <div class="cat-title">Adventure</div>
      </div>
      <div class="category-box">
        <img src="img/bg2.jpg" alt="Category Image" class="cat-img">
        <div class="cat-title">Adventure</div>
      </div>
      <div class="category-box">
        <img src="img/bg3.jpg" alt="Category Image" class="cat-img">
        <div class="cat-title">Adventure</div>
      </div>
      <div class="category-box">
        <img src="img/bg12.jpg" alt="Category Image" class="cat-img">
        <div class="cat-title">Adventure</div>
      </div>
      <div class="category-box">
        <img src="img/bg4.jpg" alt="Category Image" class="cat-img">
        <div class="cat-title">Adventure</div>
      </div>
      <div class="category-box">
        <img src="img/bg11.jpg" alt="Category Image" class="cat-img">
        <div class="cat-title">Adventure</div>
      </div>
    </div>
  </div>

  <div class="blog_section">
    <div class="tag_section  tag_center">
    </div>
    <div class="container text-center">
    <h2 style=" width: 100%; border-bottom: 4px solid #FFA33C"><b> JELAJAHI </b></h2>
    </div>
    <div class="blog_section_box">
      <div class="blog_box">
        <img src="img/bg18.jpg" alt="Blog Image" class="blog_img">
        <div class="blog_data">
        <i class="fa-solid fa-calendar-days"></i> &nbsp; 23 april, 2023
          </p>
          <h6 class="blog_title">Explore the safari</h6>
          <div class="blog_desc">
          Sustainable tourism lain yang ada di Bali adalah Desa Penglipuran. Desa wisata di Bali ini dinobatkan sebagai Desa Terbersih di dunia, sehingga pengunjung akan merasa sangat nyaman berkeliling desa ini. Sementara itu, tata ruang adat yang dihadirkan Desa Penglipuran memiliki konsep Tri Mandala yang tampak rapi dan tertata.
          </div>
        </div>
      </div>
      <div class="blog_box">
        <img src="img/bromo.jpg" alt="Blog Image" class="blog_img">
        <div class="blog_data">
        <i class="fa-solid fa-calendar-days"></i> &nbsp; 14 Desember, 2023
          </p>
          <h6 class="blog_title">Explore the safari</h6>
          <div class="blog_desc">
          Indonesia sebagai negara kepulauan terbesar di dunia, dihuni oleh banyak gunung api yang masih aktif. Dari sekian banyaknya gunung tersebut, terselip satu nama gunung api aktif yang banyak dibicarakan oleh para traveller, yakni Bromo. Gunung menawan ini berada di Jawa Timur, yang sudah menjadi wisata utama kawasan tersebut.
          </div>
        </div>
      </div>
      <div class="blog_box">
        <img src="img/dieng.jpg" alt="Blog Image" class="blog_img">
        <div class="blog_data">
            <i class="fa-solid fa-calendar-days"></i> &nbsp; 23 april, 2023
          </p>
          <h6 class="blog_title">Explore the safari</h6>
          <div class="blog_desc">
          Dieng atau yang bisa disebut dengan Dataran Tinggi Dieng atau juga dijuliki dengan “Negeri di Atas Awan” sudah menjadi lokasi favorit bagi pecinta wisata. Sesuai namanya, lokasi Dieng ini ada di ketinggian sekitar 2.000 mdpl, yang memiliki suhu cenderung dingin. Maka tidak salah jika para traveller amat menyukainya.
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- <div class="container m-3"></div>
  <div class="container text-center">
    <div class="row">
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="img/pulaudewata.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Pulau Dewata</h5>
            <h7 class="card-title"></h7>
            <a href="img-details.html" title="More Details"></a>
            <div class="img">
              <a href="img/pulaudewata.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Pulau yang Terletak di Kepulauan Sunda Kecil, di antara Pulau Jawa dan Pulau Lombok."><i <a href="#" class="btn btn-dark">Details</a></i></a> -->
              <!-- <h7 class="card-title">Pulau yang Terletak di Kepulauan Sunda Kecil, di antara Pulau Jawa dan Pulau Lombok. </h7> -->
<!-- 
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="img/derawan.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Pantai Derawan</h5>
            <h7 class="card-title"></h7>
            <a href="img-details.html" title="More Details"></a>
            <div class="img">
              <a href="img/derawan.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Terletak wilayah di provinsi Sulawesi Selatan, Indonesia"><i <a href="#" class="btn btn-dark">Details</a></i></a> -->
              <!-- <h7 class="card-title"> Terletak di Kabupaten Berau, Kalimantan Timur, Indonesia </h7> -->
            <!-- </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="img/tanjungtinggi.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Pantai Tanjung Tinggi</h5>
            <h7 class="card-title"></h7>
            <a href="img-details.html" title="More Details"></a>
            <div class="img">
              <a href="img/tanjungtinggi.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Terletak wilayah di provinsi Sulawesi Selatan, Indonesia"><i <a href="#" class="btn btn-dark">Details</a></i></a> -->
              <!-- <h7 class="card-title"> Terletak di Pulau Belitung, provinsi Bangka-Belitung, Indonesia. </h7> -->
            <!-- </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="img/borobudur.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Borobudur</h5>
            <h7 class="card-title"></h7>
            <a href="img-details.html" title="More Details"></a>
            <div class="img">
              <a href="img/borobudur.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Terletak wilayah di provinsi Sulawesi Selatan, Indonesia"><i <a href="#" class="btn btn-dark">Details</a></i></a> -->
              <!-- <h7 class="card-title"> Terletak di provinsi Jawa Tengah, Indonesia, sekitar 40 kilometer barat daya dari Yogyakarta </h7> -->

            <!-- </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="img/sumba" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Sumba</h5>
            <h7 class="card-title"></h7>
            <a href="img-details.html" title="More Details"></a>
            <div class="img">
              <a href="img/sumba" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Terletak wilayah di provinsi Sulawesi Selatan, Indonesia"><i <a href="#" class="btn btn-dark">Details</a></i></a> -->
              <!-- <h7 class="card-title"> Pulau yang Terletak di bagian timur Indonesia, tepatnya di provinsi Nusa Tenggara Timur </h7> -->

            <!-- </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="img/bromo1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"> Gunung Bromo</h5>
            <h7 class="card-title"></h7>
            <a href="img-details.html" title="More Details"></a>
            <div class="img">
              <a href="img/bromo1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Terletak wilayah di provinsi Sulawesi Selatan, Indonesia"><i <a href="#" class="btn btn-dark">Details</a></i></a> -->
              <!-- <h7 class="card-title"> Gunung Bromo terletak di Taman Nasional Bromo-Tengger-Semeru, di provinsi Jawa Timur, Indonesia.</h7> -->

            <!-- </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="img/toraja.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"> Tana Toraja</h5>
            <h7 class="card-title"></h7>
            <a href="img-details.html" title="More Details"></a>
            <div class="img">
              <a href="img/toraja.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Terletak wilayah di provinsi Sulawesi Selatan, Indonesia"><i <a href="#" class="btn btn-dark">Details</a></i></a> -->
              <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
            <!-- </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="img/komodo.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"> Pulau Komodo</h5>
            <h7 class="card-title"></h7>
            <a href="img-details.html" title="More Details"></a>
            <div class="img">
              <a href="img/komodo.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Terletak wilayah di provinsi Sulawesi Selatan, Indonesia"><i <a href="#" class="btn btn-dark">Details</a></i></a> -->
              <!-- <h7 class="card-title"> Pulau yang terletak di Kepulauan Nusa Tenggara, Indonesia. </h7> -->
            <!-- </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <section id="special" class="special section-bg">
    <div class="menu">
      <div class="container">

        <div class="container m-3"></div>
        <h2 style=" width: 100%; border-bottom: 4px solid #FFA33C"><b>Spesial Tours Kami</b></h2>

        <div class="container m-4"></div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card" style="width  : 290px;">
              <img src="img/paris.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Paris,Perancis</h5>
                <div class="card-text">Kota cinta yang terkenal dengan Menara Eiffel, museum seni Louvre, dan arsitektur klasik.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 290px;">
              <img src="img/roma.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Roma,Italia</h5>
                <div class="card-text">Kota bersejarah dengan Colosseum, Kuil Pantheon, dan Sistine Chapel di Kota Vatikan.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 290px;">
              <img src="img/barcelona.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Barcelona,Spanyol</h5>
                <div class="card-text">Terkenal dengan seni arsitektur Gaudi, pantai indah, dan makanan yang lezat.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 290px;">
              <img src="img/london.jpg " class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">London,Inggris</h5>
                <div class="card-text">Ibukota Inggris yang kaya sejarah dengan Menara London, Istana Buckingham, dan British Museum.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 290px;">
              <img src="img/amster.jpg " class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Amsterdam, Belanda</h5>
                <div class="card-text">Kota dengan kanal-kanal yang indah, museum seni Van Gogh, dan suasana yang ramah.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 290px;">
              <img src="img/stock.jpg " class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Stockholm, Swedia</h5>
                <div class="card-text">Kota yang indah dengan pulau-pulau, museum yang mengesankan, dan budaya desain yang inovatif.</p>
                </div>
              </div>
            </div>
          </div>
        </div> -->
        <!-- Vendor JS Files -->
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

        </body>

</html>
@endsection