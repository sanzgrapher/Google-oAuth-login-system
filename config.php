<?php
// google auth folder and files 
// -vendor -composer.json -composer.lock
require_once 'vendor/autoload.php';

session_start();

// init configuration
$clientID = 'client id';
$clientSecret = 'secrete id';
$redirectUri = 'http://localhost/github/goauth/welcome.php';

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

// Connect to database
$hostname = "localhost";
$username = "root";
$password = "";
$database = "sociallogin";

$conn = mysqli_connect($hostname, $username, $password, $database);
