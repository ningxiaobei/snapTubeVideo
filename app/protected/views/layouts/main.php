<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>SnapTube - Download YouTube Videos and Music</title>
		<meta name="description" content="Download YouTube videos to your Android. It’s easy, fast, and free. Get the official version here.">
		<meta name="keywords" content="android, youtube, download">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:image:src" content="http://www.snappea.com/images/snaptube.50ebd0c0.png">
		<meta property="og:image" content="http://www.snappea.com/images/snaptube.50ebd0c0.png">
		<meta itemprop="image" content="http://www.snappea.com/images/snaptube.50ebd0c0.png">
		<link rel="shortcut icon" href="/static/images/favicon2.ico" type="image/x-icon">
		<link rel="icon" href="/static/images/favicon2.ico" type="image/x-icon">
		<link rel="stylesheet" href="/static/css/snaptube.ae38e891.css"/>
		<script>window.html5 = { 'shivCSS': false };</script>
	</head>
	<body class="snaptube">
		<?php require 'siteNav.php' ; ?>
		<header <?php if($this->action->id!="index"){echo "class='small'";}?>><a href="/" class="logo">SnapTube</a>
			<nav><a href="https://www.facebook.com/pages/SnapTube/746438775443012" onclick="ga('send', 'event', 'snaptubevideo.com', 'snaptube', 'facebook');" class="facebook">Facebook</a><a href="https://twitter.com/snaptubeapp" onclick="ga('send', 'event', 'snaptubevideo.com', 'snaptube', 'twitter');" class="twitter">Twitter</a></nav>
		</header> 
		
		<?php echo $content; ?>
		<section id="engagement" class="for-mobile <?php if($this->currentPage == 'detail') echo 'hide'; ?>">
			<h3>Now start using SnapTube</h3>
			<p><a href="http://dl-master.snappea.com/installer/snaptube/latest/Click_me_to_install_SnapTube_tube_homepage.apk" onclick="ga('send', 'event', 'snaptubevideo.com', 'snaptube', 'download');" class="btn">Download</a></p>
		</section>
		<footer>
			<ul>
				<li class="copyright">Copyright &copy; 2015 SnapTube</li>
				<li><a href="//www.snaptubevideo.com/contact">Contact</a></li>
				<li><a href="//www.snaptubevideo.com/terms">Terms</a></li>
				<li><a href="//www.snaptubevideo.com/privacy">Privacy</a></li>
			</ul>
		</footer>
		<div class="scrollToTop"><a href="#top">TOP</a></div>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			
			ga('create', 'UA-56844332-1', 'auto');
			ga('send', 'pageview');
		</script>
		<script src="/static/js/zepto.min.js"></script>
		<script src="/static/js/touch.js"></script>
		<script src="/static/js/responsive-nav.js"></script>
		<script src="/static/js/snaptube.js"></script>
	</body>
</html>