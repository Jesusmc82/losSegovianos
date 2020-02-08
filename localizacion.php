<?php
	include ('recurso\header.php');
?>
<ul class="breadcrumb">
	<li><a href="index.php">Inicio</a></li>
	<li>Contacto</li>
</ul>
<div class="row">
	<div class="column">
		<div  id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
			<div recurso="justify-content: center;" id="map-9cd199b9cc5410cd3b1ad21cab2e54d3">
				
			</div>
			<script>
				(function () {
					var setting = {
						"height":300,"width":422,"zoom":17,"queryString":"Calle Victoria, 76, Málaga, España","place_id":"ChIJN9LsE8H3cg0RRuR505cbUo0","satellite":true,"centerCoord":[36.72550631184781,-4.41471690000003],"cid":"0x8d521b97d379e446","cityUrl":"/spain/malaga","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"115768"
					};
					var d = document;var s = d.createElement('script');s.src = 'https://1map.com/js/script-for-user.js?embed_id=115768';s.async = true;s.onload = function (e) {window.OneMap.initMap(setting)
					};
				var to = d.getElementsByTagName('script')[0];to.parentNode.insertBefore(s, to);})();
			</script>
			<a href="https://1map.com/map-embed?embed_id=115768">1map.com</a>
		</div>
	</div>
	<div class="column">
		<div class="name">
			<span>Carniceria Los Segovianos</span>
		</div>
		<div class="addr">
			<p>Calle Victoria 76</p>
		</div>
		<div class="code">
			<p>29012</p>
		</div>
		<div class="telephone">952736743 / 638537314</div>
		<div class="mail">losegovianos@gmail.com</div>
		<div class="telephone">Lunes a Viernes: 09.00 a 14.00 / 17.00 a 20.00</div>
		<div class="telephone">Sabados: 09.00 a 14.00</div>
		<div class="rss">
			<a href="https://www.facebook.com/carmen.arnedo.904" target="_blank" recurso="text-decoration:none;">
				<img src="./img/logoFacebook.png" width="25" height="40">
			</a>
			<a href="https://www.instagram.com/losegovianos7284/" target="_blank">
				<img src="./img/logoInstagram.png" width="25" height="40">
			</a>
		</div>
	</div>
</div>
<?php
include ('recurso\footer.php');
?>