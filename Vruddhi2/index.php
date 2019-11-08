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
<!--<![endif]-->


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

    
<head>
    <meta charset="utf-8">

    <title>Vruddhi</title>



    <link rel="canonical" href="index.html" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/272629771/digital_wallets/dialog">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script id="shopify-features" type="application/json">
        {
            "accessToken": "358cee74a32079c4f0de9a0c2c65fa8f",
            "betas": [],
            "domain": "raplian.myshopify.com",
            "shopId": 272629771,
            "smart_payment_buttons_url": "https:\/\/cdn.shopifycloud.com\/payment-sheet\/assets\/latest\/spb.js"
        }
    </script>
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
    <script id="__st">var __st={"a":272629771,"offset":-18000,"reqid":"5afb828c-1d24-4cd4-9f1e-1b0cdb1989f6","pageurl":"raplian.myshopify.com\/","u":"a76ca6534e2f","p":"home"};</script>
    <script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
    <script>window.Shopify = window.Shopify || {};
window.Shopify.Checkout = window.Shopify.Checkout || {};
window.Shopify.Checkout.apiHost = "raplian.myshopify.com";</script>
    <script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
window.ShopifyAnalytics.meta.currency = 'USD';
var meta = {"page":{"pageType":"home"}};
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
          {"pageType":"home"}
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
    <script id="sections-script" data-sections="home-tabs,best-sellers,featured-product,navigation,slideshow,full-width-banner,home-latest-blog,instagram,brand-logos,footer" defer="defer" src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/compiled_assets/scriptsee4b.js?6925323883398055779"></script>

    <link rel="stylesheet" href="assets/main/css/bootstrap.min.css">
    <!--Bootstrap-->
    <link rel="stylesheet" type="text/css" href="assets/main/css/favicon.css" />
    <link rel="stylesheet" type="text/css" href="assets/main/css/custom.css" />
    <link rel="stylesheet" type="text/css" href="assets/main/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="style.css">



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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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

    <!--    <script src="../ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>-->
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


<style>

.open>.dropdown-menu

{
        margin-left: -78px;

}
    .product_image-wrap a img {
    height: 300px;
}
    
    .template-index #main_content {
    background: #fff;
}
    
    #main_content .product {
    padding-left: 0;
    padding-right: 0;
    position: relative;
    text-align: center;
    padding: 15px 15px 30px;
    background: #f8f8f8;
        z-index: 1;
        
}

@media (min-width: 1200px)
{
    .footer-cn
{
    width:1289px;
} 
}
    
    .logo-section .row
{
    margin-right:0px;
}
    </style>

</head>
<?php
            include("head.php");
            ?>

<body id="raplian" class=" template-index">

    <div id="wrapper">

        <div id="shopify-section-navigation" class="shopify-section">

            <script>

                jQuery(document).ready(function() {

    jQuery("ul.dropdown li").has("ul.dropdown").find('>span').click(function(e) {
        if (!jQuery(".visible-phone").is(":visible")) {
            e.preventDefault();
            var currentParentMenu = jQuery(this).parents(".parent-mega-menu");
            var subMegaMenu = jQuery(this).parents(".row").find(".sub-mega-menu");
            var parentLink = jQuery(this).prev();
            var grandParentLink = jQuery(this).parents(".inner").find(">a");
            subMegaMenu.find(".inner").html(jQuery(this).next().clone());
            subMegaMenu.find(".parent-link a:eq(0)").attr("href", grandParentLink.attr("href")).text(grandParentLink.text());
            subMegaMenu.find(".parent-link a:eq(1)").attr("href", parentLink.attr("href")).text(parentLink.text());
            subMegaMenu.find(".parent-link span.up").click(function() {
                subMegaMenu.slideUp();
                currentParentMenu.slideDown();
            });
            currentParentMenu.slideUp();
            subMegaMenu.slideDown();
        }
    });

});



(function(e) {
    e(document).keyup(function(n) {
        if (n.keyCode == 27) {
            t.closeDropdownCart();
            if (e(".modal").is(":visible")) {
                e(".modal").fadeOut(500)
            }
        }
    });
    e(document).ready(function() {
        t.init()
    });
    var t = {
        elantraTimeout: null,
        init: function() {
            this.initDropDownCart();
            this.initAddToCart();
            this.initModal();
            this.initProductAddToCart();
        },

        showModal: function(n) {
            e(n).fadeIn(500);
            t.elantraTimeout = setTimeout(function() {
                e(n).fadeOut(500)
            }, 5e3)
        },
        checkItemsInDropdownCart: function() {
            if (e("#dropdown-cart .mini-products-list").children().length > 0) {
                e("#dropdown-cart .no-items").hide();
                e("#dropdown-cart .has-items").show()
            } else {
                e("#dropdown-cart .has-items").hide();
                e("#dropdown-cart .no-items").show()
            }
        },
        initModal: function() {
            e(".continue-shopping").click(function() {
                clearTimeout(t.elantraTimeout);
                e(".ajax-success-modal").fadeOut(500)
            });
            e(".close-modal, .overlay").click(function() {
                clearTimeout(t.elantraTimeout);
                e(".ajax-success-modal").fadeOut(500)
            })
        },
        initDropDownCart: function() {
            if (window.dropdowncart_type == "click") {
                e("#cartToggle").click(function() {
                    if (e("#dropdown-cart").is(":visible")) {
                        e("#dropdown-cart").slideUp("fast")
                    } else {
                        e("#dropdown-cart").slideDown("fast")
                    }
                })
            } else {
                if (!("ontouchstart" in document)) {
                    e("#cartToggle").hover(function() {
                        if (!e("#dropdown-cart").is(":visible")) {
                            e("#dropdown-cart").slideDown("fast")
                        }
                    });
                    e(".wrapper-top-cart").mouseleave(function() {
                        e("#dropdown-cart").slideUp("fast")
                    })
                } else {
                    e("#cartToggle").click(function() {
                        if (e("#dropdown-cart").is(":visible")) {
                            e("#dropdown-cart").slideUp("fast")
                        } else {
                            e("#dropdown-cart").slideDown("fast")
                        }
                    })
                }
            }
            t.checkItemsInDropdownCart();
            e("#dropdown-cart .no-items a").click(function() {
                e("#dropdown-cart").slideUp("fast")
            });
            e("#dropdown-cart a.btn-remove").live("click", function(n) {
                n.preventDefault();
                var r = e(this).parents(".item").attr("id");
                r = r.match(/\d+/g);
                Shopify.removeItem(r, function(e) {
                    t.doUpdateDropdownCart(e);

                })

            })
        },
        closeDropdownCart: function() {
            if (e("#dropdown-cart").is(":visible")) {
                e("#dropdown-cart").slideUp("fast")
            }
        },
        initProductAddToCart: function() {
            if (e("#product-add-to-cart").length > 0) {
                e("#product-add-to-cart").click(function(n) {
                    n.preventDefault();
                    if (e(this).attr("disabled") != "disabled") {
                        if (!window.ajax_cart) {
                            e(this).closest("form").submit()
                        } else {
                            var r = e("#add-to-cart-form select[name=id]").val();
                            if (!r) {
                                r = e("#add-to-cart-form input[name=id]").val()
                            }
                            var i = e("#add-to-cart-form input[name=quantity]").val();
                            if (!i) {
                                i = 1
                            }
                            var s = e(".product-title h2").text();
                            var o = e("#product-featured-image").attr("src");
                            t.doAjaxAddToCart(r, i, s, o)
                        }
                    }
                    return false
                })
            }
        },
        initAddToCart: function() {
            if (e(".add-to-cart-btn").length > 0) {
                e(".add-to-cart-btn").click(function(n) {
                    n.preventDefault();
                    if (e(this).attr("disabled") != "disabled") {
                        var r = e(this).parents(".product-item");
                        var i = e(r).attr("data-id");

                        i = i.match(/\d+/g);
                        if (window.ajax_cart) {

                            e(".product-actions-" + i).submit();
                        } else {
                            var s = e(".product-actions-" + i + " select[name=id]").val();

                            if (!s) {

                                s = e(".product-actions-" + i + " input[name=id]").val()
                            }
                            var o = e(".product-actions-" + i + " input[name=quantity]").val();
                            if (!o) {
                                o = 1
                            }

                            var u = e(r).find(".product-title").text();
                            var a = e(r).find(".product-grid-image img").attr("src");
                            t.doAjaxAddToCart(s, o, u, a)
                        }
                    }
                    return false;
                })
            }
        },
        showLoading: function() {
            e(".loading-modal").show()
        },
        hideLoading: function() {
            e(".loading-modal").hide()
        },
        doAjaxAddToCart: function(n, r, i, s) {
            e.ajax({
                type: "post",
                url: "/cart/add.js",
                data: "quantity=" + r + "&id=" + n,
                dataType: "json",
                beforeSend: function() {
                    t.showLoading()
                }
                ,
                success: function(n) {

                    t.hideLoading();
                    e(".ajax-success-modal").find(".ajax-product-title").text(i);
                    e(".ajax-success-modal").find(".ajax-product-image").attr("src", s);
                    e(".ajax-success-modal").find(".btn-go-to-cart").show();
                    t.showModal(".ajax-success-modal");

                    t.updateDropdownCart();
                    //  e(".cart_popup").show();
                    // e(".cart_popup").delay(40).show();
                    e('.cart_popup').delay(300).slideDown(300);
                    e('.cart_popup').delay(2000).slideUp(400);


                },
                error: function(n, r) {
                    t.hideLoading();
                    e(".error-message-stock").html(e.parseJSON(n.responseText).description);
                    e('.error-message-stock').delay(300).slideDown(300);
                    e('.error-message-stock').delay(5000).slideUp(600);

                }
            })
        },
        updateDropdownCart: function() {
            Shopify.getCart(function(r) {
                t.doUpdateDropdownCart(r)
            })
        },


        doUpdateDropdownCart: function(n) {



            var r = '<li class="item" id="cart-item-{ID}"><a href="{URL}" title="{TITLE}" class="product-image"><img src="{IMAGE}" alt="{TITLE}"></a><div class="product-details"><a href="javascript:void(0)" title="Remove This Item" class="btn-remove">X</a><p class="product-name"><a href="{URL}">{TITLE}</a></p><div class="cart-collateral">{QUANTITY} x <span class="money">{PRICE}</span></div></div></li>';
            e(".count").text(n.item_count);

            

            e('#currencies > option').each(function() {
                var curtype = Shopify.formatMoney(Currency.convert(n.total_price, shopCurrency, e(this).val()), Currency.money_format[e(this).val()]);

                e(".carttop .money").attr('data-currency-'+e(this).val(),curtype);
                e("#dropdown-cart .summary .money").attr('data-currency-'+e(this).val(),curtype);
            });


            e(".carttop .money").html(Shopify.formatMoney(Currency.convert(n.total_price, shopCurrency, jQuery("#currencies").val()), Currency.money_format[jQuery("#currencies").val()]));

            e("#dropdown-cart .summary .money").html(Shopify.formatMoney(Currency.convert(n.total_price, shopCurrency, jQuery("#currencies").val()), Currency.money_format[jQuery("#currencies").val()]));

            




            e("#dropdown-cart .mini-products-list").html("");
            if (n.item_count > 0) {
                for (var i = 0; i < n.items.length; i++) {
                    var s = r;
                    s = s.replace(/\{ID\}/g, n.items[i].id);
                    s = s.replace(/\{URL\}/g, n.items[i].url);
                    s = s.replace(/\{TITLE\}/g, n.items[i].title);
                    s = s.replace(/\{QUANTITY\}/g, n.items[i].quantity);
                    s = s.replace(/\{IMAGE\}/g, Shopify.resizeImage(n.items[i].image, "small"));
                    s = s.replace(/\{PRICE\}/g, Shopify.formatMoney(n.items[i].price, window.formatMoney));
                    e("#dropdown-cart .mini-products-list").append(s)
                }
                e("#dropdown-cart .btn-remove").click(function(n) {
                    n.preventDefault();
                    var r = e(this).parents(".item").attr("id");
                    r = r.match(/\d+/g);
                    Shopify.removeItem(r, function(e) {
                        t.doUpdateDropdownCart(e);

                    })

                });
                if (t.checkNeedToConvertCurrency()) {

                    Currency.convertAll(shopCurrency, jQuery("#currencies").val(), ".top-cart-contain span.money", window.formatMoney)
                }
            }

            t.checkItemsInDropdownCart();

        },
        checkNeedToConvertCurrency: function() {

            return  window.show_multiple_currencies && Currency.currentCurrency != shopCurrency
        },
        convertToSlug: function(e) {
            return e.toLowerCase().replace(/[^a-z0-9 -]/g, "").replace(/\s+/g, "-").replace(/-+/g, "-")
        }
    }



})(jQuery);


</script>



        </div>
        <div class="quick-view"></div>

        <!-- slider -->
        <div id="shopify-section-slideshow" class="shopify-section index-section index-section--flush">
            <div class="container-fluid">
                
            </div>

            <script>
                var revapi73,
	tpj=jQuery;
			
tpj(document).ready(function() {
	if(tpj("#rev_slider_73_1").revolution == undefined){
		revslider_showDoubleJqueryError("#rev_slider_73_1");
	}else{
		revapi73 = tpj("#rev_slider_73_1").show().revolution({
			sliderType:"standard",
			sliderLayout:"auto",
			dottedOverlay:"none",
			delay:9000,
			navigation: {
				keyboardNavigation:"off",
				keyboard_direction: "horizontal",
				mouseScrollNavigation:"off",
 				mouseScrollReverse:"default",
				onHoverStop:"off",
				arrows: {
					style:"uranus",
					enable:true,
								rtl:true,
					hide_onmobile:false,
					hide_onleave:true,
					hide_delay:200,
					hide_delay_mobile:1200,
					tmp:'',
					left: {
						h_align:"left",
						v_align:"center",
						h_offset:20,
						v_offset:0
					},
					right: {
						h_align:"right",
						v_align:"center",
						h_offset:20,
						v_offset:0
					}
				}
				,
				bullets: {
					enable:true,
					hide_onmobile:false,
					style:"uranus",
					hide_onleave:false,
					direction:"horizontal",
					h_align:"center",
					v_align:"bottom",
					h_offset:0,
					v_offset:20,
					space:5,
					tmp:'<span class="tp-bullet-inner"></span>'
				}
			},
			visibilityLevels:[850,778,480,320],
			gridwidth:1920,
			gridheight:725,
			lazyType:"none",
			shadow:0,
			spinner:"spinner3",
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,
			shuffle:"off",
			autoHeight:"off",
			disableProgressBar:"on",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
		});
	}
	
});	/*ready*/
</script>




<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/4.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/5.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="images/6.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>



        </div>
        
<!--
        <div id="shopify-section-homepage-block-three-banner" class="shopify-section index-section index-section--flush">


            <div class="shopify-section three-banner-home-top-wrapper">
                <div class="container-fluid">
                    <div class="row">

                        <div class="three-banner-home-top">
                            <ul class="">

                                <li class="col-xs-12 col-sm-6 col-lg-6" data-wow-delay="ms">
                                    <div class="three-banner-link-wrapper">
                                        <a href="collections/dresses.html">

                                            <img src="images/7.jpg" alt="">


                                        </a>
                                    </div>
                                </li>

                                <li class="col-xs-12 col-sm-6 col-lg-6" data-wow-delay="ms">
                                    <div class="three-banner-link-wrapper">
                                        <a href="collections/baby-amp-kids.html">

                                            <img src="images/9.jpg" alt="">


                                        </a>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>





        </div>
-->







<div class="vruddhi-cnt">

        <div id="main_content" class="col-main col-sm-12 col-sm-push-3-">

            <div class="index-scope">


                <div class="">
                    <div class="row section1" >
                        <div class="col-lg-12 col-sm-12 main-home">
                            <!-- BEGIN content_for_index -->
                            <div id="shopify-section-1504872997843" class="shopify-section home-section clearfix">
                               
                                <section class="widget-listingtab" style="margin-right:50px;">
                                    <div class="">

                                        <div class="col-lg-12 col-sm-12 module tab-slider">

                                             <div id="pixxett_listing_tabs_1504872997843" class="pixxett-listing-tabs first-load module products-listing grid">
                                                <div class="pixxett-tabs-wrap">

                                                    <div class="pixxett-tabs-items-container product-layout">


                                                        <div class="pixxett-tabs-items  pixxett-tabs-items-selected pixxett-tabs-items-loaded items-category-10350428171" data-total="37">
                                                            <div class="pixxett-tabs-items-inner pixxett-tabs00- pixxett-tabs01- pixxett-tabs02- pixxett-tabs03- pixxett-tabs04-">
                                                                <h3>Handcrafted Dresses & Suits</h3>
                                            <a href="#" class="fp">Featured Picks</a>
                                            <div class="divider">&nbsp;</div>
                                                                <div class="pixxett-tabs-item new-pixxett-tabs-item">
                                                                    
                                                                    <div class="item-inner product-thumb transition">

                                                                        <div data-id="581104336907" class="product-581104336907 product product__product-grid-item product-item item_odd step3-1 step4-1">
                                                                            <div class="item-inner">
                                                                                <div class="product_image-wrap item-img">
                                                                                    <div class="pro-img">
                                                                                        <a href="collections/dresses/products/women-solid-longline-sweater.html" class="product-grid-image">
                                                                                            <img src="images/dress/19.jpg" alt="Women Solid Longline Sweater">

                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="box-hover">
                                                                                        <ul class="add-to-links">
                                                                                            <li>

                                                                                                <div class="product-addto-links">

                                                                                                    <a class="btn btnWishlistNoLog btnProduct" href="account/login.html" data-toggle="tooltip" title="Go to wishlist">


                                                                                                    </a>

                                                                                                </div>

                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div><!-- .prod-image-wrap -->


                                                                                <div class="product_title-wrap">
                                                                                    <a href="collections/dresses/products/women-solid-longline-sweater.html" class="product_title">
                                                                                        Women Solid Longline Sweater
                                                                                    </a>

                                                                                </div>
                                                                                <span class="shopify-product-reviews-badge" data-id="581104336907"></span>
                                                                                <div class="product_price">

                                                                                    <span class="money">$49.00</span>



                                                                                </div>


                                                                                <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581104336907" class="addToCartForm product-actions-581104336907">



                                                                                    <input type="hidden" name="id" value="4314255360011" />
                                                                                    <button type="submit" name="add" class="btn btn-primary addToCart add-to-cart-btn">
                                                                                        <span class="addToCartText">Add to cart</span>
                                                                                    </button>




                                                                                </form>


                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>



                                                                <div class="pixxett-tabs-item new-pixxett-tabs-item">
                                                                    <div class="item-inner product-thumb transition">

                                                                        <div data-id="581095030795" class="product-581095030795 product product__product-grid-item product-item item_even step3-2 step4-2">
                                                                            <div class="item-inner">
                                                                                <div class="product_image-wrap item-img">
                                                                                    <div class="pro-img">
                                                                                        <a href="collections/dresses/products/women-solid-biker-jacket.html" class="product-grid-image">
                                                                                            <img src="images/dress/20.jpg" alt="Women Solid Biker Jacket">

                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="box-hover">
                                                                                        <ul class="add-to-links">
                                                                                            <li>

                                                                                                <div class="product-addto-links">

                                                                                                    <a class="btn btnWishlistNoLog btnProduct" href="account/login.html" data-toggle="tooltip" title="Go to wishlist">


                                                                                                    </a>

                                                                                                </div>

                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div><!-- .prod-image-wrap -->


                                                                                <div class="product_title-wrap">
                                                                                    <a href="collections/dresses/products/women-solid-biker-jacket.html" class="product_title">
                                                                                        Women Solid Biker Jacket
                                                                                    </a>

                                                                                </div>
                                                                                <span class="shopify-product-reviews-badge" data-id="581095030795"></span>
                                                                                <div class="product_price">

                                                                                    <span class="money">$29.99</span>



                                                                                </div>


                                                                                <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581095030795" class="addToCartForm product-actions-581095030795">



                                                                                    <input type="hidden" name="id" value="4314240548875" />
                                                                                    <button type="submit" name="add" class="btn btn-primary addToCart add-to-cart-btn">
                                                                                        <span class="addToCartText">Add to cart</span>
                                                                                    </button>




                                                                                </form>


                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>



                                                                <div class="pixxett-tabs-item new-pixxett-tabs-item">
                                                                    <div class="item-inner product-thumb transition">

                                                                        <div data-id="581105025035" class="product-581105025035 product product__product-grid-item product-item item_odd step3-3 step4-3">
                                                                            <div class="item-inner">
                                                                                <div class="product_image-wrap item-img">
                                                                                    <div class="pro-img">
                                                                                        <a href="collections/dresses/products/women-solid-a-line-dress.html" class="product-grid-image">
                                                                                            <img src="images/dress/21.jpg" alt="Women Solid A-Line Dress">

                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="box-hover">
                                                                                        <ul class="add-to-links">
                                                                                            <li>

                                                                                                <div class="product-addto-links">

                                                                                                    <a class="btn btnWishlistNoLog btnProduct" href="account/login.html" data-toggle="tooltip" title="Go to wishlist">


                                                                                                    </a>

                                                                                                </div>










                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div><!-- .prod-image-wrap -->


                                                                                <div class="product_title-wrap">
                                                                                    <a href="collections/dresses/products/women-solid-a-line-dress.html" class="product_title">
                                                                                        Women Solid A-Line Dress
                                                                                    </a>

                                                                                </div>
                                                                                <span class="shopify-product-reviews-badge" data-id="581105025035"></span>
                                                                                <div class="product_price">

                                                                                    <span class="money">$39.99</span>



                                                                                </div>

                                                                                <!-- 
    This is just a regular add product form. 
    You should be able to add any valid input fields to it 
-->

                                                                                <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581105025035" class="addToCartForm product-actions-581105025035">



                                                                                    <input type="hidden" name="id" value="4314256801803" />
                                                                                    <button type="submit" name="add" class="btn btn-primary addToCart add-to-cart-btn">
                                                                                        <span class="addToCartText">Add to cart</span>
                                                                                    </button>




                                                                                </form>


                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>


                                                                <div class="pixxett-tabs-item new-pixxett-tabs-item">
                                                                    <div class="item-inner product-thumb transition">

                                                                        <div data-id="581105025035" class="product-581105025035 product product__product-grid-item product-item item_odd step3-3 step4-3">
                                                                            <div class="item-inner">
                                                                                <div class="product_image-wrap item-img">
                                                                                    <div class="pro-img">
                                                                                        <a href="collections/dresses/products/women-solid-a-line-dress.html" class="product-grid-image">
                                                                                            <img src="images/dress/21.jpg" alt="Women Solid A-Line Dress">

                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="box-hover">
                                                                                        <ul class="add-to-links">
                                                                                            <li>

                                                                                                <div class="product-addto-links">

                                                                                                    <a class="btn btnWishlistNoLog btnProduct" href="account/login.html" data-toggle="tooltip" title="Go to wishlist">


                                                                                                    </a>

                                                                                                </div>










                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div><!-- .prod-image-wrap -->


                                                                                <div class="product_title-wrap">
                                                                                    <a href="collections/dresses/products/women-solid-a-line-dress.html" class="product_title">
                                                                                        Women Solid A-Line Dress
                                                                                    </a>

                                                                                </div>
                                                                                <span class="shopify-product-reviews-badge" data-id="581105025035"></span>
                                                                                <div class="product_price">

                                                                                    <span class="money">$39.99</span>



                                                                                </div>

                                                                                <!-- 
    This is just a regular add product form. 
    You should be able to add any valid input fields to it 
-->

                                                                                <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581105025035" class="addToCartForm product-actions-581105025035">



                                                                                    <input type="hidden" name="id" value="4314256801803" />
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








                                                       

                                                        <div class="pixxett-tabs-items  items-category-10350362635" data-total="14">
                                                            <div class="pixxett-tabs-items-inner pixxett-tabs00- pixxett-tabs01- pixxett-tabs02- pixxett-tabs03- pixxett-tabs04-">



                                                                <div class="pixxett-tabs-item new-pixxett-tabs-item">
                                                                    <div class="item-inner product-thumb transition">










                                                                        <div data-id="581105025035" class="product-581105025035 product product__product-grid-item product-item item_even step3-1 step4-2">
                                                                            <div class="item-inner">
                                                                                <div class="product_image-wrap item-img">
                                                                                    <div class="pro-img">
                                                                                        <a href="collections/tops/products/women-solid-a-line-dress.html" class="product-grid-image">
                                                                                            <img src="images/dress/13.jpg" alt="Women Solid A-Line Dress">

                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="box-hover">
                                                                                        <ul class="add-to-links">
                                                                                            <li>

                                                                                                <div class="product-addto-links">

                                                                                                    <a class="btn btnWishlistNoLog btnProduct" href="account/login.html" data-toggle="tooltip" title="Go to wishlist">


                                                                                                    </a>

                                                                                                </div>










                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div><!-- .prod-image-wrap -->


                                                                                <div class="product_title-wrap">
                                                                                    <a href="collections/tops/products/women-solid-a-line-dress.html" class="product_title">
                                                                                        Women Solid A-Line Dress
                                                                                    </a>

                                                                                </div>
                                                                                <span class="shopify-product-reviews-badge" data-id="581105025035"></span>
                                                                                <div class="product_price">

                                                                                    <span class="money">$39.99</span>



                                                                                </div>

                                                                                <!-- 
    This is just a regular add product form. 
    You should be able to add any valid input fields to it 
-->

                                                                                <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581105025035" class="addToCartForm product-actions-581105025035">



                                                                                    <input type="hidden" name="id" value="4314256801803" />
                                                                                    <button type="submit" name="add" class="btn btn-primary addToCart add-to-cart-btn">
                                                                                        <span class="addToCartText">Add to cart</span>
                                                                                    </button>




                                                                                </form>


                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>



                                                                <div class="pixxett-tabs-item new-pixxett-tabs-item">
                                                                    <div class="item-inner product-thumb transition">










                                                                        <div data-id="581104697355" class="product-581104697355 product product__product-grid-item product-item item_odd step3-2 step4-3">
                                                                            <div class="item-inner">
                                                                                <div class="product_image-wrap item-img">
                                                                                    <div class="pro-img">
                                                                                        <a href="collections/tops/products/printed-off-shoulder-blouson-top.html" class="product-grid-image">
                                                                                            <img src="images/dress/14.jpg" alt="Printed Off-Shoulder Blouson Top">

                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="box-hover">
                                                                                        <ul class="add-to-links">
                                                                                            <li>

                                                                                                <div class="product-addto-links">

                                                                                                    <a class="btn btnWishlistNoLog btnProduct" href="account/login.html" data-toggle="tooltip" title="Go to wishlist">


                                                                                                    </a>

                                                                                                </div>










                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div><!-- .prod-image-wrap -->


                                                                                <div class="product_title-wrap">
                                                                                    <a href="collections/tops/products/printed-off-shoulder-blouson-top.html" class="product_title">
                                                                                        Printed Off-Shoulder Blouson Top
                                                                                    </a>

                                                                                </div>
                                                                                <span class="shopify-product-reviews-badge" data-id="581104697355"></span>
                                                                                <div class="product_price">

                                                                                    <span class="money">$59.99</span>



                                                                                </div>

                                                                                <!-- 
    This is just a regular add product form. 
    You should be able to add any valid input fields to it 
-->

                                                                                <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581104697355" class="addToCartForm product-actions-581104697355">


                                                                                    <input class="btn btn-primary addToCart add-to-cart-btn" type="button" onclick="window.location.href='products/printed-off-shoulder-blouson-top.html'" value="Select options" />



                                                                                </form>


                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>



                                                                <div class="pixxett-tabs-item new-pixxett-tabs-item">
                                                                    <div class="item-inner product-thumb transition">










                                                                        <div data-id="581104107531" class="product-581104107531 product product__product-grid-item product-item item_even step3-3 step4-4">
                                                                            <div class="item-inner">
                                                                                <div class="product_image-wrap item-img">
                                                                                    <div class="pro-img">
                                                                                        <a href="collections/tops/products/printed-round-neck-t-shirt.html" class="product-grid-image">
                                                                                            <img src="images/dress/15.jpg" alt="Printed Round Neck T-shirt">

                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="box-hover">
                                                                                        <ul class="add-to-links">
                                                                                            <li>

                                                                                                <div class="product-addto-links">

                                                                                                    <a class="btn btnWishlistNoLog btnProduct" href="account/login.html" data-toggle="tooltip" title="Go to wishlist">


                                                                                                    </a>

                                                                                                </div>










                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div><!-- .prod-image-wrap -->


                                                                                <div class="product_title-wrap">
                                                                                    <a href="collections/tops/products/printed-round-neck-t-shirt.html" class="product_title">
                                                                                        Printed Round Neck T-shirt
                                                                                    </a>

                                                                                </div>
                                                                                <span class="shopify-product-reviews-badge" data-id="581104107531"></span>
                                                                                <div class="product_price">

                                                                                    <span class="money">$29.99</span>



                                                                                </div>

                                                                                <!-- 
    This is just a regular add product form. 
    You should be able to add any valid input fields to it 
-->

                                                                                <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581104107531" class="addToCartForm product-actions-581104107531">



                                                                                    <input type="hidden" name="id" value="4314254737419" />
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
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </section>

                                <script>
                                    //<![CDATA[
jQuery(document).ready(function ($) {
	(function (element) {
		var $element = $(element),
			$tab = $('.pixxett-tabs-tab', $element),
			$tab_label = $('.pixxett-tabs-tab-label', $tab),
			$tabs = $('.pixxett-tabs-tabs', $element),
			$items_content = $('.pixxett-tabs-items', $element),
			$items_inner = $('.pixxett-tabs-items-inner', $items_content),
			$items_first_active = $('.pixxett-tabs-items-selected', $element),
			$select_box = $('.pixxett-tabs-selectbox', $element),
			$tab_label_select = $('.pixxett-tabs-tab-selected', $element),
			type_show = '';
			
		enableSelectBoxes();
		function enableSelectBoxes() {
			$tab_wrap = $('.pixxett-tabs-tabs-wrap', $element),
				$tab_label_select.html($('.pixxett-tabs-tab', $element).filter('.tab-sel').children('.pixxett-tabs-tab-label').html());
	
		}

		$('span.pixxett-tabs-tab-selected, span.pixxett-tabs-tab-arrow', $element).click(function () {
			if ($('.pixxett-tabs-tabs', $element).hasClass('pixxett-tabs-open')) {
				$('.pixxett-tabs-tabs', $element).removeClass('pixxett-tabs-open');
			} else {
				$('.pixxett-tabs-tabs', $element).addClass('pixxett-tabs-open');
			}
		});



		$tab.on('click.pixxett-tabs-tab', function () {
			var $this = $(this);
			if ($this.hasClass('tab-sel')) return false;
			if ($this.parents('.pixxett-tabs-tabs').hasClass('pixxett-tabs-open')) {
				$this.parents('.pixxett-tabs-tabs').removeClass('pixxett-tabs-open');
			}
			$tab.removeClass('tab-sel');
			$this.addClass('tab-sel');
			var items_active = $this.attr('data-active-content');
			var _items_active = $(items_active,$element);
			$items_content.removeClass('pixxett-tabs-items-selected');
			_items_active.addClass('pixxett-tabs-items-selected');
			$tab_label_select.html($tab.filter('.tab-sel').children('.pixxett-tabs-tab-label').html());
			var $loading = $('.pixxett-tabs-loading', _items_active);
			var loaded = _items_active.hasClass('pixxett-tabs-items-loaded');
			type_show =$tabs.parents('.pixxett-tabs-tabs-container').attr('data-type_show');
			if (!loaded && !_items_active.hasClass('pixxett-tabs-process')) {
				_items_active.addClass('pixxett-tabs-process');
				$loading.show();				
                _items_active.addClass('pixxett-tabs-items-loaded').removeClass('pixxett-tabs-process');
                $loading.remove();             
			}
        
		});
    })('#pixxett_listing_tabs_1504872997843');
});
//]]>
</script>




                            </div>
                            <div id="shopify-section-1505112576083" class="shopify-section">







                                <script>
                                    //<![CDATA[
jQuery(document).ready(function(cash) {
jQuery("#bestsell-slider .slider-items").owlCarousel({
items: 3, //10 items above 1000px browser width
itemsDesktop: [1024, 3], //4 items between 1024px and 901px
itemsDesktopSmall: [900, 2], // 4 items betweem 900px and 601px
itemsTablet: [640, 2], //3 items between 600 and 0;
itemsMobile: [375, 1],
navigation : true,
navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
slideSpeed : 500,
pagination : false,
autoPlay: false
});
}); 
//]]>
  
  //countdown js filter
  jQuery('.timer-grid').each(function() {
    var countTime = jQuery(this).attr('data-time');
    jQuery(this).countdown(countTime, function(event) {
        jQuery(this).html('<div class="day box-time-date"><span class="number">' + event.strftime('%D') + ' </span>days</div> <div class="hour box-time-date"><span class="number">' + event.strftime('%H') + '</span>Hrs</div><div class="min box-time-date"><span class="number">' + event.strftime('%M') + '</span> MINS</div> <div class="sec box-time-date"><span class="number">' + event.strftime('%S') + ' </span>SEC</div>');
    });
});
</script>









                            </div>
                            <div id="shopify-section-1505124121744" class="shopify-section">







                                <script>
                                    //<![CDATA[
  jQuery(document).ready(function(cash) {
  jQuery("#featured-slider .slider-items").owlCarousel({
  items: 3, //10 items above 1000px browser width
  itemsDesktop: [1024, 3], //4 items between 1024px and 901px
  itemsDesktopSmall: [900, 2], // 4 items betweem 900px and 601px
  itemsTablet: [640, 2], //3 items between 600 and 0;
  itemsMobile: [375, 1],
  navigation : true,
  navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
  slideSpeed : 500,
  pagination : false,
  autoPlay: false
  });
  }); 
  //]]>
</script>








                            </div><!-- END content_for_index -->
                        </div>
                    </div>



                    <div class="row section2">
                        <div class="col-lg-12 col-sm-12 main-home">
                            <!-- BEGIN content_for_index -->
                            <div id="shopify-section-1504872997843" class="shopify-section home-section clearfix">
                                <link href="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/animateee4b.css?6925323883398055779" rel="stylesheet" type="text/css" media="all" />
                                <section class="widget-listingtab" style="margin-right:50px;">
                                    <div class="">

                                        <div class="col-lg-12 col-sm-12 module tab-slider">



                                            <div id="pixxett_listing_tabs_1504872997843" class="pixxett-listing-tabs first-load module products-listing grid">
                                                <div class="pixxett-tabs-wrap">

                                                    <div class="pixxett-tabs-items-container product-layout">


                                                        <div class="pixxett-tabs-items  pixxett-tabs-items-selected pixxett-tabs-items-loaded items-category-10350428171" data-total="37">
                                                            <div class="pixxett-tabs-items-inner pixxett-tabs00- pixxett-tabs01- pixxett-tabs02- pixxett-tabs03- pixxett-tabs04-">

                                                                <div class="pixxett-tabs-item new-pixxett-tabs-item">
                                                                    <div class="item-inner product-thumb transition">

                                                                        <div data-id="581104336907" class="product-581104336907 product product__product-grid-item product-item item_odd step3-1 step4-1">
                                                                            <div class="item-inner">
                                                                                <div class="product_image-wrap item-img">
                                                                                    <div class="pro-img">
                                                                                        <a href="collections/dresses/products/women-solid-longline-sweater.html" class="product-grid-image">
                                                                                            <img src="images/dress/19.jpg" alt="Women Solid Longline Sweater">

                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="box-hover">
                                                                                        <ul class="add-to-links">
                                                                                            <li>

                                                                                                <div class="product-addto-links">

                                                                                                    <a class="btn btnWishlistNoLog btnProduct" href="account/login.html" data-toggle="tooltip" title="Go to wishlist">


                                                                                                    </a>

                                                                                                </div>

                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div><!-- .prod-image-wrap -->


                                                                                <div class="product_title-wrap">
                                                                                    <a href="collections/dresses/products/women-solid-longline-sweater.html" class="product_title">
                                                                                        Women Solid Longline Sweater
                                                                                    </a>

                                                                                </div>
                                                                                <span class="shopify-product-reviews-badge" data-id="581104336907"></span>
                                                                                <div class="product_price">

                                                                                    <span class="money">$49.00</span>



                                                                                </div>


                                                                                <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581104336907" class="addToCartForm product-actions-581104336907">



                                                                                    <input type="hidden" name="id" value="4314255360011" />
                                                                                    <button type="submit" name="add" class="btn btn-primary addToCart add-to-cart-btn">
                                                                                        <span class="addToCartText">Add to cart</span>
                                                                                    </button>




                                                                                </form>


                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>



                                                                <div class="pixxett-tabs-item new-pixxett-tabs-item">
                                                                    <div class="item-inner product-thumb transition">

                                                                        <div data-id="581095030795" class="product-581095030795 product product__product-grid-item product-item item_even step3-2 step4-2">
                                                                            <div class="item-inner">
                                                                                <div class="product_image-wrap item-img">
                                                                                    <div class="pro-img">
                                                                                        <a href="collections/dresses/products/women-solid-biker-jacket.html" class="product-grid-image">
                                                                                            <img src="images/dress/20.jpg" alt="Women Solid Biker Jacket">

                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="box-hover">
                                                                                        <ul class="add-to-links">
                                                                                            <li>

                                                                                                <div class="product-addto-links">

                                                                                                    <a class="btn btnWishlistNoLog btnProduct" href="account/login.html" data-toggle="tooltip" title="Go to wishlist">


                                                                                                    </a>

                                                                                                </div>

                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div><!-- .prod-image-wrap -->


                                                                                <div class="product_title-wrap">
                                                                                    <a href="collections/dresses/products/women-solid-biker-jacket.html" class="product_title">
                                                                                        Women Solid Biker Jacket
                                                                                    </a>

                                                                                </div>
                                                                                <span class="shopify-product-reviews-badge" data-id="581095030795"></span>
                                                                                <div class="product_price">

                                                                                    <span class="money">$29.99</span>



                                                                                </div>


                                                                                <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581095030795" class="addToCartForm product-actions-581095030795">



                                                                                    <input type="hidden" name="id" value="4314240548875" />
                                                                                    <button type="submit" name="add" class="btn btn-primary addToCart add-to-cart-btn">
                                                                                        <span class="addToCartText">Add to cart</span>
                                                                                    </button>




                                                                                </form>


                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>



                                                                <div class="pixxett-tabs-item new-pixxett-tabs-item">
                                                                    <div class="item-inner product-thumb transition">

                                                                        <div data-id="581105025035" class="product-581105025035 product product__product-grid-item product-item item_odd step3-3 step4-3">
                                                                            <div class="item-inner">
                                                                                <div class="product_image-wrap item-img">
                                                                                    <div class="pro-img">
                                                                                        <a href="collections/dresses/products/women-solid-a-line-dress.html" class="product-grid-image">
                                                                                            <img src="images/dress/21.jpg" alt="Women Solid A-Line Dress">

                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="box-hover">
                                                                                        <ul class="add-to-links">
                                                                                            <li>

                                                                                                <div class="product-addto-links">

                                                                                                    <a class="btn btnWishlistNoLog btnProduct" href="account/login.html" data-toggle="tooltip" title="Go to wishlist">


                                                                                                    </a>

                                                                                                </div>










                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div><!-- .prod-image-wrap -->


                                                                                <div class="product_title-wrap">
                                                                                    <a href="collections/dresses/products/women-solid-a-line-dress.html" class="product_title">
                                                                                        Women Solid A-Line Dress
                                                                                    </a>

                                                                                </div>
                                                                                <span class="shopify-product-reviews-badge" data-id="581105025035"></span>
                                                                                <div class="product_price">

                                                                                    <span class="money">$39.99</span>



                                                                                </div>

                                                                                <!-- 
    This is just a regular add product form. 
    You should be able to add any valid input fields to it 
-->

                                                                                <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581105025035" class="addToCartForm product-actions-581105025035">



                                                                                    <input type="hidden" name="id" value="4314256801803" />
                                                                                    <button type="submit" name="add" class="btn btn-primary addToCart add-to-cart-btn">
                                                                                        <span class="addToCartText">Add to cart</span>
                                                                                    </button>




                                                                                </form>


                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>


                                                                <div class="pixxett-tabs-item new-pixxett-tabs-item">
                                                                    <div class="item-inner product-thumb transition">

                                                                        <div data-id="581105025035" class="product-581105025035 product product__product-grid-item product-item item_odd step3-3 step4-3">
                                                                            <div class="item-inner">
                                                                                <div class="product_image-wrap item-img">
                                                                                    <div class="pro-img">
                                                                                        <a href="collections/dresses/products/women-solid-a-line-dress.html" class="product-grid-image">
                                                                                            <img src="images/dress/21.jpg" alt="Women Solid A-Line Dress">

                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="box-hover">
                                                                                        <ul class="add-to-links">
                                                                                            <li>

                                                                                                <div class="product-addto-links">

                                                                                                    <a class="btn btnWishlistNoLog btnProduct" href="account/login.html" data-toggle="tooltip" title="Go to wishlist">


                                                                                                    </a>

                                                                                                </div>










                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div><!-- .prod-image-wrap -->


                                                                                <div class="product_title-wrap">
                                                                                    <a href="collections/dresses/products/women-solid-a-line-dress.html" class="product_title">
                                                                                        Women Solid A-Line Dress
                                                                                    </a>

                                                                                </div>
                                                                                <span class="shopify-product-reviews-badge" data-id="581105025035"></span>
                                                                                <div class="product_price">

                                                                                    <span class="money">$39.99</span>



                                                                                </div>

                                                                                <!-- 
    This is just a regular add product form. 
    You should be able to add any valid input fields to it 
-->

                                                                                <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581105025035" class="addToCartForm product-actions-581105025035">



                                                                                    <input type="hidden" name="id" value="4314256801803" />
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
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </section>

                                <script>
                                    //<![CDATA[
jQuery(document).ready(function ($) {
	(function (element) {
		var $element = $(element),
			$tab = $('.pixxett-tabs-tab', $element),
			$tab_label = $('.pixxett-tabs-tab-label', $tab),
			$tabs = $('.pixxett-tabs-tabs', $element),
			$items_content = $('.pixxett-tabs-items', $element),
			$items_inner = $('.pixxett-tabs-items-inner', $items_content),
			$items_first_active = $('.pixxett-tabs-items-selected', $element),
			$select_box = $('.pixxett-tabs-selectbox', $element),
			$tab_label_select = $('.pixxett-tabs-tab-selected', $element),
			type_show = '';
			
		enableSelectBoxes();
		function enableSelectBoxes() {
			$tab_wrap = $('.pixxett-tabs-tabs-wrap', $element),
				$tab_label_select.html($('.pixxett-tabs-tab', $element).filter('.tab-sel').children('.pixxett-tabs-tab-label').html());
	
		}

		$('span.pixxett-tabs-tab-selected, span.pixxett-tabs-tab-arrow', $element).click(function () {
			if ($('.pixxett-tabs-tabs', $element).hasClass('pixxett-tabs-open')) {
				$('.pixxett-tabs-tabs', $element).removeClass('pixxett-tabs-open');
			} else {
				$('.pixxett-tabs-tabs', $element).addClass('pixxett-tabs-open');
			}
		});



		$tab.on('click.pixxett-tabs-tab', function () {
			var $this = $(this);
			if ($this.hasClass('tab-sel')) return false;
			if ($this.parents('.pixxett-tabs-tabs').hasClass('pixxett-tabs-open')) {
				$this.parents('.pixxett-tabs-tabs').removeClass('pixxett-tabs-open');
			}
			$tab.removeClass('tab-sel');
			$this.addClass('tab-sel');
			var items_active = $this.attr('data-active-content');
			var _items_active = $(items_active,$element);
			$items_content.removeClass('pixxett-tabs-items-selected');
			_items_active.addClass('pixxett-tabs-items-selected');
			$tab_label_select.html($tab.filter('.tab-sel').children('.pixxett-tabs-tab-label').html());
			var $loading = $('.pixxett-tabs-loading', _items_active);
			var loaded = _items_active.hasClass('pixxett-tabs-items-loaded');
			type_show =$tabs.parents('.pixxett-tabs-tabs-container').attr('data-type_show');
			if (!loaded && !_items_active.hasClass('pixxett-tabs-process')) {
				_items_active.addClass('pixxett-tabs-process');
				$loading.show();				
                _items_active.addClass('pixxett-tabs-items-loaded').removeClass('pixxett-tabs-process');
                $loading.remove();             
			}
        
		});
    })('#pixxett_listing_tabs_1504872997843');
});
//]]>
</script>




                            </div>
                            <div id="shopify-section-1505112576083" class="shopify-section">






                                <script>
                                    //<![CDATA[
jQuery(document).ready(function(cash) {
jQuery("#bestsell-slider .slider-items").owlCarousel({
items: 3, //10 items above 1000px browser width
itemsDesktop: [1024, 3], //4 items between 1024px and 901px
itemsDesktopSmall: [900, 2], // 4 items betweem 900px and 601px
itemsTablet: [640, 2], //3 items between 600 and 0;
itemsMobile: [375, 1],
navigation : true,
navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
slideSpeed : 500,
pagination : false,
autoPlay: false
});
}); 
//]]>
  
  //countdown js filter
  jQuery('.timer-grid').each(function() {
    var countTime = jQuery(this).attr('data-time');
    jQuery(this).countdown(countTime, function(event) {
        jQuery(this).html('<div class="day box-time-date"><span class="number">' + event.strftime('%D') + ' </span>days</div> <div class="hour box-time-date"><span class="number">' + event.strftime('%H') + '</span>Hrs</div><div class="min box-time-date"><span class="number">' + event.strftime('%M') + '</span> MINS</div> <div class="sec box-time-date"><span class="number">' + event.strftime('%S') + ' </span>SEC</div>');
    });
});
</script>









                            </div>
                            <div id="shopify-section-1505124121744" class="shopify-section">





                                <script>
                                    //<![CDATA[
  jQuery(document).ready(function(cash) {
  jQuery("#featured-slider .slider-items").owlCarousel({
  items: 3, //10 items above 1000px browser width
  itemsDesktop: [1024, 3], //4 items between 1024px and 901px
  itemsDesktopSmall: [900, 2], // 4 items betweem 900px and 601px
  itemsTablet: [640, 2], //3 items between 600 and 0;
  itemsMobile: [375, 1],
  navigation : true,
  navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
  slideSpeed : 500,
  pagination : false,
  autoPlay: false
  });
  }); 
  //]]>
</script>








                            </div><!-- END content_for_index -->
                        </div>
                    </div>

                    <div class="row section3">
                        <div class="col-lg-12 col-sm-12 main-home">
                            <!-- BEGIN content_for_index -->
                            <div id="shopify-section-1504872997843" class="shopify-section home-section clearfix">
                                <link href="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/animateee4b.css?6925323883398055779" rel="stylesheet" type="text/css" media="all" />
                                <section class="widget-listingtab" style="margin-right:50px;">
                                    <div class="">

                                        <div class="col-lg-12 col-sm-12 module tab-slider">




                                            <div id="pixxett_listing_tabs_1504872997843" class="pixxett-listing-tabs first-load module products-listing grid">
                                                <div class="pixxett-tabs-wrap">

                                                    <div class="pixxett-tabs-items-container product-layout">


                                                        <div class="pixxett-tabs-items  pixxett-tabs-items-selected pixxett-tabs-items-loaded items-category-10350428171" data-total="37">
                                                            <div class="pixxett-tabs-items-inner pixxett-tabs00- pixxett-tabs01- pixxett-tabs02- pixxett-tabs03- pixxett-tabs04-">

                                                                <div class="pixxett-tabs-item new-pixxett-tabs-item">
                                                                    <div class="item-inner product-thumb transition">

                                                                        <div data-id="581104336907" class="product-581104336907 product product__product-grid-item product-item item_odd step3-1 step4-1">
                                                                            <div class="item-inner">
                                                                                <div class="product_image-wrap item-img">
                                                                                    <div class="pro-img">
                                                                                        <a href="collections/dresses/products/women-solid-longline-sweater.html" class="product-grid-image">
                                                                                            <img src="images/dress/19.jpg" alt="Women Solid Longline Sweater">

                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="box-hover">
                                                                                        <ul class="add-to-links">
                                                                                            <li>

                                                                                                <div class="product-addto-links">

                                                                                                    <a class="btn btnWishlistNoLog btnProduct" href="account/login.html" data-toggle="tooltip" title="Go to wishlist">


                                                                                                    </a>

                                                                                                </div>

                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div><!-- .prod-image-wrap -->


                                                                                <div class="product_title-wrap">
                                                                                    <a href="collections/dresses/products/women-solid-longline-sweater.html" class="product_title">
                                                                                        Women Solid Longline Sweater
                                                                                    </a>

                                                                                </div>
                                                                                <span class="shopify-product-reviews-badge" data-id="581104336907"></span>
                                                                                <div class="product_price">

                                                                                    <span class="money">$49.00</span>



                                                                                </div>


                                                                                <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581104336907" class="addToCartForm product-actions-581104336907">



                                                                                    <input type="hidden" name="id" value="4314255360011" />
                                                                                    <button type="submit" name="add" class="btn btn-primary addToCart add-to-cart-btn">
                                                                                        <span class="addToCartText">Add to cart</span>
                                                                                    </button>




                                                                                </form>


                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>



                                                                <div class="pixxett-tabs-item new-pixxett-tabs-item">
                                                                    <div class="item-inner product-thumb transition">

                                                                        <div data-id="581095030795" class="product-581095030795 product product__product-grid-item product-item item_even step3-2 step4-2">
                                                                            <div class="item-inner">
                                                                                <div class="product_image-wrap item-img">
                                                                                    <div class="pro-img">
                                                                                        <a href="collections/dresses/products/women-solid-biker-jacket.html" class="product-grid-image">
                                                                                            <img src="images/dress/20.jpg" alt="Women Solid Biker Jacket">

                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="box-hover">
                                                                                        <ul class="add-to-links">
                                                                                            <li>

                                                                                                <div class="product-addto-links">

                                                                                                    <a class="btn btnWishlistNoLog btnProduct" href="account/login.html" data-toggle="tooltip" title="Go to wishlist">


                                                                                                    </a>

                                                                                                </div>

                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div><!-- .prod-image-wrap -->


                                                                                <div class="product_title-wrap">
                                                                                    <a href="collections/dresses/products/women-solid-biker-jacket.html" class="product_title">
                                                                                        Women Solid Biker Jacket
                                                                                    </a>

                                                                                </div>
                                                                                <span class="shopify-product-reviews-badge" data-id="581095030795"></span>
                                                                                <div class="product_price">

                                                                                    <span class="money">$29.99</span>



                                                                                </div>


                                                                                <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581095030795" class="addToCartForm product-actions-581095030795">



                                                                                    <input type="hidden" name="id" value="4314240548875" />
                                                                                    <button type="submit" name="add" class="btn btn-primary addToCart add-to-cart-btn">
                                                                                        <span class="addToCartText">Add to cart</span>
                                                                                    </button>




                                                                                </form>


                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>



                                                                <div class="pixxett-tabs-item new-pixxett-tabs-item">
                                                                    <div class="item-inner product-thumb transition">

                                                                        <div data-id="581105025035" class="product-581105025035 product product__product-grid-item product-item item_odd step3-3 step4-3">
                                                                            <div class="item-inner">
                                                                                <div class="product_image-wrap item-img">
                                                                                    <div class="pro-img">
                                                                                        <a href="collections/dresses/products/women-solid-a-line-dress.html" class="product-grid-image">
                                                                                            <img src="images/dress/21.jpg" alt="Women Solid A-Line Dress">

                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="box-hover">
                                                                                        <ul class="add-to-links">
                                                                                            <li>

                                                                                                <div class="product-addto-links">

                                                                                                    <a class="btn btnWishlistNoLog btnProduct" href="account/login.html" data-toggle="tooltip" title="Go to wishlist">


                                                                                                    </a>

                                                                                                </div>










                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div><!-- .prod-image-wrap -->


                                                                                <div class="product_title-wrap">
                                                                                    <a href="collections/dresses/products/women-solid-a-line-dress.html" class="product_title">
                                                                                        Women Solid A-Line Dress
                                                                                    </a>

                                                                                </div>
                                                                                <span class="shopify-product-reviews-badge" data-id="581105025035"></span>
                                                                                <div class="product_price">

                                                                                    <span class="money">$39.99</span>



                                                                                </div>

                                                                                <!-- 
    This is just a regular add product form. 
    You should be able to add any valid input fields to it 
-->

                                                                                <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581105025035" class="addToCartForm product-actions-581105025035">



                                                                                    <input type="hidden" name="id" value="4314256801803" />
                                                                                    <button type="submit" name="add" class="btn btn-primary addToCart add-to-cart-btn">
                                                                                        <span class="addToCartText">Add to cart</span>
                                                                                    </button>




                                                                                </form>


                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>


                                                                <div class="pixxett-tabs-item new-pixxett-tabs-item">
                                                                    <div class="item-inner product-thumb transition">

                                                                        <div data-id="581105025035" class="product-581105025035 product product__product-grid-item product-item item_odd step3-3 step4-3">
                                                                            <div class="item-inner">
                                                                                <div class="product_image-wrap item-img">
                                                                                    <div class="pro-img">
                                                                                        <a href="collections/dresses/products/women-solid-a-line-dress.html" class="product-grid-image">
                                                                                            <img src="images/dress/21.jpg" alt="Women Solid A-Line Dress">

                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="box-hover">
                                                                                        <ul class="add-to-links">
                                                                                            <li>

                                                                                                <div class="product-addto-links">

                                                                                                    <a class="btn btnWishlistNoLog btnProduct" href="account/login.html" data-toggle="tooltip" title="Go to wishlist">


                                                                                                    </a>

                                                                                                </div>










                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div><!-- .prod-image-wrap -->


                                                                                <div class="product_title-wrap">
                                                                                    <a href="collections/dresses/products/women-solid-a-line-dress.html" class="product_title">
                                                                                        Women Solid A-Line Dress
                                                                                    </a>

                                                                                </div>
                                                                                <span class="shopify-product-reviews-badge" data-id="581105025035"></span>
                                                                                <div class="product_price">

                                                                                    <span class="money">$39.99</span>



                                                                                </div>

                                                                                <!-- 
    This is just a regular add product form. 
    You should be able to add any valid input fields to it 
-->

                                                                                <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581105025035" class="addToCartForm product-actions-581105025035">



                                                                                    <input type="hidden" name="id" value="4314256801803" />
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


                                        </div>
                                    </div>
                                        </div>
                                    </div>
                                </section>

                                <script>
                                    //<![CDATA[
jQuery(document).ready(function ($) {
	(function (element) {
		var $element = $(element),
			$tab = $('.pixxett-tabs-tab', $element),
			$tab_label = $('.pixxett-tabs-tab-label', $tab),
			$tabs = $('.pixxett-tabs-tabs', $element),
			$items_content = $('.pixxett-tabs-items', $element),
			$items_inner = $('.pixxett-tabs-items-inner', $items_content),
			$items_first_active = $('.pixxett-tabs-items-selected', $element),
			$select_box = $('.pixxett-tabs-selectbox', $element),
			$tab_label_select = $('.pixxett-tabs-tab-selected', $element),
			type_show = '';
			
		enableSelectBoxes();
		function enableSelectBoxes() {
			$tab_wrap = $('.pixxett-tabs-tabs-wrap', $element),
				$tab_label_select.html($('.pixxett-tabs-tab', $element).filter('.tab-sel').children('.pixxett-tabs-tab-label').html());
	
		}

		$('span.pixxett-tabs-tab-selected, span.pixxett-tabs-tab-arrow', $element).click(function () {
			if ($('.pixxett-tabs-tabs', $element).hasClass('pixxett-tabs-open')) {
				$('.pixxett-tabs-tabs', $element).removeClass('pixxett-tabs-open');
			} else {
				$('.pixxett-tabs-tabs', $element).addClass('pixxett-tabs-open');
			}
		});



		$tab.on('click.pixxett-tabs-tab', function () {
			var $this = $(this);
			if ($this.hasClass('tab-sel')) return false;
			if ($this.parents('.pixxett-tabs-tabs').hasClass('pixxett-tabs-open')) {
				$this.parents('.pixxett-tabs-tabs').removeClass('pixxett-tabs-open');
			}
			$tab.removeClass('tab-sel');
			$this.addClass('tab-sel');
			var items_active = $this.attr('data-active-content');
			var _items_active = $(items_active,$element);
			$items_content.removeClass('pixxett-tabs-items-selected');
			_items_active.addClass('pixxett-tabs-items-selected');
			$tab_label_select.html($tab.filter('.tab-sel').children('.pixxett-tabs-tab-label').html());
			var $loading = $('.pixxett-tabs-loading', _items_active);
			var loaded = _items_active.hasClass('pixxett-tabs-items-loaded');
			type_show =$tabs.parents('.pixxett-tabs-tabs-container').attr('data-type_show');
			if (!loaded && !_items_active.hasClass('pixxett-tabs-process')) {
				_items_active.addClass('pixxett-tabs-process');
				$loading.show();				
                _items_active.addClass('pixxett-tabs-items-loaded').removeClass('pixxett-tabs-process');
                $loading.remove();             
			}
        
		});
    })('#pixxett_listing_tabs_1504872997843');
});
//]]>
</script>




                            </div>
                            <div id="shopify-section-1505112576083" class="shopify-section">







                                <script>
                                    //<![CDATA[
jQuery(document).ready(function(cash) {
jQuery("#bestsell-slider .slider-items").owlCarousel({
items: 3, //10 items above 1000px browser width
itemsDesktop: [1024, 3], //4 items between 1024px and 901px
itemsDesktopSmall: [900, 2], // 4 items betweem 900px and 601px
itemsTablet: [640, 2], //3 items between 600 and 0;
itemsMobile: [375, 1],
navigation : true,
navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
slideSpeed : 500,
pagination : false,
autoPlay: false
});
}); 
//]]>
  
  //countdown js filter
  jQuery('.timer-grid').each(function() {
    var countTime = jQuery(this).attr('data-time');
    jQuery(this).countdown(countTime, function(event) {
        jQuery(this).html('<div class="day box-time-date"><span class="number">' + event.strftime('%D') + ' </span>days</div> <div class="hour box-time-date"><span class="number">' + event.strftime('%H') + '</span>Hrs</div><div class="min box-time-date"><span class="number">' + event.strftime('%M') + '</span> MINS</div> <div class="sec box-time-date"><span class="number">' + event.strftime('%S') + ' </span>SEC</div>');
    });
});
</script>









                            </div>
                            <div id="shopify-section-1505124121744" class="shopify-section">







                                <script>
                                    //<![CDATA[
  jQuery(document).ready(function(cash) {
  jQuery("#featured-slider .slider-items").owlCarousel({
  items: 3, //10 items above 1000px browser width
  itemsDesktop: [1024, 3], //4 items between 1024px and 901px
  itemsDesktopSmall: [900, 2], // 4 items betweem 900px and 601px
  itemsTablet: [640, 2], //3 items between 600 and 0;
  itemsMobile: [375, 1],
  navigation : true,
  navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
  slideSpeed : 500,
  pagination : false,
  autoPlay: false
  });
  }); 
  //]]>
</script>








                            </div><!-- END content_for_index -->
                        </div>
                    </div>





                </div>
            </div>


        </div>
    </div>
    
    <div class="row bnn-grid">
        <div class="">
        <div class="col-md-12">
 <div class="grid">
     <h2>View More In Featured Dresses & Suit Sets</h2>
  <figure class="effect-milo">
	<img src="../Vruddhi2/images/home_banner.jpg" alt="img11"/>
	  <figcaption>
		<h2>Our Store</h2>
          <p>Join us at our Flagship Store in Khar West, Mumbai and Craftsvilla stores in your city to experience handmade fashion like never before!</p>
		
		
		
	  </figcaption>			
	</figure>
</div>
        </div>
        </div>
        </div>
    
    
  
    <div id="main_content" class="col-main col-sm-12 col-sm-push-3-">

            <div class="index-scope">


                <div class="">
                    <div class="row section1">
                        <div class="col-lg-12 col-sm-12 main-home">
                            <!-- BEGIN content_for_index -->
                            <div id="shopify-section-1504872997843" class="shopify-section home-section clearfix">
                                <link href="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/animateee4b.css?6925323883398055779" rel="stylesheet" type="text/css" media="all" />
                                <section class="widget-listingtab" style="margin-right:50px;">
                                    <div class="">

                                        <div class="col-lg-12 col-sm-12 module tab-slider" >

                                            <h3>Exclusive Handcrafted Kashmiri Jewellery</h3>
                                          
                                            <div class="divider2">&nbsp;</div>


                                            <div id="pixxett_listing_tabs_1504872997843" class="pixxett-listing-tabs first-load module products-listing grid">
                                                <div class="pixxett-tabs-wrap">

                                                    <div class="pixxett-tabs-items-container product-layout">


                                                        <div class="pixxett-tabs-items  pixxett-tabs-items-selected pixxett-tabs-items-loaded items-category-10350428171" data-total="37">
                                                            <div class="pixxett-tabs-items-inner pixxett-tabs00- pixxett-tabs01- pixxett-tabs02- pixxett-tabs03- pixxett-tabs04-">

                                                                <div class="pixxett-tabs-item new-pixxett-tabs-item">
                                                                    <div class="item-inner product-thumb transition">

                                                                        <div data-id="581104336907" class="product-581104336907 product product__product-grid-item product-item item_odd step3-1 step4-1">
                                                                            <div class="item-inner">
                                                                                <div class="product_image-wrap item-img">
                                                                                    <div class="pro-img">
                                                                                        <a href="collections/dresses/products/women-solid-longline-sweater.html" class="product-grid-image">
                                                                                            <img src="images/jewellery.jpg" alt="Women Solid Longline Sweater" >

                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="box-hover">
                                                                                        <ul class="add-to-links">
                                                                                            <li>

                                                                                                <div class="product-addto-links">

                                                                                                    <a class="btn btnWishlistNoLog btnProduct" href="account/login.html" data-toggle="tooltip" title="Go to wishlist">


                                                                                                    </a>

                                                                                                </div>

                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div><!-- .prod-image-wrap -->


                                                                                <div class="product_title-wrap">
                                                                                    <a href="collections/dresses/products/women-solid-longline-sweater.html" class="product_title">
                                                                                        Women Solid Longline Sweater
                                                                                    </a>

                                                                                </div>
                                                                                <span class="shopify-product-reviews-badge" data-id="581104336907"></span>
                                                                                <div class="product_price">

                                                                                    <span class="money">$49.00</span>



                                                                                </div>


                                                                                <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581104336907" class="addToCartForm product-actions-581104336907">



                                                                                    <input type="hidden" name="id" value="4314255360011" />
                                                                                    <button type="submit" name="add" class="btn btn-primary addToCart add-to-cart-btn">
                                                                                        <span class="addToCartText">Add to cart</span>
                                                                                    </button>




                                                                                </form>


                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>



                                                                <div class="pixxett-tabs-item new-pixxett-tabs-item">
                                                                    <div class="item-inner product-thumb transition">

                                                                        <div data-id="581095030795" class="product-581095030795 product product__product-grid-item product-item item_even step3-2 step4-2">
                                                                            <div class="item-inner">
                                                                                <div class="product_image-wrap item-img">
                                                                                    <div class="pro-img">
                                                                                        <a href="collections/dresses/products/women-solid-biker-jacket.html" class="product-grid-image">
                                                                                            <img src="images/jewellery2.jpg" alt="Women Solid Biker Jacket">

                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="box-hover">
                                                                                        <ul class="add-to-links">
                                                                                            <li>

                                                                                                <div class="product-addto-links">

                                                                                                    <a class="btn btnWishlistNoLog btnProduct" href="account/login.html" data-toggle="tooltip" title="Go to wishlist">


                                                                                                    </a>

                                                                                                </div>

                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div><!-- .prod-image-wrap -->


                                                                                <div class="product_title-wrap">
                                                                                    <a href="collections/dresses/products/women-solid-biker-jacket.html" class="product_title">
                                                                                        Women Solid Biker Jacket
                                                                                    </a>

                                                                                </div>
                                                                                <span class="shopify-product-reviews-badge" data-id="581095030795"></span>
                                                                                <div class="product_price">

                                                                                    <span class="money">$29.99</span>



                                                                                </div>


                                                                                <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581095030795" class="addToCartForm product-actions-581095030795">



                                                                                    <input type="hidden" name="id" value="4314240548875" />
                                                                                    <button type="submit" name="add" class="btn btn-primary addToCart add-to-cart-btn">
                                                                                        <span class="addToCartText">Add to cart</span>
                                                                                    </button>




                                                                                </form>


                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>



                                                                <div class="pixxett-tabs-item new-pixxett-tabs-item">
                                                                    <div class="item-inner product-thumb transition">

                                                                        <div data-id="581105025035" class="product-581105025035 product product__product-grid-item product-item item_odd step3-3 step4-3">
                                                                            <div class="item-inner">
                                                                                <div class="product_image-wrap item-img">
                                                                                    <div class="pro-img">
                                                                                        <a href="collections/dresses/products/women-solid-a-line-dress.html" class="product-grid-image">
                                                                                            <img src="images/jewellery3.jpg" alt="Women Solid A-Line Dress">

                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="box-hover">
                                                                                        <ul class="add-to-links">
                                                                                            <li>

                                                                                                <div class="product-addto-links">

                                                                                                    <a class="btn btnWishlistNoLog btnProduct" href="account/login.html" data-toggle="tooltip" title="Go to wishlist">


                                                                                                    </a>

                                                                                                </div>










                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div><!-- .prod-image-wrap -->


                                                                                <div class="product_title-wrap">
                                                                                    <a href="collections/dresses/products/women-solid-a-line-dress.html" class="product_title">
                                                                                        Women Solid A-Line Dress
                                                                                    </a>

                                                                                </div>
                                                                                <span class="shopify-product-reviews-badge" data-id="581105025035"></span>
                                                                                <div class="product_price">

                                                                                    <span class="money">$39.99</span>



                                                                                </div>

                                                                                <!-- 
    This is just a regular add product form. 
    You should be able to add any valid input fields to it 
-->

                                                                                <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581105025035" class="addToCartForm product-actions-581105025035">



                                                                                    <input type="hidden" name="id" value="4314256801803" />
                                                                                    <button type="submit" name="add" class="btn btn-primary addToCart add-to-cart-btn">
                                                                                        <span class="addToCartText">Add to cart</span>
                                                                                    </button>




                                                                                </form>


                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>


                                                                <div class="pixxett-tabs-item new-pixxett-tabs-item">
                                                                    <div class="item-inner product-thumb transition">

                                                                        <div data-id="581105025035" class="product-581105025035 product product__product-grid-item product-item item_odd step3-3 step4-3">
                                                                            <div class="item-inner">
                                                                                <div class="product_image-wrap item-img">
                                                                                    <div class="pro-img">
                                                                                        <a href="collections/dresses/products/women-solid-a-line-dress.html" class="product-grid-image">
                                                                                            <img src="images/jewellery4.jpg" alt="Women Solid A-Line Dress">

                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="box-hover">
                                                                                        <ul class="add-to-links">
                                                                                            <li>

                                                                                                <div class="product-addto-links">

                                                                                                    <a class="btn btnWishlistNoLog btnProduct" href="account/login.html" data-toggle="tooltip" title="Go to wishlist">


                                                                                                    </a>

                                                                                                </div>










                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div><!-- .prod-image-wrap -->


                                                                                <div class="product_title-wrap">
                                                                                    <a href="collections/dresses/products/women-solid-a-line-dress.html" class="product_title">
                                                                                        Women Solid A-Line Dress
                                                                                    </a>

                                                                                </div>
                                                                                <span class="shopify-product-reviews-badge" data-id="581105025035"></span>
                                                                                <div class="product_price">

                                                                                    <span class="money">$39.99</span>



                                                                                </div>

                                                                                <!-- 
    This is just a regular add product form. 
    You should be able to add any valid input fields to it 
-->

                                                                                <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581105025035" class="addToCartForm product-actions-581105025035">



                                                                                    <input type="hidden" name="id" value="4314256801803" />
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
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </section>

                                <script>
                                    //<![CDATA[
jQuery(document).ready(function ($) {
	(function (element) {
		var $element = $(element),
			$tab = $('.pixxett-tabs-tab', $element),
			$tab_label = $('.pixxett-tabs-tab-label', $tab),
			$tabs = $('.pixxett-tabs-tabs', $element),
			$items_content = $('.pixxett-tabs-items', $element),
			$items_inner = $('.pixxett-tabs-items-inner', $items_content),
			$items_first_active = $('.pixxett-tabs-items-selected', $element),
			$select_box = $('.pixxett-tabs-selectbox', $element),
			$tab_label_select = $('.pixxett-tabs-tab-selected', $element),
			type_show = '';
			
		enableSelectBoxes();
		function enableSelectBoxes() {
			$tab_wrap = $('.pixxett-tabs-tabs-wrap', $element),
				$tab_label_select.html($('.pixxett-tabs-tab', $element).filter('.tab-sel').children('.pixxett-tabs-tab-label').html());
	
		}

		$('span.pixxett-tabs-tab-selected, span.pixxett-tabs-tab-arrow', $element).click(function () {
			if ($('.pixxett-tabs-tabs', $element).hasClass('pixxett-tabs-open')) {
				$('.pixxett-tabs-tabs', $element).removeClass('pixxett-tabs-open');
			} else {
				$('.pixxett-tabs-tabs', $element).addClass('pixxett-tabs-open');
			}
		});



		$tab.on('click.pixxett-tabs-tab', function () {
			var $this = $(this);
			if ($this.hasClass('tab-sel')) return false;
			if ($this.parents('.pixxett-tabs-tabs').hasClass('pixxett-tabs-open')) {
				$this.parents('.pixxett-tabs-tabs').removeClass('pixxett-tabs-open');
			}
			$tab.removeClass('tab-sel');
			$this.addClass('tab-sel');
			var items_active = $this.attr('data-active-content');
			var _items_active = $(items_active,$element);
			$items_content.removeClass('pixxett-tabs-items-selected');
			_items_active.addClass('pixxett-tabs-items-selected');
			$tab_label_select.html($tab.filter('.tab-sel').children('.pixxett-tabs-tab-label').html());
			var $loading = $('.pixxett-tabs-loading', _items_active);
			var loaded = _items_active.hasClass('pixxett-tabs-items-loaded');
			type_show =$tabs.parents('.pixxett-tabs-tabs-container').attr('data-type_show');
			if (!loaded && !_items_active.hasClass('pixxett-tabs-process')) {
				_items_active.addClass('pixxett-tabs-process');
				$loading.show();				
                _items_active.addClass('pixxett-tabs-items-loaded').removeClass('pixxett-tabs-process');
                $loading.remove();             
			}
        
		});
    })('#pixxett_listing_tabs_1504872997843');
});
//]]>
</script>




                            </div>
                            <div id="shopify-section-1505112576083" class="shopify-section">







                                <script>
                                    //<![CDATA[
jQuery(document).ready(function(cash) {
jQuery("#bestsell-slider .slider-items").owlCarousel({
items: 3, //10 items above 1000px browser width
itemsDesktop: [1024, 3], //4 items between 1024px and 901px
itemsDesktopSmall: [900, 2], // 4 items betweem 900px and 601px
itemsTablet: [640, 2], //3 items between 600 and 0;
itemsMobile: [375, 1],
navigation : true,
navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
slideSpeed : 500,
pagination : false,
autoPlay: false
});
}); 
//]]>
  
  //countdown js filter
  jQuery('.timer-grid').each(function() {
    var countTime = jQuery(this).attr('data-time');
    jQuery(this).countdown(countTime, function(event) {
        jQuery(this).html('<div class="day box-time-date"><span class="number">' + event.strftime('%D') + ' </span>days</div> <div class="hour box-time-date"><span class="number">' + event.strftime('%H') + '</span>Hrs</div><div class="min box-time-date"><span class="number">' + event.strftime('%M') + '</span> MINS</div> <div class="sec box-time-date"><span class="number">' + event.strftime('%S') + ' </span>SEC</div>');
    });
});
</script>









                            </div>
                            <div id="shopify-section-1505124121744" class="shopify-section">







                                <script>
                                    //<![CDATA[
  jQuery(document).ready(function(cash) {
  jQuery("#featured-slider .slider-items").owlCarousel({
  items: 3, //10 items above 1000px browser width
  itemsDesktop: [1024, 3], //4 items between 1024px and 901px
  itemsDesktopSmall: [900, 2], // 4 items betweem 900px and 601px
  itemsTablet: [640, 2], //3 items between 600 and 0;
  itemsMobile: [375, 1],
  navigation : true,
  navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
  slideSpeed : 500,
  pagination : false,
  autoPlay: false
  });
  }); 
  //]]>
</script>








                            </div><!-- END content_for_index -->
                        </div>
                    </div>



                    <div class="row section2">
                        <div class="col-lg-12 col-sm-12 main-home">
                            <!-- BEGIN content_for_index -->
                            <div id="shopify-section-1504872997843" class="shopify-section home-section clearfix">
                                <link href="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/animateee4b.css?6925323883398055779" rel="stylesheet" type="text/css" media="all" />
                                <section class="widget-listingtab" style="margin-right:50px;">
                                    <div class="">

                                        <div class="col-lg-12 col-sm-12 module tab-slider">



                                            <div id="pixxett_listing_tabs_1504872997843" class="pixxett-listing-tabs first-load module products-listing grid">
                                                <div class="pixxett-tabs-wrap">

                                                    <div class="pixxett-tabs-items-container product-layout">


                                                        <div class="pixxett-tabs-items  pixxett-tabs-items-selected pixxett-tabs-items-loaded items-category-10350428171" data-total="37">
                                                            <div class="pixxett-tabs-items-inner pixxett-tabs00- pixxett-tabs01- pixxett-tabs02- pixxett-tabs03- pixxett-tabs04-">

                                                                <div class="pixxett-tabs-item new-pixxett-tabs-item">
                                                                    <div class="item-inner product-thumb transition">

                                                                        <div data-id="581104336907" class="product-581104336907 product product__product-grid-item product-item item_odd step3-1 step4-1">
                                                                            <div class="item-inner">
                                                                                <div class="product_image-wrap item-img">
                                                                                    <div class="pro-img">
                                                                                        <a href="collections/dresses/products/women-solid-longline-sweater.html" class="product-grid-image">
                                                                                            <img src="images/jewellery5.jpg" alt="Women Solid Longline Sweater">

                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="box-hover">
                                                                                        <ul class="add-to-links">
                                                                                            <li>

                                                                                                <div class="product-addto-links">

                                                                                                    <a class="btn btnWishlistNoLog btnProduct" href="account/login.html" data-toggle="tooltip" title="Go to wishlist">


                                                                                                    </a>

                                                                                                </div>

                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div><!-- .prod-image-wrap -->


                                                                                <div class="product_title-wrap">
                                                                                    <a href="collections/dresses/products/women-solid-longline-sweater.html" class="product_title">
                                                                                        Women Solid Longline Sweater
                                                                                    </a>

                                                                                </div>
                                                                                <span class="shopify-product-reviews-badge" data-id="581104336907"></span>
                                                                                <div class="product_price">

                                                                                    <span class="money">$49.00</span>



                                                                                </div>


                                                                                <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581104336907" class="addToCartForm product-actions-581104336907">



                                                                                    <input type="hidden" name="id" value="4314255360011" />
                                                                                    <button type="submit" name="add" class="btn btn-primary addToCart add-to-cart-btn">
                                                                                        <span class="addToCartText">Add to cart</span>
                                                                                    </button>




                                                                                </form>


                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>



                                          



                                                                <div class="pixxett-tabs-item new-pixxett-tabs-item">
                                                                    <div class="item-inner product-thumb transition">

                                                                        <div data-id="581105025035" class="product-581105025035 product product__product-grid-item product-item item_odd step3-3 step4-3">
                                                                            <div class="item-inner">
                                                                                <div class="product_image-wrap item-img">
                                                                                    <div class="pro-img">
                                                                                        <a href="collections/dresses/products/women-solid-a-line-dress.html" class="product-grid-image">
                                                                                            <img src="images/jewellery7.jpg" alt="Women Solid A-Line Dress">

                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="box-hover">
                                                                                        <ul class="add-to-links">
                                                                                            <li>

                                                                                                <div class="product-addto-links">

                                                                                                    <a class="btn btnWishlistNoLog btnProduct" href="account/login.html" data-toggle="tooltip" title="Go to wishlist">


                                                                                                    </a>

                                                                                                </div>










                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div><!-- .prod-image-wrap -->


                                                                                <div class="product_title-wrap">
                                                                                    <a href="collections/dresses/products/women-solid-a-line-dress.html" class="product_title">
                                                                                        Women Solid A-Line Dress
                                                                                    </a>

                                                                                </div>
                                                                                <span class="shopify-product-reviews-badge" data-id="581105025035"></span>
                                                                                <div class="product_price">

                                                                                    <span class="money">$39.99</span>



                                                                                </div>

                                                                                <!-- 
    This is just a regular add product form. 
    You should be able to add any valid input fields to it 
-->

                                                                                <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581105025035" class="addToCartForm product-actions-581105025035">



                                                                                    <input type="hidden" name="id" value="4314256801803" />
                                                                                    <button type="submit" name="add" class="btn btn-primary addToCart add-to-cart-btn">
                                                                                        <span class="addToCartText">Add to cart</span>
                                                                                    </button>




                                                                                </form>


                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>


                                                                <div class="pixxett-tabs-item new-pixxett-tabs-item">
                                                                    <div class="item-inner product-thumb transition">

                                                                        <div data-id="581105025035" class="product-581105025035 product product__product-grid-item product-item item_odd step3-3 step4-3">
                                                                            <div class="item-inner">
                                                                                <div class="product_image-wrap item-img">
                                                                                    <div class="pro-img">
                                                                                        <a href="collections/dresses/products/women-solid-a-line-dress.html" class="product-grid-image">
                                                                                            <img src="images/jewellery8.jpg" alt="Women Solid A-Line Dress">

                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="box-hover">
                                                                                        <ul class="add-to-links">
                                                                                            <li>

                                                                                                <div class="product-addto-links">

                                                                                                    <a class="btn btnWishlistNoLog btnProduct" href="account/login.html" data-toggle="tooltip" title="Go to wishlist">


                                                                                                    </a>

                                                                                                </div>










                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div><!-- .prod-image-wrap -->


                                                                                <div class="product_title-wrap">
                                                                                    <a href="collections/dresses/products/women-solid-a-line-dress.html" class="product_title">
                                                                                        Women Solid A-Line Dress
                                                                                    </a>

                                                                                </div>
                                                                                <span class="shopify-product-reviews-badge" data-id="581105025035"></span>
                                                                                <div class="product_price">

                                                                                    <span class="money">$39.99</span>



                                                                                </div>

                                                                                <!-- 
    This is just a regular add product form. 
    You should be able to add any valid input fields to it 
-->

                                                                                <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581105025035" class="addToCartForm product-actions-581105025035">



                                                                                    <input type="hidden" name="id" value="4314256801803" />
                                                                                    <button type="submit" name="add" class="btn btn-primary addToCart add-to-cart-btn">
                                                                                        <span class="addToCartText">Add to cart</span>
                                                                                    </button>




                                                                                </form>


                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                <div class="pixxett-tabs-item new-pixxett-tabs-item">
                                                                    <div class="item-inner product-thumb transition">

                                                                        <div data-id="581105025035" class="product-581105025035 product product__product-grid-item product-item item_odd step3-3 step4-3">
                                                                            <div class="item-inner">
                                                                                <div class="product_image-wrap item-img">
                                                                                    <div class="pro-img">
                                                                                        <a href="collections/dresses/products/women-solid-a-line-dress.html" class="product-grid-image">
                                                                                            <img src="images/jewellery9.jpg" alt="Women Solid A-Line Dress">

                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="box-hover">
                                                                                        <ul class="add-to-links">
                                                                                            <li>

                                                                                                <div class="product-addto-links">

                                                                                                    <a class="btn btnWishlistNoLog btnProduct" href="account/login.html" data-toggle="tooltip" title="Go to wishlist">


                                                                                                    </a>

                                                                                                </div>










                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div><!-- .prod-image-wrap -->


                                                                                <div class="product_title-wrap">
                                                                                    <a href="collections/dresses/products/women-solid-a-line-dress.html" class="product_title">
                                                                                        Women Solid A-Line Dress
                                                                                    </a>

                                                                                </div>
                                                                                <span class="shopify-product-reviews-badge" data-id="581105025035"></span>
                                                                                <div class="product_price">

                                                                                    <span class="money">$39.99</span>



                                                                                </div>

                                                                                <!-- 
    This is just a regular add product form. 
    You should be able to add any valid input fields to it 
-->

                                                                                <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581105025035" class="addToCartForm product-actions-581105025035">



                                                                                    <input type="hidden" name="id" value="4314256801803" />
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








                                                        <div class="pixxett-tabs-items  items-category-10350264331" data-total="8">
                                                            <div class="pixxett-tabs-items-inner pixxett-tabs00- pixxett-tabs01- pixxett-tabs02- pixxett-tabs03- pixxett-tabs04-">



                                                                <div class="pixxett-tabs-item new-pixxett-tabs-item">
                                                                    <div class="item-inner product-thumb transition">










                                                                        <div data-id="581100896267" class="product-581100896267 product product__product-grid-item product-item item_odd step3-1 step4-3">
                                                                            <div class="item-inner">
                                                                                <div class="product_image-wrap item-img">
                                                                                    <div class="pro-img">
                                                                                        <a href="collections/kids/products/women-printed-parka.html" class="product-grid-image">
                                                                                            <img src="images/jewellery9.jpg" alt="Women Printed Parka">

                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="box-hover">
                                                                                        <ul class="add-to-links">
                                                                                            <li>

                                                                                                <div class="product-addto-links">

                                                                                                    <a class="btn btnWishlistNoLog btnProduct" href="account/login.html" data-toggle="tooltip" title="Go to wishlist">


                                                                                                    </a>

                                                                                                </div>










                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div><!-- .prod-image-wrap -->


                                                                                <div class="product_title-wrap">
                                                                                    <a href="collections/kids/products/women-printed-parka.html" class="product_title">
                                                                                        Women Printed Parka
                                                                                    </a>

                                                                                </div>
                                                                                <span class="shopify-product-reviews-badge" data-id="581100896267"></span>
                                                                                <div class="product_price">

                                                                                    <span class="money">$39.99</span>



                                                                                </div>

                                                                                <!-- 
    This is just a regular add product form. 
    You should be able to add any valid input fields to it 
-->

                                                                                <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581100896267" class="addToCartForm product-actions-581100896267">



                                                                                    <input type="hidden" name="id" value="4314247921675" />
                                                                                    <button type="submit" name="add" class="btn btn-primary addToCart add-to-cart-btn">
                                                                                        <span class="addToCartText">Add to cart</span>
                                                                                    </button>




                                                                                </form>


                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>



                                                                <div class="pixxett-tabs-item new-pixxett-tabs-item">
                                                                    <div class="item-inner product-thumb transition">










                                                                        <div data-id="581099421707" class="product-581099421707 product product__product-grid-item product-item item_even step3-2 step4-4">
                                                                            <div class="item-inner">
                                                                                <div class="product_image-wrap item-img">
                                                                                    <div class="pro-img">
                                                                                        <a href="collections/kids/products/bomber-jacket.html" class="product-grid-image">
                                                                                            <img src="images/jewellery.jpg" alt="Bomber Jacket">

                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="box-hover">
                                                                                        <ul class="add-to-links">
                                                                                            <li>

                                                                                                <div class="product-addto-links">

                                                                                                    <a class="btn btnWishlistNoLog btnProduct" href="account/login.html" data-toggle="tooltip" title="Go to wishlist">


                                                                                                    </a>

                                                                                                </div>










                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div><!-- .prod-image-wrap -->


                                                                                <div class="product_title-wrap">
                                                                                    <a href="collections/kids/products/bomber-jacket.html" class="product_title">
                                                                                        Bomber Jacket
                                                                                    </a>

                                                                                </div>
                                                                                <span class="shopify-product-reviews-badge" data-id="581099421707"></span>
                                                                                <div class="product_price">

                                                                                    <span class="money"> $99.99</span> <del><span class="money"> $149.99</span></del> <span class="sale-badge">Sale</span>



                                                                                </div>

                                                                                <!-- 
    This is just a regular add product form. 
    You should be able to add any valid input fields to it 
-->

                                                                                <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581099421707" class="addToCartForm product-actions-581099421707">



                                                                                    <input type="hidden" name="id" value="4314246447115" />
                                                                                    <button type="submit" name="add" class="btn btn-primary addToCart add-to-cart-btn">
                                                                                        <span class="addToCartText">Add to cart</span>
                                                                                    </button>




                                                                                </form>


                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>



                                                                <div class="pixxett-tabs-item new-pixxett-tabs-item">
                                                                    <div class="item-inner product-thumb transition">










                                                                        <div data-id="581098274827" class="product-581098274827 product product__product-grid-item product-item item_odd step3-3 step4-1">
                                                                            <div class="item-inner">
                                                                                <div class="product_image-wrap item-img">
                                                                                    <div class="pro-img">
                                                                                        <a href="collections/kids/products/colourblock-fit-amp-flare-dress.html" class="product-grid-image">
                                                                                            <img src="images/jewellery.jpg" alt="Colourblock Fit &amp;amp; Flare Dress">

                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="box-hover">
                                                                                        <ul class="add-to-links">
                                                                                            <li>

                                                                                                <div class="product-addto-links">

                                                                                                    <a class="btn btnWishlistNoLog btnProduct" href="account/login.html" data-toggle="tooltip" title="Go to wishlist">


                                                                                                    </a>

                                                                                                </div>










                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div><!-- .prod-image-wrap -->


                                                                                <div class="product_title-wrap">
                                                                                    <a href="collections/kids/products/colourblock-fit-amp-flare-dress.html" class="product_title">
                                                                                        Colourblock Fit &amp; Flare Dress
                                                                                    </a>

                                                                                </div>
                                                                                <span class="shopify-product-reviews-badge" data-id="581098274827"></span>
                                                                                <div class="product_price">

                                                                                    <span class="money"> $39.99</span> <del><span class="money"> $59.99</span></del> <span class="sale-badge">Sale</span>



                                                                                </div>

                                                                                <!-- 
    This is just a regular add product form. 
    You should be able to add any valid input fields to it 
-->

                                                                                <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581098274827" class="addToCartForm product-actions-581098274827">



                                                                                    <input type="hidden" name="id" value="4314245136395" />
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


                                                        <div class="pixxett-tabs-items  items-category-10350362635" data-total="14">
                                                            <div class="pixxett-tabs-items-inner pixxett-tabs00- pixxett-tabs01- pixxett-tabs02- pixxett-tabs03- pixxett-tabs04-">



                                                                <div class="pixxett-tabs-item new-pixxett-tabs-item">
                                                                    <div class="item-inner product-thumb transition">










                                                                        <div data-id="581105025035" class="product-581105025035 product product__product-grid-item product-item item_even step3-1 step4-2">
                                                                            <div class="item-inner">
                                                                                <div class="product_image-wrap item-img">
                                                                                    <div class="pro-img">
                                                                                        <a href="collections/tops/products/women-solid-a-line-dress.html" class="product-grid-image">
                                                                                            <img src="images/jewellery.jpg" alt="Women Solid A-Line Dress">

                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="box-hover">
                                                                                        <ul class="add-to-links">
                                                                                            <li>

                                                                                                <div class="product-addto-links">

                                                                                                    <a class="btn btnWishlistNoLog btnProduct" href="account/login.html" data-toggle="tooltip" title="Go to wishlist">


                                                                                                    </a>

                                                                                                </div>










                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div><!-- .prod-image-wrap -->


                                                                                <div class="product_title-wrap">
                                                                                    <a href="collections/tops/products/women-solid-a-line-dress.html" class="product_title">
                                                                                        Women Solid A-Line Dress
                                                                                    </a>

                                                                                </div>
                                                                                <span class="shopify-product-reviews-badge" data-id="581105025035"></span>
                                                                                <div class="product_price">

                                                                                    <span class="money">$39.99</span>



                                                                                </div>

                                                                                <!-- 
    This is just a regular add product form. 
    You should be able to add any valid input fields to it 
-->

                                                                                <form action="https://raplian.myshopify.com/cart/add" method="post" enctype="multipart/form-data" data-id="581105025035" class="addToCartForm product-actions-581105025035">



                                                                                    <input type="hidden" name="id" value="4314256801803" />
                                                                                    <button type="submit" name="add" class="btn btn-primary addToCart add-to-cart-btn">
                                                                                        <span class="addToCartText">Add to cart</span>
                                                                                    </button>




                                                                                </form>


                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>



                                                                <div class="pixxett-tabs-item new-pixxett-tabs-item">
                                                                    <div class="item-inner product-thumb transition">











                                                                    </div>
                                                                </div>



                                                                <div class="pixxett-tabs-item new-pixxett-tabs-item">
                                                                    <div class="item-inner product-thumb transition">











                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </section>

                                <script>
                                    //<![CDATA[
jQuery(document).ready(function ($) {
	(function (element) {
		var $element = $(element),
			$tab = $('.pixxett-tabs-tab', $element),
			$tab_label = $('.pixxett-tabs-tab-label', $tab),
			$tabs = $('.pixxett-tabs-tabs', $element),
			$items_content = $('.pixxett-tabs-items', $element),
			$items_inner = $('.pixxett-tabs-items-inner', $items_content),
			$items_first_active = $('.pixxett-tabs-items-selected', $element),
			$select_box = $('.pixxett-tabs-selectbox', $element),
			$tab_label_select = $('.pixxett-tabs-tab-selected', $element),
			type_show = '';
			
		enableSelectBoxes();
		function enableSelectBoxes() {
			$tab_wrap = $('.pixxett-tabs-tabs-wrap', $element),
				$tab_label_select.html($('.pixxett-tabs-tab', $element).filter('.tab-sel').children('.pixxett-tabs-tab-label').html());
	
		}

		$('span.pixxett-tabs-tab-selected, span.pixxett-tabs-tab-arrow', $element).click(function () {
			if ($('.pixxett-tabs-tabs', $element).hasClass('pixxett-tabs-open')) {
				$('.pixxett-tabs-tabs', $element).removeClass('pixxett-tabs-open');
			} else {
				$('.pixxett-tabs-tabs', $element).addClass('pixxett-tabs-open');
			}
		});



		$tab.on('click.pixxett-tabs-tab', function () {
			var $this = $(this);
			if ($this.hasClass('tab-sel')) return false;
			if ($this.parents('.pixxett-tabs-tabs').hasClass('pixxett-tabs-open')) {
				$this.parents('.pixxett-tabs-tabs').removeClass('pixxett-tabs-open');
			}
			$tab.removeClass('tab-sel');
			$this.addClass('tab-sel');
			var items_active = $this.attr('data-active-content');
			var _items_active = $(items_active,$element);
			$items_content.removeClass('pixxett-tabs-items-selected');
			_items_active.addClass('pixxett-tabs-items-selected');
			$tab_label_select.html($tab.filter('.tab-sel').children('.pixxett-tabs-tab-label').html());
			var $loading = $('.pixxett-tabs-loading', _items_active);
			var loaded = _items_active.hasClass('pixxett-tabs-items-loaded');
			type_show =$tabs.parents('.pixxett-tabs-tabs-container').attr('data-type_show');
			if (!loaded && !_items_active.hasClass('pixxett-tabs-process')) {
				_items_active.addClass('pixxett-tabs-process');
				$loading.show();				
                _items_active.addClass('pixxett-tabs-items-loaded').removeClass('pixxett-tabs-process');
                $loading.remove();             
			}
        
		});
    })('#pixxett_listing_tabs_1504872997843');
});
//]]>
</script>




                            </div>
                            <div id="shopify-section-1505112576083" class="shopify-section">






                                <script>
                                    //<![CDATA[
jQuery(document).ready(function(cash) {
jQuery("#bestsell-slider .slider-items").owlCarousel({
items: 3, //10 items above 1000px browser width
itemsDesktop: [1024, 3], //4 items between 1024px and 901px
itemsDesktopSmall: [900, 2], // 4 items betweem 900px and 601px
itemsTablet: [640, 2], //3 items between 600 and 0;
itemsMobile: [375, 1],
navigation : true,
navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
slideSpeed : 500,
pagination : false,
autoPlay: false
});
}); 
//]]>
  
  //countdown js filter
  jQuery('.timer-grid').each(function() {
    var countTime = jQuery(this).attr('data-time');
    jQuery(this).countdown(countTime, function(event) {
        jQuery(this).html('<div class="day box-time-date"><span class="number">' + event.strftime('%D') + ' </span>days</div> <div class="hour box-time-date"><span class="number">' + event.strftime('%H') + '</span>Hrs</div><div class="min box-time-date"><span class="number">' + event.strftime('%M') + '</span> MINS</div> <div class="sec box-time-date"><span class="number">' + event.strftime('%S') + ' </span>SEC</div>');
    });
});
</script>









                            </div>
                            <div id="shopify-section-1505124121744" class="shopify-section">





                                <script>
                                    //<![CDATA[
  jQuery(document).ready(function(cash) {
  jQuery("#featured-slider .slider-items").owlCarousel({
  items: 3, //10 items above 1000px browser width
  itemsDesktop: [1024, 3], //4 items between 1024px and 901px
  itemsDesktopSmall: [900, 2], // 4 items betweem 900px and 601px
  itemsTablet: [640, 2], //3 items between 600 and 0;
  itemsMobile: [375, 1],
  navigation : true,
  navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
  slideSpeed : 500,
  pagination : false,
  autoPlay: false
  });
  }); 
  //]]>
</script>








                            </div><!-- END content_for_index -->
                        </div>
                    </div>

               


                </div>
            </div>


        </div>

    </div>
    <section class="apparel-sec">
       
    <div class="row apparel">
        
    <div class="col-md-3">
        <figure class="snip1083 red"><img src="images/img1.jpg" alt="sample33" />
  <figcaption>
    <h2>Latest Apparel</h2>
  </figcaption>
  <a href="#"></a>
</figure>
        </div>
        <div class="col-md-3"><figure class="snip1083 blue"><img src="images/img2.jpg" alt="sample33" />
  <figcaption>
    <h2>Handloom Sarees</h2>
  </figcaption>
  <a href="#"></a>
</figure>
            
        </div>
        <div class="col-md-3"><figure class="snip1083 red2"><img src="images/img3.jpg" alt="sample33" />
  <figcaption>
    <h2>Jewellery</h2>
  </figcaption>
  <a href="#"></a>
</figure>
        </div>
        <div class="col-md-3"><figure class="snip1083 skyblue"><img src="images/img4.jpg" alt="sample33" />
  <figcaption>
    <h2>Hand Block Printed Palazzos</h2>
  </figcaption>
  <a href="#"></a>
</figure>
        </div>
    </div>
     </section> 
    
    
    
    
 
   
   
       
        <script src="../cdn.shopify.com/s/files/1/0002/7262/9771/t/3/assets/instafeed.minee4b.js?6925323883398055779"></script>
        <script>
            var feed = new Instafeed({
    get: "tagged",    
     tagName: "#monuments", 
    
     userId: 5809033919, 
    accessToken: '1545699210.1677ed0.b4a6306b5a294bb18ea5f9b2619f2e6d', 
    resolution: "standard_resolution",
    clientId: "5809033919.d90570a.135d627af05d4d03a6ddf63c97defdc6",
    limit: "10",
    after: function() {
      jQuery("#instafeed").owlCarousel({
    	navigation : true,
    	items: 4,
        itemsDesktop : [1024,4], //5 items between 1024px and 901px
	    itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
	    itemsTablet: [600,2], //2 items between 600 and 0;
	    itemsMobile : [320,1],
        navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"]
    
  	  });
  	}
  });
  feed.run();
</script>




<section class="Collections">
  <div class="row">
      <h2>Featured Collections</h2>
      <div class="divider3">&nbsp;</div>
    <div class="col-md-3">
      <figure class="snip1196 ">
  <img src="images/collection1.jpg" alt="sq-sample18"/>
  <figcaption>
   
    <h4>6 Yards Of Elegance </h4>
    <h2>Silk Sarees</h2>
      <i class="fa fa-arrow-circle-o-right"></i>
  </figcaption>
  <a href="#"></a>
</figure>
      </div>
       <div class="col-md-3">
      <figure class="snip1196 ">
  <img src="images/collection2.jpg" alt="sq-sample19"/>
  <figcaption>
    <i class="ion-star"></i>
    <h4>Refreshing Silhouettes</h4>
    <h2>Everyday Suit sets</h2>
       <i class="fa fa-arrow-circle-o-right"></i>
  </figcaption>
  <a href="#"></a>
</figure>
      </div>
       <div class="col-md-3">
      <figure class="snip1196">
  <img src="images/collection3.jpg"/>
  <figcaption>
    <i class="ion-headphone"></i>
    <h4>Chic And Contemporary</h4>
    <h2>Summer Dresses</h2>
       <i class="fa fa-arrow-circle-o-right"></i>
  </figcaption>
  <a href="#"></a>
</figure>
      </div>
      
      
            <div class="col-md-3">
      <figure class="snip1196">
  <img src="images/collection3.jpg"/>
  <figcaption>
    <i class="ion-headphone"></i>
    <h4>Effortless Everyday</h4>
    <h2>Comfortable Clothing</h2>
       <i class="fa fa-arrow-circle-o-right"></i>
  </figcaption>
  <a href="#"></a>
</figure>
      </div>
    </div>  
    
    
      <div class="row">
      
    <div class="col-md-3">
      <figure class="snip1196">
  <img src="images/collection3.jpg" alt="sq-sample18"/>
  <figcaption>
    <i class="ion-plus-round"></i>
    <h4>Handlooms Sarees</h4>
    <h2>Handlooms Sarees</h2>
       <i class="fa fa-arrow-circle-o-right"></i>
  </figcaption>
  <a href="#"></a>
</figure>
      </div>
       <div class="col-md-3">
      <figure class="snip1196">
  <img src="images/collection4.jpg" alt="sq-sample19"/>
  <figcaption>
    <i class="ion-star"></i>
    <h4>For A Classic Traditional Look</h4>
    <h2>Chanderi Sarees</h2>
       <i class="fa fa-arrow-circle-o-right"></i>
  </figcaption>
  <a href="#"></a>
</figure>
      </div>
       <div class="col-md-3">
      <figure class="snip1196">
  <img src="images/collection5.jpg" alt="sq-sample20"/>
  <figcaption>
    <i class="ion-headphone"></i>
    <h4>Traditional Meets Pop</h4>
    <h2>Earrings</h2>
       <i class="fa fa-arrow-circle-o-right"></i>
  </figcaption>
  <a href="#"></a>
</figure>
      </div>
          
          
            <div class="col-md-3">
      <figure class="snip1196">
  <img src="images/collection5.jpg" alt="sq-sample20"/>
  <figcaption>
    <i class="ion-headphone"></i>
    <h4>It's All In The Details </h4>
    <h2>Statement Pieces</h2>
       <i class="fa fa-arrow-circle-o-right"></i>
  </figcaption>
  <a href="#"></a>
</figure>
      </div>
    </div> 
    
    
    
      <div class="row">
      
    <div class="col-md-3">
      <figure class="snip1196">
  <img src="images/collection6-1.jpg" alt="sq-sample18"/>
  <figcaption>
    <i class="ion-plus-round"></i>
    <h4>Handcrafted Dupattas And Stole</h4>
    <h2>Dupattas</h2>
       <i class="fa fa-arrow-circle-o-right"></i>
  </figcaption>
  <a href="#"></a>
</figure>
      </div>
          
          <div class="col-md-3">
      <figure class="snip1196">
  <img src="images/collection6-1.jpg" alt="sq-sample18"/>
  <figcaption>
    <i class="ion-plus-round"></i>
     <h4>Traditional Meets Pop</h4>
    <h2>Earrings</h2>
       <i class="fa fa-arrow-circle-o-right"></i>
  </figcaption>
  <a href="#"></a>
</figure>
      </div>
       <div class="col-md-3">
      <figure class="snip1196">
  <img src="images/collection7.jpg" alt="sq-sample19"/>
  <figcaption>
    <i class="ion-star"></i>
     <h4>It's All In The Details </h4>
    <h2>Statement Pieces</h2>
       <i class="fa fa-arrow-circle-o-right"></i>
  </figcaption>
  <a href="#"></a>
</figure>
      </div>
       <div class="col-md-3">
      <figure class="snip1196">
  <img src="images/collection8.jpg" alt="sq-sample20"/>
  <figcaption>
    <i class="ion-headphone"></i>
  <h4>Handcrafted Dupattas And Stole</h4>
    <h2>Dupattas</h2>
       <i class="fa fa-arrow-circle-o-right"></i>
  </figcaption>
  <a href="#"></a>
</figure>
      </div>
    </div> 
    
    
    </section>





   
   








    <!-- service block -->

   <?php
   include('footer.php');
   ?>
<!--<div class="jsn-air-balloon request_quote"> <a href="blog/request_free_quote"><img src="images/request-a-quote.png" alt="request a quote"> </a> </div>-->
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
        </div>
    </div>
    <script>
    /* Demo purposes only */	
$("figure").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);
    </script>
    
    
    <script>
      /* Demo purposes only */
  $(".hover").mouseleave(
    function () {
      $(this).removeClass("hover");
    }
  );
    </script>
    
    
    <script>
        // Delayed Modal Display + Cookie On Click

        $(document).ready(function() {



            // If no cookie with our chosen name (e.g. no_thanks)...

            if ($.cookie("no_thanks") == null) {
                // Show the modal, with delay func.
                $('#myModal').appendTo("body");

                function show_modal() {
                    $('#myModal').modal();
                }

                $('#myModal').modal({
                    keyboard: false,
                    backdrop: false
                })

                // Set delay func. time in milliseconds
                window.setTimeout(show_modal, 3000);


            }

            // On click of specified class (e.g. 'nothanks'), trigger cookie, which expires in 100 years
            $(".close").click(function() {
                $.cookie('no_thanks', 'true', {
                    expires: 36500,
                    path: '/'
                });
            });





        });
    </script>
<script>$("figure").mouseleave(
    function() {
      $(this).removeClass("hover");
    }
  );</script>

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
            } else {
                Currency.currentCurrency = defaultCurrency;
            }
        }
        // If the cookie value does not correspond to any value in the currency dropdown.
        else if (jQuery('[name=currencies]').size() && jQuery('[name=currencies] option[value=' + cookieCurrency + ']').size() === 0) {
            Currency.currentCurrency = shopCurrency;
            Currency.cookie.write(shopCurrency);
        } else if (cookieCurrency === shopCurrency) {
            Currency.currentCurrency = shopCurrency;
        } else {
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
        $(document).ready(function() {
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
            for (var i = 0; i < availableOptions.length; i++) {
                var option = availableOptions[i];
                var newOption = jQuery('<option></option>').val(option).html(option);
                selector.append(newOption);
            }
            jQuery('.swatch[data-option-index="' + selectorIndex + '"] .swatch-element').each(function() {
                if (jQuery.inArray($(this).attr('data-value'), availableOptions) !== -1) {
                    $(this).removeClass('soldout').show().find(':radio').removeAttr('disabled', 'disabled');
                } else {
                    $(this).addClass('soldout').hide().find(':radio').removeAttr('checked').attr('disabled', 'disabled');
                }
            });
            if (jQuery.inArray(initialValue, availableOptions) !== -1) {
                selector.val(initialValue);
            }
            selector.trigger('change');

        };

        Shopify.linkOptionSelectors = function(product) {
            // Building our mapping object.
            for (var i = 0; i < product.variants.length; i++) {
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