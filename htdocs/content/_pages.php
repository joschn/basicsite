<?php

/*
 * Hier stehen einfach alle Seiten hintereinander. Erst in navi.php
 * werden die Navigation-Menüs zusammengestellt.
 *********************************************************************/

$pages = array(
	$GLOBALS['index_id'] => array(
		'name'	=> '1stContentOfTitleTag',
//		'teaser'=> 'Für ein gesundes Zuhause.',
		'teaser'=> 'TeaserAndContentOfTitleTag',
		'title'	=> 'Zur Startseite',
		'description' => 'MetaDescription',
		'keywords' => 'MetaKeywords'
	),

	'foo1' => array(
		//'class'	=> 'special',
		'name'	=> 'Foo 1',
		'teaser'=> 'Teaser for foo 1',
		'title'	=> 'Title for foo 1',
		'description' => '',
		'keywords' => ''
	),
	'foo2' => array(
		//'class'	=> 'special',
		'name'	=> 'Foo 2',
		'teaser'=> 'Teaser for foo 2',
		'title'	=> 'Title for foo 2',
		'description' => '',
		'keywords' => ''
	),
	'foo3' => array(
		//'class'	=> 'special',
		'name'	=> 'Foo 3',
		'teaser'=> 'Teaser for foo 3',
		'title'	=> 'Title for foo 3',
		'description' => '',
		'keywords' => ''
	),

	'impressum' => array(
		'name'	=> 'Impressum',
		'title'	=> 'Kontakt zum Herausgeber',
		'description' => '',
		'keywords' => ''
	),
	'downloads' => array(
		'name'	=> 'Downloads',
		'title'	=> 'Informationen laden',
		'description' => '',
		'keywords' => ''
	),
	'kontakt' => array(
		'name'	=> 'Kontakt',
		'title'	=> 'Kontaktdaten'
    ),
/*
	'id' => array(
	    'class' => 'optional',
		'name'	=> 'bla',
		'teaser'=> 'Das ist ein Blindtext zu “Mediation”. Hier stehen max. zwei Zeilen dazu.',
		'title'	=> 'title',
		'description' => '',
		'keywords' => ''
	),
*/
);

//var_dump($pages);
