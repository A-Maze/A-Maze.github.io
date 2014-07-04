<?php include"../templates/header.php";?>

<div id="head">
	
	<div class="text">
		<img class="quit" src="../images/logo_long.png" />
		<h1> Smoke less, get more</h1>
		<a id="get_app" " target="_blank">COMING SOON</a>
		
	</div>
	<img class="phone" src="../images/phone.png" />

</div>
<div id="trailer">
	<video id="example_video_1" class="video-js vjs-default-skin"
	  controls preload="auto" width="640" height="264"
	  poster="http://video-js.zencoder.com/oceans-clip.png"
	  data-setup='{"example_option":true}'>
	 <source src="http://video-js.zencoder.com/oceans-clip.mp4" type='video/mp4' />
	 <source src="http://video-js.zencoder.com/oceans-clip.webm" type='video/webm' />
	 <source src="http://video-js.zencoder.com/oceans-clip.ogv" type='video/ogg' />
	 <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>
<div id="about">
	<h1> HOW IT WORKS</h1>
	<div class="step">
		<h2>SETUP<h2>
		<img src="../images/setup.png">
		<p>Select your smoking behaviours such as what and how often you smoke. Choose your product which you want to save up for with the money you don't spend on smoking.</p>
	</div>
	<div class="step">
	<h2>QUIT<h2>
	<img src="../images/stop.png">
	<p>Quit smoking and start saving! You can already see your remarkable progress after a day. Check how much your health has improved, how much you've saved and how soon you can buy the product you've been saving up for! Quit with friends and show off on Twitter how long you've been quitting already.</p>
	</div>
	<div class="step">
	<h2>PURCHASE<h2>
	<img src="../images/buy.png">
	<p>When you've saved up enough money buy the product you've been saving up for. Instead of wasting your money on smoking you now got a brand new product of your choice on top of a better health and the fact you've stopped smoking! You can of course buy the product directly through the app.</p>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
    $(".rslides").responsiveSlides();
  });
  
  document.createElement('video');document.createElement('audio');document.createElement('track');
</script>
<?php include"../templates/footer.php";?>