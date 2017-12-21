class Question{ 

var dontlikeit_gif = '<p><iframe src="https://giphy.com/embed/3ornkbl5jev6mIz4oU" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></p>';

var dontneedit_gif = '<p><iframe src="https://giphy.com/embed/dEugCWatqhdQY" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></p>';

var dontbuyit = "Hum... Don't buy it.";
var dontbuyit_gif = '<p><iframe src="https://giphy.com/embed/l0MYSSCIrv8aUaBsQ" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></p>';

var jeezdontbuyit = "Jeez! Don't buy it!";
var jeezdontbuyit_gif = '<p><iframe src="https://giphy.com/embed/EsmlrgWNx5v0Y" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></p>';

var treatyoself_gif = '<p><iframe src="https://giphy.com/embed/lAbxg2qCfOwKY" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></p>';
var lifetooshort_gif = '<p><iframe src="https://giphy.com/embed/iIneJpUbaEZva" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></p>';

var return_button = '<p><a class="btn btn-outline-info" onclick="backHome()">Return</a></p>';


// List of questions and their no answer

var q1_likeit = "Do you really like it?";
var a1_likeit= "Really? Why do you even take the test then!";

var q2_wantit = "Do you really want it?";
// same answer as the first question

var q3_needit = "Do you really need it?";
var a3_needit = "I appreciate your honesty. Honesty made you save cash for something better.";

var q4_ownit = "Do you already own something similar?";
// don't buy it

var q5_many = "Do you feel like you already have too many " + myitems + "?";
//if yes don't buy it
// no continue

var q6_fit = "Will it fit with your clothes and all the other stuff in your wardrobe?";
// don't buy it

var q7_fitme = "Does it even fit?!"; // Is different according to the item (bag, shoes, dress)
// Jeez! don't buy it

var q8_sale = "Is it on sale?";
// if yes go to q10
// no go to q9

var q9_secondhand = "Is it second hand?";
// if yes go to q10
// if no

var q10_price = "Is it expensive?";
// no go to q13

var q11_price_input = "How expensive?";

var q12_afford = "Can you afford it? ";

var q13_really = "Really? <br><h5>you can afford it?</h5>";

var q14_reward = "Do you feel like you deserve to reward or gift yourself lately? <br><h5>(Like you got a diploma, a promotion, done something good or your birthday is coming soon)</h5>";
// if yes
var a14_buyit = "Well then, why do you have doubt about buying the " + myitem + "? Treat yo self!";
// if no
var a14bis_buyit = "Life is too short, buy the " + myitem ;
};
exports.Question = Question;
