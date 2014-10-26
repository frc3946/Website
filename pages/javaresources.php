<?php
	$resources = array
	(
		'Team Java Programming' => array
		(
			'Lesson #1 - Intro'						=> './media/resources/java/Lesson1.pdf',
			'Lesson #2 - Making Decisions'			=> './media/resources/java/Lesson2.pdf',
			'Lesson #3 - Loops'						=> './media/resources/java/Lesson3.pdf',
			'Lesson #4 - Object Oriented Paradigm'	=> './media/resources/java/Lesson4.pdf',
			'Lesson #4p2 - Using Classes'			=> './media/resources/java/Lesson4p2.pdf',
			'Lesson #5 - Common FRC Classes'		=> './media/resources/java/Lesson5.pdf'
		),
		'Programming Resources' => array
		(
			'Java Tutorials' => array
			(
				'CS Tutoring Center Java Tutorials'				=> 'http://www.cstutoringcenter.com/tutorials/java.php',
				'Oracle\'s Java Tutorials'						=> 'http://download.oracle.com/javase/tutorial/java/',
				'Introduction to Programming Using Java'		=> 'http://math.hws.edu/javanotes/',
				'Introduction to Computer Science using Java'	=> 'http://chortle.ccsu.edu/cs151/cs151java.html',
				'Skyler Goodell\'s Java Video Tutorials'		=> 'http://www.youtube.com/watch?v=wNbeXD2wF1g&amp;list=PL757532488A091AEB',
				'TheNewBoston\'s Java Video Tutorials'			=> 'http://www.youtube.com/watch?v=Hl-zzrqQoSE&amp;list=SPFE2CE09D83EE3E28',
				'Coding Bat Java Code Practice'					=> 'http://codingbat.com/'
			),
			'WPILib Resources' => array
			(
				'2013 Control and WPILib Documentation'	=> 'http://wpilib.screenstepslive.com/s/3120',
				'Chief Delphi Unoffical FIRST Forums'	=> 'http://www.chiefdelphi.com/forums/portal.php',
				'WPILib Project Page'					=> 'http://firstforge.wpi.edu/sf/projects/wpilib',
				//'WPILib JavaDoc Library Documentation'	=> 'javadoc',
				'Brad Miller\'s Video Tutorials'		=> 'http://www.youtube.com/user/bradamiller',
				'Allen Odden\'s Video Tutorials'		=> 'https://www.youtube.com/user/oa10712'
			),
			'Netbeans Configuration' => array
			(
				'Java JDK/Netbeans Dual Install'=> 'http://www.oracle.com/technetwork/java/javase/downloads/jdk-7-netbeans-download-432126.html',
				'WPI Plugin Update Link'		=> 'http://first.wpi.edu/FRC/java/netbeans/update/Release/updates.xml',
				'Netbeans Website'				=> 'http://www.netbeans.org/'
			)
		),
		'Other Team\'s Resources' => array
		(
			'The Aluminum Falcons Team 2168'=> 'http://team2168.org/index.php/resources/programming',
			'RoboRaptors Team 3650'			=> 'http://www.roboraptorsfrcteam3650.com/programming-linksresources.html',
			'Pronto Team 3070'				=> 'http://teampronto.com/?page_id=318'
		)
	);

	print_resource_array($resources);
?>