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
            "publisher" => "O'Reilly Media, Inc.",
            "author" => "Kathy Sierra",
            "releaseYear" => 2005,
            "purchaseUrl" => "example.com"
          ],
          [
            "name" => "Head First PHP and MySQL",
            "publisher" => "O'Reilly Media, Inc.",
            "author" => "Lynn Beighley",
            "releaseYear" => 2008,
            "purchaseUrl" => "example.com"
          ],
        ];
    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            <li>
                <a href="<?= $book["purchaseUrl"] ?>">
                    <?= $book["name"] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>