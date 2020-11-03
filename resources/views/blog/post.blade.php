@extends('layouts.app')

@section('title') Blog @endsection

@section('scripts') <script src="{{ asset('assets/js/blog.js') }}"></script> @endsection

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
            <li class="breadcrumbs-item">
				<a href="/blog">Blog</a>
				<span class="icon breadcrumbs-custom">/</span>
			</li>
			<li class="breadcrumbs-item active">
				<span>{{ $post->titulo }}</span>
			</li>
		</ul>
	</div>

	<div class="content-bg-wrap stunning-header-bg1"></div>

</div>

<div class="container-fluid mb60 mt50">
	<div class="row">
		<div class="col col-xl-8 m-auto col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block">


				<!-- Single Post -->

				<article class="hentry blog-post single-post single-post-v2">

					<a href="#" class="post-category" style="background-color: #5a8d3e;">AMAZONIA C&L</a>
					<h2 class="h1 post-title">{{ $post->titulo }}</h2>

					<div class="single-post-additional inline-items">
						<div class="post__author author vcard inline-items">
							<div class="author-date not-uppercase">
								<a class="h6 post__author-name fn" href="javascript:;">{{ $post->author->name }}</a>
								<div class="author_prof">
									Autor
								</div>
							</div>
						</div>
						<div class="post-date-wrap inline-items">
							<svg class="olymp-calendar-icon">
								<use xlink:href="svg-icons/sprites/icons.svg#olymp-calendar-icon"></use>
							</svg>
							<div class="post-date">
								<a class="h6 date" href="javascript:;">{{ $post->fecha }}</a>
								<span>Fecha</span>
							</div>
						</div>
						<div class="post-comments-wrap inline-items">
							<svg class="olymp-comments-post-icon">
								<use xlink:href="svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use>
							</svg>
							<div class="post-comments">
								<a class="h6 comments" href="#">{{ $post->comments->count() }}</a>
								<span>Comentarios</span>
							</div>
						</div>
					</div>

					<div class="post-thumb">
						<img src="http://127.0.0.1:8000/storage/{{ $post->imagen }}" alt="imagen del post">
					</div>


					<div class="post-content-wrap">

						<div class="post-content">

                            <p><?php echo $post->contenido; ?></p>

                            @if ($post->media_posts->count() > 0)
                                <div class="single-post-slider">

                                    <div class="swiper-container" data-autoplay="4000">

                                        <!-- Additional required wrapper -->
                                        <div class="swiper-wrapper">
                                            <!-- Slides -->

                                            @foreach ($post->media_posts as $media)
                                                <div class="swiper-slide" style="width: 520px !important;">
                                                    <img src="http://127.0.0.1:8000/storage/{{ $media->imagen }}" alt="photo">
                                                </div>
                                            @endforeach

                                        </div>

                                    </div>

                                    <!--Pagination tabs-->

                                    <div class="slider-slides">
                                        @foreach ($post->media_posts as $media)
                                            <a href="javascript:;" class="slides-item" style="max-width: 100px;">
                                                <img src="http://127.0.0.1:8000/storage/{{ $media->imagen }}" alt="slide">
                                                <div class="overlay overlay-dark"></div>
                                            </a>
                                        @endforeach

                                        <!--Prev Next Arrows-->

                                        <svg class="btn-next olymp-popup-right-arrow">
                                            <use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-popup-right-arrow') }}"></use>
                                        </svg>

                                        <svg class="btn-prev olymp-popup-left-arrow">
                                            <use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-popup-left-arrow') }}"></use>
                                        </svg>

                                    </div>

                                </div>
                            @endif
						</div>
					</div>

				</article>

				<!-- ... end Single Post -->

			</div>

			{{-- <div class="related-posts mb60 mt60">
				<div class="crumina-module crumina-heading with-title-decoration">
					<h5 class="heading-title">Tenemos más para ti</h5>
				</div>

				<div class="row">
					<div class="col col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
						<article class="hentry blog-post">

							<div class="post-thumb">
								<img src="img/post7.jpg" alt="photo">
							</div>

							<div class="post-content">
								<a href="#" class="post-category bg-blue-light">THE COMMUNITY</a>
								<a href="#" class="h4 post-title">Here are the best tattoos of our community</a>
								<p>Here’s a photo from last month’s photoshoot. We got really awesome shots for the new catalog.</p>

								<div class="author-date">
									by
									<a class="h6 post__author-name fn" href="#">JACK SCORPIO</a>
									<div class="post__date">
										<time class="published" datetime="2017-03-24T18:18">
											- 2 MONTHS ago
										</time>
									</div>
								</div>

								<div class="post-additional-info inline-items">

									<div class="friends-harmonic-wrap">
										<ul class="friends-harmonic">
											<li>
												<a href="#">
													<img src="img/icon-chat2.png" alt="icon">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/icon-chat4.png" alt="icon">
												</a>
											</li>
										</ul>
										<div class="names-people-likes">
											37
										</div>
									</div>

									<div class="comments-shared">
										<a href="#" class="post-add-icon inline-items">
											<svg class="olymp-speech-balloon-icon">
												<use xlink:href="svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use>
											</svg>
											<span>62</span>
										</a>
									</div>

								</div>
							</div>

						</article>
					</div>
					<div class="col col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
						<article class="hentry blog-post">

							<div class="post-thumb">
								<img src="img/post8.jpg" alt="photo">
							</div>

							<div class="post-content">
								<a href="#" class="post-category bg-purple">INSPIRATION</a>
								<a href="#" class="h4 post-title">Take a look to the coolest beaches of the world</a>
								<p>Here’s a photo from last month’s photoshoot. We got really awesome shots for the new catalog.</p>

								<div class="author-date">
									by
									<a class="h6 post__author-name fn" href="#">MADDY SIMMONS</a>
									<div class="post__date">
										<time class="published" datetime="2017-03-24T18:18">
											- 2 months ago
										</time>
									</div>
								</div>

								<div class="post-additional-info inline-items">

									<div class="friends-harmonic-wrap">
										<ul class="friends-harmonic">
											<li>
												<a href="#">
													<img src="img/icon-chat26.png" alt="icon">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/icon-chat25.png" alt="icon">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/icon-chat21.png" alt="icon">
												</a>
											</li>
										</ul>
										<div class="names-people-likes">
											104
										</div>
									</div>

									<div class="comments-shared">
										<a href="#" class="post-add-icon inline-items">
											<svg class="olymp-speech-balloon-icon">
												<use xlink:href="svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use>
											</svg>
											<span>84</span>
										</a>
									</div>

								</div>
							</div>

						</article>
					</div>
				</div>
			</div> --}}

			<div class="crumina-module crumina-heading with-title-decoration">
				<h5 class="heading-title">Comentarios ({{ $post->comments->count() }})</h5>
			</div>


			<!-- Comments -->

			<ul class="comments-list style-3">
                @foreach ($post->comments as $comment)
                    <li class="comment-item">

                        <div class="comments-content">
                            <div class="post__author author vcard">

                                <div class="author-date">
                                    <a class="h6 post__author-name fn" href="javascript:;">{{ $comment->nombre }}</a>
                                    <div class="post__date">
                                        <time class="published" datetime="2004-07-24T18:18">
                                            {{ $comment->created_at }}
                                        </time>
                                    </div>
                                </div>

                            </div>

                            <p>{{ $comment->contenido }}</p>
                        </div>

                    </li>
                @endforeach
                <div id="nuevo_comentario">

                </div>
			</ul>

			<!-- ... end Comments -->
		</div>

        @if ($post->comments->count() == 0)
            <div class="col col-xl-8 m-auto col-lg-12 col-md-12 col-sm-12 col-12 align-center">
                <a href="javascript:;" class="btn btn-primary btn-md mb60 mt60">¡Se el primero en comentar!</a>
            </div>
        @endif

		<div class="col col-xl-8 m-auto col-lg-12 col-md-12 col-sm-12 col-12">


			<!-- Comment Form -->
            <form action="/blog/comentar" id="form_comentar" method="post">
                @csrf

				<div class="crumina-module crumina-heading with-title-decoration mt-5">
					<h5 class="heading-title">Escribir un comentario</h5>
				</div>
				<div class="row">
                    <div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group label-floating">
                            <label class="control-label">Nombre</label>
                            <input class="form-control" placeholder="" name="nombre" id="nombre" type="text" required>
                        </div>
                    </div>
                    <div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group label-floating">
                            <label class="control-label">Correo</label>
                            <input class="form-control" placeholder="" name="correo" id="correo" type="email" required>
                        </div>
                    </div>

                    <input type="hidden" name="fecha" id="fecha" value="{{ \Carbon\Carbon::now('America/Bogota')->format('Y-m-d H:i:s') }}">

                    <input type="hidden" name="posts_id" value="{{ $post->id }}">

                    <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <textarea class="form-control" name="contenido" id="contenido" placeholder="Escriba aqui su comentario" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg full-width">Enviar Comentario</button>
                    </div>
				</div>
			</form>
			<!-- ... end Comment Form -->

		</div>
	</div>
</div>

@endsection
