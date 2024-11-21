<?php
// Connection details (include your DB_connection.php file)
include 'DB_connection.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Search for Medicine</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <h1>Search for Medicine</h1>
    <form method="GET" action="find medoc.php">
      <input type="text" name="search" placeholder="Search for medicine" required>
      <button type="submit">Search</button>
    </form>
  </div>
  <?php
// Connection details (include your DB_connection.php file)
// include 'DB_connection.php';

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
?>

</body>
</html>
