<?php 

$todoList = file_get_contents("dati.json");

header("Content-Type: application/json");

$lista = json_decode($todoList, true);


foreach ($lista as $i => $task) {
    if ($lista[$i] == "Fare la spesa") {
        $lista[$i] = "ciao";
    }
}

$todoList = json_encode($lista);

echo $todoList;

?>
