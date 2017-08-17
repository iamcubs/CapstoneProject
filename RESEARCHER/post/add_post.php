<?php
	require_once '../function/function.php';
    if(empty($_SESSION)) session_start();
	try {
		if (isset($_POST['posting'])) {
			$post = $_POST['post'];
			$privacy = $_POST['privacy'];
			$school = $_POST['school'];
			$dept = $_POST['dept'];
			if (!empty($post)) {
				$date_posted = date("Y/m/d");
				$time_posted = date("h:i:sa");
				addPost($post,$privacy,$school,$dept,$date_posted,$time_posted,$_SESSION['user_id']);
				header('Location: ../profile.php?post=success');
			}
		}
	} catch (PDOException $e) {
		$message = $e->getMessage(); 
	}
?>