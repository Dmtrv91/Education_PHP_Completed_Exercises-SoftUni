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
    public function setTitle($title){
        $this->title = $title;
    }
    public function setContent($content){
        $this->content = $content;
    }
    public function setAuthor($author){
        $this->author = $author;
    }
    public function __toString(){
        return $this->getTitle() . " - " . $this->getContent() . ": " . $this->getAuthor();
    }
}

$array = explode(", ", readline());
$oldTitle = $array[0];
$oldContent = $array[1];
$oldAuthor = $array[2];
$currentArticle = new Article($oldTitle, $oldContent, $oldAuthor);
$commandsCount = intval(readline());

for($i = 0; $i < $commandsCount; $i++){
    $command = explode(": ", readline());
    $commandType = $command[0];
    $parameter = $command[1];
    if($commandType === "Edit"){
        $currentArticle->setContent($parameter);
    } else if($commandType === "ChangeAuthor"){
        $currentArticle->setAuthor($parameter);
    } else if($commandType === "Rename"){
        $currentArticle->setTitle($parameter);
    } else{
        continue;
    }
}
echo $currentArticle . PHP_EOL;


?>