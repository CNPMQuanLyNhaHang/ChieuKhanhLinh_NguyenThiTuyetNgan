<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="styleLogin.css">
</head>
<body class="SignIn">
    <form action="signIn_check.php" method="post">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        <input type="text" name="userName" placeholder="User Name">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Login</button>
        <a href="signUp.php" class="ca">Create an account</a>
	    <a href="reset_pass.php" class="ca" style="float: right;">Forgot Password?</a>
    </form>
</body>
</html>