<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ordercss.css">
    <link rel="stylesheet" href="css/home_index.css">
    <!-- <script src="https://kit.fontawesome.com/da3f2c352c.js" crossorigin="anonymous"></script> -->
</head>

<style>
    body {
        background-image: url('https://wallpaperaccess.com/full/6191149.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }
</style>
<body>
<?php
include "connect_db/connect_db.php";
//    $user=[];
$user= (isset($_SESSION['user'])) ? $_SESSION['user']: [];
//    $user=$_SESSION['user'];
?>

<div class="menu cha" id="menu" style="margin-top:61px">
    <div class="menu cha" id="menu">
        <div class="page_name box_shadow"><a href="./home.html">BK Book Store</a></div>
        <form action=".#" id="search">

            <input type="search" name="s" id="search_text" placeholder="Book Name or Category">
        </form>
        <div class="chuc_nang box_shadow"><a href="./admin.php">ADMIN</a></div>
        <div class="chuc_nang box_shadow"><a href="order.php">List sản phẩm</a></div>
        <div class="chuc_nang box_shadow"><a href="./">Giỏ Hàng</a></div>
        <?php
        if(isset($user['tk'])){
            ?>
            <div class="chuc_nang box_shadow"><a href="logout.php">Đăng Xuất</a></div>
        <?php } else {?>

            <div class="chuc_nang box_shadow"><a href="login.php">Đăng Nhập</a></div>
        <?php }?>
    </div>
</div>
            <div class="container">
               <?php $result=mysqli_query($conn,"SELECT * FROM Book" );
//                $row=sqlsrv_fetch_array($result);

                ?>
                <?php while ($row=mysqli_fetch_array($result)){?>
                    <div class="bookContainer" id="book01">
                        <div class="bookImage" id="img01">&nbsp;</div>
                       <?php echo $row['book_name']?><br/>
                        <a><?php echo $row['price']?><br/></a>
                        <p class="bookEdition">Limited Edition</p>
                    </div>


                <?php } ?>
<!--                <div class="bookContainer" id="book01">-->
<!--                    <div class="bookImage" id="img01">&nbsp;</div>-->
<!--                    <p class="bookTitle">--><?//=$item['book_name']?><!--<br/>-->
<!--                    </p>-->
<!--                    <div class="bookPrice">--><?//=$item['price']?><!--</div>-->
<!--                    <p class="bookEdition">Limited Edition</p>-->
<!--                </div>-->

                <div class="bookContainer" id="book02">
                    <div class="bookImage" id="img02">&nbsp;</div>
                    "Omega Mountain" <br/>
                    Gregory C. Thompson <br/>
                    <a href="#">6.99 $</a>
                </div>

                <div class="bookContainer" id="book03">
                    <div class="bookImage" id="img03">&nbsp;</div>
                    "You Don't Have To Put On" <br/>
                    Scott Martin <br/>
                    <a href="#">4.50 $</a>
                </div>

                <div class="bookContainer" id="book04">
                    <div class="bookImage" id="img04">&nbsp;</div>
                    "Hoxkit" <br/>
                    Abraham Russo <br/>
                    <a href="#">1.75 $</a>
                </div>

                <div class="bookContainer" id="book05">
                    <div class="bookImage" id="img05">&nbsp;</div>
                    "My First Boeing" <br/>
                    Jake Schoppfer <br/>
                    <a href="#">9.99 $</a>
                </div>

                <div class="bookContainer" id="book06">
                    <div class="bookImage" id="img06">&nbsp;</div>
                    "The Commisariat" <br/>
                    Ivan Sazanov <br/>
                    <a href="#">5.40 $</a>
                </div>
                <div class="bookContainer" id="book06">
                    <div class="bookImage" id="img06">&nbsp;</div>
                    "The Commisariat" <br/>
                    Ivan Sazanov <br/>
                    <a href="#">5.40 $</a>
                </div>
                <div class="bookContainer" id="book06">
                    <div class="bookImage" id="img06">&nbsp;</div>
                    "The Commisariat" <br/>
                    Ivan Sazanov <br/>
                    <a href="#">5.40 $</a>
                </div>
                OppenBooken
            </div>
</body>