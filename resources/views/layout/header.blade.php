<?php use App\menu; ?>
<header id="header">
<nav class="header-nav hidden-lg-up">
  <div class="container"> 
    <div class="hidden-md-down">
      <div id="_desktop_user_info">
        <div class="user-info-block selector-block">
          <div class="currency-selector localiz_block dropdown js-dropdown">
          <!-- <button data-target="#" data-toggle="dropdown" class=" btn-unstyle hidden-md-down">
          <span class="expand-more">Setting</span>
          <i class="material-icons">expand_more</i>
          </button> -->
            <button data-target="#" data-toggle="dropdown" class=" btn-unstyle"><i class="icon-user"></i></button>
            <ul class="dropdown-menu">
              <li><a href="myaccount" rel="nofollow" class="dropdown-item">My account</a></li>
              <li><li><a href="checkout" class="dropdown-item" >Checkout</a></li>
              <li><a href="login" title="Log in to your customer account" rel="nofollow" class="dropdown-item" ><span>Sign in</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="mobile">
      <div class="row row-mobile">
        <div class="col-mobile col-md-4 col-xs-4">
          <div class="float-xs-left" id="menu-icon"><img alt="menu-item" src="frontend/images/menu_black_24dp.svg"></div>
          <div id="mobile_top_menu_wrapper" class="row" style="display:none;">
            <div class="menu-close">menu <i class="material-icons float-xs-right">arrow_back</i></div>
            <div class="menu-tabs">             
              <div class="js-top-menu-bottom">                        
                <div id="_mobile_megamenu"></div>
                <div id="_mobile_vegamenu"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-mobile col-md-4 col-xs-4 mobile-center">
          <div class="top-logo" id="_mobile_logo"></div>
        </div>
        <div class="col-mobile col-md-4 col-xs-4 mobile-right">
          <div id="_mobile_cart_block"></div>
          <div id="_mobile_user_info"></div>
        </div>
      </div>
      <div id="_mobile_search_category"></div>
    </div>
  </div>
</nav>

<div class="header-top top_bg hidden-md-down">
  <div class="container">
    <div class="row">
      <div class="col col col-md-2" id="_desktop_logo">
        <a href="{{asset('')}}">
          <img class="logo img-responsive" src="img/logo.jpg" alt="logo">
        </a>
      </div>
      <div class=" col col-md-10 col-sm-12 position-static">
        <div id="_desktop_cart_block">
          <div class="blockcart cart-preview" data-refresh-url="" data-cartitems="0">
            <div class="button_cart">
              <a rel="nofollow" href="cart" class="desktop hidden-md-down">
                <span class="item_count">0</span><span class="item_total">$0.00</span>
              </a>
              <a rel="nofollow" href="cart" class="mobile hidden-lg-up">
                <span class="item_count">0</span>
              </a>
            </div>
            <!-- <div class="popup_cart">
            <div class="content-cart">
            <div class="mini_cart_arrow"></div>
            <div class="price_content">
              <div class="cart-subtotals">
                <div class="products price_inline">
                  <span class="label">Subtotal</span>
                  <span class="value">$0.00</span>
                </div>
                <div class=" price_inline">
                  <span class="label"></span>
                  <span class="value"></span>
                </div>
                <div class="shipping price_inline">
                  <span class="label">Shipping</span>
                  <span class="value">Free</span>
                </div>
                <div class="tax price_inline">
                  <span class="label">Taxes</span>
                  <span class="value">$0.00</span>
                </div>
              </div>
              <div class="cart-total price_inline">
                <span class="label">Total</span>
              </div>
            </div>
            <div class="checkout">
              <a href="" class="btn btn-primary">Checkout</a> 
            </div>
            </div>
            </div> -->
          </div>
        </div>
        <div id="_desktop_wishtlist">
          <div class="wishtlist_top">
            <a class="" href="wishlist"><i class="icon-heart"></i> <span class="txt_wishlist">Wishlist</span>(<span class="cart-wishlist-number">0</span>)</a>
          </div>
        </div>
        <!-- <div id="_desktop_compare">
          <div class="compare_top">
            <a href=""><i class="icon-shuffle"></i> <span>Compare (<span id="poscompare-nb"></span>)</span></a>
          </div>
        </div> -->
        <div id="_desktop_contact_link">
          <div class="contact-link">
            <div class="phone">
              <p>Call us:</p>
              <a href="">0977.572.947</a>
            </div>
          </div>
        </div>
        <!-- pos search module TOP -->
        <div id="_desktop_search_category" class="col-md-7 col-xs-12"> 
          <div id="pos_search_top">
            <form method="get" action="" class="form-inline form_search show-categories">
              <!-- <div class="pos_search form-group">
                <select class="bootstrap-select" name="poscats">
                  <option value="0">All categories</option>
                  @foreach($cat_pro as $val)
                  <option value="{{$val->id}}">{{$val->name}}</option>
                  @endforeach
                </select>
              </div> -->
              <input type="text" name="name" placeholder="Enter your search key ... "class="search_query form-control ac_input" >
              <button type="submit" class="btn btn-default search_submit"><i class="icon-magnifier"></i></button>
            </form>
          </div>
        </div>
        <!-- /pos search module TOP -->
      </div>
    </div>
  </div>
</div>

<div class="header-bottom bottom_bg hidden-md-down">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-2">
        <div id="_desktop_vegamenu">
          <div class="pos-menu-vertical" data-more-less="11">
            <h3 class="title_vertical hidden-md-down">Danh mục </h3>
            <ul class="menu-content">
              @foreach($cat_pro as $val)
              <?php $sub_cats = menu::where('parent', $val->id)->get(); ?>
              @if(count($sub_cats) > 0)
              <li class="menu-item">
                <a href="{{$val->slug}}"><span>{{$val->name}}</span> <img style="width: 24px;margin: 0;" class="hidden-md-down" alt="menu-item" src="frontend/images/arrow_right_black_18dp.svg"></a>
                <span class="icon-drop-mobile"><i class="material-icons add">add</i><i class="material-icons remove">remove </i></span>
                <ul class="menu-dropdown cat-drop-menu menu_slideup">
                  @foreach($sub_cats as $sub_cat)
                  <li><a href="{{$sub_cat->slug}}" class=""><span>{{$sub_cat->name}}</span></a></li>
                  @endforeach
                </ul>
              </li>
              @else
              <li class="menu-item"><a href="{{$val->slug}}" class=""><span>{{$val->name}}</span></a></li>
              @endif
              @endforeach
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-10 col-sm-12 position-static">
        <div id="_desktop_megamenu" class="use-sticky ">
          <div class="pos-menu-horizontal" style="position: static;">
            <ul class="menu-content">
              <li class="{{ $active == '' ? 'home' : '' }} menu-item menu-item1"><a href="{{asset('')}}"><span>Trang chủ</span></a></li>
              @foreach($menu as $val)
              <li class=" {{ $active == $val->slug ? 'home' : '' }} menu-item menu-item3"><a href="{{$val->slug}}" ><span>{{$val->name}}</span><!-- <span class="menu-subtitle">New</span> --></a></li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style type="text/css">
  #_desktop_vegamenu .pos-menu-vertical .menu-content .menu-item a{
    display: flex;
      justify-content: space-between;
      align-items: center;
  }
</style>

</header>