<?php

include 'vendor/autoload.php';

use classes\Book;

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $data = new Book();
    $book = $data->show($id);

    if (isset($_POST['update'])) {
        $title = $_POST['title'];
        $about = $_POST['about'];
        $cover = $_FILES['cover'];
        $rating = $_POST['rating'];

        if (empty($title) || empty($about) || empty($rating)) {
            header("location: book-edit.php?id=$id&error=1");
        } else {
            if (is_uploaded_file($cover['tmp_name'])) {
                $cover_path = 'photos/' . $cover['name'];
                move_uploaded_file($cover['tmp_name'], $cover_path);
                $data->update([
                    'id' => $id,
                    'title' => $title,
                    'about' => $about,
                    'cover' => $cover_path,
                    'rating' => $rating,
                ]);
            } else {
                $data->update([
                    'id' => $id,
                    'title' => $title,
                    'about' => $about,
                    'rating' => $rating,
                ]);
            }
            header("location: book-show.php?id=$id");
        }
    }
}
?>

<?php
include 'components/header.php'
?>

<h1 class="text-center text-3xl mb-4 text-blue-500">Update Book</h1>

<?php if (isset($_GET['id'])):  ?>
    <form action="" method="post" enctype="multipart/form-data" class="w-2/3 mx-auto">
        <div class="mb-4">
            <?php if (isset($_GET['error'])): ?>
                <p class="text-red-500 text-white p-4">All fields are required.</p>
            <?php endif; ?>
        </div>
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" placeholder="Enter Title" class="border w-full my-1 p-2" value="<?= $book->title ?>">
        </div>
        <div>
            <label for="about">About:</label>
            <textarea name="about" id="about" placeholder="" class="border w-full my-1 p-2"><?= $book->about ?></textarea>
        </div>
        <div>
            <label for="photo">Cover:</label>
            <input type="file" name="cover" id="cover" class="border w-full my-1 p-2">
            <img src="<?= $book->cover ?>" alt="" class="border w-32 h-32 object-cover">
        </div>
        <div>
            <label for="rating">Rating:</label>
            <select name="rating" id="rating" class="border w-full my-1 p-2">
                <option value="1" <?= $book->rating == 1 ? 'selected' : ''; ?>>1</option>
                <option value="2" <?= $book->rating == 2 ? 'selected' : ''; ?>>2</option>
                <option value="3" <?= $book->rating == 3 ? 'selected' : ''; ?>>3</option>
                <option value="4" <?= $book->rating == 4 ? 'selected' : ''; ?>>4</option>
                <option value="5" <?= $book->rating == 5 ? 'selected' : ''; ?>>5</option>
            </select>
        </div>
        <div>
            <button type="submit" class="bg-green-700 p-2 rounded-lg text-white my-1" name="update">Update Book</button>
        </div>
    </form>

<?php else: ?>
    <p class="text-center bg-red-500 text-white text-xl">Book not found.</p>
<?php endif; ?>

<?php
include 'components/footer.php'
?>