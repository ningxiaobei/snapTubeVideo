<section id="eng">
	<?php require 'categories.php' ; ?>

	<article class="videoDetail">

		<div class="hd clearfix">

			<div class="cover" >
				<img src="<?php echo $data['pictures']['large'][0]; ?>">
			</div>
			<div class="attr">
				<h1><?php echo $data['title']; ?></h1>
				<div class="views"><?php echo number_format($data['playCount']); ?> Views</div>
				<div class="btns">
					<a href="<?php echo $data['videoEpisodes'][0]['playUrl'][0];?>" target="_blank" class="btn">Play</a>
					<a href="http://dl-master.snappea.com/installer/snaptube/latest/Click_me_to_install_SnapTube_tube_homepage.apk" target="_blank" class="btn mobile">Download</a>
					<a href="<?php echo $data['videoEpisodes'][0]['playUrl'][0];?>" target="_blank" class="mobile">Play</a>
				</div>
			</div>
		</div>

		<div class="bd">
			<div class="contentInfo"><strong>Description</strong><br>
			<span>Published on <?php echo date("M d,Y",$data['createdDate']);?></span></div>
			<div class="content">
				<?php echo  $data['description']; ?> 
			</div>
		</div>

	</article>

	<!-- More Popular videos [s] -->
	<section class="clearfix">
		<div class="popular-video recommended recommended-list">
			<div class="hd">
	        	<h4><a href="/video/popular">More Popular videos</a></h4>
	      	</div>
	      	<div class="bd">
		        <ul>
		        	<?php 
					if(count($popular['items'])){
					foreach($popular['items'] as $key => $item){ 
				 ?>
			        <li>
			          <figure class="pic">
			            <a href="/video/popular/vid/<?php echo $item['id']; ?>"><img src="<?php echo $item['pictures']['small'][0]; ?>" alt="recommended" />
			            <span class="time"><?php echo $item['videoEpisodes'][0]['duration']; ?></span>
			            <span class="overlay"></span></a>
			          </figure>
			          <p class="title"><a href="/video/popular/vid/<?php echo $item['id'];?>"><?php echo strlen($item['title']) > 59 ? substr($item['title'],0,59) . '...': $item['title'] ; ?></a></p>
			          <p class="info"><?php echo number_format($item['playCount']); ?> views <?php echo $this->formatDate($item['latestEpisodeDate']); ?></p>
			        </li>
			        <?php }}?>
		        </ul>
	      	</div>
			
		</div>
	</section>
	<!-- More Popular videos [e] -->
</section>