<!DOCTYPE html>
<html lang="en">
<head>
<title>Colo Shop</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap4/bootstrap.min.css')}}">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/responsive.css')}}">


    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico')}}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/core-style.css')}}">
    <link rel="stylesheet" href="style.css">

    <!-- Responsive CSS -->
    <link href="{{ asset('css/responsive.css')}}" rel="stylesheet">



</head>

<body>

<div class="super_container">

	<!-- Header -->

	<header class="header trans_300">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="top_nav_left">free shipping on all u.s orders over $50</div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">

								<!-- Currency / Language / My Account -->

								<li class="currency">
									<a href="#">
										usd
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="currency_selection">
										<li><a href="#">cad</a></li>
										<li><a href="#">aud</a></li>
										<li><a href="#">eur</a></li>
										<li><a href="#">gbp</a></li>
									</ul>
								</li>
								<li class="language">
									<a href="#">
									 English
										<i class="fa fa-angle-down"></i>
									</a>


									
									<ul class="language_selection">
									
										<li><a href="#">French</a></li>
										<li><a href="#">Italian</a></li>
										<li><a href="#">German</a></li>
										<li><a href="#">Spanish</a></li>
									</ul>
								</li>
								<li class="account">
									<a href="#">
									My Account
									
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
										
									@if(!isset(Auth::user()->name))
										<li><a href="{{ url('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
										<li><a href="{{ url('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
										@else
										<li><a href=""><i class="fa fa-sign-in" aria-hidden="true"></i>{{Auth::user()->name}}</a></li>
										<li>
										<a style="color:white" href="#" data-toggle="modal" data-target="#logoutModal"><i style="color:red" class="fa fa-sign-out" aria-hidden="true"></i>
</a>
										</li>
										@endif


									
									
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="#">fashion<span>shop</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="{{ asset('')}}">home</a></li>
								<li><a href="#">shop</a></li>
								<li><a href="#">promotion</a></li>
								<li><a href="#">pages</a></li>
								<li><a href="#">blog</a></li>
								<li><a href="contact">contact</a></li>
							</ul>
							<ul class="navbar_user">
								
								<!-- <li><a href=""><i class="fa fa-search" aria-hidden="true"></i></a></li> -->
								<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
								<li class="checkout cart">
									<a href="#">
										
									<div id="header-cart-btn" target="_blank"><span class="cart_quantity"></span> <i class="ti-bag"></i> </div>
										<!-- <i class="fa fa-shopping-cart"  aria-hidden="true"></i> -->
										<!-- <span id="checkout_items" class="checkout_items">6</span> -->
									</a>

									@if(!isset(Auth::user()->name))
									<li>	<i class="fa fa-shopping-cart"  aria-hidden="true"></i></li>

@else
<!-- {{Auth::user()->id}}   -->
<li><a href="#"><i class="fa fa-user-o"></i>  </a></li>
<form action="{{ url('order/'.Auth::user()->id)}}" method="get">

<input type="submit"  value="order">
</form>
<!-- <li><a href="order">	<i class="fa fa-shopping-cart"  aria-hidden="true"></i></a></li> -->

@endif


								<!-- <li><a href="order">	<i class="fa fa-shopping-cart"  aria-hidden="true"></i></a></li> -->

									<!-- <div class="cart"> -->
                                        <!-- <a href="#" id="header-cart-btn" target="_blank"><span class="cart_quantity">2</span> <i class="ti-bag"></i> Your Bag $20</a> -->
                                     
                                        <ul class="cart-list">
											
										@foreach($cart->items as $item)
                                            <!-- <li> -->
												<div class="row p-2 yy">
													
                                                <a href="#" class="image"><img src="{{ asset('images/'.$item['image']) }}" class="cart-thumb" alt=""></a>
											
												<h6><a href="#">{{ $item['name'] }}</a></h6>
												
                                                <div class="cart-item-desc">
												<p>		{{$item['quantity']}}x -<a href="#" class="price">{{number_format($item['price'],0,',','.') }} VND</a></p>
                                                  
													<!-- {{$item['user_id']}} -->
												

							
													<!-- <br> -->
												
                                                    <!-- <p>1x - <span class="price">{{ number_format($item['price'],0,',','.') }} VND</span></p> -->
                                                </div>
                                                <span class="dropdown-product-remove"><i class="icon-cross"></i></span>
                                            <!-- </li> -->
											</div>
											@endforeach
                                           
                                            <li class="total">
                                                <span class="pull-right">Total: {{number_format($cart ->total_price,0,',','.')}} VND</span>
												
                                                <a href="cart/view" class="btn btn-sm btn-cart">Cart</a>


                                                <a href="checkout" class="btn btn-sm btn-checkout">Checkout</a>
                                            </li>
                                        </ul>
                                    <!-- </div> -->

								</li>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
					<div class="col-lg-8"></div>
					<div id ="input-search" class="col-lg-4 p-1 ">
					<form action="{{ url('result') }}" method="post">
								@csrf
								<input type="text"style="height:35px;" size="30" placeholder="Search" value="{{ old('search')}}" name="search" id="">
								
								<button type="submit" class="btn btn-danger">Search</button>
								<!-- <input type="submit" value="Search"  > -->
								
								
								</form>
					</div>
				</div>
			</div>
		</div>

	</header>

	<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				<li class="menu_item has-children">
					<a href="#">
						usd
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#">cad</a></li>
						<li><a href="#">aud</a></li>
						<li><a href="#">eur</a></li>
						<li><a href="#">gbp</a></li>
					</ul>
				</li>
				<li class="menu_item has-children">
					<a href="#">
						English
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#">French</a></li>
						<li><a href="#">Italian</a></li>
						<li><a href="#">German</a></li>
						<li><a href="#">Spanish</a></li>
					</ul>
				</li>
				<li class="menu_item has-children">
					<a href="#">
						My Account
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">


					


						<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
						<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
					</ul>

					

				</li>

			


				<!-- <li class="menu_item"><a href="#">home</a></li>
				<li class="menu_item"><a href="#">shop</a></li>
				<li class="menu_item"><a href="#">promotion</a></li>
				<li class="menu_item"><a href="#">pages</a></li>
				<li class="menu_item"><a href="#">blog</a></li>
				<li class="menu_item"><a href="#">contact</a></li> -->
			</ul>

			

		</div>
	</div>
 

	


	
  {{ $slot }}
