@extends('layouts.app')

@section('title') Parque Automotor @endsection

@section('content')
<div class="stunning-header bg-primary-opacity">
	
	<!-- Header Standard Landing  -->
	
	@include('layouts.header')
	
	<!-- ... end Header Standard Landing  -->
    <div class="header-spacer--standard"></div>

	<div class="stunning-header-content mt-5">
		<h1 class="stunning-header-title">Parque Automotor</h1>
		<ul class="breadcrumbs">
			<li class="breadcrumbs-item">
				<a href="/">Inicio</a>
				<span class="icon breadcrumbs-custom">/</span>
			</li>
			<li class="breadcrumbs-item active">
				<span>Parque Automotor</span>
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
					<h2 class="heading-title">Parque Automotor</h2>
					<p class="heading-text">Conozca aqui nuestro parque automotor, haz parte de nosotros.</p>
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
					<h2 class="heading-title"> Camionetas </h2>
					<p class="heading-text">
						<a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#camionetas">Ver Camionetas</a>
					</p>
				</div>
			</div>

			<div class="col col-xl-6 col-lg-6 ml-auto col-md-12 col-sm-12 col-12 align-right">
				<img src="{{ asset('assets/img/page/parque_automotor/chevrolet1.jpg') }}" alt="Camionetas" class="negative-margin-right150 rounded-lg">
			</div>
		</div>

	</div>
</section>

<section class="medium-padding180 bg-body">
	<div class="container">

		<div class="row">
            <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 m-auto">
                <img src="{{ asset('assets/img/page/parque_automotor/SOS717_1.png') }}" alt="Vans" class="negative-margin-right150 rounded-lg">
            </div>

			<div class="container col col-xl-5 col-lg-5 ml-auto col-md-12 col-sm-12 col-12" style="display: flex;align-items: center;text-align: right;justify-content: flex-end;">
				<div class="crumina-module crumina-heading">
					<div class="heading-sup-title">AMAZONIA C&L</div>
					<h2 class="heading-title"> Vans </h2>
					<p class="heading-text">
						<a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#vans">Ver Vans</a>
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
					<h2 class="heading-title"> Buses </h2>
					<p class="heading-text">
						<a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#buses">Ver Buses</a>
					</p>
				</div>
			</div>

			<div class="col col-xl-6 col-lg-6 ml-auto col-md-12 col-sm-12 col-12 align-right">
				<img src="{{ asset('assets/img/page/parque_automotor/nomplus1.jpg') }}" alt="Buses" class="negative-margin-right150 rounded-lg">
			</div>
		</div>

	</div>
</section>

@include('layouts.modals.camionetas')
@include('layouts.modals.vans')
@include('layouts.modals.buses')

@endsection