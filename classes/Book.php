<?php

// include 'Database.php';

namespace classes;

use classes\Database;

class Book extends Database
{
    public function all()
    {
        $query = "SELECT * FROM books";
        $result = $this->connect()->prepare($query);
        $result->execute();
        return $result->fetchAll();
    }

    public function show($id)
    {
        $query = "SELECT * FROM books WHERE id = :id";
        $result = $this->connect()->prepare($query);
        $result->execute([
            'id' => $id
        ]);
        return $result->fetchObject();
    }

    public function store($data = [])
    {
        $query = "INSERT INTO books (title, about, cover, rating, created_at) VALUES (:title, :about, :cover, :rating, NOW())";
        $result = $this->connect()->prepare($query);
        $result->execute($data);
        return $result->rowCount();
    }

    public function update($data = [])
    {
        if (isset($data['cover'])) {
            $query = "UPDATE books SET title = :title, about = :about, cover = :cover, rating = :rating, created_at=NOW() WHERE id = :id";
        } else {
            $query = "UPDATE books SET title = :title, about = :about, rating = :rating, created_at=NOW() WHERE id = :id";
        }
        $result = $this->connect()->prepare($query);
        $result->execute($data);
        return $result->rowCount();
    }

    public function delete($id)
    {
        $query = "DELETE FROM books WHERE id = :id";
        $result = $this->connect()->prepare($query);
        $result->execute([
            'id' => $id
        ]);
        return $result->rowCount();
    }
}

$book = new Book();
echo "<pre>";

// print_r($book->index());

// print_r($book->show(1));

// $book->store([
//     'title' => 'New Book Title',
//     'about' => 'New Book About',
//     'cover' => 'img/new-book-cover.jpg',
//     'rating' => 4
// ]);

// $book->update([
//     'id' => 1,
//     'title' => 'Updated Book Title',
//     'about' => 'Updated Book About',
//     'cover' => 'img/book-cover.jpg',
//     'rating' => 4
// ]);

// $book->delete(2);

echo "</pre>";
