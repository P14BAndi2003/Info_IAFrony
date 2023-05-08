<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Cache-Control" content="max-age=2592000, public">
  <meta http-equiv="Expires" content="Sun, 06 Jun 2023 00:00:00 GMT">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
	<meta name="description" content="Un site spécialisé sur les informations sur l'IA | IA_Info est en voie de développement pour donner le plus d'expérience possible aux amoureux de l'informatique surtout de l'IA">
		<!-- Shareable -->
		<title>Tous les derniers articles de l'IA sur IA_Info</title>
		<!-- Bootstrap -->
	    {!! Html::linkPreload('https://infoiafrony-production.up.railway.app/assets/scripts/bootstrap/bootstrap.min.css', ['as' => 'style', 'type' => 'text/css', 'nopush' => true]) !!}
    {!! Html::linkPreload('https://infoiafrony-production.up.railway.app/assets/scripts/toast/jquery.toast.min.css', ['as' => 'style', 'type' => 'text/css', 'nopush' => true]) !!}
    {!! Html::linkPreload('https://infoiafrony-production.up.railway.app/assets/scripts/owlcarousel/dist/assets/owl.carousel.min.css', ['as' => 'style', 'type' => 'text/css', 'nopush' => true]) !!}
    {!! Html::linkPreload('https://infoiafrony-production.up.railway.app/assets/scripts/owlcarousel/dist/assets/owl.theme.default.min.css', ['as' => 'style', 'type' => 'text/css', 'nopush' => true]) !!}
    {!! Html::linkPreload('https://infoiafrony-production.up.railway.app/assets/scripts/magnific-popup/dist/magnific-popup.css', ['as' => 'style', 'type' => 'text/css', 'nopush' => true]) !!}
    {!! Html::linkPreload('https://infoiafrony-production.up.railway.app/assets/css/style.css', ['as' => 'style', 'type' => 'text/css', 'nopush' => true]) !!}
    {!! Html::linkPreload('https://infoiafrony-production.up.railway.app/assets/css/skins/all.css', ['as' => 'style', 'type' => 'text/css', 'nopush' => true]) !!}
    {!! Html::linkPreload('https://infoiafrony-production.up.railway.app/assets/css/demo.css', ['as' => 'style', 'type' => 'text/css', 'nopush' => true]) !!}
    
    {!! Html::linkPreload('https://infoiafrony-production.up.railway.app/assets/js/jquery.js', ['as' => 'script', 'type' => 'application/javascript', 'nopush' => true]) !!}
    {!! Html::linkPreload('https://infoiafrony-production.up.railway.app/assets/js/jquery.migrate.js', ['as' => 'script', 'type' => 'application/javascript', 'nopush' => true]) !!}
    {!! Html::linkPreload('https://infoiafrony-production.up.railway.app/assets/scripts/bootstrap/bootstrap.min.js', ['as' => 'script', 'type' => 'application/javascript', 'nopush' => true]) !!}
    {!! Html::linkPreload('https://infoiafrony-production.up.railway.app/assets/scripts/jquery-number/jquery.number.min.js', ['as' => 'script', 'type' => 'application/javascript', 'nopush' => true]) !!}
    {!! Html::linkPreload('https://infoiafrony-production.up.railway.app/assets/scripts/owlcarousel/dist/owl.carousel.min.js', ['as' => 'script', 'type' => 'application/javascript', 'nopush' => true]) !!}}	
    {!! Html::linkPreload('https://infoiafrony-production.up.railway.app/assets/scripts/magnific-popup/dist/jquery.magnific-popup.min.js', [
        'as' => 'script',
        'type' => 'application/javascript',
        'nopush' => true,
    ]) !!}
    {!! Html::linkPreload('https://infoiafrony-production.up.railway.app/assets/scripts/easescroll/jquery.easeScroll.js', [
        'as' => 'script',
        'type' => 'application/javascript',
        'nopush' => true,
    ]) !!}
    {!! Html::linkPreload('https://infoiafrony-production.up.railway.app/assets/scripts/sweetalert/dist/sweetalert.min.js', [
        'as' => 'script',
        'type' => 'application/javascript',
        'nopush' => true,
    ]) !!}
    {!! Html::linkPreload('https://infoiafrony-production.up.railway.app/assets/scripts/toast/jquery.toast.min.js', [
        'as' => 'script',
        'type' => 'application/javascript',
        'nopush' => true,
    ]) !!}
	{!! Html::linkPreload('https://infoiafrony-production.up.railway.app/assets/js/e-magz.js', [
        'as' => 'script',
        'type' => 'application/javascript',
        'nopush' => true,
    ]) !!}


</head>

	<body class="skin-orange">
		<header class="primary">
			<div class="firstbar">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-12">
							<div class="brand">
								<a href="index.html">
									<img src="https://infoiafrony-production.up.railway.app/assets/images/logo.png" alt="Magz Logo"  width="80" height="50">
								</a>
							</div>						
						</div>
						<div class="col-md-9 col-sm-12">
							<h1>Tous sur IA_Info</h1>
							<p>Un site spécialisé sur les informations sur l'IA | IA_Info est en voie de développement pour donner le plus d'expérience possible aux amoureux de l'informatique surtout de l'IA</p>						
						</div>
					
					</div>
				</div>
			</div>

		
			<!-- End nav -->
		</header>

		<section class="page">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12" >
						
						
						<div class="line">
							<div>Latest News</div>
						</div>
						<div class="row">
						@foreach($pagines as $pagine)
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="row">
									<article class="article col-md-12" >
										<div class="inner">
											<figure>
												<a href="{{route('articles.retail',['id' => $pagine->id, 'slug' => Str::slug($pagine->titre) ,'randch' => rand(10000, 99999)]) }}">
													<img src="data:image/png;base64,{{ $pagine->image }}" alt="Sample Article" width="150" height="200">
												</a>
											</figure>
											<div class="padding" style="height: 350px;">
												<div class="detail">
													<div class="time">{{$pagine->datecreation->format('d/m/Y')}}</div>
													<div class="category"><a href="category.html">{{$pagine->auteur->username}}</a></div>
												</div>
												<h2><a href="{{route('articles.retail',['id' => $pagine->id, 'slug' => Str::slug($pagine->titre) ,'randch' => rand(10000, 99999)]) }}">{{$pagine->titre}}</a></h2>
												<p>{{$pagine->description}}	</p>
												<footer>
												
											<!--	<a class="btn btn-primary more" href="{{route('articles.retail',['id' => $pagine->id, 'slug' => Str::slug($pagine->titre) ,'randch' => rand(10000, 99999)]) }}">
														<div>More</div>
														<div><i class="ion-ios-arrow-thin-right"></i></div>
													</a> -->
												</footer>
											</div>
										</div>
									</article>
							
								</div>

							
							</div>
							@endforeach
						
					</div>
						</div>
				</div>
				</div>
				</div>
				<div class="pagination-container">
      
    {{ $pagines->links('vendor.pagination.default') }}
  
</div>
		</section>

		<!-- Start footer -->
		<footer class="footer">
			<div class="container">
		
				<div class="row">
					<div class="col-md-12">
						<div class="copyright">
							COPYRIGHT &copy; 2023. ALL RIGHT RESERVED.
							<div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer -->

		</body>
</html>


