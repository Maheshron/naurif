<?php
session_start();
include ("./includes/db.php");
?>
<!doctype html>
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="en"><![endif]-->
<!--[if IE 7]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta charset="utf-8">

<title>Vruddhi</title>



<link rel="canonical" href="register.html" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/272629771/digital_wallets/dialog">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script id="shopify-features" type="application/json">{"accessToken":"358cee74a32079c4f0de9a0c2c65fa8f","betas":[],"domain":"raplian.myshopify.com","shopId":272629771,"smart_payment_buttons_url":"https:\/\/cdn.shopifycloud.com\/payment-sheet\/assets\/latest\/spb.js"}</script>
<script>var Shopify = Shopify || {};
Shopify.shop = "raplian.myshopify.com";
Shopify.currency = {"active":"USD","rate":"1.0"};
Shopify.theme = {"name":"raplian-shopify","id":1675755531,"theme_store_id":null,"role":"main"};
Shopify.theme.handle = "null";
Shopify.theme.style = {"id":null,"handle":null};</script>
<script>(function() {
  function asyncLoad() {
    var urls = ["\/\/productreviews.shopifycdn.com\/assets\/v4\/spr.js?shop=raplian.myshopify.com"];
    for (var i = 0; i < urls.length; i++) {
      var s = document.createElement('script');
      s.type = 'text/javascript';
      s.async = true;
      s.src = urls[i];
      var x = document.getElementsByTagName('script')[0];
      x.parentNode.insertBefore(s, x);
    }
  };
  if(window.attachEvent) {
    window.attachEvent('onload', asyncLoad);
  } else {
    window.addEventListener('load', asyncLoad, false);
  }
})();</script>
<script id="__st">var __st={"a":272629771,"offset":-18000,"reqid":"96e6e4d0-6b8a-40e8-8d69-b4fd32283b71","pageurl":"raplian.myshopify.com\/account\/register","u":"26920615c4f5"};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
<script>window.Shopify = window.Shopify || {};
window.Shopify.Checkout = window.Shopify.Checkout || {};
window.Shopify.Checkout.apiHost = "raplian.myshopify.com";</script>
<script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
window.ShopifyAnalytics.meta.currency = 'USD';
var meta = {"page":{}};
for (var attr in meta) {
  window.ShopifyAnalytics.meta[attr] = meta[attr];
}</script>
<script>window.ShopifyAnalytics.merchantGoogleAnalytics = function() {
  
};
</script>
<script class="analytics">(function () {
  var customDocumentWrite = function(content) {
    var jquery = null;

    if (window.jQuery) {
      jquery = window.jQuery;
    } else if (window.Checkout && window.Checkout.$) {
      jquery = window.Checkout.$;
    }

    if (jquery) {
      jquery('body').append(content);
    }
  };

  var isDuplicatedThankYouPageView = function() {
    return document.cookie.indexOf('loggedConversion=' + window.location.pathname) !== -1;
  }

  var setCookieIfThankYouPage = function() {
    if (window.location.pathname.indexOf('/checkouts') !== -1 &&
        window.location.pathname.indexOf('/thank_you') !== -1) {

      var twoMonthsFromNow = new Date(Date.now())
      twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

      document.cookie = 'loggedConversion=' + window.location.pathname + '; expires=' + twoMonthsFromNow;
    }
  }

  var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
  if (trekkie.integrations) {
    return;
  }
  trekkie.methods = [
    'identify',
    'page',
    'ready',
    'track',
    'trackForm',
    'trackLink'
  ];
  trekkie.factory = function(method) {
    return function() {
      var args = Array.prototype.slice.call(arguments);
      args.unshift(method);
      trekkie.push(args);
      return trekkie;
    };
  };
  for (var i = 0; i < trekkie.methods.length; i++) {
    var key = trekkie.methods[i];
    trekkie[key] = trekkie.factory(key);
  }
  trekkie.load = function(config) {
    trekkie.config = config;
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.onerror = function(e) {
      (new Image()).src = 'http://v.shopify.com/internal_errors/track?error=trekkie_load';
    };
    script.async = true;
    script.src = '../cdn.shopify.com/s/javascripts/tricorder/trekkie.storefront.min97e4.js?v=2017.09.05.1';
    var first = document.getElementsByTagName('script')[0];
    first.parentNode.insertBefore(script, first);
  };
  trekkie.load(
    {"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":272629771,"isMerchantRequest":null,"themeId":1675755531,"themeCityHash":7238398099819446195}},"Performance":{"navigationTimingApiMeasurementsEnabled":true,"navigationTimingApiMeasurementsSampleRate":0.01},"Session Attribution":{}}
  );

  var loaded = false;
  trekkie.ready(function() {
    if (loaded) return;
    loaded = true;

    window.ShopifyAnalytics.lib = window.trekkie;
    

    var originalDocumentWrite = document.write;
    document.write = customDocumentWrite;
    try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
    document.write = originalDocumentWrite;

    if (!isDuplicatedThankYouPageView()) {
      setCookieIfThankYouPage();
      
        window.ShopifyAnalytics.lib.page(
          null,
          {}
        );
      
      
    }
  });

  
      var eventsListenerScript = document.createElement('script');
      eventsListenerScript.async = true;
      eventsListenerScript.src = "../cdn.shopify.com/s/assets/shop_events_listener-acf771159f9849ef6e5265782c99efe8b99406214c96a4373224ecafe285d7bb.js";
      document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);
    
})();</script>
<script integrity="sha256-DBz+azZCyGu5gK0LKY2/n3wGonECQmpgH9W9oypMXP0=" defer="defer" src="../cdn.shopify.com/s/assets/storefront/express_buttons-0c1cfe6b3642c86bb980ad0b298dbf9f7c06a27102426a601fd5bda32a4c5cfd.js" crossorigin="anonymous"></script>
<script integrity="sha256-6HOSr+Kf4wcoL05qrRLLS8wq/v1rf+vwtw7f0xX5aEw=" defer="defer" src="../cdn.shopify.com/s/assets/storefront/features-e87392afe29fe307282f4e6aad12cb4bcc2afefd6b7febf0b70edfd315f9684c.js" crossorigin="anonymous"></script>
<script id="sections-script" data-sections="navigation,footer" defer="defer" src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/compiled_assets/scriptsee4b.js?6925323883398055779"></script>

 <link rel="stylesheet" type="text/css" href="style.css">
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


<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<link href="//cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/ie8.css?6925323883398055779" rel="stylesheet" type="text/css" media="all" />
<![endif]-->


<script src="../cdn.shopify.com/s/assets/themes_support/shopify_common-8ea6ac3faf357236a97f5de749df4da6e8436ca107bc3a4ee805cbf08bc47392.js"></script>
<script src="../cdn.shopify.com/s/assets/themes_support/customer_area-4beccea87758d91106a581ba89341d9b51842f6da79209258c8297239e950343.js"></script>




<script src="../ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="../cdn.shopify.com/s/assets/themes_support/option_selection-fe6b72c2bbdd3369ac0bfefe8648e3c889efca213baefd4cfb0dd9363563831f.js"></script>
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/bootstrap.minee4b.js?6925323883398055779"></script>
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/jquery-migrate-1.2.1.minee4b.js?6925323883398055779"></script>
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/jquery.cookie.minee4b.js?6925323883398055779"></script>
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/device.minee4b.js?6925323883398055779"></script>
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/jquery.easing.1.3ee4b.js?6925323883398055779"></script>
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/api.jqueryee4b.js?6925323883398055779"></script>
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/hoverIntentee4b.js?6925323883398055779"></script>
<script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/superfishee4b.js?6925323883398055779"></script>
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

    <script src="assets/main/js/jquery-1.11.0.min.js"></script>
    <!--Jquery-->
    <script src="assets/main/js/jquery-ui.min.js"></script>
    <!--Jquery UI-->
    <script src="assets/main/js/bootstrap.min.js"></script>
    <!--Bootstrap-->
    <script src="assets/main/js/owl.carousel.min.js"></script>
    <!--Carousel-->
    <script src="assets/main/js/slick.min.js"></script>
    <!--Slick Slider-->
    <script src="assets/main/js/custom.js"></script>




<style>
    .site-navigation > ul > li > a {
    padding: 14px;
    color: #000;
    display: block;
    font-size: 12px;
}
#main
{
    background-image:url('images/fabric.jpg');
        background-repeat: no-repeat;

}
</style>

</head>

<body id="create-account" class=" template-customers-register" >
<div id="wrapper"> 
 <?php
    include("head.php");
    ?>
    <div class="quick-view"></div>
  
  
  
  
  
  
   
  
  <!-- main content --> 
  
 
  
  
  
  
  <div id="main" role="main">
    <div class="container">
      <div class="row">  

        <!-- left column --> 

        
         
        


         

        <!-- center column -->
        <div id="main_content" class="col-main col-sm-12">

           
    
    <div class="breadcrumbs">   
        
<div id="breadcrumb">
  <ul class="breadcrumb">
    <li><a href="../index.html" class="homepage-link" title="Back to the frontpage">Home</a><span class="divider">/</span></li>
    
        <li><span class="page-title">Create Account</span></li>
    
  </ul>

  </div>
 
 </div>
    
    

          
          
<div id="template" class="customer customer__register">

  <div id="customer">
	  <!-- Create Customer -->
	  <div id="create-customer">
	    <div class="template_header">
	      <h2 class="page_title">Create Account</h2>
	    </div>

	    <div class="template_content row">	
      <div class="form_customer col-sm-12">    
              <form method="post" action="https://raplian.myshopify.com/account" id="create_customer" accept-charset="UTF-8"><input type="hidden" name="form_type" value="create_customer" /><input type="hidden" name="utf8" value="✓" />
                
        
                <div id="first_name" class="clearfix large_form control-group">
                  <label for="first_name" class="login control-label">First Name</label>
                  <div class="controls"><input class="form-control" type="text" value="" name="customer[first_name]" id="first_name" class="large" size="30" /></div>
                </div>
        
                <div id="last_name" class="clearfix large_form control-group">
                  <label for="last_name" class="login control-label">Last Name</label>
                  <div class="controls"><input class="form-control" type="text" value="" name="customer[last_name]" id="last_name" class="large" size="30" /></div>
                </div>
        
                <div id="email" class="clearfix large_form control-group">
                  <label for="email" class="login control-label">Email Address</label>
                  <div class="controls"><input class="form-control" type="email" value="" name="customer[email]" id="email" class="large" size="30" /></div>
                </div>
        
                <div id="password" class="clearfix large_form control-group">
                  <label for="password" class="login control-label">Password</label>
                  <div class="controls"><input class="form-control" type="password" value="" name="customer[password]" id="password" class="large password" size="30" /></div>
                </div>
        
                <div class="action_bottom">
                  <input class="btn btn-primary" type="submit" value="Create" />
                  <span class="note">or <a href="../index.html">Sign In</a></span>
                </div>
              </form>
      </div>
  	  </div>
	  </div><!-- /#create-customer -->
  </div>
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

   <?php
   include('footer.php');
   ?>




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

  
<script src="../../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/jquery.cookie.minee4b.js?6925323883398055779"></script>



<script src="../../cdn.shopify.com/s/javascripts/currencies.js"></script>
<script src="../../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/jquery.currencies.minee4b.js?6925323883398055779"></script>

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
<script src="../../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/shopee4b.js?6925323883398055779"></script>


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

