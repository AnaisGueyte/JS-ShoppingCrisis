<body>

    <div class="container-fluid">

        <header id="header" class="text-center">
            <div id="bg"></div>
            <nav class="navbar navbar-toggleable-sm navbar-light">
                <div class="collapse navbar-collapse" id="navbarNavDropdown" style="width: auto;">
                    <ul class="nav navbar-nav nav-pills">
                        <li role="presentation" class="active"><a href="#items" class='nav-link'>Start the Quizz</a></li>
                        <li role="presentation"><a href="#about" class='nav-link'>About</a></li>
                        <li role="presentation"><a href="#contact" class='nav-link'>Contact</a></li>
                        <li role="presentation"><a href="<?php echo base_url('statistic/seethestats')?>" class='nav-link's>Statistics</a></li>
                    </ul>
                </div>
            </nav>

            <h1>Should I buy the bag?</h1>
            <p>Facing a shopping crisis? Wondering if you really should buy that new thing?</p>
            <p>Answer this few questions right now to find out if you really should buy that new bag, dress or pair of shoes!</p>
            <p><a id="cat_quizz" href="#items" class="btn btn-lg btn-outline-danger hvr-buzz">Take the quizz now</a></p>
        </header>

        <div class="hr"></div>

        <section id="items" class="text-center">

            <p id="pickanitem"><i>Click on one of the item below to start the quizz</i></p>

            <div id="banner_item" class="row">
                <div class="col-sm-12 col-md-4 my-3">
                    <form action="<?php echo base_url('quizz/buythebag')?>" method="post">
                        <button class="btn btn-default hvr-buzz" type="submit">
                            <input type="hidden" name="item" value="bag" /><img src="<?php echo base_url('assets/images/illubag.png')?>" /></button>
                        <p class="my-3"><small>bag</small></p>
                    </form>
                </div>
                <div class="col-sm-12 col-md-4 my-3">
                    <form action="<?php echo base_url('quizz/buythebag')?>" method="post">
                        <button class="btn btn-default hvr-buzz" type="submit">
                            <input type="hidden" name="item" value="shoes" /><img src="<?php echo base_url('assets/images/shoesillu.png')?>"></button>
                        <p class="my-3"><small>shoes</small></p>
                    </form>
                </div>
                <div class="col-sm-12 col-md-4 my-3">
                    <form action="<?php echo base_url('quizz/buythebag')?>" method="post">
                        <button class="btn btn-default hvr-buzz" type="submit">
                            <input type="hidden" name="item" value="dress" /><img src="<?php echo base_url('assets/images/dressillu.png')?>" /></button>
                        <p class="my-3"><small>dress</small></p>
                    </form>
                </div>
            </div>
        </section>
        <hr>
        <section id="about" class="text-justify">
            <h1>Should I buy the bag, the shoes, the dress?</h1>
            <div id="about_intro" class="row">
                <div id="intro_txt" class="col-sm-12 col-md-6 my-3" > 
                    <p>We all been there, wondering if we should buy that magnificient piece of fashion knowing deep inside that we really shouldn't, for many reasons.</p>
                    <p> The quizz here will guide you during your shopping crisis by asking couple of questions. Those you should really ask yourself before considering shopping, especially if you have doubts.</p>
                </div>
                <div id="intro_img" class="col-sm-12 col-md-6 text-center">
                    <img src="<?php echo base_url('assets/images/bcbg_dress.jpg')?>" alt=""/>
                </div>
            </div>

            <hr style="width: 50%;">

            <div id="about_about">
                <h3>About</h3>
                <div class="row" style="width: 75%; margin: auto;">
                    <div id="about_img" class="col-sm-12 col-md-6 text-center">
                        <img src="<?php echo base_url('assets/images/clothing.jpg')?>"/>
                    </div>
                    <div id="about_txt" class="col-sm-12 col-md-6" > 
                        <p>The idea came up when a friend of mine was harrasing us with the same question about a branded bag: "<i>Should I buy the bag?!</i>". My answer couldn't be anything else than "<i>That's your life, your money, decide for yourself</i>".</p>
                        <p>Too harsh. Having attitude wouldn't be the best. I've sent her a decision diagram about buying the bag or not. Do you like it? Do you really want it? Can you afford it?</p>
                        <p><i>Plot twist</i>: she bought the bag.</p>
                        <p>Later, I realised we all face that situation where we need to ask ourself the good questions. And here it is, the quizz which will get you out of a shopping crisis. My attitude on top.</p>
                        <p>You'll thank me later.  <img id="emoji" src="http://d2trtkcohkrm90.cloudfront.net/images/emoji/apple/ios-10/256/woman-tipping-hand-light-skin-tone.png" style="width: 25px; height: 25px;"/> </p>
                    </div>
                </div>
            </div>
             <hr>
            <div id="about_questions">
                <h3>Questions?</h3>
                <div class="questions_area">
                    <p> Are the questions proven scientifically and psychologicaly efficient? No.</p>
                    <p>Still, when you have a doubt, you turn to your friends for advice and not all friends are good advisers. Am I a good adviser? Please.</p>
                    <p>Is the quizz will unconditionnaly tell you not to buy stuffs? No, not really but start the quizz, you'll find out.</p>
                    <p>Is the quizz responsible for your bad shopping choices? No, be a grown up, be responsible for yourself.</p>
                    <p class="text-center">More questions? Please use the form below!</p>
                </div>
            </div>
        </section>

        <hr style="margin-top: 3em;"> 

        <section id="contact" >
            <div id="contact_bg"></div>
                    <div id="contact_form" class="col-sm-12 col-md-10 offset-md-1 bs-callout bs-callout-default my-3">
                        <h1>Contact form</h1>
                        <p>Say thank you!</p>
                            <?php if(isset($error_email)){
                                                echo ("<div class='alert alert-danger' role='alert'>");
                                                echo($error_email);
                                                echo("</div>");
            }
                            elseif(isset($my_email_sent)){
                                echo ("<div class='alert alert-success' role='alert'>");
                                                echo($my_email_sent);
                                                echo("</div>");
                            }
                                elseif(isset($error_form)){
                                    echo ("<div class='alert alert-danger' role='alert'>");
                                                echo($error_form);
                                                echo("</div>");
                                }; ?>
                                <form method="POST" action="<?php echo base_url('start/contactForm');?>" role="form" id="contact-form" class="contact-form">
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
                                                <button type="submit" class="btn btn-md btn-outline-primary pull-right my-3">Send</button>
                                                <br>
                                            </div>
                                        </div>
                                </form>
                        </div>
        </section>
         <hr/> 
        <section class="text-center full-width-div">

            <small>Made with <i class="fa fa-heart-o" style="color: red;" aria-hidden="true"></i> by Anaïs, your friend with attitude. You'll thank me later.</small>
            <div class="text-center mb-3">
                <small>Come & say thank you <span><a href="https://twitter.com/AnaisGueyte" alt="twitter anais gueyte" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
            <span><a href="https://www.linkedin.com/in/agueyte/" alt="linkedin anais gueyte" target="blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></span>
            <span><a href="https://github.com/AnaisGueyte" alt="github anais gueyte" target="blank"><i class="fa fa-github" aria-hidden="true"></i></a></span></small>
            </div>
        </section>
    </div>


