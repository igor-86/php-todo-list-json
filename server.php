<?php

/* $todos = [
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

]; */
$string = file_get_contents("todo.json");
$todos = json_decode($string, true);

if (isset($_POST["newTodos"])) {
    $new_todos = $_POST["newTodos"];
    $todos[] = ["text" => $new_todos, "done" => true];

    file_put_contents("todo.json", json_encode($todos));
}

$todos_json = json_encode($todos);
header('Content-Type: application/json');
echo $todos_json;
