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
      <!-- Content Header (Page header) -->
     <!--   -->

      <!-- Main content -->
      <section class="content">
        
        <div class="box box-primary" style="box-shadow: 0px 6px 3px 0px rgba(0,0,0,0.1)">
          <div class="box-header with-border">
            <h3 class="box-title" style="font-weight: bolder;"><?php echo strtoupper($tagName);?> PAGE </h3>
          </div>
           <div class="box-body">
              <div class="pull-right">
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#add_brand"><i class="fa fa-plus-circle"></i> Add Brand</button>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <table class="table table-hover">
                  <thead style="font-weight: bolder;" class="text-center">
                    <tr>
                      <td hidden>ID</td>
                      <td hidden>Token ID</td>
                      <td>Brand Name</td>
                      <td>Status</td>
                      <td>Action</td>
                    </tr>
                  </thead>
                  <tbody>

                  </tbody>
                </table>
                </div>
              </div>
               <div class="btn-group pull-right ">
                <button type="button" class="btn btn-default btn-sm">1</button>
                <button type="button" class="btn btn-default btn-sm">2</button>
                <button type="button" class="btn btn-default btn-sm">3</button>
              </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->

  <!-- modal Section -->

  <div class="modal fade" id="add_brand" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title" id="myModalLabel">Add Brand</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" id="addBrandform">
              <div class="box-body">
                <div class="form-group">
                  <label for="brandName" class="col-sm-3 control-label">Brand Name</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="brandName" id="brandName" placeholder="Brand Name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="brandStatus" class="col-sm-3 control-label">Status</label>

                  <div class="col-sm-8">
                    <select name="brandStatus" id="brandStatus" class="form-control">
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="modal-footer">
                <button type="button" class="btn btn-success" id="submitBrand"><i class="fa fa-plus-circle"></i> Add Brand</button>
              </div>
              <!-- /.box-footer -->
            </form>
        </div>
        
      </div>
    </div>
  </div>


  <div class="modal fade" id="edit_brand" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title" id="myModalLabel">Edit Brand</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" id="#editBrandform">
              <div class="box-body">
                <div class="form-group">
                  <label for="brandName" class="col-sm-3 control-label">Brand Name</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="brandName" id="brandName" placeholder="Brand Name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="brandStatus" class="col-sm-3 control-label">Status</label>

                  <div class="col-sm-8">
                    <select name="brandStatus" id="brandStatus" class="form-control">
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="modal-footer">
                <button type="button" class="btn btn-success" id="updateBrand"><i class="fa fa-plus-circle"></i> Update Brand</button>
              </div>
              <!-- /.box-footer -->
            </form>
        </div>
        
      </div>
    </div>
  </div>
  <!-- model view controller script -->
<script src="<?php echo BASE_URL;?>model/view/brand.js"></script>
<?php 
require_once(ROOT_PATH. "/inc/footer.php");
?>

