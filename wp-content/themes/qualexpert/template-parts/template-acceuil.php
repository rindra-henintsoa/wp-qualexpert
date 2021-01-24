<?php 
	/**
	*	Template Name: acceuil
	*/
 ?>
 <?php
 	get_header(); 
  ?>
  <section id="banniere" style="background: url('<?php echo get_field('img-ban') ?>')">
	<div class="container">
		<div class="in-ban">
			<h2><?php echo get_field('titre-ban') ?></h2>
			<p>
        <?php echo get_field('pgp-ban') ?>   
      </p>
			<!--<button type="button" class="btn btn-outline-primary">Primary</button>-->
			 <button id="btn-banner" type="button" class="btn">En savoir plus></button>
		</div>
	</div>  	
  </section>

  <section id="lorem">
  	<div class="container">
  		<div class="in-lorem">
  			<div class="row">
  				<div class="col-md-4">
  					<div class="lorem-content">
              <h1 class="lorem-titre"><strong><?php echo get_field('grd-titre') ?></strong></h1>
              <h2><?php echo get_field('sous-titre') ?></h2>
              <?php echo get_field('pgp-lorem') ?>
            </div>  
  				</div>	
  				<div class="col-md-4">
  					<div class="lorem-content">
              <h1 class="lorem-titre"><strong><?php echo get_field('grd-titre') ?></strong></h1>
              <h2><?php echo get_field('sous-titre') ?></h2>
              <?php echo get_field('pgp-lorem') ?>
            </div>
  				</div>	
  				<div class="col-md-4">
  				  <div class="lorem-content">
              <h1 class="lorem-titre"><strong><?php echo get_field('grd-titre') ?></strong></h1>
              <h2><?php echo get_field('sous-titre') ?></h2>
              <?php echo get_field('pgp-lorem') ?>
            </div>
  				</div>	
  			</div>
  		</div>
  	</div>
  </section>

  <section id="intro">
  	<div class="container">
  		<div class="in-intro">
  			<h1><strong><?php echo get_field('titre-intro') ?></strong></h1>
  			<p>
       <?php echo get_field('pgp1') ?>   
        </p>
  			<p>
       <?php echo get_field('pgp2') ?>   
        </p>
        <button id="btn-intro" type="button" class="btn">En savoir plus   ></button>
  		</div>
  	</div>
  </section>

  <section id="formation">
  	<div class="in-form">
  		<div class="form-left">
  			<div class="txt-form">
  				<h1><?php echo get_field('titre-form') ?></h1>
	  			<?php echo get_field('pgp-form') ?>
	  			<?php echo get_field('liste-form') ?>
           <button id="btn" type="button" class="btn">En savoir plus   ></button>
  			</div>
	  	</div>
	  	<div class="form-right" style="background: url(<?php echo get_field('img-form')?>); background-repeat: no-repeat; background-size: cover;">
	  	</div>	
  	</div>
  </section>

  <section id="veille">
  	<div class="in-veille">
  		<div class="veille-left" style="background: url(<?php echo get_field('veille-img')?>); background-repeat: no-repeat; background-size: cover;">
  			
  		</div>
  		<div class="veille-right">
  			<div class="txt-veille">
  				<h1><?php echo get_field('veille-titre') ?></h1>
  				<?php echo get_field('veille-pgp') ?>
  				<button id="btn" type="button" class="btn">En savoir plus   ></button>
  			</div>
  		</div>
  	</div>
  </section>

  <section id="audit">
  	<div class="in-audit">
  		<div class="audit-left">
  			<div class="audit-txt">
  				<h1><?php echo get_field('audit-titre') ?></h1>
	  			<?php echo get_field('audit-pgp') ?>
	  			<?php echo get_field('audit-liste') ?>
          <button id="btn" type="button" class="btn">En savoir plus   ></button>
  			</div>
  		</div>
  		<div class="audit-right" style="background: url(<?php echo get_field('audit-img') ?>); background-repeat: no-repeat; background-size: cover;">
  		</div>
  	</div>
  </section>

  <section id="extern">
  	<div class="in-extern">
  		<div class="extern-left" style="background: url(<?php echo get_field('extern-img') ?>); background-repeat: no-repeat; background-size: cover;">
  			
  		</div>
  		<div class="extern-right">
  			<div class="extern-txt">
  				<h1><?php echo get_field('extern-titre') ?></h1>
	  			<?php echo get_field('extern-pgp') ?>
          <button id="btn" type="button" class="btn">En savoir plus   ></button>
  			</div>
  		</div>
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

  <section id="actus">
  	<div class="container">
  		<div class="in-actus">
  			<h1><?php echo get_field('actu-titre') ?></h1>
  			<?php echo get_field('actu-pgp') ?>
  		</div>

      <?php 
    $args = get_posts(array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page' => 3,
      'orderby' => 'date',
    ));
  ?>

  		<div class="actu">
  			<div class="row">
          
          <?php 
              if(is_array($args)) :
          foreach ($args as $arg):
            $terms = get_the_terms($arg->ID, 'actualite' );
             ?>

    				<div class="col-md-4">

                
                <article class="in-actu">
                    <?php echo  get_the_post_thumbnail($arg->ID, 'full'); ?>
                    <h1><?php echo get_the_title( $arg->ID );?></h1>
                    <p class="date"><?php echo get_the_time("d-m-y") ?></p>
                    <a href="<?php the_permalink($arg->ID); ?>">
          En lire plus
        </a>
                    <span><?php echo get_the_excerpt($arg->ID);?></span>


                </article>
    				</div>

            <?php endforeach; endif; ?>

  			</div>
  				
  		</div>
      <button id="btn-actu" type="button" class="btn">Toutes les actualités ></button>
  	</div>
  </section>

  <?php 
  get_footer();
  	 ?>
