<?php

class Article
{
    private $title;
    private $content;
    private $author;

    public function __construct($title, $content, $author){
        $this->setTitle($title);
        $this->setContent($content);
        $this->setAuthor($author);
    }
    public function getTitle(){
        return $this->title;
    }
    public function getContent(){
        return $this->content;
    }
    public function getAuthor(){
        return $this->author;
    }
    private function setTitle($title){
        $this->title = $title;
    }
    private function setContent($content){
        $this->content = $content;
    }
    private function setAuthor($author){
        $this->author = $author;
    }
    public function __toString(){
        return $this->getTitle() . " - " . $this->getContent() . ": " . $this->getAuthor();
    }
}

$parts = [];
$articlesCount = intval(readline());

for($i = 0; $i < $articlesCount; $i++){
    $command = explode(", ", readline());
    $title = $command[0];
    $content = $command[1];
    $author = $command[2];
    $article = new Article($title, $content, $author);
    $parts[] = $article;
}

$partOfArticle = readline();

if($partOfArticle === "title"){
    usort($parts, function(Article $article1, Article $article2) use($parts){
        $title1 = $article1->getTitle();
        $title2 = $article2->getTitle();
        return $title1 <=> $title2;
    });
} else if($partOfArticle === "content"){
    usort($parts, function(Article $article1, Article $article2) use($parts){
        $content1 = $article1->getContent();
        $content2 = $article2->getContent();
        return $content1 <=> $content2;
    });
} else if($partOfArticle === "author"){
    usort($parts, function(Article $article1, Article $article2) use($parts){
        $author1 = $article1->getAuthor();
        $author2 = $article2->getAuthor();
        return $author1 <=> $author2;
    });
}

foreach ($parts as $part) {
    echo $part . PHP_EOL;
}

?>