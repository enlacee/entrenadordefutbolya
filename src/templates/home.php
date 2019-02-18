<?php
/* Template Name: Home */

get_header();

?>
<div class="container-fluid home-body" style="background-color: #1c79a5; height: 100%; margin-bottom:-40px">

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
				copyright
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
.site-branding{
	height: 40px;
}


form{
	background-color: rgba(34, 34, 34, 0.5);
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
		font-size: 1.4em;
		margin-top: 10px;
	}
	.home-body h2{
		font-size: 1.1em;
		color: #DDDDDD;
		margin-bottom: 30px;
		margin-top: 5px;
	}
	div.content-bbt-menu{
	padding-top: 0;
	padding-bottom: 0;

	}
}
</style>
<?php
get_footer();
?>
