<?php
    $sql_xoa = "delete from tbl_user where uid = '$_GET[uid]'";
    mysqli_query($mysqli, $sql_xoa);
    header('Location:index.php?action=quanlynguoidung&query=lietke');
?>