<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
     <style>
        img {
            border-radius: 50%;
        }
    </style>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <img src ="foto.jpg" style="width:180px;height:200px;">
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <h1><?php echo $_SESSION['nim']; ?></font></h1>
     <a href="todo.php">Next</a>
     <p></p>
     <a href="logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>