<?php

include 'vendor/autoload.php';

use classes\Book;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = new Book();
    $data->delete($id);
    header('location: index.php');
} else {
    header('location: index.php');
}
