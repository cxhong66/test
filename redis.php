<?php
   //Connecting to Redis server on localhost
   $redis = new Redis();
   $redis->connect('127.0.0.1', 6379);
   $name = "cxh";
	$redis->set('myname',$name);
	echo $redis->get('myname');
?>