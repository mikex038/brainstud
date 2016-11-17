$(document).ready(function(){

	//Init ScrollMagic
	var controller = new ScrollMagic.Controller();

	//Pin the intro
	var pinIntroScene = new ScrollMagic.Scene({
		triggerElement: '#intro',
		triggerHook: 0,
		duration: '30%'
	})
	.setPin('#intro', {pushFollowers: false})
	.addTo(controller);

	//Pin again
	var pinIntroScene2 = new ScrollMagic.Scene({
		triggerElement: '#project01',
		triggerhook: 0.4
	})
	.setPin('#intro', {pushFollowers: false})
	.addTo(controller);

	//Parallax scene

	var parallaxTl = new TimelineMax();
	parallaxTl
		.from('.content-wrapper', 0.4, {autoAlpha: 0, ease:Power0.easeNone}, 0.4)
		.from('.bcg', 2, {y: '-50%', ease:Power0.easeNone}, 0)
		;

	var slideParallaxScene = new ScrollMagic.Scene({
		triggerElement: '.bcg-parallax',
		triggerHook: 1,
		duration: '100%'
	})
	.setTween(parallaxTl)
	.addTo(controller);

	//Loop through each .project element
	$('.project').each(function(){
		var ourScene = new ScrollMagic.Scene({
			triggerElement: this.children[0],
			triggerHook: 0.9,
	})
	.setClassToggle(this, 'fade-in') // Add class to project
	.addIndicators({
		name: 'fade scene',
		colorTrigger: 'black',
		colorStart: '#75C695',
		colorEnd: 'pink'
	}) //This requires a plug-in
	.addTo(controller);
	});

});


















