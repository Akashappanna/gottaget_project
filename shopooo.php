<?php

if(count($stores) === 1 ){
	$store_length = 1;
	$rand_stores[0]= 0;
} elseif(count($stores) >1 ){
	$rand_stores = array_rand($stores,count($stores));
	if(count($stores) > 6){
		$store_length = 6;
	} else {
		$store_length = count($stores);
	} 
} else {
	$store_length = 0;
}

if(count($products) === 1 ){
	$products_length = 1;
	$rand_products[0]= 0;
} elseif(count($products) >1 ){
	$rand_products = array_rand($products,count($products));
	if(count($products) > 6){
		$products_length = 6;
	} else {
		$products_length = count($products);
	} 
} else {
	$products_length = 0;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>shop - Gottaget </title>		
	<link rel="stylesheet" href="<?= base_url() ?>/assets/homeooo_css/shopooo_css.css">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/homeooo_css/header_css.css">

	<!-- GOOGLE FONTS  -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	
	<style>
	     #store_box_image{
			width:20%;
			padding:20px;
		 }
		 
		 @media ( max-width:500px ){
			 #store_box_image{
			 width:30%;
			 }
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
	
	<main class="bg-white">
		<div class="container mt-5 pt-4">
			<div class="row mt-5">
				<div class="col-md-4">
					<div class="d-flex flex-column">
						<div class=" d-flex align-items-center j-c-s mb-3">
							<h4 id="store-restaurant" class="title">Search for a Store/Restaurant</h4>					    
						</div>
						<div class=" d-flex align-items-center j-c-s">
						    Stores in your area
						</div>
						<div class="d-flex align-items-end field-wh j-c-s mb-5" id="Location_nn">
			            <input class="bg-transparent br-none" type="text" value="" id="location_search" name="location_search" placeholder="Location" readonly ></input>						
				        </div> 
						<div class=" d-flex align-items-center j-c-s mb-3">
							<div class="browser_tr">
			                   Browse through Restaurants
					        </div>				    
						</div>
						<div class="d-flex align-items-center GG-community-section">
						<div class="d-flex align-items-center GG-community-section1  my-3">
						    <img src="<?= base_url() ?>/assets/homeooo_css/imgs/foodgottaget.png" alt="food_gottaget" >
							<div class="GG-community ml-3">
							    GG Vegan Community
							</div>
						</div>
						
						<div class="d-flex align-items-center GG-community-section1  my-3">
						    <img src="<?= base_url() ?>/assets/homeooo_css/imgs/foodgottaget.png" alt="food_gottaget" >
							<div class="GG-community ml-3">
							    GG Fast food Community
							</div>
						</div>
						
						<div class="d-flex align-items-center GG-community-section1  my-3">
						    <img src="<?= base_url() ?>/assets/homeooo_css/imgs/foodgottaget.png" alt="food_gottaget" >
							<div class="GG-community ml-3">
							   GG Biryani Community
							</div>
						</div>
						
						<div class="d-flex align-items-center GG-community-section1 my-3">
						    <img src="<?= base_url() ?>/assets/homeooo_css/imgs/foodgottaget.png" alt="food_gottaget" >
							<div class="GG-community ml-3">
							    GG Taco Community
							</div>
						</div>
						
						</div>
					</div>
				</div>
			
				<div class="col-md-8 mt-3">
				    <div class="d-flex flex-column">
					    <div class=" d-flex align-items-center justify-content-center mb-3 store-search-section">	
                        <i class="bi bi-search search-sub1"  onclick="" ></i>						
						<input type="text" id="store_search" class="ml-2" name="store_search" placeholder="Nilgiris, Mahalaxmi, MedPlus, Dominos" value = "<?php echo isset($_GET["search"])?$_GET["search"]:"";?>" onkeyup = "search_store(this.value,event.keyCode)" />
				        </div>
                        
                        <div class=" d-flex align-items-center justify-content-center mb-3 store-search-section">	
				            <div class="mx-auto" id="store_s">
							    Stores
							</div>
							<div class="mx-auto" id="products_p"> 
							    Products
							</div>
					   </div>	

					    <div class="d-flex flex-column mb-3">
						 <?php 
			            for($i = 0 ; $i < $store_length ; $i++ ) { 
						 echo ' <div class="d-flex align-items-center  my-4" style="background-color: rgba(242,242,242,1);">	
				           <a href = "'.base_url('home/shopProfile/'.$stores[$rand_stores[$i]]->id).'" style="text-decoration:none">
                         <div class="d-flex flex-row align-items-center"	>	
                           <img src="'. base_url('attachments/store_images/'.$stores[$rand_stores[$i]]->image).'" id="store_box_image" />
                         
						 <div class="d-flex flex-column align-items-center justify-content-center mx-auto">	
                         <div>						 
				            <span>'.$stores[$rand_stores[$i]]->name.'</span>
						</div>
					     <div>
				            <span>'.$stores[$rand_stores[$i]]->address.'</span>
						</div>
						<div class="rating"> 
						<input type="radio" name="rating" value="5" id="5">
						<label for="5">☆</label> <input type="radio" name="rating" value="4" id="4">
						<label for="4">☆</label> <input type="radio" name="rating" value="3" id="3">
						<label for="3">☆</label> <input type="radio" name="rating" value="2" id="2">
						<label for="2">☆</label> <input type="radio" name="rating" value="1" id="1">
						<label for="1">☆</label>
						</div>
						 </div>						 					
						<div class="mx-auto" style="width:10%">
				        <i class="bi bi-telephone-fill ph-ms"></i>
				        </div>
				        <div class="mx-auto" style="width:10%">
				         <i class="bi bi-messenger ph-ms"></i>
						</div>	
                        </div>							
						</a>
						</div>';
			            }?>  
			
								

						</div>
				   </div>
				</div>
				
			</div>
		</div>
	</main>
	
</div>	
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</html>