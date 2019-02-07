@extends('layouts.ecomerce')

@section('head')
 <link rel="stylesheet" href="{{asset('css/inicio/inicio.css')}}">
 <link rel="stylesheet" href="{{asset('css/vetrine.css')}}">
@stop
@section('principal')

	<!-- Slider -->
	<section class="section-slide">
		<div style="height: 80px;"></div>
	</section>



	<!-- Product -->
	<section class="bg0 p-t-23 p-b-140">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Produtos da categoria ( {{ $categoria->nome }} )
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

							<a href="{{route('carrinho.edit', ['id' => $produto->id])}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Comprar
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="{{route('carrinho.edit', ['id' => $produto->id])}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
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

		</div>
	</section>

@stop

@section('script')
 <script src="{{asset('js/backoffice/app.js')}}"></script>
@stop