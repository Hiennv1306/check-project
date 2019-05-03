<?php
    $setting = Cache::get('setting');
    $category = DB::table('product_categories')->where('status',1)->where('parent_id',0)->get();
    $category_news = DB::table('news')->where('status',1)->get();
?>
<div id="masthead" class="site-header">
    <div class="top-header">
       <div class="container">
          <div class="row">
             <div class="col-sm-3 logo-site">
                <a href="{{url('')}}">
                <img width="300" height="79" alt="logo" class="attachment-full" style="max-width: 100%;" src="{{asset('upload/hinhanh/'.$setting->photo)}}">                                                  </a>
             </div>
             <div class="col-sm-9 header-right">
                <div class="topmenu">
                   <div class="menu-top-menu-container">
                      <ul id="top-menu" class="menu">
                         <li id="menu-item-323" class="fa fa-gift menu-item menu-item-type-taxonomy menu-item-object-category menu-item-323"><a href="#">Tin tức</a></li>
                         <li id="menu-item-933" class="fa fa-bookmark menu-item menu-item-type-post_type menu-item-object-post menu-item-933"><a href="#">Chính sách đổi trả hàng</a></li>
                      </ul>
                   </div>
                </div>
                <div class="header-search-wrap">
                   <div class="row">
                      <div class="col-sm-8 search-wrap">
                         <div class="header-search">
                            <form role="search" method="get" class="woocommerce-product-search" action="{{route('search')}}">
                               <input type="text" name="txtSearch" class="searchbox" maxlength="128" value="" placeholder="Tìm sản phẩm">
                               <select name="product_cat" id="product_cat" class="cate-dropdown hidden-xs">
                                  <option value="">—DANH MỤC—</option>
                                  @foreach($category as $ca)
                                  <option class="level-0" value="{{$ca->id}}">{{ $ca->name }}</option>
                                   <?php  $product = DB::table('product_categories')->where('status',1)->where('parent_id', $ca->id)->get(); ?>
                                    @if($product)
                                    @foreach($product as $kq)
                                    <option class="level-1" value="{{$kq->id}}">&nbsp;&nbsp;&nbsp;{{ $kq->name }}</option>
                                     @endforeach
                                    @endif
                                  @endforeach
                               </select>
                               <!-- <input type="hidden" value="product" name="post_type">/ -->
                               <button type="submit" title="Tìm kiếm" class="search-btn-bg">Tìm kiếm</button>
                            </form>
                         </div>
                      </div>
                      <div class="col-sm-4 header-cart-area">
                         <div class="header-notify">
                            <ul>
                               <li class="notify-li">
                                  <div class="header-cart">
                                    <a href="{{url('gio-hang')}}">
                                     <div class="cart togg">
                                        <span id="shopping_cart" class="shopping_cart tog" title="Xem giỏ hàng">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        <a class="cart-contents" href="" title="Xem giỏ hàng"></span></a> 
                                        </span>
                                     </div>
                                     </a>
                                  </div>
                               </li>
                            </ul>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="main-menu menu-container">
       <div class="container">
          <div class="navbar-header">
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             </button>
             <span class="menu-text">Menu</span>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
             <div class="navbar-inner">
                <ul id="menu-main-menu" class="nav navbar-nav">
                   <li id="menu-item-273" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-32 current_page_item menu-item-273 active"><a title="Trang chủ" href="{{url('')}}">Trang chủ</a></li>
                   <li id="menu-item-332" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-332"><a title="Giới thiệu" href="{{url('gioi-thieu')}}">Giới thiệu</a></li>
                  @foreach(@$category as $mp)
                   <li id="menu-item-287" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-287 dropdown">
                      <a title="{{$mp->name}}" href="{{url('san-pham/'.$mp->alias)}}" data-hover="dropdown" class="dropdown-toggle" aria-haspopup="true">{{ $mp->name }}</a>
                      <ul role="menu" class=" dropdown-menu" style="display: none;">
                        <?php  $product = DB::table('product_categories')->where('status',1)->where('parent_id', $mp->id)->get(); ?>
                        @if($product)
                        @foreach($product as $pr)
                         <li id="menu-item-333" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-333"><a title="" href="{{url('san-pham/'.$pr->alias)}}">{{ $pr ->name}}</a></li>
                        @endforeach
                        @endif
                       <!--  loop -->
                      </ul>
                   </li>
                   @endforeach
                   <li id="menu-item-287" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-287 dropdown">
                      <a title="" href="" data-hover="dropdown" class="dropdown-toggle" aria-haspopup="true">Dịch vụ</a>
                      <ul role="menu" class=" dropdown-menu" style="display: none;">
                        @foreach(@$category_news as $ne)
                         <li id="menu-item-333" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-333"><a title="" href="{{url('dich-vu/'.$ne->alias)}}">{{ $ne->name }}</a></li>
                        @endforeach
                      </ul>
                   </li>
                </ul>
             </div>
          </div>
       </div>
    </div>
</div>