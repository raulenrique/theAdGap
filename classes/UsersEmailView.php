<?php

class UsersEmailView extends EmailView
{

	public function render() 
	{
		
		$this->sendEmail("templates/usersemail.inc.php");
		
	}
	
}