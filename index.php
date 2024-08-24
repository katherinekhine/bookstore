<?php
include 'components/header.php'
?>

<div class="grid grid-cols-4 gap-6">
    <?php for ($i = 0; $i < 10; $i++): ?>
        <div class="bg-slate-300 rounded-lg overflow-hidden">
            <img src="https://cdn.pixabay.com/photo/2022/07/08/10/37/books-7309019_1280.png" alt="" class="h-80 w-full object-cover">
            <p class="px-4 py-2 font-bold">Book Title</p>
            <p class="px-4 py-2 text-yellow-500">
                <span class="material-symbols-outlined">
                    stars
                </span>
            </p>
        </div>
    <?php endfor; ?>
</div>

<?php
include 'components/footer.php'
?>