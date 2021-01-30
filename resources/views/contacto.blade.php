@extends('layouts.app')

@section('title') Contactenos @endsection

@section('content')

<div class="stunning-header bg-primary-opacity">
	
	<!-- Header Standard Landing  -->
	
	@include('layouts.header')
	
	<!-- ... end Header Standard Landing  -->
    <div class="header-spacer--standard"></div>

	<div class="stunning-header-content mt-5">
		<h1 class="stunning-header-title">Contactenos</h1>
		<ul class="breadcrumbs">
			<li class="breadcrumbs-item">
				<a href="/">Inicio</a>
				<span class="icon breadcrumbs-custom">/</span>
			</li>
			<li class="breadcrumbs-item active">
				<span>Contactenos</span>
			</li>
		</ul>
	</div>

	<div class="content-bg-wrap stunning-header-bg1"></div>

</div>

<section class="mt-0">
	<div class="section">
		<div id="map" style="height: 380px"></div>
	</div>
</section>

<section class="medium-padding120">
	<div class="container">
		<div class="row">

			<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">

				
				<!-- Contact Item -->
				
				<div class="contact-item-wrap">
                    <h3 class="contact-title">Contactenos</h3>
                    <div class="contact-item">
						<h6 class="sub-title">Telefono:</h6>
						<a href="tel:+570988600663">+57 098 860 0663</a>
						<a href="tel:+573175357182">+57 317 535 7182</a>
					</div>
					<div class="contact-item">
						<h6 class="sub-title">Correo electronico:</h6>
						<a href="mailto:">comercial@amazoniacl.com</a>
						<a href="mailto:">info@amazoniacl.com</a>
					</div>
				</div>
				
				<!-- ... end Contact Item -->
			</div>
			<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">

				
				<!-- Contact Item -->
				
				<div class="contact-item-wrap">
					<h3 class="contact-title">Estamos en</h3>
					<div class="contact-item">
						<h6 class="sub-title">Direccion:</h6>
						<a href="#">Calle 19 Sur # 10-18</a>
					</div>
				</div>
				
				<!-- ... end Contact Item -->

            </div>
            
            <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">

				
				<!-- Contact Item -->
				
				<div class="contact-item-wrap">
					<h3 class="contact-title">Redes sociales</h3>
					<div class="contact-item">
						<ul class="socials">
                            <li>
                                <a href="https://www.facebook.com/amazoniacl/" target="_blank">
                                    <i class="fab fa-facebook-square" style="font-size: 30px;" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/amazoniacl" target="_blank">
                                    <i class="fab fa-twitter" style="font-size: 30px;" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://api.whatsapp.com/send?phone=573175357182&text=Hola%2C%20deseo%20adquirir%20mas%20informaci%C3%B3n%20de%20los%20servicios%20" target="_blank">
                                    <i class="fab fa-whatsapp" style="font-size: 30px;" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
					</div>
				</div>
				
				<!-- ... end Contact Item -->

			</div>
            
		</div>
	</div>
</section>

<section class="medium-padding120 bg-body contact-form-animation scrollme">
	<div class="container">
		<div class="row mb60">
			<div class="col col-xl-4 col-lg-4 m-auto col-md-12 col-sm-12 col-12">
				<div class="crumina-module crumina-heading align-center">
					<h2 class="h1 heading-title">Envianos un mensaje</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col col-xl-10 col-lg-10 col-md-12 col-sm-12  m-auto">
				
				<!-- Contacts Form -->
				<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="ui-block bg-primary d-none" id="response-true">
						<div class="ui-block-title text-center">
							<h6 class="title text-white">Mensaje enviado correctamente. Nos pondremos en contacto</h6>
						</div>
					</div>
					<div class="ui-block bg-danger d-none" id="response-false">
						<div class="ui-block-title text-center">
							<h6 class="title text-white">Ocurrio un error, intentalo mas tarde</h6>
						</div>
					</div>
				</div>
				
				<div class="contact-form-wrap">
					<div class="contact-form-thumb">
						{{-- <h2 class="title">Envianos un <span>Mensaje</span></h2> --}}
					</div>
					<form class="contact-form" id="form-contacto" action="/create/correo" type="POST">
						@csrf

						<div class="row">

							<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
								<div class="form-group label-floating">
									<label class="control-label">Nombre</label>
									<input class="form-control" placeholder="" type="text" name="nombre" required/>
								</div>
							</div>
							<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
								<div class="form-group label-floating">
									<label class="control-label">Apellido</label>
									<input class="form-control" placeholder="" type="text" name="apellido" required/>
								</div>
							</div>
							<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
								<div class="form-group label-floating">
									<label class="control-label">Correo electronico</label>
									<input class="form-control" placeholder="" type="email" name="email" required/>
								</div>
				
								<div class="form-group label-floating">
									<label class="control-label">Asunto</label>
									<input class="form-control" placeholder="" type="text" name="asunto" required/>
								</div>
				
								<div class="form-group">
									<textarea class="form-control" placeholder="Escriba su mensaje" name="mensaje" required></textarea>
								</div>

								<input type="text" name="bot" class="d-none" id="bots_verificador">
				
								<button type="submit" id="btn-correo" class="btn btn-primary btn-lg full-width">Enviar</button>
							</div>
						</div>
					</form>
				</div>
				
				<!-- ... end Contacts Form -->

			</div>
		</div>
	</div>

	<div class="modal fade bs-example-modal-xl" id="modalpasees" tabindex="-1" role="dialog" aria-labelledby="modal-blade-title" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title mt-0" id="modal-title-cotizacion">Confirmar</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">  
					<h6>Acepto que he leído la política de protección de datos personales <a href="javascript:void(0)" class="text-primary">Ver Politicas.<a></h6>

						<div class="checkbox mt-3"><label><input onclick="activar_btn()" type="checkbox" id="enableCheckbox"> Acepto</label></div>

					<div class="row mt-3">
						<button type="button" id="btn_acept_boot" class="btn btn-primary btn-sm" disabled>Aceptar</button>
						<button type="button" id="" class="btn btn-secondary btn-sm ml-2" class="close" data-dismiss="modal" aria-label="Close">Cancelar</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="half-height-bg bg-white"></div>
</section>

@endsection