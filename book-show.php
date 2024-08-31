<?php

include 'vendor/autoload.php';

use classes\Book;

$data = new Book();
$book = $data->show($_GET['id']);

?>

<?php
include 'components/header.php'
?>

<img src="<?= $book->cover ?>" alt="" class="w-50 h-96 object-cover border-8 border-slate-500 rounded-lg mb-2">

<div class="mb-2">
    <label for="rating" class="text-gray-400 italic">Rating</label>
    <p class="text-yellow-500">
        <?php for ($i = 0; $i < $book->rating; $i++): ?>
            <span class="material-symbols-outlined">
                stars
            </span>
        <?php endfor; ?>
    </p>
</div>
<div class="mb-2">
    <label for="title" class="text-gray-400 italic">Title:</label>
    <h2>Book Title</h2>
</div>
<div class="mb-2">
    <label for="about" class="text-gray-400 italic">About:</label>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam veniam qui tempora ipsum cum vero velit quia molestiae reiciendis voluptatum? Aspernatur similique ratione aliquam reprehenderit facere nulla fugiat? Praesentium culpa repudiandae magnam molestias ut debitis est illo sapiente illum dolore?</p>
</div>
<div class="mb-3">
    <label for="created_at" class="text-gray-400 italic">Created_At:</label>
    <span>2024, Jul 17</span>
</div>
<div class="mb-2">
    <a href="book-index.php" class="border bg-slate-500 p-2 rounded text-white"><span class="material-symbols-outlined">
            arrow_back_ios
        </span> Back</a>
    <a href="" class="border bg-yellow-500 p-2 rounded text-white"><span class="material-symbols-outlined">
            edit
        </span> Edit</a>
    <a href="" class="border bg-red-500 p-2 rounded text-white"><span class="material-symbols-outlined">
            delete
        </span> Delete</a>
</div>

<?php
include 'components/footer.php'
?>