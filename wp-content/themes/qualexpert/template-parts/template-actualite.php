<?php 
	/**
	*	Template Name: actualité
	*/
 ?>
 <?php 
 	get_header();
  ?>
 <section id="ban-actu" style="background: url(<?php echo get_field('img-banniere') ?>); background-repeat: no-repeat; background-size: cover;">
	<div class="container">
		<div class="in-actu">
			<h2><?php echo get_field('titre-banniere') ?></h2>
		</div>
	</div>  	
  </section>

  <section id="actualite">
  	<div class="container">
  		<h1><?php echo get_field('actualite-titre'); ?></h1>
  		<?php echo get_field('actualite-pgp') ?>
  	</div>
  </section>

  <section id="actus">
  	<div class="container">

  		<div class="actu">
  			<div class="row">
    				<div class="col-md-4">
                <article class="tri-actu" style="background-image: url(<?php echo get_field('actu-img') ?>); background-repeat: no-repeat; background-size: cover;">
                  <span><?php echo get_field('actu_pgp') ?></span>
                </article>
    				</div>
            
    				<div class="col-md-4">
                <article class="tri-actu" style="background-image: url(<?php echo get_field('actu-img') ?>); background-repeat: no-repeat; background-size: cover;">
                  <span><?php echo get_field('actu_pgp') ?></span>
                </article>
            </div>

    				<div class="col-md-4">
                <article class="tri-actu" style="background-image: url(<?php echo get_field('actu-img') ?>); background-repeat: no-repeat; background-size: cover;">
                  <span><?php echo get_field('actu_pgp') ?></span>
                </article>
            </div>

  			</div>	
  		</div>

  		<div class="actu">
  			<div class="row">
    				<div class="col-md-4">
                <article class="tri-actu" style="background-image: url(<?php echo get_field('actu-img') ?>); background-repeat: no-repeat; background-size: cover;">
                  <span><?php echo get_field('actu_pgp') ?></span>
                </article>
    				</div>
            
    				<div class="col-md-4">
                <article class="tri-actu" style="background-image: url(<?php echo get_field('actu-img') ?>); background-repeat: no-repeat; background-size: cover;">
                  <span><?php echo get_field('actu_pgp') ?></span>
                </article>
            </div>

    				<div class="col-md-4">
                <article class="tri-actu" style="background-image: url(<?php echo get_field('actu-img') ?>); background-repeat: no-repeat; background-size: cover;">
                  <span><?php echo get_field('actu_pgp') ?></span>
                </article>
            </div>

  			</div>	
  		</div>

  		<div class="actu">
  			<div class="row">
    				<div class="col-md-4">
                <article class="tri-actu" style="background-image: url(<?php echo get_field('actu-img') ?>); background-repeat: no-repeat; background-size: cover;">
                  <span><?php echo get_field('actu_pgp') ?></span>
                </article>
    				</div>
            
    				<div class="col-md-4">
                <article class="tri-actu" style="background-image: url(<?php echo get_field('actu-img') ?>); background-repeat: no-repeat; background-size: cover;">
                  <span><?php echo get_field('actu_pgp') ?></span>
                </article>
            </div>

    				<div class="col-md-4">
                <article class="tri-actu" style="background-image: url(<?php echo get_field('actu-img') ?>); background-repeat: no-repeat; background-size: cover;">
                  <span><?php echo get_field('actu_pgp') ?></span>
                </article>
            </div>

  			</div>	
  		</div>
  		
      <button id="btn-actu" type="button" class="btn">Toutes les actualités ></button>
  	</div>
  </section>

  <section id="contact"> 
  	<div class="container">
  		<div class="in-contact">
  			Vous avez des questions ?
 <?php echo get_field('contact-pgp') ?>
 <button id="btn-contact" type="button" class="btn">En savoir plus   ></button>
  		</div>
  	</div>
  </section>
  <?php 
  	get_footer();
   ?>