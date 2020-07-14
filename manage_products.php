
<?php
require 'db_connect.php';
include 'logout.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Manage Producct</title>
    <?php include 'head.php';?>
</head>

<body>
<div id="wrapper">
<div class="overlay"><div class="loader"></div></div>
    <!-- Navigation -->
    <?php include 'navbar.php';?>
    <script type="text/javascript" src="./js/order.js"></script>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4>New Orders</h4>
                        </div>
                        <div class="card-body">
                            <form id="get_order_data" onsubmit="return false">
                                <div class="form-group row">
                                    <label class="col-sm-3" align="right">Order Date</label>
                                    <div class="col-sm-6" >
                                        <input style="background-color:#008080;" type="text" id="order_date" name="order_date" readonly class="form-control form-control-sm" value="<?php echo date("d-m-Y"); ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3" align="right">Customer Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="cust_name" name="cust_name" class="form-control form-control-sm" placeholder="Enter Customer Name" required/>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h3>Make a order list</h3>
                                        <table align="center" style="width: 800px;">
                                            <thread>
                                                <tr>
                                                    <th>#</th>
                                                    <th style="text-align:center;">Item Name</th>
                                                    <th style="text-align:center;">Totoal Quantity</th>
                                                    <th style="text-align:center;">Quantity</th>
                                                    <th style="text-align:center;">Price</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thread>
                                            <tbody id="order_item">
                                            </tbody>
                                        </table>
                                        <center style="padding: 10px;">
                                        <button id="add" style="width: 150px;" class="btn btn-success">Add</button>
                                        <button id="remove" style="width: 150px;" class="btn btn-danger">Remove</button>
                                        </center>
                                    </div>
                                </div>

                                <p></p>

                    <div class="form-group row">
                      <label  for="sub_total" class="col-sm-3 col-form-label" align="right">Sub Total</label>
                      <div class="col-sm-6">
                        <input style="background-color:#008080;" type="text" readonly name="sub_total" class="form-control form-control-sm" id="sub_total" required/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="gst" class="col-sm-3 col-form-label" align="right">GST (18%)</label>
                      <div class="col-sm-6">
                        <input style="background-color:#008080;" type="text" readonly name="gst" class="form-control form-control-sm" id="gst" required/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="discount" class="col-sm-3 col-form-label" align="right">Discount</label>
                      <div class="col-sm-6">
                        <input type="text" name="discount" class="form-control form-control-sm" id="discount" required/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="net_total" class="col-sm-3 col-form-label" align="right">Net Total</label>
                      <div class="col-sm-6">
                        <input style="background-color:#008080;" type="text" readonly name="net_total" class="form-control form-control-sm" id="net_total" required/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="paid" class="col-sm-3 col-form-label" align="right">Paid</label>
                      <div class="col-sm-6">
                        <input type="text" name="paid" class="form-control form-control-sm" id="paid" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="due" class="col-sm-3 col-form-label" align="right">Due</label>
                      <div class="col-sm-6">
                        <input style="background-color:#008080;" type="text" readonly name="due" class="form-control form-control-sm" id="due" required/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="payment_type" class="col-sm-3 col-form-label" align="right">Payment Method</label>
                      <div class="col-sm-6">
                        <select name="payment_type" class="form-control form-control-sm" id="payment_type" required/>
                          <option>Cash</option>
                          <option>Card</option>
                          <option>Draft</option>
                          <option>Cheque</option>
                        </select>
                      </div>
                    </div>
                    <center>
                      <input type="submit" id="order_form" style="width:150px;" class="btn btn-info" value="Order">
                            </form>
                    </div>
                </div>
        </div>

<?php include 'footer_js.php';?>

</body>

</html>