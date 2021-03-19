<?php
// Template Name: Sobre
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section class="container sobre">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

			<div class="grid-8">
				<img src="<?php the_field('foto_rest'); ?>" alt="Fachada do Rest">
			</div>

			<div class="grid-8">
			
				<?php 
				$contents = get_field('conteudos');
				if (isset($contents)) { foreach ($contents as $texts) { ?>
				<h2><?php echo $texts['titulo_contents']; ?></h2>
				<p><?php echo $texts['texto_contents']; ?></p>
				<?php } } ?>

			</div>
		</section>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>