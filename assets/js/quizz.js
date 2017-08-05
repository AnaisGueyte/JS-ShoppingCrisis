
// establish value for questions and their answers.
var nope = document.getElementById('no');
var yep = document.getElementById('yes');

var myitem = getItem();
var myitems = getPlurialItem();

// Recurrent answers

var dontlikeit_gif = '<p><iframe src="https://giphy.com/embed/3ornkbl5jev6mIz4oU" style="width: 29em; height: 16em;" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></p>';

var dontneedit_gif = '<p><iframe src="https://giphy.com/embed/dEugCWatqhdQY" style="width: 29em; height: 16em;" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></p>';

var dontbuyit = "Hum... Don't buy it.";
var dontbuyit_gif = '<p><iframe src="https://giphy.com/embed/l0MYSSCIrv8aUaBsQ" style="width: 29em; height: 16em;" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></p>';

var jeezdontbuyit = "Jeez! Don't buy it!";
var jeezdontbuyit_gif = '<p><iframe src="https://giphy.com/embed/EsmlrgWNx5v0Y" style="width: 29em; height: 16em;" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></p>';

var treatyoself_gif = '<p><iframe src="https://giphy.com/embed/lAbxg2qCfOwKY" style="width: 29em; height: 16em;" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></p>';
var lifetooshort_gif = '<p><iframe src="https://giphy.com/embed/iIneJpUbaEZva" style="width: 29em; height: 16em;" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></p>';

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


///********* FIRST QUESTION ********* ///

// First, when the windows opens, display the first question, related to all the items.

$(document).ready(function(){
		$('#question_title').append(q1_likeit);
		startTheQuizz();
	}); // END OF DOCUMENT READY

// Then trigger the situation depending on the answer: Yes or No.
function startTheQuizz(){

	// If click no
	nope.addEventListener('click', function(e){
		if ($('#question_title').html() != q1_likeit){
			e.preventDefault();
		}
		else{
			q1_no();
			console.log("non 1");
		}
	}); 

	// If click yes
	$('#yes').click(function(){
		q1_yes();
	});

}


function q1_no(){
	$('#question_title').empty();
	$('#buttons_zone').remove();
	$('#question_title').append(a1_likeit);
   	$('#content_zone').append(dontlikeit_gif);
   	$('#content_zone').append(return_button);
}
// END OF QUESTIONNTAIRE 




function q1_yes(){
	$('#question_title').empty();
	$('#question_title').append(q2_wantit);

	nope.addEventListener('click', function(e){
		if ($('#question_title').html() != q2_wantit){
			e.preventDefault();
		}
		else{
			console.log("non 2");
			q1_no();
		}
		// Same answer as the first question
		
	});

	$('#yes').click(function(){
		q2_yes();
	}); 
}

///********* SECOND QUESTION ********* ///

function q2_yes(){
	$('#question_title').empty();
	$('#question_title').append(q3_needit);

	nope.addEventListener('click', function(e){
		if ($('#question_title').html() != q3_needit){
			e.preventDefault();
		}
		else{
		console.log("non 3 i don't need it");
		q3_no(); 
		}
	}); 

	$('#yes').click(function(){
		q3_yes(); 
	});

}

///********* THIRD QUESTION ********* ///

function q3_no(){
	$('#question_title').empty();
	$('#buttons_zone').remove();
	$('#question_title').append(a3_needit);
	$('#content_zone').append(dontneedit_gif);
   	$('#content_zone').append(return_button);
}

// If click yes

function q3_yes(){
	$('#question_title').empty();
	$('#question_title').append(q4_ownit);

	nope.addEventListener('click', function(e){
		if ($('#question_title').html() != q4_ownit){
	 		e.preventDefault();
	 	} else {
			//Do you own something similaire ? No, then continue (that's why it's the q4 yes method)
			console.log("non je ne pense pas en avoir de trop");
	 		q4_yes();
	 	}
	}); 

	yep.addEventListener('click', function(e){
		if ($('#question_title').html() != q4_ownit){
			e.preventDefault();
		} else {
			dontBuyIt();
		}
	});

}

///********* FOURTH QUESTION ********* ///

function q4_yes(){
	$('#question_title').empty();
	$('#question_title').append(q5_many);

	var myitem = getItem();

	nope.addEventListener('click', function(e){
		if ($('#question_title').html() != q5_many){
			e.preventDefault();
		}
		else{
		// YES I HAVE TOO MANY OF IT ->> it's a probleme
		console.log("non 4");
		q5_yes();
	}
	});
	
	yep.addEventListener('click', function(e){
		if ($('#question_title').html() != q5_many){
			e.preventDefault();
		} else {
			dontBuyIt();
		}
	}); 
}

///********* FIFTH QUESTION ********* ///

function q5_yes(){
	$('#question_title').empty();
	$('#question_title').append(q6_fit);

	$('#no').click(function(e){
		if ($('#question_title').html() != q6_fit){
			e.preventDefault();
		}
		else{
		console.log("non 5");
		dontBuyIt();}
	}); 

	$('#yes').click(function(){
		q6_yes(); 
	});
}

///********* SIXTH QUESTION ********* ///

function q6_yes(){
	$('#question_title').empty();
	$('#question_title').append(q7_fitme);

	$('#no').click(function(e){
		if ($('#question_title').html() != q7_fitme){
			e.preventDefault();
		}
		else{
		console.log("non 6");
		jeezDontBuyIt();
	}
	}); 

	$('#yes').click(function(){
		q7_yes(); 
	});
}

///********* SEVENTH QUESTION ********* ///

function q7_yes(){
	$('#question_title').empty();
	$('#question_title').append(q8_sale);

	$('#no').click(function(e){
		if ($('#question_title').html() != q8_sale){
			e.preventDefault();
		}
		else{
		console.log("non 9");
		q8_yes();
	}
	}); 

	$('#yes').click(function(){
		q9_yes(); 
	});
}

///********* EIGTH QUESTION ********* ///

function q8_yes(){
	$('#question_title').empty();
	$('#question_title').append(q9_secondhand);

	$('#no').click(function(e){
		if ($('#question_title').html() != q9_secondhand){
			e.preventDefault();
		}
		else{
		console.log("non 10");
		q9_yes();
	}
	}); 

	$('#yes').click(function(){
		q9_yes(); 
	});
}

///********* NINTH QUESTION ********* ///

function q9_yes(){
	$('#question_title').empty();
	$('#question_title').append(q10_price);

	$('#no').click(function(e){
		if ($('#question_title').html() != q10_price){
			e.preventDefault();
		}
		else{
		console.log("non 11");
		q13_yes();
		}
	}); 

	$('#yes').click(function(){
		q10_yes(); 
	});
}

///********* TENTH QUESTION ********* ///

function q10_yes(){
	$('#question_title').empty();
	$('#question_title').append(q11_price_input);
	$('#buttons_zone').empty(); 
	
	// price range 

	$('#buttons_zone').append('<button id="under_50" class="btn btn-outline-danger mr-3 my-3"> under 50 $/€/£ </button>'); 
	$('#buttons_zone').append('<button id="50-100" class="btn btn-outline-danger mr-3 my-3"> between 50 and 100 $/€/£</button>'); 
	$('#buttons_zone').append('<button id="more100" class="btn btn-outline-danger mr-3 my-3"> above 100 $/€/£</button>'); 
	$('#buttons_zone').append('<button id="more200" class="btn btn-outline-danger mr-3 my-3"> above 200 $/€/£</button>');
	$('#buttons_zone').append('<button id="more500" class="btn btn-outline-danger mr-3 my-3"> above 500 $/€/£</button>');
	
	$('#under_50').click(function(){
	 	treatYoSelf();
	}); 
	$('#50-100').click(function(){
	 	lifeIsTooShort();
	});
	$('#more100').click(function(){
	 	q11_yes();
	}); 
	$('#more200').click(function(){
	 	q11_yes();
	});
	$('#more500').click(function(){
	 	jeezDontBuyIt();
	}); 
}

///********* ELEVENTH QUESTION ********* ///

function q11_yes(){

	addButtons();

	$('#question_title').empty();
	$('#question_title').append(q12_afford);

	$('#no').click(function(e){
		if ($('#question_title').html() != q12_afford){
			e.preventDefault();
		}
		else{
		console.log("non 11");
		q13_yes();
	
		console.log("non 12");
		jeezDontBuyIt();
	}
	}); 

	$('#yes').click(function(){
		q12_yes(); 
	});
}

///********* TWELVE QUESTION ********* ///

function q12_yes(){
	$('#question_title').empty();
	$('#question_title').append(q13_really);

	$('#no').click(function(e){
if ($('#question_title').html() != q13_really){
			e.preventDefault();
		}
		else{
		console.log("non 13");
		jeezDontBuyIt();
	}
	}); 

	$('#yes').click(function(){
		q13_yes(); 
	});
}

///********* THIRTHEENTH QUESTION ********* ///

function q13_yes(){

	$('#question_title').empty();
	$('#question_title').append(q14_reward);

	$('#no').click(function(e){
		if ($('#question_title').html() != q14_reward){
			e.preventDefault();
		}
		else{
		console.log("non 14");
		lifeIsTooShort();
	}

	}); 

	$('#yes').click(function(){
		treatYoSelf();
	});
}



///********* MORE METHODS  ********* ///

function backHome(){
	window.location.href = "/start/welcome";
}

function getItem(){
	var item = $('h1').attr('id');
	return item;
}

function getPlurialItem(){
	var plurialItem = $('h1').attr('id');

	if (plurialItem == "bag"){
		plurialItem = "bags";
	}
	if (plurialItem == "dress"){
		plurialItem = "dresses";
	}

	return plurialItem;
}

function dontBuyIt(){
	$('#question_title').empty();
	$('#buttons_zone').remove();
	$('#question_title').append(dontbuyit);
	$('#content_zone').append(dontbuyit_gif);
   	$('#content_zone').append(return_button);
}

function jeezDontBuyIt(){
	$('#question_title').empty();
	$('#buttons_zone').remove();
	$('#question_title').append(jeezdontbuyit);
	$('#content_zone').append(jeezdontbuyit_gif);
   	$('#content_zone').append(return_button);

}

function treatYoSelf(){
	$('#question_title').empty();
	$('#buttons_zone').remove();
	$('#question_title').append(a14_buyit);
	$('#content_zone').append(treatyoself_gif); 
   	$('#content_zone').append(return_button);
}

function lifeIsTooShort(){
	$('#question_title').empty();
	$('#buttons_zone').remove();
	$('#question_title').append(a14bis_buyit); 
	$('#content_zone').append(lifetooshort_gif); 
   	$('#content_zone').append(return_button);
}

function addButtons(){
	// If the user comes from the q10_yes method then she doesn't have the yes no buttons but the price range buttons. Therefore, I empty everything and put it back..
	$('#buttons_zone').empty();
	$('#buttons_zone').append('<button id="no" class="btn btn-lg btn-danger mr-3 my-3">No</button><button id="yes" class="btn btn-lg btn-success mr-3 my-3">Yes</button>'); 
}
