<?php // if (is_user_logged_in()) : ?>
<?php if (count($_GET) == 1 || count($_GET) == 0) : ?>
<?php get_template_part('index', 'index'); ?>
<?php elseif (isset($_GET['player'])) : ?>
<?php get_template_part('index', 'play'); ?>
<?php elseif (isset($_GET['final'])) : ?>
<?php get_template_part('index', 'final'); ?>
<?php endif; ?>
<?php //else : ?>
<!-- <h2>Usuario sin acceso.</h2> -->
<!-- <p><a href="<?php echo get_site_url() ?>">ir pagina principal</a></p> -->
<?php //endif;?>
