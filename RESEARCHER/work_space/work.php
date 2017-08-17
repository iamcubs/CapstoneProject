<?php
	require_once '../function/function.php';
    if(empty($_SESSION)) session_start();
	try {
		if (isset($_POST['work'])) {
			$editor = $_POST['ckeditor'];
			$category = $_POST['category'];
			$privacy = $_POST['privacy'];
			$title = $_POST['titles'];
			if (!empty($editor) && !empty($category) && !empty($privacy) && !empty($title)) {
				addWork($editor,$title,$category,$privacy,$_SESSION['user_id']);
				header('Location: ../work_space.php?work=success');
			}
		}
	} catch (PDOException $e) {
		$message = $e->getMessage(); 
	}
?>