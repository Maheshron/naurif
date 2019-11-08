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

            <div class="row mt-4">
                <div class="col-12 col-lg-6 col-xl-3">
                     <div class="card gradient-scooter">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body text-left">
                                    <h4 class="text-white">2500</h4>
                                    <span class="text-white">Customers</span>
                                </div>
                                <div class="align-self-center"><span id="dash-chart-2"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3">
                   
                    <div class="card gradient-purpink">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body text-left">
                                    <h4 class="text-white">4530</h4>
                                    <span class="text-white">Products</span>
                                </div>
                                <div class="align-self-center"><span id="dash-chart-1"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3">
                    <div class="card gradient-ibiza">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body text-left">
                                    <h4 class="text-white">7850</h4>
                                    <span class="text-white">Orders</span>
                                </div>
                                <div class="align-self-center"><span id="dash-chart-3"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3">
                    <div class="card gradient-ohhappiness">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body text-left">
                                    <h4 class="text-white">3524</h4>
                                    <span class="text-white">Payments</span>
                                </div>
                                <div class="align-self-center"><span id="dash-chart-4"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End Row-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-0">
                            Recent Orders
                            <div class="card-action">
                                <div class="dropdown">
                                    <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                                        <i class="icon-options"></i>
                                    </a>
                                    <div class="dropdown-menu animated fadeIn dropdown-menu-right">
                                        <a class="dropdown-item" href="index.php?view_orders">View All</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-warning shadow-warning">
                                <tr>
                                    <th>Id</th>
                                    <th>Photo</th>
                                    <th>Product</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <img alt="Image placeholder" src="../img/product images/Arjuna_tablet.jpg" class="product-img" alt="product img" style="height:50px;width:50px;">
                                    </td>
                                    <td>Sample</td>
                                    <td>Rs 1,840</td>
                                    <td>10 July 2018</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <img alt="Image placeholder" src="../img/product images/Arjuna_tablet.jpg" class="product-img" alt="product img" style="height:50px;width:50px;">
                                    </td>
                                    <td>Sample</td>
                                     <td>Rs 1,840</td>
                                    <td>12 July 2018</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                   <td>
                                        <img alt="Image placeholder" src="../img/product images/Arjuna_tablet.jpg" class="product-img" alt="product img" style="height:50px;width:50px;">
                                    </td>
                                    <td>Sample</td>
                                     <td>Rs 1,840</td>
                                    <td>14 July 2018</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        <img alt="Image placeholder" src="../img/product images/Arjuna_tablet.jpg" class="product-img" alt="product img" style="height:50px;width:50px;">
                                    </td>
                                    <td>Sample</td>
                                    <td>Rs 1,840</td>
                                    <td>16 July 2018</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        <img alt="Image placeholder" src="../img/product images/Arjuna_tablet.jpg" class="product-img" alt="product img" style="height:50px;width:50px;">
                                    </td>
                                    <td>Sample</td>
                                     <td>Rs 1,840</td>
                                    <td>17 July 2018</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                   <td>
                                        <img alt="Image placeholder" src="../img/product images/Arjuna_tablet.jpg" class="product-img" alt="product img" style="height:50px;width:50px;">
                                    </td>
                                    <td>Sample</td>
                                    <td>Rs 1,840</td>
                                    <td>18 July 2018</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!--End Row-->
            <!--End Dashboard Content-->

        </div>
        <!-- End container-fluid-->

    </div><!--End content-wrapper-->
      <?php include("includes/footer.php");  ?>
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->


<?php } ?>