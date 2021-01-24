<?php 
	/**
	*	Template Name: externalisation
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
  		<h1><?php echo get_field('gand-titre') ?></h1>

  		<h2><?php echo get_field('titre-dure') ?></h2>
  		<?php echo get_field('formation') ?>

  		<h2><?php echo get_field('titre-objectif') ?></h2>
  		<?php echo get_field('pgp-objectif') ?>

  		<h2><?php echo get_field('modalite-titre') ?></h2>

  		<h2><?php echo get_field('programme-titre') ?></h2>
  		<?php echo get_field('liste-pgm') ?>

  		<button id="down">Télécharger le programme complet</button>
  	</div>
  </section>

  <section id="extern-contact">
  	<div class="container">
  		<div class="in-contact">
  			Vous souhaitez vous faire une formation ?
 <?php echo get_field('contact-pgp') ?>
 <button id="btn-contact" type="button" class="btn">Contact   ></button>
  		</div>
  	</div>	
  </section>
  <?php 
  	get_footer();
   ?>