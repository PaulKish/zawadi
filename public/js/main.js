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

AmCharts.makeChart("chartdiv",
{
	"type": "serial",
	"rotate": true,
	"colors": [
		"#D4D4D4",
		"#DFBF86",
		"#ACABB0",
		"#D2AF6F",
		"#91D8F8",
		"#898D04"
	],
	"startDuration": 1,
	"color": "#222",
	"fontFamily": "Raleway",
	"fontSize": 12,
	"categoryAxis": {
		"gridPosition": "start",
		"labelsEnabled":false,
		"axisAlpha": 0,
		"gridAlpha": 0.1
	},
	"valueAxis": {
		"gridAlpha": 0.1
	},
	"graphs": [
		{
			"showBalloon": false,
			"fillAlphas": 1,
			"id": "AmGraph-1",
			"title": "Platinum",
			"type": "column",
			"valueField": "Platinum",
			"labelText" : "Platinum - 20 Girls",
			"labelPosition": "right",
			"labelRotation":"0"
		},
		{
			"showBalloon": false,
			"fillAlphas": 1,
			"id": "AmGraph-2",
			"title": "Gold",
			"type": "column",
			"valueField": "Gold",
			"labelText" : "Gold - 15 Girls",
			"labelPosition": "right",
			"labelRotation":"0"
		},
		{
			"showBalloon": false,
			"fillAlphas": 1,
			"id": "AmGraph-3",
			"title": "Silver",
			"type": "column",
			"valueField": "Silver",
			"labelText": "Silver - 10 Girls",
			"labelPosition": "right",
			"labelRotation":"0"
		},
		{
			"showBalloon": false,
			"fillAlphas": 1,
			"id": "AmGraph-4",
			"title": "Bronze",
			"type": "column",
			"valueField": "Bronze",
			"labelText": "Bronze - 3 Girls",
			"labelPosition": "right",
			"labelRotation":"0"
		},
		{
			"showBalloon": false,
			"fillAlphas": 1,
			"id": "AmGraph-5",
			"title": "Blue",
			"type": "column",
			"valueField": "Blue",
			"labelText": "Blue - 1 Girl",
			"labelPosition": "right",
			"labelRotation":"0"
		},
		{
			"showBalloon": false,
			"fillAlphas": 1,
			"id": "AmGraph-6",
			"title": "Other",
			"type": "column",
			"valueField": "Other",
			"labelText": "Green - Other",
			"labelPosition": "right",
			"labelRotation":"0"
		}
	],
	"titles": [
		{
			"id": "Title-1",
			"size": 15,
			"text": "Sponsorship Categories"
		}
	],
	"dataProvider": [
		{
			"Platinum": "5000000",
			"Gold"	  : "3750000",
			"Silver"  : "2500000",
			"Bronze"  : "750000",
			"Blue"	  : "250000",
			"Other"	  : "50000"
		}
	]
}
);