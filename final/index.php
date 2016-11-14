<!DOCTYPE html>
<html>
<head>
<title>VR Web Brainstud</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" href="js/photosphere/photo-sphere-viewer.css">

</head>
<body>

<?php include('header.inc.php');
$header = new BrainHeader();
$header->getStart();?>

	<section class="subsection-intro1">
	<div class="text" id="textinfo1">
		<h1>Een korte inleiding</h1>
		<p>Zie jij door de GoPro’s het bos niet meer? Dan is deze 360º tutorial perfect voor jou. 360 video’s is een nieuwe functie waar al meerdere bedrijven gebruik van maken. Deze video’s kunnen bekeken worden met een virtual reality bril of door het fysiek bewegen van bijvoorbeeld je smartphone of tablet. In deze tutorial word stap voor stap uitgelegd hoe jij een perfect gelukte 360 video in elkaar zet.</p>
	</section>
	<img id="goPro" src="images/gopro.png">
	<section class="subsection-intro11"> 

	</section>

	<section class="subsection-intro2">
	<img id="star" src="images/star.png">
	<div class="text" id="textinfo2">
		<h1>Een uitleg over 360º</h1>
		<p>Verder kijken in de wereld van 360º? In deze uitleg word er gewerkt met GoPro’s, maar wat heb je nodig voor een 360º video. Om een 360º video te maken met GoPro’s heb je minimaal zes GoPro’s nodig. De GoPro’s gaan in een 360º mount. Zodat elke richting word gefilmd.</p>
	</section>


	<section class="subsection-intro3">
	<div class="text" id="textinfo3">
		<h1>Animatie met welke materialen je nodig hebt</h1>
		<p>In deze animatie leer je alles wat je nodig om 360º op te nemen</p>
		<div  id="iframe1">
			<iframe src="https://player.vimeo.com/video/189934062" width="960" height="540" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div>

	</section>

	<div id="photosphere"></div>
	<section class="subsection-intro4">
	</section>

	<section class="subsection-intro5">
	</section>

	<section class="subsection-intro6">
		<div id="iframe2">
		<iframe src="https://player.vimeo.com/video/190059555" width="900" height="510" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div>
	</section>

	<section class="subsection-intro7">

	</section>

<?php include('footer.inc.php');?>
<?php $header->getEnd(); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
	<script src="js/photosphere/three.js/three.min.js"></script>
	<script src="js/photosphere/D.js/lib/D.min.js"></script>
	<script src="js/photosphere/uevent/uevent.min.js"></script>
	<script src="js/photosphere/doT/doT.min.js"></script>
	<script src="js/photosphere/threejs-examples/examples/js/renderers/CanvasRenderer.js"></script>
	<script src="js/photosphere/threejs-examples/examples/js/renderers/Projector.js"></script>
	<script src="js/photosphere/threejs-examples/examples/js/postprocessing/EffectComposer.js"></script>
	<script src="js/photosphere/threejs-examples/examples/js/postprocessing/RenderPass.js"></script>
	<script src="js/photosphere/threejs-examples/examples/js/postprocessing/ShaderPass.js"></script>
	<script src="js/photosphere/threejs-examples/examples/js/postprocessing/MaskPass.js"></script>
	<script src="js/photosphere/threejs-examples/examples/js/shaders/CopyShader.js"></script>
	<script src="js/photosphere/threejs-examples/examples/js/controls/DeviceOrientationControls.js"></script>
	<script src="js/photosphere/photo-sphere-viewer.js"></script>
</body>
</html>
