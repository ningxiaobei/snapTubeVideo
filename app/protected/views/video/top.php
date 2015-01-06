<section id="eng">
	<?php require 'categories.php' ; ?>

	<section id="top-weekly" class="clearfix">
		<div class="top-weekly top-weekly-list">
			<h3>Top Weekly Download</h3>
			<ul class="clearfix">
				<?php 
					if(count($top['items'])){
					foreach($top['items'] as $key => $item){ 
				 ?>
				<li>
					<figure class="pic">
						<a href="/video/top/vid/<?php echo $item['id']; ?>"><img src="<?php echo $item['pictures']['small'][0]; ?>" alt="top_weekly" />
			            	<span class="time"><?php echo $item['videoEpisodes'][0]['duration']; ?></span>
						</a>
					</figure>
					<div class="desc"> 
						 <h4 class="title"><a href="/video/top/vid/<?php echo $item['id']; ?>"><i><?php echo $key+1; ?>.</i><?php echo strlen($item['title']) > 56? substr($item['title'],0,56) . '...': $item['title'] ; ?></a></h4>
						<p class="info"><?php echo number_format($item['weeklyDownloadCount']); ?> Downloads  <?php echo $this->formatDate($item['latestEpisodeDate']); ?></p>
					</div>
				</li>
            		<?php }}?>
			</ul>
		</div>
		</section>
		<!-- Top Weekly Download List [e] -->
</section>