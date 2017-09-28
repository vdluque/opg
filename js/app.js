$(document).ready(function() {
	//slider code
	var sections = [$('#slides1'), $('#slides2'), $('#slides3'), $('#slides4')];
	sections.forEach(function(element) {

		var currentIndex = 0,
	  	items = $(element.selector + ' .container div'),
	  	itemAmt = items.length;

		function cycleItems() {
	  		var item = items.eq(currentIndex);
	  		items.hide();
	  		item.css('display','inline-block');
		}

		var autoSlide = setInterval(function() {
	  		currentIndex += 1;
	  		if (currentIndex > itemAmt - 1) {
	    		currentIndex = 0;
	  		}
	  		cycleItems();
		}, 4000);

		$('.next').click(function() {
	  		clearInterval(autoSlide);
	  		currentIndex += 1;
	  		if (currentIndex > itemAmt - 1) {
	    		currentIndex = 0;
	  		}
	  		cycleItems();
		});

		$('.prev').click(function() {
	  		clearInterval(autoSlide);
	  		currentIndex -= 1;
	  		if (currentIndex < 0) {
	    		currentIndex = itemAmt - 1;
	  		}
	  		cycleItems();
		});

	});

	//smooth scroll for scroll button 
	function smoothScrollingTo(target){
  		$('html,body').animate({scrollTop:$(target).offset().top}, 500);
	}

	$('a[href*=\\#]').on('click', function(event){     
    	event.preventDefault();
    	smoothScrollingTo(this.hash);
	});

	$(document).ready(function(){
  		smoothScrollingTo(location.hash);
	});

	//ligthbox modal 
	$('.lightbox_trigger').click(function(e) {
		
		//prevent default action (hyperlink)
		e.preventDefault();
		
		//Get clicked link href
		var image_href = $(this).attr("href");
		
		if ($('#lightbox').length > 0) { // #lightbox exists
			
			//place href as img src value
			$('#content').html('<img src="' + image_href + '" />');
		   	
			//show lightbox window
			$('#lightbox').show();
		}
		
		else { //#lightbox does not exist - create and insert (runs 1st time only)
			
			//create HTML markup for lightbox window
			var lightbox = 
			'<div id="lightbox">' +
				'<p>Click to close</p>' +
				'<div id="content">' + //insert clicked link's href into img src
					'<img src="' + image_href +'" />' +
				'</div>' +	
			'</div>';
				
			//insert lightbox HTML into page
			$('body').append(lightbox);
		}
		
	});
	
	//Click anywhere on the page to get rid of lightbox window
	$('#lightbox').on('click', function() { //must use live, as the lightbox element is inserted into the DOM
		$('#lightbox').hide();
	});

});

//Animations - ScrollMagic and TweenMax
var controller = new ScrollMagic.Controller();

//row buttons slide down
var rows = ["#row1", "#row2", "#row3", "#row4"];

var slide = new TweenMax.staggerTo(rows, 0.5, { opacity: 1, top: "0px", ease: Power2.easeInOut, delay:0 }, 0.5);

var rowShow = new ScrollMagic.Scene({
	triggerElement: '#scroll-trigger',
	triggerHook: 'onEnter'
}).setTween(slide).addIndicators({name: "1"}).addTo(controller);

//nav dynamic shrinking
var navShrink = new TweenMax(".header", 0.5, { height: "60px" });

var navScene = new ScrollMagic.Scene({
	triggerElement: '#scroll-trigger',
	triggerHook: 'onEnter'
}).setTween(navShrink).addTo(controller);

//pinning all sections on scroll

// var pinController = new ScrollMagic.Controller();

// var slides = document.querySelectorAll(".content");

// for (var i=0; i<slides.length; i++) {
// 	new ScrollMagic.Scene({
// 		triggerElement: slides[i],
// 		triggerHook: 'onLeave'
// 	})
// 	.setPin(slides[i])//, {pushFollowers: false})
// 	.addIndicators() // add indicators (requires plugin)
// 	.addTo(controller);
// }

// var pinScene = new ScrollMagic.Scene({
// 	triggerElement: '.video-overlay',
// 	triggerHook: 'onLeave',
// 	duration: 600
// }).setPin('.rows', {pushFollowers: false}).addIndicators({name:'2'}).addTo(controller);


var pinScene = new ScrollMagic.Scene({
	triggerElement: '.breaths-video',
	triggerHook: 'onEnter',
	duration: 600
}).setPin('#intro1', {pushFollowers: false}).addIndicators({name:'2'}).addTo(controller);

var pinScene = new ScrollMagic.Scene({
	triggerElement: '#slides2',
	triggerHook: 'onEnter',
	duration: 600
}).setPin('#intro2', {pushFollowers: false}).addIndicators({name:'3'}).addTo(controller);

var pinScene = new ScrollMagic.Scene({
	triggerElement: '#slides3',
	triggerHook: 'onEnter',
	duration: 600
}).setPin('#intro3', {pushFollowers: false}).addIndicators({name:'4'}).addTo(controller);

var pinScene = new ScrollMagic.Scene({
	triggerElement: '#slides4',
	triggerHook: 'onEnter',
	duration: 600
}).setPin('#intro4', {pushFollowers: false}).addIndicators({name:'5'}).addTo(controller);





