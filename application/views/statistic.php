<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">

    <!--  METAS FOR SEO-->
    <title>Statistics: who should buy the bag?</title>
    <meta name="description" content="Find out about how the other did on the test and who should buy the bag..." />
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/images/shouldibuythebag.png'); ?>" />

    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/statistic.css')?>" />


    <!--  Link to Bootstrap online: « Content delivery network » CDN-->
    <link href="<?php echo(BOOTSTRAP_CDN); ?>" rel="stylesheet">

    <!--  Link to script tracking-->
    <script src="<?php echo base_url('assets/js/hotjar_script.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/ga_script.js') ?>"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>

    <!--  Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Bellefair|Playfair+Display|Yeseva+One" rel="stylesheet">

</head>

<body>
<div class="container-fluid">
    <section class="header">
        <h1>Curious about how the others did on the test?</h1>
    </section>
</div>
<div class="container">
    <section class="main-stats">
        <div class="row">
            <div class="col-sm-12 col-md-4 number-quizz">
                <h1> How many quizz?</h1>
                <p><span id="totalQuizz"><?php print_r($totalQuizz); ?></span><br/> tests have been taken so far!</p>
            </div>
            <div class="col-sm-12 col-md-4 main-stats-image">
                <img src="<?php echo base_url('assets/images/bagflatlay.jpg') ?>"/>
            </div>
            <div class="col-sm-12 col-md-4 podium-item">
                <h1> What for? </h1>
                <input type="hidden" name="totalBag" value="<?php print_r($totalBag); ?>">
                <input type="hidden" name="totalDress" value="<?php print_r($totalDress); ?>">
                <input type="hidden" name="totalShoes" value="<?php print_r($totalShoes); ?>">
                <canvas id="myChart" width="400" height="400"></canvas>
            </div>
        </div>
    </section>
    <section class="section-repeat">
        <div class="user-repeat">
            <h1>Addicted to shopping and Test</h1>
            <p><span><?php print_r($totalUserRepeat); ?></span>% of user have taken the test multiple times.</p>
            <p>And someone even took <span><?php print_r($maxRepeat); ?></span> times the test! I bet she or he can buy the bag now!</p>
        </div>
    </section>
    <section class="section-answers">
        <div class="row">
            <div class="col-sm-12 col-md-3 no-first-question">
                <h1>They really shouldn't</h1>
                <p><?php echo($totalDontLikeIt); ?>% took the test and answer no the the first question: "Do you like it?"</p>
            </div>
            <div class="col-sm-12 col-md-3 online-shopper">
                <h1>Online Shoppers</h1>
                <p><?php echo($totalOnlineShopper); ?>% took the test when having doubts about buying and item online...</p>
            </div>
            <div class="col-sm-12 col-md-3 influencer">
                <h1>Influencers</h1>
                <p><?php echo($totalInfluencer); ?>% of user said they've been into the item because of an influencer. </p>
                <?php if($totalInfluencer < 5){ echo "<p>Not so influencing after all...</p>";} ?>
            </div>
            <div class="col-sm-12 col-md-3 answers">
                <h1> Should they buy it tho? </h1>
                <p><?php echo $totalQuizzBuyIt; ?>% got a positive answer!</p>
                <p><?php echo $totalQuit; ?> ended the test before the end...</p>
            </div>
        </div>
    </section>    
</div>
<script src="<?php echo(AJAX_GOOGLE_API); ?>"></script>
<script src="<?php echo(BOOTSTRAP_JS); ?>"></script>
<script src="<?php echo base_url('assets/js/statistic.js') ?>"></script>
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