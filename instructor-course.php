<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sections</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h1>Instructor Information</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Name</th>
      <th>ID</th>
      <th>Number</th>
      <th>prefix</th>
      <th>description</th>
    </tr>
  </thead>
  <tbody>
    <?php
$servername = "localhost";
$username = "jescalan_homework3";
$password = "Angelito54321&";
$dbname = "jescalan_homework3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$iid = $_GET['id'];
//echo $iid;
$sql = "SELECT number, prefix, description, i.instructor_id, i.instructor_name from Course c join Sections s on s.CourseID = c.CourseID join instructor i on i.instructor_id= s.instructor_id"; //where i.instructor_id=" . $iid;
//echo $sql;
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["instructor_id"]?></td>
    <td><?=$row["instructor_name"]?></td>
    <td><?=$row["number"]?></td>
    <td><?=$row["prefix"]?></td>
    <td><?=$row["description"]?></td>
  </tr>
<?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
  </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
