<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>shop - Gottaget </title>		
	<link rel="stylesheet" href="<?= base_url() ?>/assets/homeooo_css/productsooo_css.css">
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
	
<?php
		$rand_products = array_rand($products, count($products));
		if($products_count % 15 == 0){
			$n1 = $products_count/15;
		} else {
			$n1 = intval($products_count/15)+1;
		}
		$n2 = 0;
	?>
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
		<div class="container pt-4 mt3">
		<p id="E_-_STORES_cb" > E - STORES </p>
		<div class="d-flex flex-column justify-content-center search-sub-start-section mb-4">
			<div class="search-sub-start">
			    <i class="bi bi-search search-sub1"  onclick="search_product(this.value,'Group_959','home')" ></i>
			    <input id="search" class="search-sub2" name="search" placeholder="Search for items or stores"
                 onkeyup="search_product(this.value,'Group_959','home')"/>
			</div>
		</div>
		
		<hr>
		
		<ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
		  <li class="nav-item" role="presentation" style="width:50%">
			<button class="nav-link active" style="width:100%" id="Products-tab" data-bs-toggle="tab" 
			data-bs-target="#Products" type="button" role="tab" aria-controls="Products" aria-selected="true">Products</button>
		  </li>
		  <li class="nav-item" role="presentation" style="width:50%" >
			<button class="nav-link" style="width:100%" id="Stores-tab" data-bs-toggle="tab" 
			data-bs-target="#Stores" type="button" role="tab" aria-controls="Stores" aria-selected="false">Stores</button>
		  </li>
		</ul>
		
		<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="Products" role="tabpanel" aria-labelledby="Products-tab">
						<!-- first tab  -->
						<div class="container mt-4">
						<div id="Group_959" class="row">
			<?php 
				$id3_1 = ['img-25_oe','img-25_of','img-25_og','img-25_nl','img-25_np','img-25_pa','img-25_ny','img-25_o','img-25_nt','img-25_ot','img-25_nu','img-25_ox','img-25_n','img-25_oa','img-25_ob']; $id3_2 = ['Group_844','Group_849','Group_850','Group_912','Group_913','Group_911','Group_907','Group_909','Group_854','Group_905','Group_906','Group_908','Group_904','Group_902','Group_903']; $id3_3 = ['Path_1191_or','Path_1191_oi','Path_1191_ol','Path_1191_nn','Path_1191_nr','Path_1191_pa','Path_1191_n','Path_1191_o','Path_1191_oo','Path_1191_ov','Path_1191_nw','Path_1191_oz','Path_1191_oc','Path_1191_oa','Path_1191_ob']; $id3_4 = ['_os','_oj','_om','_no','_ns','_pb','_n','_pa','_op','_ow','_nx','_o','_od','_oa','_ob'];
								
				
				for($i=0 ; $i < 15 ; $i++) {
					if(!empty($products[$i])){
						echo '
						<div class="col-md-4 align-items-center mx-auto products-section">
						<a id="'.$id3_1[$i].'" class="hvrbox" href = "'.base_url($products[$rand_products[$i]]['url']).'" style="position:relative;width:220px;height:220px;">
							<img class="hvrbox-layer_bottom" id="hvrbox-layer_bottom" src="'.base_url('attachments/shop_images/'.$products[$rand_products[$i]]['image']).'" >
							<div class="hvrbox-layer_top hvrbox-layer_scale">
								<div class="hvrbox-text">
									<span>'.$products[$rand_products[$i]]['title'].'</span><br>
									<br><span>RS. '.$products[$rand_products[$i]]['price'].'</span>
								</div>
							</div>
						</a>';
						echo '<div id="'.$id3_2[$i].'" onclick = "cart('.$products[$rand_products[$i]]['id'].')">
                         <div class="col d-grid my-3">
                            <button type="submit" id="btn-success2" class="btn btn-success btn-lg"
								style="width:100%;" name="submit" value="addtocard">Add To Cart
							</button>
                        </div>';
						echo '</div>';
						echo '</div>';						
					}				
				}
                echo '</div>';				
			?>
		</div>
						</div>
					
					<div class="tab-pane fade active" id="Stores" role="tabpanel" aria-labelledby="Stores-tab">
                     ...
					</div>
		</div>
		</div>
	</main>
	
	
	
</div>
<footer class="bg-light mt-5 py-4 text-center ">	
			Copyright &copy; 2020 Gottaget. All rights reserved.
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>
	var active_page = 1;

	function change_items(page,group){
		if(Number.isInteger(parseInt(page))){
			document.getElementById("page_"+active_page).classList.remove("active");
			document.getElementById("page_"+page).classList.add("active");
			active_page = parseInt(page);
		} else {
			document.getElementById("page_"+active_page).classList.remove("active");
			if(page == 'next'){
				active_page = active_page + 1;
				document.getElementById("page_"+active_page).classList.add("active");
			} 
			if(page == 'previous'){
				active_page = active_page - 1;
				document.getElementById("page_"+active_page).classList.add("active");
			} 
		}
		if(active_page == 1){
			document.getElementById('previous').hidden = true;
		} else {
			document.getElementById('previous').hidden = false;
		}
		if(active_page == <?php echo $n1; ?>){
			document.getElementById('next').hidden = true;
		} else {
			document.getElementById('next').hidden = false;
		}
		var imgs = ['img-25_oe','img-25_of','img-25_og','img-25_nl','img-25_np','img-25_pa','img-25_ny','img-25_o','img-25_nt','img-25_ot','img-25_nu','img-25_ox','img-25_n','img-25_oa','img-25_ob'], boxes= ['Group_844','Group_849','Group_850','Group_912','Group_913','Group_911','Group_907','Group_909','Group_854','Group_905','Group_906','Group_908','Group_904','Group_902','Group_903'], circles = ['Path_1191_or','Path_1191_oi','Path_1191_ol','Path_1191_nn','Path_1191_nr','Path_1191_pa','Path_1191_n','Path_1191_o','Path_1191_oo','Path_1191_ov','Path_1191_nw','Path_1191_oz','Path_1191_oc','Path_1191_oa','Path_1191_ob'], pluses = ['_os','_oj','_om','_no','_ns','_pb','_n','_pa','_op','_ow','_nx','_o','_od','_oa','_ob'];
		if(group == 'Group_959'){
			val = document.getElementById('search_all_items').value;
		}
		var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById(group).innerHTML=this.responseText;
            }
        };
        xhttp.open("GET" , "<?php echo base_url(); ?>home/search_product?search_in_title="+val+'&img='+imgs+'&box='+boxes+'&circle='+circles+'&plus='+pluses+'&group_id='+group+'&page='+active_page, true);
        xhttp.send();
		window.scroll({ top: 230, behavior: 'smooth' });
	}

</script>
</body>
</html>