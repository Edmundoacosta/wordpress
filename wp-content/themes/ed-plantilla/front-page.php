<!-- -->
<?php get_header(); ?>
<!-- -->
<?php if( have_posts() ) : the_post(); ?>
	<section>
		<h1><?php the_title();  ?></h1>
		<?php the_content(); ?>
	</section>
<?php endif; ?>
<!-- Archivo de barra lateral por defecto -->
<?php get_sidebar(); ?>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>