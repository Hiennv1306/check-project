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
                <li class="item-current item-6"><span class="bread-current bread-6"> Giỏ hàng</span></li>
             </ul>
             <div class="content-pad content-bg page-in">
                <article id="post-6" class="post-6 page type-page status-publish hentry">
                   <header class="entry-header">
                      <h1 class="entry-title">Giỏ hàng</h1>
                   </header>
                   <!-- .entry-header -->
                   <div class="entry-content">
                      <div class="woocommerce">
                         <div class="woocommerce-notices-wrapper"></div>
                         <form action="{{route('thanhtoan')}}" method="post">
                            <table class="shop_table shop_table_responsive cart" cellspacing="0">
                               <thead>
                                  <tr>
                                     <th class="product-remove">&nbsp;</th>
                                     <th class="product-thumbnail">&nbsp;</th>
                                     <th class="product-name">Sản phẩm</th>
                                     <th class="product-price">Giá</th>
                                     <th class="product-quantity">Số lượng</th>
                                     <th class="product-subtotal">Tổng cộng</th>
                                  </tr>
                               </thead>
                               <tbody>
                                @foreach(@$product_cart as $key => $pr)
                                  <tr class="cart_item">
                                     <td class="product-remove">
                                        <a href="{{route('xoa-gio-hang', $key)}}" class="remove" title="Xóa sản phẩm này" data-product_id="877" data-product_sku="">&times;</a>               
                                     </td>
                                     <td class="product-thumbnail">
                                        <a href="{{url('san-pham/'.$pr->alias.'.html')}}"><img width="300" height="300" src="{{asset('upload/product/'.$pr->photo)}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="{{asset('upload/product/'.$pr->photo)}} 300w, {{asset('upload/product/'.$pr->photo)}} 100w, {{asset('upload/product/'.$pr->photo)}} 150w" sizes="(max-width: 300px) 100vw, 300px" /></a>               
                                     </td>
                                     <td class="product-name" data-title="Sản phẩm">
                                        <a href="{{url('san-pham/'.$pr->alias.'.html')}}">{{$pr->name}}</a>               
                                     </td>
                                     <td class="product-price" data-title="Giá">
                                        <span class="woocommerce-Price-amount amount">{{number_format($pr->price)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>              
                                     </td>
                                     <td class="product-quantity" data-title="Số lượng">
                                        <div class="quantity">
                                           <label class="screen-reader-text" for="quantity_5c6fad4781bef">Số lượng</label>
                                           <input
                                              type="number"
                                              id="quantity_5c6fad4781bef"
                                              class="input-text qty text"
                                              step="1"
                                              min="0"
                                              max=""
                                              name="cart[352407221afb776e3143e8a1a0577885][qty]"
                                              value="{{$pr->qty}}"
                                              title="SL"
                                              size="4"
                                              pattern="[0-9]*"
                                              inputmode="numeric"
                                              aria-labelledby="Ohui Miracle Moisture Cleansing Foam 160ml -  sữa rửa mặt giúp cung cấp chất ẩm số lượng" />
                                        </div>
                                     </td>
                                     <td class="product-subtotal" data-title="Tổng cộng">
                                        <span class="woocommerce-Price-amount amount">{{number_format($pr->qty * $pr->price)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>              
                                     </td>
                                  </tr>
                                @endforeach 
                               </tbody>
                            </table>
                         </form>
                         <div class="cart-collaterals">
                            <div class="cart_totals calculated_shipping">
                               <h2>Cart Totals</h2>
                               <table cellspacing="0" class="shop_table shop_table_responsive">
                                  
                                  <tr class="order-total">
                                     <th>Tổng cộng</th>
                                     <td data-title="Tổng cộng"><strong><span class="woocommerce-Price-amount amount">{{number_format($total)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></strong> </td>
                                  </tr>
                               </table>
                               <div class="wc-proceed-to-checkout">
                                  <a href="{{route('thanhtoan')}}" class="checkout-button button alt wc-forward">
                                  Proceed to Checkout</a>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <!-- .entry-content -->
                </article>
                <!-- #post-## -->
             </div>
          </div>
       </div>
       <!-- #main -->
    </div>
    <!-- #primary -->
 </div>
@endsection
