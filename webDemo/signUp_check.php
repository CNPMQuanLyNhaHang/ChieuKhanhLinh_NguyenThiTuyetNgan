<?php 
session_start();
$conn = mysqli_connect("localhost", "root", "", "login");

if (isset($_POST['userName']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$user = validate($_POST['userName']);
    $pass = validate($_POST['password']);
    $re_pass = validate($_POST['re_password']);
    $name = validate($_POST['name']);

    $user_data = 'userName='. $user. '&name='. $name;
;

	if (empty($name)) {
		header("Location: signUp.php?error=Name is required&$user_data");
	    exit();
	}else if(empty($user)){
        header("Location: signUp.php?error=User Name is required&$user_data");
	    exit();
    }else if(empty($pass)){
        header("Location: signUp.php?error=Password is required&$user_data");
	    exit();
    }
    else if(empty($re_pass)){
        header("Location: signUp.php?error=Comfirm password is required&$user_data");
	    exit();
    }
    else if($pass !== $re_pass){
        header("Location: signUp.php?error=Password do not match&$user_data");
	    exit();
    }
    else{
        $pass = md5($pass);
        $sql = "SELECT * FROM users WHERE user_name='$user' ";
        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result) >0 ) {
            header("Location: signUp.php?error=Username already exists&$user_data");
            exit();
        } else {
            $sql2 = "INSERT INTO users(user_name, password, name) VALUES('$user', '$pass', '$name')";
            $result2 = mysqli_query($conn,$sql2);
            if ($result2) {
                header("Location: signUp.php?success=Your account has been created successfully!");
                exit();
            }else {
                header("Location: signup.php?error=Unknown error occurred&$user_data");
		        exit();
            }
        }
	}
}	
else{
	header("Location: signUp.php");
	exit();
}