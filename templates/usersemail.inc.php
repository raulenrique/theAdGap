<?php

$emailHeader = [
	'from' => 'Schlocktoberfest < mailgun@' .$domain. '>',
	'to' => '<'.$email.'>',
	'subject' => 'Thanks for suggesting '.$subject
	];
?>

Hi there,

Thank you for your message. Here at the AdGap we pride ourselves on a high level of customer service and a quick response time.  
As a matter of fact we are probably reading your message at this very moment.
Please be patient and we will respond to you very shortly.

<?php 
if($newsletter): ?>
Thank you for signing up for our newsletter. You will receive your copy within a fortnight.
<?php endif; ?>


Thanks.

The AdGap team