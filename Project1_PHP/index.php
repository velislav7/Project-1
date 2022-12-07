<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php wp_head(); ?>
</head>
<body class = "home-page-template">
    <?php get_header(); ?>
    <?php get_slideshow(); ?>
    <?php get_description(); ?>
    <?php get_about(); ?>
</body>
</html>