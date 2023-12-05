<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="youbooking";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

$sql = "SELECT id, name, adress, email, phone, category, nchambre, id_user FROM hotels";
$result = $conn->query($sql);?>

<table>
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Category</th>
        <th>Number of Rooms</th>
        <th>Action</th>
    </tr>

<?php
if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()){ 
        while($row = $result->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["adress"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["phone"]; ?></td>
            <td><?php echo $row["category"]; ?></td>
            <td><?php echo $row["nchambre"]; ?></td>
            <td>
                
                
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
      <form action="../../includes/updateHotel.php?id=<?php echo $row["id"]; ?>" method="POST">
  <div class="mb-3">
    <label for="id" class="form-label">ID</label>
    <input type="text" class="form-control" name="id_hotel" value="<?php echo $row["id"]; ?>">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" name="name"  value="<?php echo $row["name"]; ?>">
  </div>
  <div class="mb-3">
    <label for="adress" class="form-label">Address</label>
    <input type="text" class="form-control" name="adress" value="<?php echo $row["adress"]; ?>">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" value="<?php echo $row["email"]; ?>">
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="text" class="form-control" name="phone" value="<?php echo $row["phone"]; ?>">
  </div>
  <div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <input type="text" class="form-control" name="category" value="<?php echo $row["category"]; ?>">
  </div>
  <div class="mb-3">
    <label for="nchambre" class="form-label">Number of Rooms</label>
    <input type="text" class="form-control" name="nchambre" value="<?php echo $row["nchambre"]; ?>">
  </div>
  <div class="mb-3">
    <label for="name_user" class="form-label">User id</label>
    <input type="text" class="form-control" name="id_user" value="<?php echo $row["id_user"]; ?>">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href='../../includes/updateHotel.php?id=<?php echo $row['id']; ?>' type="button" class="btn btn-primary">Save changes</a>
      </div>
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
