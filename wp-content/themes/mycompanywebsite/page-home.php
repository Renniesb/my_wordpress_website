<?php
/**

Template Name: Home Page

 */

$greeting = get_field('greeting');
$description_niche = get_field('description_niche');


get_header(); ?>

<?php get_template_part('template-parts/content','headerbar'); ?>
  <?php get_template_part('template-parts/content', 'headerimage'); ?>
  <?php get_template_part('template-parts/content', 'niche'); ?>
  <?php get_template_part('template-parts/content', 'services'); ?>
  <?php get_template_part('template-parts/content', 'work'); ?>
  <?php get_template_part('template-parts/content', 'modal'); ?>

<?php get_footer(); ?>
