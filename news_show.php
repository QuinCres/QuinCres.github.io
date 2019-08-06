<?php

	include_once "news_public.php";
	
	$sql = "select * from n_news";
	
	$res = my_error($sql);
	
	$news = array();
	while($row = mysqli_fetch_assoc($res)){
		$news[] = $row;
	}
	//echo '<pre>';
	//print_r($news);
	
	include_once 'show.html';