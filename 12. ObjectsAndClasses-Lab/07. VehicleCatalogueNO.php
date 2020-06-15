<?php

class Cars
{
    private $brand;
    private $model;
    private $horsePower;

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand): void
    {
        $this->brand = $brand;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model): void
    {
        $this->model = $model;
    }

    public function getHorsePower()
    {
        return $this->horsePower;
    }

    public function setHorsePower($horsePower): void
    {
        $this->horsePower = $horsePower;
    }
}

class Trucks
{
    private $brand;
    private $model;
    private $weight;

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand): void
    {
        $this->brand = $brand;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model): void
    {
        $this->model = $model;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight): void
    {
        $this->weight = $weight;
    }
}

$input = readline();
$cars = [];
$trucks = [];

$i = explode('/', $input);

while ($input !== 'end') {
    if ($i[0] == 'Car') {
        $car = new Cars();
        $car->setBrand($i[1]);
        $car->setModel($i[2]);
        $car->setHorsePower($i[3]);
        $cars[] = $car;
    } elseif ($i[0] == 'Truck') {
        $truck = new Trucks();
        $truck->setBrand($i[1]);
        $truck->setModel($i[2]);
        $truck->setWeight($i[3]);
        $trucks[] = $truck;
    }

    $input = readline();

    $i = explode('/', $input);
}

function sortCars($a, $b)
{
    return ($a->getBrand() > $b->getBrand());
}

usort($cars, "sortCars");

function sortTrucks($a, $b)
{
    return ($a->getBrand() > $b->getBrand());
}

usort($trucks, "sortTrucks");

if (count($cars) > 0) {
    echo 'Cars:' . PHP_EOL;
    foreach ($cars as $value) {
        printf('%s: %s - %dhp', $value->getBrand(), $value->getModel(), $value->getHorsePower());
        echo PHP_EOL;
    }
}
if (count($trucks) > 0) {
    echo 'Trucks:' . PHP_EOL;
    foreach ($trucks as $value) {
        printf('%s: %s - %dkg', $value->getBrand(), $value->getModel(), $value->getWeight());
        echo PHP_EOL;
    }
}

?>