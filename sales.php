<?php
$siteName = "stock-inventory";

$pageTitle = "Stock Management System";
$tagName  = "sales";
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
            <h3 class="box-title" style="font-weight: bolder;"><?php echo strtoupper($tagName);?> PAGE</h3>
          </div>
          <div class="box-body">
            <h6><label>TO:</label></h6>
            <form method="POST" id="order_form">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Customer's Name</label>
                    <input type="text" class="form-control input-sm" name="customer_name" id="customer_name" placeholder="Customers Name">
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>Customer's Address</label>
                    <textarea class="form-control input-sm" name="customer_address" id="customer_address" placeholder="Enter Customer's Address"></textarea>
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Invoice Code</label>
                    <input type="text" class="form-control input-sm" name="order_date" id="order_date" value="#18365611">
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>Date</label>
                    <input type="text" class="form-control input-sm" name="order_date" id="order_date" value="<?php echo date('d-m-Y');?>">
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
              </div>
              <table class="table table-striped" id="invoice_item_table">
                <thead>
                  <tr>
                    <th>S/N</th>
                    <th>Item Names</th>
                    <th>Quantity</th>
                    <th>Item Price</th>
                    <!-- <th>Actual Price</th>
                    <th>Discount %</th> -->
                    <th>Amount</th>
                    <th><button type="button" class="btn btn-success btn-xs" name="add_row" id="add_row"><i class="fa fa-plus"></i></button></th>
                  </tr>
                </thead>
                <tbody>
                  <!-- <tr>
                    <td><span id="sr_no">1</span></td>
                    <td>
                      <div class="form_group">
                        <select class="form-control input-sm" name="item_name[]" id="item_name1">
                          <option value="">Samsung S9</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <div class="form-group ">
                        <input class="form-control input-sm item_qty" type="number" name="item_qty[]" id="item_qty1" data-srno="1">
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <input class="form-control input-sm item_price" type="text" name="item_price[]" id="item_price1" data-srno="1" >
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <input class="form-control input-sm actual_price" type="text" name="actual_price[]" id="actual_price1" data-srno="1" >
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <input class="form-control input-sm item_discount" type="text" name="item_discount[]" id="item_discount1" data-srno="1" >
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <input class="form-control input-sm order_item_final_amount" type="text" name="order_item_final_amount[]" id="order_item_final_amount1" data-srno="1" value="0" readonly>
                      </div>
                    </td>
                  </tr> -->
                </tbody>
                <tfoot>
                  <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <!-- <th></th>
                    <th></th> -->
                    <th class="pull-right">Total</th>
                    <th>
                      <div class="form-group">
                        <input class="form-control input-sm" type="text" name="final_total_amount" id="final_total_amount" placeholder="" readonly>
                      </div>
                    </th>
                  </tr>
                </tfoot>
              </table>
                <div align="center">
                  <input type="text" name="total_item" id="total_item" value="0">
                  <td><input type="submit" class="btn btn-info pull-right" name="create_invoice" id="create_invoice" value="Create Invoice"></td>
                </div>
            </form>
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

  <!-- model view controller script -->
  <script src="<?php echo BASE_URL;?>model/view/orderview.js"></script>
  <?php 
  require_once(ROOT_PATH. "/inc/footer.php");
  ?>
