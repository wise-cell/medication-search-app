<!DOCTYPE html>
<html>
<head>
  <title>Search for Medicine</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
table {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

 td, th {
  border: 1px solid #ddd;
  padding: 8px;
}

 tr:nth-child(even){background-color: #f2f2f2;}

 tr:hover {background-color: #ddd;}

 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:#666;
  color: black;
}
.center {
  text-align: center;
  
}
body{
    font-family: Arial, Helvetica, sans-serif;
    -webkit-font-smoothing:antialiased;
    background:#000;
    color:black;
    background:url('./images/background.jpg') no-repeat center center/cover;
}

</style>
</head>
<body>
 
</body>
</html>
<?php
// Connection details (include your DB_connection.php file)
include 'DB_connection.php';

// Get search query from URL
$search = $_GET['search'];

// Prepare SQL statement
$sql = "SELECT * FROM medicines WHERE name LIKE ?";

// Prepare statement
if ($stmt = mysqli_prepare($conn, $sql)) {
  // Bind variables to the prepared statement
  mysqli_stmt_bind_param($stmt, "s", $search);

  // Execute statement
  mysqli_stmt_execute($stmt);

  // Bind result variables
  mysqli_stmt_bind_result($stmt, $id, $name, $pharmacy, $stock, $price);

  // Display table headings
  echo "<table border='1'>
            <tr>
              <th>Name</th>
              <th>Pharmacy</th>
              <th>Stock</th>
              <th>Price</th>
            </tr>";

  // Fetch and display results
  while (mysqli_stmt_fetch($stmt)) {
    echo "
     <tr>
       <td>$name</td>
       <td>$pharmacy</td>
       <td>$stock</td>
       <td>$price</td>
     </tr>";
  }

  // Close table
  echo "</table>";
}

// Close connection
mysqli_close($conn);
?>