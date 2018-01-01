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

    <!--  Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Bellefair|Playfair+Display|Yeseva+One" rel="stylesheet">

    <!-- Analytics script -->
    <script src="<?php echo base_url('assets/js/hotjar_script.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/ga_script.js') ?>"></script>

    <!-- Cloud Flare for graph -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>

    <!-- CDN for clipboard -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.7.1/clipboard.min.js"></script>

    <!-- Google Recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>

</head>