<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php 
        $setting = Cache::get('setting'); 
        $product_list = Cache::get('product_list');
    ?>
    <meta http-equiv="content-language" content="vi" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name='revisit-after' content='1 days' /> 
    <title><?php if(!empty($title)) echo $title; else echo $setting->title; ?></title>
    <meta name="author" content="{!! $setting->website !!}" />
    <meta name="copyright" content="GCO" />
    <meta name="keywords" content="<?php if(!empty($keyword)) echo $keyword; else echo $setting->keyword; ?>" />
    <meta name="description" content="<?php if(!empty($description)) echo $description; else echo $setting->description; ?>" />
    <meta http-equiv="content-language" content="vi" />
    <meta property="og:title" content="<?php if(!empty($title)) echo $title; else echo $setting->title; ?>" />
    <meta property="og:locale" content="vi_VN"/>
    <meta property="og:url" content="{!! $setting->website !!}" />
    <meta property="og:site_name" content="<?php if(!empty($title)) echo $title; else echo $setting->title; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="<?php if(!empty($img_share)) echo $img_share; else echo asset('upload/hinhanh/'.$setting->photo) ?>" />
    <meta property="og:description" content="<?php if(!empty($description)) echo $description; else echo $setting->description; ?>" />
    <meta name="googlebot" content="all, index, follow" />
    <meta name="geo.region" content="VN" />
    <meta name="geo.position" content="10.764338, 106.69208" />
    <meta name="geo.placename" content="Hà Nội" />
    <meta name="Area" content="HoChiMinh, Saigon, Hanoi, Danang, Vietnam" />    
    <link rel="shortcut icon" href="{!! asset('upload/hinhanh/'.$setting->favico) !!}" type="image/png" />
    <link href="{{ asset('public/css/validationEngine.jquery.css')}}" rel="stylesheet" />
    <link href="{{ asset('public/css/style.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('public/css/jquery.selectBox.css')}}" rel="stylesheet" />
    <link href="{{ asset('public/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('public/css/style1.css')}}" rel="stylesheet" />
    <link href="{{ asset('public/css/styles.css')}}" rel="stylesheet" />
    <link href="{{ asset('public/css/woocommerce-layout.css')}}" rel="stylesheet" />
    
    <link href="{{ asset('public/css/woocommerce.css')}}" rel="stylesheet" />
    <link href="{{ asset('public/css/add-more.css')}}" rel="stylesheet" />
    <link href="{{ asset('public/css/modal-box.css')}}" rel="stylesheet" />
    <link href="{{ asset('public/css/fv.css')}}" rel="stylesheet" />
    <link href="{{ asset('public/css/tooltipster.css')}}" rel="stylesheet" />
    <link href="{{ asset('public/css/woodiscuz-frontend.css')}}" rel="stylesheet" />
    <link href="{{ asset('public/css/prettyPhoto.css')}}" rel="stylesheet" />
    <link href="{{ asset('public/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('public/css/owl.carousel.css')}}" rel="stylesheet" />
    <link href="{{ asset('public/css/style.css')}}" rel="stylesheet" />
    <link href="{{ asset('public/css/template.css')}}" rel="stylesheet" />
    <link href="{{ asset('public/css/responsive.css')}}" rel="stylesheet" />
    <link href="{{ asset('public/css/prettyPhoto.css')}}" rel="stylesheet" />
    <link href="{{ asset('public/css/yith_magnifier.css')}}" rel="stylesheet" />
    <link href="{{ asset('public/css/frontend.css')}}" rel="stylesheet" />
    <script type='text/javascript' src="{{asset('public/js/jquery.js')}}"></script>
    <script type='text/javascript' src="{{asset('public/js/jquery-migrate.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('public/js/validator.js')}}"></script>
    <script type='text/javascript' src="{{asset('public/js/wpc-ajax.js')}}"></script>
    <script type='text/javascript' src="{{asset('public/js/jquery.cookie.js')}}"></script>
    <script type='text/javascript' src="{{asset('public/js/jquery.tooltipster.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('public/js/jquery.autogrowtextarea.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('public/js/verification.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/js/add-more.js')}}"></script>
</head>
<body>
    <div id="page" class="site">
        @include('templates.layout.header')    
        @yield('content')
        @include('templates.layout.footer')
         @include('templates.layout.popup')
    </div>
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/nivo-slider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/light.css')}}">
    <script src="{{ asset('public/js/jquery.yith-wcwl.js')}}" defer></script>
    <script src="{{ asset('public/js/jquery.form.min.js')}}" defer></script>
    <script src="{{ asset('public/js/scripts.js')}}" defer></script>
    <script src="{{ asset('public/js/add-to-cart.min.js')}}" defer></script>
    <script src="{{ asset('public/js/cart-fragments.min.js')}}" defer></script>
    <script src="{{ asset('public/js/custom.js')}}" defer></script>
    <script src="{{ asset('public/js/bootstrap.min.js')}}" defer></script>
    <script src="{{ asset('public/js/yith_magnifier.js')}}" defer></script>
    <script src="{{ asset('public/js/jquery.nivo.slider.pack.js')}}" defer></script>
    <script src="{{ asset('public/js/front-subscribers.js')}}" defer></script>
    <script src="{{ asset('public/js/ywzm_frontend.js')}}" defer></script>
    <script src="{{ asset('public/js/owl.carousel.min.js')}}" defer></script>
</body>
</html>