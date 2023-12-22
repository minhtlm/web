<?php
    include('../../config/config.php');
    $cid = $_GET['cid'];
    $cname = $_POST['cname'];
    $cdesc = $_POST['cdesc'];
    $cimage = $_FILES['cimage']['name'];
    $cimage_tmp = $_FILES['cimage']['tmp_name'];
    $corder = $_POST['corder'];
    $cstatus = $_POST['cstatus'];
    
    //them
    if(isset($_POST['themdanhmuc'])) {
        $sql_them = "insert into tbl_danhmuc(cname, cdesc, cimage, corder, cstatus) values ('$cname', '$cdesc', '$cimage', $corder, $cstatus)";
        mysqli_query($mysqli, $sql_them);
        move_uploaded_file($cimage_tmp, '../../uploads/'.$cimage);
        header("Location:../../index.php?action=quanlydanhmuc&query=lietke");
    }

    //sua
    elseif(isset($_POST['capnhat'])) {
        if($cimage == '') {
            $sql_sua = "update tbl_danhmuc set cname = '$cname', cdesc = '$cdesc', corder = $corder, cstatus = $cstatus where cid = $cid";
        }
        else {
            move_uploaded_file($cimage_tmp, '../../uploads/'.$cimage);
            $result = mysqli_query($mysqli, "select * from tbl_danhmuc where cid = $cid");
            while($row = $result->fetch_assoc()) {
                unlink('../../uploads/'.$row['cimage']);
            }
            $sql_sua = "update tbl_danhmuc set cname = '$cname', cdesc = '$cdesc', cimage = '$cimage', corder = $corder, cstatus = $cstatus where cid = $cid";
        }
        mysqli_query($mysqli, $sql_sua);
        header("Location:../../index.php?action=quanlydanhmuc&query=lietke");
    }

    //xoa
    else {
        $sql_xoa = "delete from tbl_danhmuc where cid = $cid";
        mysqli_query($mysqli, $sql_xoa);
        header("Location:../../index.php?action=quanlydanhmuc&query=lietke");
    }
?>