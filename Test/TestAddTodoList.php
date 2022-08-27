<?php

require_once "../aplikasi-todolist/Model/TodoList.php";
require_once "../aplikasi-todolist/BusinessLogic/AddTodoList.php";

addTodoList("Bajang");
addTodoList("Gilang");

var_dump($todoList);
