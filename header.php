<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- FAVICONS -->
<?php //favicons(get_template_directory_uri() . '/assets/favicons/'); ?>

<?php wp_head(); ?>

</head>

<body>

  <?php include 'lib/components/topbar.php'; ?>
  <?php include 'lib/components/hamburger.php'; ?>
  <?php include 'lib/components/mobile-menu.php'; ?>
  <?php include 'lib/components/header.php'; ?>

  <main >
