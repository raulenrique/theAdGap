<?php

class HostsEmailView extends EmailView
{

	public function render() 
	{
		
		$this->sendEmail("templates/hostsemail.inc.php");
		
	}
	
}
