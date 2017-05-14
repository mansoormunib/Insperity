<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen child
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	

</head>

<body <?php body_class(); ?>>
<div>
	<div>

		<header>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                            <a href="<?php echo home_url( '/' ); ?>" title="Insperity">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/insperity-logo.png" width="220" height="57"  class="insperity-logo">
                            </a>
                    </div>
                    <div class="col-sm-6">
                        <span class="pull-right specialist-call">
                            <span>Speak to a specialist now</span>
                            <a href="tel:8556777813" class="telephone">855.677.7813</a>
                        </span>
                    </div>
                </div>
            </div><!-- /.container -->
        </header>

		<div>
