<?php
include 'components/header.php'
?>

<div class="grid grid-cols-4 gap-6">
    <?php for ($i = 0; $i < $book['rating']; $i++): ?>
        <a href="book-show.php">
            <div class="bg-slate-300 rounded-lg overflow-hidden">
                <img src="<?= $book['cover'] ?>" alt="" class="h-80 w-full object-cover">
                <p class="px-4 py-2 font-bold"><?= $book['title'] ?></p>
                <p class="px-4 py-2 text-yellow-500">
                    <span class="material-symbols-outlined">
                        stars
                    </span>
                </p>
            </div>
        </a>
    <?php endfor; ?>
</div>

<?php
include 'components/footer.php'
?>