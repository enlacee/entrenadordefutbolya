<?php
/* Template Name: Home */

get_header();

?>
<div class="container-fluid home-body background-box" style="height: 100%;">
	<div class="background d-none d-md-block"></div>
	<div class="container">

		<div class="row">
			<h1 class="col-md-12 text-center">La manera más rápida de preguntar a entrenadores de fútbol online</h1>
			<h2 class="col-xs-12 col-md-12 text-center">EntrenadorDeFutbolYa le asignará el entrenador más adecuado</h2>
		</div>
		<div class="row">
			<div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2">
				<form>
					<div class="row">
						<div class="col-md-6 offset-md-6 text-right">
							.
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<textarea required="" placeholder="Escriba aquí su pregunta..." class="form-control"></textarea>
							</div>
							<button class="btn btn-lg btn-block btn-primary" type="submit">Obtener una respuesta</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2 text-center">
				.
			</div>
		</div>
	</div>
</div>
<style type="text/css">
html, body{
	margin: 0;
	padding: 0;
	height:100%;
}

.home-body h1,h2{
	color: white;
	margin-bottom: 0;
}
.home-body h1{
	font-size: 2.3em;
	margin-top: 30px;
	margin-bottom: 10px;
}
.home-body h2{
	font-size: 1.4em;
	margin-top: 15px;
	margin-bottom: 30px;
}
.home-body .container{
	padding-top: 5%;
}
.content-bbt-menu{
	/*padding: 14px 0;*/
	padding: 0;
}
h1.site-title{
	margin: 0;
	font-size: 1.55em;
	line-height: 2em;
}

form{
	background-color: rgba(255, 255, 255, 0.5);
	border-radius: 3px;
	padding: 10px;
	margin-bottom: 20px;
}

form textarea {
	height: 140px !important;
	resize: none;
}

@media (max-width: 768px) {
	.home-body h1{
		font-size: 1.5em;
		margin-top: 10px;
	}
	.home-body h2{
		font-size: 1.1em;
		color: #DDDDDD;
		margin-bottom: 30px;
		margin-top: 5px;
	}
	div.content-bbt-menu{
/*		padding-top: 0;
		padding-bottom: 0;*/
	}
}
.background{
	background-image: url(<?php echo get_template_directory_uri(); ?>/img/football2.png);
	background-position: right bottom;;
	background-repeat: no-repeat;
	/*background-size: 100% auto;*/
	height: 100%;
	width: 100%;
	position: absolute;
	top: 0;
	left: 0;
}
</style>
<script type="text/javascript">
	(function($){
		var $homeBody = $( '.home-body' );
		var $headerHeight = $( '.container.content-bbt-menu' ).height();
		
		$homeBody.height( $(window).height() - $headerHeight );
	})(jQuery);
</script>
<?php
get_footer();
