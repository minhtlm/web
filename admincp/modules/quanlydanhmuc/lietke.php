<?php
    $result = mysqli_query($mysqli, "select * from tbl_danhmuc");
?>
<center><a href="index.php?action=quanlydanhmuc&query=them">Thêm danh mục</a></center>
<table border="1px" style="width: 100%">
    <tr>
        <th>ID</th>
        <th>Tên danh mục</th>
        <th>Mô tả</th>
        <th>Ảnh</th>
        <th>Thứ tự</th>
        <th>Trạng thái</th>
        <th>Quản lý</th>
    </tr>
    <?php
        if($result->num_rows>0) {
            while($row = $result->fetch_assoc()) {
                if($_GET['query'] =='sua' && $row['cid'] == $_GET['cid']) {
    ?>
    <form onsubmit="return xacNhanSua()" action="modules/quanlydanhmuc/xuly.php?cid=<?php echo $row['cid'] ?>" method="post" enctype="multipart/form-data">
        <tr>
            <td><?php echo $row['cid'] ?></td>
            <td><input style="width: fit-content;" type="text" name="cname" value="<?php echo $row['cname'] ?>"></td>
            <td><textarea name="cdesc" rows="auto"><?php echo $row['cdesc'] ?></textarea></td>
            <td><input type="file" name="cimage" value="<?php echo $row['cimage'] ?>"></td>
            <td><input type="text" name="corder" value="<?php echo $row['corder'] ?>"></td>
            <td>
                <input type="radio" name="cstatus" value="1" <?php if($row['cstatus']==1) {echo "checked";}?>>Hoạt động
                <input type="radio" name="cstatus" value="0" <?php if($row['cstatus']==0) {echo "checked";}?>>Ngừng hoạt động
            </td>
            <td>
                <input type="submit" value="Cập nhật" name="capnhat">
                <button><a href="index.php?action=quanlydanhmuc&query=lietke" style="text-decoration: none;">Hủy</a></button>
            </td>
        </tr>
    </form>
    <?php 
                }
                else {
    ?>
    <tr>
        <td><?php echo $row['cid'] ?></td>
        <td><?php echo $row['cname'] ?></td>
        <td><?php echo $row['cdesc'] ?></td>
        <td><img width="250px" src="uploads/<?php echo $row['cimage'] ?>"></td>
        <td><?php echo $row['corder'] ?></td>
        <td>
            <?php if($row['cstatus'] == 1) { echo('Hoạt động');}
            elseif($row['cstatus'] == 0) echo('Ngừng hoạt động'); ?>
        </td>
        <td>
            <a href="?action=quanlydanhmuc&query=sua&cid=<?php echo $row['cid'] ?>">Sửa</a>
            <a onclick="return xacNhanXoa()" href="modules/quanlydanhmuc/xuly.php?cid=<?php echo $row['cid'] ?>">Xóa</a>
        </td>
    </tr>
    <?php
                }
            }
        }
    ?>
</table>
