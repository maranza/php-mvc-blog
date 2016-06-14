<?php 
	//required!!
	require'config/config.php';

	//fetch results/posts.
	$posts = get('posts', $conn);//taking posts from table posts with connection and limit of 5.

	if ($posts) {
		# code...
		view('index', array(		//enter the page you want to view/load
		'posts' => $posts,
		'company'=>'Maranza'
		));
	}else{
		echo'something is wrong.';
	}
	

	//filter through and display with th view.
	// include 'view/index.view.php';




