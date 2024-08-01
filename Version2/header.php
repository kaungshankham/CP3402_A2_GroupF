<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/Centre Logo 1.jpg">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <!-- Navigation code using wp_nav_menu() for dynamic menu -->
    </nav>
