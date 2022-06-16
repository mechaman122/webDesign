<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // create an instance with username (guest)
    $username = "Guest";
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/tinhne/chitietsanpham/asset/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="/tinhne/chitietsanpham/asset/css/style.css">
    <link rel="stylesheet" href="/tinhne/chitietsanpham/asset/font-icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="../app/js/script.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Product Details</title>
</head>

<body>
    <div class="main">
        <div class="container-fluid" ; ">
            <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                <!--Below is to show left side of the navigation bar-->
                <div class="container-fluid ">
                    <button class="navbar-toggler " type="button " data-bs-toggle="collapse " data-bs-target="#navbarSupportedContent " aria-controls="navbarSupportedContent " aria-expanded="false " aria-label="Toggle navigation ">
                    <span class="navbar-toggler-icon "></span>
                  </button>
                    <div class="collapse navbar-collapse " id="navbarSupportedContent ">
                        <a class="navbar-brand " href="# ">
                            <img src="/tinhne/chitietsanpham/asset/img/among-us-text-logo.png " alt=" " width="65px " height="auto " class="d-inline-block align-text-top ">
                        </a>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                            <li class="nav-item ">
                                <a class="nav-link fw-bold active " aria-current="page " href="# ">Home</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link fw-bold " href="# ">About</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link fw-bold " href="# ">Products</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link fw-bold " href="# ">News</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link fw-bold " href="# ">Contact</a>
                            </li>
                        </ul>
                        <form class="d-flex ">
                            <input class="form-control me-2 " type="search " placeholder="Search " aria-label="Search " id="textbox ">
                            <button type="submit " class="btn btn-outline-dark "><i class="bi bi-search "></i></button>
                        </form>
                    </div>
                    <div class="d-flex justify-content-end ">
                        <div class="dropdown ">
                            <a class="nav-link dropdown-toggle " href="# " id="user-dropdown " role="button " data-bs-toggle="dropdown " aria-expanded="false ">
                                <img src="/tinhne/chitietsanpham/asset/img/among-us-symbol.png " width="65px " height="auto " alt="user 's Logo">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-lg-end dropdown-menu-dark" aria-labelledby="user-dropdown">
                                <li>
                                    <h6 class="dropdown-header" id="user-signin-as" href="#">Signed in as</h6>
                                </li>
                                <li><a class="dropdown-item" id="user-signin-name" href="#"><b>user1234</b></a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" id="user-signin-text" href="/registerform/index.html">Sign In</a></li>
                                <li><a class="dropdown-item" id="user-info-text" href="#">Your Info</a></li>
                                <li><a class="dropdown-item" id="user-help-text" href="#">Help</a></li>
                                <li><a class="dropdown-item" id="user-setting-text" href="#">Setting</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" id="user-signout-text" href="#"><i class="bi bi-box-arrow-in-right"></i> Sign Out</a></li>
                            </ul>
                        </div>
    
                        <!--Below is the code to show user logo (with dropdown) and cart info (with dropdown)-->
    
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="user-cart-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="/tinhne/chitietsanpham/asset/img/cart-icon.jpg" alt="cart icon" width="40px" height="auto">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end p-2" style="max-width: 250px;" aria-labelledby="user-cart-dropdown">
                                <li><a class="dropdown-item" id="user-cart-viewall" href="#"><i class="bi bi-view-stacked"></i> View Cart (10)</a></li>
                                <li><a class="dropdown-item active" id="user-checkout" href="#"><i class="bi bi-arrow-right-square"></i> Proceed to Checkout</a></li>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>


    
        
    <!-- Code cua tinh  -->

    <!-- Header logo -->
    <div class="header-logo">
        <img src="/tinhne/chitietsanpham/asset/img/among-us-text-logo.png" alt="among-us-text-logo" class="header-amongus-logo">
        <img src="/tinhne/chitietsanpham/asset/img/cart-icon.jpg" alt="Cart" class="header-cart-logo">
        <p class="cart-text" >Thông tin sản phẩm</p>
    </div>    
   
   <section class="product">
       <div class="container">
            <div class="product-content">
                <div class="product-content-left">
                    <div class="product-content-left-big-img">
                        <img src="/tinhne/chitietsanpham/asset/img/among-us-symbol.png" alt="Ảnh sản phẩm">
                    </div>
                    <div class="product-content-left-small-img">
                        <img src="/tinhne/chitietsanpham/asset/img/among-us-symbol.png" alt="Ảnh sản phẩm">
                        <img src="/tinhne/chitietsanpham/asset/img/among-us-symbol.png" alt="Ảnh sản phẩm">
                        <img src="/tinhne/chitietsanpham/asset/img/among-us-symbol.png" alt="Ảnh sản phẩm">
                        <img src="/tinhne/chitietsanpham/asset/img/among-us-symbol.png" alt="Ảnh sản phẩm">
                    </div>
                </div>
                <div class="product-content-right">
                    <div class="product-content-right-product-name">
                        <p class="product-name">AMONG US</p>
                        <p style="font-size:16px; color:#ccc;">MSP : 11111</p>
                    </div>
                    <div class="product-content-right-product-price">
                        <p>150.000<sup>đ</sup></p>
                    </div>
                    <div class="product-content-right-product-color">
                        <p><span style="font-weight: bold;">Màu sắc</span>: Đỏ Lòm Do Éo Có Màu Khác</p>
                        <div class="product-content-right-product-color-img">
                            <img src="/tinhne/chitietsanpham/asset/img/red-color.jpeg" alt="">
                        </div>
                    </div>
                    <div class="product-content-right-product-size">
                        <p style="font-weight: bold;">Size:</p>
                        <div class="size">
                            <span>S</span>
                            <span>M</span>
                            <span>L</span>
                        </div>
                    </div>
                    <div class="quantity">
                        <p style="font-weight: bold;">Số Lượng:</p>
                        <input type="number" min="0" value="1">
                    </div>
                    <p style="color: red;">Vui lòng chọn size</p>
                    <div class="product-content-right-product-button">
                        <button><p>THÊM VÀO GIỎ HÀNG</p></button>
                        <button><i class="fa-solid fa-cart-shopping"></i><p>MUA HÀNG</p></button>
                    </div>
                </div>
                <div class="product-content-bottom">
                    <p class="product-content-bottom-infor">Giới Thiệu</p>
                    <p style="font-size: 20px;">Áo thun tay ngắn độ dài vừa phải mang phong cách trẻ trung năng động.</p>
                    <p class="product-content-bottom-infor">Chi Tiết Sản Phẩm</p>
                    <p><span style="font-weight: bold;">Dòng sản phẩm : </span> Men</p>
                    <p><span style="font-weight: bold;">Nhóm sản phẩm : </span> Áo</p>
                    <p><span style="font-weight: bold;">Chất liệu : </span> Thun</p>
                </div>
            </div>
       </div>    
   </section> 
   </div>
   <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <img src="../img/among-us-text-logo.png" alt="" width="55" height="auto" class="d-inline-block">
        </a>
        <span class="text-muted">© 2022 Company, Inc</span>
    </div>
</footer>
<button onclick="topFunction()" id="myBtn" title="Go to top">BACK TO TOP</button>
</body>
</html>