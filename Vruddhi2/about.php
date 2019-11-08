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






   
    </div>
   
    
    
 
<section class="about-us">
    <div class="row">
    <div class="col-md-3 ab_left">
        <ul class="visible1">
        <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms Of Use</a></li>
            <li><a href="#">Business Enquiries</a></li>
            <li><a href="#">The Vruddhi Schools</a></li>
            <li><a href="#">Press Kit</a></li>
        </ul>
        
        <div class="panel-group visible2" role="tablist" >
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="collapseListGroupHeading1">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" href="#collapseListGroup1" aria-expanded="false" aria-controls="collapseListGroup1">
          Company <span class="glyphicon glyphicon-chevron-down"></span>
        </a>
      </h4>
    </div>
    <div id="collapseListGroup1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading1">
      <ul class="list-group">
       <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms Of Use</a></li>
            <li><a href="#">Business Enquiries</a></li>
            <li><a href="#">The Vruddhi Schools</a></li>
            <li><a href="#">Press Kit</a></li>
      </ul>
      
    </div>
  </div>
</div>
        
        </div>
        <div class="col-md-9 ab_right">
        <img src="images/14.jpg" class="img-responsive">
            
            <h3>About The Company</h3>
            <hr>
            <p>Vruddhi is India's largest private platform for products that are made from traditional techniques, skills and hand-based processes.</p>
            <p>Vruddhi links over 55,000 craft based rural producers to modern urban markets, thereby creating a base for skilled, sustainable rural employment, and preserving India's traditional handicrafts in the process.</p>
            <p>Vruddhi's products are natural, craft based, contemporary, and affordable.</p>
            <br>
            <h3>The Vruddhi School</h3>
            <p>The Vruddhi School is a co-ed private school from preschool to Class XII with CBSE Board affiliation, located in Bali, Rajasthan. Starting with 11 students in 1992, today there are nearly 500 students with over 50% female enrolment. Visit www.fabindiaschools.org to read more about this unique initiative.</p>
            <br>
            <h3>The Vision</h3>
            <p>At Vruddhi we celebrate India, and endeavour to bring all that we love about India to customers around the world.</p>
            <br>
            <h3>The Mission</h3>
            <p>We will harness the transformative power of a well-run business committed to profitable growth in support of Fabindia’s Vision.</p>
            <p>We will strengthen and support our community of customers, designers, artisans, farmers, makers and entrepreneurs inspired by India.</p>
            <p>We will give our customers products that delight them by interpreting our rich heritage and traditional knowledge, while protecting the natural environment.</p>
            <br>
            <h3>Values & Guiding Principles</h3>
            <p>To remain true to our company’s history and our founder’s original Vision: "In addition to making profits, our aims are constant development of new products, a fair, equitable and helpful relationship with our producers, and the maintenance of quality on which our reputation rests."
– John Bissell</p>
            <p>To ensure that we delight our customers with our products and service, and always make them feel that they are getting great value for their money.</p>
            <p>To design, make and sell products with intrinsic worth that comes from the original designs, knowledge, care and skill with which these are made.</p>
            
        <p>To be true to our commitment and history as an ethical and trust-worthy brand promoting a stake-holder based community model of inclusive capitalism.</p>
            
            <p>To constantly share our Vision with our employees, suppliers, business associates and customers, so that we collectively ensure that all our actions are in service of our Vision, Mission and Guiding Principles.</p>
            <p>The Fabindia Head Office is located in New Delhi at:</p>
            <br>
            <h3>Vruddhi Overseas Pvt. Ltd.</h3>
            <p>CIN: U74899DL1976PTC008436</p>
            <p>Head Office: C-40, 2nd Floor, Okhla Industrial Area, Phase -2, Hyderabad 110020, India</p>
            <p>Tel:<a href="#"> +91-011-40692000</a>, Fax: +91 11 2681 1053, Email:<a href="#">mailus@Vruddhi.net</a></p>
            <p>Registered Address: N-14 Greater Kailash - I, Hyderabad 110048, India
                Tel:<a href="#">+91 11 4669 3725</a>, Email:<a href="#"> mailus@Vruddhi.net</a></p>
            
            
            <p><a href="#">CSR Policy (pdf)</a></p>
            <p><a href="#">Details of Establishment of Vigil Mechanism</a></p>
            <p><a href="#">Notice of EGM 27th May 2019 (pdf)</a></p>
            <p><a href="#">Route Map for the venue of EGM 27th May 2019 (pdf)</a></p>
        </div>
    </div>
    </section>   
   







   
   








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