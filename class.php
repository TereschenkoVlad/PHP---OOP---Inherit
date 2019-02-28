<?php

abstract class Car {
    public $mark;
    public $model;
    private $typeWheels;
    private $engine;

    public function __construct($mark, $model, $typeWheels, $engine) {
        $this->mark = $mark;
        $this->model = $model;
        $this->typeWheels = $typeWheels;
        $this->engine = $engine;
    }


    public function getTypeWheels() {
        return $this->typeWheels;
    }
    public function getEngine() {
        return $this->engine;
    }

    public function setTypeWheels($typeWheels) {
        return $this->typeWheels = $typeWheels;
    }
    public function setEngine($engine) {
        return $this->engine = $engine;
    }

    abstract protected function createCar();
}

class Jeep extends Car {

    private $drive;
    public $color;

    public function __construct( $jeepMark, $jeepModel, $jeepTypeWheels = 'R18', $jeepEngine = 'v8', $drive = 'front_and_rear') {
        parent::__construct($mark = $jeepMark, $model = $jeepModel, $typeWheels = $jeepTypeWheels, $engine = $jeepEngine);
        $this->drive = $drive;
    }

    public function getDrive() {
        $this->drive;
    }

    public function setDrive($drive) {
        $this->drive = $drive;
    }

    public function createCar() {
        if ($this->getTypeWheels() >= 'R18' && $this->getEngine() >= 'v8') {
            return; // create a big car
        }
    }
}

class Bus extends Car {

    private $sitSeats;

    public function __construct($sitSeats, $busMark, $busModel, $busTypeWheels = 'R15', $busEngine = 'v6') {
        parent::__construct($mark = $busMark, $model = $busModel, $typeWheels = $busTypeWheels, $engine = $busEngine);
        $this->sitSeats = $sitSeats;
    }

    public function getSitSeats() {
        $this->sitSeats;
    }

    public function setSitSeats($sitSeats) {
        $this->sitSeats = $sitSeats;
    }

    public function createCar() {
        // create a bus
    }
}

class LightCar extends Car {

    private $drive;
    public $color;

    public function __construct($lightMark, $lightModel, $lightTypeWheels = 'R14', $lightEngine = 'v6', $drive = 'front') {
        parent::__construct($mark = $lightMark, $model = $lightModel, $typeWheels = $lightTypeWheels, $engine = $lightEngine);
        $this->drive = $drive;
    }

    public function getDrive() {
        $this->drive;
    }

    public function setDrive($drive) {
        $this->drive = $drive;
    }

    public function createCar() {
        // create a light car
    }
}

$mitPajero = new Jeep('Mitsubishi', 'Pajero');
$mitPajero->color = 'black';
$mitPajero->setEngine('v8');


echo "<pre>";
var_dump($mitPajero);
echo "</pre>";

$bmwM5 = new LightCar('BMW', 'M5','front');
$bmwM5->color = 'darkred';

echo "<pre>";
var_dump($bmwM5);
echo "</pre>";

$bohdanBus = new Bus(15,'Bohdan', 'Rocket');

echo "<pre>";
var_dump($bohdanBus);
echo "</pre>";
