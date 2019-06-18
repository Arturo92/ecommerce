<?php 
    include("config/config.php");
  
    session_start();

    $username = ""; $email = ""; $errors = array();
    
    if (isset($_POST['reg_user'])) { 
     $fname = mysqli_real_escape_string($db, $_POST['fname']); 
     $lname = mysqli_real_escape_string($db, $_POST['lname']); 
     $email = mysqli_real_escape_string($db, $_POST['email']); 
     $username = mysqli_real_escape_string($db, $_POST['username']); 
     $pword = mysqli_real_escape_string($db, $_POST['pword']);
     
     if (empty($fname)) { 
        array_push($errors, "First name is required"); 
        } 

    if (empty($lname)) { 
            array_push($errors, "Last name is required"); } 
            if (empty($email)) { array_push($errors, "Email is required"); }
             if (empty($username)) { 	array_push($errors, "Username is required"); } 
             if(empty($pword)){
                 array_push($errors, "Password is required");
             }
              $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1"; 
              $result = mysqli_query($db, $user_check_query); 
              $user = mysqli_fetch_assoc($result); if ($user) {
               if ($user['username'] === $username) { array_push($errors, "Username already exists"); } 
               if ($user['email'] === $email) { array_push($errors, "email already exists"); } } 
               if (count($errors) == 0) { 	
                   $password = md5($pword);
                   $query = "INSERT INTO users (Afname, lname, email, username, password) 			 VALUES('$fname', '$lname', '$email', '$username', '$password')"; 	    
                	mysqli_query($db, $query); 
                   $_SESSION['username'] = $username; 	$_SESSION['success'] = "You are now logged in"; 	header('location: ../index.php'); } } 
                		
                		
                		
    if (isset($_POST['login_user'])) {
         $username = mysqli_real_escape_string($db, $_POST['username']); 
         $password = mysqli_real_escape_string($db, $_POST['pword']);
             if (empty($username)) { 	array_push($errors, "Username is required"); }
             if (empty($password)) { 	array_push($errors, "Password is required"); }
                 if (count($errors) == 0) { 
                	$password = md5($password); 	
                	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'"; 	
                	$results = mysqli_query($db, $query);
    	            	if (mysqli_num_rows($results) == 1) { 	 $_SESSION['username'] = $username; 	 $_SESSION['success'] = "You are now logged in"; 	 
    	                	header('location: index.php'); 
	} else { 	
	array_push($errors, "Wrong username/password combination"); 
	} 
} 
}
 ?>