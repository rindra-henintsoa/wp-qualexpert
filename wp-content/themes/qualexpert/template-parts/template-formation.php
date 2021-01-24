<?php 
	/**
	*	Template Name: formation
	*/
 ?>
 <?php 
 	get_header();
  ?>
  <section id="ban-actu" style="background: url('<?php echo get_field('banniere-image') ?>')">
	<div class="container">
		<div class="in-actu">
			<h2><?php echo get_field('banniere-titre') ?></h2>
		</div>
	</div>  	
  </section>

  <section id="contenu">
  	<div class="container">
  		<div class="top-content">
  				<h1><?php echo get_field('grd-titre-form') ?></h1>
  		<?php echo get_field('pgp-form') ?>
  		</div>
  	</div>
  </section>

  <section id="bottom-form">
  	<div class="bottom-content">
  			
  	</div>
  </section>

  <section id="formation-contact">
  	<div class="container">
  		<div class="in-contact">
  			Vous avez une demande spécifique ?  Vous souhaitez un ajustement d’une formation catalogue ? <br>
Qualexpert s’adapte à vos besoins et module ses formations à chaque entreprise.
<?php echo get_field('contact-pgp') ?>
 <button id="btn-contact" type="button" class="btn">Contact   ></button>
  		</div>
  	</div>
  </section>
  <?php 
  	get_footer();
   ?>