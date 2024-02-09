<?php
$conn = mysqli_connect("localhost","root","","gym");
include 'config.php';
if(isset($_REQUEST['submit']))
{
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $date = $_REQUEST['date'];
    $dob = $_REQUEST['dob'];
    $phone = $_REQUEST['phone'];
    $coach = $_REQUEST['coach'];

    // Check if the record already exists
    $sql = "SELECT * FROM coach WHERE id = '$id'";
    $rs = mysqli_query($conn, $sql);

    if(mysqli_num_rows($rs) > 0) {
        // Record already exists, handle accordingly (e.g., update)
        echo "Record with ID $id already exists.";
    } else {
        // Record doesn't exist, proceed with the insert
        $sql = "INSERT INTO member VALUES ('$id', '$name', '$date', '$dob','$phone','$coach')";
        $rs = mysqli_query($conn, $sql);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <style>
      body {
    font-family: 'Arial', sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
}

.navbar {
    background-color: #007bff;
    padding: 15px;
}

.navbar-brand img {
    max-height: 100%;
    max-width: 100%;
}

.navbar-nav .nav-item {
    margin-right: 15px;
}

.form-container {
    max-width: 600px;
    margin: 20px auto;
    background-color: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-group {
    margin-bottom: 20px;
}

.form-control {
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
    border: 1px solid #ced4da;
    border-radius: 5px;
}

input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

/* Add more styles as needed for your form elements */

    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="admin-login.php"><img src="img//y.png" alt="logo" height="30%" width="20%"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">GYM</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="billing.php">Billing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="coach.php">Coach</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="members.php">Members</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="receptionist.php">Receptionist</a>
      </li>
    </ul>
  </div>
</nav>
<!--  navbar ended -->

<!-- form start -->
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">ID </label>
      <input type="text" name="id" class="form-control" id="inputEmail4" placeholder="ID">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4"> Name </label>
      <input type="text" name="name" class="form-control" id="inputPassword4" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Date of Joining</label>
    <input type="date" name="date" class="form-control" id="inputAddress" placeholder="Date of Joining">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Date of Birth</label>
    <input type="date" name="dob" class="form-control" id="inputAddress2" placeholder="Date of Birth">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Phone Number </label>
    <input type="number" name="phone" class="form-control" id="inputAddress2" placeholder="Phone Number">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Coach</label>
    <input type="text" name="coach" class="form-control" id="inputAddress2" placeholder="Coach">
  </div>

  <div class="form-group">
    
    <input type="submit" name="submit" cs="form-control" id="inputAddress2" value="submit">
  </div>
</form>
<!-- form end -->



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
</html>