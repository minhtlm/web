<?php
    $sql_sua = "update tbl_user set ustatus = !ustatus where uid = '$_GET[uid]'";
    mysqli_query($mysqli, $sql_sua);
    header('Location:index.php?action=quanlynguoidung&query=lietke');
?>