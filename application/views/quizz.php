<body>
<div class="container-fluid">
    <header id="header" class="text-center">
        <div id="bg"></div>
            <h1 id="<?php echo($item);?>" class="text-center"><?php echo($title);?></h1>
    </header>
</div>
<div class="container">
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
