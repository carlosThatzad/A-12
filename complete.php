<?php
	session_start();
	include 'lib/con.php';

<<<<<<< HEAD
	echo "Provocando un conflicto";
=======
	echo "Esto es una modificacion";
>>>>>>> 5fb5be1e520f96f5f96fb7a82884e7231df8d69a

	//preparing statement
	$stmt=$conn->prepare("UPDATE tasks SET completed=1 WHERE user=? AND id=?");
	$stmt->bind_param("ii",$_SESSION['id'],$_GET['task']);
	$stmt->execute();
	$stmt->close();
	header('Location:list.php');
	exit;

