@extends('layouts.app')

@section('title') Servicios @endsection

@section('content')

<div class="stunning-header bg-primary-opacity">
	
	<!-- Header Standard Landing  -->
	
	@include('layouts.header')
	
	<!-- ... end Header Standard Landing  -->
    <div class="header-spacer--standard"></div>

	<div class="stunning-header-content mt-5">
		<h1 class="stunning-header-title">Responder Correo</h1>
		<ul class="breadcrumbs">
			<li class="breadcrumbs-item">
				<a href="/">Inicio</a>
				<span class="icon breadcrumbs-custom">/</span>
			</li>
			<li class="breadcrumbs-item active">
				<span>Responder Correo</span>
			</li>
		</ul>
	</div>

	<div class="content-bg-wrap stunning-header-bg1"></div>

</div>

<section class="pt120">
	<div class="container">
		<div class="row">
			<div class="col col-xl-12 order-xl-2 col-lg-12 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">

				@if (session()->has('success') && session('success') == 1)
					<div class="ui-block bg-primary" id="response-true">
						<div class="ui-block-title text-center">
							<h6 class="title text-white">Mensaje enviado correctamente. Nos pondremos en contacto</h6>
						</div>
					</div>
				@endif

				@if (session()->has('success') && session('success') == 0)
					<div class="ui-block bg-danger d-none" id="response-false">
						<div class="ui-block-title text-center">
							<h6 class="title text-white">Ocurrio un error, intentalo mas tarde</h6>
						</div>
					</div>
				@endif

				<div class="ui-block">

					<div class="ui-block-title">
						<h6 class="title text-center">Mensajes</h6>
					</div>
	
					<div class="container">
						<div class="row">
	
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 padding-l-0 padding-r-0">
		
								
								<!-- Chat Field -->
								
								<div class="chat-field">
									<div class="ui-block-title">
										<h6 class="title">{{ $historial->nombre.' '.$historial->apellido }}</h6>
										<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon') }}"></use></svg></a>
									</div>
									<div class="mCustomScrollbar" data-mcs-theme="dark">
										<ul class="notification-list chat-message chat-message-field">

											<li>
												<div class="author-thumb">
													<img src="{{ asset('assets/img/quote-face.png') }}" width="40" alt="author">
												</div>
												<div class="notification-event">
													<div class="event-info-wrap">
														<a href="#" class="h6 notification-friend">{{ $historial->nombre.' '.$historial->apellido }}</a>
														<span class="notification-date ml-2"><time class="entry-date updated" datetime="2004-07-24T18:18">{{ $historial->fecha }}</time></span>
													</div>
													<b><span class="chat-message-item">{{ $historial->asunto }}</span></b>
													<span class="chat-message-item">{{ $historial->mensaje }}</span>
												</div>
											</li>
								
											<li class="text-right">
												
												<div class="notification-event">
													<div class="event-info-wrap">
														<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">{{ $historial->fecha_respuesta }}</time></span>
														<a href="#" class="h6 notification-friend">Amazonia C&L</a>
													</div>
													<span class="chat-message-item">
														@php echo $historial->respuesta @endphp
													</span>
												</div>
												<div class="author-thumb ml-3">
													<img src="{{ asset('assets/img/page/pp.jpg') }}" width="60" alt="author">
												</div>

											</li>

											@foreach ($historial->historial as $correo)

												@if (!isset($correo->id_respondio))
													<li>
														<div class="author-thumb">
															<img src="{{ asset('assets/img/quote-face.png') }}" width="40" alt="author">
														</div>
														<div class="notification-event">
															<div class="event-info-wrap">
																<a href="#" class="h6 notification-friend">{{ $historial->nombre.' '.$historial->apellido }}</a>
																<span class="notification-date ml-2"><time class="entry-date updated" datetime="2004-07-24T18:18">{{ $correo->fecha }}</time></span>
															</div>
															<span class="chat-message-item">{{ $correo->respuesta }}</span>
														</div>
													</li>
												@else
													<li class="text-right">
													
														<div class="notification-event">
															<div class="event-info-wrap">
																<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">{{ $correo->fecha }}</time></span>
																<a href="#" class="h6 notification-friend">Amazonia C&L</a>
															</div>
															<span class="chat-message-item">
																@php echo $correo->respuesta @endphp
															</span>
														</div>
														<div class="author-thumb ml-3">
															<img src="{{ asset('assets/img/page/pp.jpg') }}" width="60" alt="author">
														</div>
		
													</li>
												@endif

											@endforeach
										</ul>
									</div>
								
									<form method="POST" action="/responder/correo">
										@csrf
								
										<div class="form-group">
											<textarea class="form-control" name="mensaje" placeholder="Escriba aqui su mensaje..."></textarea>
										</div>

										<input type="hidden" name="correos_id" value="{{ $historial->id }}">
								
										<div class="add-options-message text-center">
											<button class="btn btn-primary btn-lg">Enviar</button>
										</div>
								
									</form>
								
								</div>
								
								<!-- ... end Chat Field -->
		
							</div>

						</div>
					</div>
	
				</div>
			</div>

		</div>
	</div>
</section>

@endsection

@section('scripts')
	<script>
		$(document).ready(function () {
			$(".mCustomScrollbar").animate({ scrollTop: $('.mCustomScrollbar')[0].scrollHeight + 1000}, 500); 
		})
	</script>
@endsection	