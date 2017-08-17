<?php
	require_once '../function/function.php';
	if(empty($_SESSION)) session_start();
	$id = $_GET["note"];
	$users = return_user();
	foreach ($users as $s) {
		$user_id = $s['user_id'];
		if ($_SESSION['user_id'] == $user_id) {
			deleteNote($id);
			header("location: ../profile.php?note=delete");
		}
	}
?>
