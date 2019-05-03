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
             <div class="mag-top">
                <div class="row">
                   <div class="col-sm-9 col-main-content">
                      <ul id="breadcrumbs" class="bottom10 content-pad content-bg breadcrumbs">
                         <li class="item-home"><a class="bread-link bread-home" href="{{url('')}}" title="Trang chủ">Trang chủ</a></li>
                         <li class="separator separator-home"> <i class="fa fa-angle-right"></i> </li>
                         <li class="item-cat"><a href="https://ohuivietnam.com.vn/category/uncategorized/">Uncategorized</a></li>
                         <li class="separator"> <i class="fa fa-angle-right"></i> </li>
                         <li class="item-current item-923"><span class="bread-current bread-923" title="">{{$news_detail->name}}</span></li>
                      </ul>
                      <div class="content-pad content-bg main-content">
                         <div id="post-923" class="post-923 post type-post status-publish format-standard hentry category-uncategorized">
                            <div class="page-title-head">
                               <h1 class="entry-title">{{$news_detail->name}}</h1>
                            </div>
                            <!-- .entry-header -->
                           <!--  <div class="entry-meta">
                               <div class="entry-meta-data">
                                  <span class="post-time">
                                  <i class="fa fa-calendar" aria-hidden="true"></i>
                                  <a href="https://ohuivietnam.com.vn/chinh-sach-doi-tra-hang/" title="22:10">
                                  26/01/2019                </a>
                                  </span>
                                  <span class="comments-count">
                                  <i class="fa fa-comment" aria-hidden="true"></i>
                                  <a href="https://ohuivietnam.com.vn/chinh-sach-doi-tra-hang/#respond">Để lại tin nhắn</a></span>           
                               </div>
                            </div> -->
                            <!-- .entry-meta -->
                            <div class="entry-content">
                               {!!$news_detail -> content!!}}
                               <div class="kk-star-ratings bottom-right rgt" data-id="3726">
                                  <div class="kksr-stars kksr-star gray"></div>
                               </div>
                            </div>
                            <!-- .entry-content -->
                         </div>
                         <div id="comments" class="comments-area">
                            <div id="respond" class="comment-respond">
                               <h3 id="reply-title" class="comment-reply-title">Trả lời <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Hủy</a></small></h3>
                               <form action="{{route('postContact')}}" method="post" id="" class="comment-form" novalidate>
                                {{csrf_field()}}
                                  <p class="comment-notes"><span id="email-notes">Email của bạn sẽ không được hiển thị công khai.</span> Các trường bắt buộc được đánh dấu <span class="required">*</span></p>
                                  <p class="comment-form-comment"><label for="comment">Bình luận</label> <textarea id="comment" name="content" cols="45" rows="8" maxlength="65525" required="required"></textarea></p>
                                  <p class="comment-form-author"><label for="author">Tên <span class="required">*</span></label> <input id="author" name="name" type="text" value="" size="30" maxlength="245" required='required' /></p>
                                  <p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" required='required' /></p>
                                  <p class="comment-form-url"><label for="url">Trang web</label> <input id="url" name="website" type="url" value="" size="30" maxlength="200" /></p>
                                  <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Phản hồi" /> 
                            
                                  </p>
                               </form>
                            </div>
                            <!-- #respond -->
                         </div>
                         <!-- #comments -->
                         <div class="relate-post">
                            <div class="subcat-title">
                               <h3>
                                  Bài viết liên quan
                               </h3>
                               <div class="right"><i class="fa fa-angle-right"></i></div>
                            </div>
                            <div class="row">
                                @foreach( @$baiviet_khac as $bvk )
                               <div class="col-sm-4 news-item">
                                  <div id="post-567" class="post-567 post type-post status-publish format-standard hentry category-khuyen-mai">
                                     <h2>
                                        <a href="{{url('dich-vu/'.$bvk->alias)}}" title="{{$bvk ->name}}">{{ $bvk->name }}</a>
                                     </h2>
                                    
                                     <!-- .entry-meta -->
                                     <div class="short-desc">
                                     </div>
                                     <div class="more">
                                        <a href="{{url('dich-vu/'.$bvk->alias)}}" title="{{$bvk ->name}}">Xem tiếp</a>
                                     </div>
                                  </div>
                               </div>
                               @endforeach
                            </div>
                         </div>
                      </div>
                   </div>
                   @include('templates.layout.sibar')
                </div>
             </div>
          </div>
       </div>
       <!-- #main -->
    </div>
</div>
@endsection

