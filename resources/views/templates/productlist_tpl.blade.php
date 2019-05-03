@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
   
?>
<div id="content" class="site-content">
   <div class="gray_bg"></div>
   <div id="primary" class="content-area">
      <div id="main" class="site-main" role="main">
         <div class="shop-archive">
            <div class="container">
               <div id="primary" class="content-area">
                  <main id="main" class="site-main" role="main">
                     <div class="bottom10 content-pad">
                        <div class="woo-breadcrumb breadcrumbs" itemprop="breadcrumb"><a href="{{url('')}}">Trang chủ</a><i class="fa fa-angle-right"></i>{{$product_list->name}}</div>
                     </div>
                     <div class="filter-shop">
                        <div class="filter-title">
                           <h1 class="page-title">{{$product_list->name}}</h1>
                         
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xs-12 col-sm-9 grid-product">
                           <div class="woocommerce-notices-wrapper"></div>
                          
                           <div class="clearfix"></div>
                           <div class="shop-products category_products">
                              <div class="row" style="margin-bottom: 30px;">
                                 @foreach(@$products as $value)
                                 <div class="product-item product-cat-item">
                                    <div class="product-image">
                                       <a href="{{url('san-pham/'.$value->alias.'.html')}}" title="{{$value->name}}">
                                          <img width="300" height="300" src="{{asset('upload/product/'.$value->photo)}}" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="{{$value->name}}" srcset="{{asset('upload/product/'.$value->photo)}} 300w, {{asset('upload/product/'.$value->photo)}} 100w, {{asset('upload/product/'.$value->photo)}} 150w" sizes="(max-width: 300px) 100vw, 300px">                   
                                          <div class="phone-image">
                                             <div class="textwidget">{{$setting->phone}}</div>
                                          </div>
                                       </a>
                                    </div>
                                    <h2 class="product-name">
                                       <a href="{{url('san-pham/'.$value->alias.'.html')}}">{{$value->name}}</a>
                                    </h2>
                                    <div class="price-box">
                                       <span class="woocommerce-Price-amount amount">{{$value->price}}<span class="woocommerce-Price-currencySymbol">₫</span></span>         
                                    </div>
                                 </div>
                                 @endforeach
                              </div>
                           </div>
                           <nav class="woocommerce-pagination content-bg">
                              <ul class="page-numbers">
                                 <li><span aria-current="page" class="page-numbers current">{{$products->links()}}</span></li>
                                
                              </ul>
                           </nav>
                        </div>
                        @include('templates.layout.sibar')
                     </div>
                  </main>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
