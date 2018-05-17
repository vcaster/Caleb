<?php
    require_once("../resources/config.php");

    include(TEMPLATE_FRONT.DS."header.php")
?>
    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>Shop Name!</h1>
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

        <?php get_products_in_shop(); ?>

        <!-- /.row -->

        <!-- Footer -->
 <?php include(TEMPLATE_FRONT.DS."Footer.php"); ?>
