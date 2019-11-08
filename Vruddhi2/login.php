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



<link rel="canonical" href="login.html" />
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
<script id="__st">var __st={"a":272629771,"offset":-18000,"reqid":"571dfe37-b590-435f-82f9-0b9fa6663222","pageurl":"raplian.myshopify.com\/account\/login","u":"55bfb4c11eca"};</script>
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
   <link rel="stylesheet" type="text/css" href="style.css">
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
    background-image:url('images/fabric4.jpg');
        background-repeat: no-repeat;

}
</style>

</head>
<?php
            include("head.php");
            ?>
<body id="account" class=" template-customers-login" >
<div id="wrapper1"> 

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
    
        <li><span class="page-title">Account</span></li>
    
  </ul>

  </div>
 
 </div>
    
    

          
          

<div id="template" class="customer customer__login">

  <div class="row-fluid">
    <div class="span6">
      <div id="customer">
        <div class="template_header">
          <h2 class="page_title">Customer Login</h2>
        </div>
        
        <div class="template_content">

        <div>
          <form method="post" action="https://raplian.myshopify.com/account/login" id="customer_login" accept-charset="UTF-8"><input type="hidden" name="form_type" value="customer_login" /><input type="hidden" name="utf8" value="✓" />
          
            
         
<div class="row">
            <div id="login_email" class="col-sm-12 large_form control-group">
              <label for="customer_email" class="login control-label">Email Address</label>
              <div class="controls"><input class="form-control" type="email" value="" name="customer[email]" id="customer_email" class="large" size="30" /></div>
            </div>
</div>
  
            
  
              
<div class="row">
              <div id="login_password" class="col-sm-12 clearfix large_form control-group">
                <label for="customer_password" class="login control-label">Password</label>
                <div class="controls"><input class="form-control" type="password" value="" name="customer[password]" id="customer_password" class="large password" size="16" /></div>
              </div>
</div>
              <div class="control-group">
                <div id="forgot_password">
                  <div class="controls"><a href="#" onclick="showRecoverPasswordForm();return false;">Forgot your password?</a></div>
                </div>
              </div>
  
            
  
            <div class="action_bottom">
              <input class="btn btn-primary" type="submit" value="Sign In" />
              <span class="note">or <a href="register.php"> Create Account</a></span>
            </div>
          </form>
        </div>
        </div>
      </div>

  

  <div id="recover-password" style='display:none' class="customer customer__recover">
    <div class="template_header">
      <h1 class="page_title">Reset Password</h1>      
    </div>

    <div class="template_content">
      <p class="note">We will send you an email to reset your password.</p>
      <form method="post" action="https://raplian.myshopify.com/account/recover" accept-charset="UTF-8"><input type="hidden" name="form_type" value="recover_customer_password" /><input type="hidden" name="utf8" value="✓" />
        
<div class="row">
        <div id="recover_email" class="col-sm-4 large_form">
          <label for="email" class="large">Email</label>
          <input class="form-control" type="email" value="" size="30" name="email" id="recover-email" class="large" />
        </div>
</div>
<div class="row">
        <div class="col-sm-3 action_bottom">
          <input class="btn btn-primary" type="submit" value="Submit" />
          <span class="note">or <a href="#" onclick="hideRecoverPasswordForm();return false;">Cancel</a></span>
        </div>
</div>
      </form>
    </div>
  </div>

  </div>

  <div class="span6">

  

  
  </div>
</div>
</div>


<script>
  function showRecoverPasswordForm() {
    document.getElementById('recover-password').style.display = 'block';
    document.getElementById('customer').style.display='none';
  }

  function hideRecoverPasswordForm() {
    document.getElementById('recover-password').style.display = 'none';
    document.getElementById('customer').style.display = 'block';
  }

  if (window.location.hash == '#recover') { showRecoverPasswordForm() }
</script>

<script>
  jQuery(function($){
    $('.errors').addClass('alert').addClass('alert-warning');
  });
</script>


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

