@extends('layouts.app')

@section('title') Cotizaciones @endsection

@section('content')

<div class="stunning-header bg-primary-opacity">
	
	<!-- Header Standard Landing  -->
	
	@include('layouts.header')
	
	<!-- ... end Header Standard Landing  -->
    <div class="header-spacer--standard"></div>

	<div class="stunning-header-content mt-5">
		<h1 class="stunning-header-title">Cotizaciones</h1>
		<ul class="breadcrumbs">
			<li class="breadcrumbs-item">
				<a href="/">Inicio</a>
				<span class="icon breadcrumbs-custom">/</span>
			</li>
			<li class="breadcrumbs-item active">
				<span>Cotizaciones</span>
			</li>
		</ul>
	</div>

	<div class="content-bg-wrap stunning-header-bg1"></div>

</div>

<section class="medium-padding120">
	<div class="container">
		<div class="row">
			<div class="col col-xl-6 m-auto col-lg-6 col-md-12 col-sm-12 col-12">
				<div class="page-404-content">
					{{-- <img src="{{ asset('assets/img/page/pp.jpg') }}" width="150" class="img-fluid align-center" alt="photo"> --}}
					<div class="crumina-module crumina-heading align-center">
						<h2 class="h1 heading-title"><span class="c-primary">Gracias</span> por aceptar la cotización...</h2>
						<p class="heading-text">Pronto nos pondremos en contacto para seguir con el proceso.
							Si tiene alguna inquietud puede escribirnos a: <a href="#">calidad@amazoniacl.com</a>
						</p>
					</div>

					<a href="/" class="btn btn-primary btn-lg">Volver a pagina de inicio</a>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection