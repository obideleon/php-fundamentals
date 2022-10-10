<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>

<body>
    <?php
        $books = [
          [
            "name" => "Head First Java, 2nd Edition",
            "author" => "Kathy Sierra",
            "releaseYear" => 2005,
            "purchaseUrl" => "example.com"
          ],
          [
            "name" => "Head First PHP and MySQL",
            "author" => "Lynn Beighley",
            "releaseYear" => 2008,
            "purchaseUrl" => "example.com"
          ],
          [
            "name" => "Head First EJB",
            "author" => "Kathy Sierra",
            "releaseYear" => 2003,
            "purchaseUrl" => "example.com"
          ],
        ];

        function filterByAuthor($books, $author)
        {
            $filteredBooks = [];

            foreach ($books as $book) {
                if ($book['author'] === $author) {
                    $filteredBooks[] = $book;
                }
            }

            return $filteredBooks;
        }
    ?>

    <ul>
        <?php foreach (filterByAuthor($books, 'Kathy Sierra') as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>