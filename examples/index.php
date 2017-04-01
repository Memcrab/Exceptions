<?php
declare (strict_types = 1);
require_once __DIR__ . "/../vendor/autoload.php";

use memCrab\Exceptions\FileException;
use memCrab\Exceptions\RoutingException;

try {

} catch (RoutingException $error) {
	$Respose = new \Response();
	$Respose->setErrorResponse($error);
} catch (FileException $error) {
	$Respose = new \Response();
	$Respose->setErrorResponse($error);
}

$Respose->sendHeaders();
$Respose->sendContent();