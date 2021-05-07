<!-- search -->
<div class="search-box">
	<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
		<input class="search-input" type="search" name="s" placeholder="<?php _e( 'Szukaj..', 'html5blank' ); ?>">
		<div class="search--div">
			<button	button class="search-submit" type="submit" role="button"><img class="" src="<?php echo get_template_directory_uri().'/img/search-white.svg'; ?>" alt=""></button>
		</div>
	</form>
</div>
<!-- /search -->