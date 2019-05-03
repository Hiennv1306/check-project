@extends('index')
@section('content')

<?php
$setting = Cache::get('setting');
$sliders = DB::table('slider')->select()->where('status',1)->where('com','gioi-thieu')->orderBy('created_at','desc')->get();
$category = \App\ProductCate::where('status',1)->where('parent_id',0)->orderby('id','desc')->take(3)->get();

?>
<div id="content" class="site-content">
    <div class="gray_bg"></div>
    <div class="slider-wrap">
       <div class="container">
          <div class="row">
             <div class="col-slider col-sm-9 slider-container">
  
                <div style="max-width: 850px;" class="metaslider metaslider-nivo metaslider-56 ml-slider">
                    
                    <div id="metaslider_container_56">
                        <div class='slider-wrapper theme-light'>
                            <div class='ribbon'></div>
                            <div id='metaslider_56' class='nivoSlider'>
                              @foreach(@$sliders as $sl )
                                <img src="{{asset('upload/hinhanh/'.$sl->photo)}}" height="250" width="850" alt="" class="slider-56 slide-552" />
                              @endforeach
                            </div>
                        </div>
                        
                    </div>
                    <script type="text/javascript">
                        var metaslider_56 = function($) {
                            $('#metaslider_56').nivoSlider({ 
                                boxCols:7,
                                boxRows:5,
                                pauseTime:3000,
                                effect:"fade",
                                controlNav:true,
                                directionNav:true,
                                pauseOnHover:true,
                                animSpeed:600,
                                prevText:"&lt;",
                                nextText:"&gt;",
                                slices:15,
                                manualAdvance:false
                            });
                        };
                        var timer_metaslider_56 = function() {
                            var slider = !window.jQuery ? window.setTimeout(timer_metaslider_56, 100) : !jQuery.isReady ? window.setTimeout(timer_metaslider_56, 1) : metaslider_56(window.jQuery);
                        };
                        timer_metaslider_56();
                    </script>
                </div>
             </div>
             <div class="col-slider col-sm-3 ads-area">
                <a href="#" id="ads1" target="_self" class="widget_sp_image-image-link" title="Ohui" rel=""><img width="330" height="120" alt="Ohui" class="attachment-full aligncenter" style="max-width: 100%;" src="https://ohuivietnam.com.vn/wp-content/uploads/2017/02/banner-1.jpg"></a><a href="#" id="" target="_self" class="widget_sp_image-image-link" title="Whoo" rel=""><img width="330" height="120" alt="Whoo" class="attachment-full aligncenter" style="max-width: 100%;" src="https://ohuivietnam.com.vn/wp-content/uploads/2017/02/banner-2.jpg"></a>                  
             </div>
          </div>
       </div>
    </div>
    <div id="primary" class="content-area">
       <div id="main" class="site-main" role="main">
          <div class="container">
             <div class="row">
                <div class="col-xs-12 col-sm-9 grid-product">
                  @foreach(@$category as $ct)
                    <div class="product-item-wrap">
                      <div class="heading-product">
                         <h2>
                            <a href="{{url('san-pham/'.$ct->alias)}}" title="{{ $ct->name }}">
                            {{  $ct->name }}                   </a>
                         </h2>
                         <div class="view-all">
                            <a href="{{url('san-pham/'.$ct->alias)}}" title=" {{ $ct->name }}">
                            Xem tất cả
                            </a>
                         </div>
                      </div>
                      <div class="shop-products list-product">
                        <?php 
                            $cateChilds = \App\ProductCate::where('parent_id', $ct->id)->get();
                            $ids[] = $ct->id;

                            foreach($cateChilds as $child){
                              $ids[] = $child->id;
                            }
                            // $products = DB::table('products')->whereIn('cate_id',$ids)->get();

                         ?>
                        @foreach(@$ct->products as $pr)
                         <div class="product-item product-cat-item">
                            <div class="product-image">
                               <a href="{{url('san-pham/'.$pr->alias.'.html')}}" title="">
                                  <img width="300" height="300" src="{{asset('upload/product/'.$pr->photo)}}" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="Ohui Day Shield Perfect Sun Red SPF50+/PA+++ –  Kem chống nắng dành cho da ửng đỏ" srcset="{{asset('upload/product/'.$pr->photo)}} 300w, {{asset('upload/product/'.$pr->photo)}} 100w, {{asset('upload/product/'.$pr->photo)}} 150w" sizes="(max-width: 300px) 100vw, 300px">                            
                                  <div class="phone-image">
                                     <div class="textwidget">{{$setting->phone}}</div>
                                  </div>
                               </a>
                            </div>
                            <h2 class="product-name">
                               <a href="{{url('san-pham/'.$pr->alias.'.html')}}">{{$pr->name}}</a>
                            </h2>
                            <div class="price-box">
                               
                              <?php if(isset($pr->price_old)){ ?>
                                <del><span class="woocommerce-Price-amount amount">{{number_format($pr->price_old)}}<span class="woocommerce-Price-currencySymbol">₫</span></span>
                              </del> <ins><span class="woocommerce-Price-amount amount">{{number_format($pr->price)}}<span class="woocommerce-Price-currencySymbol">₫</span></span></ins> 
                              <?php } else { ?>
                              <del> <ins><span class="woocommerce-Price-amount amount">{{number_format($pr->price)}}<span class="woocommerce-Price-currencySymbol">₫</span></span></ins> </del>
                                <?php } ?>
                            </div>
                         </div>
                        @endforeach
                      </div>
                    </div>
                   @endforeach
                   <p>&nbsp;</p>
                </div>
                @include('templates.layout.sibar')
             </div>
          </div>
       </div>
    </div>
</div>
@endsection
