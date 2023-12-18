<?php
    if(isset($_GET['dangxuat']) && $_GET['dangxuat'] ==1){
        unset($_SESSION['dangky']);
        unset($_SESSION['dangnhap']);
        unset($_SESSION['uid']);
    }
?>
<div class="header">
    <div class="SmallOne" style="align-self: stretch; padding-bottom: 16px; box-shadow: 0px 1px 0px #E5E5E5 !important">
        <div class="address" style="color: #808080; font-size: 12px;">Store Location: 59 Giai Phong, Hanoi</div>
    </div>
    <div class="bannertop1">
        <img src="images/bannertop.webp">
    </div>
    <div class="bannertop2">
        <?php
            if(isset($_SESSION['dangky'])){
                echo '<p style="color:red;">Xin chào '.$_SESSION['dangky'].'!</p>';
                echo '<p><a style="color:black;" href="?dangxuat=1">Đăng xuất</a></p>';
            }elseif(isset($_SESSION['dangnhap'])){
                echo '<p style="color:red;">Xin chào '.$_SESSION['dangnhap'].'!</p>';
                echo '<p><a style="color:black;" href="?dangxuat=1">Đăng xuất</a></p>';
            }else{
                echo '<p><a href="?quanly=dangky">Đăng ký</a></p>';
                echo '<p><a href="?quanly=dangnhap">Đăng nhập</a></p>';
            }
        ?>      
    </div>
</div>