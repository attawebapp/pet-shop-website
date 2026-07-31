<?php
$title = "Home";
include 'include/header.php';
?>

<section class="inner_banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="innerbanner_cont">
                    <h3>product detail</h3>
                </div>
            </div>
        </div>
    </div>
</section> 
 
<section class="product_detail">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <div class="detail_main">
                    <div class="product_detail_slider">
                        <div class="product_detail_item">
                            <img src="assets/images/sale_img1.png" alt="">
                        </div>
                        <div class="product_detail_item">
                            <img src="assets/images/sale_img2.png" alt="">
                        </div>
                        <div class="product_detail_item">
                            <img src="assets/images/sale_img3.png" alt="">
                        </div>
                        <div class="product_detail_item">
                            <img src="assets/images/product-detail.png" alt="">
                        </div>
                        <div class="product_detail_item">
                        <img src='assets/images/sale_img3.png' alt=''>
                        </div>
                    </div>
                    <div class="detail_sub_slider">
                        <div class="sub_item">
                            <img src='assets/images/sale_img1.png' alt=''>
                        </div>
                        <div class="sub_item">
                            <img src='assets/images/sale_img2.png' alt=''>
                        </div>
                        <div class="sub_item">
                            <img src='assets/images/sale_img3.png' alt=''>
                        </div>
                        <div class="sub_item">
                            <img src='assets/images/product-detail.png' alt=''>
                        </div>
                        <div class="sub_item">
                        <img src='assets/images/sale_img3.png' alt=''>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product_detail_cont">
                    <h3>Your Product <br> Name Here </h3>
                    <ul class="star">
                        <li><span>5</span></li>
                        <li><i class='bx bxs-star'></i></li>
                        <li><i class='bx bxs-star'></i></li>
                        <li><i class='bx bxs-star'></i></li>
                        <li><i class='bx bxs-star'></i></li>
                        <li><i class='bx bxs-star'></i></li>
                    </ul>
                    <h4 class="price"><span>$40.00</span>$30.00</h4> 
                    <p class="detail_para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                    </p>
                    <div class="quantity">
                        <h4>Quantity</h4>
                        <div class="quintity_item">
                            <button onclick="decrementValue(this)" class="minus"><i
                                    class='bx bx-chevron-down'></i></button>
                            <input type="text" value="1">
                            <button onclick="incrementValue(this)" class="add"><i class='bx bx-chevron-up'></i></button>
                        </div>
                    </div> 
                    <a href="cart.php" class="themebtn detail_btn" >add to cart</a>

                    <div class="cat_and_tag">
                        <p><b>Category:</b>Lorem</p>
                        <p><b>Tags:</b>Lorem</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="explore_products pro_detail">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="section_title mb-5">
                    <h3>Related Products :</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <a href="product.php" class="big_sale_item mb-4">
                    <div class="big_sale_img">
                        <img src="assets/images/sale_img1.png" alt="">
                        <span>new</span>
                    </div>
                    <div class="sale_cont">
                        <ul class="sale_list">
                            <li><i class='bx bx-star'></i></li>
                            <li><i class='bx bx-star'></i></li>
                            <li><i class='bx bx-star'></i></li>
                            <li><i class='bx bx-star'></i></li>
                            <li><i class='bx bx-star'></i></li>
                            <li><span>(5 Reviews)</span></li>
                        </ul>
                        <h3>Place Your Title Here</h3>
                        <h4>260.35$<span>300.35$</span></h4>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="product.php" class="big_sale_item mb-4">
                    <div class="big_sale_img">
                        <img src="assets/images/sale_img2.png" alt="">
                        <span>new</span>
                    </div>
                    <div class="sale_cont">
                        <ul class="sale_list">
                            <li><i class='bx bx-star'></i></li>
                            <li><i class='bx bx-star'></i></li>
                            <li><i class='bx bx-star'></i></li>
                            <li><i class='bx bx-star'></i></li>
                            <li><i class='bx bx-star'></i></li>
                            <li><span>(5 Reviews)</span></li>
                        </ul>
                        <h3>Place Your Title Here</h3>
                        <h4>260.35$<span>300.35$</span></h4>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="product.php" class="big_sale_item mb-4">
                    <div class="big_sale_img">
                        <img src="assets/images/sale_img3.png" alt="">
                        <span>new</span>
                    </div>
                    <div class="sale_cont">
                        <ul class="sale_list">
                            <li><i class='bx bx-star'></i></li>
                            <li><i class='bx bx-star'></i></li>
                            <li><i class='bx bx-star'></i></li>
                            <li><i class='bx bx-star'></i></li>
                            <li><i class='bx bx-star'></i></li>
                            <li><span>(5 Reviews)</span></li>
                        </ul>
                        <h3>Place Your Title Here</h3>
                        <h4>260.35$<span>300.35$</span></h4>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="product.php" class="big_sale_item mb-4">
                    <div class="big_sale_img">
                        <img src="assets/images/sale_img1.png" alt="">
                        <span>new</span>
                    </div>
                    <div class="sale_cont">
                        <ul class="sale_list">
                            <li><i class='bx bx-star'></i></li>
                            <li><i class='bx bx-star'></i></li>
                            <li><i class='bx bx-star'></i></li>
                            <li><i class='bx bx-star'></i></li>
                            <li><i class='bx bx-star'></i></li>
                            <li><span>(5 Reviews)</span></li>
                        </ul>
                        <h3>Place Your Title Here</h3>
                        <h4>260.35$<span>300.35$</span></h4>
                    </div>
                </a>
            </div> 
        </div> 

    </div>
</section>
<?php
include 'include/footer.php';
?>