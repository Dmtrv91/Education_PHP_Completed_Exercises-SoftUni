<?php

class Student
{
    private $firstName;
    private $lastName;
    private $age;
    private $city;

    public function __contruct($firstName, $lastName, $age, $city){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->city = $city;
    }

    public function getStudentsFirstName(){
        return $this->firstName;
    }
    public function getStudentsLastName(){
        return $this->lastName;
    }
    public function getStudentsAge(){
        return $this->age;
    }
    public function getStudentsCity(){
        return $this->city;
    }
}
$students = [];
$command = readline();

while($command !== "end"){
    $command = explode(" ", $command);
    $firstName = $command[0];
    $lastName = $command[1];
    $city = $command[2];
    $age = $command[3];
    if(!key_exists($firstName, $students) && !key_exists($lastName, $students)){
        $fullName = $firstName . " " . $lastName;
        $params = new Student($firstName, $lastName, $age, $city);
        $students[$fullName] = [];
        $students[$fullName][] = $age;
        $students[$fullName][] = $city;
    }else if(key_exists($firstName, $students) && key_exists($lastName, $students)){
        $fullName = $firstName . " " . $lastName;

        $students[$fullName][] = $age;
        $students[$fullName][] = $city;
    }
    $command = readline();
}
$city = readline();

foreach ($students as $key => $value) {
    if($value[0] === $city){
        echo "$key is $value[1] years old." . PHP_EOL;
    }
}


?>
