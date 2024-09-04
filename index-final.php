<html>
    <head>
	<meta charset="utf-8" />
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/favicon.png"/>
	<title>Final</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/public/lib/bootstrap/dist/css/bootstrap.css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/public/css/base.css" media="screen" charset="utf-8">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/public/css/style.css" media="screen" charset="utf-8">
        <script type="text/javascript"><!-- application/ld+json -->
	    var context = {"@context": "http://schema.org", "@type": "Organization", "name": "App Test", "url": "http://anibal.francis-gonzales.info"}
        </script>
	<style>

	    .controls label.radio {
		color:black;
		font-weight: normal;
	    }
	    form.form-horizontal p {
		font-weight: bold;
		color:black;
		padding: 0;
		margin: 0;
	    }
	    .modal-body{
		padding: 2px 10px;
	    }
	    form .form-group {
		margin-bottom: 2px;
	    }
	    .error{
		color:red;
	    }
	</style>
    </head>
    <body class="bg2">

	<div class="wrapper">
	    <div class="container">
		<div class="row">
		    <div class="div-logo">
			<a href="<?php echo get_site_url() ?>"><img src="<?php echo get_template_directory_uri() ?>/public/image/logo.png"/><a>
		    </div>                                
		</div>

		<div class="row font-1 margin-bottom-60">
		    <div class="col-md-12">
			<div class="text-center"><h1>MUY BIEN!</h1></div>
			<div class="text-center"><span id="point">X</span></div>
		    </div>
		</div>

		<div class="row">
		    <div class="col-md-12 text-center">
			<div class="text-center">
			    <a href="http://www.platicom.com.pe/"><img src="<?php echo get_template_directory_uri() ?>/public/image/restart.png" class="img-rounded"></a>
			</div>

		    </div>
		</div>
	    </div>


	</div>





	<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="gridSystemModal">
	    <div class="modal-dialog" role="document" style="margin-top: 0.8%;">
		<div class="modal-content">
		    <div class="modal-header">
			<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
			<h4 class="modal-title" id="gridSystemModalLabel">Encuesta Platicom</h4>
		    </div>
		    <div class="modal-body">

			<form class="form-horizontal" role="form" action="" method="POST" id="contact" name="contact" onsubmit="return false;">
			    <p>1. ¿Qué tan entendible fue la capacitación recibida?</p>
			    <div class="form-group">								
				<label class="control-label col-sm-1" for="p1"></label>
				<div class="col-sm-10">

				    <div class="control-group">									
					<div class="controls">
					    <div class="col-sm-6">
						<label class="radio">
						    <input type="radio" name="p1" value="1" class="required">
						    Totalmente entendible
						</label>
						<label class="radio">
						    <input type="radio" name="p1" value="3">
						    Medio entendible
						</label>
						<label class="radio">
						    <input type="radio" name="p1" value="5">
						    Para nada entendible
						</label>
					    </div>

					    <div class="col-sm-6">
						<label class="radio">
						    <input type="radio" name="p1" value="2">
						    Muy entendible
						</label>

						<label class="radio">
						    <input type="radio" name="p1" value="4">
						    Ligeramente confuso
						</label>

					    </div>


					</div>
				    </div>									
				</div>								
			    </div>

			    <p>2. El tiempo para contestar las preguntas de la evaluación fue:</p>
			    <div class="form-group">								
				<label class="control-label col-sm-1" for="p2"></label>
				<div class="col-sm-10">

				    <div class="control-group">									
					<div class="controls">
					    <div class="col-sm-6">
						<label class="radio">
						    <input type="radio" name="p2" value="1" class="required">
						    Demasiado extenso
						</label>
						<label class="radio">
						    <input type="radio" name="p2" value="3">
						    Suficiente
						</label>
						<label class="radio">
						    <input type="radio" name="p2" value="5">
						    Muy reducido
						</label>
					    </div>
					    <div class="col-sm-6">
						<label class="radio">
						    <input type="radio" name="p2" value="2">
						    Extenso
						</label>	
						<label class="radio">
						    <input type="radio" name="p2" value="4">
						    Reducido
						</label>

					    </div>	

					</div>
				    </div>									
				</div>								
			    </div>

			    <p>3. ¿Qué tan atractivo fue el módulo recibido?</p>
			    <div class="form-group">								
				<label class="control-label col-sm-1" for="p3"></label>
				<div class="col-sm-10">

				    <div class="control-group">									
					<div class="controls">
					    <div class="col-sm-6">
						<label class="radio">
						    <input type="radio" name="p3" value="1" class="required">
						    Totalmente atractivo
						</label>
						<label class="radio">
						    <input type="radio" name="p3" value="3">
						    Medio Atractivo
						</label>
						<label class="radio">
						    <input type="radio" name="p3" value="5">
						    Totalmente Aburrido
						</label>
					    </div>
					    <div class="col-sm-6">
						<label class="radio">
						    <input type="radio" name="p3" value="2">
						    Muy atractivo
						</label>
						<label class="radio">
						    <input type="radio" name="p3" value="4">
						    Ligeramente Aburrido
						</label>
					    </div>

					</div>
				    </div>									
				</div>								
			    </div>

			    <p>4. Cómo considera usted considera esta capacitación?</p>
			    <div class="form-group">								
				<label class="control-label col-sm-1" for="email"></label>
				<div class="col-sm-10">

				    <div class="control-group">									
					<div class="controls">
					    <div class="col-sm-6">
						<label class="radio">
						    <input type="radio" name="p4" value="1" class="required">
						    Totalmente novedosa
						</label>
						<label class="radio">
						    <input type="radio" name="p4" value="3">
						    Igual que todas las demás
						</label>
						<label class="radio">
						    <input type="radio" name="p4" value="5">
						    Totalmente Aburrido
						</label>
					    </div>
					    <div class="col-sm-6">
						<label class="radio">
						    <input type="radio" name="p4" value="2">
						    Novedosa
						</label>
						<label class="radio">
						    <input type="radio" name="p4" value="4">
						    De menor calidad que las demás
						</label>
					    </div>

					</div>
				    </div>									
				</div>								
			    </div>

			    <p>5. La capacitación resultó para usted:</p>
			    <div class="form-group">								
				<label class="control-label col-sm-1" for="p5"></label>
				<div class="col-sm-10">

				    <div class="control-group">									
					<div class="controls">
					    <div class="col-sm-6">
						<label class="radio">
						    <input type="radio" name="p5" value="1" class="required">
						    Muy provechosa
						</label>
						<label class="radio">
						    <input type="radio" name="p5" value="3">
						    Poco provechosa
						</label>
					    </div>
					    <div class="col-sm-6">
						<label class="radio">
						    <input type="radio" name="p5" value="2">
						    Provechosa
						</label>
						<label class="radio">
						    <input type="radio" name="p5" value="4">
						    Nada provechosa
						</label>
					    </div>

					</div>
				    </div>									
				</div>								
			    </div>

			    <hr>

			    <div class="row">
				<div class="col-sm-6">
				    <div id="contact-message"> </div>
				</div>
				<div class="col-sm-5 text-right">
				    <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
				    <button type="submit" class="btn btn-primary">Save changes</button>
				</div>							
			    </div>



			</form>

		    </div>
		</div><!-- /.modal-content -->
	    </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->


	<!-- libs -->

	<script charset="utf-8" type="text/javascript" src="<?php echo get_template_directory_uri() ?>/public/lib/jquery/dist/jquery.js"></script>
	<script charset="utf-8" type="text/javascript" src="<?php echo get_template_directory_uri() ?>/public/lib/bootstrap/dist/js/bootstrap.min.js"></script>
	<script charset="utf-8" type="text/javascript" src="<?php echo get_template_directory_uri() ?>/public/lib/jquery-storage-api/jquery.storageapi.js"></script>
	<script charset="utf-8" type="text/javascript" src="<?php echo get_template_directory_uri() ?>/public/lib/jquery-validation/dist/jquery.validate.min.js"></script>
	<script charset="utf-8" type="text/javascript" src="<?php echo get_template_directory_uri() ?>/public/lib/jquery-validation/src/localization/messages_es_PE.js"></script>

	<script charset="utf-8" type="text/javascript" src="<?php echo get_template_directory_uri() ?>/public/js/jquery.url.js"></script>
	<script>
	/***
	* Accion 01
	*/
		    var storage;
		    $(document).ready(function () {
				// read and save id (localstorage)
				var ns = $.initNamespaceStorage('ns_name');
				storage = ns.localStorage;

				// GET DATA
				var dataApp = storage.get('app');

				var puntos = dataApp.puntos;
				if (puntos === 0 || puntos > 1) {
				    $('#point').text(puntos + ' PUNTOS');
				} else if (puntos === 1) {
				    $('#point').text(puntos + ' PUNTO');
				}

				enviarDataPost(dataApp);

				// show modal
				$('#gridSystemModal').modal({
				    backdrop: 'static',
				    keyboard: true
				});

		    });
			    // miniscript for get URL params

 
		    function enviarDataPost(data) {
				var ns = $.initNamespaceStorage('ns_name');
				var storage = ns.localStorage;

				if (typeof (data.enviado) === 'undefined') {
				    $.post(context.url + '/api/play/data', { data: data.quizData })
					.done(function (rs) {
						data.enviado = true;
						storage.set('app', data);

						if (typeof (rs.id) != 'undefined') {
							storage.set('id_juego', rs.id);
						}

				    }, "json");
				} else {
				    
				    storage.set('id_juego', '');
				}
		    }
	</script>


	<script>
	    /**
	     * Accion 02
	     * 
	     */
    $(document).ready(function () {
		// read and save id (localstorage)
		// GET DATA
		var user_id = storage.get('user_id');

		var contact = $("#contact");
		var message = $("#contact-message");
		$(contact).validate({
		    submitHandler: function (form) {
				var dataPost = contact.serialize();
				var id_juego = storage.get('id_juego');

				dataPost += '&codigo_usuario=' + user_id;
				dataPost += '&id_juego=' + id_juego;

				if (typeof(id_juego) != 'undefined' && id_juego > 0) {
				$.ajax({
					type: 'POST',
					url: context.url + '/api/encuesta/data',
					data: dataPost,
				    success: function (data) {
						if (data.status === true) {
						    //contact.hide();
						    contact[0][0].disabled = true;
						    contact[0].reset();
						    message.removeClass('hide')
							    .removeClass('alert alert-warning')
							    .addClass('alert alert-success');

						    message.text("Envio datos.");
						    $('#gridSystemModal').modal('hide');
						} else {
						    message_bad.removeClass('hide')
							    .removeClass('alert alert-success')
							    .addClass('alert alert-warning');
						    message.text("Error de Envio.");
						}
				    },
				    error: function (errorThrown) {
						console.log(errorThrown);
				    }
				}); // end ajax

				
				} else {
					alert("No se enviaròn sus datos! /n verificar si ingreoso correctamente al sitio web,")
				}

			}
		});

    });

	</script>
    </body>
</html>
