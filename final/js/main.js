$(document).ready(function() {

	$("#textinfo1").delay(500).fadeIn();

if ($(window).width() > 1024){
	$("#goPro").delay(1500).fadeIn().animate({'top': '280px'}, 1500);
} else { }

    var PSV = new PhotoSphereViewer({
	    panorama: 'images/photosphere.JPG',
	    container: 'photosphere',
	    autorotate: true,
	    default_fov: 70,
	    mousewheel: false,
	  });

	//Init ScrollMagic
	var controller = new ScrollMagic.Controller();

	//Parallax scene 2
	var parallaxTl2 = new TimelineMax();
		parallaxTl2
			.from('#textinfo2', 2, {y: '100', autoAlpha: 1, ease:Power0.easeNone}, 1)
			;

		var slideParallaxScene = new ScrollMagic.Scene({
			triggerElement: '#textinfo2',
			triggerHook: 1,
			duration: '110%'
		})
		.setTween(parallaxTl2)
		.addTo(controller);	

	//Parallax scene 5
	var parallaxTl5 = new TimelineMax();
		parallaxTl5
			.from('#textinfo5', 2, {y: '100', autoAlpha: 1, ease:Power0.easeNone}, 1)
			;

		var slideParallaxScene = new ScrollMagic.Scene({
			triggerElement: '#textinfo5',
			triggerHook: 1,
			duration: '110%'
		})
		.setTween(parallaxTl5)
		.addTo(controller);	

	//Parallax scene 7
	var parallaxTl7 = new TimelineMax();
		parallaxTl7
			.from('#textinfo7', 2, {y: '100', autoAlpha: 1, ease:Power0.easeNone}, 1)
			;

		var slideParallaxScene = new ScrollMagic.Scene({
			triggerElement: '#textinfo7',
			triggerHook: 1,
			duration: '110%'
		})
		.setTween(parallaxTl7)
		.addTo(controller);	



	var tweenTipB = new TimelineMax({
		delay: 0, 
		ease:Linear.easeNone, 
		repeat: -1, 
		reverse: false
	})
        .to("#star", 1, {bezier: {curviness:1.5, values: [{x:2810, y:700}]}, ease:Linear.easeNone}, 5)
        //.to("#star", 0 {left: 0, top: 0}, ease:Linear.easeNone}, 10)
        .addTo(controller);

});