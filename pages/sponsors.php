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
	'4' => array
	(
		'Dr. Donna Dudziak' => array
    (
      'link' => 'http://uplandsurgeons.com/surgeons/donna_dudziak_md',
      'image' => false
    ),
		'Poole Lumber Company' => array
		(
			'link' => 'http://poolelumber.com/',
			'image' => false
		)
	),
	'6' => array
	(
		'Paradigm Health System' => array
    (
      'link' => 'http://www.paradigmhealth.net/wordpress/',
      'image' => false
    ),
		'Bayou Steel' => array
		(
			'link' => 'http://www.bayoumetalsupply.com/',
			'image' => false
		),
		'CGB' => array
		(
			'link' => 'http://www.cgb.com/',
			'image' => false
		),
		'Hank\'s Stump Grinding' => array
		(
			'link' => 'http://www.stumpgrindinglouisiana.com/',
			'image' => false
		),
		'NOLA Lending Group' => array
		(
			'link' => 'https://nolalending.com/',
			'image' => false
		),
		'Children\'s International' => array
  	(
    	'link' => 'http://childrensinternationalmedicalgroup.com/',
    	'image' => false
  	),
    'Northshore Natural Foods' => array
    (
      'link' => 'https://www.facebook.com/northshorenaturalfoods',
      'image' => false
    ),
    'Who Dat Shoppe' => array
    (
      'link' => 'http://www.thewhodatshoppe.com/',
      'image' => false
    ),
    'Vera\'s Seafood' => array
    (
      'link' => '#',
      'image' => false
    ),
    'JG Marine' => array
    (
      'link' => '#',
      'image' => false
    )
	)

	/*
	'Sponsor Name' => array
	(
		'link' => 'url',
		'image' => 'image file.jpg'/false for no image'
	),
	*/
);

display_sponsors($sponsors, $media_sponsors);
?>
