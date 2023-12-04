<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouBooking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/main.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="index.php"><span class="fw-bolder text-primary">YouBooking
                </span></a>
            <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarButtonsExample">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>
                </ul>
                <div class="container-fluid">
                    <form class="d-flex input-group w-50">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                        <span class="input-group-text border-0" id="search-addon">
                            <i class="fas fa-search"></i>
                        </span>
                    </form>
                </div>
                <div class="d-flex align-items-center">
                    <button data-mdb-ripple-init type="button" class="btn btn-lightpx-3 me-2">
                        Login
                    </button>
                    <button data-mdb-ripple-init type="button" class="btn btn-primary me-3">
                        Sign up
                    </button>
                </div>
            </div>
        </div>
    </nav>
<section class="vh-100 bg-image"
  style="background-image: url('../Images/bac.png');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form action="../PHP/register.php" method="POST">

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" name="lname" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Last Name</label>
                </div>
                <input type="text" id="form3Example1cg" name="fname" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">First Name</label>
                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3cg" name="email" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cg" name="password" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>
                <div class="form-outline mb-4">
                <input type="text" id="form3Example1cg" name="num" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Phone number</label>
                </div>
                <div class="form-outline mb-4">
                <input type="text" id="form3Example1cg" name="cin" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">CIN</label>
                </div>

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="Submit" name="adduser"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="../JS/main.js"></script>
</body>

</html>