<?php

include 'vendor/autoload.php';

use classes\Book;

$data = new Book();
$book = $data->show($_GET['id']);

?>

<?php include 'components/header.php' ?>

<img src="<?= $book->cover ?>" alt="" class="w-80 h-96 object-cover border-8 border-slate-500 rounded-lg mb-2">

<div class="mb-2">
    <label for="rating" class="text-gray-400 italic">Rating:</label>
    <p class="text-yellow-500">
        <?php for ($i = 0; $i < $book->rating; $i++): ?>
            <span class="material-symbols-outlined">stars</span>
        <?php endfor; ?>
    </p>
</div>
<div class="mb-2">
    <label for="title" class="text-gray-400 italic">Title:</label>
    <h2><?= $book->title; ?></h2>
</div>
<div class="mb-2">
    <label for="about" class="text-gray-400 italic">About:</label>
    <p><?= $book->about; ?></p>
</div>
<div class="mb-2">
    <label for="created_at" class="text-gray-400 italic">Created_At:</label>
    <span><?= $book->created_at; ?></span>
</div>
<div class="mb-2">
    <div class="inline-block">
        <a href="book-index.php" class="border bg-slate-500 p-2 rounded text-white flex items-center">
            <span class="material-symbols-outlined">
                arrow_back_ios
            </span> Back</a>
    </div>
    <div class="inline-block">
        <a href="book-edit.php?id=<?= $book->id ?>" class="border bg-yellow-500 p-2 rounded text-white flex items-center">
            <span class="material-symbols-outlined">edit</span>
            Edit
        </a>
    </div>
    <div class="inline-block">
        <a href="book-delete.php?id=<?= $book->id ?>" class="border bg-red-500 p-2 rounded text-white flex items-center">
            <span class="material-symbols-outlined">delete</span>
            Delete
        </a>
    </div>
</div>


<?php include 'components/footer.php' ?>