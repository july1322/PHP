<?php

	error_reporting(E_ALL);

	$foo = $bar; //notice : $bar uninitialized

	$bar['foo'] = 'hello'; // no notice, although $bar itself has never been initialized (for example with "$bar = array()" )

	$bar = array('foobar' => 'barfoo');
	$foo = $bar['foobar'] // ok

	$foo = $bar['nope'] // notice : no such index

?>