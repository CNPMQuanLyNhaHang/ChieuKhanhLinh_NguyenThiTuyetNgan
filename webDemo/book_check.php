<?php 
session_start();
$conn = mysqli_connect("localhost", "root", "", "login");

if (isset($_POST['phone']) && isset($_POST['num_of_cus'])
    && isset($_POST['day']) && isset($_POST['time'])
    && isset($_POST['note'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
    
    $id = $_SESSION['id'];
	$phone = validate($_POST['phone']);
    $num_of_cus = validate($_POST['num_of_cus']);
    $day = validate($_POST['day']);
    $time = validate($_POST['time']);
    $note = validate($_POST['note']);

	if (empty($phone)) {
		header("Location: book.php?error=Phone is required");
        exit();
    }else if(empty($num_of_cus)){
        header("Location: book.php?error=Number of customer is required");
        exit();
    }else if(($num_of_cus)<0){
        header("Location: book.php?error=Number of customer is invalid");
        exit();
    }else if(empty($day)){
        header("Location: book.php?error=Day is required");
	    exit();
    }else if(empty($time)){
        header("Location: book.php?error= is required");
	    exit();
    }
    else{
        $sql = "INSERT INTO `book`(`id`, `phone`, `num_of_cus`, `day`, `time`, `note`) VALUES
        ($id, '$phone', '$num_of_cus','$day','$time','$note')";
        $result2 = mysqli_query($conn,$sql);
        echo '<script>alert("Your order has been recorded! Staff will contact you later! Thanks so much.")</script>';
        echo '<script>window.location="home.php"</script>';
	}
}	
else{
    header("Location: home.php");
	exit();
}