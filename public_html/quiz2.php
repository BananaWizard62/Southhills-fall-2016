<?php
$firstName = $_GET['first'];
$lastName = $_GET['last'];
$password = crypt($_GET['password']);
$gender = $_GET['gender'];
$email = $_GET['email'];

if(empty($email))
{
echo "<br />Please enter an email";
}
else
{
if(strpos($email, '@') && strpos($email, '.'))
{
$atpos = strpos($email, '@');
$dotpos = strpos($email, '.');
$username = substr($email, 0, $atpos);
$fulldomain = substr($email, ($atpos + 1));
$domain = substr($email, $atpos +1, ($dotpos - $atpos -1));
$end = substr($email, $dotpos);

echo "Email: ".$email."<br />";
echo "Username: ".$username."<br />";
echo "Domain: ".$domain."<br />";
echo "Domain Extension: ".$end."<br />";
echo "Full Domain: ".$fulldomain."<br />";
}
else
{
echo "Please enter a valid Email Address";
}
}

if(empty($firstName) && empty ($lastName))
{
echo "<br />Please go back and put in your first and last name.";
}
else if(empty($firstName))
{
echo "<br />Please enter a first name.";
}
else if(empty($lastName))
{
echo "<br /> Please enter your last name.";
}
else
{
echo "<br />Hello ".$firstName." ".$lastName;
}

if(empty($password))
{echo "<br />Please enter a password>";}
else
{echo "<br />Your Password is ".$password;}


if(isset($gender))
{echo "<br />You are ".$gender;}
else
{echo "<br />Please specify your gender.";}

$lunch = $_GET['lunch'];
if (isset($lunch))
{
foreach ($lunch as $value)
echo "<br />You have ordered a ".$value;
}
else
{
echo "<br />Please check one of the lunch options.";
}

$paymentMethod = $_GET['payment'];
echo "<br />Your selected payment method is: ".$paymentMethod;
echo "<br /><a href='javascript:history.go(-1)'>Go Back To Previous Page</a>";
?>
