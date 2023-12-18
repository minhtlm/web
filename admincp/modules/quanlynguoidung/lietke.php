
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
    </tr>
    <?php
        }
    ?>