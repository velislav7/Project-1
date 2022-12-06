<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="styles.css" />
        <link rel="stylesheet" href="nav.css" />
        <link rel="stylesheet" href="slideshow.css" />
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Vidaloka" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Vidaloka&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Qwigley&family=Vidaloka&display=swap" rel="stylesheet">  
        <!-- <script src="script.js"></script> -->
    </head>
    <body class = "home-page-template">


    <?php get_header(); ?>
    <?php get_slideshow(); ?>
    <?php get_description(); ?>
    <?php get_about(); ?>


    </body>
    <script src="script.js"></script>
</html>