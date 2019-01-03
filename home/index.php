<?php
	include_once __DIR__ . '/' . '../src/controle/HomeControle.php';
	$controle = new HomeControle();
	$retorno = $controle->index();
	if ($retorno == 1) {
		include_once __DIR__ . '/' . '../src/view/home/index.php';
	} else {
		include_once __DIR__ . '/' . '../src/view/home/index.php'; // Outra view
	}
?>