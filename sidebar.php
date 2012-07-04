<div id="sidebar">
	<ul class="section about">
		<li>
		<?php bloginfo('description'); ?>
		<br><a href="/about/">Learn more</a>
		<br>
		</li>
	</ul>
		
	<ul class="section categories">

		<li><h2>Categories</h2>
			<ul>
			<?php wp_list_categories('show_count=1&title_li='); ?>
			</ul>
		</li>

	</ul>
	
	<ul class="section tags">

		<li><h2>Tags</h2>
			<ul>
			<?php wp_tag_cloud('smallest=9&largest=9'); ?>
			</ul>
		</li>

	</ul>
	
	<ul class="section archives">

		<li><h2>Archives</h2>
			<ul>
			<?php wp_get_archives('type=monthly'); ?>
			</ul>
		</li>

	</ul>
	
	<ul class="section follow">

		<li><h2>Follow</h2>
			<ul>
			<li><a href="http://feeds.feedburner.com/transformation-strategy">RSS Feed</a></li>
			</ul>
		</li>

	</ul>
	
	<ul class="section bookmarks">
		<?php 
			wp_list_bookmarks();

		?>
	</ul>
</div>