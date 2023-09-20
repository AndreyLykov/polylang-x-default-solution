add_filter( 'pll_rel_hreflang_attributes', function( $hreflangs ) {
	$hreflangs['x-default'] = $hreflangs['en'];
	return $hreflangs;
} );