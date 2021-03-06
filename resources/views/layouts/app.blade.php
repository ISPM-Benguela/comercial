<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/linearicons-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/slick/slick.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/MagnificPopup/magnific-popup.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
	<link rel="stylesheet" href="{{asset('css/estilo.css')}}">
    @yield('head')
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header-v4">
			<!-- Header desktop -->
			<div class="container-menu-desktop">
				<!-- Topbar -->
				<div class="top-bar">
					<div class="content-topbar flex-sb-m h-full">
						<div class="left-top-bar">
							
						</div>
	
						<div class="right-top-bar flex-w h-full">
							<a href="{{route('home')}}" class="flex-c-m trans-04 p-lr-25">
								Ver O site
							</a>
	
							<a href="{{route('perfil.index')}}" class="flex-c-m trans-04 p-lr-25">
								Minha Conta
							</a>
	
							<a href="#" class="flex-c-m trans-04 p-lr-25">
								{{ Auth::user()->name }}
								  ( <span>
								    @role('admin')
								        Admininstrador
								    @endrole
									@role('caixa')
								        Caixa
									@else 
									    Cliente	
								    @endrole
								 </span>)
							</a>
							<a class="flex-c-m trans-04 p-lr-25" href="{{route('logout')}}">Sair</a>
						
						</div>
					</div>
				</div>
	
				<div class="wrap-menu-desktop how-shadow1"  >
					<nav class="limiter-menu-desktop container" >
	
						<!-- Logo desktop -->
						<a href="{{route('inicio')}}" class="logo">
							 <img src="{{asset('images/icons/logo.jpg')}}" height="80" alt="IMG-LOGO"> 
							{{-- <h2 style="font-weight: bold;"><span style="color: red;">DB </span>Shopping</h2>--}}
						</a>
	
						<!-- Menu desktop -->
						<div class="menu-desktop">
							<ul class="main-menu">
								<li>
									<a href="{{route('usuarios.index')}}"><i class="fa fa-group"></i> Usuários</a>
								</li>
								<li><a href="{{route('previlegios.index')}}"><i class="fa fa-key"></i> Previlégios</a></li>
								<li><a href="{{route('nivel.index')}}"><i class="fa fa-unlock"></i> Niveis</a></li>
							</ul>
						</div>
	
						<!-- Icon header -->
						<div class="wrap-icon-header flex-w flex-r-m">
							<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
								<i class="zmdi zmdi-search"></i>
							</div>
	
							<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="0">
								<i class="zmdi zmdi-shopping-cart"></i>
							</div>

							<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="
							{{ $notitotal }}
							
							">
								<i class="zmdi zmdi-notifications"></i>
							</div>
	
							<img src="{{asset('storage')}}/{{Auth::user()->perfil->imagem }}"  alt="perfil "/>
						</div>
					</nav>
				</div>
			</div>
	
			<!-- Header Mobile -->
			<div class="wrap-header-mobile">
				<!-- Logo moblie -->
				<div class="logo-mobile">
					<a href=""><img src="{{asset('images/icons/logo.jpg')}}" height="80" alt="IMG-LOGO"></a>
				</div>
	
				<!-- Icon header -->
				<div class="wrap-icon-header flex-w flex-r-m m-r-15">
					<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
						<i class="zmdi zmdi-search"></i>
					</div>
	
					<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
						<i class="zmdi zmdi-shopping-cart"></i>
					</div>
	
					<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
						<i class="zmdi zmdi-favorite-outline"></i>
					</a>
				</div>
	
				<!-- Button show menu -->
				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
	
	
			<!-- Menu Mobile -->
			<div class="menu-mobile">
				<ul class="topbar-mobile">
					<li>
						<div class="left-top-bar">
							
						</div>
					</li>
	
					<li>
						<div class="right-top-bar flex-w h-full">
							<a href="#" class="flex-c-m p-lr-10 trans-04">
								Mais Vendidos
							</a>
	
							<a href="{{route('perfil.index')}}" class="flex-c-m p-lr-10 trans-04">
								Minha Conta
							</a>
	
							<a href="#" class="flex-c-m p-lr-10 trans-04">
								EN
							</a>
	
							<a href="#" class="flex-c-m p-lr-10 trans-04">
								USD
							</a>
						</div>
					</li>
				</ul>
	
				<ul class="main-menu-m">
					<li>
						<a href="index.html">Visitar o site</a>
						<ul class="sub-menu-m">
							<li><a href="index.html">Homepage 1</a></li>
						</ul>
						<span class="arrow-main-menu-m">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</span>
					</li>
	
					<li>
						<a href="product.html">Shop</a>
					</li>
				</ul>
			</div>
	
			<!-- Modal Search -->
			<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
				<div class="container-search-header">
					<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
						<img src="images/icons/icon-close2.png" alt="CLOSE">
					</button>
	
					<form class="wrap-search-header flex-w p-l-15">
						<button class="flex-c-m trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>
						<input class="plh3" type="text" name="search" placeholder="pesquisar...">
					</form>
				</div>
			</div>
		</header>

	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Compras resentes
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>

			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/user.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								ADRIANO PAULOS
							</a>

							<span class="header-cart-item-info">
								<a href="">Aprovar a compra</a>
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/user.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								ARMANDO KATITO
							</a>

							<span class="header-cart-item-info">
								<a href="">Aprovar a compra</a>
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/user.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								HUMBERTO FORTES
							</a>

							<span class="header-cart-item-info">
								<a href="">Aprovar a compra</a>
							</span>
						</div>
					</li>
				</ul>

				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: 75.00 kzs
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="{{route('vendas.index')}}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							Ver todas compras
						</a>

					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Product -->
	<div class="bg0 m-t-23 p-b-140">
		<div class="container principal">
			<div class="row tudo">
				<div class="col-sm-2 col-xs-2 col-md-2 col-lg-2">
					<div class=" menu-sidebar how-shadow1">
						<div class="cabeca">
							<i class="fa fa-tachometer"></i>
							<h3 style="font-size: 16px;  font-weight: bold; "> Painel de Controle </h3>
						</div>
						<div class="corpo">
							<ul class="nav">
									<li> <i class="icon fa fa-home"></i><a href="{{route('inicio')}}"> Inicio </a></li>
									<li> <i class="icon fa fa-shopping-basket"></i><a href="{{route('produtos.index')}}"> Produtos <span class="badge">{{ $totalproduto }}</span></a></li>
									<li> <i class="icon fa fa-hourglass-start"></i><a href="{{route('promover.index')}}"> Promoção <span class="badge">{{ $totalpromo }}</span></a></li>
									<li><a href="{{route('categorias.index')}}">Categoria <span class="badge badge-danger">{{ $categTotal }} </span> </a></a></li>
									<li><i class="icon fa fa-group"></i><a href="{{route('vendas.index')}}"> Aprovar  vendas</a></li>
									<li><i class="icon fa fa-gift"></i><a href="{{route('encomendas.index')}}"> Encomendas <span class="badge badge-danger">{{ $totalEncomeda }} </span> </a></li>
									<li><i class="icon fa fa-feed"></i><a href="{{ route('notificacao.index')}}"> Notificações <span class="badge badge-danger">{{ $notitotal }}</span></a></li>
									<li><i class="icon fa fa-gears"></i><a href="{{ route('carousel.index')}}"> Carousel </a></li>
							</ul>
						</div>
						<div class="roda-pe">
							
						</div><!-- ./ roda-pe -->
					</div><!-- ./ menu side-bar -->
				</div>
				<div class="col-sm-10 col-xs-10 col-md-10 col-lg-10" >
				    @include('includes.alerts')
					@yield('principal')
				</div>
			</div>
		</div>
	</div>


	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						CATEGORIAS
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Electro Domestco
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Musica
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Roupa
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Outros
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						AJUDA
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								COMO RECEBER PRODUTO
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								COMO COMPRAR ONLINE
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								COMO ENCOMENDAR
							</a>
						</li>

					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						ENTRE EM CONTACTO
					</h4>

					<p class="stext-107 cl7 size-201">
						Tem duvidas?  Aqui vai o nosso endereco , Benguela - Lobito (Liro), (+244) 926 716 6879
					</p>

					<div class="p-t-27">
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-pinterest-p"></i>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Receber Novidades
					</h4>

					<form>
						<div class="wrap-input1 w-full p-b-4">
							<input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
							<div class="focus-input1 trans-04"></div>
						</div>

						<div class="p-t-18">
							<button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
								Subscrever
							</button>
						</div>
					</form>
				</div>
			</div>

				

				<p class="stext-107 cl6 txt-center">
Copyright &copy;<script>document.write(new Date().getFullYear());</script></a>

				</p>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	
<!--===============================================================================================-->
	<script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/select2/select2.min.js')}}"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}s"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/slick/slick.min.js')}}"></script>
	<script src="{{asset('js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/parallax100/parallax100.js')}}"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/MagnificPopup/jquery.magnific-popup.min.js')}}"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/isotope/isotope.pkgd.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/sweetalert/sweetalert.min.js')}}"></script>
	<script>
		$('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

	</script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
<script src="{{asset('js/js-webshim/minified/polyfiller.js')}}"></script>


    <script>
        $(document).ready(function(){
            webshims.setOptions('forms-ext', {
            replaceUI: 'auto',
            types: 'number'
        });
             webshims.polyfill('forms forms-ext');
        });
    </script>
<!--===============================================================================================-->
	<script src="{{asset('js/main.js')}}"></script>
    @yield('footer')

</body>
</html>
