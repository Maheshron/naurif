<?php
session_start();
include ("./includes/db.php");
 if(isset($_GET['product_id'])) {
    $id = preg_replace('#[^0-9]#i', '', $_GET['product_id']);
    /*for ratin*/
    $avg_sql="SELECT avg(rating) as average_rating FROM reviews WHERE product_id=$id";
    $result=$db->query($avg_sql);
    $row=$result->fetch_assoc();
    $average_rating=$row['average_rating'];
    $sql = mysqli_query($db, "SELECT * FROM products WHERE product_id=$id");
     $product_count = mysqli_num_rows($sql);
      if ($product_count > 0) {
            while ($row = mysqli_fetch_array($sql)) {
                $product_title = $row["product_title"];
                $product_id = $row["product_id"];
                $product_price = $row["product_price"];
                $product_image1 = $row["product_img1"];
                $product_image2 = $row["product_img2"];
                $product_image3 = $row["product_img3"];
                $product_image4 = $row["product_img4"];
                $product_image5 = $row["product_img5"];
                $product_image6 = $row["product_img6"];
                $saree_length = $row["saree_length"];
                 $weaver= $row["weaver"];
                 $blouse_length= $row["blouse_length"];
                   $top_length= $row["top_length"];
                     $bottom_length= $row["bottom_length"];
                       $dupatta_length= $row["dupatta_length"];
                         $code= $row["code"];
                           $weight= $row["weight"];
               
            }
        } else {
            echo "<h5 class='text-center'>Item doesnot available</h5>";
            exit();
      }
 }
?>
<!doctype html>
<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta charset="utf-8">

<title>Vruddhi</title>



<meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet" />

<link rel="canonical" href="a-line-kurta.html" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/272629771/digital_wallets/dialog">
<link rel="alternate" type="application/json+oembed" href="a-line-kurta-2.html">

<script integrity="sha256-DBz+azZCyGu5gK0LKY2/n3wGonECQmpgH9W9oypMXP0=" defer="defer" src="../cdn.shopify.com/s/assets/storefront/express_buttons-0c1cfe6b3642c86bb980ad0b298dbf9f7c06a27102426a601fd5bda32a4c5cfd.js" crossorigin="anonymous"></script>
<script integrity="sha256-6HOSr+Kf4wcoL05qrRLLS8wq/v1rf+vwtw7f0xX5aEw=" defer="defer" src="../cdn.shopify.com/s/assets/storefront/features-e87392afe29fe307282f4e6aad12cb4bcc2afefd6b7febf0b70edfd315f9684c.js" crossorigin="anonymous"></script>
<script id="sections-script" data-sections="navigation,footer" defer="defer" src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/compiled_assets/scriptsee4b.js?6925323883398055779"></script>


<link href="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/bootstrapee4b.css?6925323883398055779" rel="stylesheet" type="text/css" media="all" /> 
<link href="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/assetsee4b.css?6925323883398055779" rel="stylesheet" type="text/css" media="all" /> 
<link href="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/styleee4b.css?6925323883398055779" rel="stylesheet" type="text/css" media="all" />
<link href="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/theme-settingee4b.css?6925323883398055779" rel="stylesheet" type="text/css" media="all" />
<link href="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/responsiveee4b.css?6925323883398055779" rel="stylesheet" type="text/css" media="all" />
<link href="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/owl.carouselee4b.css?6925323883398055779" rel="stylesheet" type="text/css" media="all" />
<link href="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/font-awesomeee4b.css?6925323883398055779" rel="stylesheet" type="text/css" media="all" />
<link href="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/quick_viewee4b.css?6925323883398055779" rel="stylesheet" type="text/css" media="all" /> 
<link href="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/flexslideree4b.css?6925323883398055779" rel="stylesheet" type="text/css" media="all" /> 
<link href="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/revslideree4b.css?6925323883398055779" rel="stylesheet" type="text/css" media="all" />   
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet" type="text/css" media="all" />
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" type="text/css" media="all" />
<link href="https://fonts.googleapis.com/css?family=Prata" rel="stylesheet" type="text/css" media="all" />
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet" type="text/css" media="all" />
  
<link href="../netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/faviconee4b.png?6925323883398055779" rel="icon" type="image/x-icon" />

<script src="../ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="../cdn.shopify.com/s/assets/themes_support/option_selection-fe6b72c2bbdd3369ac0bfefe8648e3c889efca213baefd4cfb0dd9363563831f.js"></script>
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/bootstrap.minee4b.js?6925323883398055779"></script>
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/jquery-migrate-1.2.1.minee4b.js?6925323883398055779"></script>
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/jquery.cookie.minee4b.js?6925323883398055779"></script>
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/device.minee4b.js?6925323883398055779"></script>
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/jquery.easing.1.3ee4b.js?6925323883398055779"></script>
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/api.jqueryee4b.js?6925323883398055779"></script>
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/hoverIntentee4b.js?6925323883398055779"></script>
<script src="./cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/superfishee4b.js?6925323883398055779"></script>
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/supersubsee4b.js?6925323883398055779"></script>
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/jquery.mobilemenuee4b.js?6925323883398055779"></script>
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/jquery.lineaee4b.js?6925323883398055779"></script>
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/countdownee4b.js?6925323883398055779"></script>
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/sftouchscreenee4b.js?6925323883398055779"></script>
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/jquery.fancybox-1.3.4ee4b.js?6925323883398055779"></script>
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/jquery.bxslider.minee4b.js?6925323883398055779"></script>
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/jquery.caroufredsel.minee4b.js?6925323883398055779"></script>
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/jquery.mousewheelee4b.js?6925323883398055779"></script>
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/jquery.selectik.minee4b.js?6925323883398055779"></script>
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/owl.carouselee4b.js?6925323883398055779"></script>
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/flexslideree4b.js?6925323883398055779"></script>
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/totopee4b.js?6925323883398055779"></script>
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/jquery.themepunch.tools.minee4b.js?6925323883398055779"></script>
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/jquery.themepunch.revolution.minee4b.js?6925323883398055779"></script>
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/slider-initee4b.js?6925323883398055779"></script>
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/jquery.elevatezoomee4b.js?6925323883398055779"></script>
  <link rel="stylesheet" href="assets/main/css/bootstrap.min.css">
    <!--Bootstrap-->
    <link rel="stylesheet" type="text/css" href="assets/main/css/favicon.css" />
    <link rel="stylesheet" type="text/css" href="assets/main/css/custom.css" />
    <link rel="stylesheet" type="text/css" href="assets/main/css/responsive.css" />

<!--    <script src="assets/main/js/jquery-1.11.0.min.js"></script>-->
    <!--Jquery-->
<!--    <script src="assets/main/js/jquery-ui.min.js"></script>-->
    <!--Jquery UI-->
<!--    <script src="assets/main/js/bootstrap.min.js"></script>-->
    <!--Bootstrap-->
<!--    <script src="assets/main/js/owl.carousel.min.js"></script>-->
    <!--Carousel-->
    <script src="assets/main/js/slick.min.js"></script>
    <!--Slick Slider-->
    <script src="assets/main/js/custom.js"></script>
  
</head>

<body id="a-line-kurta" class=" template-product" >
<div id="wrapper"> 
<?php 
    include('head.php');
    ?>
  <div class="quick-view"></div>
 
  <div id="main" role="main">
    <div class="container">
      <div class="row">  

      
        <!-- center column -->
        <div id="main_content" class="col-main col-sm-12">

           
    
    <div class="breadcrumbs">   
        
<div id="breadcrumb">
  <ul class="breadcrumb">
    <li><a href="../index.html" class="homepage-link" title="Back to the frontpage">Home</a><span class="divider">/</span></li>
    
      
      
      
    <li> <span class="page-title"><?php echo $product_title; ?></span></li>
    
  </ul>

  </div>
 
 </div>
    
    

          
          
<div class="row">
  <div id="shopify-section-product-template" class="shopify-section col-xs-12 col-main"> <div itemscope itemtype="http://schema.org/Product" class="product">
      <meta itemprop="url" content="https://raplian.myshopify.com/products/a-line-kurta">
      <meta itemprop="image" content="//cdn.shopify.com/s/files/1/0002/7262/9771/products/p13_66175d2d-7225-40b3-9760-e45ebdfecae5_grande.jpg?v=1521463027">
<div class="product_wrap">
      <div class="row">
      <div class="product-view">   
    
        
     
        
        
        <div class="col-xs-12 col-sm-4 col-lg-5 product-image ">
          
         <div class="product-photo-container" id="productPhoto">
          
          <img id="productPhotoImg" class="zoom" src="../Dashboard/product_images/<?php echo $product_image1; ?>" alt="A-Line Kurta" 
                data-zoom-image="../Dashboard/product_images/<?php echo $product_image1; ?>">          
        </div>
        
        <div id="productThumbs">
          <ul class="product-photo-thumbs owl-carousel" id="owl-featured-thumbs">

            
            
                <li >
                  <a href="#" data-image="../Dashboard/product_images/<?php echo $product_image1; ?>" data-zoom-image="../Dashboard/product_images/<?php echo $product_image1; ?>" data-position="0">
                    <img src="../Dashboard/product_images/<?php echo $product_image1; ?>" alt="A-Line Kurta" data-grande="../Dashboard/product_images/<?php echo $product_image1; ?>">
                  </a>
                </li>
            	
            
                <li>
                  <a href="#" data-image="../Dashboard/product_images/<?php echo $product_image1; ?>" data-zoom-image="../Dashboard/product_images/<?php echo $product_image1; ?>" data-position="1">
                    <img src="../Dashboard/product_images/<?php echo $product_image1; ?>" alt="A-Line Kurta" data-grande="../Dashboard/product_images/<?php echo $product_image1; ?>">
                  </a>
                </li>
            	
            
                <li >
                  <a href="#" data-image="../Dashboard/product_images/<?php echo $product_image1; ?>" data-zoom-image="../Dashboard/product_images/<?php echo $product_image1; ?>" data-position="2">
                    <img src="../Dashboard/product_images/<?php echo $product_image1; ?>" alt="A-Line Kurta" data-grande="../Dashboard/product_images/<?php echo $product_image1; ?>">
                  </a>
                </li>
            	
            
                <li >
                  <a href="#" data-image="../Dashboard/product_images/<?php echo $product_image1; ?>" data-zoom-image="../Dashboard/product_images/<?php echo $product_image1; ?>" data-position="3">
                    <img src="../Dashboard/product_images/<?php echo $product_image1; ?>" alt="A-Line Kurta" data-grande="../Dashboard/product_images/<?php echo $product_image1; ?>">
                  </a>
                </li>
            	
            
                <li >
                  <a href="#" data-image="../Dashboard/product_images/<?php echo $product_image1; ?>" data-zoom-image="../Dashboard/product_images/<?php echo $product_image1; ?>" data-position="4">
                    <img src="../Dashboard/product_images/<?php echo $product_image1; ?>" alt="A-Line Kurta" data-grande="../Dashboard/product_images/<?php echo $product_image1; ?>">
                  </a>
                </li>
            	
            
                <li >
                  <a href="#" data-image="../Dashboard/product_images/<?php echo $product_image1; ?>" data-zoom-image="../Dashboard/product_images/<?php echo $product_image1; ?>" data-position="5">
                    <img src="../Dashboard/product_images/<?php echo $product_image1; ?>" alt="A-Line Kurta" data-grande="../Dashboard/product_images/<?php echo $product_image1; ?>">
                  </a>
                </li>
            	
             
          </ul>
      </div>
        
     
<script type="text/javascript">     
   $(document).ready(function () {
  $("#owl-featured-thumbs").owlCarousel({
    items : 3, //8 items above 1000px browser width
      itemsDesktop : [1024,3], //5 items between 1024px and 901px
        itemsDesktopSmall : [900,2], // 3 items betweem 900px and 601px
        itemsTablet: [600,2], //2 items between 600 and 0;
        itemsMobile : [320,2],
        navigation : true,
        navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
        slideSpeed : 500,
        pagination : false,
        margin:2
     });
});
     
</script>   
     

          
          
        </div>

        <div class="col-xs-12 col-lg-7 col-sm-8 product-shop">
          
          <h1 itemprop="name" class="product_title page_title"><?php echo $product_title; ?></h1> 
          
          <span class="shopify-product-reviews-badge" data-id="581103190027"></span>
         
          <form action="" method="post" enctype="multipart/form-data" data-id="581103190027" class="addToCartForm product-actions-581103190027">
            <div class="options clearfix"> 
       
             <div id="product_price"><p class="price product-price"><i class="fa fa-inr"></i><?php echo $product_price; ?></p>  </div> 
       
<div id="variant-inventory">

  Availability: <strong> 20 in stock.</strong>

</div> 
    
             <div class="variants-wrapper clearfix visuallyhidden" style="display:none"> 
                <select id="product-select" name="id">
                  
                  <option value="4314250346507">Default Title - $99.99</option>
                               
         

               </select>
              </div> 
      
              <div id="purchase"> 
                <div class="add-quantity"> 
                
                 <label for="quantity">Quantity: </label>
              <div class="dec button">-</div>
              <input type="text" id="quantity" name="quantity" value="1">
                <div class="inc button">+</div>
              <script>
                jQuery(".button").on("click", function() {
                  var oldValue = jQuery("#quantity").val(),
                      newVal = 1;
				
                  if (jQuery(this).text() == "+") {
                      newVal = parseInt(oldValue) + 1;
                    } else if (oldValue > 1) {
                      newVal = parseInt(oldValue) - 1;
                  }
                  
                  jQuery("#quantity").val(newVal);
                  
                });
              </script>
                </div>                           
                <button class="btn btn-primary" data-translate="products.product.add_to_cart" id="product-add-to-cart" value="Add to Cart"><span>Add to Cart</span></button>
              <div class="product-addto-links">
        
            <a class="btn btnWishlistNoLog btnProduct" href="../account/login.html" data-toggle="tooltip" title="Go to wishlist">
           
             
            </a>
        
    </div>


              </div> 
               
            </div><!-- /.options -->
          </form>
         
        
          
           <div id="product_description"> 
                 <h2>Quick Overview</h2>
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies... </div>
          
          <div class="product_details">
            <div class="product_type"><strong>Type</strong> <a href="../collections/typesc4c5.html?q=Tops" title="Tops">Tops</a></div>
            <div class="product_vendor"><strong>Vendor</strong> <a href="../collections/vendors308b.html?q=Vistara-01" title="Vistara-01">Vistara-01</a></div>
          </div>

     <div class="bottom_block">
      
    </div>
          
        </div></div>
      </div>
  
      </div>
      
    </div>
    
 
<div class="product-collateral">
                <div class="add_info">
                  <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                    <li class="active"> 
      


<a href="#product_tabs_description" data-toggle="tab">Product Description</a>
                      

                    
                    </li>
                    <li>
                    
                    
                      
        
     <a href="#product_tabs_tags" data-toggle="tab">Shipping and Returns</a>
       
       
                    
                    </li>
                    <li> 
                    
                    
                    
        
      <a href="#product_tabs_custom" data-toggle="tab">Size Chart</a>
     
       
                    
                    </li>
                    <li> 
                      

        
      <a href="#reviews_tabs" data-toggle="tab">Customer Review</a>
      
       
                      
                      
                      </li>
   
                  </ul>
                  <div id="productTabContent" class="tab-content">
                    <div class="tab-pane fade in active" id="product_tabs_description">
                      <div class="std">
                       
        
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc.</p>
<h4>Sample Unordered List</h4>
<ul>
<li>Comodous in tempor ullamcorper miaculis</li>
<li>Pellentesque vitae neque mollis urna mattis laoreet.</li>
<li>Divamus sit amet purus justo.</li>
<li>Proin molestie egestas orci ac suscipit risus posuere loremous</li>
</ul>
<h4>Sample Ordered List</h4>
<ol>
<li>Comodous in tempor ullamcorper miaculis.</li>
<li>Pellentesque vitae neque mollis urna mattis laoreet.</li>
<li>Divamus sit amet purus justo.</li>
<li>Proin molestie egestas orci ac suscipit risus posuere loremous.</li>
</ol>
<h4>Sample Paragraph</h4>
<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum.</p>
     
         
                      </div>
                    </div>
                    
                     <div class="tab-pane fade" id="product_tabs_tags">
     
        
<h4>Returns Policy</h4>
<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. </span></p>
<p><span>Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue.</span></p>
<p><span>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. </span></p>
<h4>Shipping</h4>
<p><span>Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. </span></p>
<p><span>Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum. Quisque in arcu id dui vulputate mollis eget non arcu. Aenean et nulla purus. Mauris vel tellus non nunc mattis lobortis.</span></p>
<p><span>Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi.</span></p>  
     
       
  </div>
         
                    <div class="tab-pane fade" id="product_tabs_custom">
      
        
  
    <div><img src="../cdn.shopify.com/s/files/1/0002/7262/9771/files/size-chart6d7b.jpg?v=1522240577" alt="sizechart-img" />  </div>
     
       
  </div>
                    
                    
     <div class="tab-pane fade" id="reviews_tabs">
   
        
    <div id="shopify-product-reviews" data-id="581103190027"><style scoped>.spr-container {
    padding: 24px;
    border-color: #ECECEC;}
  .spr-review, .spr-form {
    border-color: #ECECEC;
  }
</style>

<div class="spr-container">
  <div class="spr-header">
    <h2 class="spr-header-title">Customer Reviews</h2><div class="spr-summary" itemscope itemprop="aggregateRating" itemtype="http://schema.org/AggregateRating">
        <meta itemprop="itemreviewed" content="A-Line Kurta">

        <span class="spr-starrating spr-summary-starrating">
          <meta itemprop="bestRating" content="5">
          <meta itemprop="worstRating" content="1">
          <meta itemprop="reviewCount" content="1">
          <meta itemprop="ratingValue" content="3.0">
          <i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star-empty"></i><i class="spr-icon spr-icon-star-empty"></i>
        </span>
        <span class="spr-summary-caption"><span class='spr-summary-actions-togglereviews'>Based on 1 review</span>
        </span><span class="spr-summary-actions">
        <a href='#' class='spr-summary-actions-newreview' onclick='SPR.toggleForm(581103190027);return false'>Write a review</a>
      </span>
    </div>
  </div>

  <div class="spr-content">
    <div class='spr-form' id='form_581103190027' style='display: none'></div>
    <div class='spr-reviews' id='reviews_581103190027' ></div>
  </div>

</div>
</div>
     
       
  </div> 
                    
                    

                  </div>
                </div>
              </div>


  
 <div class="widget__related-products">
     <div class="widget-title">   
                <div class="home-block-inner">
    
              <div class="block-title">
                <h2>Related Products </h2>
              </div>
            
       </div>
      
    </div>
   
    <div class="widget_content">
     <div class="product-listing product-listing__bestsellers">
     <div id="related-slider" class="product-flexslider hidden-buttons">
               
       <div class="slider-items slider-width-col4"> 
           
<div data-id="581104009227" class="product-581104009227 product product__product-grid-item product-item col-sm-">
<div class="item-inner">
  <div class="product_image-wrap item-img">  
  
     <a href="../collections/clothing/products/women-printed-sweatshirt.html" class="product-grid-image">
        <img src="../cdn.shopify.com/s/files/1/0002/7262/9771/products/p10_52f7665b-ebfc-4321-9c2b-f1d68294e615_largeef9f.jpg?v=1521463035" alt="Women Printed Sweatshirt">
   
      </a>
      <div class="box-hover">
    <ul class="add-to-links">
      <li>
      
   <div class="product-addto-links">
        
            <a class="btn btnWishlistNoLog btnProduct" href="../account/login.html" data-toggle="tooltip" title="Go to wishlist">
           
             
            </a>
        
    </div>

      </li>
  
    </ul>
  </div>  
  </div><!-- .prod-image-wrap -->

        <div class="product_title-wrap">
          <a href="../collections/clothing/products/women-printed-sweatshirt.html" class="product_title">
            Women Printed Sweatshirt
          </a>
         
        </div>
<span class="shopify-product-reviews-badge" data-id="581104009227"></span>
  <div class="product_price">
       
 <span class="money"> $99.99</span> <del><span class="money"> $129.99</span></del> <span class="sale-badge">Sale</span>

		   
          
    	</div>
   
  <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581104009227" class="addToCartForm product-actions-581104009227">
           
              
         
             <input type="hidden" name="id" value="4314251264011" />  
        <button type="submit" name="add" class="btn btn-primary addToCart add-to-cart-btn">
          <span class="addToCartText">Add to cart</span>
        </button>
      
            </form>
 
  </div>
</div>
     
<div data-id="581100896267" class="product-581100896267 product product__product-grid-item product-item col-sm-">
<div class="item-inner">
  <div class="product_image-wrap item-img">  
  
     <a href="../collections/clothing/products/women-printed-parka.html" class="product-grid-image">
        <img src="../cdn.shopify.com/s/files/1/0002/7262/9771/products/p19_504b57ae-0959-4c63-a171-56285c7b4159_largec05d.jpg?v=1521463015" alt="Women Printed Parka">
   
      </a>
      <div class="box-hover">
    <ul class="add-to-links">
      <li>
      
   <div class="product-addto-links">
        
            <a class="btn btnWishlistNoLog btnProduct" href="../account/login.html" data-toggle="tooltip" title="Go to wishlist">
           
             
            </a>
        
    </div>

      </li>
  
    </ul>
  </div>  
  </div><!-- .prod-image-wrap -->

        <div class="product_title-wrap">
          <a href="../collections/clothing/products/women-printed-parka.html" class="product_title">
            Women Printed Parka
          </a>
         
        </div>
<span class="shopify-product-reviews-badge" data-id="581100896267"></span>
  <div class="product_price">
       
 <span class="money">$39.99</span>

		   
          
    	</div>
   
  <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581100896267" class="addToCartForm product-actions-581100896267">
           
              
         
             <input type="hidden" name="id" value="4314247921675" />  
        <button type="submit" name="add" class="btn btn-primary addToCart add-to-cart-btn">
          <span class="addToCartText">Add to cart</span>
        </button>
           
            </form>
 
      
  </div>
</div>



         
           
<div data-id="581097357323" class="product-581097357323 product product__product-grid-item product-item col-sm-">
<div class="item-inner">
  <div class="product_image-wrap item-img">  
  
     <a href="../collections/clothing/products/women-cold-shoulder-maxi-dress.html" class="product-grid-image">
        <img src="../cdn.shopify.com/s/files/1/0002/7262/9771/products/p26_d6f0c15f-93a6-4f4a-aa50-9524a3a72947_largef57e.jpg?v=1521462998" alt="Women Cold Shoulder Maxi Dress">
   
      </a>
      <div class="box-hover">
    <ul class="add-to-links">
      <li>
      
   <div class="product-addto-links">
        
            <a class="btn btnWishlistNoLog btnProduct" href="../account/login.html" data-toggle="tooltip" title="Go to wishlist">
           
             
            </a>
        
    </div>

      </li>
  
    </ul>
  </div>  
  </div><!-- .prod-image-wrap -->

        <div class="product_title-wrap">
          <a href="../collections/clothing/products/women-cold-shoulder-maxi-dress.html" class="product_title">
            Women Cold Shoulder Maxi Dress
          </a>
         
        </div>
<span class="shopify-product-reviews-badge" data-id="581097357323"></span>
  <div class="product_price">
       
 <span class="money"> $49.99</span> <del><span class="money"> $89.99</span></del> <span class="sale-badge">Sale</span>

		   
          
    	</div>
   
  <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581097357323" class="addToCartForm product-actions-581097357323">
           
              
         
             <input type="hidden" name="id" value="4314244218891" />  
        <button type="submit" name="add" class="btn btn-primary addToCart add-to-cart-btn">
          <span class="addToCartText">Add to cart</span>
        </button>
     
            </form>
 
  
  </div>
</div>

  
           
<div data-id="581101944843" class="product-581101944843 product product__product-grid-item product-item col-sm-">
<div class="item-inner">
  <div class="product_image-wrap item-img">  
  
     <a href="../collections/clothing/products/women-checked-shift-dress.html" class="product-grid-image">
        <img src="../cdn.shopify.com/s/files/1/0002/7262/9771/products/p16_7f545c28-3025-4804-8cb0-0c23d4c729d7_largefec0.jpg?v=1521463021" alt="Women Checked Shift Dress">
   
      </a>
      <div class="box-hover">
    <ul class="add-to-links">
      <li>
      
   <div class="product-addto-links">
        
            <a class="btn btnWishlistNoLog btnProduct" href="../account/login.html" data-toggle="tooltip" title="Go to wishlist">
           
             
            </a>
        
    </div>


      </li>
  
    </ul>
  </div>  
  </div><!-- .prod-image-wrap -->

        <div class="product_title-wrap">
          <a href="../collections/clothing/products/women-checked-shift-dress.html" class="product_title">
            Women Checked Shift Dress
          </a>
         
        </div>
<span class="shopify-product-reviews-badge" data-id="581101944843"></span>
  <div class="product_price">
       
 <span class="money">$99.99</span>

		   
          
    	</div>
   
  <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581101944843" class="addToCartForm product-actions-581101944843">
           
              
         
             <input type="hidden" name="id" value="4314249003019" />  
        <button type="submit" name="add" class="btn btn-primary addToCart add-to-cart-btn">
          <span class="addToCartText">Add to cart</span>
        </button>
       
            </form>
 
      
  
  </div>
</div>

           
<div data-id="581105549323" class="product-581105549323 product product__product-grid-item product-item col-sm-">
<div class="item-inner">
  <div class="product_image-wrap item-img">  
  
     <a href="../collections/clothing/products/viscose-plain-scarf-stole.html" class="product-grid-image">
        <img src="../cdn.shopify.com/s/files/1/0002/7262/9771/products/p4_82f9de80-162a-4efa-8895-833cc3b59c29_large8514.jpg?v=1521463054" alt="Viscose Plain Scarf Stole">
   
      </a>
      <div class="box-hover">
    <ul class="add-to-links">
      <li>
      
   <div class="product-addto-links">
        
            <a class="btn btnWishlistNoLog btnProduct" href="../account/login.html" data-toggle="tooltip" title="Go to wishlist">
           
             
            </a>
        
    </div>

      </li>
  
    </ul>
  </div>  
  </div><!-- .prod-image-wrap -->

        <div class="product_title-wrap">
          <a href="../collections/clothing/products/viscose-plain-scarf-stole.html" class="product_title">
            Viscose Plain Scarf Stole
          </a>
         
        </div>
<span class="shopify-product-reviews-badge" data-id="581105549323"></span>
  <div class="product_price">
       
 <span class="money">$49.99</span>

		   
          
    	</div>
   
  <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581105549323" class="addToCartForm product-actions-581105549323">
       
             <input type="hidden" name="id" value="4314257981451" />  
        <button type="submit" name="add" class="btn btn-primary addToCart add-to-cart-btn">
          <span class="addToCartText">Add to cart</span>
        </button>
    </form>
 
  </div>
</div>

<div data-id="581093228555" class="product-581093228555 product product__product-grid-item product-item col-sm-">
<div class="item-inner">
  <div class="product_image-wrap item-img">  
  
     <a href="../collections/clothing/products/vea-kupia-womens-sheath-red-dress.html" class="product-grid-image">
        <img src="../cdn.shopify.com/s/files/1/0002/7262/9771/products/p35_06035b79-1136-4ae8-9f2c-c59c48d36b43_large40e1.jpg?v=1521462978" alt="Vea Kupia Women&#39;s Sheath Red Dress">
   
      </a>
      <div class="box-hover">
    <ul class="add-to-links">
      <li>
      
   <div class="product-addto-links">
        
            <a class="btn btnWishlistNoLog btnProduct" href="../account/login.html" data-toggle="tooltip" title="Go to wishlist">
           
             
            </a>
        
    </div>

       
      </li>
  
    </ul>
  </div>  
  </div><!-- .prod-image-wrap -->

        <div class="product_title-wrap">
          <a href="../collections/clothing/products/vea-kupia-womens-sheath-red-dress.html" class="product_title">
            Vea Kupia Women's Sheath Red Dress
          </a>
         
        </div>
<span class="shopify-product-reviews-badge" data-id="581093228555"></span>
  <div class="product_price">
       
 <span class="money">$99.99</span>

		   
          
    	</div>
   
  <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581093228555" class="addToCartForm product-actions-581093228555">
           
              
         
             <input type="hidden" name="id" value="4314236420107" />  
        <button type="submit" name="add" class="btn btn-primary addToCart add-to-cart-btn">
          <span class="addToCartText">Add to cart</span>
        </button>
            
           
            </form>
 
  
  </div>
</div>
  
<div data-id="581095948299" class="product-581095948299 product product__product-grid-item product-item col-sm-">
<div class="item-inner">
  <div class="product_image-wrap item-img">  
  
     <a href="../collections/clothing/products/utsa-by-westside-palazzos.html" class="product-grid-image">
        <img src="../cdn.shopify.com/s/files/1/0002/7262/9771/products/p29_3e849931-db24-4453-85a4-3afcf0667b51_large93e5.jpg?v=1521462991" alt="Utsa by Westside Palazzos">
   
      </a>
      <div class="box-hover">
    <ul class="add-to-links">
      <li>
      
   <div class="product-addto-links">
        
            <a class="btn btnWishlistNoLog btnProduct" href="../account/login.html" data-toggle="tooltip" title="Go to wishlist">
           
             
            </a>
        
    </div>


      </li>
  
    </ul>
  </div>  
  </div><!-- .prod-image-wrap -->

        <div class="product_title-wrap">
          <a href="../collections/clothing/products/utsa-by-westside-palazzos.html" class="product_title">
            Utsa by Westside Palazzos
          </a>
         
        </div>
<span class="shopify-product-reviews-badge" data-id="581095948299"></span>
  <div class="product_price">
       
 <span class="money"> $25.99</span> <del><span class="money"> $99.99</span></del> <span class="sale-badge">Sale</span>

		   
          
    	</div>
   
  <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581095948299" class="addToCartForm product-actions-581095948299">
           
              
         
             <input type="hidden" name="id" value="4314242744331" />  
        <button type="submit" name="add" class="btn btn-primary addToCart add-to-cart-btn">
          <span class="addToCartText">Add to cart</span>
        </button>
    
            </form>
 
  </div>
</div>

<div data-id="581105713163" class="product-581105713163 product product__product-grid-item product-item col-sm-">
<div class="item-inner">
  <div class="product_image-wrap item-img">  
  
     <a href="../collections/clothing/products/striped-sheath-dress.html" class="product-grid-image">
        <img src="../cdn.shopify.com/s/files/1/0002/7262/9771/products/p2_84b7cc6e-b080-49cf-ac2c-e67cc9006994_large6add.jpg?v=1521463056" alt="Striped Sheath Dress">
   
      </a>
      <div class="box-hover">
    <ul class="add-to-links">
      <li>
      
   <div class="product-addto-links">
        
            <a class="btn btnWishlistNoLog btnProduct" href="../account/login.html" data-toggle="tooltip" title="Go to wishlist">
           
             
            </a>
        
    </div>

      </li>
  
    </ul>
  </div>  
  </div><!-- .prod-image-wrap -->

        <div class="product_title-wrap">
          <a href="../collections/clothing/products/striped-sheath-dress.html" class="product_title">
            Striped Sheath Dress
          </a>
         
        </div>
<span class="shopify-product-reviews-badge" data-id="581105713163"></span>
  <div class="product_price">
       
 <span class="money">$99.99</span>

		   
          
    	</div>
   
  <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581105713163" class="addToCartForm product-actions-581105713163">
           
                  
              <input class="btn btn-primary addToCart add-to-cart-btn" type="button" onclick="window.location.href='striped-sheath-dress.html'" value="Select options" />
              
            
           
            </form>
 
  </div>
</div>
           
<div data-id="581103845387" class="product-581103845387 product product__product-grid-item product-item col-sm-">
<div class="item-inner">
  <div class="product_image-wrap item-img">  
  
     <a href="../collections/clothing/products/solid-kurta.html" class="product-grid-image">
        <img src="../cdn.shopify.com/s/files/1/0002/7262/9771/products/p11_9e7829a0-31b3-4a44-aeb7-9611d7cd3137_large8402.jpg?v=1521463033" alt="Solid Kurta">
   
      </a>
      <div class="box-hover">
    <ul class="add-to-links">
      <li>
      
   <div class="product-addto-links">
        
            <a class="btn btnWishlistNoLog btnProduct" href="../account/login.html" data-toggle="tooltip" title="Go to wishlist">
           
             
            </a>
        
    </div>

      </li>
  
    </ul>
  </div>  
  </div><!-- .prod-image-wrap -->

        <div class="product_title-wrap">
          <a href="../collections/clothing/products/solid-kurta.html" class="product_title">
            Solid Kurta
          </a>
         
        </div>
<span class="shopify-product-reviews-badge" data-id="581103845387"></span>
  <div class="product_price">
       
 <span class="money">$39.99</span>

		   
          
    	</div>
   
  <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581103845387" class="addToCartForm product-actions-581103845387">
           
              
         
             <input type="hidden" name="id" value="4314251001867" />  
        <button type="submit" name="add" class="btn btn-primary addToCart add-to-cart-btn">
          <span class="addToCartText">Add to cart</span>
        </button>
    
      
            
           
            </form>
 
  
  </div>
</div>


         
           
<div data-id="581098995723" class="product-581098995723 product product__product-grid-item product-item col-sm-">
<div class="item-inner">
  <div class="product_image-wrap item-img">  
  
     <a href="../collections/clothing/products/solid-biker-jacket.html" class="product-grid-image">
        <img src="../cdn.shopify.com/s/files/1/0002/7262/9771/products/p23_918b939a-c60c-47cf-a863-756b887fa4fb_large758e.jpg?v=1521463006" alt="Solid Biker Jacket">
   
      </a>
      <div class="box-hover">
    <ul class="add-to-links">
      <li>
      
   <div class="product-addto-links">
        
            <a class="btn btnWishlistNoLog btnProduct" href="../account/login.html" data-toggle="tooltip" title="Go to wishlist">
           
             
            </a>
        
    </div>

      </li>
  
    </ul>
  </div>  
  </div><!-- .prod-image-wrap -->

        <div class="product_title-wrap">
          <a href="../collections/clothing/products/solid-biker-jacket.html" class="product_title">
            Solid Biker Jacket
          </a>
         
        </div>
<span class="shopify-product-reviews-badge" data-id="581098995723"></span>
  <div class="product_price">
       
 <span class="money">$99.99</span>

		   
          
    	</div>
   
  <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581098995723" class="addToCartForm product-actions-581098995723">
           
              
         
             <input type="hidden" name="id" value="4314245955595" />  
        <button type="submit" name="add" class="btn btn-primary addToCart add-to-cart-btn">
          <span class="addToCartText">Add to cart</span>
        </button>
    
      
            
           
            </form>
 
      
  
  </div>
</div>

<div data-id="581100437515" class="product-581100437515 product product__product-grid-item product-item col-sm-">
<div class="item-inner">
  <div class="product_image-wrap item-img">  
  
     <a href="../collections/clothing/products/sheer-ombre-dyed-top.html" class="product-grid-image">
        <img src="../cdn.shopify.com/s/files/1/0002/7262/9771/products/p20_28df2230-520e-486e-8034-8aa5868e7b00_large3dbb.jpg?v=1521463013" alt="Sheer Ombre-Dyed Top">
   
      </a>
      <div class="box-hover">
    <ul class="add-to-links">
      <li>
      
   <div class="product-addto-links">
        
            <a class="btn btnWishlistNoLog btnProduct" href="../account/login.html" data-toggle="tooltip" title="Go to wishlist">
           
             
            </a>
        
    </div>

      </li>
  
    </ul>
  </div>  
  </div><!-- .prod-image-wrap -->

        <div class="product_title-wrap">
          <a href="../collections/clothing/products/sheer-ombre-dyed-top.html" class="product_title">
            Sheer Ombre-Dyed Top
          </a>
         
        </div>
<span class="shopify-product-reviews-badge" data-id="581100437515"></span>
  <div class="product_price">
       
 <span class="money">$49.99</span>

		   
          
    	</div>
   
  <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581100437515" class="addToCartForm product-actions-581100437515">
           
              
         
             <input type="hidden" name="id" value="4314247462923" />  
        <button type="submit" name="add" class="btn btn-primary addToCart add-to-cart-btn">
          <span class="addToCartText">Add to cart</span>
        </button>
    
      
            
           
            </form>
 
  </div>
</div>

           
<div data-id="581094080523" class="product-581094080523 product product__product-grid-item product-item col-sm-">
<div class="item-inner">
  <div class="product_image-wrap item-img">  
  
     <a href="../collections/clothing/products/scalloped-hem-layered-top.html" class="product-grid-image">
        <img src="../cdn.shopify.com/s/files/1/0002/7262/9771/products/p33_5235fab0-5561-4ec3-99b7-38d820185c81_largeb82f.jpg?v=1521462981" alt="Scalloped Hem Layered Top">
   
      </a>
      <div class="box-hover">
    <ul class="add-to-links">
      <li>
      
   <div class="product-addto-links">
        
            <a class="btn btnWishlistNoLog btnProduct" href="../account/login.html" data-toggle="tooltip" title="Go to wishlist">
           
             
            </a>
        
    </div>

      </li>
  
    </ul>
  </div>  
  </div><!-- .prod-image-wrap -->

        <div class="product_title-wrap">
          <a href="../collections/clothing/products/scalloped-hem-layered-top.html" class="product_title">
            Scalloped Hem Layered Top
          </a>
         
        </div>
<span class="shopify-product-reviews-badge" data-id="581094080523"></span>
  <div class="product_price">
       
 <span class="money">$99.99</span>

		   
          
    	</div>
   
  <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581094080523" class="addToCartForm product-actions-581094080523">
           
              
         
             <input type="hidden" name="id" value="4314237337611" />  
        <button type="submit" name="add" class="btn btn-primary addToCart add-to-cart-btn">
          <span class="addToCartText">Add to cart</span>
        </button>
    
            </form>
 
  
  </div>
</div>
        
<div data-id="581101617163" class="product-581101617163 product product__product-grid-item product-item col-sm-">
<div class="item-inner">
  <div class="product_image-wrap item-img">  
  
     <a href="../collections/clothing/products/sand-puffer-jacket.html" class="product-grid-image">
        <img src="../cdn.shopify.com/s/files/1/0002/7262/9771/products/p17_2d4480fe-cad8-488e-bef2-2dd82d6875d7_large4a51.jpg?v=1521463019" alt="Sand Puffer Jacket">
   
      </a>
      <div class="box-hover">
    <ul class="add-to-links">
      <li>
      
   <div class="product-addto-links">
        
            <a class="btn btnWishlistNoLog btnProduct" href="../account/login.html" data-toggle="tooltip" title="Go to wishlist">
           
             
            </a>
        
    </div>


      </li>
  
    </ul>
  </div>  
  </div><!-- .prod-image-wrap -->

        <div class="product_title-wrap">
          <a href="../collections/clothing/products/sand-puffer-jacket.html" class="product_title">
            Sand Puffer Jacket
          </a>
         
        </div>
<span class="shopify-product-reviews-badge" data-id="581101617163"></span>
  <div class="product_price">
       
 <span class="money"> $25.00</span> <del><span class="money"> $49.99</span></del> <span class="sale-badge">Sale</span>

		   
          
    	</div>
   
  <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581101617163" class="addToCartForm product-actions-581101617163">
           
              
         
             <input type="hidden" name="id" value="4314248642571" />  
        <button type="submit" name="add" class="btn btn-primary addToCart add-to-cart-btn">
          <span class="addToCartText">Add to cart</span>
        </button>
    
            </form>
 
  
  
  </div>
</div>

<div data-id="581102239755" class="product-581102239755 product product__product-grid-item product-item col-sm-">
<div class="item-inner">
  <div class="product_image-wrap item-img">  
  
     <a href="../collections/clothing/products/ruffled-a-line-dress.html" class="product-grid-image">
        <img src="../cdn.shopify.com/s/files/1/0002/7262/9771/products/p15_384a9591-0d94-45fc-92a8-93a680436af2_large359e.jpg?v=1521463023" alt="Ruffled A-Line Dress">
   
      </a>
      <div class="box-hover">
    <ul class="add-to-links">
      <li>
      
   <div class="product-addto-links">
        
            <a class="btn btnWishlistNoLog btnProduct" href="../account/login.html" data-toggle="tooltip" title="Go to wishlist">
           
             
            </a>
        
    </div>

      </li>
  
    </ul>
  </div>  
  </div><!-- .prod-image-wrap -->

        <div class="product_title-wrap">
          <a href="../collections/clothing/products/ruffled-a-line-dress.html" class="product_title">
            Ruffled A-Line Dress
          </a>
         
        </div>
<span class="shopify-product-reviews-badge" data-id="581102239755"></span>
  <div class="product_price">
       
 <span class="money">$59.00</span>

		   
          
    	</div>
   
  <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581102239755" class="addToCartForm product-actions-581102239755">   
              
         
             <input type="hidden" name="id" value="4314249297931" />  
        <button type="submit" name="add" class="btn btn-primary addToCart add-to-cart-btn">
          <span class="addToCartText">Add to cart</span>
        </button>
    
      
            </form>
 
      
  
  </div>
</div>


    
      
         
           
<div data-id="581105975307" class="product-581105975307 product product__product-grid-item product-item col-sm-">
<div class="item-inner">
  <div class="product_image-wrap item-img">  
  
     <a href="../collections/clothing/products/rare-black-fit-amp-flare-dress.html" class="product-grid-image">
        <img src="../cdn.shopify.com/s/files/1/0002/7262/9771/products/p1_largefc6e.jpg?v=1521463059" alt="Rare Black Fit &amp;amp; Flare Dress">
   
      </a>
      <div class="box-hover">
    <ul class="add-to-links">
      <li>
      
   <div class="product-addto-links">
        
            <a class="btn btnWishlistNoLog btnProduct" href="../account/login.html" data-toggle="tooltip" title="Go to wishlist">
           
             
            </a>
        
    </div>









       
      </li>
  
    </ul>
  </div>  
  </div><!-- .prod-image-wrap -->

        <div class="product_title-wrap">
          <a href="../collections/clothing/products/rare-black-fit-amp-flare-dress.html" class="product_title">
            Rare Black Fit &amp; Flare Dress
          </a>
         
        </div>
<span class="shopify-product-reviews-badge" data-id="581105975307"></span>
  <div class="product_price">
       
 <span class="money">$49.99</span>

		   
          
    	</div>
   
  <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581105975307" class="addToCartForm product-actions-581105975307">
           
              
         
             <input type="hidden" name="id" value="4314258735115" />  
        <button type="submit" name="add" class="btn btn-primary addToCart add-to-cart-btn">
          <span class="addToCartText">Add to cart</span>
        </button>
    
      
            
           
            </form>
 
      
  
  
  
  
  </div>
</div>




             
             
           
        
      
    
      
         
           
<div data-id="581094637579" class="product-581094637579 product product__product-grid-item product-item col-sm-">
<div class="item-inner">
  <div class="product_image-wrap item-img">  
  
     <a href="../collections/clothing/products/printed-straight-kurta.html" class="product-grid-image">
        <img src="../cdn.shopify.com/s/files/1/0002/7262/9771/products/p32_567ef730-58e3-41f2-ba28-8ec35731a143_large0d4e.jpg?v=1521462984" alt="Printed Straight Kurta">
   
      </a>
      <div class="box-hover">
    <ul class="add-to-links">
      <li>
      
   <div class="product-addto-links">
        
            <a class="btn btnWishlistNoLog btnProduct" href="../account/login.html" data-toggle="tooltip" title="Go to wishlist">
           
             
            </a>
        
    </div>









       
      </li>
  
    </ul>
  </div>  
  </div><!-- .prod-image-wrap -->

        <div class="product_title-wrap">
          <a href="../collections/clothing/products/printed-straight-kurta.html" class="product_title">
            Printed Straight Kurta
          </a>
         
        </div>
<span class="shopify-product-reviews-badge" data-id="581094637579"></span>
  <div class="product_price">
       
 <span class="money">$0.00</span>

		   
          
    	</div>
   
  <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581094637579" class="addToCartForm product-actions-581094637579">
           
              
         
             <input type="hidden" name="id" value="4314237992971" />  
        <button type="submit" name="add" class="btn btn-primary addToCart add-to-cart-btn">
          <span class="addToCartText">Add to cart</span>
        </button>
    
      
            
           
            </form>
 
      
  
  
  
  
  </div>
</div>
   
    </div>
         
       
  </div>
</div>
      </div>
  </div>
     



<script>
//<![CDATA[
 jQuery(document).ready(function(cash) {
  jQuery("#related-slider .slider-items").owlCarousel({
   items : 4, //10 items above 1000px browser width
      itemsDesktop : [1024,4], //5 items between 1024px and 901px
        itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
        itemsTablet: [600,2], //2 items between 600 and 0;
        itemsMobile : [360,1],
        navigation : true,
        navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
        slideSpeed : 500,
        pagination : false
     });
 }); 
//]]>
</script>





<script>
    var selectCallback = function(variant, selector) { 
                                                      
      
      if (variant && variant.available) {
       
        
        // selected a valid variant
        $('#add-to-cart').removeClass('disabled').removeAttr('disabled'); // remove unavailable class from add-to-cart button, and re-enable button
        if(variant.compare_at_price == null){
          $('#product_price .price').html('<span class="money"><strong>'+Shopify.formatMoney(variant.price, "${{amount}} USD")+'</strong></span>');
        } else {
          $('#product_price .price').html('<span class="money"><strong>'+Shopify.formatMoney(variant.price, "${{amount}} USD") + '</strong></span> <span class="money compare_at_price">(was <del>' + Shopify.formatMoney(variant.compare_at_price, "${{amount}} USD") + '</del>)</span>');
        }
      } else {
                                                                                             
        $('#add-to-cart').addClass('disabled').attr('disabled', 'disabled'); // set add-to-cart button to unavailable class and disable button
        var message = variant ? "" : "Unavailable";
                                      
       }
                                          
         if (variant && variant.featured_image) {
           
        var originalImage = jQuery("#product-featured-image");
        var newImage = variant.featured_image;
        var element = originalImage[0];
        Shopify.Image.switchImage(newImage, element, function (newImageSizedSrc, newImage, element) { 
          jQuery('#more-view-carousel img').each(function() {
            var grandSize = jQuery(this).attr('src');
            grandSize = grandSize.replace('compact','grande');
            if (grandSize == newImageSizedSrc) {
              jQuery(this).parent().trigger('click');              
              return false;
            }
          });
        });        
    }
          
          
      $featuredImage = $('#productPhotoImg');

    if (variant) {
      // Update variant image, if one is set
      // Call timber.switchImage function in shop.js
      if (variant.featured_image) {
        
        var newImg = variant.featured_image,
            el = $featuredImage[0];
        Shopify.Image.switchImage(newImg, el, timber.switchImage);
       var galimg=jQuery(".swatch-element img").attr('src');
         jQuery(".zoomWindow").css('background-image','url('+galimg +')'); 
      } 
    }
          
    };

    // initialize multi selector for product
    $(function() {
      new Shopify.OptionSelectors("product-select", { product: {"id":581103190027,"title":"A-Line Kurta","handle":"a-line-kurta","description":"\u003cp\u003eLorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc.\u003c\/p\u003e\n\u003ch4\u003eSample Unordered List\u003c\/h4\u003e\n\u003cul\u003e\n\u003cli\u003eComodous in tempor ullamcorper miaculis\u003c\/li\u003e\n\u003cli\u003ePellentesque vitae neque mollis urna mattis laoreet.\u003c\/li\u003e\n\u003cli\u003eDivamus sit amet purus justo.\u003c\/li\u003e\n\u003cli\u003eProin molestie egestas orci ac suscipit risus posuere loremous\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch4\u003eSample Ordered List\u003c\/h4\u003e\n\u003col\u003e\n\u003cli\u003eComodous in tempor ullamcorper miaculis.\u003c\/li\u003e\n\u003cli\u003ePellentesque vitae neque mollis urna mattis laoreet.\u003c\/li\u003e\n\u003cli\u003eDivamus sit amet purus justo.\u003c\/li\u003e\n\u003cli\u003eProin molestie egestas orci ac suscipit risus posuere loremous.\u003c\/li\u003e\n\u003c\/ol\u003e\n\u003ch4\u003eSample Paragraph\u003c\/h4\u003e\n\u003cp\u003eNunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum.\u003c\/p\u003e","published_at":"2018-03-19T08:37:05-04:00","created_at":"2018-03-19T08:37:07-04:00","vendor":"Vistara-01","type":"Tops","tags":["Clothing","Dresses","Night Wear","Short Dress","Top","Tops","Winter Wear"],"price":2999,"price_min":2999,"price_max":2999,"available":true,"price_varies":false,"compare_at_price":null,"compare_at_price_min":0,"compare_at_price_max":0,"compare_at_price_varies":false,"variants":[{"id":4314250346507,"title":"Default Title","option1":"Default Title","option2":null,"option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"A-Line Kurta","public_title":null,"options":["Default Title"],"price":2999,"weight":0,"compare_at_price":null,"inventory_management":"shopify","barcode":""}],"images":["\/\/cdn.shopify.com\/s\/files\/1\/0002\/7262\/9771\/products\/p13_66175d2d-7225-40b3-9760-e45ebdfecae5.jpg?v=1521463027","#\/\/cdn.shopify.com\/s\/files\/1\/0002\/7262\/9771\/products\/p14_bef5f610-d6b3-4dbe-9d61-17e052782a0e.jpg?v=1521463027","#\/\/cdn.shopify.com\/s\/files\/1\/0002\/7262\/9771\/products\/p15_a8f9c4f9-627c-428e-9d5d-fc1deefba002.jpg?v=1521463027","#\/\/cdn.shopify.com\/s\/files\/1\/0002\/7262\/9771\/products\/p16_332076d4-f228-4ddd-8c99-a4412b91db78.jpg?v=1521463027","#\/\/cdn.shopify.com\/s\/files\/1\/0002\/7262\/9771\/products\/p17.jpg?v=1521463027","\/\/cdn.shopify.com\/s\/files\/1\/0002\/7262\/9771\/products\/p18.jpg?v=1521463027"],"featured_image":"\/\/cdn.shopify.com\/s\/files\/1\/0002\/7262\/9771\/products\/p13_66175d2d-7225-40b3-9760-e45ebdfecae5.jpg?v=1521463027","options":["Title"],"content":"\u003cp\u003eLorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc.\u003c\/p\u003e\n\u003ch4\u003eSample Unordered List\u003c\/h4\u003e\n\u003cul\u003e\n\u003cli\u003eComodous in tempor ullamcorper miaculis\u003c\/li\u003e\n\u003cli\u003ePellentesque vitae neque mollis urna mattis laoreet.\u003c\/li\u003e\n\u003cli\u003eDivamus sit amet purus justo.\u003c\/li\u003e\n\u003cli\u003eProin molestie egestas orci ac suscipit risus posuere loremous\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch4\u003eSample Ordered List\u003c\/h4\u003e\n\u003col\u003e\n\u003cli\u003eComodous in tempor ullamcorper miaculis.\u003c\/li\u003e\n\u003cli\u003ePellentesque vitae neque mollis urna mattis laoreet.\u003c\/li\u003e\n\u003cli\u003eDivamus sit amet purus justo.\u003c\/li\u003e\n\u003cli\u003eProin molestie egestas orci ac suscipit risus posuere loremous.\u003c\/li\u003e\n\u003c\/ol\u003e\n\u003ch4\u003eSample Paragraph\u003c\/h4\u003e\n\u003cp\u003eNunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum.\u003c\/p\u003e"}, onVariantSelected: selectCallback });
      
      // Add label if only one product option and it isn't 'Title'.
      
  
      // Auto-select first available variant on page load.
      
      
        
          
          
            $('.single-option-selector:eq(0)').val("Default Title").trigger('change');
          
        
      
      
    });
  </script>


 <script type="text/javascript">
   
      //product image zoom
	 $('.zoom').elevateZoom({
		 gallery:"productThumbs",
         zoomType: "inner",
         cursor: "zoom-in",
         zoomWindowFadeIn: 300,
         zoomWindowFadeOut: 450
     });
  
   //product image popup
     $("#productPhotoImg").bind("click", function(e) {
       var images = new Array();
       if($('#productThumbs').length > 0) {
         $('#productThumbs img').each(function(index){
           images[index] = {
             src : $(this).data('grande'),
             type : 'image'
           };
         });
       } else if($('#productPhotoImg').length > 0) {
         images[0] = {
           src : $('#productPhotoImg').data('zoom-image'),
           type : 'image'
         };
       }
       

       return false;
     });
   
   $("#productThumbs a").click(function() {
     $("#productPhotoImg").attr('data-position', $(this).data('position'));
    var myVar = setInterval(function(){ // wait for fading

        var height = $(".zoom").css("height");
        $(".zoomContainer").css("height", height);
        $(".zoomContainer .zoomWindow").css("height", height);

        clearInterval(myVar);
    }, 100);
  });
   

   
</script>
  
    



<style>
.template-product #main {
  background:#f8f8f8;
}
.product-shop {   
    text-align: left;
}
.breadcrumbs {
    padding: 0;
    margin: 0px auto 0px;
    text-align: left;
    position: relative;
    float: left;
    z-index: 1;

}
.breadcrumb {
    padding: 0;
} 
  /************************************* PRODUCT VIEW *************************************/

.template-product #main_content .product {
  padding: 0px 0px 30px;
  background:transparent;
}
.template-product #main_content .owl-item .product.product__product-grid-item .item-inner {
    padding: 15px 15px 30px;
    background: #fff;
}
.product-view {
    overflow: hidden;
    position: relative;
    z-index: 0;
}
.product_wrap {padding: 0px;}
.product-view {
    overflow: hidden;
    padding: 0px;
    position: relative;
    z-index: 0;
}

#product_image-container {overflow: hidden;}
#product_image-container .product_image{ float:right; display:inline-block; width:455px;}
.product_wrap #bx-pager {  display: inline-block;
    float: left;
    margin: 0 0 15px;
    padding: 0px 0 0;
    text-align: center;
    width: 90px;}

.product_wrap .product-price {
    font-size: 24px;
    color: #000000;
    font-weight: bold;
    font-family: "Poppins", sans-serif;      
    padding: 0;
}
.product_wrap .product-price .money {
    font-size: 24px;
    font-weight: bold;
}
.product_wrap .product-price .compare_at_price {color: #ccc!important;text-decoration: line-through;font: normal 22px/1em 'Open Sans', sans-serif; margin-left:20px}

.product_wrap .variants-wrapper {padding: 15px 0 0 0;}
.product_wrap .variants-wrapper label {margin-right: 10px; width:45px;}

.product_wrap #purchase {
  margin-top: 10px;
  vertical-align: top;padding: 18px 0 18px 0px; border-top:1px dotted #ddd;  border-bottom:1px dotted #ddd;}
.product_wrap #purchase label {display: none; }
.product_wrap #purchase #quantity {   
  background: none repeat scroll 0 0 #fff;
    border: 1px solid #ddd;
    border-radius: 0;
    box-shadow: none;
    display: inline-block;
    float: left;
    font-weight: bold;
    height: 44px;
    margin: 0 8px;
    outline: medium none;
    padding: 0;
    text-align: center;
    width: 70px;}



.product_wrap #purchase #product-add-to-cart:before {
content: "\f07a";
font-family: 'FontAwesome';
margin-right:12px;
  font-size: 18px;
}
.zoomContainer {
    left: 100% !important;
    top: 0px !important;
}

.product_wrap #purchase #product-add-to-cart {
	background:#181818;
	color:#ffffff!important;
	font-size: 15px;
	text-shadow: none;
	padding: 12px 20px 13px;
	float: left;
	margin-top: 0px;
	font-weight: 600;
	margin-left: 10px;
	border-radius: 0px;
    font-family: 'Montserrat', sans-serif;
    border:none;margin-right: 14px;
}
.product_wrap #purchase #product-add-to-cart:hover {
	background:#000000;
    border:none;
}

.product_wrap .product_details {margin: 0px 0 0 0;padding: 10px 0 15px 0; display: none;}
.product_wrap .product_details > div {padding: 5px 0 0 0;}
.product_wrap .product_details strong{display: inline-block;width:50px;}

.product_wrap #product_description {color: #777; font-size: 13px; margin: 15px 0 0; padding: 0 0 15px;}
.product_wrap #product_description h3 {padding: 15px 0 10px 0;font-size: 16px;text-transform: none;}
  
.product_wrap #product_description h2 {
    font-size: 15px;
    color: #333;
    margin: 0px;
    margin-bottom: 2px;
    font-weight: 600;
    letter-spacing: 0.5px;
}
  
.product_wrap #product_description p{
  padding:0px; 
  color: #777; 
  font-size: 16px; 
  margin: 0; 
  letter-spacing:0.5px;
    line-height: 1.5;
}

.product_wrap .addthis_toolbox {margin: 0px 0 0 0;padding: 15px 0 0 0;border-top: 1px solid #dddddd;}

.product_image-additioanl a {display: block; float: left;  width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0 6px 0 0;}
.product_image-additioanl .active img {border:1px #ddd solid;}
.pro-reviews .spr-header-title {display:none;} 
.pro-reviews .spr-summary-actions {display:none;} 
.spr-container {border:none!important; padding:0px!important;}

.product_image-additioanl a img {max-width: 100%;margin-bottom:8px }

.product_wrap .page_title {    font-size: 32px;
    margin: 0px;
    text-align: left;
    padding-bottom: 0px;
    font-weight: 600;
    padding-right: 55px;
    text-transform:uppercase;

}

.product_wrap select {padding:7px 10px 8px; width:150px;}  
  
.product_wrap  .spr-badge { border-bottom: 1px dotted #ddd; margin-bottom: 3px;
    padding-bottom: 14px; margin-top: 15px;} 
  
.spr-form input {padding: 15px 25px;}  
  
.spr-form-input-textarea  {padding: 7px; border:1px #ddd solid;}  
  
.spr-button-primary {float:none} 
.rw-ui-container.rw-valign-middle { display: none !important;}
 .product_wrap .spr-badge-caption  {display:inline-block; margin-left: 4px;}

.product_wrap .pagination.pagination__product li.right-arrow .right a {
	font-size: 15px;
	line-height: 30px;
	display: inline-block;
	width: 30px;
	height: 30px;
	color: #666;
	text-align: center;
	transition: color 300ms ease-in-out 0s, background-color 300ms ease-in-out 0s, background-position 300ms ease-in-out 0s;
	position: absolute;
	right: 16px;
	position: absolute;
	z-index: 1;
	top: 0px;
	border: 1px #aaa solid;
	-webkit-transition: all 0.3s cubic-bezier(0.8, 0, 0, 1);
	-o-transition: all 0.3s cubic-bezier(0.8, 0, 0, 1);
	transition: all 0.3s cubic-bezier(0.8, 0, 0, 1);
	box-shadow: inset 0 0 0 0 #fff;
    padding-left: 2px;
}
.product_wrap .pagination.pagination__product li.right-arrow .right a:hover {
	-webkit-transition: all 0.3s cubic-bezier(0.8, 0, 0, 1);
	-o-transition: all 0.3s cubic-bezier(0.8, 0, 0, 1);
	transition: all 0.3s cubic-bezier(0.8, 0, 0, 1);
	box-shadow: inset 0 -40px 0 0 #181818;
	border: 1px solid #181818;
    color: #fff;
}
.product_wrap .pagination.pagination__product li.right-arrow .right a:before {
	content: "\f105";
	font-family: FontAwesome;
}
.product_wrap .pagination.pagination__product li.left-arrow .left a {
	font-size: 15px;
	line-height: 30px;
	display: inline-block;
	width: 30px;
	height: 30px;
	color: #666;
	text-align: center;
	position: absolute;
	right: 45px;
	z-index: 1;
	top: 0px;
	border: 1px #aaa solid;
	-webkit-transition: all 0.3s cubic-bezier(0.8, 0, 0, 1);
	-o-transition: all 0.3s cubic-bezier(0.8, 0, 0, 1);
	transition: all 0.3s cubic-bezier(0.8, 0, 0, 1);
	box-shadow: inset 0 0 0 0 #fff;
}
.product_wrap .pagination.pagination__product li.left-arrow .left a:hover {
	-webkit-transition: all 0.3s cubic-bezier(0.8, 0, 0, 1);
	-o-transition: all 0.3s cubic-bezier(0.8, 0, 0, 1);
	transition: all 0.3s cubic-bezier(0.8, 0, 0, 1);
	box-shadow: inset 0 -40px 0 0 #181818;
	border: 1px solid #181818;
    color: #fff;
}
.product_wrap .pagination.pagination__product li.left-arrow .left a:before {
	content: "\f104";
	font-family: FontAwesome;
}
.product_wrap .wishlist.btn.btn-primary:before {
	content: "\f004";
	font-family: FontAwesome;
	font-size: 14px;
	vertical-align: top;
	text-align: center;
}
.product_wrap .wishlist.btn.btn-primary span{ display:none;}
.product_wrap .wishlist.btn.btn-primary{ color: #999;  display: inline-block;
    margin-left: 10px;
    padding: 10px 15px 11px;  border: 1px #dddddd solid;}
.product_wrap .bottom_block {
    border-top: 0px dotted #ddd;
}



.product_wrap button.wishlist:before {
	content: "\f004";
	font-family: FontAwesome;
	font-size: 14px;
	vertical-align: top;
	text-align: center;
}
.product_wrap button.wishlist span{ display:none;}
.product_wrap button.wishlist{ color: #999;  display: inline-block;
    margin-left: 10px;
    padding: 9px 15px 9px 12px;background: #ffffff;
    text-transform: uppercase;
    border: 1px #dddddd solid;}

.product_wrap button.wishlist:hover{ color: #fff;
    background: #181818;
    border: 1px #181818 solid;}


.product_wrap #purchase .dec.button, .product_wrap #purchase .inc.button{
    background-color: #fff;
    border: 1px solid #ddd;
    color: #444;
    float: left;
    font-size: 22px;
    font-weight: bold;
    line-height: normal;
    padding: 7px 15px 7px;
    transition: color 300ms ease-in-out 0s, background-color 300ms ease-in-out 0s, background-position 300ms ease-in-out 0s;
   cursor: pointer;
}
.product_wrap #purchase .dec.button:hover, .product_wrap #purchase .inc.button:hover {
	-webkit-transition: all 0.3s cubic-bezier(0.8, 0, 0, 1);
	-o-transition: all 0.3s cubic-bezier(0.8, 0, 0, 1);
	transition: all 0.3s cubic-bezier(0.8, 0, 0, 1);
	box-shadow: inset 0 -45px 0 0 #181818;
	border: 1px solid #181818;
	color: #fff;
	background-color: #181818;
}

.product_wrap a.wishlist:before {
	content: "\f004";
	font-family: FontAwesome;
	font-size: 14px;
	vertical-align: top;
	text-align: center;
}
.product_wrap a.wishlist span{ display:none;}
.product_wrap a.wishlist{ color: #999;  display: inline-block;
    margin-left: 10px;
    padding: 10px 15px 10px 12px;
    background: #ffffff;
    text-transform: uppercase;
    border: 1px #dddddd solid;}

.product_wrap a.wishlist:hover{ color: #fff;
    background: #181818;
    border: 1px #181818 solid;}
.product_wrap ul.social-links {
    margin-top: 20px;
    display: block;
    overflow: hidden;
    margin-bottom: 15px;
  padding-left:0px;
}
.product_wrap ul.social-links li {
    display: inline;
    border: none;
    float: left;
    width: auto;
    margin-right: 10px;
  border: 1px #eaeaea solid;
    border-radius: 0px;
}
.product_wrap ul.social-links li a {
    
    color: #888;
    width: 40px;
    height: 40px;
    line-height: 40px;
  display: inline-block;
  text-align:center;
    font-size:14px;
}
.product_wrap ul.social-links li:hover a {
    
    color: #fff;
}
ul.social-links li.tile_twi:hover {
    background: #359BED;
    border: 1px #359BED solid;
}
ul.social-links li.tile_gpl:hover {
    background: #E33729;
    border: 1px #E33729 solid;
}
ul.social-links li.tile_fcb:hover {
    background: #3C5B9B;
    border: 1px #3C5B9B solid;
}
ul.social-links li.tile_pin:hover {
    background: #cb2027;
    border: 1px #cb2027 solid;
}
ul.social-links li.tile_rss:hover {
    background: #fd9f13;
    border: 1px #fd9f13 solid;
}
ul.social-links li.tile_linkedin:hover {
    background: #027ba5;
    border: 1px #027ba5 solid;
}
 ul.social-links li.tile_youtube:hover {
    background: #f03434;
    border: 1px #f03434 solid;
}

ul.product-photo-thumbs.owl-carousel{
      padding: 0;
}
ul.product-photo-thumbs.owl-carousel li{ 
  width: 100%;
}
ul.product-photo-thumbs li{
  display: inline-block; 
  margin:0px 5px; 
  width: 29%;
}
ul.product-photo-thumbs li a img{
  max-width: 100%;
}  
#productThumbs .owl-carousel .owl-item {list-style: none; margin:0px;}
#productThumbs .owl-next a.flex-next:before {
    content: '\f105';
    font-family: 'FontAwesome';
    font-size: 2em;
    display: inline-block;
}
#productThumbs .owl-prev a.flex-prev:before {
    content: '\f104';
    font-family: 'FontAwesome';
    font-size: 2em;
    display: inline-block;
}

#productThumbs .owl-next a.flex-next{
  position: absolute;right: -18px;
}
#productThumbs .owl-prev a.flex-prev{
  position: absolute;left: -18px;
}
#productThumbs .owl-theme .owl-controls {
    top: 38%;
    left: 0;
    width: 100%;
    z-index: 9;
   position: absolute;
}
.product-photo-container img{
    max-width: 100%;    
    height: auto;
    border: 1px solid #e5e5e5;
    padding: 1px;
}
#productThumbs .owl-carousel .owl-item li img{ 
    max-width: 90%;
    height: auto;
    border: 1px solid #e5e5e5;
    padding: 1px;
}
#productThumbs { 
  margin: 0px 20px 0 20px;
}
.product-photo-container {
    margin-bottom: 20px;
    max-width: 100%;
    position: relative;
    text-align: center;
}

ul.product-photo-thumbs li a img{max-width: 100%;
    height: auto;
    border: 1px solid #e5e5e5;
    padding: 1px;}
  
.product-tabs {
	margin: 25px 0px 0;
	padding: 0px 0px 0px;
	text-align: left;
	width: 100%;
	border: medium none;
	border-radius: 3px 3px 0 0;
	line-height: inherit;
	margin-bottom: auto;
	min-height: inherit;
	border-bottom: 1px solid #cccccc;
}
#productTabContent {
	padding: 5px 0px;
	border-top: none;
}
.product-tabs li a {
	color: #333;
	margin-right: 0px;
	text-decoration: none;
	font-size: 12px;
	font-weight: 400;
	transition: color 300ms ease-in-out 0s, background-color 300ms ease-in-out 0s, background-position 300ms ease-in-out 0s;
	padding: 0px;
	letter-spacing: 1px;
	border: none;
	text-transform: uppercase;
}
.nav-tabs.product-tabs > li {
	display: inline-block;
	float: none;
	margin-bottom: auto;
}
.nav-tabs.product-tabs > li > a {
	color: #181818;
	font-weight: bold;
	padding: 15px 15px 12px;
	border: none;
	background:  #f8f8f8;
  	border-radius:3px;
      -webkit-transform: skewX(-15deg);
    -moz-transform: skewX(-15deg);
    -ms-transform: skewX(-15deg);
    -o-transform: skewX(-15deg);
    transform: skewX(-15deg);
  	border: 1px solid #ccc;
    border-bottom: 0px;
}
.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
	background: #181818;
    color: #ffffff;
  	border: 1px solid #181818;
	border-radius: 3px 3px 0 0;	
	font-weight: bold;
	padding: 15px 15px 12px;
	border: 0px solid #181818;
    border-bottom: 0px;
}
.nav-tabs > li > a:hover {
  	border: 1px solid #181818;
	background: #181818;
    color: #ffffff;
	transition: all 0.3s cubic-bezier(0.8, 0, 0, 1) 0s;
    border-bottom: 0px;
}
.tab-content {
	background-color: inherit;
	padding: 5px 0px 20px 0px;
	overflow: hidden;
	font-size: 15px;
	line-height: 25px;
	margin-top: 0px;
	letter-spacing: 0.5px;
}
.tab-content > .active {
	margin-top: 10px;
}
#productTabContent h4 {
    font-size: 15px;
    line-height: 24px;
    font-weight: bold;
}
.share-links {
  text-align: left;
  clear: both;
  margin-top: 15px;
}
.share-product-text{
    margin-bottom: 5px;
    font-size: 14px;
    font-weight: 600;}
.share-links a {
    color: #888;
    width: 40px;
    height: 40px;
    line-height: 40px;
    display: inline-block;
    text-align: center;
    font-size: 14px;
    margin-right: 6px;
    border: 1px #888 solid;
}

.product-quickview:after {
  content: "";
  background: #000;
  opacity: 0.8;
  display: block;
  width: 100%;
  height: 100%;
}
.spr-header-title {
    font-size: 16px;
    margin: 0 0 8px 0;
    line-height: inherit;
}

  /* related slider*/

.widget__related-products .block-title {
    color: #333;
    font-size: 26px;
    font-weight: 600;
    line-height: 15px;
    padding: 0px 20px 15px 0px;
    position: relative;
    text-transform: uppercase;
    border-bottom: 1px #cccccc solid;

}
.widget__related-products .block-title h2 {
	color: #333;
    display: inline-block;
    font-size: 22px;
    font-weight: 600;
    letter-spacing: 1px;
    line-height: 18px;
    margin: auto;
    text-transform: uppercase;
}

.widget__related-products .widget_content{
	width: 100%;}

.widget__related-products {
    margin-bottom: 10px;
    position: relative;
    margin-top: 10px;
  
}
.slider-items-products .owl-buttons a {
    display: block;
    height: 18px;
    margin: 0px 0 0 -30px;
    position: absolute;
    top: 50%;
    width: 35px;
    z-index: 5;
    color: #888;
    border: 0px #eaeaea solid;
    background: none;
}
#main_content .widget__related-products .product:hover .box-hover{ 
    bottom: 4%;
    left: 42%;
}
.widget__related-products  .grid-uniform {
    margin: 0px;overflow: hidden;
}
.slider-items-products .owl-buttons .owl-next a.flex-next {
    background-position: 100% 100%;
    top: 50%;
    padding: 2px;
    border-left: 4px double #999;
    background: none;
}

.widget__related-products .slider-items .owl-buttons a.flex-next {
    color: #777;
    display: block;
    margin: 0 0 0 0px;
    position: relative;
    top: 50%;
    width: 30px;
    height: 30px;
    z-index: 5;
    border: 1px solid #d1d1d1;
    line-height: 30px;
    text-align: center;
}
.widget__related-products .slider-items .owl-buttons .owl-prev {
    position: absolute;
    right: 32px;
}
.widget__related-products .slider-items .owl-buttons .owl-prev a {
  	color: #777;
    display: block;
    margin: 0 0 0 0px;
    position: relative;
    top: 50%;
    width: 30px;
    height: 30px;
    z-index: 5;
    border: 1px solid #d1d1d1;
    line-height: 30px;
    text-align: center;
}
.widget__related-products .slider-items .owl-buttons a.flex-next:hover,
.widget__related-products .slider-items .owl-buttons .owl-prev a:hover {
      color: #fff;
}
  
.widget__related-products .slider-items .owl-buttons .owl-next {
    right: -10px;
}
  
.widget__related-products .slider-items .owl-buttons .owl-prev a:before {
    font-family: 'FontAwesome';
    font-style: normal;
    font-weight: normal;
    speak: none;
    -webkit-font-smoothing: antialiased;
    content: "\f104";
    text-transform: none;
    font-size: 18px;
    line-height: 30px;
}

.widget__related-products .slider-items .owl-buttons .owl-next a:before {
    font-family: 'FontAwesome';
    font-style: normal;
    font-weight: normal;
    speak: none;
    -webkit-font-smoothing: antialiased;
    content: "\f105";
    text-transform: none;
    line-height: 30px;
    font-size: 18px;
}
#related-slider.product-flexslider {
    margin: 25px -12px;
}
.widget__related-products .owl-theme .owl-controls {
    position: absolute;
    right: 13px;
    text-align: center;
    top: -10.9%;
}
.widget__related-products .owl-carousel .owl-item.sca-qv-image .sca-qv-button{ 
    top: 58% !important;
    left: 47% !important;
}
.widget__related-products .grid-uniform:hover .btn.btn-primary {
    background: #181818;
    color: #ffffff !important;
    border: 1px #181818 solid;
}
.owl-item .item-inner {
    margin: 0 12px;
}
.product_wrap .pagination.pagination__product{ margin-top: 0;
    position: absolute;
    right: 0;}

  
  
.product-shop #purchase .product-addto-links a.btn.btnWishlistNoLog.btnProduct:after {
	content: "\f004";
	font-size: 13px;
	font-weight: normal; font-family: FontAwesome;
}

  
  
@media only screen and (min-width: 320px) and (max-width:479px) {  
.widget__related-products .owl-theme .owl-controls {
    right: 0px;
}
.nav-tabs.product-tabs > li {
    margin-bottom: 2px;
    width: 100%;
    text-align: center;
}
.spr-summary-actions-newreview {
	float: left !important;
	margin-top: 15px !important;
    width: 100%;
}
.spr-review-reportreview {
    float: left;
}
.product_wrap .page_title {
    font-size: 24px;
    margin-top: 15px;
    padding-right: 0;
}
.product_wrap #purchase #product-add-to-cart {
    margin-left: 0px;
 } 
  .product_wrap .add-quantity {
    display: inline-block;
    width: 100%;
    margin-bottom: 10px;
}
.widget__related-products .widget_content {
       padding: 0px 15px 0px;
}
.product-photo-container {
    width: 100% !important;
    max-width: 100%;
    position: relative;
    z-index: -1;
}
}
  
@media only screen and (min-width: 480px) and (max-width:767px) { 
.product_wrap .page_title {
    font-size: 28px;
    padding-right: 0;
    margin-top: 25px;
}
.nav-tabs.product-tabs > li {
    margin-bottom: 2px;
    width: 100%;
    text-align: center;
}
#related-slider.product-flexslider {
    margin: 22px -15px 20px -25px;
}
.widget__related-products .owl-theme .owl-controls {
    right: 5px;
    top: -16%;
}
.product-photo-container {
    width: 100% !important;
    max-width: 100%;
    position: relative;
    z-index: -1;
}
}  
  
@media only screen and (min-width: 768px) and (max-width:979px) { 
    
#main {
    margin-top: 0px;
}
.product_wrap .page_title {
  font-size: 28px;
}  
.product_wrap .pagination.pagination__product {
    right: -15px;
}
.product_wrap #purchase {
    padding: 10px 0 10px 0px;
    width: 100%;
    display: inline-block;
}
.product_wrap .add-quantity{
    width: 100%;
    display: inline-block;
  }  
.product_wrap #purchase #product-add-to-cart {
    margin-left: 0;
    margin-top: 10px;
}
.product-shop .product-addto-links {
    display: inline-block;
    margin-top: 10px;
}  
.widget__related-products .owl-carousel .owl-item.sca-qv-image .sca-qv-button {
    top: 54% !important;
}
  .widget__related-products .owl-theme .owl-controls {
      top: -11.9%;
  }
  
  
  }
  
@media only screen and (min-width: 980px) and (max-width:1199px) {  
.product_wrap .page_title {
    font-size: 30px;
  }
.product_wrap .pagination.pagination__product {
    right: -15px;
} 
#main {
    margin-top: 0px;
}
#main_content .widget__related-products .product:hover .box-hover {
    left: 45%;
}
.widget__related-products .owl-carousel .owl-item.sca-qv-image .sca-qv-button {
    top: 53% !important;
}
}
  
 </style></div>
</div>





           </div>

        <!-- right column --> 
         </div>
    </div>
  </div>
  
  
   
  <!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> or <a href="https://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]--> 
  
</div>
<!-- end of #wrapper --> 






<!-- service block --> 

<div id="shopify-section-footer" class="shopify-section"><!-- footer -->
<footer id="footer">
  
   <div class="newsletter-wrap">
     
         <!-- Begin MailChimp Signup Form -->
<div class="container">
        <div class="row">
          <div class="col-xs-12">
            
            
<div class="footer-newsletter">
 <link href="../cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css" property="stylesheet">

<div id="mc_embed_signup1">
<form action="https://raplian.myshopify.com/" method="post" id="mc-embedded-subscribe-form1" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll1">
	<label for="mce-EMAIL">Newsletter</label>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL1" placeholder="your@email.com" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_f6efaf2aa7fd4b4ed81371791_e32bd0c22f" tabindex="-1" value=""></div>
    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe1" class="button">
    </div>
</form>
</div>
  </div>
          </div></div></div>
<!--End mc_embed_signup--> 
  

            </div>
  
 <!-- footer block -->
 
   
<div id="bottom">
<div class="container">
<div class="row"> 

  

    <div class="bottom_block_2 col-md-3 col-sm-4 col-lg-3">
    <h3>Shopping Guide</h3>
    <ul class="list">
    
    <li><a href="../blogs/news.html" title="">Blog</a></li>
    
    <li><a href="../index.html" title="">FAQs</a></li>
    
    <li><a href="../index.html" title="">Payment</a></li>
    
    <li><a href="../index.html" title="">Shipment</a></li>
    
    <li><a href="../index.html" title="">Where is my order?</a></li>
    
    <li><a href="../index.html" title="">Return policy</a></li>
    
    </ul>
    </div>
    
  



    <div class="bottom_block_3 col-md-3 col-sm-4 col-lg-3">
    <h3>Style Advisor</h3>
    <ul class="list">
    
    <li><a href="../index.html" title="">Your Account</a></li>
    
    <li><a href="../index.html" title="">Info</a></li>
    
    <li><a href="../index.html" title="">Addresses</a></li>
    
    <li><a href="../index.html" title="">Discount</a></li>
    
    <li><a href="../index.html" title="">Orders History</a></li>
    
    <li><a href="../index.html" title="">Order Tracking</a></li>
    
    </ul>
    </div>
    
  

  

   <div class="bottom_block_4 col-md-3 col-sm-4 col-lg-3">
    <h3>Information</h3>
    <ul class="list">
    
    <li><a href="../index.html" title="">Site Map</a></li>
    
    <li><a href="../index.html" title="">Search Terms</a></li>
    
    <li><a href="../search.html" title="">Advanced Search</a></li>
    
    <li><a href="../pages/about-us.html" title="">About Us</a></li>
    
    <li><a href="../pages/contact-us.html" title="">Contact Us</a></li>
    
    <li><a href="../index.html" title="">Suppliers</a></li>
    
    </ul>
    </div>
    
  
  

<div class="bottom_block_5 col-sm-12 col-md-3 col-lg-3">
       <h3>contact us</h3>
         <div class="co-info">                   
   
          
          
                  
              <p class="adr"><i class="add-icon"></i> Kingston Road, London, United Kingdom, SW19 3NW</p>
              <p class="tel"><i class="phone-icon"></i> 1800-100-1800</p>
              <p class="email"><i class="email-icon"></i> <a href="mailto:support@magikcommerce.com">support@pixxett.com</a></p>

        
                           
                  
</div>
</div> 
</div>
</div>
</div> 
  <div class="footer-middle">
 <div class="container">
        <div class="row"> 
        <div class="col-xs-12 col-sm-6">  
           <div class="social-links"> 

      <ul>

<!-- twitter -->
    <li class="tile tile_twi trs_scale">
         <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
    </li>
<!-- google+ -->
    <li class="tile tile_gpl trs_scale">
        <a href="https://google.com/"><i class="fa fa-google-plus"></i></a>
    </li>
<!-- facebook -->
    <li class="tile tile_fcb trs_scale">
        <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
    </li>
<!-- pinterest -->
    <li class="tile tile_pin trs_scale">
        <a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
    </li>
  <!-- RSS -->
    <li class="tile tile_rss trs_scale">
        <a href="../index.html"><i class="fa fa-rss"></i></a>
    </li>
  <!-- Linkedin -->
    <li class="tile tile_linkedin trs_scale">
        <a href="../index.html"><i class="fa fa-linkedin"></i></a>
    </li>
  <!-- youtube -->
    <li class="tile tile_youtube trs_scale">
        <a href="../index.html"><i class="fa fa-youtube"></i></a>
    </li>
  </ul> 
      </div>
          </div>
          
                <div class="col-xs-12 col-sm-6">
                  
    
       <!-- Footer Payment Link -->
            <div class="payment-accept">
               <div id="payment-methods">
  <ul>
    <li>       <img src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/cc-paypalee4b.png?6925323883398055779" alt="" /> </li>
    <li>         <img src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/cc-visaee4b.png?6925323883398055779" alt="" /> </li>
    <li>         <img src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/cc-amexee4b.png?6925323883398055779" alt="" /> </li>    
    <li>   <img src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/cc-mastercardee4b.png?6925323883398055779" alt="" /> </li>
    

  </ul>
</div>
 
            </div>
   
   

  </div>
   
        </div>
    </div></div>
      <!--footer-column-last--> 

 <div class="footer-bottom">
      <div class="container">
  <div class="row"> 
	<div class="container copyright" role="contentinfo">
      &copy; 2019  All Rights Reserved.  <a target="_blank" rel="nofollow" href="https://www.shopify.com/?utm_campaign=poweredby&amp;utm_medium=shopify&amp;utm_source=onlinestore">Powered by Shopify</a>.
	</div>
  </div>
      </div>
    </div>
  

  

</footer>




<style>
  
#footer {background:#181818; color:#ffffff;}
#footer .container {color:#ffffff;}
#footer .container a {color: #aaaaaa}
#footer .container a:hover {color: #dddddd;}
  
  
.newsletter-wrap {
    padding: 35px 0;
    overflow: hidden;
    clear: both;
    background: #2d2d2d;
 
}
.bottom_block_4 .footer-newsletter #mc_embed_signup1 input.email {
    width: 260px;
}
.footer-newsletter #mc_embed_signup1{background:none; overflow: hidden; position: relative;
    margin: auto;
    text-align: center;}
.footer-newsletter #mc_embed_signup1 form{padding:0px;}
.footer-newsletter #mc_embed_signup1 .button {
    background: #d50a0a;
    border: 0px solid #ffffff;
    color: #ffffff;
    cursor: pointer;
    font-weight: 600;
    line-height: 17px;
    margin-left: 10px;
    overflow: hidden;
    padding: 11px 15px !important;
    text-transform: uppercase;
    transition: color 300ms ease-in-out 0s, background-color 300ms ease-in-out 0s, background-position 300ms ease-in-out 0s;
    border-radius: 0px;
}
.footer-newsletter #mc_embed_signup1 .button:hover {
  background: #d50a0a;
  border:0px solid #e0bc27;
  transition: color 300ms ease-in-out 0s, 
  background-color 300ms ease-in-out 0s, 
  background-position 300ms ease-in-out 0s; 
}    
.footer-newsletter #mc_embed_signup1 label {
    font-size: 16px;
    text-transform: uppercase;
    display: inline-block;
    font-weight: 600;
    margin-right: 8px;
    letter-spacing: 1px;
    color:  #ffffff;
    margin-top: 13px;
    vertical-align: top;padding-top: 0px;
}
.footer-newsletter #mc_embed_signup1 input.email {
    background: #ffffff;
    border: 0px solid #ccc;
    color: #666;
    display: inline-block;
    font-size: 13px;
    height: auto;
    line-height: 25px;
    padding: 8px 15px 7px;
    width: 40%;
    border-radius: 0px;}
.footer-newsletter {
    display:block!important;
    padding: 0px 0!important;
    width:auto!important;
}
  
#footer {position:relative; display:block; width: 100%;}
#footer .container {font-size:14px; position:relative}
.footer-top {width:100%; overflow:hidden; height:80px;}  
.bottom_block_2{ padding: 35px 20px 25px 15px;}
.bottom_block_3,
.bottom_block_4{ padding: 35px 20px 25px;}

.bottom_block_5{padding: 35px 0px 10px 20px;}
#bottom {padding: 0px 0 0px 0; overflow:hidden;}
#bottom h3 {
  line-height: normal; 
  letter-spacing: 1px; 
  margin: 0;
  padding: 0px 0 10px 0; 
  font-family: 'Montserrat', sans-serif; 
  color: #ffffff; 
  text-transform: uppercase;
  font-size:12px; 
  font-weight:bold;
    position: relative;
    margin-bottom: 10px;
}
.bottom_block_1 p {
  margin: 0;
  padding: 5px 0 5px 0;
  font-weight: normal;
  color: #aaaaaa; 
  font-family: 'Source Sans Pro', sans-serif;
  font-size:12px;
 
}
  #bottom h3:after {
    content: "";
    width: 30px;
    height: 1px;
    background: #555;
    position: absolute;
    bottom: 0px;
    left: 0;
  }
#bottom ul {padding:0;}
#bottom ul li {padding: 0px 0 0 0;line-height: 1em;}
#bottom ul li a {
  font-family: 'Source Sans Pro', sans-serif;
  color: #aaaaaa; 
  font-size:12px;
  padding: 4px 0 4px 0;
  font-weight: normal; 
  display:inline-block;
}
#bottom ul li a:hover {color: #dddddd;}
.bottom_block_2 a:before,.bottom_block_3 a:before,.bottom_block_4 a:before {
content: "\f105";
font-family: FontAwesome;
font-size: 13px;
display: inline-block!important;
cursor: pointer;
line-height: 20px;
margin-right: 1px;
}
.co-info {
    border: medium none;
    color: #fff;
    display: block;
    font-size: 12px;
    font-style: normal;
    line-height: 1.5em;
    margin: 5px auto 5px;
    padding-bottom: 0px;
    padding-top: 5px;
    text-align: left;
    font-weight: 500;
}

.co-info p.adr {
  	border: medium none;
    color: #aaaaaa;
    display: block;
    font-size: 12px;
    font-style: normal;
    line-height: 1.5em;
    margin: 5px auto 18px;
    padding-bottom: 0px;
    padding-top: 5px;
    text-align: left;
    font-weight: 500;
}
.co-info p.tel {
    overflow: hidden;
    font-size: 12px;
    line-height: 35px;
    color: #aaaaaa;
    margin-bottom: 2px;
    margin-top: 12px;
    font-weight: 500;
}
.co-info p.email {
  	margin: 0;
  	padding: 5px 0 0px 0;
  	font-size:12px; 
  	font-family: 'Source Sans Pro', sans-serif;
  	display:inline-block; 
      line-height: 35px;
} 
.co-info i {
    border: 1px solid #ffffff;
    width: 35px!important;
    line-height: 32px!important;
    display: inline-block!important;
    height: 35px!important;
    text-align: center;
    margin-left: 0px!important;
    border-radius: 25px;
    margin-right: 10px!important;
    vertical-align: top;
    background: #ffffff;
    float: left;  
    color: #181818;
}  
.add-icon:before {
    content: "\f041";
    font-family: FontAwesome;
    font-size: 16px;
    display: inline-block;
    font-style: normal;
    text-align: center;

}  
.phone-icon:before {
content: "\f095";
font-family: FontAwesome;
font-size: 16px;
font-style: normal;
text-align: center;
line-height: 35px;
} 
.email-icon:before {
content: "\f0e0";
font-family: FontAwesome;
font-size: 14px;
font-style: normal;
text-align: center;
}  
.footer-bottom{    
    clear: both;
    overflow: hidden;
    padding: 0px 0;
    border-top: 1px solid #2d2d2d;}

.footer-middle{    
    clear: both;
    overflow: hidden;
    padding: 30px 0;
    border-top: 1px solid #2d2d2d;
      background: #2d2d2d;
}
#footer .container .copyright{
  padding: 15px 0 15px 15px;
  overflow: hidden;
  margin: auto;
  font-size:12px!important;
  text-align: center;
  color:#666;
  letter-spacing:1px;
}
  
/*social-links*/  
#footer .social-links ul {
   display: block;
   overflow: hidden;
   padding: 0px;
}    
#footer .social-links ul li {
  	display: inline; 
  	border:none;
	float: left;
	width: auto;
	margin-right: 8px;
} 
#footer .social-links ul li:last-child{margin-right: 0px;}
#footer .social-links ul li a {
 border-radius: 3px;
    color: #fff;
    width: 35px;
    height: 35px;
    line-height: 35px;
    border: 0px #333 solid;}

#footer .social-links ul li a:hover {color: #fff; }
#bottom .social-links h3{ margin-top: 22px;
    padding-bottom: 0px;} 

#footer .social-links ul li {
  border-radius: 5px; 
  background:#333;
}

#footer .social-links ul li:hover.tile_twi {background:#359BED;}
#footer .social-links ul li:hover.tile_gpl {background:#E33729;}
#footer .social-links ul li:hover.tile_fcb {background:#3C5B9B;}
#footer .social-links ul li:hover.tile_pin {background:#cb2027;}
#footer .social-links ul li:hover.tile_rss {background:#fd9f13;}
#footer .social-links ul li:hover.tile_linkedin {background:#027ba5;}
#footer .social-links ul li:hover.tile_youtube {background:#f03434;}
#footer .social-links ul a{font-size: 16px;
line-height: 35px;
display: inline-block!important;
width: 35px;
height: 35px;
color: #fff;
text-align: center;
padding: 0;}  
footer .newsletter-row {
    overflow: hidden;
    padding: 32px 0 22px;
    width: 100%;
}
  .bottom_block_4  .footer-newsletter {
    padding: 0px;
    width: 100%;
    display:block;
}
.bottom_block_4 .footer-newsletter #mc_embed_signup1 label {
    color: #fff;
    display: inline-block;
    float: left;
    margin-bottom: 12px;
    width: 100%; padding-top: 5px;
}
#payment-methods img {
    margin-left: 0px;
    opacity: 1;
    width: 50px;
}  
#payment-methods img:hover {
      opacity:0.8;
}
/*Payment Methods*/
#footer #payment-methods{text-align: right;  } 
#payment-methods{ margin-bottom: 0px; padding-top: 0px;}
#payment-methods ul{
  margin:0;
  padding:0;
}
#payment-methods ul li{
  list-style:none;
  display:inline-block;
  padding: 0 0px 0px 8px;  
}

@media (min-width: 480px) and (max-width: 767px) { 
  .co-info p.tel {
      margin-top: 30px;
  }
}
@media (min-width: 200px) and (max-width: 767px) { 

  .footer-newsletter #mc_embed_signup1 label {
      margin-top: 0;
      padding-top: 0;
      text-align: left;
      width: 100%;
  }
  .footer-newsletter #mc_embed_signup1 input.email {
      float: left;
      width: 100%;
  }
  .footer-newsletter #mc_embed_signup1 .button {
      float: left;   
      margin-left: 0;
      margin-top: 10px;

  }
  .bottom_block_2 {
      border-right: 1px solid #444;
      padding: 25px 20px 0 15px;
  }
  .bottom_block_3, .bottom_block_4 {
      padding: 15px 20px 0 15px;
  }
  .bottom_block_5 {
      padding: 15px 0 10px 15px;
  }
  #footer .social-links ul {
      text-align: center;
  }
  #footer .social-links ul li {
      display: inline-block;
      float: none;
      margin-right: 3px;
     margin-bottom: 15px;
  }
  #footer #payment-methods {
      text-align: center;
  }  
}
  
  
@media (min-width: 768px) and (max-width: 979px) {
  
  .co-info p.adr,
  .co-info p.tel,
  .co-info p.email {
    margin-right: 20px;
    display: inline-block;
    float: left;
    vertical-align: top;
    margin-top: 0px;
    padding-top: 0px;
    line-height: 3;
  }
  .bottom_block_5 {
      padding: 20px 0 10px 15px;
  }
  
}
  
@media (min-width: 980px) and (max-width: 1179px) {
.co-info p.email {
    font-size: 11px;
}
.bottom_block_5 {
    padding: 35px 0px 10px 12px;
}
.bottom_block_3, .bottom_block_4 {
    padding: 35px 12px 25px;
}
.co-info i {
    margin-right: 6px!important;
}
}  
  
  
</style>


</div>
 
 
<div class="modal fade newsletterwrapper" id="myModal">
<div class="modal-dialog" id="email-modal">
  <div class="modal-content">
    <div class="modal-body">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      <div class="window-content">
        <div class="left">
          <h1 class="title">Newsletter Sign up</h1>
          <p class="sub-title">sign up for our exclusive email list and be the first to hear of special promotions, new arrivals, and designer news.</p>
          

<div class="newsletter">
 
<div id="mc_embed_signup">
<form action="https://raplian.myshopify.com/" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="your@email.com" required>
    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
    </div>
</form>
</div>

  
  </div>
 

          <h2 class="message">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
        </div>
      </div>
      <!-- /.modal-content --> 
    </div>
    <!-- /.modal-dialog --> 
  </div>
  <!-- /.modal --> 
  </div></div>
<script>
      // Delayed Modal Display + Cookie On Click
  
      $(document).ready(function() {
        
        
   
        // If no cookie with our chosen name (e.g. no_thanks)...
        
        if ($.cookie("no_thanks") == null) {
                                            // Show the modal, with delay func.
          $('#myModal').appendTo("body");
          function show_modal(){
            $('#myModal').modal();
          }

            $('#myModal').modal({
            keyboard: false,
           backdrop:false
          })                                 
                                             
          // Set delay func. time in milliseconds
          window.setTimeout(show_modal, 3000);
                                                 
                                            
          }

        // On click of specified class (e.g. 'nothanks'), trigger cookie, which expires in 100 years
        $(".close").click(function() {  
          $.cookie('no_thanks', 'true', { expires: 36500, path: '/' });
          });

        
          
  
        
      });
    </script> 

  
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/jquery.cookie.minee4b.js?6925323883398055779"></script>



<script src="../cdn.shopify.com/s/javascripts/currencies.js"></script>
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/jquery.currencies.minee4b.js?6925323883398055779"></script>

<script>


Currency.format = 'money_format';


var shopCurrency = 'USD';

/* Sometimes merchants change their shop currency, let's tell our JavaScript file */
Currency.money_with_currency_format[shopCurrency] = "${{amount}} USD";
Currency.money_format[shopCurrency] = "${{amount}}";
  
/* Default currency */
var defaultCurrency = 'USD' || shopCurrency;
  
/* Cookie currency */
var cookieCurrency = Currency.cookie.read();

/* Fix for customer account pages */
jQuery('span.money span.money').each(function() {
  jQuery(this).parents('span.money').removeClass('money');
});

/* Saving the current price */
jQuery('span.money').each(function() {
  
  jQuery(this).attr('data-currency-USD', jQuery(this).html());
});

// If there's no cookie.
if (cookieCurrency == null) {
  if (shopCurrency !== defaultCurrency) {
    Currency.convertAll(shopCurrency, defaultCurrency);
  }
  else {
    Currency.currentCurrency = defaultCurrency;
  }
}
// If the cookie value does not correspond to any value in the currency dropdown.
else if (jQuery('[name=currencies]').size() && jQuery('[name=currencies] option[value=' + cookieCurrency + ']').size() === 0) {
  Currency.currentCurrency = shopCurrency;
  Currency.cookie.write(shopCurrency);
}
else if (cookieCurrency === shopCurrency) {
  Currency.currentCurrency = shopCurrency;
}
else {
  Currency.convertAll(shopCurrency, cookieCurrency);
}

jQuery('[name=currencies]').val(Currency.currentCurrency).change(function() {
  var newCurrency = jQuery(this).val();
  Currency.convertAll(Currency.currentCurrency, newCurrency);
  jQuery('.selected-currency').text(Currency.currentCurrency);
});

var original_selectCallback = window.selectCallback;
var selectCallback = function(variant, selector) {
  original_selectCallback(variant, selector);
  Currency.convertAll(shopCurrency, jQuery('[name=currencies]').val());
  jQuery('.selected-currency').text(Currency.currentCurrency);
};

jQuery('.selected-currency').text(Currency.currentCurrency);

</script>

 
<script>
$(document).ready(function(){
$('.custom-select').selectik();
});
</script>
<div class="cart_popup"><i class="icon-ok"></i> &nbsp; Product Added to Cart</div>
<div class="error-message-stock"> You can only add </div>
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/shopee4b.js?6925323883398055779"></script>


<script>
jQuery(function() {
jQuery('.swatch :radio').change(function() {
var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
var optionValue = jQuery(this).val();
jQuery(this)
.closest('form')
.find('.single-option-selector')
.eq(optionIndex)
.val(optionValue)
.trigger('change');
});
});
</script> 
<script>
// (c) Copyright 2016 Caroline Schnapp. All Rights Reserved. Contact: mllegeorgesand@gmail.com
// See https://docs.shopify.com/themes/customization/navigation/link-product-options-in-menus

var Shopify = Shopify || {};

Shopify.optionsMap = {};

Shopify.updateOptionsInSelector = function(selectorIndex) {
    
  switch (selectorIndex) {
    case 0:
      var key = 'root';
      var selector = jQuery('.single-option-selector:eq(0)');
      break;
    case 1:
      var key = jQuery('.single-option-selector:eq(0)').val();
      var selector = jQuery('.single-option-selector:eq(1)');
      break;
    case 2:
      var key = jQuery('.single-option-selector:eq(0)').val();  
      key += ' / ' + jQuery('.single-option-selector:eq(1)').val();
      var selector = jQuery('.single-option-selector:eq(2)');
  }
  
  var initialValue = selector.val();
  selector.empty();    
  var availableOptions = Shopify.optionsMap[key];
  for (var i=0; i<availableOptions.length; i++) {
    var option = availableOptions[i];
    var newOption = jQuery('<option></option>').val(option).html(option);
    selector.append(newOption);
  }
  jQuery('.swatch[data-option-index="' + selectorIndex + '"] .swatch-element').each(function() {
    if (jQuery.inArray($(this).attr('data-value'), availableOptions) !== -1) {
      $(this).removeClass('soldout').show().find(':radio').removeAttr('disabled','disabled');
    }
    else {
      $(this).addClass('soldout').hide().find(':radio').removeAttr('checked').attr('disabled','disabled');
    }
  });
  if (jQuery.inArray(initialValue, availableOptions) !== -1) {
    selector.val(initialValue);
  }
  selector.trigger('change');  
  
};

Shopify.linkOptionSelectors = function(product) {
  // Building our mapping object.
  for (var i=0; i<product.variants.length; i++) {
    var variant = product.variants[i];
    if (variant.available) {
      // Gathering values for the 1st drop-down.
      Shopify.optionsMap['root'] = Shopify.optionsMap['root'] || [];
      Shopify.optionsMap['root'].push(variant.option1);
      Shopify.optionsMap['root'] = Shopify.uniq(Shopify.optionsMap['root']);
      // Gathering values for the 2nd drop-down.
      if (product.options.length > 1) {
        var key = variant.option1;
        Shopify.optionsMap[key] = Shopify.optionsMap[key] || [];
        Shopify.optionsMap[key].push(variant.option2);
        Shopify.optionsMap[key] = Shopify.uniq(Shopify.optionsMap[key]);
      }
      // Gathering values for the 3rd drop-down.
      if (product.options.length === 3) {
        var key = variant.option1 + ' / ' + variant.option2;
        Shopify.optionsMap[key] = Shopify.optionsMap[key] || [];
        Shopify.optionsMap[key].push(variant.option3);
        Shopify.optionsMap[key] = Shopify.uniq(Shopify.optionsMap[key]);
      }
    }
  }
  // Update options right away.
  Shopify.updateOptionsInSelector(0);
  if (product.options.length > 1) Shopify.updateOptionsInSelector(1);
  if (product.options.length === 3) Shopify.updateOptionsInSelector(2);
  // When there is an update in the first dropdown.
  jQuery(".single-option-selector:eq(0)").change(function() {
    Shopify.updateOptionsInSelector(1);
    if (product.options.length === 3) Shopify.updateOptionsInSelector(2);
    return true;
  });
  // When there is an update in the second dropdown.
  jQuery(".single-option-selector:eq(1)").change(function() {
    if (product.options.length === 3) Shopify.updateOptionsInSelector(2);
    return true;
  });  
};
 

  
</script>
  
  

</body>


</html>

