<?php

class HomeView
{
	public function render() {
		$page = "index";
		$page_title = "";
		include "templates/master.inc.php";
	}
	public function content() {
		include "templates/index.inc.php";
	}
}