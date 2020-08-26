<?php
require_once __DIR__ ."/vendor/autoload.php";

use Devscreencast\ResponseClass\JsonResponse;

$student = array(
    'name' => 'Queen Rimma',
    'course' =>'CSE',
    'level' => '200',
    'collection' =>['books'=>'intro to uml', 'music' =>'bhakti']
);
new JsonResponse('unauthorized', '', $student);