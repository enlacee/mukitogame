<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Enlacee
 * @subpackage Mukito
 * @since Mukito 1.0
 */
?><html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8" />
        <link rel="shortcut icon" type="image/png" href="<?php echo get_site_url() ?>favicon.png"/>
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/public/lib/bootstrap/dist/css/bootstrap.css" media="screen" title="no title" charset="utf-8">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/public/css/base.css" media="screen" charset="utf-8">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/public/css/style.css" media="screen" charset="utf-8">
        <script type="text/javascript"><!-- application/ld+json -->
        var context = { "@context" : "http://schema.org", "@type" : "Organization", "name" : "App Test", "url" : "<?php echo get_template_directory_uri(); ?>" }
        </script>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php wp_head() ?>
	</head>
	<body <?php body_class('bg1'); ?>>
	<div class="wrapper">
		<div class="container">






