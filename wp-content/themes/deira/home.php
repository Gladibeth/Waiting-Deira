<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Deira</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Mukta&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body>


<div class="container-body">
	<div class="title">
		<div class="title-content">
			<h1>EN <br> CONSTRUCCIÓN</h1>
			<p>Este sitio estará listo pronto</p>
		</div>
		<a href="#" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalScrollable">Notificame</a>
		<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
			aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-scrollable modal-md" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalScrollableTitle">Contáctanos</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="container-contacto">
						<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2, 'title' => false, 'description' => false ) ); ?>
						</div>
					</div>
					<div class="modal-footer">
						<!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button> -->
						<!-- <a href="#" class="btn btn-dark">Enviar</a> -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="iconos">
		<div class="iconos-content">
			 <a target="_blank" href="https://facebook.com/deirastore"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Enmascarar grupo 2.png" alt=""></a>
			<a target="_blank" href="https://www.linkedin.com/company/deirait"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Enmascarar grupo 5.png" alt=""></a>
			<a href="mailto:contacto@deira.cl"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/email.png" alt=""></a>
		</div>
	</div>
</div> 

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<?php wp_footer(); ?>

</body>
</html>

