<?php



$todoList = file_get_contents("dati.json");

header("Content-Type: application/json");

$lista = json_decode($todoList, true);


if (isset($_POST["task"])) {
    class Task
    {
        public $task;
        public $done;
    };

    $objItem = new Task();
    $objItem->task = $_POST["task"];
    $objItem->done = $_POST["done"];

    $lista[] =  $objItem;


    file_put_contents("dati.json", json_encode($lista));
}

$todoList = json_encode($lista);

echo $todoList;
