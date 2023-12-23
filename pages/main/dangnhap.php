<?php
    if(isset($_POST['dangnhap'])){
        $uemail = $_POST['email'];
        $upassword = ($_POST['password']);
        $sql = "SELECT * FROM tbl_user WHERE uemail='".$uemail."' ";
        $result = mysqli_query($mysqli,$sql);
        $row = mysqli_fetch_array($result);
        if($upassword == '') {
            echo '<p style="font-size:25px; color:red">Email hoặc mật khẩu không đúng. Vui lòng đăng nhập lại</p>';
        }
        elseif($result->num_rows > 0) {
            if(password_verify($upassword, $row['upassword'])){
                $_SESSION['dangnhap'] = $row['uname'];
                $_SESSION['uid'] = $row['uid'];
                header('Location:index.php');
            }
        }else{
            echo '<p style="font-size:25px; color:red">Email hoặc mật khẩu không đúng. Vui lòng đăng nhập lại</p>';
        }
    }
?>
<form method="POST" action="" autocomplete="off">    
    <h1>ĐĂNG NHẬP</h1>
    <table class="log">

        <tr>
            <td>Email:</td>
            <td><input type="text" name="email" ></td>
        </tr>
        <tr>
            <td>Mật khẩu:</td>
            <td><input type="password" name="password" ></td>
        </tr>

    </table>
    <p class="dangnhap-button"><input type="submit" name="dangnhap" value="Đăng nhập"></p>
</form>