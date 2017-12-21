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

var ctx = $("#myChart");
var totalBag = $( "input[name='totalBag']").val();
var totalDress = $( "input[name='totalDress']").val();
var totalShoes = $( "input[name='totalShoes']").val();

console.log(totalBag);

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