<?php get_header(); ?>
<?php if (is_user_logged_in()) : ?> 
	<?php $current_user = wp_get_current_user(); ?>
	<?php //echo "<pre>"; print_r($current_user->user_nicename)  ?>
	<?php if (!empty($_GET['player'])) : ?>
		<?php get_template_part('index', 'play'); ?>
	<?php else : ?>
		<?php get_template_part('index', 'index'); ?>
	<?php endif; ?>
<?php else : ?>
	<h2>Usuario sin acceso. </h2>
	<p><a href="<?php echo get_site_url() ?>">ir pagina principal</a></p>
<?php endif; ?>




<?php get_footer(); ?>