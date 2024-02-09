<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $period = $_POST['period'];
    $price = $_POST['price'];

    $sql = "INSERT INTO billing values ('$id','$name','$period','$price')";

    $rs = mysqli_query($conn,$sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
</head>
<body>


<!--  navbar started -->


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
<form method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Billing ID </label>
      <input type="text" name="id" class="form-control" id="inputEmail4" placeholder="ID">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Member Name </label>
      <input type="text" name="name" class="form-control" id="inputPassword4" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Period</label>
    <input type="date" name="period" class="form-control" id="inputAddress" placeholder="Date">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Price</label>
    <input type="text" name="price" class="form-control" id="inputAddress2" placeholder="Amount">
  </div>

  <div class="form-group">
    
    <input type="submit" name="submit" cs="form-control" id="inputAddress2" value="submit">
  </div>
</form>
<!-- form end -->
</body>
</html>