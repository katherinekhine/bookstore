<?php
include 'components/header.php'
?>

<h1 class="text-center text-3xl mb-4">Create New Book</h1>

<form action="" method="post" enctype="multipart/form-data" class="w-2/3 mx-auto">
    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" placeholder="Enter Title" class="border w-full my-1 p-2">
    </div>
    <div>
        <label for="about">About:</label>
        <textarea name="about" id="about" placeholder="About the book..." class="border w-full my-1 p-2"></textarea>
    </div>
    <div>
        <label for="photo">Cover:</label>
        <input type="file" name="cover" id="cover" class="border w-full my-1 p-2">
    </div>
    <div>
        <label for="rating">Rating:</label>
        <input type="text" name="rating" id="rating" min="1" max="5" class="border w-full my-1 p-2">
    </div>
    <div>
        <button type="submit" class="bg-green-700 p-2 rounded-lg text-white my-1">Add Book</button>
    </div>
</form>

<?php
include 'components/footer.php'
?>