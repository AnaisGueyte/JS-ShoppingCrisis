function validate() {

	

    var divErrorMessage = $('.errormessage');
    divErrorMessage.empty();

    var introError = "<p>The following fields are wrong:</p><ul>";
    var errormessage = '';

    // Je récupère les valeurs du formulaire
    name = $('input[name=name]').val();
    if(name === ''){errormessage += '<li>Field name is empty.</li>' ;}
    email = $('input[name=email]').val();
    if(email === ''){errormessage += '<li>Field email is empty.</li>';}
    message = $('textarea[name=message]').val();
    if(message === ''){errormessage += '<li>Field message is empty.</li>';}
    
    var outroError = "</ul>";

    console.log(name + " " + email + " " + message);

    console.log(errormessage);

    if (errormessage){
        divErrorMessage.addClass('alert alert-danger');
        divErrorMessage.append(introError + errormessage + outroError);
        grecaptcha.reset();
    }else{
        divErrorMessage.removeClass('alert alert-danger');
		$('#loader').css('display','block');
		$('#sendemail').css('opacity',  '0.5');
 		
 		console.log('avant ajax');
        $.ajax({
	        type: "POST",
	        url: 'https://shouldibuythebag.com/start/contactForm',
	        data: {
	        	'name': name,
	            'email': email,
	            'message': message
	            },
	        dataType: "json",
	        success: function (response) {
	            $('#loader').css('display','none');
	            $('#sendemail').css('opacity',  '1');
	            divErrorMessage.addClass('alert alert-success');
	            divErrorMessage.append("Sent !");
	            $("#sendemail")[0].reset();
	        },
	        error: function (response) {
	        	$('#loader').css('display','none');
	        	$('#sendemail').css('opacity',  '1');
	            divErrorMessage.addClass('alert alert-danger');
	            divErrorMessage.append('Oops, something wrong happened. Try again later and please, don\'t tell anyone.');
	            console.log(response);
	        }
        });
    }
}

/** Facebook Javascript **/

$.ajaxSetup({ cache: true });
$.getScript('https://connect.facebook.net/en_US/sdk.js', function(){
FB.init({
  appId: '349797358763084',
  version: 'v2.7' 
    });
});



 /** Twitter Javascript **/

window.twttr = (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));


	

$( document ).ready(function() {

	var twitter_url = 'https://twitter.com/intent/tweet?text=This%20‘Should%20I%20Buy%20The%20Bag?’%20test%20is%20awesome!%20Start%20the%20test%20here:%20http://bit.ly/ShouldIBuyTheBag';
    
	$('#shareontwitter').attr('href', twitter_url);

	$('#shareonfacebook').click(function(e){
        e.preventDefault();

         FB.ui({
            method: 'share',
            display: 'popup',
            href: 'https://shouldibuythebag.com',
        }, function(response){

        });
    });

    $('#copylink').click(function(e){
      e.preventDefault();
      var clipboard = new Clipboard('#copylink');

      clipboard.on('success', function(e) {
          console.info('Action:', e.action);
          console.info('Text:', e.text);
          console.info('Trigger:', e.trigger);

          e.clearSelection();
      });

      clipboard.on('error', function(e) {
          console.error('Action:', e.action);
          console.error('Trigger:', e.trigger);
      });
  });
		
});

    

  

      



