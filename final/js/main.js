$(document).ready(function() {

	$("#goPro").delay(1500).animate({'top': '260px'}, 1000);

    var PSV = new PhotoSphereViewer({
	    panorama: 'images/photosphere.JPG',
	    container: 'photosphere',
	    autorotate: true,
	    default_fov: 70,
	    mousewheel: false,
	  });


							// init
							var controller = new ScrollMagic.Controller({
								globalSceneOptions: {
									triggerHook: 'onLeave'
								}
							});

							// get all slides
							var slides = document.querySelectorAll("section.panel");

							// create scene for every slide
							for (var i=0; i<slides.length; i++) {
								new ScrollMagic.Scene({
										triggerElement: slides[i]
									})
									.setPin(slides[i])
									.addIndicators() // add indicators (requires plugin)
									.addTo(controller);
							};


});
