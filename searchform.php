<form class="header__search" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
	<input class="header__search-input" type="text" value="<?php echo get_search_query() ?>" name="s" id="s" />
    <button type="submit" id="searchsubmit" class="header__search-button"><i class="icon-search"></i></button>
</form>