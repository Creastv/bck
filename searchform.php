<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
    <label>
        <span>Szukaj</span>
        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Wpisz frazę …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Wpisz frazę:', 'label' ) ?>" />
    </label>
    <input type="submit" class="btn btn-small" value="<?php echo esc_attr_x( 'Szukaj', 'submit button' ) ?>" />
</form>