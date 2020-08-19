@extends('layouts.app')

@section('title') SIG @endsection

@section('content')
<div class="stunning-header bg-primary-opacity">
	
	<!-- Header Standard Landing  -->
	
	@include('layouts.header')
	
	<!-- ... end Header Standard Landing  -->
    <div class="header-spacer--standard"></div>

	<div class="stunning-header-content mt-5">
		<h1 class="stunning-header-title">Sistema Integrado de Gestion</h1>
		<ul class="breadcrumbs">
			<li class="breadcrumbs-item">
				<a href="/">Inicio</a>
				<span class="icon breadcrumbs-custom">/</span>
			</li>
			<li class="breadcrumbs-item active">
				<span>SIG</span>
			</li>
		</ul>
	</div>

	<div class="content-bg-wrap stunning-header-bg1"></div>

</div>

<section class="medium-padding100">
	<div class="container">
		<div class="row mb60">
			<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 m-auto">
				<div class="crumina-module crumina-heading align-center">
					<div class="heading-sup-title">AMAZONIA C&L</div>
					<h2 class="heading-title">POLITICAS DE LA EMPRESA</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12 m-auto">

				
				<ul class="table-careers">
				
					<li>
						<span class="position bold">PREVENCION DE CONSUMO ALCOHOL, DROGAS Y TABAQUISMO</span>
						<span class="align-right"><a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal01">Ver Documento</a></span>
					</li>
				
					<li>
						<span class="position bold">POLITICA DE CONTRO DE ALCOHOL, DROGAS O MEDICAMENTOS</span>
						<span class="align-right"><a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal02">Ver Documento</a></span>
					</li>
				
					<li>
						<span class="position bold">POLÍTICA DE NO USO DE CELULAR Y OTROS DISTRACTORES MIENTRAS CONDUCE</span>
						<span class="align-right"><a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal03">Ver Documento</a></span>
					</li>
				
					<li>
						<span class="position bold">POLÍTICA DE REGULACIÓN DE HORAS DE CONDUCCIÓN Y DESCANSO</span>
						<span class="align-right"><a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal04">Ver Documento</a></span>
					</li>
				
					<li>
						<span class="position bold">POLÍTICA DE REGULACIÓN DE LA VELOCIDAD</span>
						<span class="align-right"><a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal05">Ver Documento</a></span>
					</li>

					<li>
						<span class="position bold">POLÍTICA DE USO DEL CINTURÓN DE SEGURIDA</span>
						<span class="align-right"><a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal06">Ver Documento</a></span>
					</li>
				</ul>

			</div>
		</div>
	</div>
</section>

{{-- MODALES --}}

<div class="modal fade" id="modal01" tabindex="-1" role="dialog" aria-labelledby="modal01" aria-hidden="true">
	<div class="modal-dialog window-popup edit-my-poll-popup" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-close-icon') }}"></use></svg>
			</a>
			<div class="modal-body">

				<div class="edit-my-poll-head bg-primary">
					<div class="head-content">
						<h2 class="title text-center">Prevencion de consumo Alcohol, Drogas y Tabaquismo</h2>
					</div>
				</div>

				<div class="edit-my-poll-content embed-responsive embed-responsive-1by1">
					<iframe src="{{ asset('assets/docs/PMR.pdf') }}" frameborder="0" width="100%" scrolling="no" allowfullscreen class="embed-responsive-item" ></iframe>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modal02" tabindex="-1" role="dialog" aria-labelledby="modal02" aria-hidden="true">
	<div class="modal-dialog window-popup edit-my-poll-popup" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-close-icon') }}"></use></svg>
			</a>
			<div class="modal-body">

				<div class="edit-my-poll-head bg-primary">
					<div class="head-content">
						<h2 class="title text-center">Politica de control de Alcohol, Drogas o Medicamentos</h2>
					</div>
				</div>

				<div class="edit-my-poll-content embed-responsive embed-responsive-1by1">
					<iframe src="{{ asset('assets/docs/SDO.pdf') }}" frameborder="0" width="100%" scrolling="no" allowfullscreen class="embed-responsive-item" ></iframe>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modal03" tabindex="-1" role="dialog" aria-labelledby="modal03" aria-hidden="true">
	<div class="modal-dialog window-popup edit-my-poll-popup" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-close-icon') }}"></use></svg>
			</a>
			<div class="modal-body">

				<div class="edit-my-poll-head bg-primary">
					<div class="head-content">
						<h2 class="title text-center">Politica de no uso de Celular y otras distracciones mientras conduce</h2>
					</div>
				</div>

				<div class="edit-my-poll-content embed-responsive embed-responsive-1by1">
					<iframe src="{{ asset('assets/docs/TCRO.pdf') }}" frameborder="0" width="100%" scrolling="no" allowfullscreen class="embed-responsive-item" ></iframe>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="modal04" aria-hidden="true">
	<div class="modal-dialog window-popup edit-my-poll-popup" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-close-icon') }}"></use></svg>
			</a>
			<div class="modal-body">

				<div class="edit-my-poll-head bg-primary">
					<div class="head-content">
						<h2 class="title text-center">Politica de regulacion de horas de conducción y descanso</h2>
					</div>
				</div>

				<div class="edit-my-poll-content embed-responsive embed-responsive-1by1">
					<iframe src="{{ asset('assets/docs/CRTO.pdf') }}" frameborder="0" width="100%" scrolling="no" allowfullscreen class="embed-responsive-item" ></iframe>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modal05" tabindex="-1" role="dialog" aria-labelledby="modal05" aria-hidden="true">
	<div class="modal-dialog window-popup edit-my-poll-popup" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-close-icon') }}"></use></svg>
			</a>
			<div class="modal-body">

				<div class="edit-my-poll-head bg-primary">
					<div class="head-content">
						<h2 class="title text-center">Politica de regulación de la velicidad</h2>
					</div>
				</div>

				<div class="edit-my-poll-content embed-responsive embed-responsive-1by1">
					<iframe src="{{ asset('assets/docs/QTO.pdf') }}" frameborder="0" width="100%" scrolling="no" allowfullscreen class="embed-responsive-item" ></iframe>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modal06" tabindex="-1" role="dialog" aria-labelledby="modal06" aria-hidden="true">
	<div class="modal-dialog window-popup edit-my-poll-popup" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-close-icon') }}"></use></svg>
			</a>
			<div class="modal-body">

				<div class="edit-my-poll-head bg-primary">
					<div class="head-content">
						<h2 class="title text-center">Politica de uso del cinturón de seguridad</h2>
					</div>
				</div>

				<div class="edit-my-poll-content embed-responsive embed-responsive-1by1">
					<iframe src="{{ asset('assets/docs/SXTO.pdf') }}" frameborder="0" width="100%" scrolling="no" allowfullscreen class="embed-responsive-item" ></iframe>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection