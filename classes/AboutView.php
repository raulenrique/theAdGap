<?php

class AboutView
{
	public function render() {
		$page = "about";
		$page_title = "About Us";
		include "templates/master.inc.php";
	}
	public function content() {
		include "templates/about.inc.php";
	}
}