<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/images/shouldibuythebag.png'); ?>" />
    
    <!--  METAS FOR SEO-->
    <title><?php echo($title);?></title>
    <meta property="og:title" content="<?php echo($title);?>" />
    <meta name="description" content="<?php echo($description);?>" />
    <meta property="og:url" content="<?php echo($url);?>" />
    <meta property="og:image" content="<?php echo base_url('assets/images/bag.png'); ?>" />

    <!--  Link to Bootstrap online: « Content delivery network » CDN-->
    <link type="text/css" rel="stylesheet" href="<?php echo($css);?>" />
    <link href="<?php echo(BOOTSTRAP_CDN); ?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/js/hotjar_script.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/ga_script.js') ?>"></script>

    <!--  Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Bellefair|Playfair+Display|Yeseva+One" rel="stylesheet">

    <!-- Cloud Flare for graph -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>

</head>