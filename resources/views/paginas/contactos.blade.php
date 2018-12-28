@extends('layouts.ecomerce')

@section('head')
 <link rel="stylesheet" href="{{asset('css/inicio/inicio.css')}}">
@stop
@section('principal')
	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('mages/bg-01.jpg');">
		<h2 class="ltext-105 cl0 txt-center" style="color: #cccc;">
			Contactos
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">

		@if (Session::has('success'))
			<div class="clearfix"></div>
			<div class="alert alert-success" role="alert">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				{!! Session::get('success') !!}
			</div>
			@endif
		 
			<div class="flex-w flex-tr">
			  
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					<form action="{{ route('enviar') }}" method="POST">
					 
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Envia - nos uma mensagem
						</h4>

						<div class="bor8 m-b-20 how-pos4-parent {{ $errors->has('email') ? ' has-error' : '' }}">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Email">
							<img class="how-pos4 pointer-none" value="{{ Request::old('email') ?: '' }}" src="images/icons/icon-email.png" alt="ICON">
							
						</div>
						@if ($errors->has('email'))
                                <span class="help-block" style="color: red;">{{ $errors->first('email') }}</span>
                            @endif

						<div class="bor8 m-b-30 {{ $errors->has('mensagem') ? ' has-error' : '' }}">
							<textarea value="{{ Request::old('mensagem') ?: '' }}" class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="mensagem" placeholder="Mensagems"></textarea>
							
						</div>
						@if ($errors->has('mensagem'))
                                <span class="help-block" style="color: red;">{{ $errors->first('mensagem') }}</span>
                            @endif
						<input type="hidden" name="_token" value="{{ Session::token() }}">
						<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							Enviar
						</button>
					</form>
				</div>

				<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-map-marker"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Endereço
							</span>

							<p class="stext-115 cl6 size-213 p-t-18">
								Lobotio - Benguela
							</p>
						</div>
					</div>

					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-phone-handset"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Liga das 08 as 17
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								+1 800 1236879
							</p>
						</div>
					</div>

					<div class="flex-w w-full">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-envelope"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Suporte de vendas
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								contacto@example.com
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
	
	
	<!-- Map -->
	<div class="map">
		<div class="size-303" id="google_map" data-map-x="40.691446" data-map-y="-73.886787" data-pin="images/icons/pin.png" data-scrollwhell="0" data-draggable="1" data-zoom="11"></div>
	</div>




@stop

@section('script')
 <script src="{{asset('js/backoffice/app.js')}}"></script>
@stop