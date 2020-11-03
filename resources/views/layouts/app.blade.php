<!DOCTYPE html>
<html lang="es">

@include('layouts.src.head')

<body class="body-bg-white">


<!-- Preloader -->

<div id="hellopreloader">
	<div class="preloader">
		<svg width="45" height="45" stroke="#fff">
			<g fill="none" fill-rule="evenodd" stroke-width="2" transform="translate(1 1)">
				<circle cx="22" cy="22" r="6" stroke="none">
					<animate attributeName="r" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22"/>
					<animate attributeName="stroke-opacity" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0"/>
					<animate attributeName="stroke-width" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0"/>
				</circle>
				<circle cx="22" cy="22" r="6" stroke="none">
					<animate attributeName="r" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22"/>
					<animate attributeName="stroke-opacity" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0"/>
					<animate attributeName="stroke-width" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0"/>
				</circle>
				<circle cx="22" cy="22" r="8">
					<animate attributeName="r" begin="0s" calcMode="linear" dur="1.5s" repeatCount="indefinite" values="6;1;2;3;4;5;6"/>
				</circle>
			</g>
		</svg>

		<div class="text">Amazonia C&L</div>
	</div>
</div>

<!-- ... end Preloader -->

{{-- CONTENT PAGE --}}
@yield('content')


<section class="align-center pt160 pb80 section-move-bg call-to-action-animation scrollme">
	<div class="container">
		<div class="row">
			<div class="col col-xl-10 m-auto col-lg-10 col-md-12 col-sm-12 col-12">
				<a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#registration-login-form-popup">Iniciar sesión o registrarse</a>
			</div>
		</div>
	</div>
	{{-- <img class="first-img" alt="guy" src="{{ asset('assets/img/page/parque_automotor/SOS717_1.png') }}"> --}}
	{{-- <img class="second-img" alt="rocket" src="{{ asset('assets/img/rocket1.png') }}"> --}}
	<div class="content-bg-wrap bg-section1"></div>
</section>

<!-- ... end Section Call To Action Animation -->

{{-- MODAL LOGIN --}}
<div class="modal fade" id="registration-login-form-popup" tabindex="-1" role="dialog" aria-labelledby="registration-login-form-popup" aria-hidden="true">
	<div class="modal-dialog window-popup registration-login-form-popup" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-close-icon') }}"></use></svg>
			</a>
			<div class="modal-body">
				<div class="registration-login-form">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#home1" role="tab">
								<svg class="olymp-login-icon">
									<use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-login-icon') }}"></use>
								</svg>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#profile1" role="tab">
								<svg class="olymp-register-icon">
									<use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-register-icon') }}"></use>
								</svg>
							</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="home1" role="tabpanel" data-mh="log-tab">
							<div class="title h6">Registrarse en Amazonia</div>
							<form class="content"method="POST" action="{{ route('register') }}">
								@csrf

								<div class="row">

									<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="form-group label-floating">
											<label class="control-label">Nombre completo</label>
											<input class="form-control" type="text" name="name" required>
										</div>
										<div class="form-group label-floating">
											<label class="control-label">Correo electronico</label>
											<input class="form-control" type="email" name="email" required>
										</div>
										<div class="form-group label-floating">
											<label class="control-label">Contraseña</label>
											<input class="form-control" type="password" name="password" required>
										</div>
										<div class="form-group label-floating">
											<label class="control-label">Confirmar Contraseña</label>
											<input class="form-control" type="password" name="password_confirmation" required>
										</div>

										<div class="remember">
											<div class="checkbox">
												<label>
													<input name="optionsCheckboxes" type="checkbox" required>
													Acepto los <a href="#">Terminos y Condiciones</a> de la pagina
												</label>
											</div>
										</div>

										<button type="submit" class="btn btn-primary btn-lg full-width">Registrarse</button>

										<div class="or"></div>

										<a href="/auth/redirect/google" class="btn btn-lg bg-google full-width btn-icon-left px-0"><i class="fab fa-google" aria-hidden="true"></i>Ingresar con Google</a>
									</div>
								</div>
							</form>
						</div>

						<div class="tab-pane" id="profile1" role="tabpanel" data-mh="log-tab">
							<div class="title h6">Iniciar Sesión</div>
							<form class="content" method="POST" action="{{ route('login') }}">
								@csrf

								<div class="row">
									<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="form-group label-floating">
											<label class="control-label">Correo</label>
											<input class="form-control @error('email') is-invalid @enderror" placeholder="" name="email" type="email" required>
										</div>
										<div class="form-group label-floating">
											<label class="control-label">Contraseña</label>
											<input class="form-control @error('password') is-invalid @enderror" placeholder="" name="password" type="password" required>
										</div>
										@error('email')
											<span class="invalid-feedback d-flex" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
										@error('password')
											<span class="invalid-feedback d-flex" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror

										<div class="remember">

											<div class="checkbox">
												<label>
													<input name="optionsCheckboxes" type="checkbox">
													Recordarme
												</label>
											</div>
											{{-- <a href="#" class="forgot" data-toggle="modal" data-target="#restore-password">Olvide mi contraseña</a> --}}
										</div>

										<button type="submit" class="btn btn-lg btn-primary full-width">Ingresar</button>

										<div class="or"></div>

										<a href="/auth/redirect/google" class="btn btn-lg bg-google full-width btn-icon-left px-0"><i class="fab fa-google" aria-hidden="true"></i>Ingresar con Google</a>

										<p>Aun no tienes una cuenta? <a href="#" data-toggle="modal" data-target="#registration-login-form-popup">Registrate Ahora!</a> Es realmente facil y disfruta de los beneficios.</p>
									</div>
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

{{-- MODAL COTIZAR --}}
<div class="modal fade" id="modal-cotizacion" tabindex="-1" role="dialog" aria-labelledby="modal-cotizacion" aria-hidden="true">
	<div class="modal-dialog window-popup registration-login-form-popup" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-close-icon') }}"></use></svg>
			</a>
			<div class="modal-body">
				<div class="registration-login-form">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item h-100">
							<a class="nav-link active" data-toggle="tab" href="#home" role="tab">
								<svg class="olymp-week-calendar-icon"><use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-week-calendar-icon') }}"></use></svg>
							</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="home" role="tabpanel" data-mh="log-tab">
							<div class="title h6">Realizar Cotización</div>
							<form class="content form_cotizacion" method="POST" action="/create/cotizacion" >
								@csrf

								<div class="row">

									<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="form-group label-floating">
											<label class="control-label">Nombre Completo</label>
											<input class="form-control" name="nombre" placeholder="" type="text" required>
                                        </div>
                                        <div class="form-group label-floating">
											<label class="control-label">Correo electronico</label>
											<input class="form-control" name="correo" placeholder="" type="email" required>
										</div>
										<div class="form-group label-floating">
											<label class="control-label">Telefono</label>
											<input class="form-control" name="telefono" placeholder="" type="number">
										</div>
									</div>

									<div class="col-12">
										<label>Origen</label>
									</div>
                                    <div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
										<div class="form-group date-time-picker label-floating">
											<label class="control-label">Departamento</label>
											<select name="departamento_origen" class="departamento_origen" onchange="dptOrigen(this.value)" class="form-control" required>
												<option value=""></option>
											</select>
										</div>
									</div>
									<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
										<div class="form-group date-time-picker label-floating">
											<label class="control-label">Ciudad</label>
											<select name="ciudad_origen" class="ciudad_origen" class="form-control" required>
												<option value=""></option>
											</select>
										</div>
									</div>

									<div class="col-12">
										<label>Destino</label>
									</div>
									<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
										<div class="form-group date-time-picker label-floating">
											<label class="control-label">Departamento</label>
											<select name="departamento_destino" class="departamento_destino" onchange="dptDestino(this.value)" class="form-control" required>
												<option value=""></option>
											</select>
										</div>
									</div>
									<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
										<div class="form-group date-time-picker label-floating">
											<label class="control-label">Ciudad</label>
											<select name="ciudad_destino" class="ciudad_destino" class="form-control" required>
												<option value=""></option>
											</select>
										</div>
									</div>

                                    <div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
										<div class="form-group date-time-picker label-floating">
											<label class="control-label">Fecha de Ida</label>
											<input name="fecha_ida" class="class_datetimepicker" autocomplete="off" required/>
											<span class="input-group-addon">
												<svg class="olymp-calendar-icon"><use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-calendar-icon') }}"></use></svg>
											</span>
										</div>
									</div>
									<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
										<div class="form-group date-time-picker label-floating">
											<label class="control-label">Fecha Regreso</label>
											<input name="fecha_regreso" class="class_datetimepicker" autocomplete="off" required/>
											<span class="input-group-addon">
												<svg class="olymp-calendar-icon"><use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-calendar-icon') }}"></use></svg>
											</span>
										</div>
									</div>

									<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
										<div class="form-group date-time-picker label-floating">
											<label class="control-label">Tipo de servicio</label>
											<select name="tipo_servicio" class="form-control" required>
												<option value=""></option>
												<option value="Carga y/o Encomiendas">Carga y/o Encomiendas</option>
												<option value="Empresarial">Empresarial</option>
												<option value="Escolar">Escolar</option>
												<option value="Turismo">Turismo</option>
												<option value="Ocasional">Ocasional</option>
											</select>
										</div>
									</div>

									<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
										<div class="form-group date-time-picker label-floating">
											<label class="control-label">Tipo de vehiculo</label>
											<select name="tipo_vehiculo" class="form-control" required>
												<option value=""></option>
												<option value="Station wagon">Station wagon</option>
												<option value="Buseta">Buseta</option>
												<option value="Bus">Bus</option>
												<option value="Campero">Campero</option>
												<option value="Micro Bus">Micro Bus</option>
												<option value="Volqueta">Volqueta</option>
												<option value="Camioneta Cerrada">Camioneta Cerrada</option>
												<option value="Camioneta Doble Cabina 4*4">Camioneta Doble Cabina 4*4</option>
												<option value="Camion">Camion</option>
												<option value="Camioneta de Estacas">Camioneta de Estacas</option>
												<option value="Vans">Vans</option>
												<option value="Camioneta VAN">Camioneta VAN</option>
											</select>
										</div>
									</div>

									<div class="col col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
										<div class="radio">
											<label>
												<input type="radio" name="recorrido" value="Solo ida" required><span class="circle"></span><span class="check"></span>
												Solo ida
											</label>
										</div>
									</div>
									<div class="col col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
										<div class="radio">
											<label>
												<input type="radio" name="recorrido" value="Ida y vuelta" required><span class="circle"></span><span class="check"></span>
												Ida y vuelta
											</label>
										</div>
									</div>

                                    <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="remember">
											<div class="checkbox">
												<label>
													<input name="optionsCheckboxes" type="checkbox" required>
													Acepto los <a href="#">Terminos y Condiciones</a> de la pagina.
												</label>
											</div>
										</div>

										<button type="submit" class="btn btn-primary btn-lg full-width">Cotizar!</button>
									</div>

									<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="ui-block bg-primary d-none response-true">
											<div class="ui-block-title text-center">
												<h6 class="text-white">Cotizacion enviada correctamente. Nos pondremos en contacto</h6>
											</div>
										</div>
										<div class="ui-block bg-danger d-none response-false">
											<div class="ui-block-title text-center">
												<h6 class="text-white">Ocurrio un error, intentalo mas tarde</h6>
											</div>
										</div>
									</div>

								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Window-popup Restore Password -->

<div class="modal fade" id="restore-password" tabindex="-1" role="dialog" aria-labelledby="restore-password" aria-hidden="true">
	<div class="modal-dialog window-popup restore-password-popup" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-close-icon') }}"></use></svg>
			</a>

			<div class="modal-header">
				<h6 class="title">Restore your Password</h6>
			</div>

			<div class="modal-body">
				<form  method="get">
					<p>Enter your email and click the send code button. You’ll receive a code in your email. Please use that
						code below to change the old password for a new one.
					</p>
					<div class="form-group label-floating">
						<label class="control-label">Your Email</label>
						<input class="form-control" placeholder="" type="email" value="james-spiegel@yourmail.com">
					</div>
					<button class="btn btn-purple btn-lg full-width">Send me the Code</button>
					<div class="form-group label-floating">
						<label class="control-label">Enter the Code</label>
						<input class="form-control" placeholder="" type="text" value="">
					</div>
					<div class="form-group label-floating">
						<label class="control-label">Your New Password</label>
						<input class="form-control" placeholder="" type="password" value="olympus">
					</div>
					<button class="btn btn-primary btn-lg full-width">Change your Password!</button>
				</form>

			</div>
		</div>
	</div>
</div>

<!-- ... end Window-popup Restore Password -->


<!-- Window Popup Main Search -->

<div class="modal fade" id="main-popup-search" tabindex="-1" role="dialog" aria-labelledby="main-popup-search" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered window-popup main-popup-search" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-close-icon') }}"></use></svg>
			</a>
			<div class="modal-body">
				<form class="form-inline search-form" method="post">
					<div class="form-group label-floating">
						<label class="control-label">What are you looking for?</label>
						<input class="form-control bg-white" placeholder="" type="text" value="">
					</div>

					<button class="btn btn-purple btn-lg">Search</button>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- ... end Window Popup Main Search -->

<!-- Footer Full Width -->

<div class="footer footer-full-width" id="footer">
	<div class="container">
		<div class="row">
			<div class="col col-lg-4 col-md-4 col-sm-12 col-12">


				<!-- Widget About -->

				<div class="widget w-about">

					<a href="02-ProfilePage.html" class="logo">
						<div class="img-wrap">
							<img src="{{ asset('assets/img/page/logo.png') }}" width="190" alt="Amazonia">
						</div>
					</a>
					<p>Amazonia C&L se dedicada a la prestación del servicio de transporte de pasajeros por carretera en todas sus modalidades, transporte especial y carga.</p>
					<ul class="socials">
						<li>
							<a href="https://www.facebook.com/amazoniacl/" target="_blank">
								<i class="fab fa-facebook-square" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="https://www.instagram.com/amazoniacl/" target="_blank">
								<i class="fab fa-instagram" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="https://api.whatsapp.com/send?phone=573175357182&text=Hola%2C%20deseo%20adquirir%20mas%20informaci%C3%B3n%20de%20los%20servicios%20" target="_blank">
								<i class="fab fa-whatsapp" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
				</div>

				<!-- ... end Widget About -->

            </div>

			<div class="col col-lg-4 col-md-4 col-sm-6 col-6 align-right">


				<!-- Widget List -->

				<div class="widget w-list">
					<h6 class="title">Accesos</h6>
					<ul>
						<li>
							<a href="#">Quienes somos</a>
						</li>
						<li>
							<a href="#">Servicios</a>
						</li>
						<li>
							<a href="#">Cotizaar</a>
						</li>
						<li>
							<a href="#">Contactenos</a>
						</li>
					</ul>
				</div>

				<!-- ... end Widget List -->

			</div>
			<div class="col col-lg-4 col-md-4 col-sm-6 col-6 align-right">


				<div class="widget w-list">
					<h6 class="title">Contacto</h6>
					<ul>
						<li>
							<a href="#">+57 098 860 0663</a>
						</li>
						<li>
							<a href="#">+57 317 535 7182</a>
						</li>
						<li>
							<a href="#">info@amazoniacl.com</a>
						</li>
						<li>
							<a href="#">Calle 19 Sur # 10-18</a>
						</li>
					</ul>
				</div>

			</div>

			<div class="col col-lg-12 col-md-12 col-sm-12 col-12">


				<!-- SUB Footer -->

				<div class="sub-footer-copyright">
					<span>
						Copyright <a href="/">Amazonia C&L</a> Todos los derechos reservados 2020
					</span>
				</div>

				<!-- ... end SUB Footer -->

			</div>
		</div>
	</div>
</div>

<!-- ... end Footer Full Width -->




<!-- Window-popup-CHAT for responsive min-width: 768px -->

<div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog" aria-labelledby="popup-chat-responsive" aria-hidden="true">

	<div class="modal-content">
		<div class="modal-header">
			<span class="icon-status online"></span>
			<h6 class="title" >Chat</h6>
			<div class="more">
				<svg class="olymp-three-dots-icon"><use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon') }}"></use></svg>
				<svg class="olymp-little-delete js-chat-open"><use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-little-delete') }}"></use></svg>
			</div>
		</div>
		<div class="modal-body">
			<div class="mCustomScrollbar">
				<ul class="notification-list chat-message chat-message-field">
					<li>
						<div class="author-thumb">
							<img src="{{ asset('assets/img/avatar14-sm.jpg') }}" alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="{{ asset('assets/img/author-page.jpg') }}" alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Don’t worry Mathilda!</span>
							<span class="chat-message-item">I already bought everything</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="{{ asset('assets/img/avatar14-sm.jpg') }}" alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
						</div>
					</li>
				</ul>
			</div>

			<form class="need-validation">

		<div class="form-group">
			<textarea class="form-control" placeholder="Press enter to post..."></textarea>
			<div class="add-options-message">
				<a href="#" class="options-message">
					<svg class="olymp-computer-icon"><use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-computer-icon') }}"></use></svg>
				</a>
				<div class="options-message smile-block">

					<svg class="olymp-happy-sticker-icon"><use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-happy-sticker-icon') }}"></use></svg>

					<ul class="more-dropdown more-with-triangle triangle-bottom-right">
						<li>
							<a href="#">
								<img src="{{ asset('assets/img/icon-chat1.png') }}" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{ asset('assets/img/icon-chat2.png') }}" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{ asset('assets/img/icon-chat3.png') }}" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{ asset('assets/img/icon-chat4.png') }}" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{ asset('assets/img/icon-chat5.png') }}" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{ asset('assets/img/icon-chat6.png') }}" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{ asset('assets/img/icon-chat7.png') }}" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{ asset('assets/img/icon-chat8.png') }}" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{ asset('assets/img/icon-chat9.png') }}" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{ asset('assets/img/icon-chat10.png') }}" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{ asset('assets/img/icon-chat11.png') }}" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{ asset('assets/img/icon-chat12.png') }}" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{ asset('assets/img/icon-chat13.png') }}" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{ asset('assets/img/icon-chat14.png') }}" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{ asset('assets/img/icon-chat15.png') }}" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{ asset('assets/img/icon-chat16.png') }}" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{ asset('assets/img/icon-chat17.png') }}" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{ asset('assets/img/icon-chat18.png') }}" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{ asset('assets/img/icon-chat19.png') }}" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{ asset('assets/img/icon-chat20.png') }}" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{ asset('assets/img/icon-chat21.png') }}" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{ asset('assets/img/icon-chat22.png') }}" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{ asset('assets/img/icon-chat23.png') }}" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{ asset('assets/img/icon-chat24.png') }}" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{ asset('assets/img/icon-chat25.png') }}" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{ asset('assets/img/icon-chat26.png') }}" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{ asset('assets/img/icon-chat27.png') }}" alt="icon">
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</form>
		</div>
	</div>

</div>

<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->



<a class="back-to-top" href="#">
	<img src="{{ asset('assets/svg-icons/back-to-top.svg') }}" alt="arrow" class="back-icon">
</a>

<div id="WAButton"></div>



<!-- JS Scripts -->
@include('layouts.src.footer')

</body>
</html>
