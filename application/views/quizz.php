<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/quizz.css')?>" />

    <meta name="viewport" content="width=device-width">
    <!--  Link to Bootstrap online: « Content delivery network » CDN-->
    <link href="<?php echo(BOOTSTRAP_CDN); ?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/js/hotjar_script.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/ga_script.js') ?>"></script>

    <!--  METAS FOR SEO-->
    <title><?php echo($title);?> Take the quizz now!</title>
    <meta name="description" content="Take the quizz to find out if you really should buy the bag, the shoes or the dress or leave it!" />
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/images/shouldibuythebag.png'); ?>" />

    <!--  Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Bellefair|Playfair+Display|Yeseva+One" rel="stylesheet">

</head>

<body>
<div class="container-fluid">
    <header id="header" class="text-center">
        <div id="bg"></div>
            <h1 id="<?php echo($item);?>" class="text-center"><?php echo($title);?></h1>
    </header>

    <section id="quizz" class="text-center my-3">
        <div id="content_zone" class="card">
            <div id="question_zone" class="card-block text-center">
                <p id="question_title" class="card-text text-center"></p>
                <div id="buttons_zone">
                    <button id="no" class="btn btn-lg btn-outline-danger mr-3">No</button>
                    <button id="yes" class="btn btn-lg btn-outline-success mr-3">Yes</button>
                </div>
            </div>
        </div>
    </section>
    <section id="return">
        <div>
        <p>
            <span id="quit"><i class="fa fa-arrow-left my-3 mx-2" aria-hidden="true"></i>To quit, it's this way</span>
        </p>
        </div>
    </section>
</div>

<script src="<?php echo(AJAX_GOOGLE_API); ?>"></script>
<script src="<?php echo(BOOTSTRAP_JS); ?>"></script>
<script src="<?php echo(FONT_AWESOME); ?>"></script>
<script src="<?php echo base_url('assets/js/quizz.js')?>"></script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- shouldibuythebag -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4208461125657780"
     data-ad-slot="1057141746"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

</body>

</html>
