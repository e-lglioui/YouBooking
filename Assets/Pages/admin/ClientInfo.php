<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="youbooking";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

$sql = "SELECT id, lname, fname, email, password, num, cin, 
    CASE
        WHEN id_role = 1 THEN 'Admin'
        WHEN id_role = 2 THEN 'proprietaire'
        WHEN id_role = 3 THEN 'client'
    END as id_role 
    FROM users 
    GROUP BY id_role";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()){ ?>
        <tr>
        <td><?php echo $row["lname"]; ?></td>
        <td><?php echo $row["fname"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["password"]; ?></td>
        <td><?php echo $row["num"]; ?></td>
        <td><?php echo $row["cin"]; ?></td>
        <td><?php echo $row["id_role"]; ?></td>
        <td>

                      <!-- Button trigger modal -->
                      <a href='../../includes/updateClient.php?id=<?php echo $row['id']; ?>' class='btn btn-primary'   data-bs-toggle="modal" data-bs-target="#exampleModal">Update</a>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="../../includes/updateClient.php" method="POST">
  <div class="mb-3">
    <label for="id" class="form-label">ID</label>
    <input type="text" class="form-control" id="id" name="id" value="<?php echo $row["id"]; ?>">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="lname"  value="<?php echo $row["lname"]; ?>">
  </div>
  <div class="mb-3">
    <label for="adress" class="form-label">Address</label>
    <input type="text" class="form-control" id="adress" name="fname" value="<?php echo $row["fname"]; ?>">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="<?php echo $row["email"]; ?>">
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="text" class="form-control" id="phone" name="password" value="<?php echo $row["password"]; ?>">
  </div>
  <div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <input type="text" class="form-control" id="category" name="num" value="<?php echo $row["num"]; ?>">
  </div>
  <div class="mb-3">
    <label for="nchambre" class="form-label">Number of Rooms</label>
    <input type="text" class="form-control" id="nchambre" name="cin" value="<?php echo $row["cin"]; ?>">
  </div>
  <div class="mb-3">
    <label for="id_user" class="form-label">User ID</label>
    <input type="text" class="form-control" id="id_user" name="id_role" value="<?php echo $row["id_role"]; ?>">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    </td>
    </tr>
   <?php }
} else {
    echo "0 results";
}
$conn->close();
?>
