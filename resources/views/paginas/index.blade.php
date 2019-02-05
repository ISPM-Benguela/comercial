@extends('layouts.ecomerce')

@section('head')
 <link rel="stylesheet" href="{{asset('css/inicio/inicio.css')}}">
 <link rel="stylesheet" href="{{asset('css/vetrine.css')}}">
@stop
@section('principal')

	<!-- Slider -->
	<section class="section-slide">
		<div class="row">
		<div class="col-md-4 col-sm-4">
			<div class="container">
				<div class="well">
					<h2 class="">Categorias</h2>

					<ul class="nav-list">
					    @if(count($categorias) > 0)
							@foreach($categorias as $categoria)
								<li><a href="{{route('categoria.edit', ['id' => $categoria->id])}}">{{ $categoria->nome }} <span class="badge badge-danger">44</span></a></li>
							@endforeach
						@else
							<li><a href="">Nao temos ainda categoria</a></li>
						@endif
					</ul>
				</div>
			</div>
		</div>
		  <div class="col-md-7 col-sm-4">
		    <div class="wrap-slick1">
			
			 <div class="slick1">
			 @if(count($carousel) > 0)
			 	@foreach($carousel as $carouse)
				<div class="item-slick1" style="background-image: url('{{asset('storage')}}/{{ $carouse->imagem }}'); background-size: 70% 70%;">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									{{$carouse->nome }}
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1" style="color: #D9251B;">
									{{ $carouse->preco }} Kz
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Adicionar ao carrinho
								</a>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			 @else
               <div><h3>Precisas cadastrar produtos</h3></div>
			 @endif
			 </div><!-- ./ slick1 -->
			 
		    </div>
		  </div>
		  
		</div>
	</section>



	<!-- Product -->
	<section class="bg0 p-t-23 p-b-140">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Produtos em destaques
				</h3>
			</div>

			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					
				</div>

				<div class="flex-w flex-c-m m-tb-10">

					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Buscar
					</div>
				</div>
				
				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8 dis-flex p-l-15">

						<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Buscar produto">
					</div>	
				</div>
			</div>

			<div class="row isotope-grid">
			   @if(count($produtos) > 0)

			   @foreach($produtos as $produto)
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0" style="background: #ccc; border-radius: 8px;">
							<img src="{{asset('storage')}}/{{ $produto->imagem }}" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Comprar
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									{{ $produto->nome }}
								</a>

								<span class="stext-105 cl3">
									{{ $produto->preco }} Kz
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
							</div>
						</div>
					</div>
				</div>
				@endforeach
                @else 
				  <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<h3>Deves Cadastrar produto</h3>
				  </div>
				@endif 
			</div>

            <div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Produtos em disponivel
				</h3>
			</div>

            <div class="row isotope-grid">
			 @foreach($desponivel as $desp)
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="{{asset('storage')}}/{{ $desp->imagem }}"  alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Comprar
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									{{ $desp->nome }}
								</a>

								<span class="stext-105 cl3">
									{{ $desp->preco }}
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>
			  @endforeach	
			</div>

			<!-- Load more -->
			<div class="flex-c-m flex-w w-full p-t-45">
				<a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Load More
				</a>
			</div>
		</div>
	</section>

@stop

@section('script')
 <script src="{{asset('js/backoffice/app.js')}}"></script>
@stop