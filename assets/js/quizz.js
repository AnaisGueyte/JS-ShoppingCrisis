// establish value for questions and their answers.

var myitem = getItem();
var myitems = getPlurialItem();

// Recurrent answers

var dontlikeit_gif = '<p><iframe src="https://giphy.com/embed/3ornkbl5jev6mIz4oU" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></p>';
var dontneedit_gif = '<p><iframe src="https://giphy.com/embed/dEugCWatqhdQY" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></p>';
var dontbuyit = "Hum... Don't buy it.";
var dontbuyit_gif = '<p><iframe src="https://giphy.com/embed/l0MYSSCIrv8aUaBsQ" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></p>';
var goonposhmark = "<p>Go have a look on Poshmark, Twice, Snobswap, TheRealReal, Vinted, Vestiaires Collectives, Ebay (you name it). If you don't find anything there, Oops!</p>";
var goonposhmark_gif = '<p><<iframe src="https://giphy.com/embed/80TEu4wOBdPLG" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>/p>';
var jeezdontbuyit = "Jeez! Don't buy it!";
var jeezdontbuyit_gif = '<p><iframe src="https://giphy.com/embed/EsmlrgWNx5v0Y" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></p>';
var treatyoself_gif = '<p><iframe src="https://giphy.com/embed/lAbxg2qCfOwKY" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></p>';
var lifetooshort_gif = '<p><iframe src="https://giphy.com/embed/iIneJpUbaEZva" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></p>';
var return_button = '<div class="return_button"><button class="btn btn-outline-info" onclick="backHome()">Return</button><a class="btn btn-outline-info" href="https://shouldibuythebag.com/statistic/seethestats">See stats</a></div>';


// List of questions and their no answer

var q1_likeit = "Do you really like it?";
var a1_likeit = "Really? Why do you even take the test then!";

var q_wantit = "Do you really want it?";
// same answer as the first question

var q_onquality = "Is it good quality? <br><small>(I mean, will it last after two washes, 2 miles, two years?)</small>";
//no -> dont buy it
//yes ->q_needit();

var q_needit = "Do you need it?";
var a3_needit = "I appreciate your honesty. Honesty made you save cash for something better.";

var q_impulseshopping = "Is it an impulse shopping? <br><small>(Or do you just need a hug?)</small>";
//no -> q_onlineshopping
//yes -> dont buy it (and go get a hug)

var q_onlineshopping = "Is it an online shopping situation?";
//No -> q_ownit();
//Yes -> q_onlineshopping();
var q_onlineshoppingbis = "Have you check the return policy?";
// if yes & no
var q_onlineshoppingter = "Can you return the item easily if it doesnt fit?";
// no - dont buy it 
// yes -> q_ownit();


var q_ownit = "Do you already own something similar?";
// don't buy it

var q_manyofit = "Do you feel like you already have too many " + myitems + "?";
//if yes don't buy it
// no continue

var q_fitwardrobe = "Will it fit with your clothes and all the other stuff in your wardrobe?";
// don't buy it

var q_fitme = "Does it even fit?!"; // Is different according to the item (bag, shoes, dress)
// Jeez! don't buy it

var q_influencertitle = "Do you want this " + myitem + " because you saw a blogger/celebrity wear it on Instagram?";
//if no -> q8
//if yes -> q_influencerbis
var q_influencertitlebis = "Would you still buy it if that Influencer wasn't wearing it?";
// if no -> Don't buy it (thank you for your honesty)
// if yes -> q_onetimeuse

var q_onetimeuse = "Will you wear it more than one time? <br><small>(We all know the party dress situation)</small>";
//no -> q_sale
//yes -> q_manyuse 

var q_manyuse = "Oh, really? So will you still wear it next month, next season, next year?"
    //No -> don't buy it
    // Yes-> q_sale

var q_sale = "Is it on sale?";
// if yes go to q10
// no go to q8bis

var q_saletitlebis = "Can't you wait for sale ?";
// if yes Don't buy it
// no go to q_secondhand


var q_secondhand = "Is it second hand?";
// if yes go to q10
// if no q_secondhandbis

var q_secondhandbis = "Can you find it on Poshmark? <br><small>Or Twice, Snobswap, TheRealReal, Vinted, Vestiaires Collectives (you name it)</small>";
// if yes go check there and pass the test again if you still have doubts
// if no endMessage()


var q_pricetitle = "Is it expensive?";
// no go to q13

var q_pricerangetitle = "How expensive?";

var q_affordit = "Can you afford it? ";

var q_reallyaffordit = "Really? <br><small>you can afford it?</small>";

var q_rewardyourself = "Do you feel like you deserve to reward or gift yourself lately? <br><small>(Like you got a diploma, a promotion, done something good or your birthday is coming soon)</small>";
// if yes
var a14_buyit = "Well then, why do you have doubt about buying the " + myitem + "? Treat yo self!";
// if no
var a14bis_buyit = "Life is too short, buy the " + myitem;


// ************ variables for ajax & analytics *********** //

var analytics_likeit = false;
var analytics_likeit_answer = "";

var analytics_wantit = false;
var analytics_wantit_answer = "";

var analytics_onquality = false;
var analytics_onquality_answer = "";

var analytics_needit = false;
var analytics_needit_answer = "";

var analytics_impulseshopping = false;
var analytics_impulseshopping_answer = "";

var analytics_onlineshopping = false;
var analytics_onlineshopping_answer = "";

var analytics_onlineshoppingbis = false;
var analytics_onlineshoppingbis_answer = "";


var analytics_onlineshoppingter = false;
var analytics_onlineshoppingter_answer = "";


var analytics_ownit = false;
var analytics_ownit_answer = "";


var analytics_manyofit = false;
var analytics_manyofit_answer = "";


var analytics_fitwardrobe = false;
var analytics_fitwardrobe_answer = "";


var analytics_fitme = false;
var analytics_fitme_answer = "";

var analytics_influencer = false;
var analytics_influencer_answer = "";


var analytics_influencerbis = false;
var analytics_influencerbis_answer = "";


var analytics_onetimeuse = false;
var analytics_onetimeuse_answer = "";

var analytics_manyuse = false;
var analytics_manyuse_answer = "";

var analytics_sale = false;
var analytics_sale_answer = "";

var analytics_salebis = false;
var analytics_salebis_answer = "";


var analytics_secondhand = false;
var analytics_secondhand_answer = "";

var analytics_secondhandbis = false;
var analytics_secondhandbis_answer = "";

var analytics_price = false;
var analytics_price_answer = "";

var analytics_pricerange = false;
var analytics_value_range = "";

var analytics_affordit = false;
var analytics_affordit_answer = "";

var analytics_reallyaffordit = false;
var analytics_reallyaffordit_answer = "";

var analytics_rewardyourself = false;
var analytics_rewardyourself_answer = "";

var analyticsquizz_complete = false;
var analytics_end = "";
var analytics_quit_end = false;
var analytics_return_end = false;

///********* FIRST QUESTION ********* ///

// First, when the windows opens, display the first question, related to all the items.

$(document).ready(function () {
    // change banner according to the item picked
    /*if(myitem === "shoes"){
		var background = [{
 			"background": "url(http://localhost:8888/shoppingcrisis/assets/images/shoes.jpg)"
 		}];
		$( "#bg" ).css(background[0]);
	}
	if (myitem === "dress"){
		var background = [{
 			"background": "url(http://localhost:8888/shoppingcrisis/assets/images/cintres.jpg)"
 		}];
		$( "#bg" ).css(background[0]);
	}*/

    $('#question_title').append(q1_likeit);
    startTheQuizz();

    console.log('hello');
}); // END OF DOCUMENT READY


// Then trigger the situation depending on the answer: Yes or No.
function startTheQuizz() {
    analytics_likeit = true;

    // If click no
    $('#no').click(function (e) {
        if ($('#question_title').html() != q1_likeit) {
            e.preventDefault();
        } else {
            reallyWhy(q1_likeit);
            analytics_likeit_answer = "no";
        }
    });

    // If click yes
    $('#yes').click(function (e) {
        if ($('#question_title').html() != q1_likeit) {
            e.preventDefault();
        } else {
            q_wantIt();
            analytics_likeit_answer = "yes";
        }
    });
}



function q_wantIt() {
    $('#question_title').empty();
    $('#question_title').append(q_wantit);

    analytics_wantit = true;

    $('#no').click(function (e) {
        if ($('#question_title').html() != q_wantit) {
            e.preventDefault();
        } else {
            reallyWhy(q_wantit);
            analytics_wantit_answer = "no";
        }
    });

    $('#yes').click(function (e) {
        if ($('#question_title').html() != q_wantit) {
            e.preventDefault();
        } else {
            q_Quality();
            analytics_wantit_answer = "yes";
        }
    });
}

///********* Quality QUESTION ********* ///

function q_Quality() {
    $('#question_title').empty();
    $('#question_title').append(q_onquality);

    analytics_onquality = true;

    $('#no').click(function (e) {
        if ($('#question_title').html() != q_onquality) {
            e.preventDefault();
        } else {
            dontBuyIt(q_onquality);
            analytics_onquality_answer = "no";
        }
    });

    $('#yes').click(function (e) {
        if ($('#question_title').html() != q_onquality) {
            e.preventDefault();
        } else {
            q_needIt();
            analytics_onquality_answer = "yes";
        }
    });
}

///********* SECOND QUESTION ********* ///

function q_needIt() {
    $('#question_title').empty();
    $('#question_title').append(q_needit);

    analytics_needit = true;


    $('#no').click(function (e) {
        if ($('#question_title').html() != q_needit) {
            e.preventDefault();
        } else {
            thankHonesty(q_needit);
            analytics_needit_answer = "no";
        }
    });

    $('#yes').click(function (e) {
        if ($('#question_title').html() != q_needit) {
            e.preventDefault();
        } else {
            q_impulseShopping();
            analytics_needit_answer = "yes";
        }
    });
}

///********* Impulse shopping QUESTION ********* ///


function q_impulseShopping() {
    $('#question_title').empty();
    $('#question_title').append(q_impulseshopping);

    analytics_impulseshopping = true;

    $('#no').click(function (e) {
        if ($('#question_title').html() != q_impulseshopping) {
            e.preventDefault();
        } else {
            q_onlineShopping();
            analytics_impulseshopping_answer = "no";
        }
    });

    $('#yes').click(function (e) {
        if ($('#question_title').html() != q_impulseshopping) {
            e.preventDefault();
        } else {
            dontBuyIt(q_impulseshopping);
            analytics_impulseshopping_answer = "yes";
        }
    });
}

///********* 17 online shopping - QUESTION ********* ///

function q_onlineShopping() {
    $('#question_title').empty();
    $('#question_title').append(q_onlineshopping);

    analytics_onlineshopping = true;

    $('#no').click(function (e) {
        if ($('#question_title').html() != q_onlineshopping) {
            e.preventDefault();
        } else {
            q_ownIt();
            analytics_onlineshopping_answer = "no";
        }
    });

    $('#yes').click(function (e) {
        if ($('#question_title').html() != q_onlineshopping) {
            e.preventDefault();
        } else {
            q_onlineShoppingBis();
            analytics_onlineshopping_answer = "yes";
        }
    });

}

///********* 17bis online shopping - QUESTION ********* ///

function q_onlineShoppingBis() {
    $('#question_title').empty();
    $('#question_title').append(q_onlineshoppingbis);

    analytics_onlineshoppingbis = true;

    $('#no').click(function (e) {
        if ($('#question_title').html() != q_onlineshoppingbis) {
            e.preventDefault();
        } else {
            q_onlineShoppingTer();
            analytics_onlineshoppingbis_answer = "no";
        }
    });

    $('#yes').click(function (e) {
        if ($('#question_title').html() != q_onlineshoppingbis) {
            e.preventDefault();
        } else {
            q_onlineShoppingTer();
            analytics_onlineshoppingbis_answer = "yes";
        }
    });

}

///********* 17ter online shopping - QUESTION ********* ///

function q_onlineShoppingTer() {
    $('#question_title').empty();
    $('#question_title').append(q_onlineshoppingter);

    analytics_onlineshoppingter = true;

    $('#no').click(function (e) {
        if ($('#question_title').html() != q_onlineshoppingter) {
            e.preventDefault();
        } else {
            dontBuyIt(q_onlineshoppingter);
            analytics_onlineshoppingter_answer = "no";
        }
    });

    $('#yes').click(function (e) {
        if ($('#question_title').html() != q_onlineshoppingter) {
            e.preventDefault();
        } else {
            q_ownIt();
            analytics_onlineshoppingter_answer = "yes";
        }
    });
}

///********* THIRD QUESTION ********* ///

function q_ownIt() {
    $('#question_title').empty();
    $('#question_title').append(q_ownit);

    $('#no').click(function (e) {
        if ($('#question_title').html() != q_ownit) {
            e.preventDefault();
        } else {
            //Do you own something similaire ? No, then continue (that's why it's the q4 yes method)
            q_manyOfIt();
            analytics_ownit_answer = "no";
        }
    });

    $('#yes').click(function (e) {
        if ($('#question_title').html() != q_ownit) {
            e.preventDefault();
        } else {
            dontBuyIt(q_ownit);
            analytics_ownit_answer = "yes";
        }
    });
}

///********* FOURTH QUESTION ********* ///

function q_manyOfIt() {
    $('#question_title').empty();
    $('#question_title').append(q_manyofit);

    analytics_manyofit = true;

    $('#no').click(function (e) {
        if ($('#question_title').html() != q_manyofit) {
            e.preventDefault();
        } else {
            // No i don't have too many of it
            q_fitWardrobe();
            analytics_manyofit_answer = "no";
        }
    });

    $('#yes').click(function (e) {
        if ($('#question_title').html() != q_manyofit) {
            e.preventDefault();
        } else {
            // YES I HAVE TOO MANY OF IT ->> it's a problem
            dontBuyIt(q_manyofit);
            analytics_manyofit_answer = "yes";
        }
    });
}

///********* FIFTH QUESTION ********* ///

function q_fitWardrobe() {
    $('#question_title').empty();
    $('#question_title').append(q_fitwardrobe);

    analytics_fitwardrobe = true;

    $('#no').click(function (e) {
        if ($('#question_title').html() != q_fitwardrobe) {
            e.preventDefault();
        } else {
            dontBuyIt(q_fitwardrobe);
            analytics_fitwardrobe_answer = "no";
        }
    });

    $('#yes').click(function (e) {
        if ($('#question_title').html() != q_fitwardrobe) {
            e.preventDefault();
        } else {
            q_fitMe();
            analytics_fitwardrobe_answer = "yes";
        }
    });
}

///********* SIXTH QUESTION ********* ///

function q_fitMe() {
    $('#question_title').empty();
    $('#question_title').append(q_fitme);

    analytics_fitme = true;

    $('#no').click(function (e) {
        if ($('#question_title').html() != q_fitme) {
            e.preventDefault();
        } else {
            jeezDontBuyIt(q_fitme);
            analytics_fitme_answer = "no";
        }
    });

    $('#yes').click(function (e) {
        if ($('#question_title').html() != q_fitme) {
            e.preventDefault();
        } else {
            q_influencer();
            analytics_fitme_answer = "yes";
        }
    });
}


///********* 15 influencer QUESTION ********* ///

function q_influencer() {
    $('#question_title').empty();
    $('#question_title').append(q_influencertitle);

    analytics_influencer = true;

    $('#no').click(function (e) {
        if ($('#question_title').html() != q_influencertitle) {
            e.preventDefault();
        } else {
            q_oneTimeUse();
            analytics_influencer_answer = "no";
        }
    });

    $('#yes').click(function (e) {
        if ($('#question_title').html() != q_influencertitle) {
            e.preventDefault();
        } else {
            q_influencerBis();
            analytics_influencer_answer = "yes";
        }
    });
}

///********* 15bis influencer QUESTION ********* ///

function q_influencerBis() {
    $('#question_title').empty();
    $('#question_title').append(q_influencertitlebis);

    analytics_influencerbis = true;

    $('#no').click(function (e) {
        if ($('#question_title').html() != q_influencertitlebis) {
            e.preventDefault();
        } else {
            thankHonesty(q_influencerbis);
            analytics_influencerbis_answer = "no";
        }
    });

    $('#yes').click(function (e) {
        if ($('#question_title').html() != q_influencertitlebis) {
            e.preventDefault();
        } else {
            q_oneTimeUse();
            analytics_influencerbis_answer = "yes";
        }
    });
}


///********* 22 one time use QUESTION ********* ///

function q_oneTimeUse() {
    $('#question_title').empty();
    $('#question_title').append(q_onetimeuse);

    analytics_onetimeuse = true;

    $('#no').click(function (e) {
        if ($('#question_title').html() != q_onetimeuse) {
            e.preventDefault();
        } else {
            q_onSale();
            analytics_onetimeuse_answer = "no";
        }
    });

    $('#yes').click(function (e) {
        if ($('#question_title').html() != q_onetimeuse) {
            e.preventDefault();
        } else {
            q_manyUse();
            analytics_onetimeuse_answer = "yes";
        }
    });
}

///********* 22bis time use QUESTION ********* ///

function q_manyUse() {
    $('#question_title').empty();
    $('#question_title').append(q_manyuse);

    analytics_manyuse = true;

    $('#no').click(function (e) {
        if ($('#question_title').html() != q_manyuse) {
            e.preventDefault();
        } else {
            thankHonesty(q_manyuse);
            analytics_manyuse_answer = "no";
        }
    });

    $('#yes').click(function (e) {
        if ($('#question_title').html() != q_manyuse) {
            e.preventDefault();
        } else {
            q_onSale();
            analytics_manyuse_answer = "yes";
        }
    });
}


///********* SEVENTH QUESTION ********* ///

function q_onSale() {
    $('#question_title').empty();
    $('#question_title').append(q_sale);

    analytics_sale = true;

    $('#no').click(function (e) {
        if ($('#question_title').html() != q_sale) {
            e.preventDefault();
        } else {
            q_salebis();
            analytics_sale_answer = "no";
        }
    });

    $('#yes').click(function (e) {
        if ($('#question_title').html() != q_sale) {
            e.preventDefault();
        } else {
            q_price();
            analytics_sale_answer = "yes";
        }
    });
}

///********* SEVENTH-bis QUESTION ********* ///

function q_salebis() {
    $('#question_title').empty();
    $('#question_title').append(q_saletitlebis);

    analytics_salebis = true;

    $('#no').click(function (e) {
        if ($('#question_title').html() != q_saletitlebis) {
            e.preventDefault();
        } else {
            q_secondHand();
            analytics_salebis_answer = "no";
        }
    });

    $('#yes').click(function (e) {
        if ($('#question_title').html() != q_saletitlebis) {
            e.preventDefault();
        } else {
            // yes i can wait for the sale
            dontBuyIt(q_saletitlebis);
            analytics_salebis_answer = "yes";
        }
    });
}



///********* EIGTH QUESTION ********* ///

function q_secondHand() {
    $('#question_title').empty();
    $('#question_title').append(q_secondhand);

    analytics_secondhand = true;

    $('#no').click(function (e) {
        if ($('#question_title').html() != q_secondhand) {
            e.preventDefault();
        } else {
            q_secondHandBis();
            analytics_secondhand_answer = "no";
        }
    });

    $('#yes').click(function (e) {
        if ($('#question_title').html() != q_secondhand) {
            e.preventDefault();
        } else {
            q_price();
            analytics_secondhand_answer = "yes";
        }
    });
}

///********* EIGTH-bis QUESTION ********* ///

function q_secondHandBis() {
    $('#question_title').empty();
    $('#question_title').append(q_secondhandbis);

    analytics_secondhandbis = true;

    $('#no').click(function (e) {
        if ($('#question_title').html() != q_secondhandbis) {
            e.preventDefault();
        } else {
            q_price();
            analytics_secondhandbis_answer = "no";
        }
    });

    $('#yes').click(function (e) {
        if ($('#question_title').html() != q_secondhandbis) {
            e.preventDefault();
        } else {
            dontBuyIt(q_secondhandbis);
            analytics_secondhandbis_answer = "yes";
        }
    });
}

///********* NINTH QUESTION ********* ///

function q_price() {
    $('#question_title').empty();
    $('#question_title').append(q_pricetitle);

    analytics_price = true;

    $('#no').click(function (e) {
        if ($('#question_title').html() != q_pricetitle) {
            e.preventDefault();
        } else {
            q_rewardYourself();
            analytics_price_answer = "no";
        }
    });

    $('#yes').click(function (e) {
        if ($('#question_title').html() != q_pricetitle) {
            e.preventDefault();
        } else {
            q_priceRange();
            analytics_price_answer = "yes";
        }
    });
}

///********* TENTH QUESTION ********* ///

function q_priceRange() {
    $('#question_title').empty();
    $('#question_title').append(q_pricerangetitle);
    $('#buttons_zone').empty();

    analytics_pricerange = true; 

    // price range 

    $('#buttons_zone').append('<button id="under_50" class="btn btn-outline-danger mr-3 my-3"> under 50 $/€/£ </button>');
    $('#buttons_zone').append('<button id="50-100" class="btn btn-outline-danger mr-3 my-3"> between 50 and 100 $/€/£</button>');
    $('#buttons_zone').append('<button id="more100" class="btn btn-outline-danger mr-3 my-3"> above 100 $/€/£</button>');
    $('#buttons_zone').append('<button id="more200" class="btn btn-outline-danger mr-3 my-3"> above 200 $/€/£</button>');
    $('#buttons_zone').append('<button id="more500" class="btn btn-outline-danger mr-3 my-3"> above 500 $/€/£</button>');

    $('#under_50').click(function () {
        treatYoSelf(q_pricerangetitle);
        analytics_value_range = "under_50";
    });
    $('#50-100').click(function () {
        lifeIsTooShort(q_pricerangetitle);
        analytics_value_range = "50-100";
    });
    $('#more100').click(function () {
        q_affordIt();
        analytics_value_range = "more100";
    });
    $('#more200').click(function () {
        q_affordIt();
        analytics_value_range = "more200";
    });
    $('#more500').click(function () {
        jeezDontBuyIt(q_pricerangetitle);
        analytics_value_range = "more500";
    });
}

///********* ELEVENTH QUESTION ********* ///

function q_affordIt() {

    addButtons();

    $('#question_title').empty();
    $('#question_title').append(q_affordit);

    analytics_affordit = true;

    $('#no').click(function (e) {
        if ($('#question_title').html() != q_affordit) {
            e.preventDefault();
        } else {
            jeezDontBuyIt(q_affordit);
            analytics_affordit_answer = "no";
        }
    });

    $('#yes').click(function (e) {
        if ($('#question_title').html() != q_affordit) {
            e.preventDefault();
        } else {
            q_reallyAffordIt();
            analytics_affordit_answer = "yes";
        }
    });
}

///********* TWELVE QUESTION ********* ///

function q_reallyAffordIt() {
    $('#question_title').empty();
    $('#question_title').append(q_reallyaffordit);

    analytics_reallyaffordit = true;

    $('#no').click(function (e) {
        if ($('#question_title').html() != q_reallyaffordit) {
            e.preventDefault();
        } else {
            jeezDontBuyIt(q_reallyaffordit);
            analytics_reallyaffordit_answer = "no";
        }
    });

    $('#yes').click(function (e) {
        if ($('#question_title').html() != q_reallyaffordit) {
            e.preventDefault();
        } else {
            q_rewardYourself();
            analytics_reallyaffordit_answer = "yes";
            console.log(analytics_reallyaffordit_answer);
        }
    });
}

///********* THIRTHEENTH QUESTION ********* ///

function q_rewardYourself() {

    $('#question_title').empty();
    $('#question_title').append(q_rewardyourself);

    analytics_rewardyourself = true;

    console.log("in the reward yourself function after analytics");

    $('#no').click(function (e) {
        if ($('#question_title').html() != q_rewardyourself) {
            e.preventDefault();
            console.log("in the if question title is different");
        } else {
            lifeIsTooShort(q_rewardyourself);
            analytics_rewardyourself_answer = "no";
            console.log("in the reward yourself function in the no else");
        }
    });

    $('#yes').click(function (e) {
        if ($('#question_title').html() != q_rewardyourself) {
            e.preventDefault();
            console.log("in the if question title is different");
        } else {
            console.log("in th yes else function");
            analytics_rewardyourself_answer = "yes";
            console.log("in th yes else function after analytics");
            treatYoSelf(q_rewardyourself);
            console.log("in th yes else function after call function treatYoSelf");

        }
    });
}


///********* MORE METHODS  ********* ///


function getItem() {
    var item = $('h1').attr('id');
    return item;
}

function getPlurialItem() {
    var plurialItem = $('h1').attr('id');

    if (plurialItem == "bag") {
        plurialItem = "bags";
    }
    if (plurialItem == "dress") {
        plurialItem = "dresses";
    }

    return plurialItem;
}

// Functions to display end messages

function reallyWhy(question_title) {
    $('#question_title').empty();
    console.log("why yu no remove buttons before");
    $('#buttons_zone').remove();
    console.log("why yu no remove buttons after");
    $('#question_title').append(a1_likeit);
    $('#content_zone').append(dontlikeit_gif);
    $('#content_zone').append(return_button);

    analyticsquizz_complete = true;
    analytics_end = question_title;
}

function thankHonesty(question_title) {
    $('#question_title').empty();
    $('#buttons_zone').remove();
    $('#question_title').append(a3_needit);
    $('#content_zone').append(dontneedit_gif);
    $('#content_zone').append(return_button);

    analyticsquizz_complete = true;
    analytics_end = question_title;
    console.log("in thank honesty function");
}

function dontBuyIt(question_title) {
    $('#question_title').empty();
    $('#buttons_zone').remove();
    $('#question_title').append(dontbuyit);
    $('#content_zone').append(dontbuyit_gif);
    $('#content_zone').append(return_button);

    analyticsquizz_complete = true;
    analytics_end = question_title;
    console.log("in dont buy it function");
}

function treatYoSelf(question_title) {
    $('#question_title').empty();
    $('#buttons_zone').remove();
    $('#question_title').append(a14_buyit);
    $('#content_zone').append(treatyoself_gif);
    $('#content_zone').append(return_button);

    analyticsquizz_complete = true;
    analytics_end = question_title;
    console.log('treatYoSelf');
}

function jeezDontBuyIt(question_title) {
    $('#question_title').empty();
    $('#buttons_zone').remove();
    $('#question_title').append(jeezdontbuyit);
    $('#content_zone').append(jeezdontbuyit_gif);
    $('#content_zone').append(return_button);

    analyticsquizz_complete = true;
    analytics_end = question_title;
    console.log('jeez dont buy it');
}

function lifeIsTooShort(question_title) {
    $('#question_title').empty();
    $('#buttons_zone').remove();
    $('#question_title').append(a14bis_buyit);
    $('#content_zone').append(lifetooshort_gif);
    $('#content_zone').append(return_button);

    analyticsquizz_complete = true;
    analytics_end = question_title;
    console.log('life is too short');
}


function addButtons() {
    // If the user comes from the q10_yes method then she doesn't have the yes no buttons but the price range buttons. Therefore, I empty everything and put it back..
    $('#buttons_zone').empty();
    $('#buttons_zone').append('<button id="no" class="btn btn-lg btn-outline-danger mr-3">No</button><button id="yes" class="btn btn-lg btn-outline-success mr-3">Yes</button>');
}


// END of quizz //

function backHome() {
    analytics_return_end = true;
    window.location.href = "https://shouldibuythebag.com";
    sendQuizzData();
    console.log('back home');
}

$('#quit').click(function (e) {
    analytics_quit_end = true;
    window.location.href = "https://shouldibuythebag.com";
    console.log('quit');
    sendQuizzData();
    
});

$(window).on("beforeunload", function () {
    console.log("in unload function before call the ajax function");
    sendQuizzData();
});

// ******** AJAX ********** //

// function to call when user quit, press return or leave the window

function sendQuizzData() {

    console.log("call the ajax function");
    $.ajax({
        type: "POST",
        url: 'https://shouldibuythebag.com/quizz/saveQuizzData',
        data: {
            'item': myitem,
            'analytics_likeit': analytics_likeit,
            'analytics_likeit_answer': analytics_likeit_answer,
            'analytics_wantit': analytics_wantit,
            'analytics_wantit_answer': analytics_wantit_answer,
            'analytics_onquality': analytics_onquality,
            'analytics_onquality_answer': analytics_onquality_answer,
            'analytics_needit': analytics_needit,
            'analytics_needit_answer': analytics_needit_answer,
            'analytics_impulseshopping': analytics_impulseshopping,
            'analytics_impulseshopping_answer': analytics_impulseshopping_answer,
            'analytics_onlineshopping': analytics_onlineshopping,
            'analytics_onlineshopping_answer': analytics_onlineshopping_answer,
            'analytics_onlineshoppingbis': analytics_onlineshoppingbis,
            'analytics_onlineshoppingbis_answer': analytics_onlineshoppingbis_answer,
            'analytics_onlineshoppingter': analytics_onlineshoppingter,
            'analytics_onlineshoppingter_answer': analytics_onlineshoppingter_answer,
            'analytics_ownit': analytics_ownit,
            'analytics_ownit_answer': analytics_ownit_answer,
            'analytics_manyofit': analytics_manyofit,
            'analytics_manyofit_answer': analytics_manyofit_answer,
            'analytics_fitwardrobe': analytics_fitwardrobe,
            'analytics_fitwardrobe_answer': analytics_fitwardrobe_answer,
            'analytics_fitme': analytics_fitme,
            'analytics_fitme_answer': analytics_fitme_answer,
            'analytics_influencer': analytics_influencer,
            'analytics_influencer_answer': analytics_influencer_answer,
            'analytics_influencerbis': analytics_influencerbis,
            'analytics_influencerbis_answer': analytics_influencerbis_answer,
            'analytics_onetimeuse': analytics_onetimeuse,
            'analytics_onetimeuse_answer': analytics_onetimeuse_answer,
            'analytics_manyuse': analytics_manyuse,
            'analytics_manyuse_answer': analytics_manyuse_answer,
            'analytics_sale': analytics_sale,
            'analytics_sale_answer': analytics_sale_answer,
            'analytics_salebis': analytics_salebis,
            'analytics_salebis_answer': analytics_salebis_answer,
            'analytics_secondhand': analytics_secondhand,
            'analytics_secondhand_answer': analytics_secondhand_answer,
            'analytics_secondhandbis': analytics_secondhandbis,
            'analytics_secondhandbis_answer': analytics_secondhandbis_answer,
            'analytics_price': analytics_price,
            'analytics_price_answer': analytics_price_answer,
            'analytics_pricerange': analytics_pricerange,
            'analytics_value_range': analytics_value_range,
            'analytics_affordit': analytics_affordit,
            'analytics_affordit_answer': analytics_affordit_answer,
            'analytics_reallyaffordit': analytics_reallyaffordit,
            'analytics_reallyaffordit_answer': analytics_reallyaffordit_answer,
            'analytics_rewardyourself': analytics_rewardyourself,
            'analytics_rewardyourself_answer': analytics_rewardyourself_answer,
            'analyticsquizz_complete': analyticsquizz_complete,
            'analytics_end': analytics_end,
            'analyticsreturn_end': analytics_return_end,
            'analytics_quit_end': analytics_quit_end
        },
        dataType: "json",
        success: function (response) {
            console.log("ajax success");
            console.log(response);
        },
        error: function (response) {
            console.log("fail");
            console.log(response);
        }
    });
}
