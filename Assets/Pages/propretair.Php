
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-info">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100"> 
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item" onclick="load()">
                        <i class="fa-solid fa-house" style="color: #ffffff;"></i> <span class="ms-1 d-none d-sm-inline text-white" >Home</span>
                        
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                        <i class="fa-solid fa-gauge" style="color: #ffffff;"></i> <span class="ms-1 d-none d-sm-inline text-white">Dashboard</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100" onclick="graph()">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">graphes</span>  </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">info</span>  </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                        <i class="fa-solid fa-border-all" style="color: #ffffff;"></i> <span class="ms-1 d-none d-sm-inline text-white">Products</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100"  onclick="AjoterRoom() ">
                                 <span class="d-none d-sm-inline text-white">AJOUTER ROOM</span>
                            </li>
                            <li  onclick="EdetRoom()">
                                 <span class="d-none d-sm-inline text-white">MODIFIER ROOM</span>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                        <i class="fa-solid fa-dollar-sign " style="color: #ffffff;"></i><span class="ms-1 d-none d-sm-inline text-white">Les reservation</span> </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
               
                        <span class="d-none d-sm-inline mx-1 text-white">componentes</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu text-small shadow">
                        <li onclick="hotel()">New hotele request</li>
                        <li><a class="dropdown-item text-primary" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider text-primary">
                        </li>
                        <li><a class="dropdown-item text-primary" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3" id="contenue">
        <div>
            <?php 
            include("../../index.php")
            ?>
  <canvas id="myChart"></canvas>
</div>

        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.min.js" integrity="sha512-7U4rRB8aGAHGVad3u2jiC7GA5/1YhQcQjxKeaVms/bT66i3LVBMRcBI9KwABNWnxOSwulkuSXxZLGuyfvo7V1A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="..\JS\main.js"></script>
</body>