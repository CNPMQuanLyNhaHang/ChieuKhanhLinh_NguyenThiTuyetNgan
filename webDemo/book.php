<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>


<!DOCTYPE html>
<html>
<head>
    <title>Book Now</title>
    <link rel="stylesheet" href="styleLogin.css">
</head>
<body class="SignIn">
    <form action="book_check.php" method="post">
        <h2>Book Now</h2>
        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
         
        <?php if (isset($_GET['success'])) { ?>
     		<p class="success"><?php echo $_GET['success']; ?></p>
     	<?php } ?>

   
        <input type="text" name="" value="<?php echo $_SESSION['name']; ?>" readonly>
        

        <input type="text" name="phone" placeholder="Phone Number">
        <input type="number" name="num_of_cus" placeholder="The Number Of Customer">
        <input type="date" name="day" placeholder="Day">
        <input type="time" name="time" placeholder="Time">
        <input type="text" name="note" placeholder="Note">
        <button type="submit">Confirm</button>
    </form>
</body>
</html>


<?php 
}else{
     header("Location: home.php");
     exit();
}
 ?>