<html>
	<head>
		<meta charset="utf-8" />
		<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/favicon.png"/>
		<title>Home</title>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/public/lib/bootstrap/dist/css/bootstrap.css" media="screen" title="no title" charset="utf-8">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/public/css/base.css" media="screen" charset="utf-8">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/public/css/style.css" media="screen" charset="utf-8">
	</head>
        <body class="bg1">
		<div class="wrapper">
		<div class="container">
			<div class="row">
                <div class="div-logo">
                    <img src="<?php echo get_template_directory_uri() ?>/public/image/logo.png"/>
                </div>
			</div>

			<div class="row text-center margin-bottom-40">
				<h1 class="font-1 text-shadow-black">Seleccionar jugador</h1>
			</div>

			<div class="row">
				<div class="col-md-4 col-xs-4 text-center x-btn-1">
					<div class="_">
						<a href="?player=1&t=m"><img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/public/image/player1.png"></a>
                    </div>
					<div class="_">
						<a class="font-1 text-shadow-black" href="?player=1&t=m">player 1</a>
					</div>
				</div>

				<div class="col-md-4 col-xs-4 text-center x-btn-1">
					<div class="_">
						<a href="?player=2&t=m"><img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/public/image/player2.png"></a>
					</div>
					<div class="_">
						<a class="font-1 text-shadow-black" href="?player=2&t=m">player 2</a>
					</div>
				</div>

				<div class="col-md-4 col-xs-4 text-center x-btn-1">
					<div class="_">
						<a href="?player=3&t=m"><img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/public/image/player3.png"></a>
					</div>
					<div class="_">
						<a class="font-1 text-shadow-black" href="?player=3&t=m">player 3</a>
					</div>
				</div>
			</div>

		</div>
		</div>
		<!-- libs -->
		<script charset="utf-8" type="text/javascript" src="<?php echo get_template_directory_uri() ?>/public/lib/jquery/dist/jquery.js"></script>
		<script charset="utf-8" type="text/javascript" src="<?php echo get_template_directory_uri() ?>/public/lib/jquery-storage-api/jquery.storageapi.js"></script>
		<script charset="utf-8" type="text/javascript" src="<?php echo get_template_directory_uri() ?>/public/js/jquery.url.js"></script>
		<?php $current_user = wp_get_current_user(); ?>
		<script>
			var storage;

			$(document).ready(function() {
				// read and save id (localstorage)
				var ns = $.initNamespaceStorage('ns_name');
				storage = ns.localStorage;
				//storage.set('user_id', $.urlParam('user_id'));
				var id_wordpress = '<?php echo $current_user->user_nicename?>';
				storage.set('user_id', id_wordpress);

			});
			// miniscript for get URL params
		</script>
	</body>
</html>
