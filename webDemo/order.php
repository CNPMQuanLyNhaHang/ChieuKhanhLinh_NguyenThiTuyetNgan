<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "login");
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			header("Location: order.php?error=Item Already Add");
	    	exit();;
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
                header("Location: order.php?success=Item Removed!");
                exit();
			}
		}
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vietnamese food restaurant</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head> 
<body>
    <header>
        <a href="./home.php#banner" class="logo">FiFi<span>.</span></a>
        <ul class="navigation_menu">
            <li><a href="./home.php#about">About Us</a></li>
            <li><a href="./home.php#owner">Owner</a></li>
            <li><a href="./menu_lg.php">Menu</a></li>
            <li><a href="./order.php">Order</a></li>
			<li><a href="./book.php">Book</a></li>
            <li><a href="">Hello, <?php echo $_SESSION['name']; ?> </a></li>
            <li><a href="./logout.php">Logout</a></li>
        </ul>
    </header>
    <div class="menu" id="menu">
        <div class="title">
            <h2>Make <span>O</span>der</h2>
        </div>

        <div class="content">
		<?php
				$query = "SELECT * FROM tbl_product ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
		?>
		<form method="post" action="order.php?action=add&id=<?php echo $row["id"]; ?>">
            <div class="box">
                <div class="img">
				<img src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />
                </div>
                <div class="text">
				<h3><?php echo $row["name"]; ?> - <?php echo $row["price"]; ?>VND</h3>

				<input type="text" name="quantity" value="1" />
				<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
				<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>"/>
				<input type="submit" name="add_to_cart"  value="Add to Cart" style="width: 45%"/>
                </div>
			</div>
		</form>
			<?php
					}
				}
			?>
		
        <div class="title">
            <h2><span>O</span>der details</h2>
		</div>
		
		<table style="width:80%">
        	<?php if (isset($_GET['error'])) { ?>
     			<p class="error"><?php echo $_GET['error']; ?></p>
			<?php } ?>
			<?php if (isset($_GET['success'])) { ?>
     			<p class="success"><?php echo $_GET['success']; ?></p>
     		<?php } ?>
  			<tr>
				<th>Name</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Total</th>
				<th>Action</th>    			
			  </tr>
			  <?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td><?php echo number_format($values["item_price"], 0); ?>VND</td>
						<td><?php echo number_format($values["item_quantity"] * $values["item_price"], 0);?>VND</td>
						<td><a href="order.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right"><?php echo number_format($total, 0); ?>VND</td>
						<td></td>
					</tr>
					<?php
					}
					?>
		</table>	
		</div>
   


        <div class="title">
			<a href="./check_order.php" class="btn">Confirm Order</a>
		</div>
	</div>

    <div class="footer">
		<h2 class="logo">FiFi<span>.</span></h2>
			<p>Email: <a href="mailto:51800084@student.tdtu.edu.vn">51800084@student.tdtu.edu.vn</a><br />
			Student: Nguyễn Thị Tuyết Ngân <br>
			Email: <a href="mailto:518H0527@student.tdtu.edu.vn">518H0527@student.tdtu.edu.vn</a><br />
			Student: Chiêu Khánh Linh<p>          
    <div>
    <script type="text/javascript">
        window.addEventListener('scroll',function(){
            const header = document.querySelector('header');
            header.classList.toggle("sticky",window.scrollY > 0);
        });
    </script>
</body>  
</html>

<?php 
}else{
     header("Location: order.php");
     exit();
}
 ?>