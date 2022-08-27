<?php

require_once "../aplikasi-todolist/Model/TodoList.php";
require_once "../aplikasi-todolist/BusinessLogic/RemoveTodoList.php";
require_once "../aplikasi-todolist/BusinessLogic/AddTodoList.php";
require_once "../aplikasi-todolist/BusinessLogic/ShowTodoList.php";

addTodoList("Bajang");
addTodoList("Riau");
addTodoList("Asqor");

showTodoList();

removeTodoList(3);

showTodoList();
