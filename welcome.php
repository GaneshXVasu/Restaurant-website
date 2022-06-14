<?php

include 'config.php';
session_start();
if(!isset($_SESSION['username'])){
    header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <div class="mt-4 p-5 bg-primary text-white rounded">
    <h1>Welcome <?php echo $_SESSION['username'] ?></h1> 
    <a class="btn btn-danger btn-lg" href="logout.php" role="button">Logout</a>
  </div>
  
</div>
    
</body>
</html>