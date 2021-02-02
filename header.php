<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
    <style>
        .navbar-brand img {
            width: 100px;
        }

        .nav-link img {
            width: 100px;
        }

        .row {
            overflow: hidden !important;
        }
    </style>
</head>
<body>
    <?php get_template_part('template-parts/content', 'mainnav'); ?>

    <!-- Container Fluid -->
    <div class="container-fluid">
        <!-- Wrapper -->
        <div class="row mt-4">
        