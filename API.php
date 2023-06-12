<?php 

$tasks=[
    [
        "task" => "fare la spesa",
        "done" => false
    ],
    [
        "task" => "Comprare l'acqua",
        "done" => false
    ],
    [
        "task" => "Andare al barbiere",
        "done" => false
    ],
    
];

header("Content-Type: application/json");
$lista= json_encode($tasks);
echo $lista;

?>
