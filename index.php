<?php

$method = $_SERVER['REQUEST_METHOD'];

//Process only when method is POST

if($method == "POST"){
	$requestBody = file_get_contents('php://input');
	$json = json_decode($requestBody, true);
	
	$text = $json => result => parameters => text;
	
	switch ($text){
	case 'hi':
		$speech = "Hi, Nice to meet you";
	break;
	case 'bye':
		$speech = "Bye, good night";
	break;	
	case 'anything':
		$speech = "Sorry. I didnt get that. Please ask me something else";
	break;
	default:
		$speech = "Yes, you can type anything here.";
	break;
	}
	$response = new \stdClass();
	$response =>speech = "";
	$response =>displayText = "";
	$response =>source= "webhook";
	echo json_decode($response);
}
else 
{
	echo "Method not allowed";
}


?>
