@extends('layouts.app')
@section ('content')

<link href="assets/css/style1.css" rel="stylesheet">
<section id="contact" class="contact">
  <div class="container m-5"></div>
  <center>
    <h1 class="heading">Contact Kami</h1>
  </center>


  <div class="container m-5"></div>
  <div class="row no-gutters justify-content-center" data-aos="fade-up">

    <div class="col-lg-5 d-flex align-items-stretch">
      <div class="info">
        <div class="address">
          <i class="bi bi-geo-alt"></i>
          <h4>Location:</h4>
         Surodakan Trenggalek</p>
        </div>

        <div class="email mt-4">
          <i class="bi bi-envelope"></i>
          <h4>Email:</h4>
       khrismahdyah@gmail.com</p>
        </div>

        <div class="phone mt-4">
          <i class="bi bi-phone"></i>
          <h4>Call:</h4>
          +85806958641</p>
        </div>

        <div class="ig mt-4">
          <i class="bi bi-envelope"></i>
          <h4>Instragam:</h4>
          @kharkhrr</p>
        </div>

      </div>

    </div>

    <div class="col-lg-5 d-flex align-items-stretch">
      <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.4446868320388!2d111.7135533!3d-8.0560401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e791b2b0606b7a5%3A0x4a928b26bb669a9b!2sSMKN%202%20Trenggalek!5e0!3m2!1sid!2sid!4v1690641460738!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
    
  </head>

  <!-- <body> -->
    <!-- <section class="text-gray-600 body-font">
      <form action="khrismahdyah@gmail.com" method="POST">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">
              Contact Us
            </h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
              Thank you for visiting our website. Let me know if you have
              something to say
            </p>
          </div>
          <div class="lg:w-1/3 w-full mx-auto px-8">
            <div class="relative flex-grow w-full">
              <label for="full-name" class="leading-7 text-sm text-gray-600">Full Name</label>
              <input type="text" id="full-name" name="full-name" class="w-full bg-white bg-opacity-50 rounded border border-gray-300 focus:border-red-500 focus:bg-transparent focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
            </div>
            <div class="relative flex-grow w-full">
              <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
              <input type="email" id="email" name="email" class="w-full bg-white bg-opacity-50 rounded border border-gray-300 focus:border-red-500 focus:bg-transparent focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
            </div>
            <div class="relative flex-grow w-full">
              <label for="subject" class="leading-7 text-sm text-gray-600">Subject</label>
              <input type="text" id="subject" name="subject" class="w-full bg-white bg-opacity-50 rounded border border-gray-300 focus:border-red-500 focus:bg-transparent focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
            </div>
            <div class="relative flex-grow w-full">
              <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
              <textarea type="text" id="message" name="message" class="w-full bg-white bg-opacity-50 rounded border border-gray-300 focus:border-red-500 focus:bg-transparent focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"></textarea>
            </div>
            <div class="w-full h-4"></div>
            <button type="submit" class="mt-4 w-full text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg">
              Send my message
            </button>
            <div class="loader ease-linear mt-5 rounded-full border-4 border-t-4 border-gray-200 h-6 w-6 mx-auto"></div>
          </div>
        </div>
      </form>
    </section>

   
  </body>

  </html> -->
  <!-- <div class="row mt-5 justify-content-center" data-aos="fade-up">
    <div class="col-lg-10">
      <form action="forms/contact.php" method="post" role="form" class="php-email-form">
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
      </form>
    </div>

  </div>

  </div> -->
</section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- <form class="row g-3">
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="col-12">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="col-md-6">
        <label for="inputCity" class="form-label">City</label>
        <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="col-md-4">
        <label for="inputState" class="form-label">State</label>
        <select id="inputState" class="form-select">
            <option selected>Choose...</option>
            <option>...</option>
        </select>
    </div>
    <center>
    <div class="col-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Check me out
            </label>
        </div>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
    </center>
</form> -->
<!-- <div class="container m-5"></div>
<div class="menu bg-dark">
  <dic class="footer bg-white text-white mt-5">
    <div class="container p-4">
      <div class="row">
        <div class="col-4">
          <img src='img/logo3.png' width="350">
        </div>
        <div class="col-4">
          <h6 class="mb-3">
            <h>About</h>
          </h6>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum cupiditate incidunt hic illo, enim ad ipsam. Veritatis, assumenda recusandae. Ipsum officia accusantium, est ullam, commodi rerum earum voluptate placeat aperiam, autem expedita reprehenderit possimus mollitia consectetur eius veniam.
          Temporibus, eum odio saepe culpa non impedit id molestiae cupiditate consequatur adipisci.</p>
        </div>
        <div class="col-4">
          <h6 class="mb-3">
            <h>Contact</h>
          </h6>
          +62 858 0695 8641</p>
          <h6 class="mb-3">
            <h>Email</h>
          </h6>
          khrismahdyah@gmail.com</p>
        </div>
      </div>
    </div>
</div> -->
<!-- <script src="assets/js/script.js"></script> -->

@endsection