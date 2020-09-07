<form method="get" action="<?= esc_url( home_url( '/' ) ); ?>">
    <div class="form-group">
        <input type="search" value="<?php echo get_search_query(); ?>" name="s" placeholder="Rechercher article" required>
        <button type="submit"><span class="icon fa fa-search"></span></button>
    </div>
</form>