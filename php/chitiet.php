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
    <title>Chi tiết đơn hàng</title>
    <link rel="stylesheet" href="../css/chitiet.css">
    <link rel="stylesheet" href="../css/index.css">
    <script src="https://kit.fontawesome.com/e123c1a84c.js" crossorigin="anonymous"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> 

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
                <a href="../gio_hang/gd_giohang.html" style="margin-top: -1px;"><i class="fas fa-shopping-cart"></i> Giỏ hàng (1)</a>
            </div>
            <div class="login_register">
                <i class="fas fa-user-circle"></i><a href="../form/formdangki.html">Đăng ký</a>
                <p>||</p> <a style="margin-left: 5px;" href="">Đăng nhập</a>
            </div>
        </div>
        <div class="listmenu">
           
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


        <div class="nav-chitiet">
            <table class="table">
            <?php
            if(isset($bill) && (is_array($bill))){
                extract($bill);
            }
        ?>
                <thead>
                  <tr>
                    <th scope="col"><a href="">Tất Cả</a></th>
                    <th scope="col"><a href="">Chờ Xác Nhận</a></th>
                    <th scope="col"><a href="">Chờ Lấy Hàng</a></th>
                    <th scope="col"><a href="">Đang Giao</a></th>
                    <th scope="col"><a href="">Đã Giao</a></th>
                  </tr>
                </thead>
              </table>
              <input  type="text" placeholder="  tìm kiếm theo tên shops , ID hoặc tên sản phẩm " >
        </div>
        <?php
        foreach ($db->fetch_assoc("select * from bill limit 10", 0) as $data){
        ?>
        <!-- -- box1 sp --  -->
        <div class="box-chitiet">
            <div class="box-shops">
                <div class="all-shops">
                    <button class="chat">Chat</button>
                    <button class="shops">Xem Shop</button>  
                </div>
                <p><?=trangthai($data['bill_status'])?></p>              
            </div>


            <div class="container-shops">
                <div class="all-bill">
                    <div class="img-shops">
                       <a href=""> <img src="../img/250_47384_596281937.jpeg" alt=""></a> 
                    </div>
                    <div class="content-shops">
                        <p><?=$data['name']?></p>
                         <!-- <select name="" id="">
                            <option value="">Màu sắc</option>
                            <option value="">Đỏ</option>
                            <option value="">Vàng</option>
                        </select>  -->
                    </div>
    
                    <div class="diachi">
                        <p><?=$data['bill_address']?> </p>
                    </div>
                    <div class="bill">
                        <p><?=$data['total']?></a></p>
                    </div>
                </div>

                <div class="all-nhanxet">
                    <button class="mualai">Mua Lại</button>
                    <button class="lienhe">Liên Hệ Người Bán</button>
                    <button class="danhgia">Xem Bình Luận Người Mua</button>
                </div>
               
            </div>
        </div>
            <?php } ?>
      
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
        
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>