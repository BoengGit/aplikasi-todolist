<?php

require_once './Model/TodoList.php';
require_once './View/ViewRemoveTodoList.php';
require_once './BusinessLogic/AddTodoList.php';
require_once './BusinessLogic/ShowTodoList.php';

addTodoList("Bajang");
addTodoList("Riau");
addTodoList("Asqor");
addTodoList("GoLang");
addTodoList("PHP");

showTodoList();

viewRemoveTodoList();

showTodoList();