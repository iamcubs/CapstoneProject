<?php

	function db(){
		return new PDO("mysql:host=localhost; dbname=max;","root","");
	}
	
	////////INSERT
	function addUser($fname,$mname,$lname,$address,$bdate,$email,$contact,$profession,$username,$password,$repass,$dateStarted,$status){
		$db = db();
			$user = "INSERT INTO users(fname,mname,lname,address,birthdate,email,contact,profession,username,password,repass,dateStarted,status) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";
			$s = $db->prepare($user);
		$s->execute(array($fname,$mname,$lname,$address,$bdate,$email,$contact,$profession,$username,$password,$repass,$dateStarted,$status));
		$db = null;
	}

	function addPost($post,$status,$school,$dept,$datePosted,$timePosted,$userID){
		$db = db();
			$posting = "INSERT INTO posts(post,status,school,dept,date_posted,time_posted,user_id) VALUES(?,?,?,?,?,?,?)";
			$s = $db->prepare($posting);
			$s->execute(array($post,$status,$school,$dept,$datePosted,$timePosted,$userID));
		$db = null;
	}

	function addNote($title,$note,$datePosted,$timePosted,$user_id){
		$db = db();
			$notes = "INSERT INTO notes(title,note,date_posted,time_posted,user_id) VALUES(?,?,?,?,?)";
			$s = $db->prepare($notes);
			$s->execute(array($title,$note,$datePosted,$timePosted,$user_id));
		$db = null;
	}

	function addImage($filename,$user_id,$status){
		$db = db();
			$images = "INSERT INTO images(filename,user_id,status) VALUES(?,?,?)";
			$s = $db->prepare($images);
			$s->execute(array($filename,$user_id,$status));
		$db = null;
	}

	function addWork($content,$title,$category,$privacy,$user_id){
		$db = db();
			$works = "INSERT INTO works(content,title,category,privacy,user_id) VALUES(?,?,?,?,?)";
			$s = $db->prepare($works);
			$s->execute(array($content,$title,$category,$privacy,$user_id));
		$db = null;
	}

	///////SELECT
	function user_login($username, $password){
		try{
			$db = db();
				$query = "SELECT * FROM users WHERE username = :username AND password = :password";  
				$statement = $db->prepare($query);  
	            $statement->execute(  
	                 array(  
	                      'username' => $username,  
	                      'password' => $password  
	                 )  
	            ); 
	            $row = $statement->fetch(PDO::FETCH_ASSOC); 
	            $count = $statement->rowCount();  
	            if($count > 0){  
	                 $_SESSION["user_id"] = $row["user_id"]; 
	                 header("location:../home.php?home/".$row["fname"]."".$row["lname"]);  
	            }  
			$db = null;
			}
		catch(PDOException $e){
			echo $e->getMessage();
		}	
	}

	function search($search){
		$db = db();
			$sql = "SELECT * FROM posts WHERE (school LIKE '".$search."%' OR dept LIKE '".$search."%')";
			$s = $db->query($sql)->fetchAll();
		$db = null;
		return $s;
	}

	function return_user(){
		$db = db();
			$sql = "SELECT * FROM users";
			$s = $db->query($sql);
			$user = $s->fetchAll();
		$db = null;
		return $user;
	}

	function return_post(){
		$db = db();
			$sql = "SELECT * FROM posts ORDER BY post_id desc";
			$s = $db->query($sql);
			$post = $s->fetchAll();
		$db = null;
		return $post;
	}

	function return_post_privacy(){
		$db = db();
			$sql = "SELECT * FROM users
			INNER JOIN posts ON users.user_id = posts.user_id
			WHERE posts.status = 'Public'
			ORDER BY posts.post_id desc";	
			$s = $db->query($sql);
			$user = $s->fetchAll();
			$db = null;
		return $user;
	}

	function return_post_public(){
		$db = db();
			$sql = "SELECT * FROM users
			INNER JOIN posts ON users.user_id = posts.user_id
			ORDER BY posts.post_id desc";	
			$s = $db->query($sql);
			$user = $s->fetchAll();
			$db = null;
		return $user;
	}

	function return_note(){	
		$db = db();
			$sql = "SELECT * FROM notes ORDER BY note_id desc";
			$s = $db->query($sql);
			$notes = $s->fetchAll();
		$db = null;
		return $notes;
	}

	function return_work(){
		$db = db();
			$sql = "SELECT * FROM works";
			$s = $db->query($sql);
			$works = $s->fetchAll();
		$db = null;
		return $works;
	}

	function return_images(){	
		$db = db();
			$sql = "SELECT * FROM images
			WHERE images.status = 1";
			$s = $db->query($sql);
			$images = $s->fetchAll();
		$db = null;
		return $images;
	}

	///////UPDATE
	function user_update($fname,$mname,$lname,$address,$birthdate,$email,$contact,$profession,$user_id){
		$db = db();
			$sql = "UPDATE users SET fname = ?, mname = ?, lname = ?, address = ?, birthdate = ?, email = ?, contact = ?, profession = ? WHERE user_id = ?";
			$s = $db->prepare($sql);
			$s->execute(array($fname,$mname,$lname,$address,$birthdate,$email,$contact,$profession,$user_id));
		$db = null;
	}

	function post_update($post,$status,$school,$dept,$date_posted,$time_posted,$post_id){
		$db = db();
			$sql = "UPDATE posts SET post = ?, status = ?, school = ?, dept = ?, date_posted = ?, time_posted = ? WHERE post_id = ?";
			$s = $db->prepare($sql);
			$s->execute(array($post,$status,$school,$dept,$date_posted,$time_posted,$post_id));
		$db = null;
	}

	function note_update($title,$note,$date_posted,$time_posted,$note_id){
		$db = db();
			$sql = "UPDATE notes SET title = ?, note = ?, date_posted = ?, time_posted = ? WHERE note_id = ?";
			$s = $db->prepare($sql);
			$s->execute(array($title,$note,$date_posted,$time_posted,$note_id));
		$db = null;
	}

	function image_update($status,$image_id){
		$db = db();
			$sql = "UPDATE images SET status = ? WHERE image_id = ?";
			$s = $db->prepare($sql);
			$s->execute(array($status,$image_id));
		$db = null;
	}

	//////DELETE
	function deletePost($id){
	    $db = db();
	        $sql = "DELETE FROM posts WHERE post_id = ?";
	        $s = $db->prepare($sql);
	        $s->execute(array($id));
	    $db = null;
	}

	function deleteNote($id){
	    $db = db();
	        $sql = "DELETE FROM notes WHERE note_id = ?";
	        $s = $db->prepare($sql);
	        $s->execute(array($id));
	    $db = null;
	}
?>