<?php

include_once __DIR__ . '/' . '../dao/HomeDAO.php';

class HomeControle {

	public $lista;

	public function index() {
		$this->lista = home_dao_findall();
		return 1;
	}
	
}
?>