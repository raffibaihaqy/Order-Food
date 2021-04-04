<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Document</title>

</head>
<body>


    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
          <div class="card login-card">
            <div class="row no-gutters">
              <div class="col-md-5">
                <img src="{{URL::asset('assets/images/burger.jpg')}}" alt="login" class="login-card-img">
              </div>
              <div class="col-md-7">
                <div class="card-body">
                  <div class="brand-wrapper">
                    <img src="assets/images/logo.svg" alt="logo" class="logo">
                  </div>
                  <p class="login-card-description">Sign up to get started</p>
                  <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="sr-only">Username</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Username">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                            </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email address">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                            </span>
                        @enderror
                      </div>
                      <div class="form-group mb-4">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                            </span>
                        @enderror
                      </div>
                      <div class="form-group mb-4">
                        <label for="password" class="sr-only">Confirm Password</label>
                        <input type="password" id="password-confirm" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                      </div>
                      <button type="submit" name="login" id="login" class="btn btn-block login-btn mb-4">Register</button>
                    </form>
                    <p class="login-card-footer-text">Have an account? <a href="{{route('login')}}" class="text-reset">Sign In here</a></p>
                    <nav class="login-card-footer-nav">
                      <a href="#!">Terms of use.</a>
                      <a href="#!">Privacy policy</a>
                    </nav>
                </div>
              </div>
            </div>
          </div>

        </div>
      </main>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>

