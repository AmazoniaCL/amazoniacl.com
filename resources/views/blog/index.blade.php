@extends('layouts.app')

@section('title') Blog @endsection

@section('content')

<div class="stunning-header bg-primary-opacity">

	<!-- Header Standard Landing  -->

	@include('layouts.header')

	<!-- ... end Header Standard Landing  -->
    <div class="header-spacer--standard"></div>

	<div class="stunning-header-content mt-5">
		<h1 class="stunning-header-title">Blog</h1>
		<ul class="breadcrumbs">
			<li class="breadcrumbs-item">
				<a href="/">Inicio</a>
				<span class="icon breadcrumbs-custom">/</span>
			</li>
			<li class="breadcrumbs-item active">
				<span>Blog</span>
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
					<h2 class="heading-title">Blog</h2>
					<p class="heading-text">Conozca temas de interes atravez de nuestro blog y tambien interactua con nostros con tus comentarios</p>
				</div>
			</div>
		</div>

	</div>
</section>

<section class="blog-post-wrap medium-padding80">
	<div class="container">
		<div class="row">
			@foreach ($posts as $post)
                <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">

                    <!-- Post -->

                    <article class="hentry blog-post">

                        <div class="post-thumb" style="max-height: 260px;">
                            <img src="http://admin.amazoniacl.com/storage/{{ $post->imagen }}" alt="photo">
                        </div>

                        <div class="post-content">
                            <a href="javascript:;" class="post-category" style="background-color: #5a8d3e;">AMAZONIA C&L</a>
                            <a href="/blog/{{ $post->slug }}" class="h4 post-title">{{ $post->titulo }}</a>

                            <div class="author-date">
                                <a class="h6 post__author-name fn" href="/blog/{{ $post->slug }}">{{ $post->fecha }}</a>
                            </div>

                            <div class="post-additional-info inline-items">
                                <div class="friends-harmonic-wrap">
                                </div>

                                <div class="comments-shared">
                                    <a href="/blog/{{ $post->slug }}" class="post-add-icon inline-items">
                                        <svg class="olymp-speech-balloon-icon">
                                            <use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon') }}"></use>
                                        </svg>
                                        <span>{{ $post->comments->count() }}</span>
                                    </a>
                                </div>

                            </div>
                        </div>

                    </article>

                        <!-- ... end Post -->
                </div>
            @endforeach
		</div>
	</div>


	<!-- Pagination -->

	{{-- <nav aria-label="Page navigation">
		<ul class="pagination justify-content-center">
			<li class="page-item disabled">
				<a class="page-link" href="#" tabindex="-1">Previous</a>
			</li>
			<li class="page-item"><a class="page-link" href="#">1<div class="ripple-container"><div class="ripple ripple-on ripple-out" style="left: -10.3833px; top: -16.8333px; background-color: rgb(255, 255, 255); transform: scale(16.7857);"></div></div></a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item"><a class="page-link" href="#">...</a></li>
			<li class="page-item"><a class="page-link" href="#">12</a></li>
			<li class="page-item">
				<a class="page-link" href="#">Next</a>
			</li>
		</ul>
	</nav> --}}

	<!-- ... end Pagination -->

</section>

@endsection
