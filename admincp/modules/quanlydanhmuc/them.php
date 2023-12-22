<center><p>Thêm mới một danh mục</p></center>

<table align="center">
    <form method=POST action="modules/quanlydanhmuc/xuly.php" enctype="multipart/form-data">
        <tr>
            <td>Tên danh mục: </td>
            <td><input type="text" name="cname"></td>
        </tr>
        <tr>
            <td>Mô tả: </td>
            <td><textarea cols="41" rows="5" name=cdesc></textarea></td>
        </tr>
        <tr>
            <td>Ảnh: </td>
            <td><input type="file" name=cimage></td>
        </tr>
        <tr>
            <td>Thứ tự: </td>
            <td><input type="text" name=corder></td>
        </tr>
        <tr>
            <td>Trạng thái: </td>
            <td>
                <input type="radio" name="cstatus" value="1">Hoạt động
                <input type="radio" name="cstatus" value="0">Ngừng hoạt động
            </td>
        </tr>
        <tr>
            <td align="right"><input type="submit" value="Thêm" name="themdanhmuc"></td>
            <td><input type="reset" value="Hủy"></td>
        </tr>
    </form>
</table>