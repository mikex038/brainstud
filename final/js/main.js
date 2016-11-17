$(document).ready(function() {

	$("#textinfo1").delay(500).fadeIn();

if ($(window).width() > 1024){
	$("#goPro").delay(1500).animate({'top': '260px'}, 1500);
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
			.from('#textinfo2', 1, {y: '200', ease:Power0.easeNone}, 1)
			;

		var slideParallaxScene = new ScrollMagic.Scene({
			triggerElement: '#textinfo2',
			triggerHook: 1,
			duration: '100%'
		})
		.setTween(parallaxTl2)
		.addTo(controller);	

	//Parallax scene 5
	var parallaxTl5 = new TimelineMax();
		parallaxTl5
			.from('#textinfo5', 1, {y: '200', ease:Power0.easeNone}, 1)
			;

		var slideParallaxScene = new ScrollMagic.Scene({
			triggerElement: '#textinfo5',
			triggerHook: 1,
			duration: '100%'
		})
		.setTween(parallaxTl5)
		.addTo(controller);	

	//Parallax scene 7
	var parallaxTl7 = new TimelineMax();
		parallaxTl7
			.from('#textinfo7', 1, {y: '200', ease:Power0.easeNone}, 1)
			;

		var slideParallaxScene = new ScrollMagic.Scene({
			triggerElement: '#textinfo7',
			triggerHook: 1,
			duration: '100%'
		})
		.setTween(parallaxTl7)
		.addTo(controller);	

});