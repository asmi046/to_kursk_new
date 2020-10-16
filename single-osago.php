<?php 

/*
Template Name: Шаблон страницы ОСАГО
Template Post Type: post, page
*/

get_header(); ?>

	<?php get_template_part('template-parts/header-section');?>

	<main class="main">

		<?php get_template_part('template-parts/osago-banner');?>

		<?php get_template_part('template-parts/request-section');?>

		<?php get_template_part('template-parts/advantages-section');?>

		<?php get_template_part('template-parts/useful-info');?>
    
	</main>
<?php get_footer(); ?>   
<?php get_template_part('template-parts/popups');?>