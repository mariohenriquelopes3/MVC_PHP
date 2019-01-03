<?php

include_once __DIR__ . '/' . '../modelo/Home.php';

function home_dao_findall() {
	return array(
		new Home('1'),
		new Home('2'),
		new Home('3')
	);
}

?>