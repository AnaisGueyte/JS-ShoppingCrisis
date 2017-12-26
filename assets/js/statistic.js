$( document ).ready(function() {

    /** Animation on displaying total tests **/

    $('#totalQuizz').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
        });
    });

    /** Canvas item **/

    var ctx = $("#myChart");
    var totalBag = $( "input[name='totalBag']").val();
    var totalDress = $( "input[name='totalDress']").val();
    var totalShoes = $( "input[name='totalShoes']").val();

    var myDoughnutChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Bag", "Shoes", "Dress"],
            datasets: [{ 
                label: ['% of quizz by item'],
                data: [totalBag, totalShoes, totalDress],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            cutoutPercentage: [0],
        }
    });


    /** GIF SECTION **/

    $('.fa-heart-o').click(function() {
        $(this).removeClass( "fa-heart-o" ).addClass( "fa-heart" );
        $(this).css('color', 'red');
        /* var url_gif = $(this).closest('.card').children("img").attr("src"); */
        var url_gif = $(this).data('shorten-link');
        /** var facebook_url = "https://www.facebook.com/dialog/share?app_id=349797358763084&display=popup&href=https%3A//shouldibuythebag.com"; **/
        var twitter_url = 'https://twitter.com/intent/tweet?text=This%20‘Should%20I%20Buy%20The%20Bag?’%20test%20is%20awesome!%20Love%20this%20ending%20gif:' + url_gif +'%20Start%20the%20test%20here:%20http://bit.ly/ShouldIBuyTheBag';
        
        $('#shareontwitter').attr('href', twitter_url);

        $('#socialMediaModal').modal('show'); 
    });

    /** Facebook Javascript **/

    $.ajaxSetup({ cache: true });
    $.getScript('https://connect.facebook.net/en_US/sdk.js', function(){
    FB.init({
      appId: '349797358763084',
      version: 'v2.7' 
        });
    });


    $('#shareonfacebook').click(function(e){
        e.preventDefault();

         FB.ui({
            method: 'share',
            display: 'popup',
            href: 'https://shouldibuythebag.com',
        }, function(response){

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

});







