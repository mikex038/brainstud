$(document).ready(function(){

	//Init ScrollMagic
	var controller = new ScrollMagic.Controller();

	//Build a scene
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


















