<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/start.css')?>" />
    <link href="<?php echo base_url('assets/css/hover-min.css')?>" "" rel="stylesheet">

    <!--  Link to Bootstrap online: « Content delivery network » CDN-->
    <link href="<?php echo(BOOTSTRAP_CDN); ?>" rel="stylesheet">


    <!--  METAS FOR SEO-->
    <title>Shopping Crisis: Should I Buy the bag ?</title>
    <meta name="description" content="Take the quizz to find out if you really should buy the bag or leave it!" />

</head>

<body>

<div class="container">

    <header class="my-3">
        <h1 class="text-center">Should I buy the bag?</h1>
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
</div>

<script src="<?php echo(AJAX_GOOGLE_API); ?>"></script>
<script src="<?php echo(BOOTSTRAP_JS); ?>"></script>
<script src="<?php echo(FONT_AWESOME); ?>"></script>

</body>

</html>
