<?php

	$memcache = new Memcache;
	
	$memcache->connect('127.0.0.1',11211) or die('Could not connect');
	
	$name = 'cxh';
	
	$memcache->set('name',$name);

	echo $memcache->get('name');
	
?>