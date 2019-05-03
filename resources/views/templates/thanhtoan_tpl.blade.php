@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
<div id="content" class="site-content">
    <div class="gray_bg"></div>
    <div id="primary" class="content-area">
       <div id="main" class="site-main" role="main">
          <div class="container">
             <ul id="breadcrumbs" class="bottom10 content-pad content-bg breadcrumbs">
                <li class="item-home"><a class="bread-link bread-home" href="https://ohuivietnam.com.vn" title="Trang chủ">Trang chủ</a></li>
                <li class="separator separator-home"> <i class="fa fa-angle-right"></i> </li>
                <li class="item-current item-7"><span class="bread-current bread-7"> Thanh toán</span></li>
             </ul>
             <div class="content-pad content-bg page-in">
                <article id="post-7" class="post-7 page type-page status-publish hentry">
                   <header class="entry-header">
                      <h1 class="entry-title">Thanh toán</h1>
                   </header>
                   <!-- .entry-header -->
                   <div class="entry-content">
                      <div class="woocommerce">
                         <form class="checkout_coupon" method="post" style="display: none;">
                            <p class="form-row form-row-first">
                               <input type="text" name="coupon_code" class="input-text" placeholder="Mã ưu đãi" id="coupon_code" value="">
                            </p>
                            <p class="form-row form-row-last">
                               <input type="submit" class="button" name="apply_coupon" value="Apply Coupon">
                            </p>
                            <div class="clear"></div>
                         </form>
                         <div class="woocommerce-notices-wrapper"></div>
                        <form name="checkout" method="post" class="checkout woocommerce-checkout" action="{{route('postOrder')}}" enctype="multipart/form-data" novalidate="novalidate">
                            {{csrf_field()}}  
                            <div class="form-checkout-wrap">
                               <div class="form-checkout-info left content-pad">
                                  <div id="customer_details">
                                     <div class="woocommerce-billing-fields">
                                        <h3>Billing Details</h3>
                                        <p class="form-row form-row-wide validate-required validate-phone" id="billing_phone_field" data-priority="100">
                                            <label for="billing_phone" class="">Số điện thoại&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label><span class="woocommerce-input-wrapper"><input type="tel" class="input-text " name="phone" id="billing_phone" placeholder="" value="" autocomplete="tel"></span></p>
                                        <p class="form-row form-row-wide validate-required validate-email" id="billing_email_field" data-priority="110">
                                            <label for="billing_email" class="">Địa chỉ email&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label><span class="woocommerce-input-wrapper"><input type="email" class="input-text " name="email" id="billing_email" placeholder="" value="anhien@gmail.com" autocomplete="email username"></span></p>
                                        <p class="form-row billing_last_name validate-required" id="billing_last_name_field" data-priority="">
                                            <label for="billing_last_name" class="">Họ và tên&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="full_name"  placeholder="" value="áda"></span></p>
                                        <p class="form-row form-row-wide address-field validate-required" id="billing_address_1_field" data-priority="50">
                                            <label for="billing_address_1" class="">Địa chỉ&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label><span class="woocommerce-input-wrapper"><textarea name="address" class="input-text " id="billing_address_1" placeholder="Địa chỉ" rows="2" cols="5" autocomplete="address-line1">dá</textarea></span></p>
                                        <p class="form-row form-row-wide address-field" id="billing_address_2_field" data-priority="60"></p>
                                     </div>
                                  </div>
                                  <div id="payment" class="woocommerce-checkout-payment">
                                     <h3>Thông tin thanh toán</h3>
                                     <ul class="wc_payment_methods payment_methods methods">
                                        <li class="wc_payment_method payment_method_cod">
                                           <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="1" id="payment_method" checked="checked" data-order_button_text="">
                                           <label style="cursor: pointer;" for="payment_method_cod">
                                                <img src="https://ohuivietnam.com.vn/wp-content/themes/adult/images/icon_payment1.jpg">
                                           </label>
                                           <div class="payment_box payment_method_cod" style="display: block;">
                                              <p>Quý khách thanh toán tiền mặt trực tiếp cho nhân viên giao hàng ngay sau khi nhận hàng. Áp dụng cho các đơn hàng tại nội thành Hà Nội</p>
                                           </div>
                                        </li>
                                        <li class="wc_payment_method payment_method_bacs">
                                           <input id="payment_method" type="radio" class="input-radio" name="payment_method" value="1" data-order_button_text="">
                                           <label style="cursor: pointer;" for="payment_method_bacs">
                                           <img src="https://ohuivietnam.com.vn/wp-content/themes/adult/images/icon_payment2.jpg">
                                           </label>
                                           <div class="payment_box payment_method_bacs" >
                                              <p><b>Bằng hình thức chuyển khoản qua Ngân hàng </b><br>
                                                 Với các đơn hàng Chuyển phát nhanh, Quý khách vui lòng chuyển tiền vào tài khoản ngân hàng của chúng tôi:
                                              </p>
                                              <p>Ngân hàng: <b>Vietcombank</b><br>
                                                 Chủ tài khoản: <b>Nguyen Thi Luu Phuong</b><br>
                                                 Số tài khoản: <b>0451000242678</b><br>
                                                 Chi nhánh: Ba Đình<br>
                                                 Ngân hàng: <b>Agribank</b><br>
                                                 Chủ tài khoản: <b>Nguyen Thi Luu Phuong</b><br>
                                                 Số tài khoản: <b>1400205362626</b><br>
                                                 Chi nhánh: Agribank chi nhanh Lang Ha
                                              </p>
                                           </div>
                                        </li>
                                     </ul>
                                  </div>
                               </div>
                               <div class="form-checkout-order right content-pad">
                                  <h3 id="order_review_heading">Đơn hàng của bạn</h3>
                                  <div id="order_review" class="woocommerce-checkout-review-order">
                                     <table class="shop_table woocommerce-checkout-review-order-table">
                                        <thead>
                                           <tr>
                                              <th class="product-name">Sản phẩm</th>
                                              <th class="product-total">Tổng cộng</th>
                                           </tr>
                                        </thead>
                                        <tbody>
                                        @foreach(@$product_cart as $pr)
                                           <tr class="cart_item">
                                              <td class="product-name">
                                                 {{$pr->name}}<strong class="product-quantity">× {{$pr->qty}}</strong>                                      
                                              </td>
                                              <td class="product-total">
                                                 <span class="woocommerce-Price-amount amount">{{number_format($pr->price * $pr->qty)}}<span class="woocommerce-Price-currencySymbol">₫</span></span>                 
                                              </td>
                                           </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                           <tr class="cart-subtotal">
                                              <th>Tổng cộng</th>
                                              <td><span class="woocommerce-Price-amount amount">{{number_format($total)}}<span class="woocommerce-Price-currencySymbol">₫</span></span></td>
                                           </tr>
                                           <tr class="order-total">
                                              <th>Tổng cộng</th>
                                              <td><strong><span class="woocommerce-Price-amount amount">{{number_format($total)}}<span class="woocommerce-Price-currencySymbol">₫</span></span></strong> </td>
                                           </tr>
                                        </tfoot>
                                     </table>
                                  </div>
                                  <div class="form-row place-order">
                                     <noscript>
                                        Trình duyệt của bạn không hỗ trợ JavaScript, hoặc nó bị vô hiệu hóa, hãy đảm bảo bạn nhấp vào <em> Cập nhật giỏ hàng </ em> trước khi bạn thanh toán. Bạn có thể phải trả nhiều hơn số tiền đã nói ở trên, nếu bạn không làm như vậy.     <br/><input type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Cập nhật tổng" />
                                     </noscript>
                                     <input type="submit" class="btn-order btn btn-default" name="woocommerce_checkout_place_order" id="place_order" value="Đặt hàng" data-value="Đặt hàng">
                                     <input type="hidden" id="_wpnonce" name="_wpnonce" value="851bcaaa54"><input type="hidden" name="_wp_http_referer" value="/thanh-toan/">
                                  </div>
                                  <div class="woocommerce-shipping-fields">
                                     <h3>Additional Information</h3>
                                     <p class="form-row notes" id="order_comments_field" data-priority=""><label for="order_comments" class="">Ghi chú đơn hàng&nbsp;<span class="optional">(tuỳ chọn)</span></label><span class="woocommerce-input-wrapper"><textarea name="order_comments" class="input-text " id="order_comments" placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn." rows="2" cols="5"></textarea></span></p>
                                  </div>
                               </div>
                            </div>
                         </form>
                      </div>
                      <p>&nbsp;</p>
                   </div>
                   <!-- .entry-content -->
                </article>
                <!-- #post-## -->
             </div>
          </div>
       </div>
       <!-- #main -->
    </div>
 </div>
@endsection