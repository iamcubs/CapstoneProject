<?php
	require_once '../function/function.php';
    if(empty($_SESSION)) session_start();
	try {
		if (isset($_POST['note'])) {
			$body = $_POST['body'];
			$title = $_POST['title'];
			if (!empty($body) && !empty($title)) {
				$date_posted = date("Y/m/d");
				$time_posted = date("h:i:sa");
				addNote($title,$body,$date_posted,$time_posted,$_SESSION['user_id']);       
				header('Location: ../profile.php?note=success');
			}
		}
	} catch (PDOException $e) {
		$message = $e->getMessage(); 
	}
?>