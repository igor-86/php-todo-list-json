<?php

$todos = [
    [
        "text" => "HTML",
        "done" => true,
    ],
    [
        "text" => "css",
        "done" => true,
    ],
    [
        "text" => "Responsive design",
        "done" => true,
    ],
    [
        "text" => "Javascript",
        "done" => true,
    ],
    [
        "text" => "PHP",
        "done" => true,
    ],
    [
        "text" => "Laravel",
        "done" => true,
    ],

];

$todos_json = json_encode($todos);
header('Content-Type: application/json');
echo $todos_json;
