<?php

if(isset($_POST['update']))
{
    $product_name = mysqli_real_escape_string($link, $_POST['product_name']);
    $product_price=$_POST['product_price'];
    $product_quantity=$_POST['product_quantity'];
    $category=$_POST['category'];
    $update_id=$_POST['id'];
    //File Upload and Save

   

    

       $update_query = mysqli_query($link, "UPDATE `inventory` SET `product_name`='$product_name',`product_price`='$product_price', `product_quantity`='$product_quantity', `category`='$category' WHERE `id`='$update_id'");
        if ($update_query) {
            print "<script>alert('Data Updated'); window.location.href= 'datatable_inventory.php';</script>";
        }
        else {
            print mysqli_errno($link);
        }
}
?>
