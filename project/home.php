<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:registration&login.html');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style20.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <a class ="float-right" href="logout.php"> LOGOUT </a>
    <h1> Welcome <?php echo $_SESSION['username']; ?> to My Website</h1>
</div>
</body>
</html>

