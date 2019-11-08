<?php

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['edit_product'])){

$edit_id = $_GET['edit_product'];

$get_p = "select * from products where product_id='$edit_id'";

$run_edit = mysqli_query($con,$get_p);

$row_edit = mysqli_fetch_array($run_edit);

$p_id = $row_edit['product_id'];

$p_title = $row_edit['product_title'];

$p_brand = $row_edit['brand'];
$p_image1 = $row_edit['product_img1'];
$new_p_image1= $row_edit['product_img1'];
$p_image2 = $row_edit['product_img2'];
$new_p_image2= $row_edit['product_img2'];
$p_image3 = $row_edit['product_img3'];
$new_p_image3= $row_edit['product_img3'];
$p_image4= $row_edit['product_img4'];
$new_p_image4= $row_edit['product_img4'];
$p_image5 = $row_edit['product_img5'];
$new_p_image5= $row_edit['product_img5'];
$p_image6 = $row_edit['product_img6'];
$new_p_image6= $row_edit['product_img6'];
$p_image7 = $row_edit['product_img7'];
$new_p_image7= $row_edit['product_img7'];
$p_image8 = $row_edit['product_img8'];
$new_p_image8= $row_edit['product_img8'];
$p_price = $row_edit['product_price'];
$product_desc= $row_edit['product_desc'];
$p_sale_price = $row_edit['product_sale_price'];
$p_measurement= $row_edit['measurement'];
$p_quantity= $row_edit['quantity'];
$weaver = $row_edit['weaver'];
$saree_length = $row_edit['saree_length'];
$blouse_length = $row_edit['blouse_length'];
$top_length = $row_edit['top_length'];
$bottom_length = $row_edit['bottom_length'];
$dupatta_length = $row_edit['dupatta_length'];
$code = $row_edit['code'];
$weight= $row_edit['weight'];
}



?>
    <div class="clearfix"></div>

    <div class="content-wrapper">
        <div class="container-fluid">

            <!--Start Dashboard Content-->

<div class="row" ><!-- 1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->

<li class="active" >

 Products / Edit Product

</li>

</ol><!-- breadcrumb Ends -->


</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->
<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-body"><!-- panel-body Starts -->

 <form method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

                        <div class="row"><!-- row Starts -->

                            <div class="col-md-9"><!-- col-md-9 Starts -->

                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" > Product Title </label>

                                    <input type="text" name="product_title" class="form-control" required value="<?php echo $p_title; ?>">

                                </div><!-- form-group Ends -->
                                 <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" >Weaver</label>

                                    <input type="text" name="weaver" class="form-control" value="<?php echo $weaver; ?>">

                                </div><!-- form-group Ends -->
                                 <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" >Saree Length(Meters)</label>

                                    <input type="text" name="saree_length" class="form-control" value="<?php echo $saree_length; ?>">

                                </div><!-- form-group Ends -->
                               <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" >Blouse Length(Meters) </label>

                                    <input type="text" name="blouse_length" class="form-control" value="<?php echo $blouse_length; ?>">

                                </div><!-- form-group Ends -->
                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" >Top Length(Meters) </label>

                                    <input type="text" name="top_length" class="form-control" value="<?php echo $top_length; ?>">

                                </div><!-- form-group Ends -->
                                 <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" >Bottom Length(Meters) </label>

                                    <input type="text" name="bottom_length" class="form-control" value="<?php echo $bottom_length; ?>">

                                </div><!-- form-group Ends -->
                                 <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" >Dupatta Length(Meters) </label>

                                    <input type="text" name="dupatta_length" class="form-control" value="<?php echo $dupatta_length; ?>">

                                </div><!-- form-group Ends -->
                                 <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" > Product Price </label>

                                    <input type="text" name="product_price" class="form-control" value="<?php echo $p_price; ?>">

                                </div><!-- form-group Ends -->
                                  <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" > Product Code </label>

                                    <input type="text" name="code" class="form-control" value="<?php echo $code; ?>">

                                </div><!-- form-group Ends -->
                               
                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" >Weight</label>

                                    <input type="text" name="weight" class="form-control" value="<?php echo $weight; ?>">

                                </div><!-- form-group Ends -->
                               
                            </div><!-- col-md-9 Ends -->

                            <div class="col-md-3"><!-- col-md-3 Starts -->
                             
                               
                                 
                              <div class="form-group" ><!-- form-group Starts -->

<label class="control-label" > Product Image1  </label>
<input type="file" name="product_img1" class="form-control" >
<br><img src="product_images/<?php echo $p_image1; ?>" width="100" height="100" >



</div><!-- form-group Ends -->
<div class="form-group" ><!-- form-group Starts -->

<label class="control-label" > Product Image2  </label>

<input type="file" name="product_img2" class="form-control" >
<br><?php if($p_image2 !=''){?><img src="product_images/<?php echo $p_image2; ?>" width="100" height="100" ><?php } ?>

</div><!-- form-group Ends -->
<div class="form-group" ><!-- form-group Starts -->

<label class="control-label" > Product Image3  </label>

<input type="file" name="product_img3" class="form-control" >
<br><?php if($p_image3 !=''){?><img src="product_images/<?php echo $p_image3; ?>" width="100" height="100" ><?php } ?>



</div><!-- form-group Ends -->
<div class="form-group" ><!-- form-group Starts -->

<label class="control-label" > Product Image4  </label>

<input type="file" name="product_img4" class="form-control" >
<br><?php if($p_image4 !=''){?><img src="product_images/<?php echo $p_image4; ?>" width="100" height="100" ><?php } ?>
</div><!-- form-group Ends -->
<div class="form-group" ><!-- form-group Starts -->

<label class="control-label" > Product Image5 </label>

<input type="file" name="product_img5" class="form-control" >
<br><?php if($p_image5 !=''){?><img src="product_images/<?php echo $p_image5; ?>" width="100" height="100" ><?php } ?>
</div><!-- form-group Ends -->
<div class="form-group" ><!-- form-group Starts -->

<label class="control-label" > Product Image6  </label>

<input type="file" name="product_img6" class="form-control" >
<br><?php if($p_image6 !=''){?><img src="product_images/<?php echo $p_image6; ?>" width="100" height="100" ><?php } ?>
</div><!-- form-group Ends -->
 </div><!-- col-md-3 Ends -->
  </div><!-- row Ends -->
                        <div class="form-group text-center" ><!-- form-group Starts -->

                            <label class="control-label" ></label>

                            <input type="submit" name="update" value="Insert Product" class="btn btn-primary " >

                        </div><!-- form-group Ends -->

                    </form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<!--End Dashboard Content-->

 </div>
        <!-- End container-fluid-->

    </div><!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

<?php

if(isset($_POST['update'])){

$product_title = $_POST['product_title'];
$product_brand = $_POST['brand'];
$product_price = $_POST['product_price'];
$product_sale_price = $_POST['product_sale_price'];
$quantity= $_POST['quantity'];
$p_desc = $_POST['desc'];
$measurement = $_POST['measurement'];
 $weaver =$_POST['weaver'];

        $product_price =$_POST['product_price'];

        $saree_length=$_POST['saree_length'];
        
        $blouse_length =$_POST['blouse_length'];

        $top_length=$_POST['top_length'];

        $bottom_length =$_POST['bottom_length'];

        $dupatta_length =$_POST['dupatta_length'];

        $code =$_POST['code'];

        $weight =$_POST['weight'];


$product_material = $_POST['product_material'];
$product_img1 = $_FILES['product_img1']['name'];

$temp_name1 = $_FILES['product_img1']['tmp_name'];

if(empty($product_img1)){

$product_img1 = $new_p_image1;

}

move_uploaded_file($temp_name1,"product_images/$product_img1");
$product_img2 = $_FILES['product_img2']['name'];

$temp_name2= $_FILES['product_img2']['tmp_name'];

if(empty($product_img2)){

$product_img2 = $new_p_image2;

}

move_uploaded_file($temp_name2,"product_images/$product_img2");
$product_img3 = $_FILES['product_img3']['name'];

$temp_name3 = $_FILES['product_img3']['tmp_name'];

if(empty($product_img3)){

$product_img3 = $new_p_image3;

}

move_uploaded_file($temp_name3,"product_images/$product_img3");

$product_img4 = $_FILES['product_img4']['name'];

$temp_name4 = $_FILES['product_img4']['tmp_name'];

if(empty($product_img4)){

$product_img4 = $new_p_image4;

}

move_uploaded_file($temp_name4,"product_images/$product_img4");
$product_img5 = $_FILES['product_img5']['name'];

$temp_name5 = $_FILES['product_img5']['tmp_name'];

if(empty($product_img5)){

$product_img5= $new_p_image5;

}

move_uploaded_file($temp_name5,"product_images/$product_img5");
$product_img6 = $_FILES['product_img6']['name'];

$temp_name6 = $_FILES['product_img6']['tmp_name'];

if(empty($product_img6)){

$product_img6 = $new_p_image6;

}

move_uploaded_file($temp_name6,"product_images/$product_img6");
$product_img7 = $_FILES['product_img7']['name'];

$temp_name7 = $_FILES['product_img7']['tmp_name'];

if(empty($product_img7)){

$product_img7 = $new_p_image7;

}

move_uploaded_file($temp_name7,"product_images/$product_img7");
$product_img8 = $_FILES['product_img8']['name'];
$temp_name8 = $_FILES['product_img8']['tmp_name'];
if(empty($product_img8)){

$product_img8 = $new_p_image8;

}

move_uploaded_file($temp_name8,"product_images/$product_img8");
$update_product = "update products set product_title='$product_title',product_img1='$product_img1',product_img2='$product_img2',product_img3='$product_img3',product_img4='$product_img4',product_img5='$product_img5',product_img6='$product_img6',product_price='$product_price',weaver='$weaver',saree_length='$saree_length',blouse_length='$blouse_length',top_length='$top_length',bottom_length='$bottom_length',dupatta_length='$dupatta_length',code='$code',weight='$weight' where product_id='$p_id'";

$run_product = mysqli_query($con,$update_product);

if($run_product){

echo "<script> alert('Product has been updated successfully') </script>";

echo "<script>window.open('index.php?view_products','_self')</script>";

}

}

?>

<?php } ?>
