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
                <button type="button" class="data-mdb-ripple-init btn btn-lightpx-3 me-2">
                    Login
                </button>
                <button type="button" class="data-mdb-ripple-init btn btn-primary me-3">
                    Sign up
                </button>
            </div>
        </div>
    </div>
</nav>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"> Mes Reservation </h1>
</div>
<table class="table table-responsive">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Room Number</th>
        <th>Actions</th>
    </tr>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db="youbooking";

    // Create connection
    $conn = new mysqli($servername, $username, $password,$db);

    $sql = "SELECT `id`, `nombre`, `d_date`, `f_date`, `id_user`, `id_room` FROM `reservation`";
    $result = $conn->query($sql);?>

    <?php
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
    while($row = $result->fetch_assoc()){
    ?>
    <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["nombre"]; ?></td>
        <td><?php echo $row["d_date"]; ?></td>
        <td><?php echo $row["f_date"]; ?></td>
        <td><?php echo $row["id_room"]; ?></td>
        <td><button type="button" class="btn btn-warning"><a href="../PHP/delete.php?id=<?php echo $row["id"]; ?>">Delete</a></button>
            <!-- Button trigger modal -->
            <a  class='btn btn-primary'   data-bs-toggle="modal" data-bs-target="#exampleModal-<?php echo $row["id"]; ?>">Update</a>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal-<?php echo $row["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="update.php?id=<?php echo $row["id"]; ?>" method="POST">
                                <div class="mb-3">
                                    <label for="id" class="form-label">ID</label>
                                    <input type="text" class="form-control" name="id_hotel" value="<?php echo $row["id"]; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nombre of rooms</label>
                                    <input type="text" class="form-control" name="nombre"  value="<?php echo $row["nombre"]; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="date" class="form-label">Begin Date</label>
                                    <input type="date" class="form-control" name="d_date" value="<?php echo $row["d_date"]; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="date" class="form-label">End Date</label>
                                    <input type="date" class="form-control" name="f_date" value="<?php echo $row["f_date"]; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="name_user" class="form-label">Room id</label>
                                    <input type="text" class="form-control" name="id_room" value="<?php echo $row["id_room"]; ?>">
                                </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </form>
                    </div>

                </div>
            </div>
        </td>

</tr>
<?php
}
?>
</table>

<?php
}
} else {
    echo "0 results";
}
$conn->close();
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="Assets/JS/main.js"></script>
</body>

</html>