<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/quizz.css')?>" />

    <!--  Link to Bootstrap online: « Content delivery network » CDN-->
    <link href="<?php echo(BOOTSTRAP_CDN); ?>" rel="stylesheet">

    <!--  METAS FOR SEO-->
    <title>Shopping Crisis: Should I Buy the bag ?</title>
    <meta name="description" content="Take the quizz to find out if you really should buy the bag or leave it!" />

</head>

<body>

<div class="container">

    <header class="my-3">
        <h1 id="<?php echo($item);?>" class="text-center"><?php echo($title);?></h1>
    </header>
 
    <section id="quizz" class="text-center my-3">
        <div id="content_zone" class="card">
            <div id="question_zone" class="card-block text-center">
                <p id="question_title" class="card-text text-center my-3"></p>
                <div id="buttons_zone">
                    <button id="no" class="btn btn-lg btn-danger mr-3 my-3">No</button>
                    <button id="yes" class="btn btn-lg btn-success mr-3 my-3">Yes</button>
                </div>
            </div>
        </div>
    </section>
    <section id="return">
        <div>
        <p>
            <a href="<?php echo base_url('index.php/start/welcome') ?>" rel="no follow"><i class="fa fa-arrow-left my-3 mx-2" aria-hidden="true"> To quit, it's this way.</i></a>
        </p>
        </div>
    </section>
    <footer class="text-center">
        <hr/>
        <small>Made with <i class="fa fa-heart-o" style="color: red;" aria-hidden="true"></i> by Anaïs, your friend with attitude. You'll thank me later.</small>
        
        <ul class="text-center">
            <li><small class="text-right">Come & say thank you <i class="fa fa-bolt" aria-hidden="true" style="margin-left: 2em; color: yellow;"></i> </small></li>
            <li><a href="https://twitter.com/AnaisGueyte" alt="twitter anais gueyte" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="https://www.linkedin.com/in/agueyte/" alt="linkedin anais gueyte" target="blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></p></li>
            <li><a href="https://github.com/AnaisGueyte" alt="github anais gueyte" target="blank"><i class="fa fa-github" aria-hidden="true"></i></a></li>
            <li><a href="http://bit.ly/AnaisOnVinted" alt="vide dressing blogueuse mode" target="blank"><img id="vinted" src="<?php echo base_url('assets/images/vinted.svg')?>"/></a></li>
        </ul>
    </footer>

</div>





<script src="<?php echo(AJAX_GOOGLE_API); ?>"></script>
<script src="<?php echo(BOOTSTRAP_JS); ?>"></script>
<script src="<?php echo(FONT_AWESOME); ?>"></script>
<script src="<?php echo base_url('assets/js/quizz.js')?>"></script>

</body>

</html>
