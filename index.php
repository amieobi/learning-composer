<?php
require_once(__DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');

use Devscreencast\ResponseClass\JsonResponse;

$student = array(
    "name" => "Amaka",
    "course" => "English",
    "level" => 200
);

new JsonResponse("exception", "", $student);
