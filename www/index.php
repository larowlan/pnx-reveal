<?php

/**
 * @file
 * Main index file for cupcake.
 */

// Setup the application.
define('APP_ROOT', getcwd());
require_once APP_ROOT . '/../vendor/autoload.php';

$cupcake = \Cupcake\Cupcake::init();

?>

<!doctype html>
<html lang="en">

  <head>
    <?php $cupcake->renderTemplate('meta'); ?>

    <?php $cupcake->renderTemplate('reveal_header'); ?>
  </head>


<body>

<div class="reveal">


  <!-- Any section element inside of this container is displayed as a slide -->
  <div class="slides">
    <?php $cupcake->renderSlides(); ?>

    <?php $cupcake->renderTemplate('footer'); ?>
  </div>
</div>

<?php
// Comment this template out to print.
  $cupcake->renderTemplate('reveal_footer');
?>

</body>
