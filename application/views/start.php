<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/start.css')?>" />
    <link href="<?php echo base_url('assets/css/hover-min.css')?>" "" rel="stylesheet">
    <meta name="viewport" content="width=device-width">

    <!--  Link to Bootstrap online: « Content delivery network » CDN-->
    <link href="<?php echo(BOOTSTRAP_CDN); ?>" rel="stylesheet">


    <!--  METAS FOR SEO-->
    <title>Shopping Crisis: Should I Buy the bag ?</title>
    <meta name="description" content="Take the quizz to find out if you really should buy the bag or leave it!" />

</head>

<body>

<div class="container-fluid">

    <header id="header" class="text-center">
        <div id="bg"></div>
            <h1>Should I buy the bag?</h1>
            <p>Facing a shopping crisis? Wondering if you really should buy that new thing?</p>
            <p>Answer this few questions right now to find out if you really should buy that new bag, dress or pair of shoes!</p>
            <p><a id="cat_quizz" href="#items" class="btn btn-lg btn-outline-warning hvr-buzz">Take the quizz now</a></p>
    </header>

    <section id="items" class="text-center my-3">

        <p id="pickanitem"><i>Pick an item</i></p>

        <div id="banner_item" class="row">
            <div class="col-sm-12 col-md-4 my-3">
            <form action="<?php echo base_url('index.php/quizz/buythebag')?>" method="post">
                
                    <button class="btn btn-default hvr-buzz" type="submit"><input type="hidden" name="item" value="bag"/><img src="<?php echo base_url('assets/images/bag.svg')?>"/></button>
                     </form> 
                </div>
             <div class="col-sm-12 col-md-4 my-3">
            <form action="<?php echo base_url('index.php/quizz/buythebag')?>" method="post">
              
                    <button class="btn btn-default hvr-buzz" type="submit"><input type="hidden" name="item" value="shoes"/><img src="<?php echo base_url('assets/images/shoe.svg')?>"></button>
                     </form> 
                </div>
            <div class="col-sm-12 col-md-4 my-3">
            <form action="<?php echo base_url('index.php/quizz/buythebag')?>" method="post">
                
                    <button class="btn btn-default hvr-buzz" type="submit"><input type="hidden" name="item" value="dress"/><img src="<?php echo base_url('assets/images/dress.svg')?>"/></button>
                    </form>  
                </div>
             
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
<script src="<?php echo base_url('assets/js/start.js')?>"></script>

</body>

</html>
