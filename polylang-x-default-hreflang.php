add_filter( 'pll_rel_hreflang_attributes', function( $hreflangs ) {
    if (isset($hreflangs['en'])) {
        $hreflangs['x-default'] = $hreflangs['en'];
    } elseif (isset($hreflangs['lv'])) {
        $hreflangs['x-default'] = $hreflangs['lv'];
    } else {
        $hreflangs['x-default'] = $hreflangs[$current_language];
    }
    return $hreflangs;
} );
