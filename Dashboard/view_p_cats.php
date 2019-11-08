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

Sub Categories / View Sub-Categories

</li>

</ol><!-- breadcrumb Ends -->


</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h4 class="panel-title" >

<i class="fa fa-money fa-fw"></i> View Sub-Categories

</h4>

</div><!-- panel-heading Ends -->
<div class="panel-body card"><!-- panel-body Starts -->

<div class="table-responsive"><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->

<thead class="thead-warning shadow-warning"><!-- thead Starts -->

<tr>

<th>Category Id</th>
<th>Category Title</th>
<th>Parent</th>
<th>Delete</th>
<th>Edit</th>
</tr>
</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->

<?php

$i=0;

$get_p_cats = "select * from product_categories WHERE parent=0";
$run_p_cats = mysqli_query($con,$get_p_cats);
while($row_p_cats = mysqli_fetch_array($run_p_cats)){
$parent_id=$row_p_cats['p_cat_id'];
$catid=$row_p_cats['catid'];
$sql2="Select * from product_categories WHERE parent='$parent_id'";
$result = mysqli_query($con,$sql2);
$p_cat_id = $row_p_cats['p_cat_id'];

$p_cat_title = $row_p_cats['p_cat_title'];

$i++;
?>
<style>
    #style_parent{
        font-weight:bold;
        color:black;
    }
</style>
<tr>

<td id="style_parent" class="text-center"> <?php echo $i; ?> </td>

<td id="style_parent"> <?php echo $p_cat_title; ?> </td>

<td id="style_parent">Parent</td>
<td id="style_parent" class="text-center">

<a id="style_parent" href="index.php?delete_p_cat=<?php echo $p_cat_id; ?>">

 Delete

</a>

</td >

<td id="style_parent" class="text-center">

<a id="style_parent" href="index.php?edit_p_cat=<?php echo $p_cat_id; ?>">

Edit

</a>

</td >

</tr>
    <?php while ($child=mysqli_fetch_assoc($result)):
    $p_cat_id = $child['p_cat_id'];?>
        <tr >
<td></td>
<!--            <td> --><?php //echo $i; ?><!-- </td>-->

            <td style="background-color:#d1d1e0";> <?php echo $child['p_cat_title']; ?> </td>

            <td><?php echo $p_cat_title; ?></td>
            <td class="text-center">

                <a href="index.php?delete_p_cat=<?php echo $p_cat_id; ?>">

                    Delete

                </a>

            </td>

            <td class="text-center">

                <a href="index.php?edit_p_cat=<?php echo $p_cat_id; ?>">

                    Edit

                </a>

            </td>


        </tr>
        
         <?php $sql22="Select * from product_categories WHERE parent='$p_cat_id'";
$result1 = mysqli_query($con,$sql22);
while ($child1=mysqli_fetch_assoc($result1)):
    $p_cat_id1 = $child1['p_cat_id'];?>
        <tr >
<td></td>
<!--            <td> --><?php //echo $i; ?><!-- </td>-->

            <td style="background-color:#f3d8d8;"> <?php echo $child1['p_cat_title']; ?> </td>

            <td><?php echo $p_cat_title; ?></td>
            <td class="text-center">

                <a href="index.php?delete_p_cat=<?php echo $p_cat_id1; ?>">

                    Delete

                </a>

            </td>

            <td class="text-center">

                <a href="index.php?edit_p_cat=<?php echo $p_cat_id1; ?>">

                    Edit

                </a>

            </td>


        </tr>
         
         <?php $sql23="Select * from product_categories WHERE parent='$p_cat_id1'";
$result3 = mysqli_query($con,$sql23);
while ($child3=mysqli_fetch_assoc($result3)):
  $p_cat_id2 = $child3['p_cat_id'];?>
        <tr >
<td></td>
<!--            <td> --><?php //echo $i; ?><!-- </td>-->

            <td> <?php echo $child3['p_cat_title']; ?> </td>

            <td><?php echo $p_cat_title; ?></td>
            <td class="text-center">

                <a href="index.php?delete_p_cat=<?php echo $p_cat_id2; ?>">

                    Delete

                </a>

            </td>

            <td class="text-center">

                <a href="index.php?edit_p_cat=<?php echo $p_cat_id2; ?>">

                    Edit

                </a>

            </td>


        </tr>
        <?php endwhile; ?>
        <?php endwhile; ?>
        <?php endwhile; ?>
        
<?php } ?>


</tbody><!-- tbody Ends -->

</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

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

<?php } ?>