<?php

class Student
{
    private $firstName;
    private $lastName;
    private $age;
    private $city;

    public function __construct($firstName, $lastName, $age, $city)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->city = $city;
    }


    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function __toString()
    {
        return $this->firstName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }


    public function getLastName()
    {
        return $this->lastName;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getCity()
    {
        return $this->city;
    }
}

$command = readline();
$student = [];

while ($command !== 'end'){
    $fields = explode(' ',$command);
    $newStudent = new Student($firstName, $lastName, $age, $city);
    $newStudent->setFirstName($fields[0]);
    $newStudent->setLastName($fields[1]);
    $newStudent->setAge($fields[2]);
    $newStudent->setCity($fields[3]);
    $students[] = $newStudent;

    $command = readline();
}
$city = readline();

foreach ($students as $student) {
    if($city == $student->getCity()){
        echo $student->getFirstName().' '.$student->getLastName().' is '.$student->getAge().' years old.'.PHP_EOL;
    }
}


?>