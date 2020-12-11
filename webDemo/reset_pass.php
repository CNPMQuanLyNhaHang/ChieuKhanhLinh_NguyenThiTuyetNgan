<?php
	session_start();
    $conn = mysqli_connect("localhost", "root", "", "login");
	
?>
<!DOCTYPE html>
<html>
<head>
    <title>RESET PASSWORD</title>
    <link rel="stylesheet" href="styleLogin.css">
</head>
<body class="SignIn">
    <form action="" method="post">
        <h2>RESET PASSWORD</h2>
        <input type="password" name="new_pass" placeholder="New Password">
        <input type="password" name="con_pass" placeholder="Confirm Password">
        <input type="userName" name="userName" placeholder="Type your user name" required/>
        <button type="submit">Reset password</button>
        <a href="signIn.php" class="ca">Login!!</a>
        <?php
	if(isset($_POST["userName"])&&isset($_POST["new_pass"])&&isset($_POST["con_pass"])){
		$newpass=stripslashes($_REQUEST["new_pass"]);
		$newpass=mysqli_real_escape_string($conn,$newpass);
		
		$confirm=stripslashes($_REQUEST["con_pass"]);
		$confirm=mysqli_real_escape_string($conn,$confirm);
		
		$userName=stripslashes($_REQUEST["userName"]);
		$userName=mysqli_real_escape_string($conn,$userName);
		if($newpass==$confirm)
		{
			$pass=md5($newpass);
			$sql="update users set password='$pass' where user_name='$userName'";
			$result = $conn->query($sql);
			
			echo("your pass had been change please go to to login!!!");
			
		}

	}
?>
    </form>
</body>
</html>