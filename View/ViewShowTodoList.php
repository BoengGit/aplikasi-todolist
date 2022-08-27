<?php

require_once "../aplikasi-todolist/Model/TodoList.php";
require_once "../aplikasi-todolist/BusinessLogic/ShowTodoList.php";
require_once "../aplikasi-todolist/View/ViewAddTodoList.php";
require_once "../aplikasi-todolist/View/ViewRemoveTodoList.php";
require_once "../aplikasi-todolist/Helper/Input.php";

function viewShowTodoList()
{
    while (true) {
        showTodoList();

        echo "MENU" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = input("Pilih");

        if ($pilihan == "1") {
            viewAddTodoList();
        } elseif ($pilihan == "2") {
            viewRemoveTodoList();
        } elseif ($pilihan == "x") {
            break;
        } else {
            echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
    }

    echo "Sampai jumpa lagi" . PHP_EOL;
}
