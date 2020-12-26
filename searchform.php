<form class="d-flex" action="<?php echo home_url( '/' )?>">
    <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search" value="<?php get_search_query();?>" name="s"/>
    <button class="btn btn-primary" type="submit">
        Search
    </button>
</form>