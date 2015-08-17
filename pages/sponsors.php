<div class="label label-primary">
	Tiger Robotics wishes to thank our sponsors. We couldn't keep going without them. Please click on the logos to visit their websites.
</div>

<?php
$sponsors = array
(
	'Platinum Sponsors' => array
	(
		'Ingersoll Rand Foundation' => array
		(
			'link' => 'http://company.ingersollrand.com/ircorp/en/index.html',
			'image' => 'ingersollrand.jpg',
			'size' => 12
		),
		'Textron' => array
		(
			'link' => 'http://www.textron.com/',
			'image' => 'textron.jpg',
			'size' => 6
		),
		'NDEP' => array
		(
			'link' => 'http://www.ndep.us/',
			'image' => 'ndep.jpg',
			'size' => 6
		),
		'iFixit' => array
		(
			'link' => 'https://www.ifixit.com/',
			'image' => 'ifixit.jpg',
			'size' => 4
		),
		'PAE' => array
		(
			'link' => 'http://www.pae.com/',
			'image' => 'pae.jpg',
			'size' => 4
		),
		'Lewis Trailer Sales' => array
		(
			'link' => 'http://lewistrailers.com/',
			'image' => 'lewistrailers.jpg',
			'size' => 4
		),
		'NASA' => array
		(
			'link' => 'http://robotics.nasa.gov/',
			'image' => 'nasa.jpg',
			'size' => 4
		),
		'365 Connect' => array
		(
			'link' => 'http://www.365connect.com/',
			'image' => '365connect.jpg',
			'size' => 4
		),
		'St. Tammany Parish School Board' => array
		(
			'link' => 'http://stpsb.com/',
			'image' => 'stpsb.jpg',
			'size' => 4
		)
	),
	'Gold Sponsors' => array
	(
		'Dr. Donna Dudziak' => array
    (
      'link' => 'http://uplandsurgeons.com/surgeons/donna_dudziak_md',
      'image' => false,
			'size' => 3
    ),
		'Dr. Scott Bonson' => array
		(
			'link' => 'http://www.slidellendo.com/',
			'image' => false,
			'size' => 3
		),
		'JL Roberts and Associates' => array
		(
			'link' => 'http://www.jlrpark.com/',
			'image' => false,
			'size' => 3
		),
		'Poole Lumber Company' => array
		(
			'link' => 'http://poolelumber.com/',
			'image' => false,
			'size' => 3
		)
	),
	'Silver Sponsors' => array
	(
		'Bayou Steel' => array
		(
			'link' => 'http://www.bayoumetalsupply.com/',
			'image' => false,
			'size' => 2
		),
		'CGB' => array
		(
			'link' => 'http://www.cgb.com/',
			'image' => false,
			'size' => 2
		),
		'Children\'s International' => array
  	(
    	'link' => 'http://childrensinternationalmedicalgroup.com/',
    	'image' => false,
			'size' => 2
  	),
		'Crescent Belt Manufacturers' => array
  	(
    	'link' => 'http://www.crescentbelt.com/site.php',
    	'image' => false,
			'size' => 2
  	),
		'Cross Gates' => array
  	(
    	'link' => 'http://www.crossgatesclub.com/',
    	'image' => false,
			'size' => 2
  	),
		'DBA Service Rigging' => array
  	(
    	'link' => '#',
    	'image' => false,
			'size' => 2
  	),
		'Hank\'s Stump Grinding' => array
		(
			'link' => 'http://www.stumpgrindinglouisiana.com/',
			'image' => false,
			'size' => 2
		),
		'Hi Tech Electric' => array
		(
			'link' => 'http://hitechelectric.com/',
			'image' => false,
			'size' => 2
		),
		'JG Marine' => array
		(
			'link' => '#',
			'image' => false,
			'size' => 2
		),
		'John and Lenell Davis' => array
		(
			'link' => '#',
			'image' => false,
			'size' => 2
		),
		'NOLA Lending Group' => array
		(
			'link' => 'https://nolalending.com/',
			'image' => false,
			'size' => 2
		),
		'Northshore Natural Foods' => array
		(
			'link' => 'https://www.facebook.com/northshorenaturalfoods',
			'image' => false,
			'size' => 2
		),
		'Paradigm Health System' => array
    (
      'link' => 'http://www.paradigmhealth.net/wordpress/',
      'image' => false,
			'size' => 2
    ),
		'Planet Beach' => array
    (
      'link' => 'http://www.planetbeach-slidell.com/',
      'image' => false,
			'size' => 2
    ),
		'Smuckers' => array
		(
			'link' => 'http://www.smuckers.com/',
			'image' => false,
			'size' => 2
		),
		'Spiehler Service' => array
		(
			'link' => '#',
			'image' => false,
			'size' => 2
		),
		'St. Tammany Workforce Solutions' => array
		(
			'link' => '#',
			'image' => false,
			'size' => 2
		),
		'Tommy St. Clair Designs' => array
		(
			'link' => 'http://gotchadecals.com/',
			'image' => false,
			'size' => 2
		),
    'Vera\'s Seafood' => array
    (
      'link' => '#',
      'image' => false,
			'size' => 2
    ),
		'Who Dat Shoppe' => array
    (
      'link' => 'http://www.thewhodatshoppe.com/',
      'image' => false,
			'size' => 2
    )
	)

	/*
	'Sponsor Name' => array
	(
		'link' => 'url or # for no link',
		'image' => 'image file.jpg'/false for no image',
		'size' => # //width of sponsor, out of 12
	),
	*/
);

display_sponsors($sponsors, $media_sponsors);
?>
