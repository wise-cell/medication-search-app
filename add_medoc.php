<?php 
// Connection details
include 'DB_connection.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Medicine</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Add Medicine</h1>
    <form method="post" action="add_medoc.php">
      <div class="form-group">
        <label for="name">Medicine Name:</label>
        <input type="text" class="form-control" name="name" required>
      </div>
      <div class="form-group">
        <label for="generic_name">Pharmacy:</label>
        <input type="text" class="form-control" name="pharmacy" required>
      </div>
      <div class="form-group">
        <label for="supplier">Stock:</label>
        <input type="text" class="form-control" name="Stock" required>
          <?php include 'DB_connection.php'; ?>
      </div>
      <div class="form-group">
        <label for="packing">Price:</label>
        <input type="text" class="form-control" name="packing" required>
      </div>
      <button type="submit" name="add" class="btn btn-primary">Add</button>
    </form>
  </div>
  <?php


// Check if the form has been submitted
if (isset($_POST['add'])) {

    // Get the form data
    $NAME = mysqli_real_escape_string($conn, $_POST['name']);
    $PHARMACY = mysqli_real_escape_string($conn, $_POST['pharmacy']);
    $STOCK = mysqli_real_escape_string($conn, $_POST['stock']);
    $PRICE = mysqli_real_escape_string($conn, $_POST['price']);

    // Insert the data into the database
    $sql = "INSERT INTO medicines (name, pharmacy, stock, price) VALUES ('$name', '$pharmacy', '$stock', '$price')";

    if (mysqli_query($conn, $sql)) {
        echo "New medicine added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}

// Close the database connection
mysqli_close($conn);

?>
</body>
</html>