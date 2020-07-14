<?php

class Manageorder
{
	
	private $con;

	function __construct()
	{
		include_once("db_connect.php");
		$db = new Database();
		$this->con = $db->connect();
	}

	public function getSingleRecord($table,$pk,$id){
		$sql = "SELECT * FROM ".$table." WHERE ".$pk."= ? LIMIT 1";


		if($query = $this->con->prepare($sql)) { // assuming $mysqli is the connection
 		   $query->bind_param('i', $id);
    	   $query->execute();
    	   $result = $query->get_result();
			if ($result->num_rows == 1) {
				$row = $result->fetch_assoc();
			}
			return $row;
  
		} 


	}
	public function storeCustomerOrderInvoice($orderdate,$cust_name,$ar_tqty,$ar_qty,$ar_price,$ar_pro_name,$sub_total,$gst,$discount,$net_total,$paid,$due,$payment_type){
		$pre_stmt = $this->con->prepare("INSERT INTO 
			`invoice`(`customer_name`, `order_date`, `sub_total`,
			 `gst`, `discount`, `net_total`, `paid`, `due`, `payment_type`) VALUES (?,?,?,?,?,?,?,?,?)");
		$pre_stmt->bind_param("ssdddddds",$cust_name,$orderdate,$sub_total,$gst,$discount,$net_total,$paid,$due,$payment_type);
		$pre_stmt->execute() or die($this->con->error);
		$invoice_no = $pre_stmt->insert_id;
		if ($invoice_no != null) {
			for ($i=0; $i < count($ar_price) ; $i++) {

				//Here we are finding the remaing quantity after giving customer
				$rem_qty = $ar_tqty[$i] - $ar_qty[$i];
				if ($rem_qty < 0) {
					return "ORDER_FAIL_TO_COMPLETE";
				}else{
					//Update Product stock
					$sql = "UPDATE inventory SET product_quantity = '$rem_qty' WHERE product_name = '".$ar_pro_name[$i]."'";
					$this->con->query($sql);
				}


				$insert_product = $this->con->prepare("INSERT INTO `invoice_details`(`invoice_no`, `product_name`, `price`, `qty`)
				 VALUES (?,?,?,?)");
				$insert_product->bind_param("isdd",$invoice_no,$ar_pro_name[$i],$ar_price[$i],$ar_qty[$i]);
				$insert_product->execute() or die($this->con->error);
			}
			return "ORDER_COMPLETED";
		}



	}


		
}	

?>