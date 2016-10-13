$(document).ready(function() {
	// stick nav
	var stickyNavTop = $('.nav').offset().top;
	 
	var stickyNav = function(){
		var scrollTop = $(window).scrollTop();
		      
		if (scrollTop > stickyNavTop) { 
		    $('.nav').addClass('fixed-nav');
		} else {
		    $('.nav').removeClass('fixed-nav'); 
		}
	};
	 
	stickyNav();
	 
	$(window).scroll(function() {
	  stickyNav();
	});

	// smooth scroll
	$('.menu-btn').click(function(e) {
		var href = $(this).attr('href');
		$('a').removeClass('active'); 
		$(this).addClass('active');
	    $('html, body').animate({
	        scrollTop: $(href).offset().top - 120
	    }, 800);
	    e.preventDefault();
	});

	$("#donationForm").validate();
});

var ctx = document.getElementById("chart-category");
var myChart = new Chart(ctx, {
	type: 'horizontalBar',
	data: {
	    labels: ["Platinum - 20+ Girls","Gold - 15 Girls","Silver - 10 Girls","Bronze - 3 Girls","Blue - 1 Girl","Other"],
	    datasets: [{
	        label: 'Category',
	        data: [5000000,3750000,2500000,750000,250000,5000],
	        backgroundColor: [
	            'rgba(90, 89, 89, 0.8)',
	            'rgba(100, 84, 0, 0.8)',
	            'rgba(75, 75, 75, 0.8)',
	            'rgba(80, 50, 20, 0.8)',
	            'rgba(0, 0, 100, 0.8)',
	            'rgba(128, 128, 0, 0.8)'
	        ]
	    }]
	},
	options: {
		legend:{
			display: false
		},
	    scales: {
	    	xAxes: [{
	        	display: false,
	        	ticks:{
	        		fontFamily: "Raleway",
	        	}
	        }],
	        yAxes: [{
	        	display: true,
	            ticks: {
	                beginAtZero:true,
	                fontFamily: "Raleway",
	            }
	        }]
	    }
	}
});