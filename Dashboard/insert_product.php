<?php


if(!isset($_SESSION['admin_email'])){


    echo "<script>window.open('login.php','_self')</script>";

}

else {

    ?>
    <div class="clearfix"></div>

    <div class="content-wrapper">
        <div class="container-fluid">

            <!--Start Dashboard Content-->

<div class="row" ><!-- 1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->

<li class="active" >

 Products / Insert Products

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

                                    <input type="text" name="product_title" class="form-control" autocomplete="off" required >

                                </div><!-- form-group Ends -->
                               
                                 <div class="form-group" ><!-- form-group Starts -->

                                    <label  for="exampleInputEmail1"> Category </label>

                                    <select name="cat" id="type" class="form-control" required>

                                        <option> Select  Category </option>

                                        <?php

                                        $get_cats = "select * from ".categories."  order by cat_id asc ";

                                        $run_cats = mysqli_query($con,$get_cats);

                                        while ($row_cats=mysqli_fetch_array($run_cats)) {

                                            $cat_id = $row_cats['cat_id'];

                                            $cat_title = $row_cats['cat_title'];

                                            echo "<option value='$cat_id'  >$cat_title</option>";

                                        }

                                        ?>

                                    </select>

                                </div><!-- form-group Ends -->
                                 
                                <div class="form-group" ><!-- form-group Starts -->

                                    <label for="exampleInputEmail1"> Sub Category </label>

                                    <select name="product_cat" id="type1" class="form-control" required>

                                        <option> Select Sub Category </option>

<!--                                        --><?php
//
//                                        $get_p_cats = "select * from product_categories WHERE parent=0 ORDER BY p_cat_id";
//
//                                        $run_p_cats = mysqli_query($con,$get_p_cats);
//
//                                        while ($row_p_cats=mysqli_fetch_array($run_p_cats)) {
//
//                                            $p_cat_id = $row_p_cats['p_cat_id'];
//
//                                            $p_cat_title = $row_p_cats['p_cat_title'];
//
//                                            echo "<option value='$p_cat_id'  >$p_cat_title</option>";
//
//                                        }
//
//
//                                        ?>

                                    </select>
                                  </div><!-- form-group Ends -->
                                
                                <div class="form-group" ><!-- form-group Starts -->

                                    <label for="exampleInputEmail1" >Product Category </label>

                                    <select name="sub_cat" id="type2" class="form-control" required>

                                        <option> Select Product Category </option>
<!--                                        --><?php
//
//                                        $get_p_cats = "select * from product_categories WHERE parent>0 ORDER BY p_cat_id";
//
//                                        $run_p_cats = mysqli_query($con,$get_p_cats);
//
//                                        while ($row_p_cats=mysqli_fetch_array($run_p_cats)) {
//
//                                            $p_cat_id = $row_p_cats['p_cat_id'];
//
//                                            $p_cat_title = $row_p_cats['p_cat_title'];
//
//                                            echo "<option value='$p_cat_id'  >$p_cat_title</option>";
//
//                                        }
//
//
//                                        ?>

                                    </select>

                                </div><!-- form-group Ends -->
                               <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" >Weaver</label>

                                    <input type="text" name="weaver" class="form-control" autocomplete="off">

                                </div><!-- form-group Ends -->
                                 <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" >Saree Length(Meters)</label>

                                    <input type="text" name="saree_length" class="form-control" autocomplete="off">

                                </div><!-- form-group Ends -->
                               <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" >Blouse Length(Meters) </label>

                                    <input type="text" name="blouse_length" class="form-control" autocomplete="off">

                                </div><!-- form-group Ends -->
                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" >Top Length(Meters) </label>

                                    <input type="text" name="top_length" class="form-control" autocomplete="off">

                                </div><!-- form-group Ends -->
                                 <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" >Bottom Length(Meters) </label>

                                    <input type="text" name="bottom_length" class="form-control" autocomplete="off">

                                </div><!-- form-group Ends -->
                                 <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" >Dupatta Length(Meters) </label>

                                    <input type="text" name="dupatta_length" class="form-control" autocomplete="off">

                                </div><!-- form-group Ends -->
                            </div><!-- col-md-9 Ends -->

                            <div class="col-md-3"><!-- col-md-3 Starts -->
                             
                               
                                 <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" > Product Price </label>

                                    <input type="text" name="product_price" class="form-control" autocomplete="off">

                                </div><!-- form-group Ends -->
                                  <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" > Product Code </label>

                                    <input type="text" name="code" class="form-control" autocomplete="off">

                                </div><!-- form-group Ends -->
                               
                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" >Weight(Grams)</label>

                                    <input type="text" name="weight" class="form-control" autocomplete="off">

                                </div><!-- form-group Ends -->
                               
                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" > Product Image 1 </label>

                                    <input type="file" name="product_img1" class="form-control" required >

                                </div><!-- form-group Ends -->

                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" > Product Image 2 </label>


                                    <input type="file" name="product_img2" class="form-control">

                                </div><!-- form-group Ends -->

                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" > Product Image 3 </label>

                                    <input type="file" name="product_img3" class="form-control">

                                </div><!-- form-group Ends -->
                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" > Product Image 4 </label>

                                    <input type="file" name="product_img4" class="form-control">

                                </div><!-- form-group Ends -->
                                 <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" > Product Image 5 </label>

                                    <input type="file" name="product_img5" class="form-control">

                                </div><!-- form-group Ends -->
                                 <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" > Product Image 6 </label>

                                    <input type="file" name="product_img6" class="form-control">

                                </div><!-- form-group Ends -->
                            </div><!-- col-md-3 Ends -->


                        </div><!-- row Ends -->

                        <div class="form-group text-center" ><!-- form-group Starts -->

                            <label class="control-label" ></label>

                            <input type="submit" name="submit" value="Insert Product" class="btn btn-primary " >

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

    if(isset($_POST['submit'])){

        $product_title = mysqli_real_escape_string($con, $_POST['product_title']);

        $sub_cat = mysqli_real_escape_string($con, $_POST['sub_cat']);

        $weaver = mysqli_real_escape_string($con, $_POST['weaver']);

        $product_price = mysqli_real_escape_string($con, $_POST['product_price']);

        $saree_length= mysqli_real_escape_string($con, $_POST['saree_length']);
        
        $blouse_length = mysqli_real_escape_string($con, $_POST['blouse_length']);

        $top_length= mysqli_real_escape_string($con, $_POST['top_length']);

        $bottom_length = mysqli_real_escape_string($con, $_POST['bottom_length']);

        $dupatta_length = mysqli_real_escape_string($con, $_POST['dupatta_length']);

        $code = mysqli_real_escape_string($con, $_POST['code']);

        $weight = mysqli_real_escape_string($con, $_POST['weight']);


        $product_weight = "0.0";


        $status = "product";

        $product_img1 = $_FILES['product_img1']['name'];
        $product_img2 = $_FILES['product_img2']['name'];
        $product_img3 = $_FILES['product_img3']['name'];
        $product_img4 = $_FILES['product_img4']['name'];
        $product_img5 = $_FILES['product_img5']['name'];
        $product_img6 = $_FILES['product_img6']['name'];
 


        $temp_name1 = $_FILES['product_img1']['tmp_name'];
        $temp_name2 = $_FILES['product_img2']['tmp_name'];
        $temp_name3 = $_FILES['product_img3']['tmp_name'];
        $temp_name4 = $_FILES['product_img4']['tmp_name'];
        $temp_name5 = $_FILES['product_img5']['tmp_name'];
        $temp_name6 = $_FILES['product_img6']['tmp_name'];

        $allowed = array('jpeg','jpg','gif','png');

        $product_img1_extension = pathinfo($product_img1, PATHINFO_EXTENSION);

        $product_img2_extension = pathinfo($product_img2, PATHINFO_EXTENSION);

        $product_img3_extension = pathinfo($product_img3, PATHINFO_EXTENSION);

        $product_img4_extension = pathinfo($product_img4, PATHINFO_EXTENSION);
          $product_img5_extension = pathinfo($product_img5, PATHINFO_EXTENSION);
            $product_img6_extension = pathinfo($product_img6, PATHINFO_EXTENSION);

        if(!in_array($product_img1_extension,$allowed)){

            echo "<script> alert('Your Product Image 1 File Extension Is Not Supported.'); </script>";

            $product_img1 = "";

        }else{

            move_uploaded_file($temp_name1,"product_images/$product_img1");

        }

        if(!empty($product_img2)){

            if(!in_array($product_img2_extension,$allowed)){

                echo "<script> alert('Your Product Image 2 File Extension Is Not Supported.'); </script>";

                $product_img2 = "";

            }else{

                move_uploaded_file($temp_name2,"product_images/$product_img2");

            }

        }

        if(!empty($product_img3)){

            if(!in_array($product_img3_extension,$allowed)){

                echo "<script> alert('Your Product Image 3 File Extension Is Not Supported.'); </script>";

                $product_img3 = "";

            }else{

                move_uploaded_file($temp_name3,"product_images/$product_img3");

            }

        }
        if(!empty($product_img4)){

            if(!in_array($product_img4_extension,$allowed)){

                echo "<script> alert('Your Product Image 4 File Extension Is Not Supported.'); </script>";

                $product_img4 = "";

            }else{

                move_uploaded_file($temp_name4,"product_images/$product_img4");

            }

        }
        if(!empty($product_img5)){

            if(!in_array($product_img5_extension,$allowed)){

                echo "<script> alert('Your Product Image 5 File Extension Is Not Supported.'); </script>";

                $product_img5 = "";

            }else{

                move_uploaded_file($temp_name5,"product_images/$product_img5");

            }

        }if(!empty($product_img6)){

            if(!in_array($product_img6_extension,$allowed)){

                echo "<script> alert('Your Product Image 6 File Extension Is Not Supported.'); </script>";

                $product_img6 = "";

            }else{

                move_uploaded_file($temp_name6,"product_images/$product_img6");

            }

        }


        $insert_product = "insert into products (p_cat_id,date,product_title,product_img1,product_img2,product_img3,product_img4,product_img5,product_img6,product_price,weaver,saree_length,blouse_length,top_length,bottom_length,dupatta_length,code,weight)  values ('$sub_cat',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_img4','$product_img5','$product_img6','$product_price','$weaver','$saree_length','$blouse_length','$top_length','$bottom_length','$dupatta_length','$code','$weight')";

        $run_product = mysqli_query($con,$insert_product);

        if($run_product){

            echo "<script>alert('Product has been inserted successfully')</script>";

            echo "<script>window.open('index.php?insert_product','_self')</script>";

        }

    }

    ?>

<?php } ?>
<script type="text/javascript">
    jQuery('select[name="parent"]').change(get_child_options);
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){

        $('#type').on("change",function () {
            var categoryId = $(this).find('option:selected').val();
            $.ajax({
                url: "ajaxx.php",
                type: "POST",
                data: "categoryId="+categoryId,
                success: function (response) {
                    console.log(response);
                    $("#type1").html(response);
                },
            });
        });

    });
    $(document).ready(function(){

        $('#type').on("change",function () {
            var subcategoryId = $(this).find('option:selected').val();

            $.ajax({
                url: "ajaxx.php",
                type: "POST",
                data: "subcategoryId="+subcategoryId,
                success: function (response) {
                    console.log(response);
                    $("#type2").html(response);
                },
            });
        });

    });

</script>