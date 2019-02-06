@extends('layouts.ecomerce')

@section('principal')
	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Shoping Cart
			</span>
		</div>
	</div>

    <div class="container">
        <div class="row" style="margin-top: 7%;">
            <div class="col-md-4 col-sm-4" >
             <img src="{{asset('storage')}}/{{ Auth::user()->perfil->imagem }}" alt="Imagem do perfil" class="img-responsive thumbnail" width="200" height="200" />
            
            </div>
            <div class="col-md-7 col-sm-7">
              <form method="post" action="{{ route('perfil.update', ['id' => $perfil->id]) }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">

                        <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Nome <span class="required"></span>
                            </label>
                            <div class="">
                                <input type="text" value="{{$perfil->nome}}" id="nome" name="nome" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('nome'))
                                <span class="help-block">{{ $errors->first('nome') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('provincia') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="provincia">Provincia <span class="required"></span>
                            </label>
                            <div class="">
                                <input type="text" value="{{$perfil->provincia}}" id="provincia" name="provincia" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('provincia'))
                                <span class="help-block">{{ $errors->first('provincia') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('imagem') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Imagem <span class="required"></span>
                            </label>
                            <div class="">
                                <input type="file" value="{{$perfil->imagem}}" id="avatar" name="imagem" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('imagem'))
                                <span class="help-block">{{ $errors->first('imagem') }}</span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="ln_solid"></div>

                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                <input name="_method" type="hidden" value="PUT">
                                <button type="submit" class="btn btn-success">Actualizar Perfil</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
		

	<!-- Shoping Cart -->
	<form class="bg0 p-t-75 p-b-85">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Produto</th>
									<th class="column-2"></th>
									<th class="column-3">Preço</th>
									<th class="column-4">Quantidade</th>
									<th class="column-5">Total</th>
								</tr>

								<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
											<img src="images/produtos1/product02.png" alt="IMG">
										</div>
									</td>
									<td class="column-2">Head Phone</td>
									<td class="column-3">Kz 36.00</td>
									<td class="column-4">
										<div class="wrap-num-product flex-w m-l-auto m-r-0">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product1" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>
									</td>
									<td class="column-5">Kz 36.00</td>
								</tr>

								<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
											<img src="images/produtos1/product01.png" alt="IMG">
										</div>
									</td>
									<td class="column-2">Computador HP</td>
									<td class="column-3">kz 16.00</td>
									<td class="column-4">
										<div class="wrap-num-product flex-w m-l-auto m-r-0">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product2" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>
									</td>
									<td class="column-5">$ 16.00</td>
								</tr>
							</table>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Carrinho decompra
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Titular: 
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
									{{$perfil->nome}}
								</span>
							</div>

                            <div class="size-208">
								<span class="stext-110 cl2">
									Provincia: 
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
									{{$perfil->provincia}}
								</span>
							</div>
						</div>

						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									O.B.S:
								</span>
							</div>

							<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
								<p class="stext-111 cl6 p-t-2">
									Apois concluir a compra, o tens no maximo 24 para esperar o produto chegar em sua posse.
								</p>
								
								<div class="p-t-15">
								
										
								</div>
							</div>
						</div>

						<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl2">
									Total:
								</span>
							</div>

							<div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
									Kz 79.65
								</span>
							</div>
						</div>

						<button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
							Terminar a compra
						</button>
					</div>
				</div>
			</div>
		</div>
	</form>
		
@endsection
