<?php
$product_name = $product_des = $product_price = $product_quantity = "";
$nameErr = $desErr = $priceErr = $quantityErr = "";
if(isset($_POST['submit']))
{

    $product_name = mysqli_real_escape_string($link, $_POST['product_name']);
    $product_price=$_POST['product_price'];
    $product_quantity=$_POST['product_quantity'];
    $category=$_POST['category'];
    



    $q_check=mysqli_query($link,"select * from inventory where product_name='$product_name'");
    if(mysqli_num_rows($q_check)==0) {

       

        $insert_query = mysqli_query($link, "INSERT INTO `inventory`(`product_name`, `product_price`, `product_quantity`, `category`) VALUES ('$product_name','$product_price','$product_quantity','$category')");
        if ($insert_query){
            print "<script>alert('Data Inserted'); window.location.href= 'datatable_inventory.php';</script>";
        }
        else{
            print mysqli_errno($link);
        }
    }
    else
    {
        print "<script>alert('Data Already Inserted!')</script>";
    }

}

?>