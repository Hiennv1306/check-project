@extends('index')
@section('content')
<?php 
    $setting = Cache::get('setting');
    $banner = DB::table('slider')->where('com','home')->get();
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
                        <div class="woo-breadcrumb breadcrumbs" itemprop="breadcrumb"><a href="{{url('')}}">Trang chủ</a><i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i>Kết quả tìm kiếm cho “{{$txtSearch}}”</div>
                     </div>
                     <div class="filter-shop">
                        <div class="filter-title">
                           <h1 class="page-title">Kết quả tìm kiếm: “{{$txtSearch}}”</h1>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xs-12 col-sm-9 grid-product">
                           <div class="woocommerce-notices-wrapper"></div>
                           
                           <div class="clearfix"></div>
                           <div class="shop-products category_products">
                              <div class="row">
                                 @foreach($data as $item)
                                 <div class="product-item product-cat-item">
                                    <div class="product-image">
                                       <a href="{{url('san-pham/'.$item->alias.'.html')}}" title="{{$item->name}}">
                                          <img width="300" height="300" src="{{asset('upload/product/'.$item->photo)}}">                           
                                          <div class="phone-image">
                                             <!-- <div class="textwidget">0975.979.286</div> -->
                                          </div>
                                       </a>
                                    </div>
                                    <h2 class="product-name">
                                       <a href="{{url('san-pham/'.$item->alias.'.html')}}">
                                       {{$item->name}}</a>
                                    </h2>
                                    <div class="price-box">
                                       <span class="woocommerce-Price-amount amount">{{number_format($item->price)}}<span class="woocommerce-Price-currencySymbol">₫</span></span>          
                                    </div>
                                 </div>
                                 @endforeach
                              </div>
                           </div>
                           
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