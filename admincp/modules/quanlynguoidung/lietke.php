
<?php
    $sql_lietke_nd = "select * from tbl_user";
    $query = mysqli_query($mysqli, $sql_lietke_nd);
?>
<table class="quanlynd" style="width: 100%"; border="1" style="border-collapse: collapse;"; >
    <tr>
        <th>Id</th>
        <th>Tên người dùng</th>
        <th>SĐT</th>
        <th>Email</th>
        <th>Mật khẩu</th>
        <th>Địa chỉ</th>
        <th>Trạng thái</th>
        <th>Quản lý</th>
    </tr>
    <?php
        while($row = mysqli_fetch_array($query)) {

    ?>
    <tr>
        <td><?php echo $row['uid']  ?></td>
        <td><?php echo $row['uname']  ?></td>
        <td><?php echo $row['uphone']  ?></td>
        <td><?php echo $row['uemail']  ?></td>
        <td><?php echo $row['upassword']  ?></td>
        <td><?php echo $row['uaddress']  ?></td>
        <td>
            <?php if($row['ustatus'] == 1) {
                echo("Hoạt động");
                $_SESSION['sua_ustatus'] = 'Khóa tài khoản';
            } else {
                echo("Ngừng hoạt động");
                $_SESSION['sua_ustatus'] = 'Mở khóa tài khoản';
            } ?>
        </td>
        <td>
            <a onclick="return xacNhanSua()" href="?action=quanlynguoidung&query=sua&uid=<?php echo $row['uid'] ?>"><?php echo $_SESSION['sua_ustatus'] ?></a>
            <a onclick="return xacNhanXoa()" href="?action=quanlynguoidung&query=xoa&uid=<?php echo $row['uid'] ?>">Xóa</a>
        </td>
    </tr>
    <?php
        }
    ?>