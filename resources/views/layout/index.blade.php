<!DOCTYPE HTML>
<html lang="vi-VN">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<base href="{{asset('')}}">
<!-- seo -->
<title>@yield('title')</title>
<meta name="description" content="@yield('description')"/>
<meta name="keywords" itemprop="keywords" content="@yield('keywords')" />
<meta name="news_keywords" content="@yield('keywords')" />
<meta name="robots" content="@yield('robots')"/>
<link rel="shortcut icon" href="{{$head_setting->img}}" />
<link rel="canonical" href="@yield('url')"/>
<link rel="alternate" href="{{asset('')}}" hreflang="vi-vn" />
<!-- and seo -->
<!-- og -->
<meta property="og:locale" content="vi_VN" />
<meta property="og:type" content="website" />
<meta property="og:title" content="@yield('title')" />
<meta property="og:description" content="@yield('description')" />
<meta property="og:url" content="@yield('url')" />
<meta property="og:site_name" content="site_name" />
<meta property="og:images" content="@yield('img')" />
<meta property="og:image" content="@yield('img')" />
<meta property="og:image:alt" content="@yield('title')" />
<!-- and og -->
<!-- twitter -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="@yield('title')" />
<meta name="twitter:description" content="@yield('description')" />
<!-- and twitter -->

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta property="article:author" content="admin" />

<!-- ================= Style ================== --> 
<script src="frontend/theme_rozer1/assets/cache/jquery.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;display=swap&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" type="text/css" media="all">
<link rel="stylesheet" href="frontend/theme_rozer1/assets/cache/theme-e2056810.css" type="text/css" media="all">
<link rel="stylesheet" href="frontend/theme_rozer1/assets/cache/custom.css" type="text/css" media="all">
<script src="frontend/theme_rozer1/assets/cache/custom.js"></script>
<!-- ================= js ================== --> 

@yield('css')

{!! $head_setting->codeheader !!}

</head>

@include('layout.function')

<body itemscope itemtype="http://schema.org/WebPage" id="index"  class="lang-en country-us currency-usd layout-full-width page-index tax-display-disabled"> 
<main>

@include('layout.header')

@yield('content')
  
@include('layout.footer')

{!! $head_setting->codebody !!}

@yield('script')

@if(session('Alerts'))
	<script> alert('Thành công'); </script>
@endif

</main>
<div class="back-top"><a href= "#" class="back-top-button"></a></div>

<script type="text/javascript" src="frontend/theme_rozer1/assets/cache/bottom-31ea209.js" ></script>
<div id="poscompare-notification" class="">
<div class="notification-inner">
<span class="notification-title"><i class="fa fa-check" aria-hidden="true"></i>  Product added to compare.</span>
</div>
</div>

</body>
</html>