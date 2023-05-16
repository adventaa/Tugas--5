<?php 
    // initialize errors variable
	$errors = "";

	// connect to database
	$db = mysqli_connect("localhost", "root", "", "test");

	if (isset($_GET['del_isi'])) {
		$id = $_GET['del_isi'];
	
		mysqli_query($db, "DELETE FROM list WHERE nomor=".$id);
		header('location: todo.php');
	}
	
	
	// insert a quote if submit button is clicked
	if (isset($_POST['submit'])) {
		if (empty($_POST['isi'])) {
			$errors = "You must fill in the task";
		}else{
			$isi = $_POST['isi'];
			$sql = "INSERT INTO list (isi) VALUES ('$isi')";
			mysqli_query($db, $sql);
			header('location: todo.php');
		}
		
	}	
	?>
	