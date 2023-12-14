<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
      KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-
      ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- Section: Design Block -->
  <section class="vh-100" style="background-color: #818FB4;">
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">

        <div class="card my-5">
          <section class="vh-50" style="background-color: #87C4FF;">
            <h2 class="text-center text-dark mt-5">Register Form</h2>

            <div class="text-center">
              <img src="img/logo3.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px" alt="profile">
            </div>
            <div class="card-body">
              @if(Session::has('success'))
              <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
              </div>
              @endif
              <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                  <input type="text" placeholder="Name" id="name" class="form-control" name="name" required autofocus>
                  @if ($errors->has('name'))
                  <span class="text-danger">{{ $errors->first('name') }}</span>

                  @endif
                </div>
                <div class="form-group mb-3">
                  <input type="text" placeholder="Email" id="email_address" class="form-control" name="email" required autofocus>
                  @if ($errors->has('email'))
                  <span class="text-danger">{{ $errors->first('email') }}</span>

                  @endif
                </div>
                <div class="form-group mb-3">
                  <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                  @if ($errors->has('password'))
                  <span class="text-danger">{{ $errors->first('password') }}</span>
                  @endif
                </div>
                <div class="form-group mb-3">
                  <div class="checkbox">
                  </div>
                </div>
                <div class="mb-3">
                  <div class="d-grid">

                    <button class="btn btn-warning">Register</button>

                  </div>
                </div>
              </form>
            </div>
          </section>
        </div>

      </div>
    </div>
  </div>
  </section>

  <!-- Section: Design Block -->

  <!-- <div class="menu box-container box regis "></div>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title text-center">Register</h1>
                </div>
                <div class="card-body">
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="text" placeholder="Name" id="name" class="form-control" name="name" required autofocus>
                            @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>

                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" placeholder="Email" id="email_address" class="form-control" name="email" required autofocus>
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>

                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <div class="checkbox">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid">

                                <button class="btn btn-primary">Register</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
</body>

</html>