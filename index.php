<?php
$sessionId=$_POST["sessionId"];
$serviceCode=$_POST["serviceCode"];
$phoneNumber=$_POST["phoneNumber"];
$text=$_POST["text"];

if($text=="")
{
    $response="CON What would you want to check\n";
    $response .="1. My Account Number\n";
    $response .="2. My Phone Number";
}
else if ($text=="1")
{
    $response ="CON choose account information you want to see";
    $response .= "1. Account Number\n";
    $response .="2. Account Balance";
}
else if ($text=="2")
{
    $response = "END your phone number is " .$phoneNumber;
}
else if($text=="1*1")
{
    $accountNumber="Acc1001";
    $response="END your Account Number is ".$accountNumber;
}
else if($text="1*2")
{
    $balance="100000 Rwf";
    $response="END your balance is ".$balance;
}
header('Content-type: text/plain');
echo $response;


?>