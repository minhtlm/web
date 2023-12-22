<?php
    $sql_lietke_sp = "SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.cid = tbl_danhmuc.cid ORDER BY pid DESC";
    $query_lietke = mysqli_query($mysqli, $sql_lietke_sp);

?>
<center><a href="index.php?action=quanlysanpham&query=them">Thêm mới sản phẩm</a></center>
<table class="quanlysp" style="width: 100%"; border="1" style="border-collapse: collapse;"; >
    <tr>
        <th>Id</th>
        <th>Tên sản phẩm</th>
        <th>Giá sản phẩm</th>
        <th>Số lượng</th>
        <th>Danh mục</th>
        <th>Trạng thái</th>
        <th style="width:250px";>Ảnh sản phẩm</th>
        <th>Quản lý</th>
    </tr>
    <?php
        if($query_lietke->num_rows>0) {
            while($row = $query_lietke->fetch_assoc()) {
                if($_GET['query'] =='sua' && $row['pid'] == $_GET['pid']) {
    ?>
    <form onsubmit="return xacNhanSua()" action="modules/quanlysanpham/xuly.php?pid=<?php echo $row['pid'] ?>" method="post" enctype="multipart/form-data">
        <tr>
            <td><?php echo $row['pid'] ?></td>
            <td><input style="width: fit-content;" type="text" name="pname" value="<?php echo $row['pname'] ?>"></td>
            <td><input type="text" name="pprice" value="<?php echo $row['pprice'] ?>"></td>
            <td><input type="text" name="pquantity" value="<?php echo $row['pquantity'] ?>"></td>
            <td>
                <select name="cid">
                    <?php
                    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY cid DESC";
                    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                        while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){     
                            if($row_danhmuc['cid'] == $row['cid']){  
                    ?>
                    <option selected value="<?php echo $row_danhmuc['cid'] ?>"><?php echo $row_danhmuc['cname'] ?></option>
                    <?php
                            }else{   
                    ?> 
                    <option value="<?php echo $row_danhmuc['cid'] ?>"><?php echo $row_danhmuc['cname'] ?></option>
                    <?php            
                            }   
                    ?>
                    <?php
                        }
                    ?>
                </select>
            </td>
            <td>
                <input type="radio" name="pstatus" value="1" <?php if($row['pstatus']==1) {echo "checked";}?>>Hoạt động<br>
                <input type="radio" name="pstatus" value="0" <?php if($row['pstatus']==0) {echo "checked";}?>>Ngừng hoạt động
            </td>
            <td><input type="file" name="pimage" value="<?php echo $row['pimage'] ?>"></td>
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
        <td> <?php echo $row['pid'] ?></td>
        <td> <?php echo $row['pname'] ?></td>
        <td> <?php echo $row['pprice']."vnd" ?></td>
        <td> <?php echo $row['pquantity'] ?></td>
        <td> <?php echo $row['cname'] ?></td>
        <td> <?php if( $row['pstatus'] == 1){
                echo 'Kích hoạt';    
            }else{
                echo 'Ẩn';
            }
        ?>
        </td>
        <td><img width="250px" src="uploads/<?php echo $row['pimage'] ?>"></td>
        <td>
            <a href="?action=quanlysanpham&query=sua&pid=<?php echo $row['pid'] ?>">Sửa</a>|
            <a onclick="return xacNhanXoa()" href="modules/quanlysanpham/xuly.php?pid=<?php echo $row['pid'] ?>">Xóa</a> 
        </td>
    </tr>
    <?php
        }
        }
    }
    ?>
</table>