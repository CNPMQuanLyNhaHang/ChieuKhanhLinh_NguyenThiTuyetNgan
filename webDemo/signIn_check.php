<?php 
session_start();
$conn = mysqli_connect("localhost", "root", "", "login");

if (isset($_POST['userName']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$user = validate($_POST['userName']);
	$pass = validate($_POST['password']);

	if (empty($user)) {
		header("Location: signIn.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: signIn.php?error=Password is required");
	    exit();
	}else{
		$pass = md5($pass);
        $sql = "SELECT * FROM users WHERE user_name='$user' AND password='$pass'";
		$result = mysqli_query($conn,$sql);
		
		if (mysqli_num_rows($result) ===1 ) {
			$row = mysqli_fetch_assoc($result);
			if ($row['user_name'] === $user && $row['password'] === $pass){
				$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
				$_SESSION['id'] = $row['id'];
				header("Location: home.php");
				exit();
			}else {
				header("Location: signIn.php?error=Username or password is incorect");
				exit();
			}

		}else {
			header("Location: signIn.php?error=Username or password is incorect");
			exit();
		}
	}
}	
else{
	header("Location: signIn.php");
	exit();
}