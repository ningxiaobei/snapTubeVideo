
    <section id="hero">
      <div class="intro">
        <div class="wrapper-table">
          <div class="wrapper-table-cell">
            <h1>Download YouTube Videos and Music</h1>
            <h2>Easy, fast, and free</h2><a href="http://dl-master.snappea.com/installer/snaptube/latest/Click_me_to_install_SnapTube_tube_homepage.apk" onclick="ga('send', 'event', 'snaptubevideo.com', 'snaptube', 'download');" class="btn">Download</a>
          </div>
        </div>
      </div>
      <div class="slides">
        <div class="wrapper-table">
          <div class="wrapper-table-cell"><i class="windows-screenshot"></i></div>
        </div>
      </div>
      <div class="learn-more"><a href="#features" onclick="ga('send', 'event', 'snaptubevideo.com', 'snaptube', 'learn-more');">Learn More<i></i></a></div>
    </section>
    <section id="features" class="features for-web">
      <ul>
        <li>
          <h3>DOWNLOAD IN MULTIPLE RESOLUTIONS</h3>
          <p>MP4 videos are available in resolutions: choose the small size of 360 pixels or the high-definition 720 pixels.</p>
        </li>
        <li>
          <h3>DIRECT MP3 DOWNLOADS</h3>
          <p>Download any YouTube music video directly as an MP3 file. No extra encoding process or plugin needed. Save space and listen to your favorite music video anytime you want.</p>
        </li>
        <li>
          <h3>SEARCH VIDEOS WITH KEYWORDS</h3>
          <p>Search a video with keywords. Easily find the exact video you want.</p>
        </li>
        <li>
          <h3>DISCOVER NEW VIDEOS</h3>
          <p>Explore videos in your favorite categories like Music and Movies. Discover new videos with recommended lists from our curators.</p>
        </li>
        <li>
          <h3>MANAGE VIDEO DOWNLOADS</h3>
          <p>Pause, cancel or resume a video download. Delete the videos you don't need anymore. Manage all of your video downloads in one place.</p>
        </li>
        <li>
          <h3>NO ADS</h3>
          <p>Clean design lets you focus on your videos. No annoying ads.</p>
        </li>
      </ul>
    </section>
    
    <section id="eng">
      <!-- categories [s] -->
      <div class="download-more for-web"><a href="#categories" onclick="ga('send', 'event', 'snaptubevideo.com', 'snaptube', 'download-more');">Lot's of new videos you can download<i></i></a>
      </div>
      <section id="categories" class="categories">
        <h3>Categories</h3>
        <ul>
          <?php if(count($this->categories)){
                  foreach ($this->categories as $item) {
          ?>   
          <li><a href="/video/category/alias/<?php echo $item['alias']; ?>"><?php echo $item['alias']; ?></a></li>       
          <?php }}?>
        </ul>
      </section>
      <!-- categories [e] -->

      <section id="main" class="clearfix">
        <!-- Recommended Playlists [s] -->
        <article id="recommended">
          <div class="recommended">
            <h3>Recommended Playlists</h3>
            <?php if(count($specials)) {
                foreach ($specials as $special) {
            ?>
            <div class="hd">
              <h4><a href="/video/list/id/<?php echo $special['special']['id'];?>"><?php echo $special['special']['name']; ?></a></h4>
              <a href="/video/list/id/<?php echo $special['special']['id'];?>" class="more">More>></a>
            </div>
            <div class="bd">
              <ul>
                <?php if(count($special['items'])) {
                    foreach ($special['items'] as $item) {
                ?>
                <li>
                  <figure class="pic">
                    <a href="/video/list/id/<?php echo $special['special']['id'] . '/vid/' . $item['id'];?>"><img src="<?php echo $item['coverRes']; ?>" alt="recommended" width="196" />
                    <span class="time"><?php echo $item['videoEpisodes'][0]['duration']; ?></span></a>
                  </figure>
                  <p class="title"><a href="/video/list/id/<?php echo $special['special']['id'] . '/vid/' . $item['id'];?>"><?php echo strlen($item['title']) > 59 ? substr($item['title'],0,59) . '...': $item['title'] ; ?></a></p>
                  <p class="info"><?php echo number_format($item['playCount']); ?> views <?php echo $this->formatDate($item['createdDate']); ?></p>
                  <div class="download-btn for-mobile">
                    <a href="http://dl-master.snappea.com/installer/snaptube/latest/Click_me_to_install_SnapTube_tube_homepage.apk" onclick="ga('send', 'event', 'snaptubevideo.com', 'snaptube', 'download');" class="btn">Download</a>     
                  </div>
                </li> 
                <?php }}?>
              </ul>
            </div> 
            <?php }} ?> 
            
            <div class="more-list"><a href="/video/list">More lists&gt;&gt;</a></div>
          </div>
        </article>
        <!-- Recommended Playlists [e] -->

        <!-- Top Weekly Download [s] -->
        <aside id="top-weekly">
          <div class="top-weekly">
            <h3>Top Weekly Download</h3>
            <ul class="clearfix">
              <?php 
                        if(count($top['items'])){
                        foreach($top['items'] as $key => $item){ 
              ?>
              <li class="clearfix">
                <figure class="pic">
                  <a href="/video/top/vid/<?php echo $item['id']; ?>"><img src="<?php echo $item['pictures']['small'][0]; ?>" alt="top_weekly" /></a>
                  <span class="time"><?php echo $item['videoEpisodes'][0]['duration']; ?></span>
                </figure>
                <div class="desc">
                  <h4 class="title"><a href="/video/top/vid/<?php echo $item['id']; ?>"><i><?php echo $key+1; ?>.</i><?php echo $item['title']; ?></a></h4>
                  <p class="info"><?php echo $item['weeklyDownloadCount']; ?> Download</p>
                  <div class="download-btn for-mobile">
                    <a href="http://dl-master.snappea.com/installer/snaptube/latest/Click_me_to_install_SnapTube_tube_homepage.apk" onclick="ga('send', 'event', 'snaptubevideo.com', 'snaptube', 'download');" class="btn">Download</a>     
                  </div>
                </div>
              </li>
              <?php }}?>
                         
            </ul>
            <div class="more"><a href="/video/top">More&gt;&gt;</a></div>
          </div>
        </aside>
        <!-- Top Weekly Download [e] --> 
      </section>
    </section>

    <div class="learn-more for-mobile"><a href="#feature" onclick="ga('send', 'event', 'snaptubevideo.com', 'snaptube', 'learn-more');">Learn More<i></i></a></div>
      
    <section class="features for-mobile" id="feature">
      <ul>
        <li>
          <h3>MULTIPLE RESOLUTIONS</h3>
          <p>MP4 videos available in 360 pixels to 720 pixels.</p>
        </li>
        <li>
          <h3>DOWNLOAD AS MP3</h3>
          <p>Direct download. No extra encoding process or plugin needed.</p>
        </li>
        <li>
          <h3>SEARCH</h3>
          <p>Search a video with keywords. Find the video you want.</p>
        </li>
        <li>
          <h3>DISCOVER</h3>
          <p>Explore videos in your favorite categories like Music and Movies.</p>
        </li>
        <li>
          <h3>MANAGE</h3>
          <p>Pause, cancel or resume a video download. Delete videos you don't need anymore. </p>
        </li>
        <li>
          <h3>NO ADS</h3>
          <p>Clean design lets you focus on your videos. No annoying ads.</p>
        </li>
      </ul>
    </section>

    <section id="engagement" class="for-web">
      <h3>Now start using SnapTube</h3>
      <p><a href="http://dl-master.snappea.com/installer/snaptube/latest/Click_me_to_install_SnapTube_tube_homepage.apk" onclick="ga('send', 'event', 'snaptubevideo.com', 'snaptube', 'download');" class="btn">Download</a></p>
    </section>