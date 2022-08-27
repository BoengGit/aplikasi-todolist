<?php

// menghapus todo di list
function removeTodoList(int $number): bool
{
    global $todoList;
    unset($todoList[$number]);

    if ($number > sizeof($todoList)) {
        return false;
    }

    for ($i = $number; $i < sizeof($todoList); $i++) {
        $todoList[$i] = $todoList[$i + 1];
    }

    unset($todoList[sizeof($todoList)]);

    return true;
}
