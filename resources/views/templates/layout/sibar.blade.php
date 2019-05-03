<?php 
   $setting = Cache::get('setting');
   $products = DB::table('products')->select()->where('status',1)->where('noibat',1)->orderBy('id','desc')->take(5)->get();
   $products_bc = DB::table('products')->select()->where('status',1)->where('spbc',1)->where('noibat',0)->orderBy('id','desc')->take(5)->get();
   
   $category = DB::table('product_categories')->where('status',1)->where('parent_id',0)->get();

?>
<div class="col-sm-3 col-xs-12 product-sidebar col-sidebar">
   <aside id="secondary" class="widget-area" role="complementary">
      <section id="execphp-3" class="widget widget_execphp">
         <div class="subcat-title">
            <h3>SẢN PHẨM HOT</h3>
            <div class="right"><i class="fa fa-angle-right"></i></div>
         </div>
         <div class="execphpwidget">
            <div class="best_selling_product-list hot-product">
               @foreach($products as $pr)
               <div class="product-item product-cat-item">
                     <div class="product-image">
                        <a href="{{url('san-pham/'.$pr->alias.'.html')}}" title="{{$pr->name}}">
                           <img width="300" height="300" src="{{asset('upload/product/'.$pr->photo)}}" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="{{$pr->name}}" srcset="{{asset('upload/product/'.$pr->photo)}} 300w, {{asset('upload/product/'.$pr->photo)}} 100w, {{asset('upload/product/'.$pr->photo)}} 150w" sizes="(max-width: 300px) 100vw, 300px">                   
                           <div class="phone-image">
                              <div class="textwidget">{{$setting->phone}}</div>
                           </div>
                        </a>
                     </div>
                     <h2 class="product-name">
                        <a href="{{url('san-pham/'.$pr->alias.'.html')}}">{{$pr->name}}</a>
                     </h2>
                     <div class="price-box">
                        @if(isset($pr->price_old) && ($pr->price_old != 0 ) ) 
                        <del><span class="woocommerce-Price-amount amount">{{$pr->price_old}}<span class="woocommerce-Price-currencySymbol">₫</span></span>
                        </del> <ins><span class="woocommerce-Price-amount amount">{{$pr->price}}<span class="woocommerce-Price-currencySymbol">₫</span></span></ins>
                        @else  
                        
                         </del> <ins><span class="woocommerce-Price-amount amount">{{$pr->price}}<span class="woocommerce-Price-currencySymbol">₫</span></span></ins>  
                        @endif    
                     </div>
               </div>
               @endforeach
            </div>
         </div>
      </section>
      <section id="text-11" class="widget widget_text">
         <div class="subcat-title">
            <h3>Sản phẩm bán chạy</h3>
            <div class="right"><i class="fa fa-angle-right"></i></div>
         </div>
         <div class="textwidget">
            <div class="best_selling_product-list">
               <div class="best-product-list">
                  @foreach($products_bc as $bc)
                     <div class="product-item product-cat-item">
                           <div class="product-image">
                              <a href="{{url('san-pham/'.$bc->alias.'.html')}}" title="{{$bc->name}}">
                                 <img width="300" height="300" src="{{asset('upload/product/'.$bc->photo)}}" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="{{$bc->name}}" srcset="{{asset('upload/product/'.$bc->photo)}} 300w, {{asset('upload/product/'.$bc->photo)}} 100w, {{asset('upload/product/'.$bc->photo)}} 150w" sizes="(max-width: 300px) 100vw, 300px">                   
                                 <div class="phone-image">
                                    <div class="textwidget">{{$setting->phone}}</div>
                                 </div>
                              </a>
                           </div>
                           <h2 class="product-name">
                              <a href="{{url('san-pham/'.$bc->alias.'.html')}}">{{$bc->name}}</a>
                           </h2>
                           <div class="price-box">
                              @if(isset($bc->price_old) && ($bc->price_old != 0 ) ) 
                              <del><span class="woocommerce-Price-amount amount">{{$bc->price_old}}<span class="woocommerce-Price-currencySymbol">₫</span></span>
                              </del> <ins><span class="woocommerce-Price-amount amount">{{$bc->price}}<span class="woocommerce-Price-currencySymbol">₫</span></span></ins>
                              @else  
                              
                               </del> <ins><span class="woocommerce-Price-amount amount">{{$bc->price}}<span class="woocommerce-Price-currencySymbol">₫</span></span></ins>  
                              @endif    
                           </div>
                     </div>
                  @endforeach                
               </div>
            </div>
         </div>
      </section>
      <section id="text-8" class="widget widget_text">
         <div class="textwidget">
            <div class="help_all">
               <div class="help-in">
                  <div class="title">hỗ trợ khách hàng</div>
                  <div class="phoneno">
                     <p><b>{{$setting->hotline}} - {{$setting->phone}}</b></p>
                  </div>
               </div>
               <div class="email"></div>
            </div>
         </div>
      </section>
      @foreach(@$category as $cg)
      <section id="nav_menu-7" class="widget widget_nav_menu">
         <div class="subcat-title">
            <h3>{{$cg->name}}</h3>
            <div class="right"><i class="fa fa-angle-right"></i></div>
         </div>
         <div class="menu-ohui-menu-container">
            <ul id="menu-ohui-menu" class="menu">
               <?php  $product = DB::table('product_categories')->where('status',1)->where('parent_id', $cg->id)->get(); ?>
               @foreach(@$product as $sp)
               <li id="menu-item-370" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-370"><a href="{{url('san-pham/'.$sp->alias)}}">{{$sp->name}}</a></li>
               @endforeach
             <!--  loop -->
            </ul>
         </div>
      </section>
      @endforeach
      <section id="text-14" class="widget widget_text">
         <div class="subcat-title">
            <h3>FACEBOOK FANPAGE</h3>
            <div class="right"><i class="fa fa-angle-right"></i></div>
         </div>
         <div class="textwidget">
            <div id="fb-root" class=" fb_reset">
               <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
                  <div><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="{{$setting->facebook}}" style="border: none;"></iframe></div>
                  <div></div>
               </div>
            </div>
            <script>(function(d, s, id) {
               var js, fjs = d.getElementsByTagName(s)[0];
               if (d.getElementById(id)) return;
               js = d.createElement(s); js.id = id;
               js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1767809743462404";
               fjs.parentNode.insertBefore(js, fjs);
               }(document, 'script', 'facebook-jssdk'));
            </script>
            <div class="fb-page fb_iframe_widget" data-href="{{$setting->facebook}}" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=1767809743462404&amp;container_width=265&amp;hide_cover=false&amp;href=https%3A%2F%2Ffacebook.com%2Fhttpmyphamohuihanquoc.com.vn%2F&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false"><span style="vertical-align: bottom; width: 265px; height: 214px;"><iframe name="f345545f891e2b4" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:page Facebook Social Plugin" src="{{$setting->facebook}}" style="border: none; visibility: visible; width: 265px; height: 214px;" class=""></iframe></span></div>
         </div>
      </section>
   </aside>
</div>