@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $about = Cache::get('about');
    $quangcao = DB::table('lienket')->where('com','quang-cao')->get();
?>
<div id="content" class="site-content">
   <div class="gray_bg"></div>
   <div class="single-product">
      <div class="container">
         <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
               <div class="bottom10 content-pad">
                  <div class="woo-breadcrumb breadcrumbs" itemprop="breadcrumb"><a href="https://ohuivietnam.com.vn">Trang chủ</a><i class="fa fa-angle-right"></i><a href="https://ohuivietnam.com.vn/danh-muc/my-pham-sum-37/">Mỹ phẩm su:m 37</a><i class="fa fa-angle-right"></i><a href="https://ohuivietnam.com.vn/danh-muc/my-pham-sum-37/my-pham-sum-trang-diem/">Mỹ Phẩm Su:m trang điểm</a><i class="fa fa-angle-right"></i>SU:M 37 Dear Flora Enchanted Lip Creamer</div>
               </div>
               <div class="row">
                  <div class="col-sm-9 single-product-info">
                     <div class="woocommerce-notices-wrapper">
                        <div class="woocommerce-message" role="alert">
                           <a href="https://ohuivietnam.com.vn/gio-hang/" tabindex="1" class="button wc-forward">Xem giỏ hàng</a> “SU:M 37 Dear Flora Enchanted Lip Creamer” đã được thêm vào giỏ hàng.  
                        </div>
                     </div>
                     <div itemscope itemtype="<br />
                        <b>Notice</b>:  woocommerce_get_product_schema is <strong>deprecated</strong> since version 3.0! Hiện không có giải pháp thay thế. in <b>/home2/vesinhha/public_html/ohuivietnam/wp-includes/functions.php</b> on line <b>3926</b><br />
                        http://schema.org/Product" id="product-760" class="post-760 product type-product status-publish has-post-thumbnail product_cat-my-pham-sum-37 product_cat-my-pham-sum-trang-diem first instock sale shipping-taxable purchasable product-type-simple">
                        <div class="single-product-wrap">
                           <div class="content-pad content-bg">
                              <div class="row">
                                <div class="col-sm-5 single-product-image">
                                    <div class="images">
                                       <a href="{{asset('upload/product/'.$product_detail->photo)}}" itemprop="image" class="yith_magnifier_zoom woocommerce-main-image" title="{{$product_detail->name}}"><img width="600" height="800" src="{{asset('upload/product/'.$product_detail->photo)}}" class="attachment-shop_single size-shop_single wp-post-image" alt="" srcset="{{asset('upload/product/'.$product_detail->photo)}} 600w, {{asset('upload/product/'.$product_detail->photo)}} 225w, {{asset('upload/product/'.$product_detail->photo)}} 450w, {{asset('upload/product/'.$product_detail->photo)}} 720w" sizes="(max-width: 600px) 100vw, 600px" /></a>
                                       <div class="thumbnails slider">
                                      <!--   <ul class="yith_magnifier_gallery">
                                            <li class="yith_magnifier_thumbnail first"><a href="https://ohuivietnam.com.vn/wp-content/uploads/2019/01/z1247146829026_5a4cf9c1093ddf972c194ebfdd53ee4f-450x600.jpg" class="yith_magnifier_thumbnail first" title="z1247146829026_5a4cf9c1093ddf972c194ebfdd53ee4f" data-small="https://ohuivietnam.com.vn/wp-content/uploads/2019/01/z1247146829026_5a4cf9c1093ddf972c194ebfdd53ee4f-600x800.jpg"><img width="100" height="100" src="https://ohuivietnam.com.vn/wp-content/uploads/2019/01/z1247146829026_5a4cf9c1093ddf972c194ebfdd53ee4f-100x100.jpg" class="attachment-shop_thumbnail size-shop_thumbnail" alt="" srcset="https://ohuivietnam.com.vn/wp-content/uploads/2019/01/z1247146829026_5a4cf9c1093ddf972c194ebfdd53ee4f-100x100.jpg 100w, https://ohuivietnam.com.vn/wp-content/uploads/2019/01/z1247146829026_5a4cf9c1093ddf972c194ebfdd53ee4f-300x300.jpg 300w, https://ohuivietnam.com.vn/wp-content/uploads/2019/01/z1247146829026_5a4cf9c1093ddf972c194ebfdd53ee4f-150x150.jpg 150w" sizes="(max-width: 100px) 100vw, 100px" /></a>
                                            </li>
                                            <li class="yith_magnifier_thumbnail"><a href="https://ohuivietnam.com.vn/wp-content/uploads/2019/01/z1247146836257_64891386d3eecb7c3d5f95dbf6320e9b-600x600.jpg" class="yith_magnifier_thumbnail" title="z1247146836257_64891386d3eecb7c3d5f95dbf6320e9b" data-small="https://ohuivietnam.com.vn/wp-content/uploads/2019/01/z1247146836257_64891386d3eecb7c3d5f95dbf6320e9b-600x600.jpg"><img width="100" height="100" src="https://ohuivietnam.com.vn/wp-content/uploads/2019/01/z1247146836257_64891386d3eecb7c3d5f95dbf6320e9b-100x100.jpg" class="attachment-shop_thumbnail size-shop_thumbnail" alt="" srcset="https://ohuivietnam.com.vn/wp-content/uploads/2019/01/z1247146836257_64891386d3eecb7c3d5f95dbf6320e9b-100x100.jpg 100w, https://ohuivietnam.com.vn/wp-content/uploads/2019/01/z1247146836257_64891386d3eecb7c3d5f95dbf6320e9b-300x300.jpg 300w, https://ohuivietnam.com.vn/wp-content/uploads/2019/01/z1247146836257_64891386d3eecb7c3d5f95dbf6320e9b-600x600.jpg 600w, https://ohuivietnam.com.vn/wp-content/uploads/2019/01/z1247146836257_64891386d3eecb7c3d5f95dbf6320e9b-150x150.jpg 150w, https://ohuivietnam.com.vn/wp-content/uploads/2019/01/z1247146836257_64891386d3eecb7c3d5f95dbf6320e9b-768x768.jpg 768w, https://ohuivietnam.com.vn/wp-content/uploads/2019/01/z1247146836257_64891386d3eecb7c3d5f95dbf6320e9b-1024x1024.jpg 1024w, https://ohuivietnam.com.vn/wp-content/uploads/2019/01/z1247146836257_64891386d3eecb7c3d5f95dbf6320e9b.jpg 1080w" sizes="(max-width: 100px) 100vw, 100px" /></a></li>
                                        </ul> -->
                                          <div id="slider-prev"></div>
                                          <div id="slider-next"></div>
                                       </div>
                                    </div>
                                    <script type="text/javascript" charset="utf-8">
                                       var yith_magnifier_options = {
                                       
                                          enableSlider: true,
                                       
                                                sliderOptions: {
                                             responsive: true,
                                             circular: true,
                                             infinite: true,
                                             direction: 'left',
                                             debug: false,
                                             auto: false,
                                             align: 'left',
                                             prev: {
                                                button: "#slider-prev",
                                                key: "left"
                                             },
                                             next: {
                                                button: "#slider-next",
                                                key: "right"
                                             },
                                             //width   : 618,
                                             scroll: {
                                                items: 1,
                                                pauseOnHover: true
                                             },
                                             items: {
                                                //width: 104,
                                                visible: 3        }
                                          },
                                       
                                          
                                          showTitle: false,
                                          zoomWidth: 'auto',
                                          zoomHeight: 'auto',
                                          position: 'right',
                                          //tint: ,
                                          //tintOpacity: ,
                                          lensOpacity: 0.5,
                                          softFocus: false,
                                          //smoothMove: ,
                                          adjustY: 0,
                                          disableRightClick: false,
                                          phoneBehavior: 'inside',
                                          loadingLabel: 'Loading...',
                                          zoom_wrap_additional_css: ''
                                       };
                                    </script>            
                                 </div>
                                 <div class="col-sm-7 single-product-right">
                                    <div class="summary entry-summary">
                                       <h1 itemprop="name" class="product_title entry-title">{{$product_detail->name}}</h1>
                                       <div class="ps-prices">
                                          <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                             <span class="price-reg"><span itemprop="price">{{$product_detail->price}}</span> <sup>đ</sup> </span>
                                             <span class="last_price">Giá thị trường: <span class="price-throug">{{$product_detail->price_old}}<sup>đ</sup></span></span>
                                             <span class="product-stock">
                                             Kho hàng: 
                                             </span>
                                             <meta itemprop="price" content="<br />
                                                <b>Notice</b>:  WC_Product::get_display_price đã bị <strong>loại bỏ</strong> từ phiên bản 3.0! Hãy sử dụng wc_get_price_to_display. in <b>/home2/vesinhha/public_html/ohuivietnam/wp-includes/functions.php</b> on line <b>3923</b><br />
                                                700000" />
                                             <meta itemprop="priceCurrency" content="VND" />
                                             <link itemprop="availability" href="https://schema.org/InStock" />
                                          </div>
                                       </div>
                                       <div itemprop="description">
                                          <p>{!!$product_detail->mota!!} </p>
                                       </div>
                                       <div class="product_meta">
                                       </div>
                                       <div class="stock-purcha">
                                          <form class="cart" action="{{ route('addProductToCart') }}" method="post" enctype='multipart/form-data'>
                                             {{csrf_field()}}     
                                             <div class="quantity">
                                                <label class="screen-reader-text" for="quantity_5c6f7b08dccf4">Số lượng</label>
                                                <input
                                                   type="number"
                                                   id=""
                                                   class="input-text qty text"
                                                   step="1"
                                                   min="1"
                                                   max=""
                                                   name="cart"
                                                   value="1"
                                                   title="SL"
                                                   size="4"
                                                   pattern="[0-9]*"
                                                   inputmode="numeric"
                                                   aria-labelledby="{{$product_detail->name}}s" />
                                                 <input type="hidden" name="product_id" value="{{ $product_detail->id }}">  
                                                    <button type="submit" name="add-to-cart" value="760" class="single_add_to_cart_button button alt btn btn-success btn-add-cart">Thêm vào giỏ</button>
                                             </div>
                                          </form>
                                       </div>
                                       <div class="product-share-wrap">
                                          <div class="product-guid">
                                             <a rel="nofollow" href="#muahangModal" data-toggle="modal" title="Hướng dẫn mua hàng">Hướng dẫn mua hàng</a>
                                             <span class="delivery right">Giao sản phẩm</span>
                                          </div>
                                          <div class="widget-product-share">
                                             <div class="execphpwidget">
                                                <div class="product_hotline">Hotline: <b><a href="tel:{{$setting->hotline}}">{{$setting->phone}}</a></b></div>
                                             </div>
                                             <div class="social-product-share">
                                                <div class="left">
                                                   <div id="fb-root"></div>
                                                   <script>(function(d, s, id) {
                                                      var js, fjs = d.getElementsByTagName(s)[0];
                                                      if (d.getElementById(id)) return;
                                                      js = d.createElement(s); js.id = id;
                                                      js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=1767809743462404";
                                                      fjs.parentNode.insertBefore(js, fjs);
                                                      }(document, 'script', 'facebook-jssdk'));
                                                   </script>
                                                   <div class="fb-like" data-href="" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                                                </div>
                                                <div class="left">
                                                   <div class="g-plus" data-action="share" data-annotation="bubble"></div>
                                                   <script>
                                                      window.___gcfg = {
                                                        lang: 'vi-VN',
                                                        parsetags: 'onload'
                                                      };
                                                   </script>
                                                   <script src="https://apis.google.com/js/platform.js" async defer></script>
                                                </div>
                                                <div class="left"> <a title="Hot!" target="_blank" href="http://linkhay.com/submit" rel="nofollow"><img src="https://linkhay.com/templates/images/guide/button4.jpg" width="62" height="20" alt="Hot!"></a></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- .summary -->
                                 
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="product-desc-wrap">
                           <div class="content-pad content-bg">
                              <div class="woocommerce-tabs wc-tabs-wrapper">
                                <ul class="tabs wc-tabs">
                                    <li class="description_tab active">
                                       <a href="#tab-description">Mô tả</a>
                                    </li>
                                  
                                </ul>
                                <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" style="display: block;">
                                    <h2>Product Description</h2>
                                    <p>{!!$product_detail->content!!}</p>
                                </div>
                                <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--wpc_comment_tab panel entry-content wc-tab" id="tab-wpc_comment_tab" style="display: none;">
                                    <!-- <script type="text/javascript">
                                       //    initialize the validator function
                                           woodiscuzValidator.message['invalid'] = 'Some of field value is invalid';
                                           woodiscuzValidator.message['empty'] = 'please fill out this field to comment';
                                           woodiscuzValidator.message['email'] = 'email address is invalid';
                                       
                                           jQuery(document).ready(function ($) {
                                               $(document).delegate('.wpc-toggle', 'click', function () {
                                                   var toggleID = $(this).attr('id');
                                                   var uniqueID = toggleID.substring(toggleID.lastIndexOf('-') + 1);
                                                   $('#wpc-comm-' + uniqueID + ' .wpc-reply').slideToggle(500, function () {
                                                       if ($(this).is(':hidden')) {
                                                           $('#' + toggleID).html('Show Replies &or;');
                                                       } else {
                                                           $('#' + toggleID).html('Hide Replies &and;');
                                                       }
                                                   });
                                               });
                                       
                                               if ($.cookie('wpc_author_name') !== '' && $.cookie('wpc_author_email')) {
                                                   $('#woopcomm .wpc_name').val($.cookie('wpc_author_name'));
                                                   $('#woopcomm .wpc_email').val($.cookie('wpc_author_email'));
                                               }
                                       
                                               $('#wpc_unsubscribe_message').delay(7000).fadeOut(1500, function () {
                                                   $(this).remove();
                                               });
                                           });
                                    </script> -->
                                    <!-- <div id="woopcomm">
                                       <p class="wpc-comment-title">Viết ý kiến</p>
                                       <div class="wpc-form-wrapper">
                                          <form action="" method="post" id="wpc_comm_form-760_0" class="wpc_comm_form wpc_main_form  wpc-no-comments">
                                             <div class="wpc-field-comment">
                                                <div style="width:60px; float:left; position:absolute;">
                                                   <img width="48" height="48" class="avatar avatar-48 photo avatar-default" src="https://ohuivietnam.com.vn/wp-content/plugins/woodiscuz-woocommerce-comments/files/img/avatar_default.png" alt="">                        
                                                </div>
                                                <div style="margin-left:65px;" class="woodiscuz-item">
                                                   <textarea id="wpc_comment-760_0" class="wpc_comment" name="wpc_comment" required="" placeholder="Nhập ý kiến" style="overflow: hidden; min-height: 2em; height: 48px;"></textarea>
                                                   <div class="autogrow-textarea-mirror" style="display: none; overflow-wrap: break-word; padding: 3px; width: 722px; font-family: Lato, sans-serif; font-size: 14px; line-height: 20px;">.<br>.</div>
                                                </div>
                                                <div style="clear:both"></div>
                                             </div>
                                             <div id="wpc-form-footer-760_0" class="wpc-form-footer">
                                                <div class="wpc-author-data">
                                                   <div class="wpc-field-name woodiscuz-item"><input id="wpc_name-760_0" class="wpc_name" name="wpc_name" required="required" value="" type="text" placeholder="Tên"></div>
                                                   <div class="wpc-field-email woodiscuz-item"><input id="wpc_email-760_0" class="wpc_email email" name="wpc_email" required="required" value="" type="email" placeholder="Email"></div>
                                                   <div style="clear:both"></div>
                                                </div>
                                                <div class="wpc-form-submit">
                                                   <div class="wpc-field-captcha woodiscuz-item">
                                                      <input id="wpc_captcha-760_0" name="wpc_captcha" required="required" value="" type="text">
                                                      <span class="wpc-label wpc-captcha-label">
                                                      <img src="https://ohuivietnam.com.vn/wp-content/plugins/woodiscuz-woocommerce-comments/captcha/captcha.php?comm_id=760-0" id="wpc_captcha_img-760_0">
                                                      <img src="https://ohuivietnam.com.vn/wp-content/plugins/woodiscuz-woocommerce-comments/files/img/refresh-16x16.png" id="wpc_captcha_refresh_img-760_0" class="wpc_captcha_refresh_img">
                                                      </span>
                                                      <span class="captcha_msg">Vui lòng nhập mã</span>
                                                   </div>
                                                   <div class="wpc-field-submit">
                                                      <div class="wpc_notification_checkboxes" style="display: block;">
                                                         <input type="checkbox" id="wpc_notification_new_reply-760_0" class="wpc_notification_new_reply" name="wpc_notification_new_reply-760_0" value="wpc_notification_new_reply"> 
                                                         <label class="wpc-label-reply-notify" for="wpc_notification_new_reply-760_0">Thông báo khi có trả lời mới</label>
                                                      </div>
                                                      <input type="button" name="submit" value="Gửi đi" id="wpc_comm-760_0" class="wpc_comm_submit button alt">
                                                   </div>
                                                   <div style="clear:both"></div>
                                                </div>
                                             </div>
                                             <input type="hidden" name="wpc_comment_post_ID" value="760" id="wpc_comment_post_ID-760_0">
                                             <input type="hidden" name="wpc_comment_parent" value="0" id="wpc_comment_parent-760_0">
                                          </form>
                                          <input type="hidden" name="wpc_home_url" value="https://ohuivietnam.com.vn/wp-content/plugins" id="wpc_home_url">
                                          <input type="hidden" name="wpc_plugin_dir_url" value="woodiscuz-woocommerce-comments" id="wpc_plugin_dir_url">
                                       </div>
                                       <hr>
                                       <div class="wpc-thread-wrapper">
                                       </div>
                                       <div style="clear:both"></div>
                                       <div id="wpc_openModalFormAction" class="modalDialog">
                                          <div id="wpc_response_info" class="wpc_modal">
                                             <div id="wpc_response_info_box">
                                                <a href="#close" title="Close" class="close">&nbsp;</a>
                                                <img width="64" height="64" src="https://ohuivietnam.com.vn/wp-content/plugins/woodiscuz-woocommerce-comments/files/img/loader/ajax-loader-200x200.gif">
                                             </div>
                                          </div>
                                       </div>
                                    </div> -->
                                 </div>
                              </div>
                              <div class="product-fb-comment">
                                 <div id="fb-root"></div>
                                 <script src="{{$setting->facebook}}"></script>
                                 <fb:comments href="" width="100%" class=" fb_iframe_widget fb_iframe_widget_fluid_desktop" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=1767809743462404&amp;container_width=869&amp;height=100&amp;href=https%3A%2F%2Fohuivietnam.com.vn%2Fsan-pham%2Fsum-37-dear-flora-enchanted-lip-creamer%2F&amp;locale=en_US&amp;sdk=joey" style="width: 100%;"><span style="vertical-align: bottom; width: 100%; height: 178px;"><iframe name="f38cd705f2c6a58" width="1000px" height="100px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:comments Facebook Social Plugin" src="https://www.facebook.com/plugins/comments.php?app_id=1767809743462404&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2Fvy-MhgbfL4v.js%3Fversion%3D44%23cb%3Df394270758ca06%26domain%3Dohuivietnam.com.vn%26origin%3Dhttps%253A%252F%252Fohuivietnam.com.vn%252Ff2243d3528de4bc%26relation%3Dparent.parent&amp;container_width=869&amp;height=100&amp;href=https%3A%2F%2Fohuivietnam.com.vn%2Fsan-pham%2Fsum-37-dear-flora-enchanted-lip-creamer%2F&amp;locale=en_US&amp;sdk=joey" style="border: none; visibility: visible; width: 100%; height: 178px;" class=""></iframe></span></fb:comments>
                              </div>
                           </div>
                        </div>
                        <div class="relate-product-wrap">
                           <div class="content-pad content-bg relate-pr-in">
                              <div class="related products">
                                 <div class="subcat-title">
                                    <h3>Sản phẩm liên quan</h3>
                                    <div class="right"><i class="fa fa-angle-right"></i></div>
                                 </div>
                                <div class="shop-products category_products">
                                    <div class="relate-product-carousel">
                                       <div class="owl-wrapper-outer">
                                          <div id="owl-relate" class="owl-wrapper">
                                            <?php $splq = DB::table('products')->select()->where('status',1)->where('cate_id',$product_detail->cate_id)->where('name','<>',$product_detail->name)->get(); ?>
                                            @foreach(@$splq as $sp)
                                            <div class="product-item product-cat-item">
                                                <div class="product-image">
                                                   <a href="{{url('san-pham/'.$sp->alias.'.html')}}" title="{{$sp->name}}">
                                                      <img width="300" height="300" src="{{asset('upload/product/'.$sp->photo)}}" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="{{$sp->name}}" srcset="{{asset('upload/product/'.$sp->photo)}} 300w, {{asset('upload/product/'.$sp->photo)}} 100w, {{asset('upload/product/'.$sp->photo)}} 150w" sizes="(max-width: 300px) 100vw, 300px" />                    
                                                      <div class="phone-image">
                                                         <div class="textwidget">{{$setting->phone}}</div>
                                                      </div>
                                                   </a>
                                                </div>
                                                <h2 class="product-name">
                                                   <a href="{{url('san-pham/'.$sp->alias.'.html')}}">
                                                 {{$sp->name}}</a>
                                                </h2>
                                                <div class="price-box">
                                                   @if(isset($sp->price_old) && ($sp->price_old != 0 ) ) 
                                                        <del><span class="woocommerce-Price-amount amount">{{$sp->price_old}}<span class="woocommerce-Price-currencySymbol">₫</span></span>
                                                        </del> <ins><span class="woocommerce-Price-amount amount">{{$sp->price}}<span class="woocommerce-Price-currencySymbol">₫</span></span></ins>
                                                        @else  
                              
                                                        </del> <ins><span class="woocommerce-Price-amount amount">{{$sp->price}}<span class="woocommerce-Price-currencySymbol">₫</span></span></ins>  
                                                    @endif            
                                                </div>
                                            </div>
                                            @endforeach
                                          </div>
                                       </div>
                                       <!--owl-wrapper-->
                                    </div>
                                 </div>
                              </div>
                              <script type="text/javascript">
                                 jQuery.noConflict();
                                 jQuery(function() {
                                    var person = jQuery("#owl-relate")
                                    person.owlCarousel({
                                       items : 5,
                                       nav: true,
                                       margin: 10,
                                       loop:true,
                                       autoplay: true,
                                       dots: false,
                                       autoplayTimeout: 4500,
                                       autoplaySpeed: 800,
                                       dotsSpeed: 800,
                                       autoplayHoverPause: true,
                                       responsiveClass:true,
                                       responsive:{
                                          0:{
                                             items:2,
                                          },
                                          480:{
                                             items:3,
                                          },
                                          768:{
                                             items:4,
                                          },
                                          992:{
                                             items:5,
                                          }
                                       }
                                    });
                                 });
                              </script>
                           </div>
                        </div>
                     </div>
                     <!-- #product-760 -->
                  </div>
                @include('templates.layout.sibar')
               </div>
            </main>
         </div>
      </div>
   </div>
</div>
@endsection
