<div class="label label-primary">
	Tiger Robotics wishes to thank our sponsors. We couldn't keep going without them. Please click on the logos to visit their websites.
</div>

<?php
$sponsors = array
(
	'1' => array
	(
		'Ingersoll Rand Foundation' => array
		(
			'link' => 'http://company.ingersollrand.com/ircorp/en/index.html',
			'image' => 'ingersollrand.jpg'
		)
	),
	'2' => array
	(
		'Textron' => array
		(
			'link' => 'http://www.textron.com/',
			'image' => 'textron.jpg'
		),
		'NDEP' => array
		(
			'link' => 'http://www.ndep.us/',
			'image' => 'ndep.jpg'
		)
	),
	'3' => array
	(
		'iFixit' => array
		(
			'link' => 'https://www.ifixit.com/',
			'image' => 'ifixit.jpg'
		),
		'PAE' => array
		(
			'link' => 'http://www.pae.com/',
			'image' => 'pae.jpg'
		),
		'Lewis Trailer Sales' => array
		(
			'link' => 'http://lewistrailers.com/',
			'image' => 'lewistrailers.jpg'
		),
	),
	'6' => array
	(
		'Dr. Donna Dudziak' => array
		(
			'layer' => '6',
			'link' => 'http://uplandsurgeons.com/surgeons/donna_dudziak_md',
			'image' => false
		),
		'Bayou Steel' => array
		(
			'layer' => '6',
			'link' => 'http://www.bayoumetalsupply.com/',
			'image' => false
		),
		'CGB' => array
		(
			'layer' => '6',
			'link' => 'http://www.cgb.com/',
			'image' => false
		),
		'Hank\'s Stump Grinding' => array
		(
			'layer' => '6',
			'link' => 'http://www.stumpgrindinglouisiana.com/',
			'image' => false
		),
		'NOLA Lending Group' => array
		(
			'layer' => '6',
			'link' => 'https://nolalending.com/',
			'image' => false
		)
	)

	/*
	'Sponsor Name' => array
	(
		'layer' => #ofImages/LinksPerLine,
		'link' => 'url',
		'image' => 'image file.jpg'/false for no image
	),
	*/
);

display_sponsors($sponsors, $media_sponsors);
?>