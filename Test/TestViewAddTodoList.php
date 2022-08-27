<?php

require_once "./View/ViewAddTodoList.php";
require_once "./BusinessLogic/ShowTodoList.php";
require_once "./BusinessLogic/AddTodoList.php";

addTodoList("Bajang");
addTodoList("Riau");
addTodoList("Asqor");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();