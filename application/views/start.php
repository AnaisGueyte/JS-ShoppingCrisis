<body>
    <div class="container-fluid">
        <header id="header" class="text-center">
            <div id="bg"></div>
            <nav class="navbar navbar-toggleable-sm navbar-light">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li role="presentation" class="nav-item active"><a href="#items" class='nav-link'>Start the Quizz</a></li>
                        <li role="presentation" class="nav-item"><a href="#about" class='nav-link'>About</a></li>
                        <li role="presentation" class="nav-item"><a href="#contact" class='nav-link'>Contact</a></li>
                        <li role="presentation" class="nav-item"><a href="<?php echo base_url('statistic/seethestats')?>" class='nav-link's>Statistics</a></li>
                    </ul>
                </div>
            </nav>
            <h1>Should I buy the bag?</h1>
            <p>
                Facing a shopping crisis? Wondering if you really should buy that new thing?
            </p>
            <p>
                Answer this few questions right now to find out if you really should buy that new bag, dress or pair of shoes!
            </p>
            <p>
                <a id="cat_quizz" href="#items" class="btn btn-lg btn-outline-danger hvr-buzz">Take the test now</a>
            </p>
        </header>

        <section id="items" class="text-center">
            <p id="pickanitem">
                <i>Click on one of the item below to start the test</i>
            </p>
            <div id="banner_item" class="row">
                <div class="col-sm-12 col-md-4 my-3">
                    <form action="<?php echo base_url('quizz/buythebag')?>" method="post">
                        <button class="btn btn-default hvr-buzz" type="submit">
                            <input type="hidden" name="item" value="bag" />
                            <img src="<?php echo base_url('assets/images/illubag.png')?>" />
                        </button>
                        <p class="my-3">
                            <small>
                                bag
                            </small>
                        </p>
                    </form>
                </div>
                <div class="col-sm-12 col-md-4 my-3">
                    <form action="<?php echo base_url('quizz/buythebag')?>" method="post">
                        <button class="btn btn-default hvr-buzz" type="submit">
                            <input type="hidden" name="item" value="shoes" />
                            <img src="<?php echo base_url('assets/images/shoesillu.png')?>">
                        </button>
                        <p class="my-3">
                            <small>
                                shoes
                            </small>
                        </p>
                    </form>
                </div>
                <div class="col-sm-12 col-md-4 my-3">
                    <form action="<?php echo base_url('quizz/buythebag')?>" method="post">
                        <button class="btn btn-default hvr-buzz" type="submit">
                            <input type="hidden" name="item" value="dress" />
                            <img src="<?php echo base_url('assets/images/dressillu.png')?>" />
                        </button>
                        <p class="my-3">
                            <small>
                                dress
                            </small>
                        </p>
                    </form>
                </div>
            </div>
        </section>

        <hr class="width-50">

        <section id="about" class="text-justify">
            <h1>Should I buy the bag, the shoes, the dress?</h1>
            <div id="about_intro" class="row">
                <div id="intro_txt" class="col-sm-12 col-md-6 my-3" >
                    <p>
                        We all been there, wondering if we should buy that magnificient piece of fashion knowing deep inside that we really shouldn't, for many reasons.
                    </p>
                    <p>
                         The quizz here will guide you during your shopping crisis by asking couple of questions. Those you should really ask yourself before considering shopping, especially if you have doubts.
                    </p>
                </div>
                <div id="intro_img" class="col-sm-12 col-md-6 text-center">
                    <img src="<?php echo base_url('assets/images/bcbg_dress.jpg')?>" alt=""/>
                </div>
            </div>

            <hr class="width-50">

            <div id="about_about">
                <h3>About</h3>
                <div class="row" style="width: 75%; margin: auto;">
                    <div id="about_img" class="col-sm-12 col-md-6 text-center">
                        <img src="<?php echo base_url('assets/images/clothing.jpg')?>"/>
                    </div>
                    <div id="about_txt" class="col-sm-12 col-md-6" >
                        <p>
                            The idea came up when a friend of mine was harrasing us with the same question about a branded bag: "
                            <i>Should I buy the bag?!</i>
                            ". My answer couldn't be anything else than "
                            <i>That's your life, your money, decide for yourself</i>
                            ".
                        </p>
                        <p>
                            Too harsh. Having attitude wouldn't be the best. I've sent her a decision diagram about buying the bag or not. Do you like it? Do you really want it? Can you afford it?
                        </p>
                        <p>
                            <i>Plot twist</i>
                            : she bought the bag.
                        </p>
                        <p>
                            Later, I realised we all face that situation where we need to ask ourself the good questions. And here it is, the quizz which will get you out of a shopping crisis. My attitude on top.
                        </p>
                        <p>
                            You'll thank me later.  
                            <img id="emoji" src="http://d2trtkcohkrm90.cloudfront.net/images/emoji/apple/ios-10/256/woman-tipping-hand-light-skin-tone.png" style="width: 25px; height: 25px;"/>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <hr class="width-50">

        <section id="about_questions">
            <h3>Questions?</h3>
            <div class="questions_area">
                <p>
                    * Are the questions proven scientifically and psychologicaly efficient? No. Still, when you have a doubt, you turn to your friends for advice and not all friends are good advisers. Am I a good adviser? Please.
                </p>
                <p>
                    * Is this only for women? No.
                </p>
                <p>
                    * Is the quizz will unconditionnaly tell you not to buy stuffs? No, not really but start the quizz, you'll find out.
                </p>
                <p>
                    * Is the quizz responsible for your bad shopping choices? No, be a grown up, be responsible for yourself.
                </p>

                <div class="text-center">
                    <a  href="<?php echo base_url('#items'); ?>" class="btn btn-lg btn-outline-warning">Start the test</a>
                </div>
            </div>
        </section>

        <hr class="width-50">

        <section id="statistic" class="text-center">
            <h3>Statistics</h3>

            <div class="row">
                <div id="about_txt" class="col-sm-12 col-md-6" >
                        <p>They completed the test and we can tell a lot of stuff about your shopping habbits now.</p>
                        <p>Curious? I bet you are!</p>
                        <a  href="<?php echo base_url('statistic/seethestats'); ?>" class="btn btn-lg btn-outline-primary">See the stats</a>
                    </div>
                    <div id="about_img" class="col-sm-12 col-md-6 text-center">
                        <img src="<?php echo base_url('assets/images/white_dress.jpg')?>"/>
                    </div>
                    
                </div>
        </section>

         <hr class="width-50">

        <section id="social" class="text-center">
            <h3>Tell you friends!</h3>
            <p>
                Tag your friends who would really need to get this shopping assistant test with them while shopping!
            </p>
            <div id="social_share" class="row">
                <div class="col-sm-12 col-md-3">
                    <a id="shareonfacebook" href="" class="btn btn-outline-primary" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
                </div>
                <div class="col-sm-12 col-md-3">
                    <a id="shareontwitter" href="" class="btn btn-outline-info"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
                </div>
                <div class="col-sm-12 col-md-3">
                    <a id="shareongoogle" href="https://plus.google.com/share?url=https%3A//shouldibuythebag.com" class="btn btn-outline-danger g-plus" target="_blank"><i class="fa fa-google" aria-hidden="true"></i> Google +</a>
                </div>
                <div class="col-sm-12 col-md-3">
                    <a id="shareonlinkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=https%3A//shouldibuythebag.com/&title=Shopping%20assistant%20test%20'Should%20I%20Buy%20The%20Bag'&summary=Find%20this%20shopping%20assistant%20test%20'Should%20I%20Buy%20The%20Bag?'%20to%20help%20you%20decide%20wether%20you%20should%20buy%20the%20item%20while%20shopping...%20Smart%20idea,%20worth%20the%20look!&source=" class="btn btn-outline-info" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i> Linkedin</a>
                </div>
                <div class="col-sm-12 col-md-3">
                    <a id="copylink" class="btn btn-outline-warning" href="" data-clipboard-target="#copylink" data-clipboard-text="<?php echo base_url('');?>" ><i class="fa fa-copy" aria-hidden="true"></i> Copy link</a>
                </div>
            </div>
        </section>

        <hr class="width-50">

        <section id="contact" >
            <div id="contact_form" class="col-sm-12 col-md-10 offset-md-1 bs-callout bs-callout-default my-3">
                <h1>Contact form</h1>
                <p>
                    Say thank you!
                </p>
                <div class="errormessage" role="alert"></div>
                <img  id="loader" src="<?php echo base_url('assets/images/shouldibuythebag.gif'); ?>"/>
                <form id="sendemail" method="POST" action="#" class="contact-form">
                    <?php echo form_open('form'); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" autocomplete="off" id="name" placeholder="name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <textarea class="form-control textarea" rows="3" name="message" id="message" placeholder="message" required></textarea>
                            <button type="submit" class="btn btn-md btn-outline-primary pull-right my-3 g-recaptcha"  data-sitekey="<?php echo GOOGLE_RECAPTCHA_KEY; ?>" data-callback="validate" data-size="invisible">Send</button>
                            <br>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <hr class="width-50">

        <section class="text-center">
            <small>
                Made with 
                <i class="fa fa-heart-o" style="color: red;" aria-hidden="true"></i>
                 by Anaïs, your friend with attitude. You'll thank me later.
            </small>
            <div class="text-center mb-3">
                <small>
                    Come & say thank you 
                    <span>
                        <a href="https://twitter.com/AnaisGueyte" alt="twitter anais gueyte" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </span>
                    <span>
                        <a href="https://www.linkedin.com/in/agueyte/" alt="linkedin anais gueyte" target="blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </span>
                    <span>
                        <a href="https://github.com/AnaisGueyte" alt="github anais gueyte" target="blank"><i class="fa fa-github" aria-hidden="true"></i></a>
                    </span>
                </small>
            </div>
        </section>
    </div>
