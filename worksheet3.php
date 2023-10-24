<?php
    class Car
    {
        public $model;
        public $color;
        public static $wheels = 4;

        protected $price;

        function __construct($model, $color, $price)
        {
            $this->model = $model;
            $this->color = $color;
            $this->price = $price;
        }

        // Q1
        // function set_model($pModel)
        // {
        //     $this->model = $pModel;
        // }

        // function set_color($pColor)
        // {
        //     $this->color = $pColor;
        // }

        // function set_price($pPrice)
        // {
        //     $this->price = $pPrice;
        // }

        function get_model()
        {
            return $this->model;
        }

        function get_color()
        {
            return $this->color;
        }

        function get_price()
        {
            return $this->price;
        }

        static function get_wheels()
        {
            return self::$wheels;
        }
    }

    Class ElectricCar Extends Car
    {
        protected $batteryCapacity;

        public static function Question()
        {
            echo "Am I a real car?";
        }

        function __construct($model, $color, $price, $batteryCapacity)
        {
            parent::__construct($model, $color, $price);
            $this->batteryCapacity = $batteryCapacity;
        }

        function get_batterycapacity()
        {
            return $this->batteryCapacity;
        }
    }

    //  Q1
    // $ferrari = new Car("ferrari", "red", 20000);
    // $lambo = new Car("lamborghini", "yellow", 30000);

    // $ferrari->set_model("ferrari");
    // $ferrari->set_color("red");

    // $lambo = new Car();
    // $lambo->set_model("lamborghini");
    // $lambo->set_color("yellow");

    // echo $ferrari->get_model();
    // echo $ferrari->get_color();
    // echo $lambo->get_model();
    // echo $lambo->get_color();

            
    // Q2
    // $Porsche = new Car("Porsche", "Black", 90000);

    // echo $Porsche->get_model();
    // echo "\n";
    // echo $Porsche->get_color();
    // echo "\n";
    // echo $Porsche->get_price();
    // echo "\n";
    // echo $Porsche::get_wheels();

    // Q3
    $Tesla = new ElectricCar("Tesla", "White", 120000, "50kWh");

    echo $Tesla->get_model();
    echo "\n";
    echo $Tesla->get_color();
    echo "\n";
    echo $Tesla->get_price();
    echo "\n";
    echo $Tesla::get_wheels();
    echo "\n";
    echo $Tesla->get_batterycapacity();
    echo "\n";
    $Tesla::Question();
    echo "\n";
?>