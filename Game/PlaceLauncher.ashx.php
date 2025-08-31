<?php
$domain = "http://"; // ur domain

$responseData = [
    "jobId" => "urjobid",
    "status" => 2,
    "joinScriptUrl" => "$domain/Game/Join.ashx",
    "authenticationUrl" => "$domain/Login/Negotiate.ashx",
    "authenticationTicket" => "defaultAccess",
    "message" => null
];

echo json_encode($responseData);