<section id="eng">
<?php require 'categories.php' ; ?>
	<!-- Recommended Playlists Detail [s] -->
	<section id="recommended" class="clearfix">
		<div class="recommended recommended-list recommende-listdetail">
			<h3><?php echo $list['special']['name']; ?></h3> 
			<div class="bd">
				<ul>
					<?php if(count($list['items'])){
						foreach ($list['items'] as $video) { 
					?> 

					<li>
						<figure class="pic">
							<a href="/video/list/id/<?php echo $list['special']['id'] . '/vid/' . $video['id']; ?>"><img src="<?php echo $video['pictures']['small'][0]; ?>" alt="recommended" />
							<span class="time"><?php echo $video['videoEpisodes'][0]['duration']; ?></span>
							</a>
						</figure>
						<p class="title"><a href="/video/list/id/<?php echo $list['special']['id'] . '/vid/' . $video['id']; ?>"><?php echo strlen($video['title']) > 59 ? substr($video['title'],0,59) . '...': $video['title'] ; ?></a></p>
						<p class="info"><?php echo number_format($video['playCount']); ?> views <?php echo $this->formatDate($video['latestEpisodeDate']); ?></p>
					</li> 
					<?php }}?>	
				</ul>
			</div>

		</div>

	</div>
</section>
<!-- Recommended Playlists Detail [e] -->
</section>
