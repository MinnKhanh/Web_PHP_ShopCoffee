
    <!-- Topbar Start -->
    <div class="container-fluid">

        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Coffee</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    <span class="badge">0</span>
                </a>
                <a href="cart.php" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge number_cart" id="item_cart"><?php
                    if(isset($_SESSION['cart'])){
                        $count=0;
                        foreach($_SESSION['cart'] as $itemcart){
                            foreach($itemcart['size'] as $itemsize){
                                $count+=$itemsize['soluong'];
                            }
                        }
                        echo $count;
                    }
                    else{
                        echo 0;
                    }
                    ?></span>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">

            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Coffee</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index1.php" class="nav-item nav-link">Trang Ch???</a>
                            <a href="shop.php" class="nav-item nav-link">S???n Ph???m</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Trang</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="cart.php" class="dropdown-item">Gi??? H??ng</a>
                                    <a href="HoaDonNguoiDung.php" class="dropdown-item">????n h??ng</a>
                                </div>
                            </div>
                            <a href="contact.php" class="nav-item nav-link">Li??n H??? C???a H??ng</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0">
                            <?php
                            if(empty($_SESSION['MaNguoiDung'])){
                                echo '<a href="/Coffee/layoutlogin.php" class="nav-item nav-link">????ng Nh???p</a>';
                            }else{
                                echo '<a href="/Coffee/signout.php" class="nav-item nav-link">????ng Xu???t</a>';
                            }
                            
                            ?>
                            <a href="register.php" class="nav-item nav-link">????ng K??</a>
                            <?php
                            if(!empty($_SESSION['MaNguoiDung']))
                            if($_SESSION['Role']==1){
                                echo '<a href="./Shop/Product/admin.php" class="nav-item nav-link">Qu???n L??</a>';
                            }
                            
                            ?>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


   

