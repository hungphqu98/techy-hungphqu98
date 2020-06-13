<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Techy - Music Matters</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('')}}/public/assets/img/lowercase_letter_t_red-512.png">

    <!-- CSS
    ========================= -->
    <!-- Latest compiled and minified CSS & JS -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{url('')}}/public/assets/css/plugins.css">
    <link rel="stylesheet" href="{{url('')}}/public/assets/jquery-ui/jquery-ui.min.css" type='text/css'>
    <link rel="stylesheet" href="{{url('')}}/public/assets/range/css/ion.rangeSlider.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{url('')}}/public/assets/css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <style>
     .clickedStar{
    color: yellow;
}

.starPicker{
    font-size: 3rem !important;
    cursor: pointer;
    transition: .3s;
    -webkit-transition: .3s;
    margin-top: 1rem;
}

.radioBtnStar{
    display: none;
}

.ratingDiv{
  text-align:center;
  margin-top:8em;
}
   </style>
    <style>
        .Modal-overlay {
  display: none;
  position: fixed;
  background-color: rgba(0,0,0,0.85);
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  cursor: pointer;
  padding-top: 10%;
  z-index: 99999;
}
.Modal-box {
  width: 87%;
  max-width:860px;
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px;
  position:relative;
} 
.video-container {
    position: relative;
    display: block;
    height: 0;
    padding: 0;
    overflow: hidden;
    padding-bottom: 56.25%;
   } 
iframe, object, embed {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: 0;
      max-width: 860px;
    }
  


.Modal-close {
  position: absolute;
  right: 20px;
  top: 10px;
  font-size: 50px;
  z-index: 100000;
  color: #fff;
}

// this gets attached to Body
.Modal-cancel-overflow {
  overflow: hidden;
}
    </style>
</head>

<body>
    @if(Session::has('success'))
    <div class="alert alert-success">
      {{Session::get('success')}}
    </div>
  @endif
  @if(Session::has('error'))
    <div class="alert alert-success">
      {{Session::get('error')}}
    </div>
  @endif
    <!--header area start-->
    <header class="header_area">
        <!--header top start-->
        <div class="header_top header_top_eight">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                       <div class="welcome_text">
                           <p>Welcome to <span>Techy</span> </p>
                       </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="top_right text-right">
                            <ul>

                                        
                                        @if (Auth::guard('useracc')->check())
                                            <li><a href="{{route('checkout')}}">Checkout </a></li>   
                                            <li><a href="{{route('my_account')}}">My Account</a></li> 
                                            <li><a href="{{route('wishlist')}}">Wishlist</a></li>
                                        @else
                                             <li><a href="{{route('register')}}">Register</a></li>
                                             <li><a href="{{route('login')}}">Login</a></li>   
                                        @endif
                                        <li><a href="{{route('cart')}}">Shopping Cart</a></li>
                                        


                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--header top start-->
        <!--header center area start-->
        <div class="header_middle header_middle_eight">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="{{ route('home') }}"><img src="{{url('')}}/public/assets/img/logo/Techylogo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                       <div class="middle_eight_container">
                           <div class="main_menu menu_eight header_position">
                                <nav>
                                    <ul>

                                        <li class="active"><a  href="{{ route('home') }}"><i class="zmdi zmdi-home"></i> home </a>

                                        </li>
                                        <li class="mega_items"><a href="{{ route('shop') }}"><i class="zmdi zmdi-shopping-basket"></i> shop <i class="zmdi zmdi-caret-down"></i></a>
                                            <div class="mega_menu">
                                                <ul class="mega_menu_inner">
                                                    <li><a href="{{ route('headphones') }}">Headphones</a>
                                                        <ul>
                                                            <li><a href="{{ route('solopro') }}">Solo Pro</a></li>
                                                            <li><a href="{{ route('studio3') }}">Studio 3 Wireless</a></li>
                                                            <li><a href="{{ route('beatsep') }}">Beats EP</a></li>
                                                            <li><a href="{{ route('beatspro') }}"> Beats Pro</a></li>
                                                            <li><a href="{{ route('solo3') }}">Solo 3 Wireless</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="{{ route('earphones') }}">Earphones</a>
                                                        <ul>
                                                            <li><a href="{{ route('powpro') }}">Powerbeats Pro</a></li>
                                                            <li><a href="{{ route('beatsx') }}">Beats X</a></li>
                                                            <li><a href="{{ route('pow3') }}">Powerbeats 3 Wireless</a></li>
                                                            <li><a href="{{ route('urbeats') }}">Urbeats</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="{{ route('speaker') }}">Speakers</a>
                                                        <ul>
                                                            <li><a href="{{ route('pplus') }}">Beats Pill +</a></li>
                                                            <li><a href="{{ route('pill2') }}">Beats Pill</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                       
                                        <li><a href="#"><i class="zmdi zmdi-star"></i> information <i class="zmdi zmdi-caret-down"></i></a>
                                            <ul class="sub_menu pages">
                                                <li><a href="{{ route('about') }}">About Us</a></li>
                                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                                <li><a href="{{ route('faq') }}">Frequently Questions</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header_support">
                                <a href="tel:(+84) 373302668><i class="zmdi zmdi-phone-in-talk zmdi-hc-fw"></i> Call Us: (+84) 373302668</a>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header center area end-->

        <!--header middel start-->
        <div class="header_bottom" >
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                       <div class="categories_menu categori_eight">
                            <div class="categories_title">
                                <h2 class="categori_toggle">Categories</h2>
                            </div>
                            <div class="categories_menu_toggle">
                                <ul>
                                    <li class="menu_item_children categorie_list"><a href="{{ route('headphones') }}"><span><i class="zmdi zmdi-desktop-mac"></i></span>Headphones <i class="fa fa-angle-right"></i></a>
                                        <ul class="categories_mega_menu column_2">
                                            <li class="menu_item_children"><a href="{{ route('headphones') }}">All</a>
                                                <ul class="categorie_sub_menu">
                                                    <li><a href="{{ route('matte') }}">Matte Collection</a></li>
                                                    <li><a href="{{ route('club') }}">Club Collection</a></li>
                                                    <li><a href="{{ route('nba') }}">NBA Collection</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu_item_children"><a href="{{ route('headl') }}">Limited Edition</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu_item_children"><a href="{{ route('earphones') }}"><span><i class="zmdi zmdi-image"></i></span>  Earphones <i class="fa fa-angle-right"></i></a>
                                        <ul class="categories_mega_menu column_2">
                                            <li class="menu_item_children"><a href="{{ route('earphones') }}">All</a>
                                            </li>
                                            <li class="menu_item_children"><a href="{{ route('earl') }}">Limited Edition</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu_item_children"><a href="{{ route('speaker') }}"><span><i class="zmdi zmdi-dribbble"></i></span> Speakers <i class="fa fa-angle-right"></i></a>
                                        <ul class="categories_mega_menu column_2">
                                            <li class="menu_item_children"><a href="{{ route('speaker') }}">All</a>
                                            </li>
                                            <li class="menu_item_children"><a href="{{ route('spel') }}"> Limited Edition </a>
                                            </li>
                                        </ul>
                                    </li>
                                        <ul class="categorie_sub">
                                            <li><a href="#"><span><i class="zmdi zmdi-gamepad"></i></span> Hide Categories</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                   </div>
                   <div class="col-lg-9">
                        <div class="search_version_eight">
                            <div class="search-container">
                               <form action="{{ route('search') }}" role="search" method="GET">
                                @csrf
                                   <div class="hover_category">
                                        <select class="select_option" name="select" id="categori">
                                            <option selected value="1">All Categories</option>
                                            <option value="2">Headphones</option>
                                            <option value="3">Earphones</option>
                                            <option value="4">Speakers</option>

                                        </select>
                                   </div>
                                    <div class="search_box">
                                        <input placeholder="Search product..." type="text" name="key" class="form-control">
                                        <button type="submit"><i class="zmdi zmdi-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="mini_cart_wrapper">
                                <a href="javascript:void(0)"><i class="zmdi zmdi-shopping-basket"></i> <span>{{$cart->total_quantity}} items - {{$cart->total_price}} đ</span> </a>
                                <!--mini cart-->
                                 <div class="mini_cart mini_cart_eight">
                                     @foreach($cart->items as $key => $item)
                                    <div class="cart_item">
                                       <div class="cart_img">
                                           <a href="#"><img src="{{url('')}}/public/assets/img/product/{{$item['image']}}" alt=""></a>
                                       </div>
                                        <div class="cart_info">
                                            <a href="#">{{$item['name']}}</a>

                                            <span class="quantity">Qty: {{$item['quantity']}}</span>
                                            <span class="price_cart">{{$item['price']}} đ</span>

                                        </div>
                                        <div class="cart_remove">
                                            <a href="{{route('cart.delete',['id'=>$key])}}" onclick="return confirm('Are you sure to delete?')"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    @endforeach

                                    <div class="mini_cart_table">
                                        <div class="cart_total">
                                            <span>Subtotal:</span>
                                            <span class="price">{{$cart->total_price}} đ</span>
                                        </div>
                                    </div>

                                    <div class="mini_cart_footer">
                                       <div class="cart_button">
                                            <a href="{{route('cart')}}">View cart</a>
                                            <a href="{{route('checkout')}}">Checkout</a>
                                        </div>
                                    </div>

                                </div>
                                <!--mini cart end-->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--header middel end-->

    </header>
    <!--header area end-->

    <!--Offcanvas menu area start-->

    <div class="off_canvars_overlay">

    </div>
    <div class="Offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <span>MENU</span>
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="Offcanvas_menu_wrapper">
                        <div class="canvas_close">
                              <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                        </div>
                        <div class="welcome_text">
                           <p>Welcome to <span>Techy</span> </p>
                       </div>

                        <div class="top_right">
                            <ul>
                                <li class="top_links"><a href="#"><i class="zmdi zmdi-account"></i> My account <i class="zmdi zmdi-caret-down"></i></a>
                                    <ul class="dropdown_links">
                                    @if (Auth::guard('useracc')->check())
                                            <li><a href="{{route('checkout')}}">Checkout </a></li>   
                                            <li><a href="{{route('my_account')}}">My Account</a></li> 
                                            <li><a href="{{route('wishlist')}}">Wishlist</a></li>
                                            @else
                                             <li><a href="{{route('register')}}">Register</a></li>
                                             <li><a href="{{route('login')}}">Login</a></li>   
                                            @endif
                                        <li><a href="{{route('cart')}}"> Shopping Cart</a></li>
                                        
                                    </ul>
                                </li>

                            </ul>
                        </div>
                        <div class="search-container">
                           <form action="{{ route('search') }}" role="search" method="GET">
                            @csrf
                               <div class="hover_category">
                                    <select class="select_option" name="select" id="categori2">
                                        <option selected value="1">All Categories</option>
                                        <option value="2">Headphones</option>
                                        <option value="3">Earphones</option>
                                        <option value="4">Speakers</option>
                                    </select>
                               </div>
                                <div class="search_box">
                                    <input placeholder="Search product..." type="text" name="key" class="form-control">
                                    <button type="submit"><i class="zmdi zmdi-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="mini_cart_wrapper">
                            <a href="javascript:void(0)"><i class="zmdi zmdi-shopping-basket"></i> <span>{{$cart->total_quantity}} items - {{$cart->total_price}}</span> </a>
                            <!--mini cart-->
                             <div class="mini_cart">
                                @foreach($cart->items as $key => $item)
                                <div class="cart_item">
                                   <div class="cart_img">
                                       <a href="#"><img src="{{url('')}}/public/assets/img//product/{{$item['image']}}" alt=""></a>
                                   </div>
                                    <div class="cart_info">
                                        <a href="#">{{$item['name']}}</a>

                                        <span class="quantity">Qty: {{$item['quantity']}}</span>
                                        <span class="price_cart">{{$item['price']}} đ</span>

                                    </div>
                                    <div class="cart_remove">
                                        <a href="{{route('cart.delete',['id'=>$key])}}" onclick="return confirm('Are you sure to delete?')"><i class="ion-android-close"></i></a>
                                    </div>
                                </div>
                                @endforeach
                                <div class="mini_cart_table">
                                    <div class="cart_total">
                                        <span>Subtotal:</span>
                                        <span class="price">{{$cart->total_price}} đ</span>
                                    </div>
                                </div>

                                <div class="mini_cart_footer">
                                   <div class="cart_button">
                                        <a href="{{route('cart')}}">View cart</a>
                                        <a href="{{route('checkout')}}">Checkout</a>
                                    </div>
                                </div>

                            </div>
                            <!--mini cart end-->
                        </div>
                        <div id="menu" class="text-left ">
                             <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{ route('shop') }}">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="{{ route('headphones') }}">Headphones</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('solopro') }}">Solo Pro</a></li>
                                                <li><a href="{{ route('studio3') }}">Studio 3 Wireless</a></li>
                                                <li><a href="{{ route('beatsep') }}">Beats EP</a></li>
                                                <li><a href="{{ route('beatspro') }}">Beats Pro</a></li>
                                                <li><a href="{{ route('solo3') }}">Solo 3 Wireless</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="{{ route('earphones') }}">Earphones</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('powpro') }}">Powerbeats Pro</a></li>
                                                <li><a href="{{ route('beatsx') }}">Beats X</a></li>
                                                <li><a href="{{ route('pow3') }}">Powerbeats 3 Wireless</a></li>
                                                <li><a href="{{ route('urbeats') }}">Urbeats</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="{{ route('speaker') }}">Speakers</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('pplus') }}">Beats Pill +</a></li>
                                                <li><a href="{{ route('pill2') }}">Beats Pill</a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{ route('faq') }}">Frequently Questions</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{ route('about') }}">about Us</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{ route('contact') }}"> Contact Us</a>
                                </li>
                            </ul>
                        </div>

                        <div class="Offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> techy123@gmail.com</a></span>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<!--shop  area start-->
<div class="shop_area shop_reverse mt-50 mb-50"  >
    <div class="container">
        <div class="row" >
            <div class="col-lg-3 col-md-12">
               <!--sidebar widget start-->
                <aside class="sidebar_widget">
                    <div class="shop_sidebar_banner mb-50">
                        <a href=""><img src="{{url('')}}/public/assets/img/bg/banner16.jpg" alt=""></a>
                    </div>
                    <div class="widget_list widget-filter">
                        <h2>Filter by price</h2>
                    <form action="{{route('demo')}}">
                    <label for="range">From {{number_format($minPrice)}} to {{number_format($maxPrice)}}</label>
                        <br>
                            <input type="checkbox" name="head" id="" value="1"> Headphones
                            <input type="checkbox" name="ear" id="" value="1"> Earphones
                            <input type="checkbox" name="speak" id="" value="1"> Speakers
                    <input type="text" class="js-range-slider" name="price_range" id="range" value="" data-from="{{($minPrice)}}" data-to="{{($maxPrice)}}" />
                        <br>
                        <button type="submit">Submit</button>
                    </form>
                    </div>
                </aside>
                <!--sidebar widget end-->
            </div>
            <div class="col-lg-9 col-md-12">
                <!--shop wrapper start-->
                <!--shop toolbar start-->
                <div class="shop_banner">
                    <img src="{{url('')}}/public/assets/img/bg/bannerbeats.jpg" alt="">
                </div>
                <div class="shop_title">
                    <h1>shop</h1>
                </div>
                <div class="shop_toolbar_wrapper">
                    <div>
                        &nbsp;
                    @sortablelink('id','By Newness') &nbsp; &nbsp;
                    @sortablelink('price','By Price') &nbsp; &nbsp;
                    @sortablelink('product_rating','By Rating') &nbsp;&nbsp;
                    @sortablelink('name','By Name')
                </div>
                    <div class="page_amount">
                        <p>{{$data->total()}} results</p>
                    </div>
                </div>
                <!--shop toolbar end-->
                
                <div class="row no-gutters shop_wrapper" id='shop-product' >
                    
                    @foreach($data as $pro)
                   <div class="col-lg-4 col-md-4 col-12 " >
                       <div class="single_product">
                           <div class="product_thumb">
                               <a href="{{ route('home.view',['id'=>$pro->id,'slug'=>$pro->slug]) }}"><img src="{{url('')}}/public/assets/img/product/{{ $pro->image }}" alt=""></a>
                               <div class="label_product">
                                @if($pro->sale_price > 0)
                                   <span class="label_sale" style="background-color:red">sale</span>
                                   @endif
                               </div>
                               <div class="quick_button">
                                   <a href="#" data-toggle="modal" data-target="#modal_box{{ $pro->id }}"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                               </div>
                           </div>
                           <div class="product_content grid_content">
                               <div class="product_name">
                                   <h3><a href="{{ route('home.view',['id'=>$pro->id,'slug'=>$pro->slug]) }}">{{$pro->name}}</a></h3>
                               </div>
                               <div class="product_rating">
                                   <ul>
                                   @for( $i=0; $i<round($pro->product_rating); $i++ )
                                               <li><a><i style="color: yellow" class="ion-ios-star"></i></a></li>
                                               @endfor
                                               @for( $i=5; $i>round($pro->product_rating); $i-- )
                                               <li><a"><i class="ion-ios-star"></i></a"></li>
                                               @endfor
                                   </ul>
                               </div>
                                <div class="price_box">
                                @if($pro->sale_price > 0)
                                       <span class="current_price">{{ number_format($pro->sale_price) }} đ</span>
                                       <span class="old_price">{{ number_format($pro->price) }} đ</span>
                                       @else 
                                       <span class="current_price">{{ number_format($pro->price) }} đ</span>
                                   @endif
                               </div>
                               <div class="action_links">
                                   <ul>
                                    @if (Auth::guard('useracc')->check())
                                      <li class="wishlist"><a href="{{route('wishlist.add',['id'=>$pro->id])}}" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                      @endif
                                       <li class="add_to_cart"><a href="{{ route('cart.add',['id'=>$pro->id]) }}" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                   </ul>
                               </div>
                           </div>
                           
                       </div>
                   </div>
                   @endforeach
                
                </div>
                

                 <div class="shop_toolbar t_bottom">
                    <div class="pagination">
                        {!!  $data->appends(Request::except('demo'))->render() !!}
                    </div>
                </div>
                <!--shop toolbar end-->
                <!--shop wrapper end-->
            </div>
        </div>
    </div>
</div>

    <!--shop  area end-->
    <footer class="footer_widgets footer_eight">
        <div class="container">
            <div class="footer_top">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="widgets_container contact_us">
                            <a href="{{ route('home') }}"><img src="{{url('')}}/public/assets/img/logo/Techylogo.png" alt=""></a>
                            <div class="footer_contact">
                                <ul>
                                    <li><i class="zmdi zmdi-home"></i><span>Addresss:</span> 2 Lorem Rd,Ipsum, London</li>
                                    <li><i class="zmdi zmdi-phone-setting"></i><span>Phone:</span><a href="tel:(+84) 373302668">(+84) 373302668</a> </li>
                                    <li><i class="zmdi zmdi-email"></i><span>Email:</span>  whysoserious245@gmail.com</li>
                                </ul>
                            </div>
                             <div class="social_icone">
                                <ul>
                                    <li class="twitter"><a href="https://twitter.com/beatsbydre" title="twitter"><i class="fa fa-twitter"></i></a>
                                        <div class="social_title">
                                            <p>Follow Us</p>
                                            <h3>Twitter</h3>
                                        </div>
                                    </li>
                                    <li class="facebook"><a href="https://www.facebook.com/beatsbydre/" title="facebook"><i class="fa fa-facebook"></i></a>
                                        <div class="social_title">
                                            <p>Find Us</p>
                                            <h3>Facebook</h3>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-7">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="widgets_container widget_menu">
                                    <h3>CUSTOMER SERVICE</h3>
                                    <div class="footer_menu">
                                        <ul>
                                            <li><a href="{{ route('shipret') }}">Shipping & Returns</a></li>
                                            <li><a href="{{ route('secshop') }}"> Secure Shopping</a></li>
                                            <li><a href="{{ route('intship') }}">International Shipping</a></li>
                                            <li><a href="{{ route('contact') }}"> Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="widgets_container widget_menu">
                                    <h3>Information</h3>
                                    <div class="footer_menu">
                                        <ul>
                                            <li><a href="{{ route('about') }}">About Us</a></li>
                                            <li><a href="{{ route('deliinfo') }}">Delivery Infomation</a></li>
                                            <li><a href="{{ route('policy') }}">Privacy Policy</a></li>
                                            <li><a href="{{ route('faq') }}"> Frequently Questions</a></li>

                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-5">
                        <div class="widgets_container">
                            <h3>instagram</h3>
                            <div class="instagram_gallery">
                                <div class="single_instagram">
                                    <a href="https://www.instagram.com/p/B9FUPf7lOrh/"><img src="{{url('')}}/public/assets/img/about/1.png" alt=""></a>
                                </div>
                                <div class="single_instagram">
                                    <a href="https://www.instagram.com/p/B9CuR1gHf0M/"><img src="{{url('')}}/public/assets/img/about/2.png" alt=""></a>
                                </div>
                                <div class="single_instagram">
                                    <a href="https://www.instagram.com/p/B8j2qt5FiyJ/"><img src="{{url('')}}/public/assets/img/about/3.png" alt=""></a>
                                </div>
                                <div class="single_instagram">
                                    <a href="https://www.instagram.com/p/B8cZnkdl31S/"><img src="{{url('')}}/public/assets/img/about/4.png" alt=""></a>
                                </div>
                                <div class="single_instagram">
                                    <a href="https://www.instagram.com/p/B8PPsIRFGbw/"><img src="{{url('')}}/public/assets/img/about/5.png" alt=""></a>
                                </div>
                                <div class="single_instagram">
                                    <a href="https://www.instagram.com/p/B76oweKli56/"><img src="{{url('')}}/public/assets/img/about/6.png" alt=""></a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
         <div class="footer_bottom">
            <div class="container">
               <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="copyright_area">
                            <p>Copyright &copy; 2019 <a href="#">{{$copyright}}</a>  All Right Reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="footer_payment text-right">
                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer area end-->


    <!-- modal area start-->
    @foreach($data as $pros)
<div class="modal fade" id="modal_box{{$pros->id}}" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" >
                                            <div class="modal_tab_img">
                                                <a href=""><img src="{{url('')}}/public/assets/img/product/{{ $pros->image }}" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href=""><img src="{{url('')}}/public/assets/img/product/{{ $pros->image_2 }}" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href=""><img src="{{url('')}}/public/assets/img/product/{{ $pros->image_3 }}" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href=""><img src="{{url('')}}/public/assets/img/product/{{ $pros->image_4 }}" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li >
                                                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="{{url('')}}/public/assets/img/product/{{ $pros->image }}" alt=""></a>
                                            </li>
                                            <li>
                                                 <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="{{url('')}}/public/assets/img/product/{{ $pros->image_2 }}" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="{{url('')}}/public/assets/img/product/{{ $pros->image_3 }}" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="{{url('')}}/public/assets/img/product/{{ $pros->image_4 }}" alt=""></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2><a href="{{ route('home.view',['id'=>$pros->id,'slug'=>$pros->slug]) }}">{{$pros->name}}</a></h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        @if($pros->sale_price > 0)
                                            <span class="new_price">{{ number_format($pros->sale_price) }} đ</span>
                                            <span class="old_price">{{ number_format($pros->price) }} đ</span>
                                            @else 
                                            <span class="new_price">{{ number_format($pros->price) }} đ</span>
                                        @endif
                                    </div>
                                    <div class="modal_description mb-15">
                                            <br>
                                            <br>
                                        <p>{{$pros->shortdes}}</p>
                                            <br>
                                            <br>
                                    </div>
                                    <div class="variants_selects">

                                        <div class="modal_add_to_cart">
                                            <form action="{{ route('cart.add',['id'=>$pros->id]) }}">
                                                <input  value="1" type="hidden">
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

     <!-- modal area end-->



<!-- JS
============================================ -->

<!-- Plugins JS -->
<script>
    function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.visibility = 'visible';
    }
    else document.getElementById('ifYes').style.visibility = 'hidden';

}
</script>
<script>
// Get the modal
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == moda) {
    modal.style.display = "none";
  }
}
</script>
<script>
    if(document.querySelector(".starIcon1") != undefined){

// initialize the rating stars list as a global variable to reuse it later
let stars = [];

// init the stars query selectors
function starQueryInit(){
    // create the querySelector of each 5 stars and push it to the stars list
    for(let i=1; i <= 5; i++){
        stars.push(document.querySelector(".starIcon"+i));
    }
}

// remove the clickedStar class on every stars
function removeClickedStar(){
    for(let i = 0; i < stars.length; i++){
        stars[i].classList.remove("clickedStar");
    }
}

// add the clickedStar function when clicked and check his radio button
function addClickedStar(numStar){
    // clickedStar function when clicked
    for(let i = 0; i < numStar; i++){
        stars[i].classList.add("clickedStar");
    }
    // check his radio button
    document.querySelector("input[type=radio].star"+numStar).checked = true;
    let checkedValue = document.querySelector('input[name="comment[rating]"]:checked').value;
    // console.log(checkedValue);
}

// translate hover effect
function translateHover(numStar, translateY){
    for(let i = 0; i < numStar; i++){
        stars[i].style.transform = translateY;
    }
}

function createRatingEventListeners(){
    // create the translateY up and down values
    let translateLst = ["translateY(-5px)", "translateY(0px)"];
    // iterate over the stars and add event listeners
    for(let i = 0; i < stars.length; i++){
        // set the number of star value
        let numStar = i+1;

        // hover effect translateY up and down
        // add the up translateY hover effect
        stars[i].addEventListener("mouseover", ()=>{
            translateHover(numStar, translateLst[0]);
        });
        // add the up translateY hover effect
        stars[i].addEventListener("mouseout", ()=>{
            translateHover(numStar, translateLst[1]);
        });

        // click event listener (change color and check the radio button)
        stars[i].addEventListener("click", ()=> {
            // remove all the clickedStar
            removeClickedStar();
            // add clickedStar and check his radio button
            addClickedStar(numStar);
        });
    }
}

// init the stars query selectors
starQueryInit();
// create the events listeners
createRatingEventListeners();
}

</script>
<script>
    (function() {

var Modal = function() {
  this.Selector = {
    overlay: '.Modal-overlay',
    box: '.Modal-box',
    button: '[data-modal=button]'
  };

  this.Markup = {
    close: '<div class="Modal-close">&times;</div>',
    overlay: '<div class="Modal-overlay"></div>',
    box: '<div class="Modal-box"></div>'
  };

  this.youtubeID = false;
};

Modal.prototype = {

  toggleOverflow: function() {
    $('body').toggleClass('Modal-cancel-overflow');
  },

  videoContainer: function() {
    return '<div class="video-container"><iframe id="player" frameborder="0" allowfullscreen="1" title="YouTube video player" width="560" height="315" src="//www.youtube.com/embed/' + this.youtubeID + '?autoplay=1&rel=0" frameborder="0"></iframe></div>';
  },

  addOverlay: function() {
    var self = this;
    $(this.Markup.overlay).appendTo('body').fadeIn('slow', function() {
      self.toggleOverflow();
    });
    $(this.Selector.overlay).on('click touchstart', function() {
      self.closeModal();
    });
  },

  addModalBox: function() {
    $(this.Markup.box).appendTo(this.Selector.overlay);
  },

  buildModal: function(youtubeID) {
    this.addOverlay();
    this.addModalBox();
    $(this.Markup.close).appendTo(this.Selector.overlay);
    $(this.videoContainer(youtubeID)).appendTo(this.Selector.box);
  },

  closeModal: function() {
    this.toggleOverflow();
    $(this.Selector.overlay).fadeOut().detach();
    $(this.Selector.box).empty();
  },

  getYoutubeID: function() {
    return this.youtubeID;
  },

  setYoutubeID: function(href) {
    var id = '';
    if (href.indexOf('youtube.com') > -1) {
      // full Youtube link
      id = href.split('v=')[1];
    } else if (href.indexOf('youtu.be') > -1) {
      // shortened Youtube link
      id = href.split('.be/')[1];
    } else {
      // in case it's not a Youtube link, send them on their merry way
      document.location = href;
    }
    // If there's an ampersand, remove it and return what's left, otherwise return the ID
    // this.youtubeID = (id.indexOf('&') != -1) ? id.substring(0, amp) : id;
    this.youtubeID = id;
  },

  startup: function(href) {
    this.setYoutubeID(href);
    if (this.youtubeID) {
      this.buildModal();
    }
  }
};

$(document).ready(function() {
  var modal = new Modal();
  $(modal.Selector.button).on('click touchstart', function(e) {
    e.preventDefault();
    modal.startup(this.href);
  });
});

})(this);
</script>
<script>
    $(function() {
    $('#favoritesModal').on("show.bs.modal", function (e) {
         $("#favoritesModalLabel").html($(e.relatedTarget).data('title'));
         $("#fav-title").html($(e.relatedTarget).data('title'));
    });
});
</script>
<script src="{{url('')}}/public/assets/js/plugins.js"></script>
<script src='{{url('')}}/public/assets/jquery-ui/jquery.js' type='text/javascript'></script>
<script src='{{url('')}}/public/assets/jquery-ui/jquery-ui.min.js' type='text/javascript'></script>
<script src="{{url('')}}/public/assets/range/js/ion.rangeSlider.min.js"></script>
<script>
    $(".js-range-slider").ionRangeSlider({
        type: "double",
        skin: "round",
        min: 10000,
        max: 10000000,
        from: 10000,
        step: 10000,
        prettify_enabled: true,
        prettify_separator: ","
    });
</script>
<!-- Main JS -->
<script src="{{url('')}}/public/assets/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
</body>

</html>