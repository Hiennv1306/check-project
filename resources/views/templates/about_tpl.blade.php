@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $banner = DB::table('banner_content')->where('position', 3)->first();
?>
<div id="content" class="site-content">
    <div class="gray_bg"></div>
    <div id="primary" class="content-area">
       <div id="main" class="site-main" role="main">
          <div class="container">
             <ul id="breadcrumbs" class="bottom10 content-pad content-bg breadcrumbs">
                <li class="item-home"><a class="bread-link bread-home" href="{{url('')}}" title="Trang chủ">Trang chủ</a></li>
                <li class="separator separator-home"> <i class="fa fa-angle-right"></i> </li>
                <li class="item-current item-328"><span class="bread-current bread-328"> Giới thiệu</span></li>
             </ul>
             <div class="content-pad content-bg page-in">
                <article id="post-328" class="post-328 page type-page status-publish hentry">
                   <header class="entry-header">
                      <h1 class="entry-title">Giới thiệu</h1>
                   </header>
                   <!-- .entry-header -->
                   <div class="entry-content">
                      <p><strong>{{ $about->name }}</strong></p>
                     <p>{!! $about->content !!}</p>
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
