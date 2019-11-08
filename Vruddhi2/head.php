<div data-role="page" class="data-main">

    <header id="site-header" class="site-header testcahe" role="banner">
<div class="header-top">
        <p><i>Introducing Custom Made Kurtas For Men.</i> <a href="#"><u>Get Started Now!</u></a></p>
        </div>
        <div class="site-search">
            <div class="container">
                <form action="/catalog/search/" id="searchform">
                    <button type="submit" class="search-box_submit" title="GO"><i class="icon-search"></i></button>
                    <input type="text" class="search-input" placeholder="Search for a product..." name='q' value="" id="searchq" />
                    <a href="#" class="search-close"><i class="icon-close"></i></a>
                </form>

            </div><!-- .container -->
        </div><!-- .site-search -->
        
        
         <div class="container site">
            <div class="site-branding clearfix">

                <span class="contact-no"><a href="#" onclick="goog_report_conversion('tel:+ 91-0123456789')">+91 - 0123456789</a></span>
                <!--<span class="nt-fixed" ><a href="https://api.whatsapp.com/send?phone=+917338875061" target="_blank" class="mob-call-us class-wt-im desk-left-call" ><img src="https://www.parisera.com/data/images/if_whatsapp_287520.png"></a></span>-->
                <span class="contact-no class-wt-ims"><a href="#" target="_blank"><img src="https://www.parisera.com/data/images/if_whatsapp_287520.png"></a></span>
                <span class="nav-toggle">
                    <span></span><span></span><span></span>
                </span>
                <ul class="list-unstyled site-order">
                    <li><a href="#" id="cart-icon" title="View Cart"> <span class="glyphicon glyphicon-shopping-cart"></span><span class="cart-box-value"> 0</span></a></li>
                    
                    <li><a class="login-popup" href="#" title="Wishlist"> <span class="glyphicon glyphicon-heart"></span></a></li>
                    <li>
                        <a href="#" class="login-text-link login-popup" title="Login"><i class="sprite user"></i>Login</a> / <a href="#" class="login-text-link login-popup">join</a></li>
                </ul>
                                <a href="index.php" class="site-logo"><img src="images/VRUDHI.png"></a>

          
                     <ul class="currency">
                         <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">INR <img src="images/flag.png"> <span class="caret"></span></a>
                          <ul class="dropdown-menu">
    <li><a href="#">INR - Rs.</a></li>
    <li><a href="#">USD - US Dollar</a></li>
    <li><a href="#">EUR - Euro</a></li>
     <li><a href="#">GBP - British Pound Sterling</a></li>
      <li><a href="#">JPY - Japanese Yen</a></li>
  </ul></li>
                         <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                         
                        
                     </ul>
                    

            </div><!-- .site-branding -->
        </div><!-- .container -->
        
     <div class="logo-section">
        <div class="row">
         <div class="col-md-12">
             <div class="row">
             <div class="col-md-4">
            <img src="images/VRUDHI.png">
             </div>
                 <div class="col-md-3">
                      <div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" class="  search-query form-control" placeholder="Search" />
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button">
                                        <span class=" fa fa-search"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
                 </div>
                 <div class="col-md-5">
                 <div class="row signup-detiles">
                     <ul>
                     <li><a href="login.php">Sign In</a></li>
                         <li><a href="register.php">Sign Up</a></li>
                         <li><a href="#">Vruddhi Family</a></li>
                         <li><a href="#">Track Your Order</a></li>
                         <li><a href="#">Store Locator</a></li>
                        
                     </ul>
                     </div>
            <div class="row currency">
                     <ul>
                     <li><a href="#"><i class="fa fa-phone" title="0123456789"></i></a></li>
                         <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">INR <img src="images/flag.png"> <span class="caret"></span></a>
                          <ul class="dropdown-menu">
   <li><a href="#">INR - Rs.</a></li>
    <li><a href="#">USD - US Dollar</a></li>
    <li><a href="#">EUR - Euro</a></li>
     <li><a href="#">GBP - British Pound Sterling</a></li>
      <li><a href="#">JPY - Japanese Yen</a></li>
  </ul></li>
                         <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                         
                        
                     </ul>
                     </div>
                     </div>
                 </div>
             </div>
            
         </div>
        </div>
        <div id="parisera_menu">
            <nav id="site-navigation" class="site-navigation">

                <ul class="list-order nav-order">
                                   <li  class="menu-item-horizontal"><a href="javascript:;" class="shop" title="JUST IN!">JUST IN!</a>
                   <div class="mega-nav-dropdown">
				       <div class="container" style="height:250px;">
				 <div class="row just">
				     <div class="col-md-3">
				         <img src="images/women.jpg">
				         <a href="#">Women</a>
				     </div>
				      <div class="col-md-3">
				          <img src="images/men.jpg">
				         <a href="#">MEN</a>
				      </div>
				       <div class="col-md-3">
				           <img src="images/kids.jpg">
				         <a href="#">KIDS</a>
				       </div>
				        <div class="col-md-3">
				            <img src="images/home.jpg">
				         <a href="#">HOME</a>
				        </div>
				 </div>
						</div><!-- .container -->
					</div><!-- .mega-nav-dropdown -->
              </li>
                     <li class="menu-item-horizontal"><a href="index.php" class="shop" title="">Home</a>
                          <li  class="menu-item-horizontal"><a href="javascript:;" class="shop" title="Women">Women</a>
                   <div class="mega-nav-dropdown">
				       <div class="container" style="height:250px;">
				            <ul>
                                <?php
                    $sql="select * from product_categories WHERE parent=0 and catid=1";
                    $result=mysqli_query($db,$sql);
                    while ($parent=mysqli_fetch_assoc($result)) {
                    $parent_id = $parent['p_cat_id'];
                    $sql2 = "select * from product_categories WHERE parent='$parent_id'";
                    $cquery = mysqli_query($db, $sql2); ?>
								<li><a href="clothing-<?php echo $parent['p_cat_title']; ?>" ><?php  echo $parent['p_cat_title']; ?>
                                    <?php        $queryr = "SELECT * FROM product_categories where parent='$parent_id'";
                    $resultr = mysqli_query($db, $queryr);
                    if (mysqli_num_rows($resultr) > 0) {?>
                                      <i class="fa fa-angle-right"></i>
                                            <?php } ?>
                                    </a>
                                    
                                     <?php        $queryr = "SELECT * FROM product_categories where parent='$parent_id'";
                    $resultr = mysqli_query($db, $queryr);
                    if (mysqli_num_rows($resultr) > 0) {?>
				              	    <ul class="child-level-2">
                                        <?php   while ($child = mysqli_fetch_assoc($cquery)) { $parent_id1 = $child['p_cat_id'];?>
                                        <li><a href="clothing-<?php echo $child['p_cat_title']; ?>" title="Fabric"><?php echo $child['p_cat_title']; ?>
                                              <?php        $querys = "SELECT * FROM product_categories where parent='$parent_id1'";
                    $results = mysqli_query($db, $querys);
                    if (mysqli_num_rows($results) > 0) {?>
                                            <i class="fa fa-angle-right"></i>
                                            <?php } ?>
                                            </a>
                                    <?php        $querys = "SELECT * FROM product_categories where parent='$parent_id1'";
                    $results = mysqli_query($db, $querys);
                    if (mysqli_num_rows($results) > 0) {?>
                                            <ul class="child-level-3">
                                                <?php  $sql3 = "select * from product_categories WHERE parent='$parent_id1'";
                             $cquery1 = mysqli_query($db, $sql3);
                             while ($child1 = mysqli_fetch_assoc($cquery1)) {
                              $parent_id2 = $child1['p_cat_id']; ?>
                                                    <li><a href="clothing-<?php echo $child1['p_cat_title']; ?>" title="Cotton"><?php  echo $child1['p_cat_title']; ?></a></li>	
                                                <?php } ?>
                                             </ul>
                                            <?php } ?>
                                         </li>
                                        <?php } ?>
                                     </ul>
                                 </li>
                               
                                <?php }} ?>
                                		
                            </ul>
						</div><!-- .container -->
					</div><!-- .mega-nav-dropdown -->
              </li>
                     
                     <li  class="menu-item-horizontal"><a href="javascript:;" class="shop" title="Men">Men</a>
                   <div class="mega-nav-dropdown">
				       <div class="container" style="height:250px;">
				            <ul>
                                <?php
                    $sql="select * from product_categories WHERE parent=0 and catid=2";
                    $result=mysqli_query($db,$sql);
                    while ($parent=mysqli_fetch_assoc($result)) {
                    $parent_id = $parent['p_cat_id'];
                    $sql2 = "select * from product_categories WHERE parent='$parent_id'";
                    $cquery = mysqli_query($db, $sql2); ?>
								<li><a href="clothing-<?php echo $parent['p_cat_title']; ?>" ><?php  echo $parent['p_cat_title']; ?>
                                    <?php        $queryr = "SELECT * FROM product_categories where parent='$parent_id'";
                    $resultr = mysqli_query($db, $queryr);
                    if (mysqli_num_rows($resultr) > 0) {?>
                                      <i class="fa fa-angle-right"></i>
                                            <?php } ?>
                                    </a>
                                    
                                     <?php        $queryr = "SELECT * FROM product_categories where parent='$parent_id'";
                    $resultr = mysqli_query($db, $queryr);
                    if (mysqli_num_rows($resultr) > 0) {?>
				              	    <ul class="child-level-2">
                                        <?php   while ($child = mysqli_fetch_assoc($cquery)) { $parent_id1 = $child['p_cat_id'];?>
                                        <li><a href="clothing-<?php echo $child['p_cat_title']; ?>" title="Fabric"><?php echo $child['p_cat_title']; ?>
                                              <?php        $querys = "SELECT * FROM product_categories where parent='$parent_id1'";
                    $results = mysqli_query($db, $querys);
                    if (mysqli_num_rows($results) > 0) {?>
                                            <i class="fa fa-angle-right"></i>
                                            <?php } ?>
                                            </a>
                                    <?php        $querys = "SELECT * FROM product_categories where parent='$parent_id1'";
                    $results = mysqli_query($db, $querys);
                    if (mysqli_num_rows($results) > 0) {?>
                                            <ul class="child-level-3">
                                                <?php  $sql3 = "select * from product_categories WHERE parent='$parent_id1'";
                             $cquery1 = mysqli_query($db, $sql3);
                             while ($child1 = mysqli_fetch_assoc($cquery1)) {
                              $parent_id2 = $child1['p_cat_id']; ?>
                                                    <li><a href="clothing-<?php echo $child1['p_cat_title']; ?>" title="Cotton"><?php  echo $child1['p_cat_title']; ?></a></li>	
                                                <?php } ?>
                                             </ul>
                                            <?php } ?>
                                         </li>
                                        <?php } ?>
                                     </ul>
                                 </li>
                               
                                <?php }} ?>
                                		
                            </ul>
						</div><!-- .container -->
					</div><!-- .mega-nav-dropdown -->
              </li>
                     
                      <li  class="menu-item-horizontal"><a href="javascript:;" class="shop" title="Kids">Kids</a>
                   <div class="mega-nav-dropdown">
				       <div class="container" style="height:250px;">
				            <ul>
                                <?php
                    $sql="select * from product_categories WHERE parent=0 and catid=3";
                    $result=mysqli_query($db,$sql);
                    while ($parent=mysqli_fetch_assoc($result)) {
                    $parent_id = $parent['p_cat_id'];
                    $sql2 = "select * from product_categories WHERE parent='$parent_id'";
                    $cquery = mysqli_query($db, $sql2); ?>
								<li><a href="clothing-<?php echo $parent['p_cat_title']; ?>" ><?php  echo $parent['p_cat_title']; ?>
                                    <?php        $queryr = "SELECT * FROM product_categories where parent='$parent_id'";
                    $resultr = mysqli_query($db, $queryr);
                    if (mysqli_num_rows($resultr) > 0) {?>
                                      <i class="fa fa-angle-right"></i>
                                            <?php } ?>
                                    </a>
                                    
                                     <?php        $queryr = "SELECT * FROM product_categories where parent='$parent_id'";
                    $resultr = mysqli_query($db, $queryr);
                    if (mysqli_num_rows($resultr) > 0) {?>
				              	    <ul class="child-level-2">
                                        <?php   while ($child = mysqli_fetch_assoc($cquery)) { $parent_id1 = $child['p_cat_id'];?>
                                        <li><a href="clothing-<?php echo $child['p_cat_title']; ?>" title="Fabric"><?php echo $child['p_cat_title']; ?>
                                              <?php        $querys = "SELECT * FROM product_categories where parent='$parent_id1'";
                    $results = mysqli_query($db, $querys);
                    if (mysqli_num_rows($results) > 0) {?>
                                            <i class="fa fa-angle-right"></i>
                                            <?php } ?>
                                            </a>
                                    <?php        $querys = "SELECT * FROM product_categories where parent='$parent_id1'";
                    $results = mysqli_query($db, $querys);
                    if (mysqli_num_rows($results) > 0) {?>
                                            <ul class="child-level-3">
                                                <?php  $sql3 = "select * from product_categories WHERE parent='$parent_id1'";
                             $cquery1 = mysqli_query($db, $sql3);
                             while ($child1 = mysqli_fetch_assoc($cquery1)) {
                              $parent_id2 = $child1['p_cat_id']; ?>
                                                    <li><a href="clothing-<?php echo $child1['p_cat_title']; ?>" title="Cotton"><?php  echo $child1['p_cat_title']; ?></a></li>	
                                                <?php } ?>
                                             </ul>
                                            <?php } ?>
                                         </li>
                                        <?php } ?>
                                     </ul>
                                 </li>
                               
                                <?php }} ?>
                                
                            </ul>
                           
						</div><!-- .container -->
					</div><!-- .mega-nav-dropdown -->
              </li>
                     
                     <li  class="menu-item-horizontal"><a href="javascript:;" class="shop" title="Home Linen">Home Linen</a>
                   <div class="mega-nav-dropdown">
				       <div class="container" style="height:250px;">
				            <ul>
                                <?php
                    $sql="select * from product_categories WHERE parent=0 and catid=4";
                    $result=mysqli_query($db,$sql);
                    while ($parent=mysqli_fetch_assoc($result)) {
                    $parent_id = $parent['p_cat_id'];
                    $sql2 = "select * from product_categories WHERE parent='$parent_id'";
                    $cquery = mysqli_query($db, $sql2); ?>
								<li><a href="clothing-<?php echo $parent['p_cat_title']; ?>" ><?php  echo $parent['p_cat_title']; ?>
                                    <?php        $queryr = "SELECT * FROM product_categories where parent='$parent_id'";
                    $resultr = mysqli_query($db, $queryr);
                    if (mysqli_num_rows($resultr) > 0) {?>
                                      <i class="fa fa-angle-right"></i>
                                            <?php } ?>
                                    </a>
                                    
                                     <?php        $queryr = "SELECT * FROM product_categories where parent='$parent_id'";
                    $resultr = mysqli_query($db, $queryr);
                    if (mysqli_num_rows($resultr) > 0) {?>
				              	    <ul class="child-level-2">
                                        <?php   while ($child = mysqli_fetch_assoc($cquery)) { $parent_id1 = $child['p_cat_id'];?>
                                        <li><a href="clothing-<?php echo $child['p_cat_title']; ?>" title="Fabric"><?php echo $child['p_cat_title']; ?>
                                              <?php        $querys = "SELECT * FROM product_categories where parent='$parent_id1'";
                    $results = mysqli_query($db, $querys);
                    if (mysqli_num_rows($results) > 0) {?>
                                            <i class="fa fa-angle-right"></i>
                                            <?php } ?>
                                            </a>
                                    <?php        $querys = "SELECT * FROM product_categories where parent='$parent_id1'";
                    $results = mysqli_query($db, $querys);
                    if (mysqli_num_rows($results) > 0) {?>
                                            <ul class="child-level-3">
                                                <?php  $sql3 = "select * from product_categories WHERE parent='$parent_id1'";
                             $cquery1 = mysqli_query($db, $sql3);
                             while ($child1 = mysqli_fetch_assoc($cquery1)) {
                              $parent_id2 = $child1['p_cat_id']; ?>
                                                    <li><a href="clothing-<?php echo $child1['p_cat_title']; ?>" title="Cotton"><?php  echo $child1['p_cat_title']; ?></a></li>	
                                                <?php } ?>
                                             </ul>
                                            <?php } ?>
                                         </li>
                                        <?php } ?>
                                     </ul>
                                 </li>
                               
                                <?php }} ?>
                                
                            </ul>
                           
						</div><!-- .container -->
					</div><!-- .mega-nav-dropdown -->
              </li>
                     
                    <li  class="menu-item-horizontal"><a href="javascript:;" class="Decor & Gift's" title="Shop">Decor & Gift's</a>
                   <div class="mega-nav-dropdown">
				       <div class="container" style="height:250px;">
				            <ul>
                                <?php
                    $sql="select * from product_categories WHERE parent=0 and catid=7";
                    $result=mysqli_query($db,$sql);
                    while ($parent=mysqli_fetch_assoc($result)) {
                    $parent_id = $parent['p_cat_id'];
                    $sql2 = "select * from product_categories WHERE parent='$parent_id'";
                    $cquery = mysqli_query($db, $sql2); ?>
								<li><a href="clothing-<?php echo $parent['p_cat_title']; ?>" ><?php  echo $parent['p_cat_title']; ?>
                                    <?php        $queryr = "SELECT * FROM product_categories where parent='$parent_id'";
                    $resultr = mysqli_query($db, $queryr);
                    if (mysqli_num_rows($resultr) > 0) {?>
                                      <i class="fa fa-angle-right"></i>
                                            <?php } ?>
                                    </a>
                                    
                                     <?php        $queryr = "SELECT * FROM product_categories where parent='$parent_id'";
                    $resultr = mysqli_query($db, $queryr);
                    if (mysqli_num_rows($resultr) > 0) {?>
				              	    <ul class="child-level-2">
                                        <?php   while ($child = mysqli_fetch_assoc($cquery)) { $parent_id1 = $child['p_cat_id'];?>
                                        <li><a href="clothing-<?php echo $child['p_cat_title']; ?>" title="Fabric"><?php echo $child['p_cat_title']; ?>
                                              <?php        $querys = "SELECT * FROM product_categories where parent='$parent_id1'";
                    $results = mysqli_query($db, $querys);
                    if (mysqli_num_rows($results) > 0) {?>
                                            <i class="fa fa-angle-right"></i>
                                            <?php } ?>
                                            </a>
                                    <?php        $querys = "SELECT * FROM product_categories where parent='$parent_id1'";
                    $results = mysqli_query($db, $querys);
                    if (mysqli_num_rows($results) > 0) {?>
                                            <ul class="child-level-3">
                                                <?php  $sql3 = "select * from product_categories WHERE parent='$parent_id1'";
                             $cquery1 = mysqli_query($db, $sql3);
                             while ($child1 = mysqli_fetch_assoc($cquery1)) {
                              $parent_id2 = $child1['p_cat_id']; ?>
                                                    <li><a href="clothing-<?php echo $child1['p_cat_title']; ?>" title="Cotton"><?php  echo $child1['p_cat_title']; ?></a></li>	
                                                <?php } ?>
                                             </ul>
                                            <?php } ?>
                                         </li>
                                        <?php } ?>
                                     </ul>
                                 </li>
                               
                                <?php }} ?>
                                
                            </ul>
                           
						</div><!-- .container -->
					</div><!-- .mega-nav-dropdown -->
              </li>
                     
                     <li><a href="#" title="Vruddhi Daire's">Vruddhi Daire's</a></li>
                     <li><a href="#" title="Collection's"> Collection's</a>
                                   <div class="mega-nav-dropdown">
				       <div class="container" style="height:250px;">
				 <div class="row just">
				     <div class="col-md-3">
				         <img src="images/24.jpg">
				         <a href="#">Indian Summer</a>
				     </div>
				      <div class="col-md-3">
				          <img src="images/26.jpg">
				         <a href="#">Malhar</a>
				      </div>
				       <div class="col-md-3">
				           <img src="images/25.jpg">
				         <a href="#">Chikankari</a>
				       </div>
				        <div class="col-md-3">
				            <img src="images/23.jpg">
				         <a href="#">Indigo & Red Collection</a>
				        </div>
				 </div>
						</div><!-- .container -->
					</div><!-- .mega-nav-dropdown -->
                     </li>
                      <li><a href="blog.php" title="Collection's"> Blog</a></li>

                    <li class="sh " id="hd1"><a href="/store/view-cart/" id="cart-icon" title="View Cart"><i class="icon-cart"></i><span class="cart-box-value"> 0</span></a></li>
                    <li class="sh " id="hd2"><a href="#" class="search-toggle"><i class="icon-search"></i></a></li>
                    <li class="sh " id="hd3"><a class="login-popup" href="/members/login/?q=wishlist" title="Wishlist"><i class="icon-fav"></i></a></li>
                    <!--<li class="sh " id="hd4" >
								<a href="/members/login/?q=fine_jewellery" class="login-text-link log_new login-popup" title="Login"><i class="sprite user"></i>Login</a> <span>/</span> <a href="/members/login/?q=register" class="login-text-link log_new login-popup">join</a></li>-->
                    <li class="sh" id="hd4">
                        <a href="/members/login/?q=love_for_the_loom" class="login-text-link log_new  login-popup" title="Login"><i class="sprite user"></i>Login</a> <span>/</span> <a href="/members/login/?q=register" class="login-text-link log_new login-popup login-popup">join</a></li>

                    <a href="https://web.whatsapp.com/send?phone=917338875061" target="_blank" class="mob-call-us class-wt-im deskcall-us mob_new sh "><img src="https://www.parisera.com/data/images/if_whatsapp_287520.png"></a>

                </ul>
            </nav>
            <div class="site-header-sticky">
                <div class="sticky-header-main">
                    <!--<div class="christmas_off">
<p>CHRISTMAS SALE! 5% OFF, USE COUPONCODE: 'XMAS2018' AT CHECK OUT!</p>
</div>-->
                    <div class="container">
                        <a href="/" class="site-logo-small">P</a>
                        <nav class="site-navigation">

                            <ul class="list-order nav-order">






                                <li class="menu-item-horizontal"><a href="javascript:;" class="shop" title="Shop">Shop</a>
                                    <div class="mega-nav-dropdown">
                                        <div class="container" style="height:250px;">
                                            <ul>
                                                <li><a href="javascript:;" title="Saris">Saris<i class="icon-nav-right"></i></a>
                                                    <ul class="child-level-2">

                                                        <li><a href="/saris" title="All Saris">All Saris</a>
                                                        </li>
                                                        <li><a href="javascript:;" title="Fabric">Fabric<i class="icon-nav-right"></i></a>
                                                            <ul class="child-level-3">
                                                                <li><a href="/cotton-saris" title="Cotton">Cotton</a></li>
                                                                <li><a href="/khadi" title="Khadi">Khadi</a></li>
                                                                <li><a href="/linen-saris" title="Linen">Linen</a></li>
                                                                <li><a href="/matka" title="Matka">Matka</a></li>
                                                                <li><a href="/organic-sariss" title="Organic Cotton">Organic Cotton</a></li>
                                                                <li><a href="/silk-saris" title="Silk">Silk</a></li>
                                                                <li><a href="/silk-cotton" title="Silk Cotton">Silk Cotton</a></li>
                                                                <li><a href="/tussar-saris" title="Tussar">Tussar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="javascript:;" title="Craft">Craft<i class="icon-nav-right"></i></a>
                                                            <ul class="child-level-3">
                                                                <li><a href="/ajrakh" title="Ajrakh">Ajrakh</a></li>
                                                                <li><a href="/bandhini" title="Bandhini">Bandhini</a></li>
                                                                <li><a href="/baluchari" title="Baluchari">Baluchari</a></li>
                                                                <li><a href="/benarasi-saris" title="Benarasi">Benarasi</a></li>
                                                                <li><a href="/bengal-weaves" title="Bengal Weaves">Bengal Weaves</a></li>
                                                                <li><a href="/catalog/handblock/465/" title="Block Print">Block Print</a></li>
                                                                <li><a href="/chanderi-saris" title="Chanderi">Chanderi</a></li>
                                                                <li><a href="/gadwal" title="Gadwals">Gadwals</a></li>
                                                                <li><a href="/hand-embellished" title="Hand Embellished">Hand Embellished</a></li>
                                                                <li><a href="/ikat-saris" title="Ikat">Ikat</a></li>
                                                                <li><a href="/jamdani" title="Jamdani">Jamdani</a></li>
                                                                <li><a href="/kanjivaramsaris" title="Kanjivarams">Kanjivarams</a></li>
                                                                <li><a href="/kantha" title="Kantha">Kantha</a></li>
                                                                <li><a href="/kalamkari-saris" title="Kalamkari">Kalamkari</a></li>
                                                                <li><a href="/catalog/kota/457/" title="Kota">Kota</a></li>
                                                                <li><a href="/mangalgiri-saris" title="Mangalgiri">Mangalgiri</a></li>
                                                                <li><a href="/odisha-weaves" title="Odishas">Odishas</a></li>
                                                                <li><a href="/paithani" title="Paithanis">Paithanis</a></li>
                                                                <li><a href="/patola" title="Patola">Patola</a></li>
                                                                <li><a href="/catalog/pochampally/538/" title="Pochampally">Pochampally</a></li>
                                                                <li><a href="/catalog/resist-dyeing/359/" title="Resist Dyed">Resist Dyed</a></li>
                                                                <li><a href="/soft-silk" title="Soft Silk">Soft Silk</a></li>
                                                                <li><a href="/uppada-saris" title="Uppadas">Uppadas</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="javascript:;" title="Occassion">Occassion<i class="icon-nav-right"></i></a>
                                                            <ul class="child-level-3">
                                                                <li><a href="/bridal-saris" title="Bridal">Bridal</a></li>
                                                                <li><a href="/evening-wear-saris" title="Evening Wear">Evening Wear</a></li>
                                                                <li><a href="/daywear" title="Day Wear">Day Wear</a></li>
                                                                <li><a href="/catalog/festive/181/" title="Festive Wear">Festive Wear</a></li>
                                                                <li><a href="/occasionwear" title="Occasion  Wear">Occasion Wear</a></li>
                                                                <li><a href="/workwear" title="Work Wear">Work Wear</a></li>
                                                            </ul>
                                                        </li>

                                                        <li><a href="/catalog/9-yards/367/" title="9 Yards Saris">9 Yards Saris</a>
                                                        </li>

                                                        <li><a href="/pairing" title="Printed Pairs">Printed Pairs</a>
                                                        </li>
                                                        <li><a href="javascript:;" title="Sale">Sale<i class="icon-nav-right"></i></a>
                                                            <ul class="child-level-3">
                                                                <li><a href="/sale" title="Flash Sale 15% Off!">Flash Sale 15% Off!</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript:;" title="Jewellery">Jewellery<i class="icon-nav-right"></i></a>
                                                    <ul class="child-level-2">

                                                        <li><a href="/all-jewellery" title="All Jewellery">All Jewellery</a>
                                                        </li>
                                                        <li><a href="javascript:;" title="Category">Category<i class="icon-nav-right"></i></a>
                                                            <ul class="child-level-3">
                                                                <li><a href="/finejewellery" title="Fine Jewellery">Fine Jewellery</a></li>
                                                                <li><a href="/fashion-jewellery" title="Fashion Jewellery">Fashion Jewellery</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="javascript:;" title="Product">Product<i class="icon-nav-right"></i></a>
                                                            <ul class="child-level-3">
                                                                <li><a href="/bangles-bracelets" title="Bangles & Bracelets">Bangles & Bracelets</a></li>
                                                                <li><a href="/earrings" title="Earrings">Earrings</a></li>
                                                                <li><a href="/fingerrings" title="Fingerrings">Fingerrings</a></li>
                                                                <li><a href="/hair-accessories" title="Hair Accessories">Hair Accessories</a></li>
                                                                <li><a href="/neckpiece" title="Neckpiece">Neckpiece</a></li>
                                                                <li><a href="/nosepins" title="Nosepins">Nosepins</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="javascript:;" title="Metal / Material">Metal / Material<i class="icon-nav-right"></i></a>
                                                            <ul class="child-level-3">
                                                                <li><a href="/aluminium" title="Aluminium">Aluminium</a></li>
                                                                <li><a href="/brass" title="Brass">Brass</a></li>
                                                                <li><a href="/gold" title="Gold">Gold</a></li>
                                                                <li><a href="/mixed-material" title="Mixed Material">Mixed Material</a></li>
                                                                <li><a href="/mixed-metal" title="Mixed Metal">Mixed Metal</a></li>
                                                                <li><a href="/silver" title="Silver">Silver</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript:;" title="Odhnas & Stoles">Odhnas & Stoles<i class="icon-nav-right"></i></a>
                                                    <ul class="child-level-2">

                                                        <li><a href="/all-odhnas-stoles" title="All Odhnas & Stoles">All Odhnas & Stoles</a>
                                                        </li>
                                                        <li><a href="javascript:;" title="Fabric">Fabric<i class="icon-nav-right"></i></a>
                                                            <ul class="child-level-3">
                                                                <li><a href="/silk-dupata" title="Silk">Silk</a></li>
                                                                <li><a href="/cotton-dupata" title="Cotton">Cotton</a></li>
                                                                <li><a href="/tussar-silk-dupata" title="Tussar Silk">Tussar Silk</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="javascript:;" title="Weather">Weather<i class="icon-nav-right"></i></a>
                                                            <ul class="child-level-3">
                                                                <li><a href="/lightweight-decorative" title="Lightweight & Decorative">Lightweight & Decorative</a></li>
                                                                <li><a href="/warm-cozy" title="Warm And Cozy">Warm And Cozy</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript:;" title="Pavadai Sattai">Pavadai Sattai<i class="icon-nav-right"></i></a>
                                                    <ul class="child-level-2">

                                                        <li><a href="/all-pavadai-sattai" title="All Pavadai Sattai">All Pavadai Sattai</a>
                                                        </li>

                                                        <li><a href="/pavadai-sattai" title="7 - 16 Years">7 - 16 Years</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="/products/gift-card/24047/" title="Parisera  Gift Cards">Parisera Gift Cards</a>
                                                </li>
                                                <li><a href="javascript:;" title="Fabric By Meter">Fabric By Meter<i class="icon-nav-right"></i></a>
                                                    <ul class="child-level-2">

                                                        <li><a href="/catalog/fabric-by-meter/369/" title="All Fabric">All Fabric</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div><!-- .container -->
                                    </div><!-- .mega-nav-dropdown -->
                                </li>


                                <li class="menu-item-brand"><a href="javascript:;" title="Brands">Brands</a>
                                    <div class="mega-nav-dropdown">
                                        <div class="container">
                                            <ul class="navigation-tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#brand-sticky_menu-0" aria-controls="brand-sticky_menu-0" role="tab" data-toggle="tab">Saris</a></li>
                                                <li role="presentation" class=""><a href="#brand-sticky_menu-1" aria-controls="brand-sticky_menu-1" role="tab" data-toggle="tab">Jewellery</a></li>
                                                <li role="presentation" class=""><a href="#brand-sticky_menu-2" aria-controls="brand-sticky_menu-2" role="tab" data-toggle="tab">Odhnas & Stoles</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="brand-sticky_menu-0">
                                                    <ul class="col-items">
                                                        <li><a href="/aikyatha" class="" title="Aikyatha">Aikyatha</a></li>
                                                        <li><a href="/akaaro" class="" title="Akaaro">Akaaro</a></li>
                                                        <li><a href="/alkaraghuvanshi" class="" title="Alka Raghuvanshi">Alka Raghuvanshi</a></li>
                                                        <li><a href="/apoorbo-weaves" class="" title="Apoorbo Weaves">Apoorbo Weaves</a></li>
                                                        <li><a href="/artisansaga" class="" title="Artisan Saga">Artisan Saga</a></li>
                                                        <li><a href="/chakordesign" class="" title="Chakor">Chakor</a></li>
                                                        <li><a href="/coorvdesigns" class="" title="Coorv Designs">Coorv Designs</a></li>
                                                        <li><a href="/dyelogue" class="" title="Dyelogue">Dyelogue</a></li>
                                                        <li><a href="/eka" class="" title="Eka">Eka</a></li>
                                                        <li><a href="/ethnikyarn" class="" title="Ethnik Yarn">Ethnik Yarn</a></li>
                                                        <li><a href="/galanggabaan" class="" title="Galang Gabaan">Galang Gabaan</a></li>
                                                        <li><a href="/raisons" class="" title="House Of Raisons">House Of Raisons</a></li>
                                                        <li><a href="/ira_creations" class="" title="Ira Creations">Ira Creations</a></li>
                                                        <li><a href="/kalpadruma" class="" title="Kalpa Druma">Kalpa Druma</a></li>
                                                        <li><a href="/kamal-vasthralaya" class="" title="Kamal Vasthralaya">Kamal Vasthralaya</a></li>
                                                        <li><a href="/karomi" class="" title="Karomi">Karomi</a></li>
                                                        <li><a href="/love-for-loom" class="" title="Love For The Loom">Love For The Loom</a></li>
                                                        <li><a href="/medium" class="" title="Medium">Medium</a></li>
                                                        <li><a href="/meiraas" class="" title="Meiraas">Meiraas</a></li>
                                                        <li><a href="/miharu" class="" title="Miharu">Miharu</a></li>
                                                        <li><a href="/catalog/naina-jain/405/" class="" title="Naina Jain">Naina Jain</a></li>
                                                        <li><a href="/noorani/" class="" title="Noorani">Noorani</a></li>
                                                        <li><a href="/nuppurs" class="" title="Nuppur's">Nuppur's</a></li>
                                                        <li><a href="/pankaja" class="" title="Pankaja">Pankaja</a></li>
                                                        <li><a href="/parama" class="" title="Parama">Parama</a></li>
                                                        <li><a href="/sameeksha" class="" title="Sameeksha">Sameeksha</a></li>
                                                        <li><a href="/shreenivas-silks" class="" title="Shreenivas Silks">Shreenivas Silks</a></li>
                                                        <li><a href="/shreevasthra" class="" title="Shreevastra">Shreevastra</a></li>
                                                        <li><a href="/singhania" class="" title="Singhania">Singhania</a></li>
                                                        <li><a href="/silk-waves" class="" title="Silk Waves">Silk Waves</a></li>
                                                        <li><a href="/sita-mahalakshmi-silks" class="" title="Sitamahalakshmi Silks">Sitamahalakshmi Silks</a></li>
                                                        <li><a href="/ssaha-saris" class="" title="Ssaha">Ssaha</a></li>
                                                        <li><a href="/suparna-som" class="" title="Suparna Som">Suparna Som</a></li>
                                                        <li><a href="/catalog/swati-sunaina/397/" class="" title="Swati & Sunaina">Swati & Sunaina</a></li>
                                                        <li><a href="/tharakaram-all" class="" title="Tharakaram">Tharakaram</a></li>
                                                        <li><a href="/tharakaram" class="" title="Tharakaram Kanjivarams">Tharakaram Kanjivarams</a></li>
                                                        <li><a href="/thari" class="" title="Thari">Thari</a></li>
                                                        <li><a href="/the-silk-line" class="" title="The Silk Line">The Silk Line</a></li>
                                                        <li><a href="/tina-eapen" class="" title="Tina Eapen">Tina Eapen</a></li>
                                                        <li><a href="/translate" class="" title="Translate">Translate</a></li>
                                                        <li><a href="/tuni" class="" title="Tuni">Tuni</a></li>
                                                        <li><a href="/uneesbees" class="" title="Unees Bees">Unees Bees</a></li>
                                                        <li><a href="/urban-drape" class="" title="Urban Drape">Urban Drape</a></li>
                                                        <li><a href="/urdir" class="" title="Urdir">Urdir</a></li>
                                                        <li><a href="/vermilion-by-vinti" class="" title="Vermilion By Vinti">Vermilion By Vinti</a></li>
                                                        <li><a href="/vimor" class="" title="Vimor">Vimor</a></li>
                                                        <li><a href="/marvi" class="" title="Vinay Narkar">Vinay Narkar</a></li>
                                                        <li><a href="/vraj-bhoomi" class="" title="Vraj Bhoomi">Vraj Bhoomi</a></li>
                                                        <li><a href="/catalog/saris/designer/" class="view-all-btn" title="View All Saris">View All Saris</a></li>
                                                    </ul>
                                                </div>
                                                <div role="tabpanel" class="tab-pane " id="brand-sticky_menu-1">
                                                    <ul class="col-items">
                                                        <li><a href="/alankrita" class="" title="Alankrita">Alankrita</a></li>
                                                        <li><a href="/caravancraft" class="" title="Caravan Evolved Craft">Caravan Evolved Craft</a></li>
                                                        <li><a href="/dhora" class="" title="Dhora">Dhora</a></li>
                                                        <li><a href="/naaniki" class="" title="Naaniki">Naaniki</a></li>
                                                        <li><a href="/shaalin" class="" title="Shaalin">Shaalin</a></li>
                                                        <li><a href="/umiiumaa" class="" title="Umiiumaa">Umiiumaa</a></li>
                                                        <li><a href="/catalog/jewellery/242/" class="view-all-btn" title="View All Jewellery">View All Jewellery</a></li>
                                                    </ul>
                                                </div>
                                                <div role="tabpanel" class="tab-pane " id="brand-sticky_menu-2">
                                                    <ul class="col-items">
                                                        <li><a href="/catalog/aikyatha/462/" class="" title="Aikyatha">Aikyatha</a></li>
                                                        <li><a href="/alankrita_stoles" class="" title="Alankrita">Alankrita</a></li>
                                                        <li><a href="/catalog/avani/414/" class="" title="Avani">Avani</a></li>
                                                        <li><a href="/catalog/chakor/378/" class="" title="Chakor">Chakor</a></li>
                                                        <li><a href="/coorvdesignsstoles" class="" title="Coorv Designs">Coorv Designs</a></li>
                                                        <li><a href="/kamal-vasthralaya-dupatta" class="" title="Kamal Vasthralaya">Kamal Vasthralaya</a></li>
                                                        <li><a href="/catalog/miharu/423/" class="" title="Miharu">Miharu</a></li>
                                                        <li><a href="/pankaja-stoles" class="" title="Pankaja">Pankaja</a></li>
                                                        <li><a href="/catalog/silk-waves/463/" class="" title="Silk Weaves">Silk Weaves</a></li>
                                                        <li><a href="/catalog/urdir/396/" class="" title="Urdir">Urdir</a></li>
                                                        <li><a href="/catalog/odhna's-stoles/243/" class="view-all-btn" title="View All Odhnas & Stoles">View All Odhnas & Stoles</a></li>
                                                    </ul>
                                                </div>
                                            </div><!-- .tab-content -->
                                        </div>
                                    </div>
                                </li>



                                <li class="menu-item-brand"><a href="javascript:;" title="Parisera insignia">
                                        <p style="display:none;">Collectives</p>PARISERA INSIGNIA
                                    </a>
                                    <div class="mega-nav-dropdown">
                                        <div class="container">
                                            <ul>
                                                <li><a href="javascript:;" title=""></a>

                                                    <ul class="col-items">

                                                        <li><a href="/the-royal-chanderis" title="The Royal Chanderis">The Royal Chanderis</a>
                                                        </li>

                                                        <li><a href="/batik-sari" title="Chic Batik Yards">Chic Batik Yards</a>
                                                        </li>

                                                        <li><a href="/dyes-and-dunes" title="Dyes And Dunes">Dyes And Dunes</a>
                                                        </li>

                                                        <li><a href="/enchantment-in-embroidery" title="Enchantment In Embroidery">Enchantment In Embroidery</a>
                                                        </li>

                                                        <li><a href="/gond-painted-maheswaris" title="Gond Painted Maheswaris">Gond Painted Maheswaris</a>
                                                        </li>

                                                        <li><a href="/gilded-benarasi" title="Gilded Benarasi">Gilded Benarasi</a>
                                                        </li>

                                                        <li><a href="/subtle-linen" title="Subtle Linen">Subtle Linen</a>
                                                        </li>

                                                        <li><a href="/beguiling-balucharis" title="Beguiling Balucharis">Beguiling Balucharis</a>
                                                        </li>

                                                        <li><a href="/embroidery-on-maheswaris" title="Embroidery On Maheswaris">Embroidery On Maheswaris</a>
                                                        </li>

                                                        <li><a href="/pochampally-trails" title="Pochampally Trails">Pochampally Trails</a>
                                                        </li>

                                                        <li><a href="/catalog/insignia-collection/594/" title="Precious Patola">Precious Patola</a>
                                                        </li>

                                                        <li><a href="/yellama-thanda-embroidery" title="Yellama Thanda Embroidery">Yellama Thanda Embroidery</a>
                                                        </li>

                                                        <li><a href="/jamdani-tales" title="Jamdani Tales">Jamdani Tales</a>
                                                        </li>

                                                        <li><a href="/magical-maheshwaris" title="Magical Maheshwaris">Magical Maheshwaris</a>
                                                        </li>

                                                        <li><a href="/printed-pleats" title="Printed Pleats">Printed Pleats</a>
                                                        </li>

                                                        <li><a href="/printed-tussar" title="Printed Tussars">Printed Tussars</a>
                                                        </li>

                                                        <li><a href="/true-colours" title="True Colours">True Colours</a>
                                                        </li>

                                                        <li><a href="/endeavor-of-impressions" title="Endeavor Of Impressions">Endeavor Of Impressions</a>
                                                        </li>

                                                        <li><a href="/catalog/colorful-summers/599/" title="Colorful Summers">Colorful Summers</a>
                                                        </li>

                                                        <li><a href="/goldenstories" title="Golden Stories">Golden Stories</a>
                                                        </li>

                                                        <li><a href="/catalog/block-print/596/" title="The Bold And The Beautiful">The Bold And The Beautiful</a>
                                                        </li>

                                                        <li><a href="/catalog/parisera-edit---royal/586/" title="Royal Chanderi">Royal Chanderi</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>

                                        </div><!-- .container -->
                                    </div><!-- .mega-nav-dropdown -->
                                </li>




                                <li class="menu-item-horizontal"><a href="javascript:;" class="shop" title="Collectives">COLLECTIVES</a>
                                    <div class="mega-nav-dropdown">
                                        <div class="container" style="height:300px;">
                                            <ul>
                                                <li><a href="javascript:;" title="Curatorial">Curatorial<i class="icon-nav-right"></i></a>
                                                    <ul class="child-level-2">

                                                        <li><a href="/retta-pettu-collective" title="Retta Pettu Collective">Retta Pettu Collective</a>
                                                        </li>

                                                        <li><a href="/living_coral_edition" title="Living Coral Edition">Living Coral Edition</a>
                                                        </li>

                                                        <li><a href="/enchanted_garden" title="Enchanted Garden">Enchanted Garden</a>
                                                        </li>

                                                        <li><a href="/kanjivaram_focus_rising_border" title="Kanjivaram Focus: Rising Borders">Kanjivaram Focus: Rising Borders</a>
                                                        </li>

                                                        <li><a href="/jacquard_yards" title="Jacquard Yards">Jacquard Yards</a>
                                                        </li>


                                                        <li><a href="/moonlit_sky" title="Moonlit Sky">Moonlit Sky</a>
                                                        </li>

                                                        <li><a href="/kalyana_vaibhogame" title="Kalyana Vaibhogame!">Kalyana Vaibhogame!</a>
                                                        </li>

                                                        <li><a href="/elephants-of-the-land" title="Elephants Of The Land">Elephants Of The Land</a>
                                                        </li>

                                                        <li><a href="/let-there-be-light" title="Let There Be Light">Let There Be Light</a>
                                                        </li>

                                                        <li><a href="/kutti-korvai-kadhaigal" title="Kutti Korvai Kadhaigal">Kutti Korvai Kadhaigal</a>
                                                        </li>
                                                    </ul>

                                                <li><a href="javascript:;" title="Pairings">Pairings<i class="icon-nav-right"></i></a>
                                                    <ul class="child-level-2">

                                                        <li><a href="/silver-melody" title="Silver Melody">Silver Melody</a>
                                                        </li>

                                                        <li><a href="/timeless-compliments" title="Timeless Compliments">Timeless Compliments</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript:;" title="Parisera Edits">Parisera Edits<i class="icon-nav-right"></i></a>
                                                    <ul class="child-level-2">

                                                        <li><a href="/vintage-blossom" title="Parisera Edit: Vintage Blossom">Parisera Edit: Vintage Blossom</a>
                                                        </li>

                                                        <li><a href="/parisera-edits/september" title="Parisera Edit - Liberty">Parisera Edit - Liberty</a>
                                                        </li>

                                                        <li><a href="/parisera-editsjune" title="Parisera Edit - June">Parisera Edit - June</a>
                                                        </li>

                                                        <li><a href="/serenity" title="Parisera Edit - April">Parisera Edit - April</a>
                                                        </li>

                                                        <li><a href="/parisera-edits/" title="Parisera Edit - February">Parisera Edit - February</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div><!-- .container -->
                                    </div><!-- .mega-nav-dropdown -->
                                </li>



                                <li>
                                    <a href="/blog" title="Parisera Diaries">Parisera Diaries</a>
                                </li>






                                <!--    -->



                                <!--add items-->

                                <li class="sh " id="hd1"><a href="/store/view-cart/" id="cart-icon" title="View Cart"><i class="icon-cart"></i><span class="cart-box-value"> 0</span></a></li>
                                <li class="sh " id="hd2"><a href="#" class="search-toggle"><i class="icon-search"></i></a></li>
                                <li class="sh " id="hd3"><a class="login-popup" href="/members/login/?q=wishlist" title="Wishlist"><i class="icon-fav"></i></a></li>
                                <!--<li class="sh " id="hd4" >
								<a href="/members/login/?q=fine_jewellery" class="login-text-link log_new login-popup" title="Login"><i class="sprite user"></i>Login</a> <span>/</span> <a href="/members/login/?q=register" class="login-text-link log_new login-popup">join</a></li>-->
                                <li class="sh" id="hd4">
                                    <a href="/members/login/?q=love_for_the_loom" class="login-text-link log_new  login-popup" title="Login"><i class="sprite user"></i>Login</a> <span>/</span> <a href="/members/login/?q=register" class="login-text-link log_new login-popup login-popup">join</a></li>

                                <a href="https://web.whatsapp.com/send?phone=917338875061" target="_blank" class="mob-call-us class-wt-im deskcall-us mob_new sh "><img src="https://www.parisera.com/data/images/if_whatsapp_287520.png"></a>





                            </ul>
                        </nav>
                    </div><!-- .container -->
                </div><!-- .sticky-header-main -->
            </div><!-- .site-header-sticky -->
            <div class="mobile-navigation">
                <nav>
                    <ul>
                        <li><a href="javascript:;" class="shop" title="Shop">Home</a></li>
                       <li><a href="javascript:;" class="shop" title="Shop">Women</a>
				     		<ul>
                                 <?php
                    $sql="select * from product_categories WHERE parent=0 and catid=1";
                    $result=mysqli_query($db,$sql);
                    while ($parent=mysqli_fetch_assoc($result)) {
                    $parent_id = $parent['p_cat_id'];
                    $sql2 = "select * from product_categories WHERE parent='$parent_id'";
                    $cquery = mysqli_query($db, $sql2); ?>
							<li><a href="javascript:;" title="Saris"><?php  echo $parent['p_cat_title']; ?></a>
							<ul>
                               <?php   while ($child = mysqli_fetch_assoc($cquery)) { $parent_id1 = $child['p_cat_id'];?>
								<li><a href="javascript:;" title="Fabric"><?php echo $child['p_cat_title']; ?></a>
																																																                                                      <ul>   
                                    <?php  $sql3 = "select * from product_categories WHERE parent='$parent_id1'";
                             $cquery1 = mysqli_query($db, $sql3);
                             while ($child1 = mysqli_fetch_assoc($cquery1)) {
                              $parent_id2 = $child1['p_cat_id']; ?>
                                                                                                                                                                                                                                                      
																						<li><a href="/tussar-saris" title="Tussar"><?php  echo $child1['p_cat_title']; ?></a></li><?php } ?>
																					</ul>
																				</li>
																																
																		<?php } ?>														
															</ul>
													</li>
																
														<?php } ?>			
																	
											</ul>
							</li>
                        <li><a href="javascript:;" class="shop" title="Shop">Men</a></li>
                        <li><a href="javascript:;" class="shop" title="Shop">Kids</a></li>
                         <li><a href="javascript:;" class="shop" title="Shop">Home Linenin</a></li>
                         <li><a href="javascript:;" class="shop" title="Shop">Decor & Gift's</a></li>
                         <li><a href="javascript:;" class="shop" title="Shop">Vruddhi Daire's</a></li>
                         <li><a href="javascript:;" class="shop" title="Shop">Collection's</a></li>


					
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</div>