<?php
$get_p_cats = "select * from product_categories ";

$run_p_cats = mysqli_query($con,$get_p_cats);
$get_cats = "select * from categories ";

$run_cats = mysqli_query($con,$get_cats);
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

 Sub Categories / Insert Sub Categories

</li>

</ol><!-- breadcrumb Ends -->


</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->
<div class="row"><!-- 2 row Starts -->
<div class="col-lg-3">
    
</div><!-- col-lg-3 Starts -->
<div class="col-lg-9"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-body" ><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->
<div id="errors"></div>
    <div class="form-group" ><!-- form-group Starts -->

        <label class="col-md-6 control-label" >Main Category Title</label>

        <div class="col-md-6" >

            <select type="text" name="mainparent" class="form-control" >
                <option value="0">Main Category</option>
                <?php while ($mainparent=mysqli_fetch_assoc($run_cats)) : ?>
                    <option value="<?php echo $mainparent['cat_id']; ?>"><?php echo $mainparent['cat_title']; ?></option>
                <?php endwhile; ?>

            </select>

        </div>


    </div><!-- form-group Ends -->
<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-6 control-label" >Product Category Title</label>

<div class="col-md-6" >

    <select type="text" name="parent" class="form-control" >
        <option value="0">Parent</option>
        <?php while ($parent=mysqli_fetch_assoc($run_p_cats)) : ?>
        <option value="<?php echo $parent['p_cat_id']; ?>"><?php echo $parent['p_cat_title']; ?></option>
        <?php endwhile; ?>

    </select>

</div>


</div><!-- form-group Ends -->
    <div class="form-group" ><!-- form-group Starts -->

        <label class="col-md-6 control-label" >Product Sub-Category Title</label>

        <div class="col-md-6" >

            <input type="text" name="category" class="form-control" autocomplete="off">

        </div>


    </div><!-- form-group Ends -->



<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-offset-1 col-md-4" >

<input type="submit" name="submit" value="Insert Sub-Category" class="btn btn-primary form-control" >

</div>

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
$errors=array();
if(isset($_POST['submit'])) {
    $mainparent = $_POST['mainparent'];
    $parent = $_POST['parent'];
    $category= $_POST['category'];
    $sqlform = "select * from product_categories WHERE p_cat_title='$category' and parent='$parent'";
    $fresult = mysqli_query($con, $sqlform);
    $count = mysqli_num_rows($fresult);
    
       
$insert_p_cat = "insert into product_categories (p_cat_title,parent,catid) values ('$category','$parent','$mainparent')";

$run_p_cat = mysqli_query($con,$insert_p_cat);


echo "<script>window.open('index.php?view_p_cats','_self')</script>";








}
?>

<?php } ?>