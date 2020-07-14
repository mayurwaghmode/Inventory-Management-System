<?php
include_once('db_connect.php');
include_once("DBOperation.php");
include_once("manageorder.php");
if (isset($_POST["getNewOrderIterm"])) {
	 
        $obj  = new DBOperation();
        $rows =  $obj->getAllRecord("inventory");

                                   
	?>
	<tr>
		    <td><b class="number">1</b></td>
		    <td>
		        <select name="pid[]" class="form-control form-control-sm pid" required>
		            <option value="">Choose Product</option>
		            <?php 
		            	foreach ($rows as $row) {
		            		?><option value="<?php echo $row['id']; ?>"><?php echo $row["product_name"]; ?></option><?php
		            	}
		            ?>
		        </select> 
		    </td>
		    <td><input style="background-color:#008080;" name="tqty[]" readonly type="text" class="form-control form-control-sm tqty"></td>   
		    <td><input name="qty[]" type="text" class="form-control form-control-sm qty" required></td>
		    <td><input style="background-color:#008080;" name="price[]" type="text" class="form-control form-control-sm price" readonly></span>
		    <span><input name="pro_name[]" type="hidden" class="form-control form-control-sm pro_name"></td>
		    <td>Rs.<span class="amt">0</span></td>
	</tr>
	<?php
	exit();
}
if(isset($_POST["getPriceAndQty"])){
	$m = new Manageorder();
	$result = $m->getSingleRecord("inventory","id",$_POST["id"]);
	echo json_encode($result);
	exit();
}
if(isset($_POST["order_date"]) AND isset($_POST["cust_name"])){
	$orderdate = $_POST["order_date"];
	$cust_name = $_POST["cust_name"];
	$ar_tqty = $_POST["tqty"];
	$ar_qty = $_POST["qty"];
	$ar_price = $_POST["price"];
	$ar_pro_name = $_POST["pro_name"];


	$sub_total = $_POST["sub_total"];
	$gst = $_POST["gst"];
	$discount = $_POST["discount"];
	$net_total = $_POST["net_total"];
	$paid = $_POST["paid"];
	$due = $_POST["due"];
	$payment_type = $_POST["payment_type"];


	$m = new Manageorder();
	echo $result = $m->storeCustomerOrderInvoice($orderdate,$cust_name,$ar_tqty,$ar_qty,$ar_price,$ar_pro_name,$sub_total,$gst,$discount,$net_total,$paid,$due,$payment_type);


}
?>