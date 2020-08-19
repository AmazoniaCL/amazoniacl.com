@extends('layouts.app')

@section('title') Nosotros @endsection

@section('content')

<div class="stunning-header bg-primary-opacity">
	
	<!-- Header Standard Landing  -->
	
	@include('layouts.header')
	
	<!-- ... end Header Standard Landing  -->
    <div class="header-spacer--standard"></div>

	<div class="stunning-header-content mt-5">
		<h1 class="stunning-header-title">Nosotros</h1>
		<ul class="breadcrumbs">
			<li class="breadcrumbs-item">
				<a href="/">Inicio</a>
				<span class="icon breadcrumbs-custom">/</span>
			</li>
			<li class="breadcrumbs-item active">
				<span>Nosotros</span>
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
					<h2 class="heading-title">Nosotros</h2>
					<p class="heading-text">Amazonia C&L se dedicada a la prestación del servicio de transporte de pasajeros por carretera en todas sus modalidades, transporte especial y carga.</p>
				</div>
			</div>
		</div>

	</div>
</section>

<section class="medium-padding180">
	<div class="container">
		<div class="row">
			<div class="col col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 m-auto">
				<div class="crumina-module crumina-heading">
					<div class="heading-sup-title">AMAZONIA C&L</div>
					<h2 class="heading-title"> <span class="c-primary">¿</span>Quienes Somos<span class="c-primary">?</span> </h2>
					<p class="heading-text">AMAZONIA C&L, es una Organización que le aporta significativamente a la economía de nuestro país mediante la Prestación del Servicio de Transporte Terrestre Especial de pasajeros de calidad y la implementación de medidas y prácticas que promueven la seguridad y salud de sus trabajadores.
					</p>
				</div>
			</div>

			<div class="col col-xl-6 col-lg-6 ml-auto col-md-12 col-sm-12 col-12 align-right">
				<img src="{{ asset('assets/img/page/nosotros/nosotros.jpg') }}" alt="Nosotros" class="negative-margin-right150 rounded-lg">
			</div>
		</div>

	</div>
</section>

<section class="medium-padding180 bg-body">
	<div class="container">

		<div class="row">
            <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 m-auto">
                <img src="{{ asset('assets/img/page/nosotros/mision.jpg') }}" alt="Mision" class="negative-margin-right150 rounded-lg">
            </div>

			<div class="col col-xl-5 col-lg-5 ml-auto col-md-12 col-sm-12 col-12 align-right">
				<div class="crumina-module crumina-heading">
					<div class="heading-sup-title">AMAZONIA C&L</div>
					<h2 class="heading-title"> <span class="c-primary">Nuestra </span>Mision<span class="c-primary"></span> </h2>
					<p class="heading-text">Brindar servicios de transporte terrestre especial de pasajeros a nivel nacional, comprometidos con el medio ambiente, la seguridad y las necesidades de nuestros clientes y colaboradores, ofreciendo servicios innovadores, competitivos y rentables, orientados hacia el mejoramiento continuo de nuestra organización, contribuyendo al desarrollo social.
					</p>
				</div>
			</div>

		</div>

	</div>
</section>

<section class="medium-padding180">
	<div class="container">
		<div class="row">
			<div class="col col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 m-auto">
				<div class="crumina-module crumina-heading">
					<div class="heading-sup-title">AMAZONIA C&L</div>
					<h2 class="heading-title"> <span class="c-primary"></span>Nuestra<span class="c-primary"> Vision</span> </h2>
					<p class="heading-text">En el 2021, seremos una organización líder a nivel regional y nacional en la prestación de servicio de transporte terrestre especial de pasajeros, respaldado en talento humano calificado, con actitud de servicio y parque automotor e instalaciones modernas; basados en nuestra política integral que promueve el mejoramiento continuo, en pro de satisfacer las necesidades de nuestros clientes.
					</p>
				</div>
			</div>

			<div class="col col-xl-6 col-lg-6 ml-auto col-md-12 col-sm-12 col-12 align-right">
				<img src="{{ asset('assets/img/page/nosotros/vision.jpg') }}" alt="Vision" class="negative-margin-right150 rounded-lg">
			</div>
		</div>

	</div>
</section>

@endsection