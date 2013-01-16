<?php

$thisfile = basename(__FILE__, ".php");

register_plugin(
	$thisfile, 
	'News Manager Create Post Shortcut', 	
	'0.1', 		
	'Carlos Navarro',
	'#', 
	'Adds shortcut link for creating News Manager posts in Page Management sidebar',
	'pages',
	''
);


add_action('pages-sidebar', 'sidebar_nm_createpost');

function sidebar_nm_createpost() { ?>
	<li id="sb_nm_createpost" ><a href="load.php?id=news_manager&amp;edit">Create new post</a></li>
<?php }

// end of file