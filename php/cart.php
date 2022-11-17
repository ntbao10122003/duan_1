<?php
include "../connection.php";
$user = "2";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="../css/gd_giohang.css">
    <!-- <link rel="stylesheet" href="../index.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS only -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <a href="../index.html"><img src="../img/logo_header_logo_logo.png" alt=""></a>

            </div>
            <div class="search">
                <form action="" method="POST">
                    <input type="text" name="search_sp" id="" class="search_sp" placeholder="Tìm kiếm sản phẩm.....">
                    <button name="btn_search_sp" class="btn_search_sp" style="padding: 7px 10px;"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="cart">
                <a href="gio_hang/gd_giohang.html"><i class="fas fa-shopping-cart"></i> Giỏ hàng (1)</a>
            </div>
            <div class="login_register">
                <i class="fas fa-user-circle"></i><a href="../form/formdangki.html">Đăng ký</a>
                <p>||</p> <a style="margin-left: 5px;" href="">Đăng nhập</a>
            </div>
        </div>

        <div class="listmenu">
            <div class="title">
                <div class="list"><i class="fas fa-bars"></i>
                    <p>DANH MỤC SẢN PHẨM</p>
                </div>
                <ul class="ul">
                    <li><a href=""><i class="fas fa-mobile-alt"></i>Iphone</a></li>
                    <li><a href=""><i class="fas fa-mobile-alt"></i>Iphone</a></li>
                    <li><a href=""><i class="fas fa-mobile-alt"></i>Iphone</a></li>
                    <li><a href=""><i class="fas fa-mobile-alt"></i>Iphone</a></li>
                </ul>
            </div>
            <div class="advertisement">
                <i class="fas fa-check-circle"></i>
                <p>100% chính hãng</p>
            </div>
            <div class="advertisement">
                <i class="fas fa-funnel-dollar"></i>
                <p>Giá ưu đãi nhất</p>
            </div>
            <div class="advertisement">
                <i class="fas fa-car-side"></i>
                <p>Miễn phí vận chuyển</p>
            </div>
            <div class="advertisement">
                <i class="fas fa-thumbs-up"></i>
                <p>Bảo hành nơi sử dụng</p>
            </div>
        </div>

        <div class="ships">
            <div class="box-ships">
                <i class="fas fa-car-side"></i>
                <p>Giao hàng miễn phí !!!</p>
            </div>
        </div>











        <form id="cart-form" action="cart.php?action=submit" method="POST">
            <table>
                <tr>
                    <th class="id">ID</th>
                    <th class="product-name">Tên sản phẩm</th>
                    <th class="product-img">Ảnh sản phẩm</th>
                    <th class="product-color">Màu Sắc</th>
                    <th class="product-price">Đơn giá</th>
                    <th class="product-quantity">Số lượng</th>
                    <th class="total-money">Thành tiền</th>
                    <th class="product-delete">Xóa</th>
                </tr>

                <?php
                $tong=0;
                foreach ($db->fetch_assoc("select * from cart where `iduser` = '" . $user . "'", 0) as $data) {
                    $tong += $data['price'];
                ?>

                    <tr>
                        <td class="id"><?= $data["id"] ?></td>
                        <td class="product-name"><?= $data["name"] ?></td>
                        <td class="product-img"><img src="../img/<?= $data['img'] ?>"></td>
                        <td class="product-color">
                            <select name="" id="">
                                <option value="">đỏ</option>
                                <!-- <option value="">đen</option>
                                <option value="">vàng</option> -->
                            </select>
                        </td>
                        <td class="product-price" id="old_price" value="<?= $data['price'] ?>"><?= currency_format($data['price']) ?></td>
                        <td class="product-quantity"><input id="sl" onkeyup="tinh();" type="number" value="1" disabled></td>
                        <td class="total-money" id="new_price" value=""><?= currency_format($data['price']) ?></td>
                        <td class="product-delete"><button onclick="confirm('bạn có muốn xóa ko '); xoa(<?= $data['id'] ?>);">xóa</button></td>
                    </tr>

                <?php

                }
                ?>



                <tr id="row-total">
                    <td class="product-number">&nbsp;</td>
                    <td class="product-name">Tổng tiền</td>
                    <td class="product-img">&nbsp;</td>
                    <td class="product-color"></td>
                    <td class="product-price">&nbsp;</td>
                    <td class="product-quantity">&nbsp;</td>
                    <td class="total-money"><?= number_format($tong, 0, ",", ".") ?> </td>
                    <td class="product-submit" style="text-align: center;"><input style="width:80%; background-color: red; color: white; border-radius: 10px;border: none;" type="submit" name="cart"></td>
                </tr>
            </table>

        </form>




















        <!-- -- sp khác --  -->
        <div class="khac">
            <div class="khac-content">
                <h5>CÓ THỂ BẠN CŨNG THÍCH </h5>
                <a href=""> xem tất cả >></a>
            </div>
            <div class="product1">
                <img src="../img/250_47384_596281937.jpeg" alt="">
                <p class="title-name">Điện thoại Nokia 105 4G-Đen</p>
                <div class="price">
                    <p>Giá niêm yết :</p><strong>750.000 đ</strong>
                </div>
                <div class="price-real">
                    <p>Giá bán :</p><strong>750.000 đ</strong>
                </div>
                <div class="status-product">
                    <!-- <i class="fas fa-check-circle"></i> -->
                    <a href="">xem ngay</a>
                </div>

            </div>
            <div class="product1">
                <img src="../img/250_47384_596281937.jpeg" alt="">
                <p class="title-name">Điện thoại Nokia 105 4G-Đen</p>
                <div class="price">
                    <p>Giá niêm yết :</p><strong>750.000 đ</strong>
                </div>
                <div class="price-real">
                    <p>Giá bán :</p><strong>750.000 đ</strong>
                </div>
                <div class="status-product">
                    <!-- <i class="fas fa-check-circle"></i> -->
                    <a href="">xem ngay</a>
                </div>

            </div>
            <div class="product1">
                <img src="../img/250_47384_596281937.jpeg" alt="">
                <p class="title-name">Điện thoại Nokia 105 4G-Đen</p>
                <div class="price">
                    <p>Giá niêm yết :</p><strong>750.000 đ</strong>
                </div>
                <div class="price-real">
                    <p>Giá bán :</p><strong>750.000 đ</strong>
                </div>
                <div class="status-product">
                    <!-- <i class="fas fa-check-circle"></i> -->
                    <a href="">xem ngay</a>
                </div>

            </div>
            <div class="product1">
                <img src="../img/250_47384_596281937.jpeg" alt="">
                <p class="title-name">Điện thoại Nokia 105 4G-Đen</p>
                <div class="price">
                    <p>Giá niêm yết :</p><strong>750.000 đ</strong>
                </div>
                <div class="price-real">
                    <p>Giá bán :</p><strong>750.000 đ</strong>
                </div>
                <div class="status-product">
                    <!-- <i class="fas fa-check-circle"></i> -->
                    <a href="">xem ngay</a>
                </div>

            </div>
            <div class="product1">
                <img src="../img/250_47384_596281937.jpeg" alt="">
                <p class="title-name">Điện thoại Nokia 105 4G-Đen</p>
                <div class="price">
                    <p>Giá niêm yết :</p><strong>750.000 đ</strong>
                </div>
                <div class="price-real">
                    <p>Giá bán :</p><strong>750.000 đ</strong>
                </div>
                <div class="status-product">
                    <!-- <i class="fas fa-check-circle"></i> -->
                    <a href="">xem ngay</a>
                </div>

            </div>
            <div class="product1">
                <img src="../img/250_47384_596281937.jpeg" alt="">
                <p class="title-name">Điện thoại Nokia 105 4G-Đen</p>
                <div class="price">
                    <p>Giá niêm yết :</p><strong>750.000 đ</strong>
                </div>
                <div class="price-real">
                    <p>Giá bán :</p><strong>750.000 đ</strong>
                </div>
                <div class="status-product">
                    <!-- <i class="fas fa-check-circle"></i> -->
                    <a href="">xem ngay</a>
                </div>

            </div>
            <div class="product1">
                <img src="../img/250_47384_596281937.jpeg" alt="">
                <p class="title-name">Điện thoại Nokia 105 4G-Đen</p>
                <div class="price">
                    <p>Giá niêm yết :</p><strong>750.000 đ</strong>
                </div>
                <div class="price-real">
                    <p>Giá bán :</p><strong>750.000 đ</strong>
                </div>
                <div class="status-product">
                    <!-- <i class="fas fa-check-circle"></i> -->
                    <a href="">xem ngay</a>
                </div>

            </div>
            <div class="product1">
                <img src="../img/250_47384_596281937.jpeg" alt="">
                <p class="title-name">Điện thoại Nokia 105 4G-Đen</p>
                <div class="price">
                    <p>Giá niêm yết :</p><strong>750.000 đ</strong>
                </div>
                <div class="price-real">
                    <p>Giá bán :</p><strong>750.000 đ</strong>
                </div>
                <div class="status-product">
                    <!-- <i class="fas fa-check-circle"></i> -->
                    <a href="">xem ngay</a>
                </div>

            </div>

            <div class="product1">
                <img src="../img/250_47384_596281937.jpeg" alt="">
                <p class="title-name">Điện thoại Nokia 105 4G-Đen</p>
                <div class="price">
                    <p>Giá niêm yết :</p><strong>750.000 đ</strong>
                </div>
                <div class="price-real">
                    <p>Giá bán :</p><strong>750.000 đ</strong>
                </div>
                <div class="status-product">
                    <!-- <i class="fas fa-check-circle"></i> -->
                    <a href="">xem ngay</a>
                </div>

            </div>

            <div class="product1">
                <img src="../img/250_47384_596281937.jpeg" alt="">
                <p class="title-name">Điện thoại Nokia 105 4G-Đen</p>
                <div class="price">
                    <p>Giá niêm yết :</p><strong>750.000 đ</strong>
                </div>
                <div class="price-real">
                    <p>Giá bán :</p><strong>750.000 đ</strong>
                </div>
                <div class="status-product">
                    <!-- <i class="fas fa-check-circle"></i> -->
                    <a href="">xem ngay</a>
                </div>

            </div>

            <div class="product1">
                <img src="../img/250_47384_596281937.jpeg" alt="">
                <p class="title-name">Điện thoại Nokia 105 4G-Đen</p>
                <div class="price">
                    <p>Giá niêm yết :</p><strong>750.000 đ</strong>
                </div>
                <div class="price-real">
                    <p>Giá bán :</p><strong>750.000 đ</strong>
                </div>
                <div class="status-product">
                    <!-- <i class="fas fa-check-circle"></i> -->
                    <a href="">xem ngay</a>
                </div>

            </div>

            <div class="product1">
                <img src="../img/250_47384_596281937.jpeg" alt="">
                <p class="title-name">Điện thoại Nokia 105 4G-Đen</p>
                <div class="price">
                    <p>Giá niêm yết :</p><strong>750.000 đ</strong>
                </div>
                <div class="price-real">
                    <p>Giá bán :</p><strong>750.000 đ</strong>
                </div>
                <div class="status-product">
                    <!-- <i class="fas fa-check-circle"></i> -->
                    <a href="">xem ngay</a>
                </div>

            </div>
            <div class="list-page">
                <div class="item" style="background: rgb(49, 49, 206);">
                    <a href="">1</a>
                </div>
                <div class="item">
                    <a href="">2</a>
                </div>
                <div class="item">
                    <a href="">3</a>
                </div>
                <div class="item">
                    <a href="">4</a>
                </div>
            </div>
            <footer class="footer">
                <div class="information">
                    <h4>Thông tin công ty</h4>
                    <ul>
                        <li><a href="">Giới thiệu công ty </a></li>
                        <li><a href="">Thông tin liên hệ </a></li>
                        <li><a href="">Thông tin tuyển dụng </a></li>
                        <li><a href="">Điều khoản giao dịch </a></li>
                    </ul>
                </div>
                <div class="information">
                    <h4>Quy định và chính sách</h4>
                    <ul>
                        <li><a href="">Chính sách kinh doanh </a></li>
                        <li><a href="">Chính sách mua hàng</a></li>
                        <li><a href="">Chính sách bảo hàng </a></li>
                        <li><a href="">Chính sách đổi trả hàng</a></li>
                        <li><a href="">Chính sách kiểm hàng</a></li>
                    </ul>
                </div>
                <div class="information">
                    <h4>Thông tin </h4>
                    <ul>
                        <li><a href="">Địa chỉ : <strong>124 Phương Canh Nam Từ Liêm Hà Nội</strong> </a></li>
                        <li><a href="">SĐT: <strong> 0332601248 </strong></a></li>
                        <li><a href="">Email: <strong>dongtnph21313@fpt.edu.vn </strong></a></li>
                        <li><a href="">Giờ mở cửa từ 8h đến 22h </a></li>
                    </ul>
                </div>
            </footer>
            <div class="internet">
                <ul class="ul-internet">
                    <li><a href=""><img src="img/facebook-chat.png" alt=""></a></li>
                    <li><a href=""><img src="img/zalo1.png" alt=""></a></li>
                    <li><a href=""><img src="img/facebook-chat.png" alt=""></a></li>
                    <li><a href=""><img src="img/zalo1.png" alt=""></a></li>
                </ul>
            </div>
        </div>

    </div>
    <script>
        initAjax = (data_ajax) => {
            $.ajax(data_ajax);
        }
        function xoa(id) {
            initAjax({
                url: "chucnang/delete.php?id="+id,
                method: "GET",
                success: function(data) {
                    alert(data);
                }
            });
        }
    </script>

    <!-- JavaScript Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script> -->
</body>

</html>