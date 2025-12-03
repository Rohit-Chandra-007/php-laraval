<?php
$books = [
        [
                "title"  => "Learning PHP, MySQL & JavaScript (7th Edition)",
                "author" => "Robin Nixon",
                "year"   => 2025,
                "link"   => "https://www.oreilly.com/library/view/learning-php-mysql/9781098152345/"
        ],
        [
                "title"  => "PHP & MySQL: Novice to Ninja (7th Edition)",
                "author" => "Tom Butler",
                "year"   => 2022,
                "link"   => "https://www.sitepoint.com/premium/books/php-mysql-novice-to-ninja-7th-edition"
        ],
        [
                "title"  => "PHP & MySQL: Server-side Web Development",
                "author" => "Jon Duckett",
                "year"   => 2022,
                "link"   => "https://www.wiley.com/en-us/PHP+%26+MySQL%3A+Server+side+Web+Development-p-9781119149217"
        ],
        [
                "title"  => "Programming PHP (4th Edition)",
                "author" => "Kevin Tatroe & Peter MacIntyre",
                "year"   => 2020,
                "link"   => "https://www.oreilly.com/library/view/programming-php-4th/9781492054122/"
        ],
        [
                "title"  => "Modern PHP: New Features and Good Practices",
                "author" => "Josh Lockhart",
                "year"   => 2015,
                "link"   => "https://www.oreilly.com/library/view/modern-php/9781491905005/"
        ]
];

function filter($items,$fn)
{
    $filterItems = [];
    foreach ($items as $item) {
        if ($fn($item)) {
            $filterItems[] = $item;
        }
    }

    return $filterItems;
}
$filterBooks = filter($books,function ($book){
    return $book['year'] < 2025;
});

require 'index.view.php';