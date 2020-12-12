<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>

<!DOCTYPE html>
<html>
<head>
    <title>Check Order</title>
    <link rel="stylesheet" href="styleLogin.css">
</head>
<body class="SignIn">
    <form action="order_check.php" method="post">
        <h2>Confirm Order</h2>
        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
         
        <?php if (isset($_GET['success'])) { ?>
     		<p class="success"><?php echo $_GET['success']; ?></p>
     	<?php } ?>

        <input type="text" name="" value="<?php echo $_SESSION['name']; ?>" readonly>
        <input type="text" name="phone_num" placeholder="Phone Number">
        <input type="text" name="address" placeholder="Address">
        <input type="text" name="note" placeholder="Note">
        <button type="submit">Confirm</button>

    </form>
</body>
</html>

<?php 
}else{
     header("Location: order.php");
     exit();
}
?>