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
        <a href="./index.php#banner" class="logo">FiFi<span>.</span></a>
        <ul class="navigation_menu">
            <li><a href="./index.php#about">About Us</a></li>
            <li><a href="./index.php#owner">Owner</a></li>
            <li><a href="./menu.php">Menu</a></li>
            <li><a href="./signIn.php">Order</a></li>
            <li><a href="./signIn.php">Book</a></li>
            <li><a href="./signIn.php">Login</a></li>
        </ul>
    </header>
    <div class="menu" id="menu">
        <div class="title">
            <h2><span>M</span>enu</h2>
            <p>Vietnamese culinary culture is very rich and varied from the way it is processed to the taste of the food.
                Each region on this S-shaped strip of land has its own distinctive dishes that cannot be mixed.<br></p>
            <p>With Vietnamese restaurant - Fifi discover the uniqueness of Vietnamese cuisine through the menu
                 with outstanding traditional dishes of Vietnamese cuisine.</p><br>
        </div>


        <div class="content">
            <div class="box">
                <div class="img">
                    <img src="images/menu1.jpg">
                </div>
                <div class="text">
                    <h3>Com Tam- 30.000VND</h3>
                </div>
            </div>
            <div class="box">
                <div class="img">
                    <img src="images/menu2.jpg">
                </div>
                <div class="text">
                    <h3>Goi Cuon - 30.000VND</h3>
                </div>
            </div>
            <div class="box">
                <div class="img">
                    <img src="images/menu3.jpg">
                </div>
                <div class="text">
                    <h3>Chao Long - 40.000VND</h3>
                </div>
            </div>        
        </div>


        <div class="content">
            <div class="box">
                <div class="img">
                    <img src="images/menu4.jpg">
                </div>
                <div class="text">
                    <h3>Mi Go- 35.000VND</h3>
                </div>
            </div>
            <div class="box">
                <div class="img">
                    <img src="images/menu5.jpg">
                </div>
                <div class="text">
                    <h3>Bun Rieu - 55.000VND</h3>
                </div>
            </div>
            <div class="box">
                <div class="img">
                    <img src="images/menu6.PNG">
                </div>
                <div class="text">
                    <h3>Bun Mam - 50.000VND</h3>
                </div>
            </div>        
        </div>


        <div class="content">
            <div class="box">
                <div class="img">
                    <img src="images/menu7.jpg">
                </div>
                <div class="text">
                    <h3>Banh Mi - 30.000VND</h3>
                </div>
            </div>
            <div class="box">
                <div class="img">
                    <img src="images/menu8.png">
                </div>
                <div class="text">
                    <h3>Hu Tieu Bo Kho - 50.000VND</h3>
                </div>
            </div>
            <div class="box">
                <div class="img">
                    <img src="images/menu9.jpg">
                </div>
                <div class="text">
                    <h3>Banh Xeo - 60.000VND</h3>
                </div>
            </div>        
        </div>
        <div class="content">
            <div class="box">
                <div class="img">
                    <img src="images/menu10.jpg">
                </div>
                <div class="text">
                    <h3>Che Troi Nuoc - 45.000VND</h3>
                </div>
            </div>
        </div>

        <div class="title">
            <a href="./signIn.php" class="btn">Make Order</a>
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