<?php
$db = mysqli_connect('localhost','root','','todo');


if(isset($_POST['submit'])){
	
	$task = $_POST['task'];
	$insertqurey = "INSERT INTO `tasks`(`id`, `task`) VALUES ([value-1],[value-2])";
	mysqli_query($db,$insertqurey);
	mysqli_query($db, "INSERT INTO tasks (task) VALUES ('$task')");
	header('location: index.html');
	$task = mysqli_query($db, "SELECT * FROM tasks");
}
?>