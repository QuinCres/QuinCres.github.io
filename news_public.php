<?php

	header('Content-type:text/html;charset = utf-8');
	

	
	function my_error($sql)
	{
		$link = mysqli_connect("localhost","root","password","mydatabase") or die("数据库连接失败");
		$res = mysqli_query($link,$sql);
		if(!$res){
				echo'SQL执行错误，错误编号为：' . mysqli_errno($link) . '<br/>';
				echo'SQL执行错误，错误信息为：' . mysqli_error($link) . '<br/>';
				exit;
		}
		return $res;
	}
	
	
	