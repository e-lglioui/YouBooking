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
    <div class="mask d-flex align-items-center justify-content-center h-100 " style="height: 100vh !important;">
    <form class="gradient-custom-3 p-5 w-50" action="../PHP/session.php" method="POST">

  <div class="form-outline mb-4">
    <input type="email" id="form2Example1" name="email" class="form-control" />
    <label class="form-label" for="form2Example1">Email address</label>
  </div>

  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" name="password" class="form-control" />
    <label class="form-label" for="form2Example2">Password</label>
  </div>

  <button type="Submit" name="signin" class="btn btn-primary btn-block mb-4">Login</button>

  <div class="text-center">
    <p>Not a member? <a href="sign.php">Register</a></p>
   
  </div>
</form>
    </div>
    <script src="../JS/main.js"></script>
</body>

</html>