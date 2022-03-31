<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home - Gottaget </title>
	<link rel="stylesheet" href="<?= base_url() ?>/assets/homeooo_css/view_ordersooo_css.css">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/homeooo_css/header_css.css">
	<!-- GOOGLE FONTS  -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>
	<div id="wrapper">
		<!-- HEADER STARTS HERE  -->
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
							<a href="<?= base_url() ?>" class="nav-link ">
							<i class="bi bi-house-door-fill"></i>
							HOME
							</a>
						</li>
						
						<li class="nav-item ">
							<a href="#E_-_STORES_cb" class="nav-link">
							<img src="<?= base_url() ?>/assets/homeooo_css/imgs/store.png"></img>
							E-STORES
							</a>
						</li>
						
						<li class="nav-item">  
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
						<li class="nav-item active  dropdown" style="text-align: center;">
                         <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
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


		<!-- MAIN STARTS HERE  -->
		<main class="bg-white ">
			<div class="container mt-5 pt-4">
			    <div class="d-flex justify-content-between mb-4 align-items-center ">
					<h1 class="text-red mb-0 page-title ">
						Cart 
					</h1>
					<h3 class="mb-0 ">
						<a href="#" class=" text-info ">
							 <i class="bi bi-question-circle"></i>  Help
						</a>
					</h3>
				</div>		
			
			
			<div class="row mb-4">
					<!-- cardf 1  -->
					<div class="col-md-6">
						<div class="store d-flex flex-column">
							<div class=" d-flex align-items-center">
								<h3 class="title mr-auto mb-0 ">
									On-going Orders
								</h3>								
							</div>
							<div class="p-3 bg-gray my-3">
								<div class=" d-flex align-items-center">
									<h4 class="title mr-auto mb-0" id="Order_123645">Order #123445</h4>
									<span id="Order_Confirmed">
											<i class="bi text-success bi-check-circle-fill"></i>
										Order Confirmed
									</span>
								</div>
								<table class="table mt-2 table-borderless">
									<tbody>
									  <tr>
									
										<td>Store 1  </td>
										<td>  </td>
										<td>  </td>
									  </tr>
									  <tr>
										<td>Store 2  </td>
										<td></td>
										<td></td>
									  </tr>
									<tr>
										<td >Grocery/Electronics</td>
										<td></td>
										<td></td>
									  </tr>
									  <tr>
											<td colspan="2">
												Total
											</td>
											<td> = </td>
											<td>Rs. xxx</td>
									  </tr>
									</tbody>
								</table>

								<div class="d-flex ">
									<!-- Call store -->
									<span class="text-muted mb-0">
						             13th February 2021 2:00 PM
					                </span>
									
									<a class="btn btn-danger ml-auto mr-4">
										<!--<i class="bi text-white bi-phone-call"></i>-->
										3-4 hrs
									</a>
									<!-- Chat with store	 -->
									<a class="btn btn-info">
										<!--<i class="bi text-white bi-chat-square-dots"></i>-->
										Pay
									</a>
								</div>
							</div>
							
							<div class="p-3 bg-gray my-3">
								<div class=" d-flex align-items-center">
									<!--<h4 class="title mr-auto mb-0" id="Order_123645">Order #123645</h4>-->
									<span id="Order_Confirmed">
											<!--<i class="bi text-success bi-check-circle-fill"></i>-->
											<i class="bi bi-arrow-repeat"></i>
										Order Processing
									</span>
								</div>
								<table class="table mt-2 table-borderless">
									<tbody>
									  <tr>
									
										<td>Waiting for store(s)</td>
										<td>  </td>
										<td>  </td>
									  </tr>
										<td >Stationery</td>
										<td></td>
										<td></td>
									  </tr>
									</tbody>
								</table>

								<div class="d-flex ">
									<!-- Call store -->
									<span class="text-muted mb-0">
						             13th February 2021 2:00 PM
					                </span>
									
									<a class="btn btn-danger ml-auto mr-4">
										<!--<i class="bi text-white bi-phone-call"></i>-->
										3-4 hrs
									</a>
									<!-- Chat with store	 -->
								</div>
							</div>					
						</div>
					</div>
					
					
					<div class="col-md-6">
						<div class="store d-flex flex-column">
							<div class=" d-flex align-items-center">
								<h3 class="title mr-auto mb-0 ">
									Previous Orders
								</h3>								
							</div>
							<div class="p-3 bg-gray my-3">
								<div class=" d-flex align-items-center">
									<h4 class="title mr-auto mb-0" id="Order_123645">Order #123645</h4>
									<span id="Order_Confirmed">
											<i class="bi text-success bi-check-circle-fill"></i>
										Delivered
									</span>
								</div>
								<table class="table mt-2 table-borderless">
									<tbody>
									  <tr>
									
										<td>Store 1  </td>
										<td>  </td>
										<td>  </td>
									  </tr>
									  <tr>
										<td>Store 2  </td>
										<td></td>
										<td></td>
									  </tr>
									<tr>
										<td >Food/Medicines</td>
										<td></td>
										<td></td>
									  </tr>
									  <tr>
											<td colspan="2">
												Total
											</td>
											<td> = </td>
											<td>Rs. xxx</td>
									  </tr>
									</tbody>
								</table>

								<div class="d-flex ">
									<!-- Call store -->
									<span class="text-muted mb-0">
						             12th February 2021 2:00 PM
					                </span>
									
									<a class="btn btn-danger ml-auto mr-4">
									<!--	<i class="bi text-white bi-phone-call"></i>-->
										3-4 hrs
									</a>
									<!-- Chat with store	 -->
									<a class="btn btn-info">
									<!--	<i class="bi text-white bi-chat-square-dots"></i>-->
										Paid
									</a>
								</div>
							</div>
							
							<div class="p-3 bg-gray my-3">
								<div class=" d-flex align-items-center">
									<h4 class="title mr-auto mb-0" id="Order_123645">Order #123645</h4>
									<span id="Order_Confirmed">
											<!--<i class="bi text-success bi-check-circle-fill"></i>-->
											<i class="bi bi-arrow-repeat"></i>
										Delivered
									</span>
								</div>
								<table class="table mt-2 table-borderless">
									<tbody>
									  <tr>
									
										<td>Store 1  </td>
										<td>  </td>
										<td>  </td>
									  </tr>
										<td >Grocery</td>
										<td></td>
										<td></td>
									  </tr>
									  <tr>
											<td colspan="2">
												Total
											</td>
											<td> = </td>
											<td>Rs. xxx</td>
									  </tr>
									</tbody>
								</table>

								<div class="d-flex ">
									<!-- Call store -->
									<span class="text-muted mb-0">
						             13th February 2021 2:00 PM
					                </span>
									
									<a class="btn btn-danger ml-auto mr-4">
									<!--	<i class="bi text-white bi-phone-call"></i>-->
										1 hrs
									</a>
									<!-- Chat with store	 -->
									<a class="btn btn-info">
									<!--	<i class="bi text-white bi-chat-square-dots"></i>-->
										Paid
									</a>
								</div>
							</div>					
						</div>
					</div>
					
				</div>
				
                
                <div class="row mb-4" style="overflow: hidden;">
					<!-- cardf 1  -->
					<div class="col-md-6" style="height:0px;" id="v-m1">
						<div class="store d-flex flex-column">
							<div class=" d-flex align-items-center">
								<h3 class="title mr-auto mb-0 ">
									On-going Orders
								</h3>								
							</div>
							<div class="p-3 bg-gray my-3">
								<div class=" d-flex align-items-center">
									<h4 class="title mr-auto mb-0" id="Order_123645">Order #123645</h4>
									<span id="Order_Confirmed">
											<i class="bi text-success bi-check-circle-fill"></i>
										Order Confirmed
									</span>
								</div>
								<table class="table mt-2 table-borderless">
									<tbody>
									  <tr>
									
										<td>Store 1  </td>
										<td>  </td>
										<td>  </td>
									  </tr>
									  <tr>
										<td>Store 2  </td>
										<td></td>
										<td></td>
									  </tr>
									<tr>
										<td >Grocery/Electronics</td>
										<td></td>
										<td></td>
									  </tr>
									  <tr>
											<td colspan="2">
												Total
											</td>
											<td> = </td>
											<td>Rs. xxx</td>
									  </tr>
									</tbody>
								</table>

								<div class="d-flex ">
									<!-- Call store -->
									<span class="text-muted mb-0">
						             13th February 2021 2:00 PM
					                </span>
									
									<a class="btn btn-danger ml-auto mr-4">
										<!--<i class="bi text-white bi-phone-call"></i>-->
										3-4 hrs
									</a>
									<!-- Chat with store	 -->
									<a class="btn btn-info">
										<!--<i class="bi text-white bi-chat-square-dots"></i>-->
										Pay
									</a>
								</div>
							</div>
							
							<div class="p-3 bg-gray mt-3">
								<div class=" d-flex align-items-center">
									<!--<h4 class="title mr-auto mb-0" id="Order_123645">Order #123645</h4>-->
									<span id="Order_Confirmed">
											<!--<i class="bi text-success bi-check-circle-fill"></i>-->
											<i class="bi bi-arrow-repeat"></i>
										Order Processing
									</span>
								</div>
								<table class="table mt-2 table-borderless">
									<tbody>
									  <tr>
									
										<td>Waiting for store(s)</td>
										<td>  </td>
										<td>  </td>
									  </tr>
										<td >Stationery</td>
										<td></td>
										<td></td>
									  </tr>
									</tbody>
								</table>

								<div class="d-flex ">
									<!-- Call store -->
									<span class="text-muted mb-0">
						             13th February 2021 2:00 PM
					                </span>
									
									<a class="btn btn-danger ml-auto mr-4">
									<!--	<i class="bi text-white bi-phone-call"></i>-->
										3-4 hrs
									</a>
									<!-- Chat with store	 -->
								</div>
							</div>						
						</div>
						</div>
						
						<div class="col-md-6" style="height:0px;" id="v-m2">
						<div class="store d-flex flex-column">
							<div class=" d-flex align-items-center">
								<h3 class="title mr-auto mb-0 ">
									Previous Orders
								</h3>								
							</div>
							<div class="p-3 bg-gray my-3">
								<div class=" d-flex align-items-center">
									<h4 class="title mr-auto mb-0" id="Order_123645">Order #123645</h4>
									<span id="Order_Confirmed">
											<i class="bi text-success bi-check-circle-fill"></i>
										Delivered
									</span>
								</div>
								<table class="table mt-2 table-borderless">
									<tbody>
									  <tr>
									
										<td>Store 1  </td>
										<td>  </td>
										<td>  </td>
									  </tr>
									  <tr>
										<td>Store 2  </td>
										<td></td>
										<td></td>
									  </tr>
									<tr>
										<td >Food/Medicines</td>
										<td></td>
										<td></td>
									  </tr>
									  <tr>
											<td colspan="2">
												Total
											</td>
											<td> = </td>
											<td>Rs. xxx</td>
									  </tr>
									</tbody>
								</table>

								<div class="d-flex ">
									<!-- Call store -->
									<span class="text-muted mb-0">
						             12th February 2021 2:00 PM
					                </span>
									
									<a class="btn btn-danger ml-auto mr-4">
									<!--	<i class="bi text-white bi-phone-call"></i>-->
										3-4 hrs
									</a>
									<!-- Chat with store	 -->
									<a class="btn btn-info">
									<!--	<i class="bi text-white bi-chat-square-dots"></i>-->
										Paid
									</a>
								</div>
							</div>
							
							<div class="p-3 bg-gray my-3">
								<div class=" d-flex align-items-center">
									<h4 class="title mr-auto mb-0" id="Order_123645">Order #123645</h4>
									<span id="Order_Confirmed">
											<!--<i class="bi text-success bi-check-circle-fill"></i>-->
											<i class="bi bi-arrow-repeat"></i>
										Delivered
									</span>
								</div>
								<table class="table mt-2 table-borderless">
									<tbody>
									  <tr>
									
										<td>Store 1  </td>
										<td>  </td>
										<td>  </td>
									  </tr>
										<td >Grocery</td>
										<td></td>
										<td></td>
									  </tr>
									  <tr>
											<td colspan="2">
												Total
											</td>
											<td> = </td>
											<td>Rs. xxx</td>
									  </tr>
									</tbody>
								</table>

								<div class="d-flex ">
									<!-- Call store -->
									<span class="text-muted mb-0">
						             13th February 2021 2:00 PM
					                </span>
									
									<a class="btn btn-danger ml-auto mr-4">
									<!--	<i class="bi text-white bi-phone-call"></i>-->
										1 hrs
									</a>
									<!-- Chat with store	 -->
									<a class="btn btn-info">
									<!--	<i class="bi text-white bi-chat-square-dots"></i>-->
										Paid
									</a>
								</div>
							</div>					
						</div>
					</div>
							
				</div>
				
                  
				<div class="row">
				    <div class="col-md-12 text-center">
                        <span id="view_more1" class="v-m2 p-3 view_more1" onclick="vm1()">
						
				        </span>
                    </div>		
                    <!--<div class="col-md-6 text-center" onclick="vm2()">
                        <span id="view_more2" class="v-m2 p-3 view_more2">
				                
				        </span>
                    </div>	-->			
                </div>
<script>
	
 function vm1() {
  var x = document.getElementById("view_more1");
  if(x.classList.contains("view_more1"))
								{
					            x.classList.add("view_less1");
								x.classList.remove("view_more1");
								var a = document.getElementById("v-m1");
	                            a.style.height="626px"
								a.style.transition="height 1s";
								}
								else {
								x.classList.add("view_more1");
								x.classList.remove("view_less1");
								var a = document.getElementById("v-m1");
	                            a.style.height="0px";
								a.style.transition="height 1s";
								}
  
}
	
	
	//function vm2() {
  //var x = document.getElementById("view_more2");
 // if(x.classList.contains("view_more2"))
					//			{
					//            x.classList.add("view_less2");
					//			x.classList.remove("view_more2");
					//			var a = document.getElementById("v-m2");
	                 //           a.style.height="626px"
					//			a.style.transition="height 1s";
					//			}
					//			else {
					//			x.classList.add("view_more2");
					//			x.classList.remove("view_less2");
					//			var a = document.getElementById("v-m2");
	                //            a.style.height="0px";
					//			}
  
//}
	</script>
				
			</div>
		</main>

		<!-- FOOTER  STARTS HERE  -->
		<footer class="bg-light mt-5 py-4 text-center ">	
			Copyright &copy; 2020 Gottaget. All rights reserved.
		</footer>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>