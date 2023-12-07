<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "youbooking";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT h.name as hotel_name, COUNT(r.id) as reservation_count FROM hotels h LEFT JOIN rooms rm ON h.id = rm.id_hotel LEFT JOIN reservation r ON rm.id = r.id_room GROUP BY h.name";
$result = $conn->query($sql);

$dataPoints = array();

$totalReservations = 0;

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $totalReservations += $row['reservation_count'];
  }

  // Reset the pointer to the beginning of the result set
  $result->data_seek(0);

  while ($row = $result->fetch_assoc()) {
    $percentage = ($row['reservation_count'] / $totalReservations) * 100;
    $dataPoints[] = array("y" => $percentage, "label" => $row['hotel_name']);
  }
} else {
  echo "0 results";
}

$conn->close();
?>
<!DOCTYPE HTML>
<html>
<head>
  <script>
    window.onload = function () {
      var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        theme: "light2",
        title: {
          text: "Hotel Reservation Percentages"
        },
        axisY: {
          title: "Percentage (%)"
        },
        data: [{
          type: "column",
          yValueFormatString: "#,##0.##'%'",
          dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
        }]
      });
      chart.render();
    }
  </script>
</head>
<body>
  <div id="chartContainer" style="height: 370px; width: 100%;"></div>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
