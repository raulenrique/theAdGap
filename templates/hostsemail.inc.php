<?php

$emailHeader = [
	'from' => 'Schlocktoberfest < mailgun@' .$domain. '>',
	'to' => '<assin.testmail@gmail.com>',
	'subject' => 'Movie Suggestion '.$title
	];
?>

Hi Team,

We have just received an email from  <?=$email; ?>. regarding "<?php echo $subject; ?>" 
Please respond to them as soon as you are able to.

"<?php echo $message; ?>"

<?php 
if($newsletter): ?>
They have also signed up for our newsletter. 
<?php endif; ?>
