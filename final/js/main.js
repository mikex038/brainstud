$(document).ready(function() {

	$("#goPro").delay(1500).animate({'top': '260px'}, 1000);

    var PSV = new PhotoSphereViewer({
	    panorama: 'images/photosphere.JPG',
	    container: 'photosphere',
	    autorotate: true,
	    default_fov: 70,
	    mousewheel: false,
	  });


});
