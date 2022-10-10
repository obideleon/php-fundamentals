<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
    <h1>Books</h1>

    <?php
        $books = [
            "Head First Java",
            "Head First PHP and MySQL",
            "Java How to Program"
        ];
    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>