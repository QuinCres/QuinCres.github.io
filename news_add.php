<?php
	
	//var_dump($_POST);
	header('Content-type:text/html;charset = utf-8');
	
	$title = isset($_POST["title"]) ? trim($_POST["title"]) : '';
	$publisher = isset($_POST["publisher"]) ? trim($_POST["publisher"]) : '';
	$choice = isset($_POST["choice"]) ? (integer)($_POST["choice"]) : 2;
	$content = isset($_POST["content"]) ? trim($_POST["content"]) : '';
	
	if(empty($title) || empty($publisher) || empty($content)){
		
		header('Refresh:3,url = center.html');
		exit('标题，发布人和内容不能为空');
	}
	
	include_once 'news_public.php';
	$time = time();
	
	$sql = "insert into n_news 
	values(null,'{$title}',{$choice},'{$content}','{$publisher}',$time)";
	
	$insert_id = my_error($sql);
	
	header('Refresh:3,url = news.php');
	echo $title . '增加成功';