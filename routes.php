<?php

$page = isset($GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
	case 'home':
		require "classes/HomeView.php";
		$view = new HomeView();
		$view->render();
		break;
	case 'buyAdSpace':
		include "templates/buyadspace.inc.php";
		break;
	case 'SellAdSpace':
		include "templates/selladspace.inc.php";
		break;
	case 'login':
		include "templates/login.inc.php";
		break;
	case 'about':
		include "templates/about.inc.php";
		require "classes/AboutView.php";
		$view = new AboutView();
		$view->render();
		break;
	case 'statistics&press':
		include "templates/stats&press.inc.php";
		break;
	case 'advertisers':
		include "templates/advertisers.inc.php";
		break;
	case 'publishers':
		include "templates/publishers.inc.php";
		break;
	
	default:
		echo "404";
		break;
}
