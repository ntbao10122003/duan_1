<?php
include_once "../../connection.php";
$cart = $_GET['id'];

if($db->query("DELETE FROM cart WHERE id = $cart")){
    echo "xóa thành công";
}else{
    echo "lỗi";
}
?>
