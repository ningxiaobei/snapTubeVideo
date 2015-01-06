		<!-- List Navigation [s] -->
		<nav id="subNav" class="sub-nav clearfix for-web">
			<ul>
				<li><a href="/">Homepage</a></li>
				<li<?php if($this->currentPage == 'category') echo ' class="active"'; ?>>
					<a href="/video/category">categories <i class="icon arrow-down"></i></a>
					<div class="sub">
						<?php if(count($this->categories)){
						foreach ($this->categories as $item) {
						?>   
						<a href="/video/category/alias/<?php echo $item['alias']; ?>"><?php echo $item['alias']; ?></a>      
						<?php }}?>
					</div>
				</li>
				<li<?php if($this->currentPage == 'list') echo ' class="active"'; ?>><a href="/video/list">List</a></li>
				<li<?php if($this->currentPage == 'top') echo ' class="active"'; ?>><a href="/video/top">Top</a></li>
			</ul>
		</nav>
		<!-- List Navigation [e] -->

		<!-- Quick Link [s] -->
		<div class="quick-link"><a href="/">Homepage</a>
			<?php if($sitePath){ 
				$index = 1;
				foreach ($sitePath as $key => $link) { 
			?>
			<span>&gt;</span><a href="<?php echo $link; ?>" <?php if(count($sitePath) == $index)echo 'class="current"' ;?>><?php echo $key; ?></a>

			<?php $index = $index+1; }}?>
			</div>
		<!-- Quick Link [e] -->