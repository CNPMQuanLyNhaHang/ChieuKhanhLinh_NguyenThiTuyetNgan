<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "login");

if (isset($_POST['phone_num']) && isset($_POST['address'])
    && isset($_POST['note'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
 
    $id = $_SESSION['id'];
    $phone_num = validate($_POST['phone_num']);
    $address = validate($_POST['address']);
    $note = validate($_POST['note']);
    if (empty($phone_num)) {
        header("Location: check_order.php?error=Phone is required");
        exit();
    }else if(empty($address)){
        header("Location: check_order.php?error=Address is required");
        exit();
    }
    else{
        $sql = "INSERT INTO `checkorder`(`id`, `phone_num`, `address`, `note`) VALUES ($id, '$phone_num', '$address','$note')";
        $result2 = mysqli_query($conn,$sql);
        echo '<script>alert("Your order has been recorded! Staff will contact you later! Thanks so much.")</script>';
        echo '<script>window.location="home.php"</script>';
    }
}else{
    header("Location: home.php");
	exit();
}
    ?>