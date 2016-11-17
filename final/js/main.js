$(document).ready(function() {


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


});