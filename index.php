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

require "index.view.php";