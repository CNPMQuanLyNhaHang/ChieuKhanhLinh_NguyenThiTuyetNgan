<!DOCTYPE html>
<html>
<head>
    <title>SIGN UP</title>
    <link rel="stylesheet" href="styleLogin.css">
</head>
<body class="SignIn">
    <form action="signUp_check.php" method="post">
        <h2>Register</h2>
        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
         
        <?php if (isset($_GET['success'])) { ?>
     		<p class="success"><?php echo $_GET['success']; ?></p>
     	<?php } ?>

        <?php if (isset($_GET['name'])) { ?>
             <input type="text" 
                    name="name" 
                    placeholder="Name"
                    value="<?php echo $_GET['name']; ?>">
     	<?php }else{ ?>
            <input type="text" name="name" placeholder="Name">
        <?php }?>

        
        <?php if (isset($_GET['userName'])) { ?>
             <input type="text" 
                    name="userName" 
                    placeholder="User Name"
                    value="<?php echo $_GET['userName']; ?>">
     	<?php }else{ ?>
            <input type="text" name="userName" placeholder="User Name">
        <?php }?>


        <input type="password" name="password" placeholder="Password">
        <input type="password" name="re_password" placeholder="Comfirm Password">
        <button type="submit">Register</button>
        <a href="signIn.php" class="ca">Have an account?</a>
    </form>
</body>
</html>