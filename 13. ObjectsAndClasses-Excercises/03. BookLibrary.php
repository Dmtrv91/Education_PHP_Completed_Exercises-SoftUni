<?php

class Book
{
    private $title;
    private $author;
    private $publisher;
    private $date;
    private $isbn;
    private $price;

    public function __construct ($title, $author, $publisher, $date, $isbn, $price)
    {
        $this->title = $title;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->date = $date;
        $this->isbn = $isbn;
        $this->price = $price;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

$n = readline();
$listOfBooks = [];
$libraryList = [];

for ($i = 0; $i < $n; $i++) {
    $input = explode(" ", readline());
    $title = $input[0];
    $author = $input[1];
    $publisher = $input[2];
    $date = $input[3];
    $isbn = $input[4];
    $price = $input[5];

    $book = new Book($title, $author, $publisher, $date, $isbn, $price);
    $listOfBooks[] = $book;
}

foreach ($listOfBooks as $value) {
    $author = $value->getAuthor();
    $price = $value->getPrice();

    if(!key_exists($author, $libraryList)) {
        $libraryList[$author] = 0;
    }
    $libraryList[$author] += $price;
}

uksort($libraryList, function ($a, $b) use ($libraryList) {
    if ($libraryList[$a] < $libraryList[$b]) return 1;
    elseif ($libraryList[$a] > $libraryList[$b]) return -1;
    else return strcmp($a, $b);
});

foreach ($libraryList as $key => $value) {
    echo $key . " -> " . number_format($value, 2, ".", "") . PHP_EOL;
}

?>