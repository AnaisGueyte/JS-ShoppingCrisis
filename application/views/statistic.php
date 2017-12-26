<body>
<div class="container-fluid">
    <section class="header">
        <nav class="navbar navbar-toggleable-sm navbar-light">
                <div class="collapse navbar-collapse" id="navbarNavDropdown" style="width: auto;">
                    <ul class="nav navbar-nav nav-pills">
                        <li role="presentation" class="active"><a href="https://shouldibuythebag.com/#items" class='nav-link'>Start the Quizz</a></li>
                        <!-- <li role="presentation"><a href="#about" class='nav-link'>About</a></li> -->
                        <!-- <li role="presentation"><a href="#contact" class='nav-link's>Contact</a></li> -->
                        <!-- <li role="presentation"><a href="#contact" class='nav-link's>Contact</a></li> -->
                    </ul>
                </div>
            </nav>
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
                <img src="<?php echo base_url('assets/images/bagflatlay.jpg') ?>" alt="picture flatlay bag"/>
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
</div>
<div class="container-fluid">
    <section class="image-banner">
        <img src="<?php echo base_url('assets/images/banner_shoes.png') ?>" alt="picture models shoes"/>
    </section>
</div>
<div class="container">
    <section class="section-repeat">
        <div class="user-repeat">
            <h1>Addicted to shopping and Test</h1>
            <div class="content">
            <p><span id="totalQuizz"><?php print_r($totalUserRepeat); ?></span>% of user have taken the test multiple times.</p>
            <p>Someone even took <span><?php print_r($maxRepeat); ?></span> times the test!</p>
            <p>I bet she/he can buy the bag now!</p>
            </div>
        </div>
    </section>
</div>
<div class="container-fluid">
    <section class="image-banner">
        <img src="<?php echo base_url('assets/images/banner_clothes.png') ?>" alt="picture clothes hanging"/>
    </section>
</div>
<div class="container">
    <section class="section-answers">
        <div class="row row-grid">
            <div class="col-sm-12 col-md-3 grid-answers no-first-question">
                <h1><?php echo($totalDontLikeIt); ?>%</h1>
                  <div class="content">
                    <p>answered no the the first question: <i>"Do you like it?"</i></p>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 grid-answers">
                <img src="<?php echo base_url('assets/images/image_grid_sunnies.png') ?>" alt=""/>
            </div>
            <div class="col-sm-12 col-md-3 grid-answers online-shopper">
                <h1><?php echo($totalOnlineShopper); ?>%</h1>
                  <div class="content">
                    <p>took the test when having doubts about buying and item online...</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 grid-answers">
                <img src="<?php echo base_url('assets/images/image_grid_watch.png') ?>" alt=""/>
            </div>
            <div class="col-sm-12 col-md-3 grid-answers influencer">
                <h1><?php echo($totalInfluencer); ?>%</h1>
                  <div class="content">
                    <p>said they've been into the item because of an influencer. </p>
                    <?php if($totalInfluencer < 5){ echo "<p>Not so influencing after all...</p>";} ?>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 grid-answers">
                <img src="<?php echo base_url('assets/images/image_grid_sunglasses.png') ?>" alt=""/>
            </div>
            <div class="col-sm-12 col-md-3 grid-answers answers">
                <h1><?php echo $totalQuizzBuyIt; ?>%</h1>
                  <div class="content">
                    <p>got a positive answer!</p>
                    <p><?php echo $totalQuit; ?> tests where ended before the end...</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 grid-answers">
                <img src="<?php echo base_url('assets/images/image_grid_shoes.png') ?>" alt=""/>
            </div>
            <div class="col-sm-12 col-md-3 grid-answers">
                <h1><?php echo($totalEndingQuestion); ?>%</h1>
                  <div class="content">
                    <p>of tests failed to this question:</p>
                    <p><b><?php echo($totalEndingQuestionName); ?>?</b></p>
                    <p>This is the highest ending rate of the test!</p>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="container-fluid">
    <!-- <section class="image-banner">
        <img src="<?php echo base_url('assets/images/banner_clothes.png') ?>" alt="picture clothes hanging"/>
    </section> -->

    <section class="favorite-gif-section">
        <div class="favorite-gif-poll">
            <h1>What's your favorite ending gif?</h1>
            <div class="card-columns">
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://media.giphy.com/media/3ornkbl5jev6mIz4oU/giphy.gif" alt="jessica williams reaction">
                    <div class="card-block">
                        <h4 class="card-title">Really?! Why do you take the test then?!</h4>
                        <p class="card-text"></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">
                         <i data-shorten-link="http://gph.is/1SjeU0N" class="fa fa-heart-o" aria-hidden="true"></i></small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://media.giphy.com/media/xXSZc7Hr1VFlu/giphy.gif" alt="Britney Spears applause">
                    <div class="card-block">
                        <h4 class="card-title">I appreciate your honesty. Honesty made you save cash for something better.</h4>
                        <p class="card-text"></p>
                    </div>
                    <div class="card-footer">
                            <small class="text-muted">
                         <i data-shorten-link="http://gph.is/2aZ9XZU" class="fa fa-heart-o" aria-hidden="true"></i></small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://media.giphy.com/media/l0MYSSCIrv8aUaBsQ/giphy.gif" alt="Maya Rudolf no">
                    <div class="card-block">
                        <h4 class="card-title">Don't buy it.</h4>
                        <p class="card-text"></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">
                         <i data-shorten-link="http://gph.is/2aon87g" class="fa fa-heart-o" aria-hidden="true"></i></small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://media.giphy.com/media/IMuqnp96sdhyE/giphy.gif" alt="obama reaction">
                    <div class="card-block">
                          <h4 class="card-title">Jeez! Don't buy it.</h4>
                          <p class="card-text"></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">
                         <i data-shorten-link=" https://gph.is/1ltn72d" class="fa fa-heart-o" aria-hidden="true"></i></small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://media.giphy.com/media/lAbxg2qCfOwKY/giphy.gif" alt="treat yo self gif">
                    <div class="card-block">
                        <h4 class="card-title">Why do you have doubts about buying it! Buy the bag!</h4>
                        <p class="card-text"></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">
                         <i data-shorten-link="https://gph.is/17P1Gn9" class="fa fa-heart-o" aria-hidden="true"></i></small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://media.giphy.com/media/iIneJpUbaEZva/giphy.gif" alt="beyonce life is short">
                    <div class="card-block">
                        <h4 class="card-title">Life is short, buy the bag.</h4>
                        <p class="card-text"></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">
                        <i data-shorten-link="https://gph.is/1L9xK2k" class="fa fa-heart-o" aria-hidden="true"></i></small>
                    </div>
                </div>
            </div>
        </div>
    </section>  
</div>

<!-- MODAL SHARE SOCIAL MEDIA -->

<div class="modal fade" id="socialMediaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tell your friends!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <a id="shareonfacebook" href="" class="btn btn-outline-primary" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
        <a id="shareontwitter" href="" class="btn btn-outline-info"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
      </div>
    </div>
  </div>
</div>