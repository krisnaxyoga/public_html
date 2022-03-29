<form id="searchform" method="get" action="<?php echo home_url('/'); ?>" class="form-inline float-right position-relative search-features">
    <input class="form-control mr-sm-2 form-search" name="s" type="search" placeholder="Search Here" aria-label="Search" value="<?php the_search_query(); ?>"/>
    <i class="fa fa-search position-absolute"></i>
</form>