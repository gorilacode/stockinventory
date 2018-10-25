<?php
$siteName = "stock-inventory";

$pageTitle = "Stock Management System";
$tagName  = "brand";
require_once($_SERVER["DOCUMENT_ROOT"]."/".$siteName."/constant/config.php");

require_once(ROOT_PATH. "/core/init.php");

require_once(ROOT_PATH. "/inc/header.php")
?>

<!-- Full Width Column -->
<div class="content-wrapper">
	<div class="container">
		<!-- Main content -->
    	<section class="content">
    		<div class="row">
    			<div class="col-md-3">
    				<div class="panel-group" id="categories">
					  	<div class="panel panel-default">
					    	<div class="panel-heading" style="background-color: #d2d6de; color: #fff">
					      		<h4 class="panel-title">
					        		<a data-toggle="collapse" data-parent="#categories" href="#collapseOne">
					          		Categories
					        		</a>
					      		</h4>
					    	</div>
					    	<div id="collapseOne" class="panel-collapse collapse in">
					      		<div class="panel-body">
					      			<ul class="list-group">
									  <li class="list-group-item">Cras justo odio</li>
									  <li class="list-group-item">Dapibus ac facilisis in</li>
									  <li class="list-group-item">Morbi leo risus</li>
									  <li class="list-group-item">Porta ac consectetur ac</li>
									  <li class="list-group-item">Vestibulum at eros</li>
									</ul>
					      		</div>
					    	</div>
					  	</div>
    				</div>
    				<div class="panel-group" id="brands">
					  	<div class="panel panel-default">
					    	<div class="panel-heading" style="background-color: #d2d6de; color: #fff">
					      		<h4 class="panel-title">
					        		<a data-toggle="collapse" data-parent="#brands" href="#collapseTwo">
					          		Brands
					        		</a>
					      		</h4>
					    	</div>
					    	<div id="collapseTwo" class="panel-collapse collapse in">
					      		<div class="panel-body">
					      			<ul class="list-group">
									  <li class="list-group-item">Cras justo odio</li>
									  <li class="list-group-item">Dapibus ac facilisis in</li>
									  <li class="list-group-item">Morbi leo risus</li>
									  <li class="list-group-item">Porta ac consectetur ac</li>
									  <li class="list-group-item">Vestibulum at eros</li>
									</ul>
					      		</div>
					    	</div>
					  	</div>
    				</div>
    			</div>

    			<div class="col-md-9">
    				<div class="box" id="brands">
    					<div class="box-body">
				          	<div class="row">
							  	<div class="col-sm-6 col-md-4">
							    	<div class="thumbnail">
							      		<img src="<?php echo BASE_URL;?>assets/dist/img/avatar.png" alt="...">
								      	<div class="caption">
								        	<table class="table">
								        		<thead>
								        			<tr>
								        				<th>Iphone 6S</th>
								        				<th>Price</th>
								        			</tr>
								        		</thead>
								        		<tbody class="">
								        			<tr>
								        				<td>Price</td>
								        				<td>Price</td>
								        			</tr>
								        		</tbody>
								        	</table>
								        	<p class="text-center"><a href="#" class="btn btn-flat bg-orange" role="button">ADD TO CART</a></p>
								      	</div>
							    	</div>
							  	</div>
							  	<div class="col-sm-6 col-md-4">
							    	<div class="thumbnail">
							      		<img src="<?php echo BASE_URL;?>assets/dist/img/avatar.png" alt="...">
								      	<div class="caption">
								        	<table class="table">
								        		<thead>
								        			<tr>
								        				<th>Iphone 6S</th>
								        				<th>Price</th>
								        			</tr>
								        		</thead>
								        		<tbody class="">
								        			<tr>
								        				<td>Price</td>
								        				<td>Price</td>
								        			</tr>
								        		</tbody>
								        	</table>
								        	<p class="text-center"><a href="#" class="btn btn-flat bg-orange" role="button">ADD TO CART</a></p>
								      	</div>
							    	</div>
							  	</div>
							  	<div class="col-sm-6 col-md-4">
							    	<div class="thumbnail">
							      		<img src="<?php echo BASE_URL;?>assets/dist/img/avatar.png" alt="...">
								      	<div class="caption">
								        	<table class="table">
								        		<thead>
								        			<tr>
								        				<th>Iphone 6S</th>
								        				<th>Price</th>
								        			</tr>
								        		</thead>
								        		<tbody class="">
								        			<tr>
								        				<td>Price</td>
								        				<td>Price</td>
								        			</tr>
								        		</tbody>
								        	</table>
								        	<p class="text-center"><a href="#" class="btn btn-flat bg-orange" role="button">ADD TO CART</a></p>
								      	</div>
							    	</div>
							  	</div>
							  	<div class="col-sm-6 col-md-4">
							    	<div class="thumbnail">
							      		<img src="<?php echo BASE_URL;?>assets/dist/img/avatar.png" alt="...">
								      	<div class="caption">
								        	<table class="table">
								        		<thead>
								        			<tr>
								        				<th>Iphone 6S</th>
								        				<th>Price</th>
								        			</tr>
								        		</thead>
								        		<tbody class="">
								        			<tr>
								        				<td>Price</td>
								        				<td>Price</td>
								        			</tr>
								        		</tbody>
								        	</table>
								        	<p class="text-center"><a href="#" class="btn btn-flat bg-orange" role="button">ADD TO CART</a></p>
								      	</div>
							    	</div>
							  	</div>
							</div>

				        </div>
    				</div>
    			</div>
    		</div>
    	</section>
	</div>
</div>

<!-- <script src="<?php echo BASE_URL;?>model/view/brand.js"></script> -->
<?php 
require_once(ROOT_PATH. "/inc/footer.php");
?>
