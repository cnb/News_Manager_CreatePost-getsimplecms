<?php

$thisfile = basename(__FILE__, ".php");

register_plugin(
	$thisfile, 
	'Create Post shortcut (News Manager)', 	
	'0.2', 		
	'Carlos Navarro',
	'#', 
	'Adds shortcut link for creating News Manager posts in Page Management sidebar',
	'pages',
	''
);

add_action('pages-sidebar', 'sidebar_nm_createpost');

function sidebar_nm_createpost() { ?>
	<li id="sb_nm_createpost" ><a href="load.php?id=news_manager&amp;edit"><?php i18n('news_manager/NEW_POST'); ?></a></li>
<?php }

// end