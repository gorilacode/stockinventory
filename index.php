<?php
$siteName = "stock-inventory";

$pageTitle = "Stock Management System";
$tagName  = "index";
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
      				<div class="col-lg-3 col-xs-6" >
      					<div class="small-box bg-aqua" style="box-shadow: 0px 6px 3px 0px rgba(0,0,0,0.1)">
				            <div class="inner">
				              <h3>150</h3>

				              <p>Todays Sales</p>
				            </div>
				            <div class="icon">
				              <i class="fa  fa-shopping-cart"></i>
				            </div>
				        </div>
      				</div>
      				<div class="col-lg-3 col-xs-6" >
				        <div class="small-box bg-green" style="box-shadow: 0px 6px 3px 0px rgba(0,0,0,0.1)">
				            <div class="inner">
				              <h3>150</h3>

				              <p>Revenue</p>
				            </div>
				            <div class="icon">
				              <i class="ion ion-cash"></i>
				            </div>
				        </div>
      				</div>
      				<div class="col-lg-3 col-xs-6" >
      					<div class="small-box bg-orange" style="box-shadow: 0px 6px 3px 0px rgba(0,0,0,0.1)">
				            <div class="inner">
				              <h3>150</h3>

				              <p>Open Register Amount</p>
				            </div>
				            <div class="icon">
				              <i class="fa fa-book"></i>
				            </div>
				            
				        </div>
      				</div>
      				<div class="col-lg-3 col-xs-6" >
      					<div class="small-box bg-red" style="box-shadow: 0px 6px 3px 0px rgba(0,0,0,0.1)">
				            <div class="inner">
				              <h3><?php echo date("d/m/y");?></h3>

				              <p>Date</p>
				            </div>
				            <div class="icon">
				              <i class="ion ion-calendar"></i>
				            </div>
				            
				        </div>
      				</div>
      			</div>
      			<div class="row">
      				<div class="col-md-4">
	      				<div class="box box-primary" style="box-shadow: 0px 6px 3px 0px rgba(0,0,0,0.1)">
				            <div class="box-header with-border">
				              <h3 class="box-title">Recently Added Products</h3>

				              <div class="box-tools pull-right">
				                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
				                </button>
				                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
				              </div>
				            </div>
				            <!-- /.box-header -->
				            <div class="box-body">
				              <ul class="products-list product-list-in-box">
				                <li class="item">
				                  <div class="product-img">
				                    <img src="dist/img/default-50x50.gif" alt="Product Image">
				                  </div>
				                  <div class="product-info">
				                    <a href="javascript:void(0)" class="product-title">Samsung TV
				                      <span class="label label-warning pull-right">$1800</span></a>
				                    <span class="product-description">
				                          Samsung 32" 1080p 60Hz LED Smart HDTV.
				                        </span>
				                  </div>
				                </li>
				                <!-- /.item -->
				                <li class="item">
				                  <div class="product-img">
				                    <img src="dist/img/default-50x50.gif" alt="Product Image">
				                  </div>
				                  <div class="product-info">
				                    <a href="javascript:void(0)" class="product-title">Bicycle
				                      <span class="label label-info pull-right">$700</span></a>
				                    <span class="product-description">
				                          26" Mongoose Dolomite Men's 7-speed, Navy Blue.
				                        </span>
				                  </div>
				                </li>
				                <!-- /.item -->
				                <li class="item">
				                  <div class="product-img">
				                    <img src="dist/img/default-50x50.gif" alt="Product Image">
				                  </div>
				                  <div class="product-info">
				                    <a href="javascript:void(0)" class="product-title">Xbox One <span class="label label-danger pull-right">$350</span></a>
				                    <span class="product-description">
				                          Xbox One Console Bundle with Halo Master Chief Collection.
				                        </span>
				                  </div>
				                </li>
				                <!-- /.item -->
				                <li class="item">
				                  <div class="product-img">
				                    <img src="dist/img/default-50x50.gif" alt="Product Image">
				                  </div>
				                  <div class="product-info">
				                    <a href="javascript:void(0)" class="product-title">PlayStation 4
				                      <span class="label label-success pull-right">$399</span></a>
				                    <span class="product-description">
				                          PlayStation 4 500GB Console (PS4)
				                        </span>
				                  </div>
				                </li>
				                <!-- /.item -->
				              </ul>
				            </div>
				            <!-- /.box-body -->
				            <div class="box-footer text-center">
				              <a href="javascript:void(0)" class="uppercase">View All Products</a>
				            </div>
				            <!-- /.box-footer -->
				        </div>
			       </div>
      			</div>
	   		</section>
	  		<!-- /.content -->
		</div>
	<!-- /.container -->
	</div>
	<!-- /.content-wrapper -->

	<!-- model view controller script -->
<script src="<?php echo BASE_URL;?>model/view/orderview.js"></script>
<?php require_once(ROOT_PATH. "/inc/footer.php"); ?>
