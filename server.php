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
if (isset($_POST["newTodos"])) {
    $new_todos = $_POST["newTodos"];
    $todos[] = ["text" => $new_todos, "done" => true];
}

$todos_json = json_encode($todos);
header('Content-Type: application/json');
echo $todos_json;
