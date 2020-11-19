<?php

require_once(DOCUMENT_ROOT."/php/EmailValidator.service.php");



$maxMessageLength = 2000;
$errors = array();
$returnAddress = "";
$message = "";
$subject = "";
$senderName = "";
$sendSuccess = null;


//On posting a message
if(isset($_POST['submitMessageButton']))
{

    //Save the users input in case they make an error
    $returnAddress = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];
    $senderName = $_POST['name'];


    //Ensure their input is not blank or just white space
    if(empty($_POST['name']))
    {
        array_push($errors, "Name is required");
    }
    if(empty($_POST['email']))
    {
        array_push($errors, "Email is required");
    }
    else
    {
        //Ensure their email pattern is valid according to the regex
        $emailvalidator = new EmailAddressValidator($_POST['email']);
        $isValid = $emailvalidator->isValid();

        //isValid will return 1 on success, FALSE otherwise;
        if(!$isValid)
        {
            array_push($errors, "Email must follow the pattern email@domain.com");
        }
    }

    if(empty($_POST['subject']))
    {
        array_push($errors, "Subject line is required");
    }
    if(empty($_POST['message']))
    {
        array_push($errors, "Message is required");
    }
    else
    {
        if(strlen($_POST['message']) > $maxMessageLength)
        {
            array_push($errors, "Message is over 2000 characters");
        }
    }

    //Disallow sending the email until all field as filled in
    if(count($errors) !== 0)
    {
        $sendSuccess = false;
        return;
    }

    
    try
    {

        $sendSuccess = true;

        //Clear their input so we can show a blank form again
        $returnAddress = "";
        $message = "";
        $subject = "";
        $senderName = "";
    }
    catch (Exception $e)
    {
        array_push($errors, "Unknown error during message transmission, please try again later...");
        $sendSuccess = false;
        return;
    }
}
?>