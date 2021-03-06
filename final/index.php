<!DOCTYPE html>
<html>

<head>

	<title>VR Web Brainstud</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!-- Own css include -->
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<!-- Photosphere css include -->
	<link rel="stylesheet" href="js/photosphere/photo-sphere-viewer.css">

</head>

<body>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Header include -->
	<?php include('header.inc.php');
	$header = new BrainHeader();
	$header->getStart();?>

	<!-- Content start -->

	<!-- The Intro with basic explaination -->
	<section class="subsection-intro1">
	<div id="textinfo1">
		<h1>Een korte inleiding</h1>
		<p>Zie jij door de GoPro’s het bos niet meer? Dan is deze 360º tutorial perfect voor jou. 360 video’s is een nieuwe functie waar al meerdere bedrijven gebruik van maken. Deze video’s kunnen bekeken worden met een virtual reality bril of door het fysiek bewegen van bijvoorbeeld je smartphone of tablet. In deze tutorial word stap voor stap uitgelegd hoe jij een perfect gelukte 360 video in elkaar zet.</p>
	</div>
	</section>

	<!-- The GoPro -->
	<img id="goPro" src="images/gopro.png">
	<section class="subsection-intro11">

	</section>

	<section class="subsection-intro2">
	<!-- Shooting star -->
	<img id="star" src="images/star.png">
		<!-- Second bit of text with information -->
		<div class="text" id="textinfo2">
			<h1>Een uitleg over 360º</h1>
			<p>Je hebt minimaal 6 GoPro’s nodig om een 360º
			video te maken. Het verschil tussen het gebruiken van minder en meer GoPro’s is dat je een ‘smoother’ beeld krijgt bij het gebruik van meer GoPro’s.<br><br>
			Het is heel belangrijk dat je georganiseerd te werk gaat. Plak op elke GoPro een eigen zodat je weet welk beeld bij welke GoPro hoort. Houd er ook rekening mee dat de mount recht staat. Dus evenwijdig aan de horizon.</p>
		</div>
	</section>

	<!-- Black background with Mac -->
	<section class="subsection-intro3">
		<!-- Animation video on 360 degrees  -->
		<div id="iframe1">
			<iframe src="https://player.vimeo.com/video/189934062?title=0&byline=0&portrait=0" width="960" height="540" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div>

	</section>

	<!-- Panorama photo -->
	<div id="photosphere"></div>
	<!-- Cave image -->
	<section class="subsection-intro4">

	</section>

	<!-- Information regarding "stitching"  -->
	<section class="subsection-intro5">
		<div class="text" id="textinfo5">
			<h1>Stitchen</h1>
			<p>Een probleem waar veel mensen tegen aan lopen is het stitchen, het aan elkaar plakken van de verschillende beelden. Om dit goed uit te kunnen voeren word er gewerkt met het programma Autopano. Waar je wel rekening mee moet houden is dat er kosten aan het programma zijn verbonden. In de volgende video word exact uitgelegd hoe je dit aanpakt.</p>
		</div>
	</section>

	<!-- Mac on background -->
	<section class="subsection-intro6">
		<!-- Video on how to create 360 videos -->
		<div id="iframe2">
			<iframe src="https://player.vimeo.com/video/190059555?title=0&byline=0&portrait=0" width="900" height="510" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div>
	</section>

	<section class="subsection-intro7">
		<div class="text" id="textinfo7">
			<!-- Information on how one puts a video online  -->
			<h1>De video online zetten</h1>
			<p>Om de video online te kunnen zetten moet je eerst de benodigde metadata toevoegen. Dat kan met de app’360 Video MetaData’.<br>
			1. Pak het zipbestand uit en open de app.<br>
			2. Selecteer het videobestand.<br>
			3. Vind daarna het selectievakje Spherical aan en klik op Save as (Let op dat je het selectievakje ‘3D Top-bottom’ niet aanvinkt!).<br>
			4. Sla het bestand vervolgens op. <br>
			5. Nu kan het bestand naar YouTube geupload worden.<br>Het kan een uur duren voordat de 360&deg;-weergave beschikbaar is.</p>
		</div>
	</section>

	<!-- Footer include -->
	<?php include('footer.inc.php');?>
	<?php $header->getEnd(); ?>

	<!-- jQuery include -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>

	<!-- ScrollMagic tween -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>

    <!-- Scrollmagic plug-in -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>

	<!-- Photosphere includes -->
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

	<!-- Own script -->
	<script src="js/main.js" type="text/javascript"></script>
</body>

</html>
