<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>shop - Gottaget </title>			
	<link rel="stylesheet" href="<?= base_url() ?>/assets/homeooo_css/view_productooo_css1.css">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/homeooo_css/view_productooo_css2.css">
    <!--<link rel="stylesheet" href="<?= base_url() ?>/assets/homeooo_css/fontawesome.min.css">	-->
	<link rel="stylesheet" href="<?= base_url() ?>/assets/homeooo_css/slick-theme.css">	
	<link rel="stylesheet" href="<?= base_url() ?>/assets/homeooo_css/slick.min.css">	
    <link rel="stylesheet" href="<?= base_url() ?>/assets/homeooo_css/view_productooo_css.css">		
	<link rel="stylesheet" href="<?= base_url() ?>/assets/homeooo_css/header_css.css">

	<!-- GOOGLE FONTS  -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	<style>
	  .btn-success1 {
    border-radius: 50%;
    background: white;
    /* border: rgb(17, 52, 88); */
    color: rgb(17, 52, 88);
    border: 2px solid rgb(17, 52, 88);
}

    .btn-success1:hover {
    border-radius: 50%;
    background: rgb(17, 52, 88);
    /* border: rgb(17, 52, 88); */
    color: white;
    border: 2px solid rgb(17, 52, 88);
}

.btn-success2 { 
    background: white; 
    color: rgb(17, 52, 88);
    border: 2px solid rgb(17, 52, 88);
}

    .btn-success2:hover {  
    background: rgb(17, 52, 88);
    color: white;
}
	</style>
	
	</head>
	
<body>
<div id="wrapper">
	<header  class="header py-0 fixed-top">
		<nav class="navbar navbar-expand-lg navbar-light py-0 shadow-sm bg-light">
			<div class="container px-2">
				<a class="navbar-brand" href="./">
					<div id="logo" class="text-red">
                            <img src="<?= base_url() ?>/assets/homeooo_css/imgs/gottaget_logo.png" alt="logo" class="img-fluid">
                    </div>
				</a>
				
				<a class="navbar-brand" href="./">
					<div id="comunity-image1">
                            <img src="<?= base_url() ?>/assets/homeooo_css/imgs/comunity.png" alt="communityimage" class="img-fluid">
                    </div>
				</a>
				<!--<button class=" rounded-pill p-3 navbar-toggler" style="font-size: 1.125rem; border:none;" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			    --><button class=" rounded-pill p-3 navbar-toggler" type="button" style="font-size: 1.125rem; border:none;" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02">
				<i class="bi bi-list" style="color: #11098f; font-size: 40px;"></i>
				<!--<span class="navbar-toggler-icon" style="color: #11098f;"></span>-->
				</button>
				
				<div class="collapse navbar-collapse" id="navbarTogglerDemo02" >
					<ul class="navbar-nav align-items-center ml-auto  mt-lg-0 pb-5 pb-lg-0">
						<li class="nav-item">
							<a href="<?= base_url() ?>" class="nav-link">
							<i class="bi bi-house-door-fill"></i>
							HOME
							</a>
						</li>
						
						<li class="nav-item active">
							<a href="#E_-_STORES_cb" class="nav-link active">
							<img src="<?= base_url() ?>/assets/homeooo_css/imgs/store.png"></img>
							E-STORES
							</a>
						</li>
						
						<li class="nav-item ">
						<a href = "<?= base_url('ShoppingCartPage') ?>" class="nav-link">
						<div  id="Group_888" class = "cart_icon" le = "display:none;">
                        <div  id= "d1" style = "position: absolute; left: 16px; top: -16px; height : 18px; width : 18px; background-color: rgba(17,52,88,1); border-radius: 50%; text-align : center ">
                        <span style = "color : white" class = "cart_qty"> <?php if(!empty($_SESSION['logged_user'])){
                        if(!empty($_COOKIE['cart'.$_SESSION['logged_user']])){
                        echo count(json_decode($_COOKIE['cart'.$_SESSION['logged_user']]));
                    
                        } else{
									echo "<script type='text/javascript'>
									       document.getElementById('d1').style.display='none';
										   </script>";																							 
								}}else{
									echo "<script type='text/javascript'>
									       document.getElementById('d1').style.display='none';
										   </script>";									
								}?>
						</span>
                        </div>
				        </div>
							<i class="bi bi-cart-fill"></i>
							CART
							</a>
						</li>
						
						
						<?php if (!empty($_SESSION['logged_user'])) { ?>
						<li class="nav-item dropdown" style="text-align: center;">
                         <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
						 <i class="bi bi-person-fill"></i>
						 ACCOUNT
						 </a>
                          <ul class="dropdown-menu">
                           <li><a href="<?= base_url('myaccount'); ?>" class="dropdown-item">My Profile </a></li>
                           <li><a href="<?= base_url('home/my_orders') ?>" class="dropdown-item">My Orders</a></li>
                           <li><a href="<?= base_url('home/fav_stores') ?>" class="dropdown-item">Favourite Stores</a></li>
						   <li><a href="<?= base_url('logout'); ?>" class="dropdown-item">Logout</a></li>
                          </ul>
                        </li>
						
						
						<li class="nav-item ">
							<a href="<?= base_url() ?>" class="nav-link ">
							 <i class="bi bi-chat-fill"></i>
							CHAT
							</a>
						</li>
						<?php } else { ?>
						  <li class="nav-item py-2 px-2" id="sign_up">
							<a href="<?= base_url('login') ?>" class="nav-link">						
							SIGN UP/LOG IN
							</a>
						</li>
						<?php } ?>
				    </ul>
				</div>				
			</div>
		</nav>
    </header>
     
	<section class="bg-l">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
					   <img id="img-25_i" class="card-img img-fluid" src="<?= base_url('attachments/shop_images/'.$product['image']) ?>" alt="product image">
					</div>					
					<div class="row">
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="prev">
                               <i class="bi bi-arrow-left-short"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </div>
                        <!--End Controls-->
                        <!--Start Carousel Wrapper-->
                        <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                            <!--Start Slides-->
                            <div class="carousel-inner product-links-wap" role="listbox">

                                <!--First slide-->
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="<?= base_url('attachments/shop_images/'.$product['image']) ?>" alt="product image1">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="<?= base_url('attachments/shop_images/'.$product['image']) ?>" alt="product image2">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="<?= base_url('attachments/shop_images/'.$product['image']) ?>" alt="product image3">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--/.First slide-->

                                <!--Second slide-->
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="<?= base_url('attachments/shop_images/'.$product['image']) ?>" alt="product image4">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="<?= base_url('attachments/shop_images/'.$product['image']) ?>" alt="product image5">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="<?= base_url('attachments/shop_images/'.$product['image']) ?>" alt="product image6">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--/.Second slide-->

                                <!--Third slide-->
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="<?= base_url('attachments/shop_images/'.$product['image']) ?>" alt="product image7">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="<?= base_url('attachments/shop_images/'.$product['image']) ?>" alt="product image8">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="<?= base_url('attachments/shop_images/'.$product['image']) ?>" alt="product image9">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--/.Third slide-->
                            </div>
                            <!--End Slides-->
                        </div>
                        <!--End Carousel Wrapper-->
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="next">
                                <i class="bi bi-arrow-right-short"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>					
				</div>
				
				<!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2" id="Item_Name_hg">							
							<span><?php echo $product['title']; ?> </span>						
							</h1>
							
							<ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Company Name:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong></strong></p>
                                </li>
                            </ul>
							
                            <p class="h3 py-2">
							<span class="mr-3" id="RS_000_hi">RS. <?php echo $product['price']; ?></span>
							<del id="RS_000_hj">RS. <?php echo $product['old_price']; ?></del>
							</p>
                           <!-- <p class="py-2">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <span class="list-inline-item text-dark">Rating 4.8 | 36 Comments</span>
                            </p>     -->                      

                            <h6 class="mb-0" >Rating:</h6>
                            <div class="rating"> 							
							<input type="radio" name="rating" value="5" id="5">
							<label for="5">☆</label>
							<input type="radio" name="rating" value="4" id="4">
							<label for="4">☆</label>
							<input type="radio" name="rating" value="3" id="3">
							<label for="3">☆</label>
							<input type="radio" name="rating" value="2" id="2">
							<label for="2">☆</label> 
							<input type="radio" name="rating" value="1" id="1">
							<label for="1">☆</label>						
							</div>

                            <h6 id="Description___ib" >Description:</h6>
                            <p> <?php echo $product['description']; ?></p>
                            
							<!--<ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Avaliable Color :</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>White / Black</strong></p>
                                </li>
                            </ul>-->

                            <!--<h6>Specification:</h6>
                            <ul class="list-unstyled pb-3">
                                <li>Lorem ipsum dolor sit</li>
                                <li>Amet, consectetur</li>
                                <li>Adipiscing elit,set</li>
                                <li>Duis aute irure</li>
                                <li>Ut enim ad minim</li>
                                <li>Dolore magna aliqua</li>
                                <li>Excepteur sint</li>
                            </ul>-->

                            <form action="" method="GET">
                                <input type="hidden" name="product-title" value="Activewear">
                                <div class="row">
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item">Select Size :
                                                <input type="hidden" name="product-size" id="product-size" value="S">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-success1 btn-size">S</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-success1 btn-size">M</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-success1 btn-size">L</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-success1 btn-size">XL</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item text-right">
                                                Quantity
                                                <input type="hidden" name="product-quanity" id="product-quanity" value="1">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-success2" id="btn-minus">-</span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-success2" id="btn-plus">+</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row pb-3 align-items-center text-center">
                                    <div class="col d-grid" >
                                        <button type="submit" class="btn btn-success btn-lg btn-success2" style="width:100%;" name="submit" value="buy">Buy</button>
                                    </div>
                                    <div class="col d-grid" >
                                        <button type="submit" class="btn btn-success btn-lg btn-success2" style="width:100%;" name="submit" value="addtocard">Add To Cart</button>
                                    </div>
									<div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg btn-success2" style="width:100%;" name="submit" value="addtocard">Chat with store</button>
                                    </div>
                                </div>
                            </form>

                            <p id="View_more_by_Business_Name" class="btn-success2 mt-2 p-3">View more by Business Name</p>
                        </div>
                    </div>
			</div>
		</div>
	</section>
	
	
	 <section class="py-5">
        <div class="container">
            <div class="row text-left p-2 pb-3">
                <h4>Similar Products</h4>
            </div>

            <!--Start Carousel Wrapper-->
            <div id="carousel-related-product">

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="<?= base_url('attachments/shop_images/'.$product['image']) ?>">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success2 text-white" href="shop-single.html"><i class="bi bi-heart-fill"></i></a></li>
                                    <li><a class="btn btn-success2 text-white mt-2" href="shop-single.html"><i class="bi bi-eye-fill"></i></a></li>
                                    <li><a class="btn  btn-success2 text-white mt-2" href="shop-single.html"><i class="bi bi-cart-fill"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="shop-single.html" class="h3 text-decoration-none"><?php echo $product['title']; ?> </a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li>M/L/X/XL</li>
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                            <p class="text-center mb-0">$20.00</p>
                        </div>
                    </div>
                </div>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="<?= base_url('attachments/shop_images/'.$product['image']) ?>">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success2 text-white" href="shop-single.html"><i class="bi bi-heart-fill"></i></a></li>
                                    <li><a class="btn btn-success2 text-white mt-2" href="shop-single.html"><i class="bi bi-eye-fill"></i></a></li>
                                    <li><a class="btn  btn-success2 text-white mt-2" href="shop-single.html"><i class="bi bi-cart-fill"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="shop-single.html" class="h3 text-decoration-none"><?php echo $product['title']; ?> </a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li>M/L/X/XL</li>
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                            <p class="text-center mb-0">$25.00</p>
                        </div>
                    </div>
                </div>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="<?= base_url('attachments/shop_images/'.$product['image']) ?>">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success2 text-white" href="shop-single.html"><i class="bi bi-heart-fill"></i></a></li>
                                    <li><a class="btn btn-success2 text-white mt-2" href="shop-single.html"><i class="bi bi-eye-fill"></i></a></li>
                                    <li><a class="btn  btn-success2 text-white mt-2" href="shop-single.html"><i class="bi bi-cart-fill"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="shop-single.html" class="h3 text-decoration-none"><?php echo $product['title']; ?> </a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li>M/L/X/XL</li>
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                            <p class="text-center mb-0">$45.00</p>
                        </div>
                    </div>
                </div>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="<?= base_url('attachments/shop_images/'.$product['image']) ?>">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                   <li><a class="btn btn-success2 text-white" href="shop-single.html"><i class="bi bi-heart-fill"></i></a></li>
                                    <li><a class="btn btn-success2 text-white mt-2" href="shop-single.html"><i class="bi bi-eye-fill"></i></a></li>
                                    <li><a class="btn  btn-success2 text-white mt-2" href="shop-single.html"><i class="bi bi-cart-fill"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="shop-single.html" class="h3 text-decoration-none"><?php echo $product['title']; ?> </a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li>M/L/X/XL</li>
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                            <p class="text-center mb-0">$60.00</p>
                        </div>
                    </div>
                </div>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="<?= base_url('attachments/shop_images/'.$product['image']) ?>">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success2 text-white" href="shop-single.html"><i class="bi bi-heart-fill"></i></a></li>
                                    <li><a class="btn btn-success2 text-white mt-2" href="shop-single.html"><i class="bi bi-eye-fill"></i></a></li>
                                    <li><a class="btn  btn-success2 text-white mt-2" href="shop-single.html"><i class="bi bi-cart-fill"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="shop-single.html" class="h3 text-decoration-none"><?php echo $product['title']; ?> </a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li class="">M/L/X/XL</li>
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                            <p class="text-center mb-0">$80.00</p>
                        </div>
                    </div>
                </div>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="<?= base_url('attachments/shop_images/'.$product['image']) ?>">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                   <li><a class="btn btn-success2 text-white" href="shop-single.html"><i class="bi bi-heart-fill"></i></a></li>
                                    <li><a class="btn btn-success2 text-white mt-2" href="shop-single.html"><i class="bi bi-eye-fill"></i></a></li>
                                    <li><a class="btn  btn-success2 text-white mt-2" href="shop-single.html"><i class="bi bi-cart-fill"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="shop-single.html" class="h3 text-decoration-none"><?php echo $product['title']; ?> </a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li>M/L/X/XL</li>
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                            <p class="text-center mb-0">$110.00</p>
                        </div>
                    </div>
                </div>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="<?= base_url('attachments/shop_images/'.$product['image']) ?>">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                   <li><a class="btn btn-success2 text-white" href="shop-single.html"><i class="bi bi-heart-fill"></i></a></li>
                                    <li><a class="btn btn-success2 text-white mt-2" href="shop-single.html"><i class="bi bi-eye-fill"></i></a></li>
                                    <li><a class="btn  btn-success2 text-white mt-2" href="shop-single.html"><i class="bi bi-cart-fill"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="shop-single.html" class="h3 text-decoration-none"><?php echo $product['title']; ?> </a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li>M/L/X/XL</li>
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                            <p class="text-center mb-0">$125.00</p>
                        </div>
                    </div>
                </div>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="<?= base_url('attachments/shop_images/'.$product['image']) ?>">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                   <li><a class="btn btn-success2 text-white" href="shop-single.html"><i class="bi bi-heart-fill"></i></a></li>
                                    <li><a class="btn btn-success2 text-white mt-2" href="shop-single.html"><i class="bi bi-eye-fill"></i></a></li>
                                    <li><a class="btn  btn-success2 text-white mt-2" href="shop-single.html"><i class="bi bi-cart-fill"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="shop-single.html" class="h3 text-decoration-none"><?php echo $product['title']; ?> </a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li>M/L/X/XL</li>
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                            <p class="text-center mb-0">$160.00</p>
                        </div>
                    </div>
                </div>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="<?= base_url('attachments/shop_images/'.$product['image']) ?>">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                   <li><a class="btn btn-success2 text-white" href="shop-single.html"><i class="bi bi-heart-fill"></i></a></li>
                                    <li><a class="btn btn-success2 text-white mt-2" href="shop-single.html"><i class="bi bi-eye-fill"></i></a></li>
                                    <li><a class="btn  btn-success2 text-white mt-2" href="shop-single.html"><i class="bi bi-cart-fill"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="shop-single.html" class="h3 text-decoration-none"><?php echo $product['title']; ?> </a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li>M/L/X/XL</li>
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                            <p class="text-center mb-0">$180.00</p>
                        </div>
                    </div>
                </div>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="<?= base_url('attachments/shop_images/'.$product['image']) ?>">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success2 text-white" href="shop-single.html"><i class="bi bi-heart-fill"></i></a></li>
                                    <li><a class="btn btn-success2 text-white mt-2" href="shop-single.html"><i class="bi bi-eye-fill"></i></a></li>
                                    <li><a class="btn  btn-success2 text-white mt-2" href="shop-single.html"><i class="bi bi-cart-fill"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="shop-single.html" class="h3 text-decoration-none"><?php echo $product['title']; ?> </a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li>M/L/X/XL</li>
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                            <p class="text-center mb-0">$220.00</p>
                        </div>
                    </div>
                </div>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="<?= base_url('attachments/shop_images/'.$product['image']) ?>">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success2 text-white" href="shop-single.html"><i class="bi bi-heart-fill"></i></a></li>
                                    <li><a class="btn btn-success2 text-white mt-2" href="shop-single.html"><i class="bi bi-eye-fill"></i></a></li>
                                    <li><a class="btn  btn-success2 text-white mt-2" href="shop-single.html"><i class="bi bi-cart-fill"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="shop-single.html" class="h3 text-decoration-none"><?php echo $product['title']; ?> </a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li>M/L/X/XL</li>
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                            <p class="text-center mb-0">$250.00</p>
                        </div>
                    </div>
                </div>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="<?= base_url('attachments/shop_images/'.$product['image']) ?>">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success2 text-white" href="shop-single.html"><i class="bi bi-heart-fill"></i></a></li>
                                    <li><a class="btn btn-success2 text-white mt-2" href="shop-single.html"><i class="bi bi-eye-fill"></i></a></li>
                                    <li><a class="btn  btn-success2 text-white mt-2" href="shop-single.html"><i class="bi bi-cart-fill"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="shop-single.html" class="h3 text-decoration-none"><?php echo $product['title']; ?> </a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li>M/L/X/XL</li>
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                            <p class="text-center mb-0">$300.00</p>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </section>
	<footer class="bg-light mt-5 py-4 text-center ">	
			Copyright &copy; 2020 Gottaget. All rights reserved.
	</footer>
</div>
    <!-- End Article -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
 <script src="<?= base_url() ?>/assets/homeooo_css/js/jquery-1.11.0.min.js"></script>


 <script src="<?= base_url() ?>/assets/homeooo_css/js/templatemo.js"></script>
 <script src="<?= base_url() ?>/assets/homeooo_css/js/slick.min.js"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
    <!-- End Slider Script -->
</html>