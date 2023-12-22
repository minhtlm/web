<div class="content">
    <?php
        if(isset($_GET['action']) && $_GET['query']){
            $t = $_GET['action'];
            $query = $_GET['query'];
        }else{
            $t = '';
            $query = '';    
        }    
        if($t == 'quanlysanpham'&& $query == 'lietke'){
            include("modules/quanlysanpham/lietke.php");
        }elseif($t == 'quanlysanpham'&& $query == 'them'){
            include("modules/quanlysanpham/them.php");
            include("modules/quanlysanpham/lietke.php");
        }elseif($t == 'quanlysanpham'&& $query == 'sua'){
            include("modules/quanlysanpham/lietke.php");
        }elseif($t == 'quanlydonhang'&& $query == 'lietke'){
            include("modules/quanlydonhang/lietke.php");
        }elseif($t == 'chitietdonhang'&& $query == 'xemdonhang'){
            include("modules/quanlydonhang/chitietdonhang.php");
        }elseif($t == 'quanlybaiviet'&& $query == 'them'){
            include("modules/quanlybaiviet/them.php");
            include("modules/quanlybaiviet/lietke.php");
        }elseif($t == 'quanlybaiviet'&& $query == 'sua'){
            include("modules/quanlybaiviet/sua.php");
        }elseif($t == 'quanlydanhmuc'&& $query == 'lietke'){
            include("modules/quanlydanhmuc/lietke.php");
        }elseif($t == 'quanlydanhmuc'&& $query == 'them'){
            include("modules/quanlydanhmuc/them.php");
            include("modules/quanlydanhmuc/lietke.php");
        }elseif($t == 'quanlydanhmuc'&& $query == 'sua'){
            include("modules/quanlydanhmuc/lietke.php");
        }elseif($t == 'quanlynguoidung'&& $query == 'lietke'){
            include("modules/quanlynguoidung/lietke.php");
        }elseif($t == 'quanlynguoidung'&& $query == 'sua'){
            include("modules/quanlynguoidung/sua.php");
        }elseif($t == 'quanlynguoidung'&& $query == 'xoa'){
            include("modules/quanlynguoidung/xoa.php");
        }else{
            include("modules/dashboard.php");
        }       
    ?>
</div>
<script>
    function xacNhanSua() {
        if(confirm("Bạn chắc chắn muốn sửa?") == true) {return true}
        else {return false}
    }
    function xacNhanXoa() {
        if(confirm("Bạn chắc chắn muốn xóa?") == true) {return true}
        else {return false}
    }
</script>