<?php

	$memcache = new Memcache;
	
	$memcache->connect('127.0.0.1',11211) or die('Could not connect');
	
	//$name = 'cxh';
	//$memcache->set('name',$name);
	//echo $memcache->get('name');
	
	//对象
	$obj;
	$obj->name = "jim";
	$obj->age = 10;
	$memcache->set('obj',$obj);
	var_dump($memcache->get('obj'));
	
	// 数 组
	$arr[] = 1;
	$arr[] = 2;
	$memcache->set('arr',$arr);
	var_dump($memcache->get('arr'));
	
	//
	echo 'test2';	
?>
