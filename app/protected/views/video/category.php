<div id="eng">
	<?php require 'categories.php' ; ?>

	<!-- Recommended Playlists Detail [s] -->
	<section id="recommended" class="clearfix">
		<div class="recommended recommended-list recommende-listdetail">
			<h3><?php if(isset($list['videos'])){echo $alias;}else{echo 'Categories'; } ?></h3> 
			<?php if(isset($list['videos'])) {?>
			
			<div class="bd">
				<ul>
				<?php if(count($list['videos'])){
				foreach ($list['videos'] as $video) { 
				?>  
					<li>
						<figure class="pic">
							<a href="/video/category/alias/<?php echo $alias . '/vid/' . $video['id']; ?>"><img src="<?php echo $video['pictures']['small'][0]; ?>" alt="recommended" />
							<span class="time"><?php if(count($video['videoEpisodes'])) echo $video['videoEpisodes'][0]['duration']; ?></span>
							<span class="overlay"></span></a>
						</figure>
						<p class="title"><a href="/video/category/alias/<?php echo $alias . '/vid/' . $video['id']; ?>"><?php echo strlen($video['title']) > 59 ? substr($video['title'],0,59) . '...': $video['title'] ; ?></a></p>
						<p class="info"><?php echo number_format($video['playCount']); ?> views </p>
					</li> 

				<?php }}?>	
				</ul>
			</div>
			<?php }else{

				if(count($list)){
					foreach($list as $name => $category){
			?>

			<div class="hd">
				<h4><a href="/video/category/alias/<?php echo $name; ?>"><?php echo $name; ?></a></h4>
				<a href="/video/category/alias/<?php echo $name; ?>" class="more">More>></a>
			</div>
			<div class="bd">
				<ul>
					<?php 
					if(count($category['videos'])){
						foreach($category['videos'] as $video){
					?>
					<li>
						<figure class="pic">
							<a href="/video/category/alias/<?php echo $name .'/vid/' .  $video['id']; ?>"><img src="<?php echo $video['pictures']['small'][0]; ?>" alt="recommended" />
							<span class="time"><?php if(count($video['videoEpisodes'])) echo $video['videoEpisodes'][0]['duration']; ?></span>
							<span class="overlay"></span></a>
						</figure>
						<p class="title"><a href="/video/category/alias/<?php echo $name . '/vid/' .  $video['id']; ?>"><?php echo strlen($video['title']) > 59 ? substr($video['title'],0,59) . '...': $video['title'] ; ?></a></p>
						<p class="info"><?php echo number_format($video['playCount']); ?> views</p>
					</li>
					<?php }}?>
				</ul>
			</div>
			<?php }}}?>
		</div>

	</div>
</section>
<!-- Recommended Playlists Detail [e] -->
</div>
