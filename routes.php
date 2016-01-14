<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
	case "home":
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

		require "classes/HomeView.php";

		$view = new HomeView($feedbackandquestions);
		$view->render();
		break;

	case "feedbackandquestions":
		$_SESSION['feedbackandquestionserror'] = NULL;
		$feedbackandquestions = [ 'errors' => []
								];
		$expectedVariables = ['email', 'subject', 'message', 'newsletter'];

		foreach ($expectedVariables as $variable) {
			//assume no errors
			$feedbackandquestions['errors'][$variable]="";
		
		if (isset($_POST[$variable])) {
			$feedbackandquestions[$variable] = $_POST[$variable];
		}else {
			$feedbackandquestions[$variable] = "";

		} }

		//validating the form

		$error = false;

		
		if(! filter_var($feedbackandquestions['email'], FILTER_VALIDATE_EMAIL)){
			$feedbackandquestions['errors']['email']="Enter a valid email address";
			$error = true;
		}


		if(strlen($feedbackandquestions['subject']) == 0) {
			$feedbackandquestions['errors']['subject']= "Enter a subject title for your message";
			$error = true;
		}

		if(strlen($feedbackandquestions['message']) == 0) {
			$feedbackandquestions['errors']['message']= "Remember to type out your feedback and/ or question";
			$error = true;
		}

		if( $error === true){
			$_SESSION['feedbackandquestions'] = true;
			$_SESSION['feedbackandquestionserror'] = $feedbackandquestions;
			header("Location:./#feedbackandquestions");
			exit();
		}
		// form is valid, and so redirect the user to a success page
		// header("Location:./?page=emailsentsuccess");

		//send email to the user
		require "classes/UsersEmailView.php";
		$usersEmail = new UsersEmailView($feedbackandquestions);
		$usersEmail->render();

		//send email to the host
		require "classes/HostsEmailview.php";
		$hostsEmail = new HostsEmailview($feedbackandquestions);
		$hostsEmail->render();

		exit ();
		
		break;
		
		case "emailsentsuccess":
			require "classes/EmailSentSuccessView.php";
			$view = new EmailSentSuccessView();
			$view->render();

			break;

	case "buyAdSpace":
		include "templates/buyadspace.inc.php";
		break;

	case "SellAdSpace":
		include "templates/selladspace.inc.php";
		break;

	case "login":
		include "templates/login.inc.php";
		break;

	case "about":
		require "classes/AboutView.php";
		$view = new AboutView();
		$view->render();
		break;

	case "statistics&press":
		include "templates/stats&press.inc.php";
		break;

	case "advertisers":
		include "templates/advertisers.inc.php";
		break;

	case "publishers":
		include "templates/publishers.inc.php";
		break;
	
	default:
		echo "404";
		break;
}
