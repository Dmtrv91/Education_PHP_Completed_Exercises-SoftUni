<?php


class Person
{
    private $name;
    private $id;
    private $age;

    public function __construct($name, $id, $age)
    {
        $this->name = $name;
        $this->id = $id;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

     function setName($name)
    {
        $this->name = $name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

     function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }
}

$people = [];
$input = readline();
while ($input !== "End"){
    $arg = explode(" ", $input);
    $name = $arg[0];
    $id = $arg[1];
    $age = intval($arg[2]);
    $person = new Person($name, $id, $age);
    $people [] = $person;

    $input = readline();
}

usort($people, function (Person $p1, Person $p2){
    $age1 = $p1->getAge();
    $age2 = $p2->getAge();
    return $age1 <=> $age2;
});

foreach ($people as $person){
    $name = $person->getName();
    $id = $person->getId();
    $age = $person->getAge();
    echo "$name with ID: $id is $age years old.".PHP_EOL;
}

?>