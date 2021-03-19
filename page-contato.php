<?php
// Template Name: Contato
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section class="container contato">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

			<div class="grid-16">
				<a href="<?php the_field('mapa_link'); ?>" target="_blank"><img src="<?php the_field('mapa_rest'); ?>" alt="Fachada do Rest"></a>
			</div>

			<?php
				$datas = get_field('dados');
				if (isset($datas)) { foreach ($datas as $data) { ?>
			<div class="grid-1-3 contato-item">
				<h2><?php echo $data['titulo_dados']; ?></h2>	
				<p><?php echo $data['item1_dados']; ?></p>
				<p><?php echo $data['item2_dados']; ?></p>
				<p><?php echo $data['item3_dados']; ?></p>
			</div>
			<?php } } ?>
		</section>
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>