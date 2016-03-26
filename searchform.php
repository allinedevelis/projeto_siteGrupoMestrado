<form role="search" method="get" name="frmSearch" id="frmSearch" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <label>
        <input type="search" class="search-field"
            placeholder="<?php echo esc_attr_x( 'Buscar', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Buscar por:', 'label' ) ?>" />
    </label>
    <button type="submit" id="btnSearch" class="search-submit"><i class="fa fa-search"></i></button>
</form>