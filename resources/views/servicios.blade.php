@extends('layouts.app')

@section('title') Servicios @endsection

@section('content')

<div class="stunning-header bg-primary-opacity">
	
	<!-- Header Standard Landing  -->
	
	@include('layouts.header')
	
	<!-- ... end Header Standard Landing  -->
    <div class="header-spacer--standard"></div>

	<div class="stunning-header-content mt-5">
		<h1 class="stunning-header-title">Servicios</h1>
		<ul class="breadcrumbs">
			<li class="breadcrumbs-item">
				<a href="/">Inicio</a>
				<span class="icon breadcrumbs-custom">/</span>
			</li>
			<li class="breadcrumbs-item active">
				<span>Servicios</span>
			</li>
		</ul>
	</div>

	<div class="content-bg-wrap stunning-header-bg1"></div>

</div>

<section class="pt120">
	<div class="container">
		<div class="row mb60">
			<div class="col col-xl-5 col-lg-5 m-auto col-md-12 col-sm-12 col-12">
				<div class="crumina-module crumina-heading align-center">
					<div class="heading-sup-title">AMAZONIA C&L</div>
					<h2 class="heading-title">Servicios</h2>
					<p class="heading-text">Estos son los principales servicios que Amazonia C&L te ofrece.</p>
				</div>
			</div>
		</div>

	</div>
</section>

<section class="blog-post-wrap medium-padding80">
	<div class="container">
		<div class="row">

			<div class="col col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="ui-block">

					<!-- Post -->
					
					<article class="hentry blog-post">
					
						<div class="post-thumb">
							<img src="{{ asset('assets/img/page/servicios/empresarial.jpg') }}" alt="Empresarial">
						</div>
					
						<div class="post-content">
							<a href="#" class="post-category bg-primary">Amazonia C&L</a>
							<a href="#" class="h4 post-title">Transporte Empresarial </a>
							<p>Ofrecemos un servicio de transporte empresarial completamente personalizado rápido y responsable para instituciones publicas y privadas...</p>
                            
                            <hr>

                            <a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#empresarial">Ver mas<div class="ripple-container"></div></a>
                                
						</div>
					
					</article>
					
					<!-- ... end Post -->
				</div>
			</div>
            
            <div class="col col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="ui-block">

					<!-- Post -->
					
					<article class="hentry blog-post">
					
						<div class="post-thumb">
							<img src="{{ asset('assets/img/page/servicios/escolar.jpg') }}" alt="Escolar">
						</div>
					
						<div class="post-content">
							<a href="#" class="post-category bg-primary">Amazonia C&L</a>
							<a href="#" class="h4 post-title">Transporte Escolar </a>
							<p>Ofrecemos un servicio responsable y comprometido con el futuro de nuestra región, que puedan satisfacer las necesidades de las instituciones educativas...</p>
                            
                            <hr>

                            <a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#escolar">Ver mas<div class="ripple-container"></div></a>
                                
						</div>
					
					</article>
					
					<!-- ... end Post -->
				</div>
            </div>
            
            <div class="col col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="ui-block">

					<!-- Post -->
					
					<article class="hentry blog-post">
					
						<div class="post-thumb">
							<img src="{{ asset('assets/img/page/servicios/turismo.jpg') }}" alt="Turismo">
						</div>
					
						<div class="post-content">
							<a href="#" class="post-category bg-primary">Amazonia C&L</a>
							<a href="#" class="h4 post-title">Transporte de Turismo </a>
							<p>Este servicio está dirigido a agencias de viajes, promotoras de turismo, hoteles, tours, cajas de compensación, entidades educativas, y en general a grupos de viajeros...</p>
                            
                            <hr>

                            <a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#turismo">Ver mas<div class="ripple-container"></div></a>
                                
						</div>
					
					</article>
					
					<!-- ... end Post -->
				</div>
            </div>
            
            <div class="col col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="ui-block">

					<!-- Post -->
					
					<article class="hentry blog-post">
					
						<div class="post-thumb">
							<img src="{{ asset('assets/img/page/servicios/carga.jpg') }}" alt="Carga">
						</div>
					
						<div class="post-content">
							<a href="#" class="post-category bg-primary">Amazonia C&L</a>
							<a href="#" class="h4 post-title">Transporte de Carga </a>
							<p>En AMAZONIA C&L optimizamos los proceso de logística de su empresa, logrando de forma efectiva y ágil la distribución y recolección de todo tipo de mercancía...</p>
                            
                            <hr>

                            <a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#carga">Ver mas<div class="ripple-container"></div></a>
                                
						</div>
					
					</article>
					
					<!-- ... end Post -->
				</div>
			</div>

		</div>
	</div>


</section>

<div class="modal fade" id="empresarial" tabindex="-1" role="dialog" aria-labelledby="empresarial" aria-hidden="true">
	<div class="modal-dialog window-popup event-private-public private-event" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="assets/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
			</a>
			<div class="modal-body">
				<article class="hentry post has-post-thumbnail thumb-full-width private-event">

				<div class="private-event-head inline-items">

					<div class="author-date">
						<a class="h3 event-title" href="#">Transporte Empresarial</a>
						<div class="event__date">
						</div>
					</div>

				</div>

				<div class="post-thumb">
					<img src="assets/img/page/servicios/empresarial2.jpg" alt="Empresarial">
				</div>

				<div class="row">
					<div class="col col-lg-12 col-md-12 col-sm-12 col-12">

						<p class="text-justify">
							Ofrecemos un servicio de transporte empresarial completamente personalizado rápido y responsable para instituciones publicas y privadas, con el fin de ser para su empresa la mejor alternativa en logística de pasajeros en el momento que su empresa lo requiera. Servicio Puerta a puerta Eventos, congresos, seminarios, excursiones, viajes de turismo, traslado de personal etc. Este servicio lo prestamos en camionetas, doble cabinas o station wagon, (Hilux, Dimax, Mazda, o microbús, buseta y/o bus, con capacidad de 10 hasta 42 personas, modelos 2008 en adelante, con conductores certificados y disponibilidad nacional.
                        </p>
                        
					</div>
                </div>
                
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="escolar" tabindex="-1" role="dialog" aria-labelledby="escolar" aria-hidden="true">
	<div class="modal-dialog window-popup event-private-public private-event" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="assets/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
			</a>
			<div class="modal-body">
				<article class="hentry post has-post-thumbnail thumb-full-width private-event">

				<div class="private-event-head inline-items">

					<div class="author-date">
						<a class="h3 event-title" href="#">Transporte Escolar</a>
						<div class="event__date">
						</div>
					</div>

				</div>

				<div class="post-thumb">
					<img src="assets/img/page/servicios/escolar2.jpg" alt="Escolar">
				</div>

				<div class="row">
					<div class="col col-lg-12 col-md-12 col-sm-12 col-12">

						<p class="text-justify">
							Ofrecemos un servicio responsable y comprometido con el futuro de nuestra región, que puedan satisfacer las necesidades de las instituciones educativas en todos sus estándares de calidad y responsabilidad.Planificamos el transporte de los alumnos hogar institución educativa y viceversa, puntos de encuentro institución educativa y viceversa, excursiones, salidas pedagógicas, etc. Disponemos de una flota de vehículos equipados con todas las medidas de seguridad, personal capacitado y todos los requisitos legales.
                        </p>
                        
					</div>
                </div>
                
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="turismo" tabindex="-1" role="dialog" aria-labelledby="turismo" aria-hidden="true">
	<div class="modal-dialog window-popup event-private-public private-event" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="assets/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
			</a>
			<div class="modal-body">
				<article class="hentry post has-post-thumbnail thumb-full-width private-event">

				<div class="private-event-head inline-items">

					<div class="author-date">
						<a class="h3 event-title" href="#">Transporte de Turismo</a>
						<div class="event__date">
						</div>
					</div>

				</div>

				<div class="post-thumb">
					<img src="assets/img/page/servicios/turismo2.jpg" alt="Escolar">
				</div>

				<div class="row">
					<div class="col col-lg-12 col-md-12 col-sm-12 col-12">

						<p class="text-justify">
							Este servicio está dirigido a agencias de viajes, promotoras de turismo, hoteles, tours, cajas de compensación, entidades educativas, y en general a grupos de viajeros, que deseen realizar recorridos turísticos en toda la geografía nacional, está orientado a personas naturales, para la realización de eventos, viajes a todas las regiones del país. Para este servicio utilizamos vehículos modernos, teniendo en cuenta la seguridad, confort y buen servicio a nuestros clientes.
                        </p>
                        
					</div>
                </div>
                
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="carga" tabindex="-1" role="dialog" aria-labelledby="carga" aria-hidden="true">
	<div class="modal-dialog window-popup event-private-public private-event" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="assets/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
			</a>
			<div class="modal-body">
				<article class="hentry post has-post-thumbnail thumb-full-width private-event">

				<div class="private-event-head inline-items">

					<div class="author-date">
						<a class="h3 event-title" href="#">Transporte de Carga</a>
						<div class="event__date">
						</div>
					</div>

				</div>

				<div class="post-thumb">
					<img src="assets/img/page/servicios/carga.jpg" alt="Escolar">
				</div>

				<div class="row">
					<div class="col col-lg-12 col-md-12 col-sm-12 col-12">

						<p class="text-justify">
							En AMAZONIA C&L optimizamos los proceso de logística de su empresa, logrando de forma efectiva y ágil la distribución y recolección de todo tipo de mercancía. Llegando en los tiempos establecidos a todos los destinos nacionales, nuestros vehículos cuentan con el monitoreo de GPS que garantiza la trazabilidad y seguridad de sus envíos. Somos su mejor aliado.
                        </p>
                        
					</div>
                </div>
                
			</div>
		</div>
	</div>
</div>

@endsection