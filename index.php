<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: monospace;
        }
    </style>
</head>

<body>

    <h1>Recommended Books</h1>

    <?php
    $books = [
        [
            'name' => "Do Androids Dream of Electric Sheep",
            'author' => "Philip K. Dick",
            'purchaseUrl' => 'https://www.sva.se',
            'releaseYear' => '1968'
        ],
        [
            'name' => "Project Hail Mary",
            'author' => 'Andy Weir',
            'purchaseUrl' => 'https://www.svedea.se',
            'releaseYear' => '2021'
        ],
        [
            'name' => "The Martian",
            'author' => "Andy Weir",
            'purchaseUrl' => 'https://www.svedea.se',
            'releaseYear' => '2011'
        ]
    ];

    // php´s array_filter function.
    function filter($items, $fn)
    {
        $filterdItems = [];

        foreach ($items as $item) {
            if ($fn($item)) {
                $filterdItems[] = $item;
            }
        }

        return $filterdItems;
    }

    $filteredBooks = array_filter($books, function ($book) {
        return $book['releaseYear'] >= 2000;
    });

    ?>

    <p>
        <?php foreach ($filteredBooks as $book) : ?>

            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>

        <?php endforeach ?>
    </p>

</body>

</html>