<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vietnamese food restaurant</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a href="#banner" class="logo">FiFi<span>.</span></a>
        <ul class="navigation">
            <li><a href="#about">About Us</a></li>
            <li><a href="#owner">Owner</a></li>
            <li><a href="./menu_lg.php">Menu</a></li>
            <li><a href="./order.php">Order</a></li>
            <li><a href="./book.php">Book</a></li>
            <li><a href="">Hello, <?php echo $_SESSION['name']; ?> </a></li>
            <li><a href="./logout.php">Logout</a></li>
        </ul>
    </header>

    <section class="banner" id="banner">
        <div class="content">
            <h2>Vietnamese food restaurant</h2>
            <p>Vietnamese restaurants with homeland style always bring a warm and delicate feeling in family meals
             and often evoke the memories of love in the hearts of diners.<br><br>
                At Fifi, the talented chef is now breathtaking in his soul through creative artistic decorations,
                 bringing the countryside to unique flavors,
                 both strange but also familiar</p>
            <a href="./menu_lg.php" class="btn">Our Menu</a>
        </div>
    </section>


    <section class="about" id="about">
        <div class="row">
            <div class="col">
                <h2 class="textTitle">About <span>U</span>s</h2>
                <p class="text">Coming to FiFi, you will enjoy dishes with bold flavors of 3 North 
                - Central - South with a rich and unique menu.<br><br>

                In addition, the FiFi restaurant regularly organizes conferences, parties, birthdays, negotiation 
                exchanges, family gatherings ... to serve all types of diners in need.<br><br>

                With the motto "please come, please go" we always try to improve the quality of service experience 
                and bring delicious dishes to customers. We hope to receive the attention and support of our customers.<br><br>

                Come to FiFi Restaurant - Vietnamese delicacies to enjoy the taste of traditional Vietnamese cuisine 
                in a luxurious space but full of closeness to nature in the heart of Saigon.
                </p>
            </div>
            <div class="col">
                <div class="img">
                    <img src="images/about.jpg">
                </div>
            </div>
        </div>
    </section>


    <section class="owner" id="owner">
        <div class="title Genshin">
            <h2 class="textTitle"><span>O</span>wner</h2>
            <p>
                "Vietnamese restaurant owner - Fifi. Founder, companionship and development."<br><br>
            </p>
        </div>
        <div class="content">

            <div class="box">
                <div class="img">
                    <img src="images/owner1.jpg">
                </div>
                <div class="text">
                    <p>
                        "FiFi has been created for more than 10 years, then I knew I was adventurous because I combined pure Vietnamese
                         dishes with modern service style in a completely new space, but I believe in my way and believe in the gourmet
                         food of a sophisticated group of customers, knowledgeable about nutrition and love Vietnamese cuisine."<br><br>
                    </p>
                    <h3>Klee</h3>
                </div>
            </div>

            <div class="box">
                <div class="img">
                    <img src="images/owner2.jpg">
                </div>
                <div class="text">
                    <p>
                        "2017 marked the beginning of Fifi becoming more popular with everyone, with the vision of becoming one of the
                         most beloved Vietnamese restaurants in Vietnam. Fifi will always honor and nurture a passion for delicate and
                         natural cuisine for all Vietnamese people."<br><br>
                    </p>
                    <h3>QIQI</h3>
                </div>
            </div>

        </div>
    </section>
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
     header("Location: index.php");
     exit();
}
?>