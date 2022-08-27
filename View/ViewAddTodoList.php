<?php

require_once "../aplikasi-todolist/Model/TodoList.php";
require_once "../aplikasi-todolist/Helper/Input.php";
require_once "../aplikasi-todolist/BusinessLogic/AddTodoList.php";

function viewAddTodoList()
{
    echo "MENAMBAHKAN TODO" . PHP_EOL;

    $todo = input("Todo (x untuk batal)");

    if ($todo == "x") {
        echo "Batal menambah todo" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}
