<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>PHP E-Mail</title>
<link rel="stylesheet" href="php_styles.css" type="text/css" />
</head>
<body>
<?php
function validateSender($Address)
{
	if (strpos($Address, '@') !== FALSE && strpos($Address, '.') !== FALSE)
	{return true;}
	else
	{return false;}
}
function validateRecipients($Addresses)
{
	$Address = explode(",", $Addresses);
	$RetValue = true;
	foreach ($Address as $Email)
	{
		if (strpos($Email, '@') !== FALSE && strpos($Email, '.') !== FALSE)
		{
			$RetValue = true;
		}
		else
		{
			$RetValue = false;
			break;
		}
	}
	return $RetValue;
}
function checkForDuplicates($Addresses)
{
	$Address = explode(",", $Addresses);
	$Count = count($Address);
	$RetValue = false;
	while ($i<$Count)
	{
		$j = 0;
		while ($j<$Count)
		{
			if (strcasecmp($Address[$i], $Address[$j]) == 0 && $i != $j)
				{$RetValue = true;}
			++$j;
		}
		++$i;
	}
	return $RetValue;
}
$From = "{$_GET['sender_name']} <{$_GET['sender_email']}>";
$To = str_replace("\r\n", ",", $_GET['to']);
$CC = str_replace("\r\n", ",", $_GET['cc']);
$BCC = str_replace("\r\n", ",", $_GET['bcc']);
$Subject = $_GET['subject'];
$Message = $_GET['message'];
$Headers = "From: $From\r\n";
$Headers .= "CC: $CC\r\n";
$Headers .= "BCC: $BCC\r\n";
$Headers .= "MIME-Version 1.0\r\n";
$Headers .= "Content-Type: text/plain; charset=\"iso-8859-1\"\r\n";
$Headers .= "Content-Transfer-Encoding: 8bit\r\n";

if (empty($_GET['sender_name']) || empty($_GET['sender_email']) || empty($_GET['to']) || empty($_GET['subject']) || empty($_GET['message']) )
{echo "<p>You must enter values into sender name, sender e-mail, To, subject, and message fields!</p>";}
else if (validateSender($_GET['sender_email']) == false)
{
echo "The sender's email address does not appear to be valid. Click your browser's back button to return to the message.";
}
else if (validateRecipients($To) == false)
{echo "<p>One or more of the \"To\" e-mail addresses does not appear to be valid. Click your browser's back button to return to the message.</p>";}
else if (isset($_GET['cc']) && validateRecipients($CC) == false)
{echo "<p>One or more of the \"To\" e-mail addresses does not appear to be valid. Click your browser's back button to return to the message.</p>";}
else if (isset($_GET['bcc']) && validateRecipients($BCC) == false)
{echo "<p>One or more of the \"To\" e-mail addresses does not appear to be valid. Click your browser's back button to return to the message.</p>";}
else if (checkForDuplicates($To) == true)
{echo "<p>The \"To\" e-mail addresses contain duplicates. Click your browser's back button to return to the message.</p>";}
else if (checkForDuplicates($CC) == true)
{echo "<p>The \"To\" e-mail addresses contain duplicates. Click your browser's back button to return to the message.</p>";}
else if (checkForDuplicates($BCC) == true)
{echo "<p>The \"To\" e-mail addresses contain duplicates. Click your browser's back button to return to the message.</p>";}
else
{
	$MessageSent = mail($To, $Subject, $Message, $Headers);

	if ($MessageSent) {
	echo "<p>The following message was sent successfully:</p><hr />";
	echo "<p><strong>From</strong>: $From</p>";
	echo "<p><strong>To</strong> $To</p>";
	echo "<p><strong>CC</strong>: $CC</p>";
	echo "<p><strong>BCC</strong>: $BCC</p>";
	echo "<p><strong>Subject</strong> $Subject</p>";
	echo "<p><strong>Message</strong> $Message</p>";
	}
	else
	{echo "<p>The message was not sent successfully!</p>";}
}
?>
<hr /><p><a href="PHPEmail.html">Return to E-Mail Form</a></p>
</body>
</html>
