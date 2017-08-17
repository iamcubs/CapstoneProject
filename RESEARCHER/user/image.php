<?php
	require_once '../function/function.php';
    if(empty($_SESSION)) session_start();
	try {
		if (isset($_POST['image'])) {
			$imgFile = $_FILES['user_image']['name'];
			$tmp_dir = $_FILES['user_image']['tmp_name'];
			$imgSize = $_FILES['user_image']['size'];

			$upload_dir = '../user_images/'; // upload directory
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
			// rename uploading image
			$userpic = rand(1000,1000000).".".$imgExt;
			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions)){			
				// Check file size '5MB'
				if($imgSize < 5000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				}
				else{
					$errMSG = "Sorry, your file is too large.";
				}
			}
			else{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
			}

			// if no error occured, continue ....
			if(!isset($errMSG)){
				$status = 0;
				$imagessss = return_images();
				foreach ($imagessss as $i) { 
					if ($_SESSION['user_id'] == $i['user_id']) {
						image_update($status,$i['image_id']); 
					}	
				}
				$status = 1;
				addImage($userpic,$_SESSION['user_id'],$status);
				echo '<script>';
				echo 'alert("Profile Picture Successfuly Change. Thank you!");';
				echo 'window.location.href="../profile.php?user=image";';
				echo '</script>';
			}
		}
	} catch (PDOException $e) {
		$message = $e->getMessage(); 
	}
?>