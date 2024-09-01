<?php

use classes\Book;

include 'vendor/autoload.php';

$books = new Book();
$data = $books->all();

?>

<?php include 'components/header.php' ?>

<div class="grid grid-cols-4 gap-6">
    <?php foreach ($data as $book): ?>
        <a href="book-show.php?id=<?php echo $book['id'] ?>">
            <div class="bg-slate-300 rounded-lg overflow-hidden">
                <img src="<?= $book['cover'] ?>" alt="" class="h-80 w-full object-cover">
                <p class="px-4 py-2 font-bold"><?= $book['title'] ?></p>
                <p class="px-4 py-2 text-yellow-500">
                    <?php for ($i = 0; $i < $book['rating']; $i++): ?>
                        <span class="material-symbols-outlined">stars</span>
                    <?php endfor; ?>
                </p>
            </div>
        </a>
    <?php endforeach; ?>
</div>

<?php include 'components/footer.php' ?>