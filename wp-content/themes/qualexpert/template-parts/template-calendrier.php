<?php 
	/** 
  *Template Name: calendrier 
  */
 ?>
 <?php 
 	get_header();
  ?>
  <section id="ban-actu" style="background: url('<?php echo get_field('banniere-img') ?>'); background-repeat: no-repeat; background-size: cover;">
	<div class="container">
		<div class="in-actu">
			<h2><?php echo get_field('banniere-titre') ?></h2>
		</div>
	</div>  	
  </section>

  <section id="content-calendar">
  	<div class="container">
  		<h1><?php echo get_field('calendar-titre')  ?></h1>
  		<?php echo get_field('calendar-pgp') ?>
  	</div>
  </section>

  <?php 
    $args = get_posts(array(
      'post_type' => 'calendrier',
      'post_status' => 'publish',
      'posts_per_page' => 6,/*limite le izy tsy mihoatra ny 6 zan izy eto */
      'orderby' => 'date',
    ));
  ?>

  <section id="calendar-article">
  	<div class="container">
  		<?php 
              if(is_array($args)) :
          foreach ($args as $arg):
             ?>
  		<article>
  			<div class="row">
  			<div class="col-md-2">
  				<div class="agenda-date">
		  			<h1><?php echo get_the_time("d-m-yy") ?></h1>
		  		</div>
  			</div>
		  	<div class="col-md-10">
		  		<div class="agenda-content">	
              <h1><?php echo get_the_title( $arg->ID ); ?></h1>
              <?php echo get_the_excerpt($arg->ID); ?>
              <div class="art-lire">
            
          </div>
		  		</div>
		  	</div>
  		</div>
  		</article>
  		<?php endforeach; endif; ?>
  	</div>
  </section>

  <?php get_footer(); ?>