@extends('layouts.ecomerce')


@section('head')
    <link rel="stylesheet" href="{{asset('css/backoffice/carrinho.css')}}">
@stop

@section('principal')
    <div class="container carrinho">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				<div class="row">
					<div class="col-md-6 col-lg-7 p-b-30">
					   @if (Session::has('warning'))
						<div class="clearfix"></div>
						<div class="alert alert-warning" role="alert">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							{!! Session::get('warning') !!}
						</div>
						@endif
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

								<div class="slick3 gallery-lb">

									<div class="item-slick3" style="background: #ccc;" data-thumb="{{asset('images/product-detail-03.jpg')}}">
										<div class="wrap-pic-w pos-relative">
											<img src="{{asset('storage')}}/{{ $produto->imagem }} " alt="IMG-PRODUCT">

										</div>
									</div>
								</div>
							</div>
						</div>
					
					</div>
					
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
								{{ $produto->nome }}
							</h4>

							<span class="mtext-106 cl2">
								{{ $produto->preco }} Kz
							</span>

							<p class="stext-102 cl3 p-t-23">
								{{ $produto->descricao }}
							</p>
							
							<!--  -->
						
					
                                <div style="border-top: 1px solid dashed #000; height: 20px;"></div>
								<form action="{{route('carrinho.store')}}" method="POST" class="form">
									
								    <div class="form-group">
									    <label>Quantidade</label>
										<input type="number" name="quantidade" value="1" class="form-control"  />
									</div>
 
                                    <div class="size-204 flex-w flex-m respon6-next">
										 <input type="hidden" name="id" value="{{ $produto->id }}">
										 <input type="hidden" name="preco" value="{{ $produto->preco }}">
										 <input type="hidden" name="produto" value="{{ $produto->nome }}">
                                        <input type="hidden" name="_token" value="{{ Session::token() }}">
										<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 ">
											Adicionar ao carrinho
										</button>
									</div>
								</form>	
							</div>

							<!--  -->
							<div class="flex-w flex-m p-l-100 p-t-40 respon7">
								<div class="flex-m bor9 p-r-10 m-r-11">
									<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
										<i class="zmdi zmdi-favorite"></i>
									</a>
								</div>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
									<i class="fa fa-facebook"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
									<i class="fa fa-twitter"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
									<i class="fa fa-google-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@stop

