<section id="eng">
	<?php include('categories.php') ; ?>

	
	<!-- Recommended Playlists List [s] -->
	<section id="recommended" class="clearfix">
		<div class="recommended recommended-list">
			<h3>Recommended Playlists</h3>
			<?php 
			if(count($list)) {
				foreach ($list as $special) {
			?>
			<div class="hd">
				<h4><a href="/video/list/id/<?php echo $special['special']['id']; ?>"><?php echo $special['special']['name']; ?></a></h4>
				<a href="/video/list/id/<?php echo $special['special']['id']; ?>" class="more">More>></a>
			</div>
			<div class="bd">
				<ul>
				<?php if(count($special['items'])) {
				foreach ($special['items'] as $item) {
				?>
					<li>
						<figure class="pic">
							<a href="/video/list/id/<?php echo $special['special']['id'] . '/vid/' . $item['id']; ?>"><img src="<?php echo $item['coverRes']; ?>" alt="recommended" width="196" height="110"/>
							<span class="time"><?php echo $item['videoEpisodes'][0]['duration']; ?></span></a>
						</figure>
						<p class="title"><a href="/video/list/id/<?php echo $special['special']['id'] . '/vid/' . $item['id']; ?>"><?php echo strlen($item['title']) > 59 ? substr($item['title'],0,59) . '...': $item['title'] ; ?></a></p>
						<p class="info"><?php echo number_format($item['playCount']); ?> views <?php echo $this->formatDate($item['latestEpisodeDate']); ?></p>
						<div class="download-btn for-mobile">
							<a href="http://dl-master.snappea.com/installer/snaptube/latest/Click_me_to_install_SnapTube_tube_homepage.apk" onclick="ga('send', 'event', 'snaptubevideo.com', 'snaptube', 'download');" class="btn">Download</a>     
						</div>
					</li> 
					<?php }}?>
				</ul>
			</div> 
			<?php }} ?> 
		</div>
	</section>
	<!-- Recommended Playlists List [e] -->
</section>
