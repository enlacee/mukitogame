<html>
	<head>
		<meta charset="utf-8" />
		<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/favicon.png"/>
		<title>App test</title>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/public/lib/bootstrap/dist/css/bootstrap.css" media="screen" title="no title" charset="utf-8">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/public/css/base.css" media="screen" charset="utf-8">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/public/css/style.css" media="screen" charset="utf-8">
        <script type="text/javascript"><!-- application/ld+json -->
        var context = { "@context" : "http://schema.org", "@type" : "Organization", "name" : "App Test", "url" : "<?php echo get_template_directory_uri() ?>" }
        </script>
	</head>
	<body class="bg2">
		<div class="wrapper">
			<div class="container ">

				<!--<div class="row margin-botton-50">&nbsp;</div>-->
				<div class="row">
					<div class="my-box-left col-md-8 col-sm-6">
						<div class="row margin-bottom-30">
							<div class="col-md-4 col-sm-4">
								<div class="div-logo"><img src="<?php echo get_template_directory_uri() ?>/public/image/logo.png"/></div>
							</div>
							<div class="col-md-7 my-header font-1 text-left">
								<h1 id="escenario-titulo" class="font-1">Desafio 1</h1>
							</div>
						</div>

						<div class="row">
							<!--<div class="col-md-12">
								<h1 id="escenario-titulo">Escenario 1</h1>
							</div>-->
						</div>
						<div class="row margin-bottom-10">
							<div class="col-md-12 nopadding">
								<div class="my-img-center margin-bottom-40" id="container-img">
									<div>
										<img id="imagen" src="<?php echo get_template_directory_uri() ?>/public/image/bg-escenario.png" class="img-responsive">
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12 nopadding">
								<!--<div>
									<h1>Historia <i class="fa fa-volume-up"></i></h1>
								</div>-->
								<div id="evidencia-texto" class=" font-1">

								</div>
							</div>
						</div>

					</div>

					<div class="my-box-right col-md-4 col-sm-6">
						<div class="row margin-bottom-20">
							<div class="col-md-12 ">
							</div>
						</div>
						<div class="row nopadding">
							<div class="_">
								<div class="div-id-user col-md-12 font-1 margin-bottom-5"><h4>Usuario : <span id="id_user">43234</span></h4></div>
							</div>
						</div>

						<div id="form-puntos" class="row margin-bottom-10 font-1 nopadding">
							<div class="div-puntos-bg">
							    <div class="pull-left" style="padding-left: 3.6%;">Puntos: <span id="div-puntos">0</span></div>
							    <div class="pull-right nopadding countdown-bg font-1" style="padding-top: 12px !important;line-height: normal;">
								<div class="row clock nopadding">
								    <div class="pull-left"><img src="<?php echo get_template_directory_uri() ?>/public/image/cronometro.png" /></div>
								    <div class="pull-right" id="countdown">00</div>
								</div>
							    </div>
								<div style="clear:both"></div>
							</div>
						</div>

						<div id="container-quiz" class="margin-bottom-10">
						    <div class="box-gray">
							<fieldset id="fieldset-blockear" disabled="">
							<div class="row">
								<div class="col-md-12">
									<h2 id="form-opcion-pregunta" class="font-1"></h2>
								</div>
							</div>
							<div class="row">
								<div id="form-opcion-respuesta" class="col-md-12 margin-bottom-10 font-3">

								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div id="form-respuesta" class="well _white-transparent alert"></div>
								</div>
							</div>
							</fieldset>
						    </div>
						</div>

						<div class="row">
							<div class=" col-md-12 hidden-xs hidden-sm debug_xxx" style="height:auto">
								<div class="mapa">
								    <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/public/image/mukito-mapa.png" />
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- libs -->
		<script charset="utf-8" type="text/javascript" src="<?php echo get_template_directory_uri() ?>/public/lib/jquery/dist/jquery.js">
		</script>
		<script charset="utf-8" type="text/javascript" src="<?php echo get_template_directory_uri() ?>/public/lib/jquery-storage-api/jquery.storageapi.js"></script>
		<script charset="utf-8" type="text/javascript" src="<?php echo get_template_directory_uri() ?>/public/lib/SoundManager2/script/soundmanager2.js"></script>
		<script charset="utf-8" type="text/javascript" src="<?php echo get_template_directory_uri() ?>/public/lib/jsrender/jsrender.js">
		</script>

		<script charset="utf-8" type="text/javascript" src="<?php echo get_template_directory_uri() ?>/public/js/helpers.js"></script>
		<script charset="utf-8" type="text/javascript" src="<?php echo get_template_directory_uri() ?>/public/js/jquery.url.js"></script>
		<script charset="utf-8" type="text/javascript" src="<?php echo get_template_directory_uri() ?>/public/js/js.js"></script>
		<script>
		/**
		* Init project
		*/
		$(document).ready(function() {
			// setup soundmanager2
			soundManager.setup({
				url: context.url + 'public/lib/SoundManager2/swf/',
				flashVersion: 9, // optional: shiny features (default = 8)
				// optional: ignore Flash where possible, use 100% HTML5 mode
				// preferFlash: false,
				onready: function() {
				//
				}
			});

			// set hand
			var ns = $.initNamespaceStorage('ns_name');
			var storage = ns.localStorage;

			if ($.urlParam('player') == null) {
				storage.set('player', '1');
			} else {
				storage.set('player', $.urlParam('player'));
			}
			storage.set('app',{});
			// setter hand
			var idHand = storage.get('player');
			$('.popup-hand-left > img').attr('src', 'public/image/manos/'+ idHand +'.left.png');
			$('.popup-hand-right > img').attr('src', 'public/image/manos/'+ idHand +'.right.png');


			// init app
			App.init();
		});
		</script>
	</body>
</html>
