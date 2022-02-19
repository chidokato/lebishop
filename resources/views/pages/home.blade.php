@extends('layout.index')

@section('title'){{ isset($head_setting->title) ? $head_setting->title : $head_setting->name }}@endsection
@section('description'){{$head_setting->description}}@endsection
@section('keywords'){{$head_setting->keywords}}@endsection
@section('robots'){{ $head_setting->robot == 0 ? 'index, follow' : 'noindex, nofollow' }}@endsection
@section('url'){{asset('').$head_setting['slug']}}@endsection

@section('content')
@include('layout.slider')
<div id="wrapper">
<div class="container">
<div class="row">
<div id="content-wrapper" class="col-xs-12">
<section id="main">
<section id="content" class="page-home">

<!-- note -->
<div class="static_cms">
<div class="row">
<div class="col-cms col-xs-12 col-sm-6 col-md-6 col-lg-3">
<div class="box_cms"><img src="img/icon_cms1.png" alt="" class="img-responsive" />
<div class="txt_cms">
<h2>Free Shipping</h2>
<p>On all orders over $75.00</p>
</div>
</div>
</div>
<div class="col-cms col-xs-12 col-sm-6 col-md-6 col-lg-3">
<div class="box_cms"><img src="img/icon_cms2.png" alt="" class="img-responsive" />
<div class="txt_cms">
<h2>Free Returns</h2>
<p>Returns are free within 9 days</p>
</div>
</div>
</div>
<div class="col-cms col-xs-12 col-sm-6 col-md-6 col-lg-3">
<div class="box_cms"><img src="img/icon_cms3.png" alt="" class="img-responsive" />
<div class="txt_cms">
<h2>Support 24/7</h2>
<p>Contact us 24 hours a day</p>
</div>
</div>
</div>
<div class="col-cms col-xs-12 col-sm-6 col-md-6 col-lg-3">
<div class="box_cms"><img src="img/icon_cms4.png" alt="" class="img-responsive" />
<div class="txt_cms">
<h2>100% Payment Secure</h2>
<p>Your payment are safe with us.</p>
</div>
</div>
</div>
</div>
</div>
<!-- note -->

<!-- banner -->
<div class="home-banner">
<div class="row">
<div class="col col-md-4 col-xs-12">
<div class="banner-box"><a href="#"><img src="img/1_1.jpg" alt="" /></a></div>
</div>
<div class="col col-md-4 col-xs-12">
<div class="banner-box"><a href="#"><img src="img/2_1.jpg" alt="" /></a></div>
</div>
<div class="col col-md-4 col-xs-12">
<div class="banner-box"><a href="#"><img src="img/3_1.jpg" alt="" /></a></div>
</div>
</div>
</div>
<!-- banner -->

<!-- sản phẩm nổi bật -->
<div class="pos-featured-products" data-items="5" data-speed="1000"data-autoplay="0"data-time="3000"data-arrow="1"data-pagination="0"data-move="1"data-pausehover="0"data-lg="4"data-md="3"data-sm="2"data-xs="2"data-xxs="1">
<div class="pos_title">
<h2>Sản phẩm nổi bật </h2>
</div>

<div class=" pos_content row">
<div class="feature-item owl-carousel">
@foreach($articles as $val)
<div class="item-product">
<article class="style_product_default product-miniature js-product-miniature item_in" data-id-product="3" data-id-product-attribute="13" itemscope itemtype="http://schema.org/Product">
<div class="img_block">
<a href="#" class="thumbnail product-thumbnail"> <img class="first-image " src="data/product/{{$val->img}}"  alt = "Brixton Patrol All Terrain..." > </a>

<ul class="product-flag"> <li class="new"><span>HOT</span></li> </ul>
</div>
<div class="product_desc">
<div class="inner_desc">
<div class="manufacturer"><a href="{{$val->slug}}">{{$val->name}}</a></div>
<h3 itemprop="name"><a href="electronics/3-13-brixton-patrol-all-terrain-anorak-jacket.html#/19-dimension-40x60cm" class="product_name " title="Brixton Patrol All Terrain Anorak Jacket">Brixton Patrol All Terrain Anorak Jacket</a></h3> 
<div class="product-price-and-shipping">
<span class="sr-only">Price</span>
<span itemprop="price" class="price ">$29.00</span>
</div>
<ul class="add-to-links"> 
<li class="cart">
<div class="product-add-to-cart"> 
<form action="http://lebishop.vn/pos_rozer/en/cart" method="post" class="add-to-cart-or-refresh">
<input type="hidden" name="token" value="36ae6c08c97db2ca33bcd9e4bacc5420">
<input type="hidden" name="id_product" value="3" class="product_page_product_id">
<input type="hidden" name="qty" value="1">
<button class="button ajax_add_to_cart_button add-to-cart btn-default" title="Add to cart" data-button-action="add-to-cart" type="submit" >
<i class="fa fa-shopping-cart"></i> Add to cart
</button>
</form>
</div>
</li>
<li>
<a class="addToWishlist wishlistProd_3" title="Add to wishlist" href="#" data-rel="3" onclick="WishlistCart('wishlist_block_list', 'add', '3', false, 1); return false;">
Add to wishlist
</a>
</li>
<li class="compare">  
<a href="#" class="poscompare-add compare-button js-poscompare-add"  data-id_product="3"   onclick="posCompare.addCompare($(this),3); return false;" title="Add to compare"><span>Add to compare</span></a>
</li>
</ul>
</div>  
<div class="availability"> 
<div class="availability-list in-stock">Availability: <span>900 In Stock</span></div>
</div>
<div class="product-desc" itemprop="description"><ul><li>
<div>Whether you're exploring the woods or the city, the Brixton™ Patrol All Terrain Anorak Jacket has got you covered.</div>
</li>
<li>
<div>Camo jacket crafted from 4.5 oz nylon ripstop with two-way stretch, and a water-repellent coating.</div>
</li>
<li>
<div>Drawstring hood.</div>
</li>
</ul>
</div>
<div class="variant-links"> </div>
</div>
</article>
</div>
@endforeach
</div>
</div>
</div>
<!-- sản phẩm nổi bật -->

<!-- sale off -->
<div class="pos-special-products " data-items="2" data-speed="1000"data-autoplay="0"data-time="3000"data-arrow="1"data-pagination="0"data-move="1"data-pausehover="0"data-lg="1" data-md="1"data-sm="2"data-xs="1"data-xxs="1">
<div class="pos_title"><h2>Sản phẩm khuyến mãi</h2></div>  
<div class="row pos_content">
<div class="special-item owl-carousel">

@foreach($articles as $val)
<div class="item-product">
<article class="style_product_default product-miniature js-product-miniature item_in" data-id-product="17" data-id-product-attribute="109" itemscope itemtype="http://schema.org/Product">
<div class="img_block">
<a href="electronics/17-109-originals-kaval-windbreaker-winter-jacket-2.html#/1-size-s/8-color-white" class="thumbnail product-thumbnail">
<img class="first-image "src="data/product/{{$val->img}}" alt = "Originals Kaval Windbreaker...">
</a>
<ul class="product-flag"><li class="discount"><span>-5%</span></li><li class="new"><span>New</span></li></ul>
</div>
<div class="product_desc">
<div class="inner_desc">
<div class="manufacturer"><a href="{{$val->slug}}">{{$val->name}}</a></div>
<h3 itemprop="name"><a href="{{$val->slug}}" class="product_name " title="Originals Kaval Windbreaker Winter Jacket 2">Originals Kaval Windbreaker Winter Jacket 2</a></h3> 
<div class="product-price-and-shipping">
<span class="sr-only">Regular price</span>
<span class="regular-price">$23.90</span>
<span class="sr-only">Price</span>
<span itemprop="price" class="price price-sale">$22.71</span>
<span class="discount-percentage discount-product">-5%</span>
</div>
<ul class="add-to-links"> 
<li class="cart">
<div class="product-add-to-cart"> 
<form action="http://lebishop.vn/pos_rozer/en/cart" method="post" class="add-to-cart-or-refresh">
<input type="hidden" name="token" value="36ae6c08c97db2ca33bcd9e4bacc5420">
<input type="hidden" name="id_product" value="17" class="product_page_product_id">
<input type="hidden" name="qty" value="1">
<button class="button ajax_add_to_cart_button add-to-cart btn-default" title="Add to cart" data-button-action="add-to-cart" type="submit" >
<i class="fa fa-shopping-cart"></i> Add to cart
</button>
</form>
</div>
</li>
<li>
<a class="addToWishlist wishlistProd_17" title="Add to wishlist" href="#" data-rel="17" onclick="WishlistCart('wishlist_block_list', 'add', '17', false, 1); return false;">
Add to wishlist
</a>
</li>
<li class="compare">  
<a href="#" class="poscompare-add compare-button js-poscompare-add"  data-id_product="17"   onclick="posCompare.addCompare($(this),17); return false;" title="Add to compare"><span>Add to compare</span></a>
</li>
</ul>
</div>  
<div class="availability"> 
<div class="availability-list in-stock">Availability: <span>300 In Stock</span></div>
</div>
<div class="countdown" >
<div class='time_count_down' data-years="Years"data-year="Year"data-months="Months"data-month="Month"data-weeks="Weeks"data-week="Week"data-days="Days"data-day="Day"data-hours="Hours"data-hour="Hour"data-minutes="Mins"data-minute="Min"data-seconds="Secs"data-second="Sec">
<span class="future_date_68_17 time_countdown"  data-date-y ='2025' data-date-m ='03' data-date-d='13' data-date-h = '00' data-date-mi = '00' data-date-s= '00' >  </span>
</div>
</div>
<!-- <span id="future_date_68_17" class="id_countdown"></span> -->
<!-- <div class="clearfix"></div> -->
<!-- <div class="product-desc" itemprop="description"><ul><li>
<div>Block out the haters with the fresh adidas® Originals Kaval Windbreaker Jacket.</div>
</li>
<li>
<div><em>Part of the Kaval Collection.</em></div>
</li>
<li>
<div>Regular fit is eased, but not sloppy, and perfect for any activity.</div>
</li>
<li>
<div>Plain-woven jacket specifically constructed for freedom of movement.</div>
</li>
</ul></div> -->
<!-- <div class="variant-links">
<div class="variant-links">
<a href="electronics/17-103-originals-kaval-windbreaker-winter-jacket-2.html#/2-size-m/8-color-white"
class="color"
title="White"
style="background-color: #ffffff"><span class="sr-only">White</span></a>
<a href="electronics/17-102-originals-kaval-windbreaker-winter-jacket-2.html#/1-size-s/11-color-black"
class="color"
title="Black"
style="background-color: #434A54"><span class="sr-only">Black</span></a>
<span class="js-count count"></span>
</div>
</div> -->
</div>
</article>
</div>
@endforeach

</div>
</div>
<div class="banner-box"><a href="#"><img class="img-responsive" src="img/cms.jpg" alt="" title=""/></a></div> <!-- banner -->
</div>
<!-- sale off -->


<div class="poslistcateproduct poslistcateproduct_0 product_container"data-items="4" data-speed="1000"data-autoplay="0"data-time="0"data-arrow="1" data-pagination="0"data-move="0" data-pausehover="0"  data-lg="3"  data-md="2"  data-sm="2"  data-xs="2"  data-xxs="1">
<div class="pos_title">
<h2>
<span>Audio &amp; Video</span>
</h2>
<ul class="subcategories-list hidden-md-down">
<li><a href="80-televisions.html" target="_blank">Televisions</a></li>
<li><a href="81-tv-receivers.html" target="_blank">TV Receivers</a></li>
<li><a href="82-projectors.html" target="_blank">Projectors</a></li>
</ul>
<div class="btn-group hidden-lg-up">
<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="material-icons">list</i>
</button>
<ul class="dropdown-menu">
<li><a href="80-televisions.html" target="_blank">Televisions</a><li>
<li><a href="81-tv-receivers.html" target="_blank">TV Receivers</a><li>
<li><a href="82-projectors.html" target="_blank">Projectors</a><li>
</ul>
</div>
</div>
<div class="row"> 
<div class="col-left col-xs-12 col-md-6 col-lg-5 col-xl-4">
<div class="banner-box">
<a href="index.html"><img src="img/thumb-1.jpg" alt="" /></a>         </div>
</div> 
<div class="col-right col-xs-12 col-md-6 col-lg-7 col-xl-8">
<div class="listcateproduct-products">  
<div class="row pos_content"> 
<div class="listcateSlide owl-carousel">
@foreach($articles as $val)
<div class="item-product">
<article class="style_product_default product-miniature js-product-miniature item_in" data-id-product="11" data-id-product-attribute="26" itemscope itemtype="http://schema.org/Product">
<div class="img_block">
<a href="electronics/11-26-new-balance-fresh-foam-lazr-v1-sport.html#/8-color-white" class="thumbnail product-thumbnail">
<img class="first-image "src="data/product/{{$val->img}}" alt = "New Balance Fresh Foam LAZR..." >
</a>
<ul class="product-flag"><li class="new"><span>New</span></li></ul>
</div>
<div class="product_desc">
<div class="inner_desc">
<div class="manufacturer"><a href="brand/1-studio-design.html?id_manufacturer=1">{{$val->name}}</a></div>
<h3 itemprop="name"><a href="electronics/11-26-new-balance-fresh-foam-lazr-v1-sport.html#/8-color-white" class="product_name " title="New Balance Fresh Foam LAZR v1 Sport">New Balance Fresh Foam LAZR v1 Sport</a></h3> 
<div class="product-price-and-shipping">
<span class="sr-only">Price</span>
<span itemprop="price" class="price ">$18.90</span>
</div>
<ul class="add-to-links"> 
<li class="cart">
<div class="product-add-to-cart"> 
<form action="http://lebishop.vn/pos_rozer/en/cart" method="post" class="add-to-cart-or-refresh">
<input type="hidden" name="token" value="36ae6c08c97db2ca33bcd9e4bacc5420">
<input type="hidden" name="id_product" value="11" class="product_page_product_id">
<input type="hidden" name="qty" value="1">
<button class="button ajax_add_to_cart_button add-to-cart btn-default" title="Add to cart" data-button-action="add-to-cart" type="submit" >
<i class="fa fa-shopping-cart"></i> Add to cart
</button>
</form>
</div>
</li>
<li>
<a class="addToWishlist wishlistProd_11" title="Add to wishlist" href="#" data-rel="11" onclick="WishlistCart('wishlist_block_list', 'add', '11', false, 1); return false;">
Add to wishlist
</a>
</li>
<li class="compare">  
<a href="#" class="poscompare-add compare-button js-poscompare-add"  data-id_product="11"   onclick="posCompare.addCompare($(this),11); return false;" title="Add to compare"><span>Add to compare</span></a>
</li>
</ul>
</div>  
<div class="availability"> 
<div class="availability-list in-stock">Availability: <span>300 In Stock</span></div>
</div>
<div class="product-desc" itemprop="description"><ul><li>
<div>The New Balance® Fresh Foam LAZR v1 Sport running shoe gives you total focus on the road with its precision-engineered design.</div>
</li>
<li>
<div>Predecessor: None.</div>
</li>
<li>
<div>Support Type: Neutral.</div>
</li>
<li>
<div>Cushioning: Minimal feel with extreme flexibility. </div>
</li>
</ul></div>
<div class="variant-links">
<div class="variant-links">
<a href="electronics/11-26-new-balance-fresh-foam-lazr-v1-sport.html#/8-color-white"
class="color"
title="White"
style="background-color: #ffffff"><span class="sr-only">White</span></a>
<a href="electronics/11-27-new-balance-fresh-foam-lazr-v1-sport.html#/11-color-black"
class="color"
title="Black"
style="background-color: #434A54"><span class="sr-only">Black</span></a>
<span class="js-count count"></span>
</div>
</div>
</div>
</article>
</div>
@endforeach
</div>
</div>
</div>
</div>
</div> 
</div>


<div class="pos_logo product_block_container">
<div class="row pos_content">
<div class="logo-slider owl-carousel">
<div>
<div class="item-banklogo">
<a href ="index.html">
<img class="replace-2x img-responsive" src ="img/1.jpg" alt ="Logo" />
</a>
</div>
</div>
<div>
<div class="item-banklogo">
<a href ="index.html">
<img class="replace-2x img-responsive" src ="img/2.jpg" alt ="Logo" />
</a>
</div>
</div>
<div>
<div class="item-banklogo">
<a href ="index.html">
<img class="replace-2x img-responsive" src ="img/3.jpg" alt ="Logo" />
</a>
</div>
</div>
<div>
<div class="item-banklogo">
<a href ="index.html">
<img class="replace-2x img-responsive" src ="img/4.jpg" alt ="Logo" />
</a>
</div>
</div>
<div>
<div class="item-banklogo">
<a href ="index.html">
<img class="replace-2x img-responsive" src ="img/5.jpg" alt ="Logo" />
</a>
</div>
</div>
</div>
</div>
</div>
<div class="recommended-product"
data-items="4" 
data-lazyload="1" 
data-speed="1000"
data-autoplay="0"
data-time="3000"
data-arrow="1"
data-pagination="0"
data-move="1"
data-pausehover="0"
data-lg="3"
data-md="2"
data-sm="2"
data-xs="1"
data-xxs="1">
<div class="pos_title">
<h2>
Recently Added
</h2>
</div>
<div class="row pos_content">
<div class="recommendedproductslide owl-carousel">
@foreach($articles as $val)
<div class="item-product">
<article class="style_product_default product-miniature js-product-miniature item_in" data-id-product="1" data-id-product-attribute="1" itemscope itemtype="http://schema.org/Product">
<div class="img_block">
<a href="electronics/1-1-originals-kaval-windbreaker-winter-jacket.html#/1-size-s/8-color-white" class="thumbnail product-thumbnail">
<img class="first-image " src="data/product/{{$val->img}}">
</a> 
</div>
<div class="product_desc">
<div class="manufacturer"><a href="brand/1-studio-design.html?id_manufacturer=1">{{$val->name}}</a></div>
<h3 itemprop="name"><a href="electronics/1-1-originals-kaval-windbreaker-winter-jacket.html#/1-size-s/8-color-white" class="product_name " title="Originals Kaval Windbreaker Winter Jacket">Originals Kaval Windbreaker Winter Jacket</a></h3> 
<div class="hook-reviews">
<div class="comments_note" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
<span class="nb-comments"><span itemprop="reviewCount">1</span> Review(s)</span>
</div>
</div>
<div class="product-price-and-shipping">
<span class="sr-only">Regular price</span>
<span class="regular-price">$23.90</span>
<span class="sr-only">Price</span>
<span itemprop="price" class="price price-sale">$22.71</span>
<span class="discount-percentage discount-product">-5%</span>
</div>
</div>
</article>
</div>
@endforeach
</div>
</div>
</div>
</section>


<footer class="page-footer">
<!-- Footer content -->
</footer>
</section>
</div>
</div>
</div>
<div class="container">
<div class="home-banner">
<div class="row">
<div class="col col-md-6 col-xs-12">
<div class="banner-box"><a href="#"><img src="img/4_1.jpg" alt="" /></a></div>
</div>
<div class="col col-md-6 col-xs-12">
<div class="banner-box"><a href="#"><img src="img/5_1.jpg" alt="" /></a></div>
</div>
</div>
</div>
</div>
</div>
@endsection
