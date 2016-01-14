<?php

namespace App\Controllers;

use App\Views\HomeView;

class HomeController
{

	public function show()
	{
		$feedbackandquestions = $this->getMessageFormData();

		$view = new HomeView($feedbackandquestions);
		$view->render();

	}

	public function getMessageFormData()
	{
		if (isset($_SESSION['feedbackandquestions'])) {
				$feedbackandquestions = $_SESSION['feedbackandquestions'];
			} else {
				$feedbackandquestions = [
					'email' => "",
					'subject' => "",
					'message' => "",
					'newsletter' => "",
					'errors'=> [
						'email'=>"",
						'subject'=>"",
						'message'=>"",
						'newsletter'=>""
					]
				];
		}
			return $feedbackandquestions;
	}
}

