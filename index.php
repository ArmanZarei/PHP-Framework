<?php
require_once __DIR__.'/init.php';

use Symfony\Component\HttpFoundation\Response;

$name = $request->get('name', 'Unknown');

$response->setContent("Hello ".$name);
$response->setStatusCode(Response::HTTP_OK);
$response->send();
