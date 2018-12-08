
<!DOCTYPE html>
<html lang="en">
<head>
<title>Colo Shop</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('css/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
</head>

<body>

<div class="super_container">

	<!-- Header -->

	<header class="header trans_300 cabeca">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left"></div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">

								<!-- Currency / Language / My Account -->

								<li class="language imagem">
									<img src="{{asset('images/user.jpg')}}" />
                                </li>
                                @guest
								<li class="account">
									<a href="#">
										Minha conta
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
										<li><a href="{{route('login')}}"><i class="fa fa-sign-in" aria-hidden="true"></i>Entrar</a></li>
										<li><a href="{{route('register')}}"><i class="fa fa-user-plus" aria-hidden="true"></i>Registar</a></li>
									</ul>
                                </li>
                                @else
                                <li class="language"><a href="">{{ Auth::user()->name }}</a></li>
                                <li class="language"><a href="{{route('inicio')}}">Painel de controle</a></li>
                                <li class="account">
									<a href="#">
										Minha conta
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
										<li><a href="{{route('produtos.index')}}"><i class="fa-dashboard" aria-hidden="true"></i>Painel de controle</a></li>
										<li><a href="{{route('logout')}}"><i class="fa fa-user-plus" aria-hidden="true"></i>Sair</a></li>
									</ul>
                                </li>
                                @endguest
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
							<img src="{{asset('images/icons/logo-01.png')}}" width="100" />
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="#">Inicio</a></li>
								<li><a href="#">Sobre</a></li>
								<li><a href="#">Contacto</a></li>
								<li><a href="#">Ajuda</a></li>
							</ul>
							<ul class="navbar_user">
								<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
								<li class="checkout">
									<a href="#">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<span id="checkout_items" class="checkout_items">2</span>
									</a>
								</li>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
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
				<li class="menu_item"><a href="#">home</a></li>
				<li class="menu_item"><a href="#">shop</a></li>
				<li class="menu_item"><a href="#">promotion</a></li>
				<li class="menu_item"><a href="#">pages</a></li>
				<li class="menu_item"><a href="#">blog</a></li>
				<li class="menu_item"><a href="#">contact</a></li>
			</ul>
		</div>
	</div>

	<!-- Slider -->

	<div class="main_slider">
		<div class="container fill_height">
			<div class="row align-items-center fill_height">
			
				<div class="col-md-8">
					<div class="main_slider_content carouseli">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">
								<img class="d-block w-100" src="{{asset('images/produtos1/product01.png')}}" alt="First slide">
								<div class="carousel-caption d-none d-md-block">
									<h5>Nome do Produto</h5>
									<p>Preco do produto</p>
									 <button type="submit" class="btn btn-primary">Comprar</button>
								</div>
								</div>
								<div class="carousel-item">
								<img class="d-block w-100" src="images/produtos1/product02.png" alt="Second slide">
								<div class="carousel-caption d-none d-md-block">
									<h5>Nome do Produto</h5>
									<p>Preco do produto</p>
									 <button type="submit" class="btn btn-primary">Comprar</button>
								</div>
								</div>
								<div class="carousel-item">
								<img class="d-block w-100" src="images/produtos1/product03.png" alt="Third slide">
								<div class="carousel-caption d-none d-md-block">
									<h5>Nome do Produto</h5>
									<p>Preco do produto</p>
									 <button type="submit" class="btn btn-primary">Comprar</button>
								</div>
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
							</div>
					</div>
					
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="categoria">
						<h3>categorias</h3>

						<ul>
							<li><a href="">Electro Domestico</a></li>
							<li><a href="">Computadores</a></li>
							<li><a href="">Telefones</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

  
	<!-- New Arrivals -->

	<div class="new_arrivals">
		<div class="container fill_height">
			<div class="row align-items-center fill_height">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Produtos Novo</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

						<!-- Product 1 -->

						<div class="product-item men">
							<div class="product discount product_filter">
								<div class="product_image">
									<img src="images/produtos1/product01.png" alt="">
								</div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">NoteBoo HP 2000</a></h6>
									<div class="product_price">123.000 Kz</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">Adicionar ao carrinho</a></div>
						</div>

						<!-- Product 2 -->

						<div class="product-item women">
							<div class="product product_filter">
								<div class="product_image">
									<img src="images/produtos1/product03.png" alt="">
								</div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">NoteBoo HP 2000</a></h6>
									<div class="product_price">123.000 Kz</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">Adicionar ao carrinho</a></div>
						</div>

						<!-- Product 3 -->

						<div class="product-item women">
							<div class="product product_filter">
								<div class="product_image">
									<img src="images/produtos1/product04.png" alt="">
								</div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">NoteBoo HP 2000</a></h6>
									<div class="product_price">123.000 Kz</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">Adicionar ao carrinho</a></div>
						</div>

						<!-- Product 4 -->

						<div class="product-item accessories">
							<div class="product product_filter">
								<div class="product_image">
									<img src="images/produtos1/product09.png" alt="">
								</div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">NoteBoo HP 2000</a></h6>
									<div class="product_price">123.000 Kz</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">Adicionar ao carrinho</a></div>
						</div>

						<!-- Product 5 -->

						<div class="product-item women men">
							<div class="product product_filter">
								<div class="product_image">
									<img src="images/produtos1/product02.png" alt="">
								</div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">NoteBoo HP 2000</a></h6>
									<div class="product_price">123.000 Kz</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">Adicionar ao carrinho</a></div>
						</div>

						<!-- Product 6 -->

						<div class="product-item women men">
							<div class="product product_filter">
								<div class="product_image">
									<img src="images/produtos1/product07.png" alt="">
								</div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">NoteBoo HP 2000</a></h6>
									<div class="product_price">123.000 Kz</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">Adicionar ao carrinho</a></div>
						</div>

						<!-- Product 7 -->

						<div class="product-item women men">
							<div class="product product_filter">
								<div class="product_image">
									<img src="images/produtos1/product06.png" alt="">
								</div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">NoteBoo HP 2000</a></h6>
									<div class="product_price">123.000 Kz</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">Adicionar ao carrinho</a></div>
						</div>

						<!-- Product 8 -->

						<div class="product-item women men">
							<div class="product product_filter">
								<div class="product_image">
									<img src="images/produtos1/product09.png" alt="">
								</div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">NoteBoo HP 2000</a></h6>
									<div class="product_price">123.000 Kz</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">Adicionar ao carrinho</a></div>
						</div>

						<!-- Product 9 -->

						<div class="product-item women men">
							<div class="product product_filter">
								<div class="product_image">
									<img src="images/produtos1/product07.png" alt="">
								</div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">NoteBoo HP 2000</a></h6>
									<div class="product_price">123.000 Kz</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">Adicionar ao carrinho</a></div>
						</div>

						<!-- Product 10 -->

						<div class="product-item women men">
							<div class="product product_filter">
								<div class="product_image">
									<img src="images/produtos1/product07.png" alt="">
								</div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">NoteBoo HP 2000</a></h6>
									<div class="product_price">123.000 Kz</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">Adicionar ao carrinho</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Deal of the week -->

	<div class="deal_ofthe_week">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="deal_ofthe_week_img">
						<img src="images/deal_ofthe_week.png" alt="">
					</div>
				</div>
				<div class="col-lg-6 text-right deal_ofthe_week_col">
					<div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
						<div class="section_title">
							<h2>Conheças as nossas soluções</h2>
						</div>
						<ul class="timer">
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="day" class="timer_num">20</div>
								<div class="">Clientes</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="hour" class="timer_num">4</div>
								<div class="timer_unit">Categorias</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="minute" class="timer_num">59</div>
								<div class="">produtos</div>
							</li>
						</ul>
						<div class="red_button deal_ofthe_week_button"><a href="#">Saber mais</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Best Sellers -->

	<div class="best_sellers">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Produtos Mais vendidos</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product_slider_container">
						<div class="owl-carousel owl-theme product_slider">

							<!-- Slide 1 -->

							<div class="owl-item product_slider_item">
								<div class="product-item">
									<div class="product discount">
										<div class="product_image">
											<img src="{{asset('images/produtos1/product02.png')}}" alt="">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>Pro</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">HeadPhone Bluetooths</a></h6>
											<div class="product_price">220.00 Kz<span>590.00 Kz</span></div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 2 -->

							<div class="owl-item product_slider_item">
								<div class="product-item women">
									<div class="product">
										<div class="product_image">
											<img src="images/produtos1/product08.png" alt="">
										</div>
										<div class="favorite"></div>
								
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">NoteBok Asus</a></h6>
											<div class="product_price">610.000 Kz</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 3 -->

							<div class="owl-item product_slider_item">
								<div class="product-item women">
									<div class="product">
										<div class="product_image">
											<img src="images/produtos1/product09.png" alt="">
										</div>
										<div class="favorite"></div>
								
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">NoteBok Asus</a></h6>
											<div class="product_price">610.000 Kz</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 4 -->

							<div class="owl-item product_slider_item">
								<div class="product-item women">
									<div class="product">
										<div class="product_image">
											<img src="images/produtos1/product04.png" alt="">
										</div>
										<div class="favorite"></div>
								
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">NoteBok Asus</a></h6>
											<div class="product_price">610.000 Kz</div>
										</div>
									</div>
								</div>
							</div><

							<!-- Slide 5 -->

							<div class="owl-item product_slider_item">
								<div class="product-item women">
									<div class="product">
										<div class="product_image">
											<img src="images/produtos1/product06.png" alt="">
										</div>
										<div class="favorite"></div>
								
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">NoteBok Asus</a></h6>
											<div class="product_price">610.000 Kz</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 6 -->

							<div class="owl-item product_slider_item">
								<div class="product-item women">
									<div class="product">
										<div class="product_image">
											<img src="images/produtos1/product06.png" alt="">
										</div>
										<div class="favorite"></div>
								
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">NoteBok Asus</a></h6>
											<div class="product_price">610.000 Kz</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Slide 7 -->

							<div class="owl-item product_slider_item">
								<div class="product-item women">
									<div class="product">
										<div class="product_image">
											<img src="images/produtos1/product06.png" alt="">
										</div>
										<div class="favorite"></div>
								
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">NoteBok Asus</a></h6>
											<div class="product_price">610.000 Kz</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 8 -->

							<div class="owl-item product_slider_item">
								<div class="product-item women">
									<div class="product">
										<div class="product_image">
											<img src="images/produtos1/product06.png" alt="">
										</div>
										<div class="favorite"></div>
								
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">NoteBok Asus</a></h6>
											<div class="product_price">610.000 Kz</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 9 -->

							<div class="owl-item product_slider_item">
								<div class="product-item women">
									<div class="product">
										<div class="product_image">
											<img src="images/produtos1/product06.png" alt="">
										</div>
										<div class="favorite"></div>
								
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">NoteBok Asus</a></h6>
											<div class="product_price">610.000 Kz</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Slide 10 -->

							<div class="owl-item product_slider_item">
								<div class="product-item men">
									<div class="product">
										<div class="product_image">
											<img src="{{asset('images/produtos1/product06.png')}}" alt="">
										</div>
										<div class="favorite"></div>
								
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">NoteBok Asus</a></h6>
											<div class="product_price">610.000 Kz</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Slider Navigation -->

						<div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-left" aria-hidden="true"></i>
						</div>
						<div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-right" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Benefit -->

	<div class="benefit">
		<div class="container">
		<div class="col text-center" style="padding-bottom: 10%;">
					<div class="section_title new_arrivals_title">
						<h2>Marcas vendidos</h2>
					</div>
				</div>
			<div class="row benefit_row">
			
					
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 benefit_col" style="background: #fff;">
					<div class=" d-flex flex-row align-items-center">
						<img src="images/multichoices.jpeg" width="100" height="100" />
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 benefit_col">
					<div class=" d-flex flex-row align-items-center">
						<img src="images/samsumg.png" width="100" height="100" />
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 benefit_col">
					<div class=" d-flex flex-row align-items-center">
						<img src="images/dell.png" width="100" height="100" />
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 benefit_col">
					<div class=" d-flex flex-row align-items-center">
						<img src="images/hp.jpeg" width="100" height="100" />
					</div>
				</div>
			</div>
		</div>
	</div>

	

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						<h4>Quero receber novidades</h4>
						<p>Informe o teu email para receberes as nossas novidades assim que chegares</p>
					</div>
				</div>
				<div class="col-lg-6">
					<form action="post">
						<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
							<input id="newsletter_email" type="email" placeholder="teu email" required="required" data-error="Valid email is required.">
							<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Submeter</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
						<ul class="footer_nav">
							<li><a href="#">produtos1</a></li>
							<li><a href="#">Ajuda</a></li>
							<li><a href="contact.html">Contactos</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="footer_nav_container">
						<div class="cr">©2018 todo direito reservado. Desenvolvido por <a href="#">Zacarias</a></div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>

<script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('css/bootstrap4/popper.js')}}"></script>
<script src="{{asset('css/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('css/plugins/Isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('css/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('css/plugins/easing/easing.js')}}"></script>
<script src="{{asset('css/js/custom.js')}}"></script>
</body>

</html>
