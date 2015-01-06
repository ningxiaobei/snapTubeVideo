		<div class="mask for-mobile hide"></div>
		<div class="site-nav for-mobile">
			<a href="#" class="toggle-nav"><b class="menu-icon"></b></a>
			<nav class="main-nav nav-list " role="navigation">
			  <ul>
			    <li><a href="/">Homepage</a></li>
				<li class="category">
					<a href="/video/category">categories</a>
					<!--div class="sub hide">
						<?php if(count($this->categories)){
						foreach ($this->categories as $item) {
						?>   
						<a href="/video/category/alias/<?php echo $item['alias']; ?>"><?php echo $item['alias']; ?></a>      
						<?php }}?>
					</div-->
				</li>
				<li<?php if($this->currentPage == 'list') echo ' class="active"'; ?>><a href="/video/list">List</a></li>
				<li<?php if($this->currentPage == 'top') echo ' class="active"'; ?>><a href="/video/top">Top</a></li>
			  </ul>
			</nav>
		</div>